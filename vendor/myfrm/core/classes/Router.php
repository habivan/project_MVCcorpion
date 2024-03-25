<?php 

namespace myfrm;

class Router {
  
  protected $routers = [];
  protected $uri;
  protected $method;

  public function __construct(){
    $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
    $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
  }

  public function match(){
    $matches = false;
    foreach($this->routers as $route){
      if($route['uri'] === $this->uri and in_array($this->method, $route['method']) ){
        if($route['middleware']){
          $middleware = MIDDLEWARE[$route['middleware']] ?? null;
          if(!$middleware){
            throw new \Exception("incorrect middleware {$route['middleware']}");
          }
          (new $middleware)->handle();
        }
        // if($route['middleware'] === 'gust'){
        //   if(check_auth()){
        //     redirect('/');
        //   }
        // }
        // if($route['middleware'] === 'auth'){
        //   if(!check_auth()){
        //     redirect('/register');
        //   }
        // }

        require_once CONTROLLERS . "/{$route['controller']}";
        $matches = true;
        break;
      }
    }
    if(!$matches){
      abort();
    }
  }

  public function only($middleware){
    $this->routers[count($this->routers)-1]['middleware'] = $middleware;
    return $this;
  }

  public function add($uri, $controller, $method){
    if(is_array($method)){
      $method = array_map('strtoupper', $method);    
    }else{
      $method = [$method];
    }
    $this->routers[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
      'middleware' => null,
    ];
    return $this;
  }

  public function get($uri, $controller){
    return $this->add($uri, $controller, 'GET');
  }
  public function post($uri, $controller){
    return $this->add($uri, $controller, 'POST');
  }
  public function delete($uri, $controller){
    return $this->add($uri, $controller, 'DELETE');
  }

}