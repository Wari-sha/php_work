<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="second.php" method="server">
        <label for="">name</label>
        <input type="text" name="name"><br><br>
        <label for="">email</label>
        <input type="email" name="email"><br><br>
        <input type="submit" name="save">
    </form>

    <form action="second.php" method="post">
        <label for="">name</label>
        <input type="text" name="name"><br><br>
        <label for="">email</label>
        <input type="email" name="email"><br><br>
        <input type="submit" name="save">
    </form>
</body>
</html>