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