<!DOCTYPE html>
<html>
<head>
    <title>Josefs Bild Uppgift</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="gallery">
        <?php
        $images = glob("bilder/*.{jpg,png,gif}", GLOB_BRACE);
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt="Bilder">';
        }
        ?>
    </div>
</body>
</html>