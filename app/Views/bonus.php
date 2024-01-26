<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> Users table </h2>
<table>

    <?php foreach ($users as $user) : ?>
        <tr>
            <td> <?= $user["name"] ?>  </td>
            <td> <?= $user["email"] ?>  </td>
        </tr>

    <?php endforeach; ?>
</table>
<footer>
    Copyright 2020 - <?= date("Y") ?>
</footer>
</body>
</html>


