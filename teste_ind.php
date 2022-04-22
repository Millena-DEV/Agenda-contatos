<?php

include './agenda/conectar.php';

$buscar_cadastros = "select * from contatos";
$query_cadastros = pg_query($con, $buscar_cadastros);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Listar contatos </title>
    <!-- Metatags obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./components/styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>
    <div class='container'>
        <a href="./View/Modules/Cliente/FormCliente.php" target=""><button class="new">Novo</button></a>
        <table id="tabela">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>E-mail secundário</th>
                    <th>Telefone</th>
                    <th>Telefone secundário</th>
                    <th>Excluir</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
<!--  -->
                <?php

                while ($receber_cadastros = pg_fetch_array($query_cadastros)) {
                    $cod = $receber_cadastros['cod'];
                    $nome = $receber_cadastros['nome'];
                    $email = $receber_cadastros['email'];
                    $email2 = $receber_cadastros['email2'];
                    $telefone = $receber_cadastros['telefone'];
                    $telefone2 = $receber_cadastros['telefone2'];
                ?>

                    <tr>
                        <td scope="row"><?php echo $cod; ?></td>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $email2; ?></td>
                        <td><?php echo $telefone; ?></td>
                        <td><?php echo $telefone2; ?></td>
                        <td>
                            <form action="excluirModal.php" method="post">
                                <a href=""></a>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                            </form>
                        </td>


                        <td>
                            <form action="formEditar.php" method="post">
                                <input type="hidden" name="cod" value="<?php echo $cod; ?>">
                                <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                                <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">
                                <input type="hidden" name="telefone2" value="<?php echo $telefone2; ?>">
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <input type="hidden" name="email2" value="<?php echo $email2; ?>">
                                <a href="formEditar.php"> <button type="submit"><i class='bx bx-edit-alt bx-sm'></i></button> </a>
                            </form>
                        </td>
                    </tr>

                <?php }; ?>
                <!-- parar o while -->



            </tbody>
        </table>
    </div>

    </body>

</html>