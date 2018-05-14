<?php
class LoginService
 {
    
    
    private function openDb() {
        if (!mysql_connect("127.0.0.1:3307", "root", "")) {
       
            throw new Exception("Connection to the database server failed!");
        }
 
        if (!mysql_select_db("studentmanagement")) {
            throw new Exception("No mvc-crud database found on database server.");
        }
    }
    
    private function closeDb() {
        mysql_close();
    }
    
 public function dologin($name, $password ) {
    // echo "service call";
       try {
     //echo $name,$password;
        $namedata= ($name != NULL)?"'".mysql_real_escape_string($name)."'":'NULL';
       $passworddata = ($password != NULL)?"'".mysql_real_escape_string($password)."'":'NULL';
   // $usertypedata = ($typeofuser != NULL)?"'".mysql_real_escape_string($typeofuser)."'":'NULL';
      //echo $namedata,$passworddata,$typeofuser;
      $this->openDb();
 $rs=mysql_query("SELECT * FROM users WHERE username=$namedata AND password=$passworddata");
  $count = mysql_num_rows($rs);
  if($count == 1) {
      $result = mysql_query("SELECT * FROM users WHERE username =$namedata");
    //Found the user
    $row = mysql_fetch_array($result);
$type=$row[3];
//echo $type;
    //Results can be accessed like $row['username'] and $row['Email']
} else {
   echo "something went wrong";
}
         $this->closeDb();
        // echo $count;
         return array($count,$type);
         
        } catch (Exception $e) {

            throw $e;
        }
    }
 }
     
?>