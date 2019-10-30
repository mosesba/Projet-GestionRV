<?php
require_once "dbconnect.php" ;

if (isset($_POST["login"])) {
 if(empty($_POST["email"]) || (empty($_POST["passwd"]))) {       
         $message='<center><div class="alert alert-warning">Login Error!!</div></center>';

                } else {
                    $query="SELECT * FROM secretaire
                    WHERE email= :email AND passwd = :passwd ";
                    $statement=$conn->prepare($query);
                    $statement->execute(
                        array(
                            'email' => $_POST['email'],
                            'passwd' => $_POST['passwd'],
                    ) );
                    $count=$statement->rowCount();
                    if($count > 0) {
                        $_SESSION["email"] = $_POST["email"];
                        header("location:homesecretaire.php");
                    }

                }

}


?>