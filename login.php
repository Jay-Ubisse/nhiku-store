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
    <title>Entrar - Nhiku Vendas</title>
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
                $query = "SELECT * FROM customers
                    WHERE email_address like '" . $_POST['email'] . "' " .
                    "AND password like (PASSWORD('" . $_POST['password'] . "'))";
                $result = $dbcon->query($query);
        
                if($result->num_rows > 0) {
                    $_SESSION['login'] = $result->fetch_array(MYSQLI_ASSOC);;
                    header("location: index.php");
                } else {
                    echo "<div class='failedbox'><h4 class='loginfailed'>Email ou palavra-passe invalido! Tente de novo.</h4></div>";
                }
            }
            
        ?>
        <form action="login.php" method="post" id="signup">
            <table border="0" cellspacing="1" cellpadding="3">
                <tr>
                    <td><label>Email Aaddress:</label></td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td><label>Password:</label></td>
                    <td><input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td colspan=2 align="center"><input type="submit" name="submit" value="Entrar" class="button "></td>
                </tr>
            </table>
        </form>
    </main>

</body>

</html>