<?php

namespace Routes;
class Web{

    public function loadRoutes($router){
    // Pages without post
    $router->get('/Libracium/public/home',['app\Controllers\HomeCon', 'Home']);
 
    }


}

?>