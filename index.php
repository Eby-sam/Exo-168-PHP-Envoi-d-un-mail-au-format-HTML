<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'j.conan@fondationface.org',
    'coquelet.samuel@gmail.com'
];

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                si ça marche pas je hurle
                sinon ba je hurle pas :)
            </div>
        </body>
    </html>
';


$headers = array(
    "Reply-To" => "coquelet.samuel@gmail.com",
    "X-Mailer" => "PHP/".phpversion(),
    "Mime-Version" => "1.0",
    "Content-type" => "text/html; charset=utf-8"
);
mail((string)$to, "test", $html, $headers, "-f coquelet.samuel@gmail.com");





