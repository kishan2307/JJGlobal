<?php require 'Db.php'; ?>
<?php
mysql_set_charset('utf8');
$db = new Db();
?>

<?php
function utf8_encode_all($dat) // -- It returns $dat encoded to UTF8 
{ 
  if (is_string($dat)) return utf8_encode($dat); 
  if (!is_array($dat)) return $dat; 
  $ret = array(); 
  foreach($dat as $i=>$d) $ret[$i] = utf8_encode_all($d); 
  return $ret; 
} 
/* ....... */ 

function utf8_decode_all($dat) // -- It returns $dat decoded from UTF8 
{ 
  if (is_string($dat)) return utf8_decode($dat); 
  if (!is_array($dat)) return $dat; 
  $ret = array(); 
  foreach($dat as $i=>$d) $ret[$i] = utf8_decode_all($d); 
  return $ret; 
} 

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
        $rows=  utf8_encode_all($rows);
        $rt=  utf8_decode_all(json_encode($rows,JSON_HEX_APOS));
        echo $rt;      
    } else if ($_GET["type"] == "contact" && $_GET["mode"] == "insert") {
        $name = $db->quote($_GET['name']);
        $phone = $db->quote($_GET['phone']);
        $message = $db->quote($_GET['message']);
        $email = $db->quote($_GET['email']);
        $result = $db->query("INSERT INTO `jjglobal`.`contactus` (`id`,`name`,`phone`,`email`,`message`) VALUES (NULL," . $name . "," . $phone . "," . $email . "," . $message . ")");
        echo json_encode($result);
    } else if ($_GET["type"] == "products") {
        $rows = $db->select("SELECT * FROM `products`");
        $rows=  utf8_encode_all($rows);
        $rt=  utf8_decode_all(json_encode($rows,JSON_HEX_APOS));
        echo $rt;        
    }else if ($_GET["type"] == "products_spe" && !empty($_GET["id"])) {
        $pd = $_GET["id"];
        $rows = $db->select("SELECT ps.`id`,ps.`name`,ps.`type`,ps.`product_cat`,`info`.`description`,`info`.`data` FROM `products` ps INNER JOIN `product_spe` info ON ps.`id`=`info`.`product_id` WHERE `product_id`=" . $pd);
        $rows=  utf8_encode_all($rows);
        $rt=  utf8_decode_all(json_encode($rows,JSON_HEX_APOS));
        echo $rt;
        echo $rt;
    } else if($_GET["type"] == "all" && !empty($_GET["id"])){
        $pcd = $_GET["id"];
        $rows = $db->select("SELECT * FROM `product_spe` WHERE `product_id` IN (SELECT id FROM `products` WHERE `product_cat`=".$pcd.")");
        $rows=  utf8_encode_all($rows);
        $rt=  utf8_decode_all(json_encode($rows,JSON_HEX_APOS));
        echo $rt;
    }else {
        echo "request fail";
    }
}
?>