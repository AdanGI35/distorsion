<?php

class PageController {
    public function __construct() {}

    public function home(): void {
        $route = "home";
        require "templates/layout.phtml";
    }

    public function p404(): void {
        $route = "404";
        require "templates/layout.phtml";
    }
    
    public function about(): void {
        $route = "a-propos";
        require "templates/layout.phtml";
    }
    
    public function salon(): void {
        $route = "salon";
        require "templates/layout.phtml";
    }
    
    public function categories(): void {
        $route = "categories";
        require "templates/layout.phtml";
    }
    
    public function message(): void {
        $route = "message";
        require "templates/layout.phtml";
    }
}
?>
