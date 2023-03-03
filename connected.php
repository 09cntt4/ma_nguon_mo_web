<?php
// định nghĩa các hằng kết nối
$servername="localhost";
$username="root";   
$password="";
try{
    $conn =new PDO("mysql:host=$servername;dbname=cartoy",$username,$password);

    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
}
catch(PDOException $e){
    echo "Chưa thể kết nối" .$e ->getMessage();
}
?>