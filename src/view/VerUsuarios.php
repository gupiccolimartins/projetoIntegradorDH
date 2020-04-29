<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste MySQL</title>
</head>

<body>
    <h1>
        Lista de Usuarios
    </h1>
    <article>
        <h2>Query utilizado:</h2>
        <p>
            create database projeto;
            use projeto;

            CREATE TABLE `usuarios` (
            `usuario_id` smallint(5) UNSIGNED NOT NULL,
            `primeiro_nome` varchar(45) NOT NULL,
            `ultimo_nome` varchar(45) NOT NULL,
            `email` varchar(50) DEFAULT NULL,
            `senha` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
            `ultima_atualizacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


            INSERT INTO `usuarios` ( `primeiro_nome`, `ultimo_nome`, `email`, `senha`, `ultima_atualizacao`) VALUES
            ( 'Mike', 'Hillyer', 'Mike.Hillyer@sakilastaff.com', 'abcd123', '2020-02-15 06:57:16'),
            ( 'Jon', 'Stephens', 'Jon.Stephens@sakilastaff.com', 'abcd123', '2020-02-15 06:57:16');

        </p>
    </article>
    <article>
        <table>
            <thead>
                <tr>
                    <td>ID Usuario</td>
                    <td>Nome Usuario</td>
                    <td>Senha</td>
                </tr>
            </thead>
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
            </tbody>
        </table>


</body>

</html>