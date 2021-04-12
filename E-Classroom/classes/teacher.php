<?php 

include 'dbcon.php';


class Teacher extends Dbh{

    public $sql;
    public $connection;
    public $table = 'teacher_info';


    function save($table,$values){ 

        //sql statement
        $sql = "INSERT INTO ". $this->table ." ("  ;
        $sql .= implode(",",array_keys($values)) .') VALUES (';
        $sql .= "'" . implode("','", array_values($values)) . "')";

        //sql statement query
        $stmt = $this->connection()->prepare($sql);

        //execution of function
        $stmt->execute($values);

        // var_dump($stmt);

    }

    function Login($username,$password){

      if(!empty($username) ?? !empty($password)){

        $sql = $this->connection()->prepare("SELECT * FROM teacher_info WHERE username=? and password=?");
        $sql->bindparam(1, $username);
        $sql->bindparam(2, $password);
        $sql->execute();

        if($sql->rowCount() == 1){

            $_SESSION['success'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            header("location:../home.php");
        }else{

            $_SESSION['failed'] = 'Incorrect Username/Password';
            header("location:../index.php");
        }

      
      }

    }

    function verify($username){

        $stmt = $this->connection()->prepare("SELECT * FROM teacher_info WHERE username=?");
        $stmt->execute([$username]); 
        $user = $stmt->fetch();
        $counter1 = 0;


        foreach($user as $index => $value ){
            $counter1++;
              if(count($user) <= $counter1){
                  $_SESSION['id'] = $user['id'];
                  $_SESSION['firstname'] = $user['firstname'];
                  $_SESSION['middlename'] = $user['middlename'];
                  $_SESSION['lastname'] = $user['lastname'];
                  $_SESSION['gender'] = $user['gender'];
                  $_SESSION['address'] = $user['address'];
                  $_SESSION['date_joined'] = $user['date_joined'];
             
            
                  // echo $user['username'];
                  // echo $user['password'];

                  // header("location:../home.php");
            }
        }
        
    }

    function createClassroom($values){

        $sql = " INSERT INTO classroom ("  ;
        $sql .= implode(",",array_keys($values)) .') VALUES (';
        $sql .= "'" . implode("','", array_values($values)) . "')";

        //sql statement query
        $stmt = $this->connection()->prepare($sql);

        //execution of function
        $stmt->execute($values);
        var_dump($sql);
        var_dump($stmt);


    }
    
}





?>