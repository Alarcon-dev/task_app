<?php

class Enrrouter
{
    public function __construct()
    {
        try {
            $url = $this->getCleanUrl();
            $className = isset($url[0]) && !empty($url[0]) ? $url[0] . "Controller" : "HomeController";
            $methodName = isset($url[1]) && !empty($url[1]) ? $url[1] : "index";

            $fileName = __DIR__ . "/../controller/$className.php";

            if (file_exists($fileName)) {
                require_once  __DIR__ . "/../controller/$className.php";
                if (class_exists($className)) {
                    $controller = new $className;
                } else {
                    throw new Exception("Error: la página que buscas no existe");
                }

                if (method_exists($controller, $methodName)) {
                    ob_start();
                    $controller->$methodName();
                    $content = ob_get_clean();
                    require_once __DIR__ . "/../views/layouts/header.php";
                    echo $content;
                    require_once __DIR__ . "/../views/layouts/footer.php";
                } else {
                    throw new Exception("Error: la página que buscas no existe");
                }
            } else {
                throw new Exception("Error: nulo");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getCleanUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "";
        $url = filter_var($url, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        return explode("/", $url);
    }
}
