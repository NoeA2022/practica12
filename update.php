<?php 

    require_once("conexion.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserMail = $_POST['mail'];
        $UserClave = md5($_POST['password']);

$query = " update users set username = '".$UserName."', email='".$UserMail."',password='".$UserClave."' where id='".$UserID."'";

        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Por favor revise su consulta  ';
        }
    }
    else
    {
        header("location:view.php");
    }
?>



