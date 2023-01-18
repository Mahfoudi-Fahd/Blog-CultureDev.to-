<?php
// session_start();

define('DB_USER','root');
 define('DB_PASSWORD','');
 define('DB_HOST','localhost');
 define('DB_NAME','culturedev');
 
 session_start();



class Connection{
    protected $pdo;
    function __construct($user = DB_USER, $password = DB_PASSWORD, $host = DB_HOST, $dbname = DB_NAME)
    {
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);


        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    function getDb(){
        return $this->pdo;
    }

    function __destruct()
    {
        if ($this->pdo !== null) {$this->pdo = null;} //return false to close the connection
    }
}


// class Connection{
//   public $host = "localhost";
//   public $user = "root";
//   public $password = "";
//   public $db_name = "culturedev";
//   public $conn;

//   public function __construct(){
//     $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
//   }
// }

class Register extends Connection{

  public function registration($username, $email, $password, $confirmpassword){
    try {
        // $duplicate = $this->pdo->prepare("SELECT * FROM admin WHERE username = '$username' OR email = '$email'");
        // $duplicate->execute();
        // $result = $duplicate->fetchAll();
        // return $result;

        // if(isset($result)) {
        //     return 10;
        // }
        // else {
            
        if($password == $confirmpassword){
          $stm = $this->pdo->prepare("INSERT INTO admin(username,email , password ) VALUES(?,?,?)");
          $stm->execute([$username,$email,$password]);
          return 1;
              // Registration successful
              }
              else{
                return 100;
              // Password does not match
              }
            }
        // }
     catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  
}


class Login extends Connection{
  public $id;
  public function login($username, $password){
    try {
            $query =("SELECT * FROM admin WHERE username ='$username' LIMIT 1");
            $stm = $this->pdo->prepare($query);
            $stm->execute();
            $result = $stm->fetch(pdo::FETCH_ASSOC);
// var_dump($result);
            if($password == $result["password"]){
              $this->id = $result["id"];
              return 1;
              // Login successful
            }
            else{
              return 10;
              // Wrong password
            }

        } catch (PDOException $e) {
            "Erreur" . $e->getMessage();
        }

    // else{
    //   return 100;
    //   // User not registered
    // }
  }
  
  public function idUser(){
    return $this->id;
  }
}

class Select extends Connection{
  public function selectUserById($id){
try{
  $query ="SELECT * FROM admin WHERE id = $id";
            $stm = $this->pdo->prepare($query);
            $stm->execute();
            $result = $stm->fetchall(pdo::FETCH_ASSOC);
            return $result;
}
catch(PDOException $e) {
  "Erreur" . $e->getMessage();
}

}
}