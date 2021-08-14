<?php

require "dataconnect.php";



   function merge($firstname , $lastname ,$dob ,$gender, $religion ,$present, $permanent,  $tel ,$email,  $username ,$password){
       $conn =connect();
    $sql = $conn->prepare('INSERT INTO users (firstname, lastname ,dob ,gender ,religion ,present ,permanent  ,tel ,email  ,username ,password ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $sql->bind_param('sssssssssss',$firstname , $lastname ,$dob ,$gender, $religion ,$present, $permanent,  $tel ,$email,  $username ,$password);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

?>