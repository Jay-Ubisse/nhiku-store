<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se - Nhiku vendas</title>
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/signup.css">
    <link rel="stylesheet" href="./styles/errors.css">
    <script src="./scripts/js/jquery-3.6.0.js"></script>
    <script src="./scripts/js/jquery.validate.js"></script>
    <script src="./scripts/js/signup.js"></script>
</head>
<body>
    <header>
        <?php
            include "./components/header.php";
        ?>
    </header>
    <main>
        <form action="./scripts/php/addcustomer.php" method="post" id="signup">
            <h1>Por favor, introduza a sua informacao.</h1>
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td><label for="email">Email</label></td><td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Palara-passe</label></td><td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="repassword">Re-introduza a palavra-passe</label></td><td><input type="password" name="repassword"></td>
                </tr>
                <tr>
                    <td><label for="name">Nome completo</label></td><td><input type="text" name="name" size="40"></td>
                </tr>
                <tr>
                    <td><label for="address1">Endereco</label></td><td><input type="text" name="address1" size="80"></td>
                </tr>
                <tr>
                    <td><label for="addrees2">Informacoes adicionais do endereco</label></td><td><input type="text" name="address2" size="80"></td>
                </tr>
                <tr>
                    <td><label for="city">Provincia</label></td><td><input type="text" name="city" size="30"></td>
                </tr>
                <tr>
                    <td><label for="province">Cidade</label></td><td><input type="text" name="province" size="30"></td>
                </tr>
                <tr>
                    <td><label for="phone">Celular</label></td><td><input type="tel" name="phone" class="disabled" size="4" value="+258" disabled><input type="tel" name="phone" size="15"></td>
                </tr>
            </table>
            <div>
                <input type="submit" value="Submeter">
                <input type="reset" value="Cancelar">
            <div>
        </form>
    </main>
</body>
</html>