<?php

function connect(){
    $conn = new mysqli("localhost","Rafin","","wtk");
if($conn->connect_errno){
    die("Failed To Connect");
   
}
return $conn;

}




?>