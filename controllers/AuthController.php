<?php

class AuthController {
    
    public function __construct() {
        
    }

    public function checkForCategories() : void {
        $categories = new Categories(); //Managers
        
        if(isset($_POST['categories-submit'])) {
            $categories->createCategories($_POST);
            
            $newCategory = new Category($_POST['categories']); //Model
            
            if($newCategory->getId() !== null) {
                $_SESSION["categories"] = $newCategory;
                header("Location: index.php?route=home");
            } else {
                header("Location: index.php?route=home");
            }
        }
    }
    
    public function checkForSalon() : void {
        $salon = new Salons();
        
        if(isset($_POST['salon-submit'])) {
            
            $salon->createSalon($_POST);
            
            
            $newSalon = new Salon($_POST['name-salon']); //Model
            
            
            if($newSalon->getId() !== null) {
                
                $_SESSION["salon"] = $newSalon;
                header("Location: index.php?route=home");
            } else {

                header("Location: index.php?route=home");
            }
        }
    }
    
    public function checkForMessage() : void{
        $message = new Message(); //Managers
        
        if(isset($_POST['message-submit'])){
            
            $message->sendMessage($_POST);
            
            $newMessage = new Messages($_POST['message'], $_POST['DateTime'],$_POST['idForSalon'], $_POST['idForCategories']); //Model
            
            if($newMessage->getId() !== null){
                $_SESSION['message'] = $newMessage;
                
                 header("Location: index.php?route=home");
            } else {

                header("Location: index.php?route=home");
            }
        }
    }
    
}


?>
