<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>

    <body>
        <pre>
        <?php

        define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
        require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
        // var_dump($_SERVER);
        // $url=substr($_SERVER["REQUEST_URI"],7);
        // echo $url;
        $app = new Core\Core();
        //$app->run();
        $app->runDynamic();
        ?>
        </pre>
    </body>
</html>