<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
</head>

<body>

<?php


?>

    <form action="" method="post">

    <div class="container">

            <h2>Formulaire de contact</h2>


        <label for="email">Votre adresse mail
            <input type="text" name="adresseMail" id="email" value="<?=$email;?>">
        </label><br>
        
        <!-- <div class="form-group">
            <label for="mail">Votre adresse mail</label>
            <input type="email" name = "adresseMail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div> -->

        <label for="suejt">Sujet
            <input type="text" name="sujet" id="sujet">
        </label>


        <div class="form-group">
            <label for="message">Laissez nous un message</label>
            <textarea name = "textMessage" class="form-control" id="message" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>
    </div>
<?php


var_dump ($_POST['adresseMail']);

if (false == filter_var($_POST['adresseMail'], FILTER_VALIDATE_EMAIL)) {
    exit('Cet email n\'est pas valide');
}




?>


    
</body>
</html>





<!-- <form action="" method="post">
    <label for="mail">Email
        <input type="email" name="email" id="mail">
    </label>
    <label for="mail">Sujet
        <input type="text" name="sujet" id="sujet">
    </label>
    <label for="message">Message
        <textarea name="message" id="message" cols="20" rows="5"></textarea>
    </label>
</form> -->