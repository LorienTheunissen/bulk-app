<?php
	require_once("bootstrap.php");

	if ( !empty($_POST) ) {
        $user = new User();
        
        if ( $user->validFirstName($_POST['firstName']) === true ){
            //valid first name
        } else {
            $error = "Ongeldige naam";
        }

        if ( $user->validLastName($_POST['lastName']) === true ){
            //valid last name
        } else {
            $error = "Ongeldige naam";
        }

        if ( $user->availableEmail($user->getEmail()) ) {
            // Email ready to use
            if ( $user->validEmail($_POST['email']) === true ){
                // valid email
            } else {
                $error = "Ongeldige email";
            }
        } else {
            $error = "Email al in gebruik";
        }

        if ($user->validatePassword($_POST['password'], $_POST['passwordConfirmation']) === true) {
            // passwords match
        } else {
            $error = "Paswoorden zijn niet gelijk";
        }

        if ( !isset($error) ) {
            $user->setFirstName($_POST['firstName']);
            $user->setLastName($_POST['lastName']);
            $user->setRegion($_POST['region']);
            $user->setEmail($_POST['email']);
            $user->setTel($_POST['tel']);
            $user->setPassword($_POST['password']);
            $user->setPasswordConfirmation($_POST['passwordConfirmation']);
            
            if($user->register()) {
                header('Location: login');
            }
        }
    } else {
        $error = "Velden zijn verplicht.";
    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>BULK - Registreren</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<div class="register">
    <aside>
        <div class="logo">
            <a href="index.php"><img alt="logo" src="images/logo/BULK_logo_white_slogan.svg"></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <form action="index.php">
                <input class="button-outline" placeholder="Terug naar Startpagina" type="submit"
                       value="Terug naar Startpagina">
            </form>
            <form action="login.php">
                <input class="button-line" placeholder="Inloggen" type="submit" value="Inloggen">
            </form>
        </div>
    </aside>
    <main>
        <div>
            <h1>Maak een account aan</h1>
            <!--
            <div class="social">
                <span><img alt="facebook" src="images/icons/BULK_icon_social_Facebook.png"></span>
                <span><img alt="google" src="images/icons/BULK_icon_social_Google.png"></span>
            </div>
            <h3>of gebruik je e-mailadres</h3>
            -->
        </div>
        <div class="form-register">
            <form action="" method="POST">
                <input placeholder="Voornaam" type="text" name="firstName">
                <input placeholder="Naam" type="text" name="lastName">
                <input placeholder="E-mailadres" type="email" name="email">
                <input placeholder="Postcode" type="text" name="region">
                <input placeholder="Telefoonnummer (Optioneel)" type="text" name="tel">
                <input placeholder="Wachtwoord" type="password" name="password">
                <input placeholder="Bevestig wachtwoord" type="password" name="passwordConfirmation">
                <input placeholder="Registreer" type="submit" value="Registreer">
            </form>
            <?php if (isset($error)): ?>
                <p id="error">
                    <?php echo $error; ?>
                </p>
            <?php endif; ?>
        </div>
    </main>
</div>
</body>
</html>