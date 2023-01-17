<?php 
include "bd.php";
 if(isset($_POST["login"])){
if(!empty($_POST["username"])&& !empty($_POST["password"])){
    $username_admin=$_POST["username"];
    $password_admin=$_POST["password"];
    $sth =$my_con->prepare('SELECT nom_ad , mot_pass_ad 
    FROM administrateur
    WHERE nom_ad=? AND mot_pass_ad=?');
$sth->execute(array($username_admin,$password_admin));
if($sth->rowCount()>0){
 session_start();
 $_SESSION["username"]=$username_admin;
 $_SESSION["password"]=$password_admin;
 header("location:espace_admin.php");

}else{
    $username_prof=$_POST["username"];
    $password_prof=$_POST["password"];
    $sthh =$my_con->prepare('SELECT nom_prof,mot_pass 
    FROM professeur
    WHERE nom_prof=? AND mot_pass=?');
$sthh->execute(array($username_prof,$password_prof));
echo  $sthh->rowCount();
if($sthh->rowCount()>0){
 session_start();
 $_SESSION["username"]=$username_prof;
 $_SESSION["password"]=$password_prof;
 header("location:espace_professeur.php");
}

}
 }
else{

}

 }else{

 }
 ?>