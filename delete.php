<?php 
        require_once("conexion.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from users where id = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Por favor verifique la consulta ';
            }
        }
        else
        {
            header("location:view.php");
        }
?>

