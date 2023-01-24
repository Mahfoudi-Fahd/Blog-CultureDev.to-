<?php


include 'db.php';



class Register extends Connection{

  public function registration($username, $email, $password, $confirmpassword){
    try {
        $duplicate = $this->pdo->prepare("SELECT * FROM admin WHERE username = '$username' OR email = '$email'");
        $duplicate->execute();
        $result = $duplicate->fetchAll();
        // return $result;
// die(var_dump($result));
        if(!empty($result)) {
            return 10;
        }
        else {
            
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
        }
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
            $result = $stm->fetch(pdo::FETCH_ASSOC);
            return $result;
}
catch(PDOException $e) {
  "Erreur" . $e->getMessage();
}

}
}