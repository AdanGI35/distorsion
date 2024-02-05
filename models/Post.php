<?php 

class Post{
    private ? int $id = null;
    
    public function __construct(private string $post, private string $date){
    }

    public function getId() : ? int {
        return $this->id;
    }
    public function setId(? int $id) : void{
        $this->id = $id;
    }
    
    public function getPost() : string{
        return $this->post;
    }
    public function setPost(string $post) : void{
        $this->post = $post;
    }
    
    public function getDate() : DateTime{
        return $this->date;
    }
    public function setDate(DateTime $date) : void{
        $this->date = $date;
    }
    
}
?>