<?php
/**
 * Created by PhpStorm.
 * User: kabelo
 * Date: 2017/01/02
 * Time: 3:28 AM
 */

namespace Services\Router;


class Router
{
 public static function parse($uri)
 {
     $routes = require_once dirname(__DIR__).'/routes.php';
     $uri = ltrim($uri,'/');
     $uri = trim($uri," ");

     if(empty($uri)){
         require_once dirname(__DIR__).'/Controllers/FrontController.php';
         $actions['index']();

     }else{
         $shards = explode('/',$uri);
         $uri2 = implode('/',[$shards[0],$shards[1]]);
         if(true){
             if(!isset($routes[$uri2])){
                 http_response_code(404);
                 require_once dirname(__DIR__). '/Views/404.php';
                 
             }else{

                 require_once dirname(__DIR__).'/Controllers/'.ucwords($routes[$uri2]).'.php';
                 $req = [];
                 dump($_POST);
                 if(count($shards) > 2){
                    for($i = 2; $i < count($shards);$i++){
                        $req[] = $shards[$i];
                    }
                 }

                 $actions[$shards[1]]($req);
             }
         }

     }

//     if()
 }
}