<?php

class Router {
    public function __construct() {}

    public function handleRequest(array $get)
    {
        $controller = new PageController();
        $ac = new AuthController();
        
        // Récupérer la route depuis le tableau $get
        $route = isset($get['route']) ? $get['route'] : '';

        switch ($route) {
            case 'categories':
                $controller->categories();
                break;
            case 'home':
                $controller->home();
                break;
            case 'message':
                $controller->message();
                break;
            case 'salon':
                $controller->salon();
                break;
            case 'a-propos':
                $controller->about();
                break;
            case 'check-categories':
                $ac->checkForCategories();
                break;
            case 'check-salon':
                $ac->checkForSalon();
                break;
            case 'check-message':
                $ac->checkForMessage();
                break;
            case '404':
                $controller->p404();
                break;
            default:
                $controller->home();
                break;
        }
    }
}
