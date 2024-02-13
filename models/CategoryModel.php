<?php 

class Category{
    
    private ? int $id = null;
    
    public function __construct(private string $category){
        
    }
    
    public function getId() : ? int {
        return $this->id;
    }
    public function setId(? int $id) : void{
        $this->id = $id;
    }
    
    public function getCategories() : string{
        return $this->category;
    }
    public function setCategories(string $category) : void{
        $this->category = $category;
    }
}

?>