<?php

class Salons extends AbstractManager {
    public function __construct(){
        parent::__construct();
    }
    
    public function getAllSalons() : array {
        $query = $this->db->prepare("SELECT * FROM salon");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSalonsByCategoryId(int $categoryId): array {
        $query = $this->db->prepare("SELECT * FROM salon WHERE id_categories = :categoryId");
        $query->bindParam(":categoryId", $categoryId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function createSalon(array $post) : void {
        $query = $this->db->prepare("INSERT INTO salon (id, salon, id_categories) VALUES(null, :salon, :id_categories)");
        $parameters = [
            'id_categories' => $post['categoriesId'], 
            'salon' => $post['name-salon'] 
        ];
        $query->execute($parameters);
    }
}

?>

