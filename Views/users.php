<?php
require_once '../DB/DBConnection.php';

$users = listUsers($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>

<body>
    <h1>Lista de usuários</h1>

    <table>
        <thead>
            <th>User</th>
            <th>E-mail</th>
            <th>Projetos</th>
        </thead>

        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user["username"] ?></td>
                    <td><?php echo $user["email"] ?></td>
                    <td>Link para projetos</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>