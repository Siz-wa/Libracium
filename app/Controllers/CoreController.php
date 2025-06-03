<?php
namespace App\Controllers;
abstract class CoreController{

    public function __construct(){
        
    }

    public function renderLayout($View, $data = []){
        include_once __DIR__.'/../Views/Layouts/genLayout.php';
       
}}
?>