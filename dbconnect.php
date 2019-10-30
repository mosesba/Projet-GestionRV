<?php 
/** 
 * Data base connect
 * connection a la base de donnees par la methode PDO
 * version php 7
 * 
 * @
 */

     $server = "127.0.0.1";
     $user = "root";
     $pass = "";
     $dbname = "rv_gestion";
    /** 
     * Data base connect
     * connection a la base de donnees par la methode PDO
     * version php 7
     * 
     * @return PDO connection to data base
     */
   

        try {
            $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
            // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              //echo "Connected successfully"; 
              //echo "<script>alert('succes!');</script>";
    
        }  catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            //  echo "<script>alert('failed to connect!');</script>";
        }



   
    


/*
$base = new Dbconnect;
$base -> connect()


    
    // insert data into database
     $sql = "INSERT INTO `medecin` (`id_medecin`, `prenom`, `nom`, `email`, `telephone`, `specialite`, `id_service`, `id_plage`) 
     VALUES (NULL, 'Moussa', 'Ba', 'mbbcristia@gmail.com', '771221002', 'odontologie', '1', '1')";
    // use exec() because no results are returned
     $count=$conn->exec($sql);
    //var_dump($count)
    echo "<script>alert('Success!');</script>";


*/
        

 
    
?> 