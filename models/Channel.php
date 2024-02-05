<?php 

class Channel{
    
    private ? int $id = null;
    
    public function __construct(private string $channel){
        
    }
    
    public function getId() : ? int {
        return $this->id;
    }
    public function setId(? int $id) : void{
        $this->id = $id;
    }
    
    public function getChannel() : string{
        return $this->channel;
    }
    public function setChannel(string $channel) : void{
        $this->channel = $channel;
    }
    
}

?>