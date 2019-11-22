<?php

if (isset($_POST["login"])) {
 if(empty($_POST["email"]) || (empty($_POST["passwd"]))) {       
         $message='<center><div class="alert alert-warning">Login Error!!</div></center>';

                } else {

                    $email= $_POST['email'];
                    $passwd= $_POST['passwd'];
                    if($email == 'admin@admin.com' && $passwd == 'admin') {
                        $_SESSION['email'] = $email;
                        header ('location:admedecin.php');

                    }


                }

}


?>