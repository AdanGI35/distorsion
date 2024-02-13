<?php 

class Salon{
    
    private ? int $id = null;
    
    public function __construct(private string $salon){
        
    }
    
    public function getId() : ? int {
        return $this->id;
    }
    public function setId(? int $id) : void{
        $this->id = $id;
    }
    
    public function getSalon() : string{
        return $this->salon;
    }
    public function setSalon(string $salon) : void{
        $this->salon = $salon;
    }
    
}

?>