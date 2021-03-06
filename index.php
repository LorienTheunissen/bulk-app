<?php

session_start();

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Welkom bij BULK!</title>
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<div class="intro">
    <nav>
        <div class="logo">
            <a href="index"><img alt="logo" src="images/logo/BULK_logo_white_slogan.svg"></a>
        </div>
        <div class="index-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#how">Hoe werkt het?</a></li>
                <li><a href="#why">Waarom BULK?</a></li>
                <li>
                    <form action="login">
                        <input class="button-outline" placeholder="Inloggen" type="submit" value="Inloggen">
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="home">
        <h1>Groepsaankopen <br> in de buurt</h1>
        <p class="lead">BULK is een online platform voor lokale verdelers en inwoners die het verkoopproces
            vergemakkelijkt</p>
    </div>
</div>
<div class="how">
    <div class="left"></div>
    <div class="right">
        <div class="title">
            <h2>Hoe werkt het?</h2>
        </div>
        <div class="list">
            <ol>
                <li>Maak een gratis account aan en start je zoektocht naar lokale
                    producten.
                </li>
                <li>Koop de gewenste hoeveelheid van een product naar keuze.</li>
                <li>Betaal veilig op voorhand met ons ingebouwde betaalsysteem.</li>
                <li>Haal je product af bij de leverancier waarbij je het aangekocht hebt.</li>
            </ol>
        </div>
    </div>
</div>
<div class="users">
    <div class="title">
        <h2>Soorten gebruikers</h2>
    </div>
    <div class="articles">
        <article>
            <h3>Deelnemer</h3>
            <p>Koopt producten aan bij leveranciers als individu of via een publieke of private verdeler.</p>
            <div class="user user_customer"></div>
        </article>
        <article>
            <h3>Verdeler</h3>
            <p>Koopt producten aan bij leveranciers en verdeelt deze onder deelnemende individuele kopers.</p>
            <div class="user user_distributor"></div>
        </article>
        <article>
            <h3>Leverancier</h3>
            <p>Verkoopt zijn verse producten in de buurt voor een eerlijke prijs via het platform van BULK.</p>
            <div class="user user_supplier"></div>
        </article>
    </div>
</div>
<div class="why">
    <div class="left">
        <div class="title">
            <h2>Waarom?</h2>
        </div>
        <p>Recht van bij de boer</p>
        <p>Verse producten</p>
        <p>Eerlijke prijs</p>
        <p>Logistieke administratie</p>
        <p>Lokale producten</p>
    </div>
    <div class="right"></div>
</div>
<div class="footer">

</div>
</body>
</html>