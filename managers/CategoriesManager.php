<?php

class Categories extends AbstractManager {
    public function __construct(){
        parent::__construct();
    }
    
    public function getAllCategories() : array {
        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function createCategories(array $post) : void {
        $query = $this->db->prepare("INSERT INTO categories (id, categories) VALUES(null, :categories)");
        $parameters= [
            'categories' => $post['categories'] 
        ];
        $query->execute($parameters);
    }

}

?>

