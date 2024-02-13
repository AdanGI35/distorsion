<?php

class HomeManager {
    public function __construct(){}
    
    public function listCategoriesAndSalon() : string {
        // Afficher la liste des catégories et de leurs salons respectifs
        $categoryManager = new Categories();
        $allCategories = $categoryManager->getAllCategories();
        $listCategoryAndSalon = ''; 
        
        foreach ($allCategories as $category) {
            $listCategoryAndSalon .= "<div class='category'>
                <p>{$category['categories']}</p>";
            
            $salonManager = new Salons();
            $allSalons = $salonManager->getSalonsByCategoryId($category['id']);
            
            // Formulaire pour ajouter un salon
            $listCategoryAndSalon .= "<form action='' method='POST' class='addCategory-form'>
                    <input type='hidden' value='{$category['id']}' name='categoryId'/>
                    <button type='submit' name='addSalon-submit' id='btn'>+</button>
                </form>";
            foreach ($allSalons as $salon) {
                
                $listCategoryAndSalon .= "<div class='salon'>
                    <form action='' method='POST' class='salons'> 
                        <input type='hidden' value='{$salon['salon']}' name='salonName' />
                        <input type='hidden' value='{$salon['id']}' name='salonId' />
                        <button type='submit' name='salonForMessage-submit'>{$salon['salon']}</button> 
                    </form>
                </div>"; 
            }

            $listCategoryAndSalon .= "</div>";
        }
        return $listCategoryAndSalon;
    }
    
    public function listMessage() : string {
        $messageManager = new Message();
        $allMessages = $messageManager->getAllMessages();
        
        $messageHtml = '';  // Initialisation de la chaîne qui contiendra le HTML des messages
        
        foreach ($allMessages as $messages) {
            $messageHtml .= '<p>[' . $messages['date'] . '] : ' . $messages['messages'] . '</p>';
        }
        
        return $messageHtml;  // Retourne la chaîne complète des messages HTML
    }


}

?>


