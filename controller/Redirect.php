<?php
class Redirect {
    
 public function handleRequest() {
         
      $action = isset($_GET['action'])?$_GET['action']:NULL;
         try {
             if ( !$action ) {
                 $this->dashboardController->index();
             } elseif ( $action == 'login' ) {
               
                 $this->userController->handleRequest();
             } elseif ( $action == 'delete' ) {
                 $this->deleteContact();
             } elseif ( $action == 'show' ) {
                 $this->showContact();
             } else {
                 $this->showError("Page not found", "Page for operation ".$action." was not found!");
             }
         } catch ( Exception $e ) {
             
             $this->showError("Application error", $e->getMessage());
         }
 }
}
?>