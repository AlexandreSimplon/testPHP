<?php
    include_once('app.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    
    <!-- <?php
        echo "<h1>Salut c'est moi, je suis à Béthune</h1>";
        echo '<p>Chris</p>'
    ?> -->



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        
        <?php
            foreach ($table as $key => $value) {
                // var_dump($table);
                echo '<li class="nav-item"><a class="nav-link" href="' . $key . '">' . $value . '</a></li>';
            }
        ?>        
        
    </ul>
    </div>
</nav>


<div class="container">
    <div class="row">
    <?php
        foreach ($blog as $key => $value) {
            echo '<div class="col-sm"><article><h2 class="text-center">' . $key . '</h2><p>' . $value . '</p></article></div>';
        }
        
    ?>
    </div>
</div>


<form action="" method="post">
        <div class="d-block p-2 bg-dark text-white">
            <label for="Nom">Entrer votre Nom</label>
            <input type="text" id="Nom" class="Nom" name="Nom">
        </div>
        <div class="d-block p-2 bg-dark text-white">
            <label for="prenom">prenom</label>
            <input type="text" id="prenom" class="prenom" name="prenom">
        </div>
        <div class="d-block p-2 bg-dark text-white">
            <label for="date">Date de naissance</label>
            <input type="date" id="date" class="date" name="date">
        </div>
        <div class="d-block p-2 bg-dark text-white">
            <label for="email">@ Email</label>
            <input type="email" id="email" class="email" name="email">
        </div>
        <div class="d-block p-2 bg-dark text-white">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" class="password" name="password">
        </div>
        <div class="d-block p-2 bg-dark text-white">
            <label for="password">Confimer votre mot de passe</label>
            <input type="password" id="password2" class="password2" name="password2">
        </div>
        <div class="d-block p-2 bg-dark text-white">
        <button type="submit" id="btn" class="btn btn-primary mb-2">Valider ici</button>
        </div>

        <?php

        $Nom = $_POST['Nom'];
        $Prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $password2 = $_POST['passeword2'];

            echo "<p>J'ai ton Nom : " . $Nom . "</p>";
            echo "<p>J'ai ton Prenom : " . $Prenom . "</p>";
            echo "<p>J'ai ta date de naissance : " . $date . "</p>";
            echo "<p>J'ai ton email : " . $email . "</p>";
            echo "<p>J'ai ton mot de passe : " . $password . "</p>";
            
        ?>


</form>


<link rel="stylesheet" href="css/BootS.min.css">
<Script src="JS/BootS.min.js"></Script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
