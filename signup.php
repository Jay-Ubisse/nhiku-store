
<?php
    require "./scripts/php/db_connection/connect.php";
    session_start();
?>

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
        <?php

            if(isset($_POST['email']) || isset($_POST['password'])) {
                $email_address = $_POST['email'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
                $complete_name = $_POST['name'];
                $address1 = $_POST['address1'];
                $address2 = $_POST['address2'];
                $city = $_POST['city'];
                $province = $_POST['province'];
                $phone = $_POST['phone'];

                $check_email = "SELECT * FROM customers where email_address = '$email_address'";
                $check_result = $dbcon->query($check_email);

                if ($check_result->num_rows > 0) {
                    echo "<div class='failedbox'><h4 class='loginfailed'>Ja existe uma conta cadastrada com esse email. Tente com outro email</h4></div>";
                } else {
                    $insert_query = "INSERT INTO customers (email_address, password, complete_name, address_line1, address_line2, city, 
                    province, phone) VALUES ('$email_address', (PASSWORD('$password')), '$complete_name', '$address1',
                    '$address2','$city', '$province', '$phone')";
                    $insert_result = $dbcon->query($insert_query);

                    if ($insert_result) {
                        echo    "<div class='failedbox'>
                                    <h4 class='loginfailed'>Ola, $complete_name, a sua conta foi criada com sucesso!<br>
                                    <a href='./login.php'>Clique aqui</a> para iniciar sessao.
                                    </h4> 
                                </div>";
                    } else {
                        echo "<div class='failedbox'><h4 class='loginfailed'>Ocorreu um problema. Tente de novo.</h4></div>";
                    }
                }
                $dbcon->close();
            }
            
        ?>

        <form action="signup.php" method="post" id="signup">
            <h1>Por favor, introduza a sua informação.</h1>
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Palara-passe</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="repassword">Re-introduza a palavra-passe</label></td>
                    <td><input type="password" name="repassword"></td>
                </tr>
                <tr>
                    <td><label for="name">Nome completo</label></td>
                    <td><input type="text" name="name" size="40"></td>
                </tr>
                <tr>
                    <td><label for="address1">Endereço</label></td>
                    <td><input type="text" name="address1" size="80"></td>
                </tr>
                <tr>
                    <td><label for="addrees2">Informações adicionais do endereço</label></td>
                    <td><input type="text" name="address2" size="80"></td>
                </tr>
                <tr>
                    <td><label for="city">Provincia</label></td>
                    <td><input type="text" name="city" size="30"></td>
                </tr>
                <tr>
                    <td><label for="province">Cidade</label></td>
                    <td><input type="text" name="province" size="30"></td>
                </tr>
                <tr>
                    <td><label for="phone">Celular</label></td>
                    <td><input type="tel" name="phone" class="disabled" size="4" value="+258" disabled><input type="tel" name="phone" size="15"></td>
                </tr>
            </table>
            <div>
                <input type="submit" value="Submeter" class="button">
                <input type="reset" value="Cancelar" class="button ">
                <div>
        </form>
    </main>
</body>

</html>