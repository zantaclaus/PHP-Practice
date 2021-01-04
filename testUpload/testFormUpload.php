<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload</title>
</head>
<body>
    <form action="save-Upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile" required accept="image/*">
        <button type="submit">Upload</button>
    </form>
</body>
</html>