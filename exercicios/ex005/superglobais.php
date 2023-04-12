<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie('dia-da-semana', 'segunda', time() +3600);

                session_start();
                $_SECTION['teste'] = 'funcionou!';

                echo '<h1>Superglobal $_GET</h1>';
                echo var_dump($_GET);

                echo '<h1>superglobal $_POST</h1>';
                echo var_dump($_POST);

                echo '<h1>Superglobal $_REQUEST</h1>';
                echo var_dump($_REQUEST);

                echo '<h1>Superglobal $_COOKIE</h1>';
                echo var_dump($_COOKIE);

                echo '<h1>Superglobal $_SECTION</h1>';
                echo var_dump($_SECTION);

                echo '<h1>Superglobal $_SERVER</h1>';
                echo var_dump($_SERVER);

                echo 'Superglobal $_globals';
                echo var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>