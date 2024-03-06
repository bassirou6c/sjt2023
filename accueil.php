<?php

// use Sabberworm\CSS\Property\Charset;

// $to = "bassirou6c@gmail.com";
// $subject = "Cours PHP/Mysql";
// $content = "je t'envoie ci-joint le cours de PHP";
// $headers = [
//     "From" => "jeremy@gmail.com",
//     "Cc" => "yanis@yahoo.fr",
//     "Content-Type" => "text/html; Charset utf-8"
// ];
// if(mail("$to", "$subject", "$content", $headers)){
//     echo "mail envoyé";
// }else{
//     echo "message non envoyé<br>";
// };
/*-----------------------------------------------------------------------*/
// //On définit une constante qui contient le chemin de la page index
// define('ROOT', str_replace('index.php', '' , $_SERVER['SCRIPT_FILENAME']));
// //die(ROOT);
// //On observe le contenu de l'url
// //var_dump($_GET);
// //On sépare les parametres
// if(!empty($_GET['p'])){
//     $params = explode('/', $_GET['p']);
// }else{
//     $params[0] = "";
// }
// //var_dump($params);
// //On vérifie si un parametre existe
// if($params[0]!= ""){
//     $controller = ucfirst($params[0]);
//     $action = isset($params[1]) ? $params[1] : "index";
//     require_once(ROOT.'controllers/'.$controller.'.php');
//     //On instancie le controller
//     $controller = new $controller();
//     //On verifie si la methode existe
//     if(method_exists($controller, $action)){
//         $controller->$action();
//     }else{
//         http_response_code(404);
//         echo "<h2>La page demandée n'existe pas</h2>";
//     }
// }else{

// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Accueil</title>
</head>

<body>
<?php
    include "./includes/header.php";
    ?>
    <div class="banniere">
        <img src="./assets/Images/image-formation.jpg" alt="" class="imgban">
        <div class="textban">
            <h1>ACCUEIL</h1>
            <a href="contact.html"><button class="btn">Contactez nous</button></a>
        </div>
    </div>
    <div class="apropos">
        <h2>QUI SOMMES NOUS ?</h2>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit provident suscipit praesentium soluta ullam!
            Accusantium voluptatum quidem quia, alias esse provident optio in voluptas perferendis animi veniam officiis
            quae mollitia eum nostrum facilis harum, eos voluptate suscipit explicabo similique! Eum nobis rem
            praesentium? Atque mollitia optio nulla magni quo eos repudiandae reiciendis blanditiis inventore provident
            minus debitis earum vero soluta excepturi nihil iure quaerat, facilis ullam enim, similique aspernatur error
            quos. Cumque quisquam animi a necessitatibus minima ratione mollitia porro recusandae ex perspiciatis,
            accusantium accusamus blanditiis repudiandae temporibus officia magni tempore? Dolor corrupti voluptatum
            esse ab, praesentium asperiores tempore eaque eligendi, doloribus officia nostrum inventore at in? Quae
            perferendis amet cumque repudiandae dolore facere quas, dicta neque optio! Porro tenetur beatae reiciendis
            facere et aliquid magnam nobis esse blanditiis neque similique vitae quaerat, fuga, maxime suscipit
            molestias necessitatibus non. Asperiores tenetur voluptates minima esse, velit cumque fugiat iste possimus
            aspernatur reiciendis. Numquam, quibusdam expedita, corrupti qui at facere eaque quas neque magni mollitia
            aliquid officia similique dolorum vero architecto voluptatibus enim ab quisquam veniam explicabo corporis
            fugit cum accusamus deleniti? Nesciunt, placeat soluta error pariatur dolore corrupti suscipit, doloremque
            tempora saepe excepturi eius vel nostrum voluptates maiores aperiam corporis perspiciatis?
        </p><br>
    </div>
    <div class="nosform">
        <h2>NOS FORMATIONS</h2>
        <div class="devweb">
            <div class="gauche">
                <img src="./assets/Images/devweb.jpg" alt="" class="imgtext">
            </div>
            <div class="droite">
                <h2>Developpement web</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto suscipit fugiat ex mollitia,
                    voluptate libero, ipsa, similique ab sapiente sequi dolorem. Exercitationem, tenetur quos. Molestias
                    atque quidem ad, impedit id saepe non cumque rem ut maxime quam facere dicta ipsam! Dolores
                    molestiae
                    accusamus est qui itaque velit ad, vel iste?
                </p>
            </div>
        </div>
        <div class="devweb">
            <div class="droite">
                <h2>Graphisme</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto suscipit fugiat ex mollitia,
                    voluptate libero, ipsa, similique ab sapiente sequi dolorem. Exercitationem, tenetur quos. Molestias
                    atque quidem ad, impedit id saepe non cumque rem ut maxime quam facere dicta ipsam! Dolores
                    molestiae
                    accusamus est qui itaque velit ad, vel iste?
                </p>
            </div>
            <div class="gauche">
                <img src="./assets/Images/graphisme.png" alt="" class="imgtext">
            </div>
        </div>
        <div class="devweb">
            <div class="gauche">
                <img src="./assets/Images/marketing.jpg" alt="" class="imgtext">
            </div>
            <div class="droite">
                <h2>Marketing</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto suscipit fugiat ex mollitia,
                    voluptate libero, ipsa, similique ab sapiente sequi dolorem. Exercitationem, tenetur quos. Molestias
                    atque quidem ad, impedit id saepe non cumque rem ut maxime quam facere dicta ipsam! Dolores
                    molestiae
                    accusamus est qui itaque velit ad, vel iste?
                </p>
            </div>
        </div>
    </div><br>
    <?php
    include "./includes/footer.php";
    ?>
</body>

</html>