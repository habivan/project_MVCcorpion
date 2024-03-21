<?php 

namespace myfrm\middleware;

class Gust {

    public function handle(){
    if(check_auth()){
      redirect('/');
    }
  }
}