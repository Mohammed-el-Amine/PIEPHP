<?php
namespace Core;
class Core
{
    public function run()
    {
        require_once('src/routes.php');
        $url = substr($_SERVER["REQUEST_URI"], 7);
        $tab = Router::get($url);
        $class = $tab["controller"] . "Controller";
        require_once("src/Controller/" . $class . ".php");
        $method = $tab["action"];
        $app = new $class;
        $app->$method();
    }
    public function runDynamic()
    {
        $url = substr($_SERVER["REQUEST_URI"], 8);
        $tab = explode("/", $url);

        if ($url == "") {
            $class = "AppController";
            $method = "indexAction";
        }
        elseif (!isset($tab[1])) {
            $class = $tab[0] . "Controller";
            $method = "indexAction";
        }
        else {
            $class = $tab[0] . "Controller";
            $method = $tab[1];
        }


        if (!file_exists("src/Controller/" . $class . ".php")) {
            echo "ERROR 404 : Wrong call, this controller doesn't exist";
        }
        else {
            require_once("src/Controller/" . $class . ".php");

            if ($method == "") {
                $method = "indexAction";
            }
            if (!method_exists($class, $method)) {
                echo "ERROR 404 : Wrong call, this method doesn't exist";
            }
            else {
                $app = new $class;
                $app->$method();
            }
        }
    }
}
?>