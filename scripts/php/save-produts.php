<?php
    require "db_connection/connect.php";

    $upload_dir = SITE_ROOT . "";

    $item_code = trim($_POST["code"]);
    $item_name = trim($_POST["name"]);
    $item_brand = trim($_POST["brand"]);
    $item_model = trim($_POST["model"]);
    $item_weight = trim($_POST["weight"]);
    $item_category = trim($_POST["category"]);
    $item_dimension = trim($_POS["dimension"]);
    $item_description = trim($_POST["description"]);
    $item_quantity = trim($_POST["quantity"]);
    $item_price = trim($_POST["price"]);

?>