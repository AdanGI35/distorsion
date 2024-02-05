<?php

class MessageController {
    private $messageModel;

    public function __construct($messageModel) {
        $this->messageModel = $messageModel;
    }

}