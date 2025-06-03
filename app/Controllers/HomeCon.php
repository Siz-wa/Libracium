<?php
namespace App\Controllers;
use app\Controllers\CoreController;

class HomeCon extends CoreController{

    public function __construct(){
        // Constructor code if needed
    }

    public function Home(){
        $this->renderLayout('Home');
    }

    

}
?>