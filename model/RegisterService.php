<?php
class RegisterService
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
    
 public function createNewUser( $name, $password, $typeofuser ) {
       try {
           $namedata= ($name != NULL)?"'".mysql_real_escape_string($name)."'":'NULL';
           $passworddata = ($password != NULL)?"'".mysql_real_escape_string($password)."'":'NULL';
        $usertypedata = ($typeofuser != NULL)?"'".mysql_real_escape_string($typeofuser)."'":'NULL';
            $this->openDb();
         mysql_query("INSERT INTO users (username, password, type) VALUES ($namedata, $passworddata, $usertypedata)");
          
            $this->closeDb();
            return mysql_insert_id();
        } catch (Exception $e) {

            throw $e;
        }
    }
 }
     
?>