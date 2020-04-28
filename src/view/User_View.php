<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>ID Usuario</td>
                <td>Nome Usuario</td>
                <td>Senha</td>
            </tr>
        <tbody>
            <?php
            foreach($usuarios as $user){
                echo "<tr>";
                echo "<td>".$user['id_usuario']."</td>";
                echo "<td>".$user['primeiro_nome']."</td>";
                echo "<td>".$user['ultimo_nome']."</td>";
                echo "<td>".$user['email']."</td>";
                echo "<td>".$user['senha']."</td>";
                echo "</tr>";
            }

?>

</body>

</html>