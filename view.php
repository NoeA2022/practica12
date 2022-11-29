<?php 
    session_start(); 

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Debes iniciar sesión primero";
        header('location: login.php');
    }
?>

<?php 

    require_once("conexion.php");
    $query = " select * from users ";
    $result = mysqli_query($con,$query);

?>

<?php require_once('header.php'); ?>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> id </td>
                                <td> username </td>
                                <td> email </td>
                                <td> password </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['id'];
                                        $UserName = $row['username'];
                                        $UserMail = $row['email'];
                                        $UserClave = $row['password'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserMail ?></td>
                                        <td><?php echo $UserClave ?></td>

<td><button class="btn-primary btn"><a href="edit.php?GetID=<?php echo $UserID ?>"class="text-white">Edit</a></button></td>

<td><button class="btn-danger btn"><a href="delete.php?Del=<?php echo $UserID ?>"class="text-white">Delete</a></button></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php require_once('footer.php'); ?>





