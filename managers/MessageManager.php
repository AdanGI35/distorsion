<?php 

class Message extends AbstractManager {
    public function __construct(){
        parent::__construct();
    }
    
    public function getAllMessages() : array {
        //Afficher les messages du salon sélectionné, ordonnés par date et heure d'envoi
        $query = $this->db->prepare("SELECT * FROM messages WHERE id_salon = :id_salon");
        $parameters= [
            'id_salon' => $_SESSION['selectedSalonId']
            ];
        $query->execute($parameters);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function sendMessage(array $post) : void{
      // envoyer des message dans un salon 
        $query = $this->db->prepare("INSERT INTO messages (id, messages, date, id_salon, id_categories) VALUES(null, :messages, :date, :id_salon, :id_categories)");
        $parameters = [
            'messages' => $_POST['message'], 
            'date' => $_POST['DateTime'], 
            'id_salon' => $_SESSION['selectedSalonId'], 
            'id_categories' => $_SESSION['selectedCategoryId']
        ];
        $query->execute($parameters);
    }
    
}
?>