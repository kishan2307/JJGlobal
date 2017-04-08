<?php require 'Db.php'; ?>

<?php

$db = new Db();
?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["type"])) {
        echo "please enter type";
    } else {
        
    }
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["type"])) {
        echo "please enter type";
    } else if ($_GET["type"] == "profile") {
        $rows = $db->select("SELECT * FROM `profile`");
        echo json_encode($rows);
    } else if ($_GET["type"] == "contact" && $_GET["mode"] == "insert") {
        $name = $db->quote($_GET['name']);
        $phone = $db->quote($_GET['phone']);
        $message = $db->quote($_GET['message']);
        $email = $db->quote($_GET['email']);

        $result = $db->query("INSERT INTO `jjglobal`.`contactus` (`id`,`name`,`phone`,`email`,`message`) VALUES (NULL," . $name . "," . $phone . "," . $email . "," . $message . ")");

        echo json_encode($result);
    } else if ($_GET["type"] == "products") {
        $rows = $db->select("SELECT * FROM `products`");
        echo json_encode($rows);
    }else if ($_GET["type"] == "products_spe" && !empty($_GET["id"])) {
        $pd = $_GET["id"];
        $rows = $db->select("SELECT ps.`id`,ps.`name`,ps.`type`,ps.`product_cat`,`info`.`description`,`info`.`data` FROM `products` ps INNER JOIN `product_spe` info ON ps.`id`=`info`.`product_id` WHERE `product_id`=" . $pd);
        $search = array("\n", "\r", "\u", "\t", "\f", "\b", "/", '"',"'");
        $replace = array("\\n", "\\r", "\\u", "\\t", "\\f", "\\b", "\/", "\"","\'");
        $rt = str_replace($search, $replace, json_encode($rows,JSON_HEX_APOS));        
        echo $rt;
    } else {
        echo "request fail";
    }
}
?>