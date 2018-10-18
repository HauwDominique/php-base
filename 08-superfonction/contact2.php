<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php

$mail = $_POST['adresseMail'];
$sujet = $_POST['sujet'];
$message = $_POST['textMessage'];

var_dump ($mail);
var_dump($sujet);
var_dump($message);

?>
    
<form action="" method="post">

    <label for="email">Votre adresse mail
        <input type="text"  name="adresseMail" id="email">
    </label><br>

    <label for="suejt">Sujet
        <input type="text" name="sujet" id="sujet">
    </label>

    <label for="message">Laissez nous un message</label>
            <textarea name = "textMessage" class="form-control" id="message" rows="3"></textarea>

    <button>Envoyer</button>

 </form>

    <?php

    if (false == filter_var($_POST['adresseMail'], FILTER_VALIDATE_EMAIL)) {
        exit('Cet email n\'est pas valide');
    }

    ?>
    

    </body>
</html>
    



