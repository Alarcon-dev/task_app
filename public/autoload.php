<?php
spl_autoload_register(function ($className) {

    $directories = ['controller', 'models'];
    foreach ($directories as $directorie) {
        if (file_exists("../app/$directorie/$className.php")) {
            require_once "../app/$directorie/$className.php";
        }
    }
});
