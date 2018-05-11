<?php
 require_once 'dashboardController.php';
 require_once 'model/RegisterService.php';
class UserController {
       private $registerService = NULL;
        
    public function __construct() {
        $this->registerService = new RegisterService();
    }
   public function handleRequest() {
   if($_SERVER["REQUEST_METHOD"] == "GET"){
     $method = isset($_GET['method'])?$_GET['method']:NULL;
        try {
            if ( $method=='register' ) {
                $this->register();
            } elseif ( $method == 'login' ) {
                $this->login();
            } 
            elseif ( $method == 'doRegister' ) {
                         echo "do reg";    

                $this->doRegister();
            }else {
                $this->showError("Page not found", "Page for operation ".$method." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
       
   }else
   {
      
       $methodpost = isset($_POST['method'])?$_POST['method']:NULL;
  
         try {
            if ( $methodpost=='register' ) {
              // $this->register();
            } elseif ( $methodpost == 'login' ) {
               // $this->login();
            } 
            elseif ( $methodpost == 'doRegister' ) {
                         //echo "do reg";    

                $this->doRegister();
            }else {
                $this->showError("Page not found", "Page for operation ".$method." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
   }
   }
   public function register() {
      
           include 'view/register.php';
          
      
      
   }
      public function login() {
      
          echo "blah die";die;
          // include 'view/register.php';
          
      
      
   }
    public function doRegister() {
      //print_r($_POST);
          if (isset($_POST['action']) ) {
             $name= isset($_POST['username']) ?   $_POST['username']  :NULL;
       
            $password      = isset($_POST['password'])?   $_POST['password'] :NULL;
          
            $typeofuser      = isset($_POST['typeofuser'])?   $_POST['typeofuser'] :NULL;
       try {
                $this->registerService->createNewUser($name, $password, $typeofuser);
                $this->redirect('index.php');
                return;
            } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }
        }
        
          
        
         // echo "do register";die;
          // include 'view/register.php';
          
      
      
   }
}
?>