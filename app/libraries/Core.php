<?php
/**
 * De Core class is de router van het MVC-framework
 */
class Core 
{
    protected $currentController = 'Homepages'; // Default controller
    protected $currentMethod = 'index';         // Default method
    protected $params = [];

    public function __construct()
    {
        $url = $this->getURL();

        // Controller: kijk of het eerste deel van de URL bestaat als controllerbestand
        if (isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        // Controllerbestand inladen
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Controllerklasse aanmaken
        $this->currentController = new $this->currentController();

        // Methode: check of tweede URL-deel bestaat en een methode is
        if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        // De rest zijn parameters
        $this->params = $url ? array_values($url) : [];

        // Voer de methode uit met de parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getURL()
    {
        if (isset($_GET['url'])) {
            // Slashes weghalen en filteren
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        } else {
            // Standaard: homepages/index
            return ['homepages', 'index'];
        }
    }
}
