<?php 

class Messages{
    private ? int $id = null;
    
    public function __construct(private string $message, private string $date, private int $id_salon, private int $id_categories){
    }

    public function getId() : ? int {
        return $this->id;
    }
    public function setId(? int $id) : void{
        $this->id = $id;
    }
    
    public function getMessage() : string{
        return $this->message;
    }
    public function setMessage(string $message) : void{
        $this->message = $message;
    }
    
    public function getDate() : string{
        return $this->date;
    }
    public function setDate(string $date) : void{
        $this->date = $date;
    }
    
    public function getId_salon() :  int {
        return $this->id_salon;
    }
    public function setId_salon( int $id_salon) : void{
        $this->id_salon = $id_salon;
    }
    
    public function getId_categories() :  int {
        return $this->id_categories;
    }
    public function setId_categories( int $id_categories) : void{
        $this->id_categories = $id_categories;
    }
    
}
?>