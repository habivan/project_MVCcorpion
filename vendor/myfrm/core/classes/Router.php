<?php 

namespace myfrm;

class Router {
  
  protected $routers = [];
  protected $uri;
  protected $method;

  public function __construct(){
    $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    $this->method = $_SERVER['REQUEST_METHOD'];
  }

  public function match(){
    $matches = false;
    foreach($this->routers as $route){
      if($route['uri'] === $this->uri and $route['method'] === strtoupper($this->method) ){
        require_once CONTROLLERS . "/{$route['controller']}";
        $matches = true;
        break;
      }
    }
    if(!$matches){
      abort();
    }
  }

  public function add($uri, $controller, $method){
    $this->routers[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
    ];
  }

  public function get($uri, $controller){
    $this->add($uri, $controller, 'GET');
  }
  public function post($uri, $controller){
    $this->add($uri, $controller, 'POST');
  }
  public function delete($uri, $controller){
    $this->add($uri, $controller, 'DELETE');
  }
}