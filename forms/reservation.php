<?php
  if(isset($_POST['sub'])){
    require_once "DB.php";
    $sql = "insert into contact_form(name,email,number,plan,address,message) values(?,?,?,?,?,?)";
    $req = $conn->prepare($sql);
    $req->execute([$_POST['name'],$_POST['email'],$_POST['number'],$_POST['plan'],$_POST['address'],$_POST['message']]);

    return header('location: /jourj1');
  }
?>
