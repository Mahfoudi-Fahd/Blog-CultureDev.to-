<?php
session_start();

class Connection{
  public $host = "localhost";
  public $user = "root";
  public $password = "";
  public $db_name = "culturedev";
  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
  }
}

class Register extends Connection{

  public function registration($username, $email, $password, $confirmpassword){
    try {
        // $image = insertImage($_FILES['file']);
        // $first_team_id  = $_POST['username'];
        // $second_team_id = $_POST['email'];
        // $date           = $_POST['password'];
        // $stadium_id     = $_POST['stadium'];
        if($password == $confirmpassword){
          $stm = $this->conn->prepare("INSERT INTO admin(username,email , password ) VALUES(?,?,?)");
          $stm->execute([$username,$email,$password]);
          return 1;
          //       // Registration successful
              }
              else{
                return 100;
                // Password does not match
              }
        
    } catch (PDOException $e) {
        "Erreur" . $e->getMessage();
    }
  }
  
  // public function registration($username, $email, $password, $confirmpassword){
  //   $duplicate = mysqli_query($this->conn, "SELECT * FROM admin WHERE username = '$username' OR email = '$email'");
  //   if(mysqli_num_rows($duplicate) > 0){
  //     return 10;
  //     // Username or email has already taken
  //   }
  //   else{
  //     if($password == $confirmpassword){
  //       $query = "INSERT INTO admin VALUES('$username', '$email', '$password')";
  //       mysqli_query($this->conn, $query);
  //       return 1;
  //       // Registration successful
  //     }
  //     else{
  //       return 100;
  //       // Password does not match
  //     }
  //   }
  // }
}

// class Login extends Connection{
//   public $id;
//   public function login($usernameemail, $password){
//     $result = mysqli_query($this->conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
//     $row = mysqli_fetch_assoc($result);

//     if(mysqli_num_rows($result) > 0){
//       if($password == $row["password"]){
//         $this->id = $row["id"];
//         return 1;
//         // Login successful
//       }
//       else{
//         return 10;
//         // Wrong password
//       }
//     }
//     else{
//       return 100;
//       // User not registered
//     }
//   }

//   public function idUser(){
//     return $this->id;
//   }
// }

// class Select extends Connection{
//   public function selectUserById($id){
//     $result = mysqli_query($this->conn, "SELECT * FROM tb_user WHERE id = $id");
//     return mysqli_fetch_assoc($result);
//   }
// }