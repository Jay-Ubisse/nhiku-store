<?php
    require "db_connection/connect.php";

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
        echo "Ja existe uma conta cadastrada com esse email. Tente com outro email";
    } else {
        $insert_query = "INSERT INTO customers (email_address, password, complete_name, address_line1, address_line2, city, 
            province, phone) VALUES ('$email_address',(PASSWORD('$password')), '$complete_name', '$address1',
            '$address2','$city', '$province', '$phone')";
        $insert_result = $dbcon->query($insert_query);

        if($insert_result) {
            echo "Ola, $complete_name, a sua conta foi criada com sucesso!";
        } else {
            echo "Occoreu um problema. Tente de novo.";
        }
        
    }
    $dbcon->close();
?>