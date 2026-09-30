<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $uploadedFile = $_FILES['datafile'];
        // print_r($uploadedFile);
        //build the permanent location for the image.
        $filename = basename($uploadedFile['name']);
        echo($filename);
        $destination = __DIR__ . '/uploads' . $filename;
        echo ($destination);
        //move the file out of phph's temporary upload location.
        move_uploaded_file(
            $uploadedFile['tmp_name'],
            $destination
        );
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uploaded Image</title>
</head>

<body>
    <h1>Uploaded Image</h1>

    <?php if ($filename): ?>
        <img
            src="uploads/<?= htmlspecialchars($filename) ?>"
            alt="Uploaded image"
            width="200"    
            >

        <p><?= htmlspecialchars($filename) ?></p>
    <?php else: ?>
        <p>No image has been uploaded.</p>
    <?php endif; ?>

    <p><a href="index.php">Upload another image</a></p>
</body>

</html>