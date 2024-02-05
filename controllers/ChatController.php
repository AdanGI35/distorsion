<?php
class ChatController {
    private $chatModel;

    public function __construct($chatModel) {
        $this->chatModel = $chatModel;
    }

}