<?php
if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $allowed_formats = ["jpg", "png", "gif"];
    $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    if (in_array($file_extension, $allowed_formats)) {
        move_uploaded_file($_FILES["file"]["tmp_name"], "bilder/" . $_FILES["file"]["name"]);
        echo "Filen laddades upp";
    } else {
        echo "Ogiltigt filformat endast jpg, png och gif filer är tillåtna";
    }
} else {
    echo "Fel uppladning av filen";
}
?>