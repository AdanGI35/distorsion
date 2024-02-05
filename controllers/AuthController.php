<?php

class AuthController {
    
    public function __construct() {
        
    }

    public function checkForCategories(): void {
        $categories = new Categories(); 
        
        if (isset($_POST['categories-submit'])) {
            $categories->createCategories($_POST);
            
            $newCategory = new Category($_POST['categories']);
            
            if ($newCategory->getId() !== null) {
                $_SESSION["categories"] = $newCategory;
                header("Location: index.php?route=home");
                exit;
            } else {
                header("Location: index.php?route=home");
                exit;
            }
        }
    }
    
    public function checkForChannel(): void {
        $channel = new Channel();
        
        if (isset($_POST['channel-submit'])) {
            
            $Channel->createChannel($_POST);
            
            $newChannel = new Channel($_POST['name-channel']);
            
            if ($newChannel->getId() !== null) {
                $_SESSION["channel"] = $newChannel;
                header("Location: index.php?route=home");
                exit;
            } else {
                header("Location: index.php?route=home");
                exit;
            }
        }
    }

    public function checkForPost(): void {
        $post = new Post(); 
        
        if (isset($_POST['post-submit'])) {
            
            $post->sendPost($_POST);
            
            $newPost = new Posts($_POST['post'], $_POST['DateTime'], $_POST['idForSalon'], $_POST['idForCategories']); 
            
            if ($newPost->getId() !== null) {
                $_SESSION['Post'] = $newPost;
                header("Location: index.php?route=home");
                exit;
            } else {
                header("Location: index.php?route=home");
                exit;
            }
        }
    }
}
?>
