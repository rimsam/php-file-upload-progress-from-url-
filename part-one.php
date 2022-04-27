<?php
if (isset($_POST["upload"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload From Url</title>
</head>

<body>
    <h1>File Upload From Url</h1>
    <form method="post">
        <input type="text" name="url" placeholder="e.g. http://example.com/example.php"><br />
        <input type="text" name="rename" placeholder="Rename File"><br />
        <input type="submit" name="upload" value="Upload File">
    </form>
</body>

</html>
