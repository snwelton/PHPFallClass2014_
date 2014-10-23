<?php
require_once('database.php');
$category_name = $_POST['categoryName'];

$sql = "insert into categories set categoryName='$category_name'";
                        
$db->exec($sql);
print_r($db->errorInfo());
include('index.php');


?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

