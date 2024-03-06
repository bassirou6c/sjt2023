<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
    <title>Cours PHP</title>
    <style>
        * {
    margin: auto;
    padding: 0;
}

#logo {
    width: 80px;
}

h1 {
    font-size: 2em;
    margin-left: 0;
    text-align: center;
    padding-top: 15px;
}

header {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80px;
    background-color: blueviolet;
}

nav {
    text-align: center;
    margin: 20px 0;
}

ul li {
    background-color: blueviolet;
    width: 50%;
    margin-left: 50%;
    transform: translateX(-50%);
    list-style: none;
    border-top: 2px solid white;
    margin-top: 5px;
}

ul li a {
    font-size: 1.5em;
    color: white;
    text-decoration: none;
}

h2 {
    text-align: center;
    font-size: 1.5em;
    background-color: blueviolet;
}

h3 {
    text-align: center;
    font-size: 1.5em;
    color: blueviolet;
    text-decoration: underline;
}

p {
    text-align: center;
    margin-bottom: 10px;
}

.img1 {
    width: 50%;
    margin-left: 50%;
    transform: translateX(-50%);
}

footer {
    margin-top: 50px;
    height: 100px;
    width: 100%;
    position: fixed;
}



    </style>
</head>

<body>
    <header>
       <!-- <img src="./assets/Images/LOGOPHP.png" alt="" id="logo">-->
        <H1> Cours PHP </H1>
    </header>
    <nav id="sommaire">
        <h2> Sommaire: </h2>
        <ul>
            <li> <a href="#un">1. Introduction </a></li>
            <li> <a href="#deux">2. Syntaxe </a></li>
            <li> <a href="#trois">3. Les variables </a></li>
            <li> <a href="#quatre">4. Les constantes </a></li>
            <li> <a href="#cinq">5. Les instructions d'ecriture </a></li>
            <li> <a href="#six">6. Les opérateurs </a></li>
            <li> <a href="#sept">7. Les conditions </a></li>
            <li> <a href="#huit">8. Les boucles </a></li>
            <li> <a href="#neuf">9. Les tableaux </a></li>
            <li> <a href="#dix">10. Les fonctions </a></li>
            <li> <a href="#onze">11. Les objets </a></li>
            <li> <a href="#douze">12. Les dates </a></li>
            <li> <a href="#treize">13. Les formulaires </a></li>
            <li> <a href="#quatorze">14. Sécurisation </a></li>
            <li> <a href="#quinze">15. require et include (_once) </a></li>
            <li> <a href="#seize">16. Les fichiers </a></li>
            <li> <a href="#dixsept">17. Les sessions </a></li>
            <li> <a href="#dixhuit">18. Les cookies </a></li>

        </ul>
    </nav>
    <main>
        <H2 id="un">1. Introduction:</H2>
        <h3>1.1 Definition:</h3>
        <p>
            <b>PHP</b> (Hypertext Preprocessor) est un langage de script HTML qui s'execute coté serveur et qui permet
            de produire des pages web dynamiques. <br>
            Sa syntaxe est largement inspirée du langage c et Perl avec cependant des améliorations spécifiques. <br>
            Le but de ce langage est de produire des pages web dynamiques.
        </p>
        <h3>1.2 Historique:</h3>
        <p>
            L'origine du PHP remonte à 1995 quand <b>Rasmus Lerdorf</b> a créé PHP/FI (Personal Home Page/forms
            Interpreter), une librairie de scripts Perl utilisées pour la publication de son CV sur son site personnel.
            <br>
            En 1997 PHP/FI 2.0 voit le jour et toujours développé par la seule et meme personne. <br>
            En 1998 c'est la premiere version de PHP développée conjointement par Rasmus Lerdorf, Andi Gutmans et Zeev
            Suraski. c'est la naissance de PHP 3.0 <br>
            A partir de là, des versions de PHP n'ont pas cessé de voir le jour, jusqu'à la version PHP 8.0 développé en
            2020.
        </p>
        <h3>1.3 Fonctionnement page dynamique:</h3>
        <p>
            Une page statique est une page ecrite directement en HTML. Elle peut éventuellement incorporer du Javascript
            lui donnant un semblant de dynamisme(static uniquement coté client). <br>
            Pour des traitements plus lourds nécéssitant l'accès à une base de données, il faut passer par des pages web
            dynamiques donc forcément par un langage qui sera éxécuté coté serveur d'où l'importance du PHP. <br>
        </p>
        <img src="./assets/Images/fonctionphp.png" alt="" class="img1">
        <h3>1.4 Les outils de développement PHP</h3>
        <p>
            Pour développer en PHP tout en respectant les standards <b>W3C</b> nous avons besoin des outils suivants :
            <br>
            - Editeur de code <br>
            - Navigateur Web <br>
            - Serveur Web <br>
            - Serveur de base de données <br>
        </p>
        <H2 id="deux">2. Syntaxe:</H2>
        <h3>2.1 Intégration à HTML:</h3>
        <p>
            Une page php porte l'extension <b>.php</b>. Une page php peut etre entièrement programmé en php ou mélangée
            avec du HTML. <br>
            On peut utiliser le php à n'importe quel endroit de notre html en ulisant les balises &#60;?php et ?> <br>.
            On peut aussi utiliser les balises &#60;script langage="php"> et &#60;/script>. <br>
            Cependant la première syntaxe est préférée de par sa simplicité et sa compatibilité avec le plus grand
            nombre de navigateur. <br>
        </p>
        <h3>2.2 Séparateur d'instructions:</h3>
        <p>
            En php, une instruction se termine par un <b>";"</b> . Notez que la fermeture de la balise php (?>) met fin
            à toutes les instructions en cours. <br>
            <b>Bloc d'instructions : </b> Un bloc d'instructions se place entre des acolades {}, il peut contenir du
            code de n'importe quelle longueur mais chaque instruction composant le bloc fini par un ";".
        </p>
        <h3>2.3 Commentaires:</h3>
        <p>
            Les commentaires en PHP fonctionne comme le JS. <br>
            // permet de faire des commentaires monoligne; <br>
            /*...*/ permet de faire des commentaires mutilignes.
        </p>
        <H2 id="trois">3. Les variables:</H2>
        <h3>3.1 Déclaration de variable:</h3>
        <p>
            Une variable est un conteneur d'information qui peut varier selon les besoins du programmeur. <br>
            Pour déclarer une variable en php, on utilise le <b>"$"</b>nom_de_la_variable. <br>
            Php est sensible à la casse donc $variable est different de $Variable. <br>
            - Le nom d'une variable peut commencer par une lettre ou un underscore. <br>
            - Le nom d'une variable peut contenir des chiffres mais ne doit jamais commencer par un chiffres ou des
            caracteres spéciaux. <br>
            - On préfère utiliser le <b>camelCase</b> pour nommer les variables et les fontions en programmation. <br>
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a>

        </p>
        <h3>3.2 Les types de variable:</h3>
        <p>
            Php est un langage non typé, chaque variable peut prendre n'importe quel type de valeur. Le type de variable
            dépend de la valeur qu'elle contient. <br>
            Php effectue automatiquement le changement de type (transtypage). <br>
            Pour reconnaitre le type d'une variable, on utilise la fonction <b> gettype() </b>. <br>
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a> <br><br>
            <u><b>les types de variables:</b></u> <br>
            <b>- String:</b> chaine de caractère <br>
            <b>- Integer:</b> nombre entier <br>
            <b>- Double ou Float:</b> nombre décimal <br>
            <b>- Boolean:</b> booléen <br>
            <b>- Array:</b> tableau <br>
            <b>- Object:</b> objet <br>
            <b>- Null:</b> null <br>
        </p>
        <h3>3.3 Assignation de valeur:</h3>
        <p>
            Par défaut les variables sont assignées par valeur: la valeur assignnée à la variable est recopiée dans la
            variable. <br>
            En php comme dans la plupart des langages de programmation, on utilise le <b>=</b> pour assigner une valeur
            à une variable. <br>
            <u><b>Assignation par référence</b></u> <br>
            Php fonctionne aussi par référence, une vairiable peut donc référencer une autre variable. On dit alors que
            la variable devient un alias, ou pointe sur une autre variable. <br>
            On assigne par référence en utilisant le <b>&</b> devant la variale assignée. <br>
            Assigner par référence revient à lier les deux variables de façon réciproque, changer la valeur de l'une
            revient à changer la valeur de l'autre automatiquement. <br>
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h3>3.4 La concaténation:</h3>
        <p>
            C'est la combinaison de plusieurs variables quelques soient leurs types. <br>
            En php, on utilise le <b>"."</b> pour concaténer. <br>
            <b><u>Les guillemets et les quotes (apostrophes)</u></b> <br>
            Php offre la possibilité de concaténer avec les guillemets par contre les quotes ne reconnaissent pas les
            valeurs des variables, ils les traitent comme une chaine de caractère. <br>
            <b><u>PS:</u></b> les quotes ne reconnaissent pas les valeurs des variables.
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a> <br>
        </p>
        <h3>3.5 Variables prédéfinies:</h3>
        <p>
            PHP dispose d'un grand nombre de variables prédéfinies. Ces variables sont généralement de type
            scalaires ou des tableaux. Elles sont souvent de type superglobales, c'est à dire accessible depuis
            n'importe où sans notion de portée. Voici quelques tableaux prédéfinis (voir au point Tableaux pour
            comprendre leur utilisation). <br>
            <b>• $_GLOBALS :</b> tableau des variables globales. La clé est le nom de la variable.<br>
            <b>• $_SERVER :</b> variables fournies par le serveur web, par exemple 'SERVER_NAME'<br>
            <b>• $_GET :</b> variables fournies par HTTP par la méthode GET (formulaires)<br>
            <b>• $_POST :</b> idem mais pour la méthode POST<br>
            <b>• $_COOKIE :</b> les variables fournies par un cookie<br>
            <b>• $_FILES :</b> variables sur le téléchargement d'un fichier (upload)<br>
            <b>• $_ENV :</b> accès aux variables d'environnement du serveur<br>
            <b>• $_SESSION :</b> les variables de session (voir cours sur les sessions)<br>
        </p>
        <h3>3.6 Variables dynamiques:</h3>
        <p>
            Une variable dynamique utilise la valeur d'une autre variable comme nom de variable. <br>
            On déclare une variable dynamique en rajoutant un <b>$</b> devant le nom de la première variable. <br>
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <H2 id="quatre">4. Les constantes:</H2>
        <h3>4.1 Définition :</h3>
        <p>
            Une constante est un nom qui prend une valeur qui ne peut plus etre modifiée une fois définie. Autrement
            dit, une constante est comme une variable dont la valeur ne change jamais. <br>
            Une constante n'est accessible qu'en lecture seule, elle est sensible à la casse et doit etre écrite en
            majuscule par convention. <br>
            On définit une constante avec la fonction <b> define() </b> en respectant certaines règles : <br>
            - Une constante ne commence jamais avec un $ <br>
            - Une constante est accessible depuis n'importe quel endroit du code. <br>
            - Une constante ne peut plus etre redéfinit; <br>
            - Une constante ne peut contenir un type boolean . <br>
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h3>4.2 constantes prédéfinies ou constantes magiques :</h3>
        <p>
            Php propose 9 constantes prédéfinies, on les appelle aussi des constantes magiques. <br>
            * <b>_FILE</b> fichier dans lequel on se trouve<br>
            * <b>_LINE</b> ligne sur laquelle on se trouve<br>
            * <b>_DIR </b> dossier dans lequel on se trouve<br>
            * <b>_NAMESPACE</b> Nom de l'espace courant<br>
            * <b>_FUNCTION</b> Nom de la fonction courante<br>
            * <b>_CLASS </b> Nom de la classe courante<br>
            * <b>_METHOD </b> Nom de la methode courante<br>
            * <b>_AUTOLOAD </b> Autochargement<br>
            * <b>_ALT_COMPILER </b> forcer l'arret du compilateur<br>
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <H2 id="cinq">5. Les instructions d'écriture</H2>
        <h3>5.1 Définition :</h3>
        <p>
            Elles sont des instructions prédéfinies qui permettent d'effectuer un affichage sur le navigateur. <br>
            Les instructions <b> echo et print </b> permettent de faire de simples affichages. <br>
            Tandisque les instructions <b>print_r et var_dump </b> permettent d'effectuer des affichages plus
            spécifiques avec plus de détails.
        </p>
        <h3>5.2 liste des instructions :</h3>
        <p>
            * <b> echo </b> permet d'afficher sur le navigateur et ne nécessite pas de parenthèse ; <br>
            * <b> print </b> affiche ue chaine de caractère et ne prend qu'un seul argument contrairement à echo. <br>
            * <b> print_r </b> affiche les informations à propos d'une variable, son type et ses propriétes protégées.
            <br>
            * <b> var_dump </b> fait la meme chose que print_r <br>
            <u><b>Exemples:</b></u> voir <a href="./exemple.php"> exemple.php</a>
        </p>

        <h2 id="six">6.LES OPERATEURS </h2>
        <h3>6.1. Definition</h3>
        <P>Ils permettent d'effectuer des operations sur les variables et leurs valeurs. <br> Ils existe plusieurs types
            d'opérations et d'opérateurs.
        </P>
        <h3>6.2. Operateurs arythmétiques</h3>
        <p>Ils sont utilisés avec des valeurs numériques pour les opérations comme l'addition, la soustraction...</p>
        <table border=1>
            <tr>
                <th>OPERATEURS</th>
                <th>NOM</th>
                <TH>EXEMPLE</TH>
                <TH>RESULTAT</TH>
            </tr>
            <tr>
                <td>+</td>
                <td>Addition</td>
                <td>$a+$b</td>
                <td>somme de a+b</td>
            </tr>
            <tr>
                <td>-</td>
                <td>Soustraction</td>
                <td>$a-$b</td>
                <td>difference de a-b</td>
            </tr>
            <tr>
                <td>*</td>
                <td>Multiplication</td>
                <td>$a*$b</td>
                <td>produit de a*b</td>
            </tr>
            <tr>
                <td>/</td>
                <td>Division</td>
                <td>$a/$b</td>
                <td> division de a/b</td>
            </tr>
            <tr>
                <td>%</td>
                <td>Modulo</td>
                <td>$a%$b</td>
                <td>reste de la division de a/b</td>
            </tr>
            <tr>
                <td>**</td>
                <td>Exposant</td>
                <td>$a**$b</td>
                <td>l'exposant de a par b</td>
            </tr>
        </table>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>

        <h3>6.3. Operateurs d'affectation</h3>
        <p>Ils sont utilisés pour ecrire une valeur dans une variable</p>
        <table border=1>
            <tr>
                <th>OPERATEURS</th>
                <th>DESCRIPTION</th>
                <TH>EXEMPLE</TH>
                <TH>IDEM</TH>
            </tr>
            <tr>
                <td>=</td>
                <td>Affectation simple</td>
                <td>$a=$b</td>
                <td></td>
            </tr>
            <tr>
                <td>+=</td>
                <td>Addition puis affectation</td>
                <td>$a+=$b</td>
                <td>$a=$a+$b</td>
            </tr>
            <tr>
                <td>-=</td>
                <td>Soustraction puis affectation</td>
                <td>$a-=$b</td>
                <td>$a=$a-$b</td>
            </tr>
            <tr>
                <td>*=</td>
                <td>Multiplication puis affectation</td>
                <td>$a*=$b</td>
                <td> $a=$a*$b</td>
            </tr>
            <tr>
                <td>/=</td>
                <td>Division puis affectation</td>
                <td>$a/=$b</td>
                <td>$a=$a/$b</td>
            </tr>
            <tr>
                <td>%=</td>
                <td>Modulo puis affectation</td>
                <td>$a%=$b</td>
                <td>$a=$a%$b</td>
            </tr>
        </table>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>

        <h3>6.4. Operateurs de comparaison</h3>
        <p>Ils sont utilisés pour comparer des valeurs qui peuvent etre des nombres, des chaines de caracteres, des
            booleens, ...</p>
        <table border=1>
            <tr>
                <th>OPERATEURS</th>
                <th>NOM</th>
                <TH>EXEMPLE</TH>
                <TH>RESULTAT</TH>
            </tr>
            <tr>
                <td>==</td>
                <td>egale à</td>
                <td>$a==$b</td>
                <td>compare si a=b et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>===</td>
                <td>identique</td>
                <td>$a===$b</td>
                <td>compare si a et b sont identiques et ont le meme type et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>!=</td>
                <td>non égal</td>
                <td>$a!=$b</td>
                <td>compare si a et b ne sont pas egale et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>
                    <>
                </td>
                <td>different de </td>
                <td>$a<>$b</td>
                <td> compare si a est different de b et return true si c'est le cas </td>
            </tr>
            <tr>
                <td>!==</td>
                <td>non identique</td>
                <td>$a!==$b</td>
                <td>compare si a et b ne sont pas identique et ont le meme type et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>></td>
                <td>superieur à</td>
                <td>$a>$b</td>
                <td>compare si a est superieur à b et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>
                    < </td>
                <td>inferieur à</td>
                <td>$a<$b </td>
                <td>compare si a est inferieur à b et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>>=</td>
                <td>superieur ou égale à</td>
                <td>$a>=$b</td>
                <td>compare si a est supérieur ou égale à b et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>
                    <= </td>
                <td>inferieur ou égale à</td>
                <td>$a<=$b </td>
                <td>compare si a est inferieur ou égale à b et return true si c'est le cas</td>
            </tr>
            <tr>
                <td>
                    <=>
                </td>
                <td>spaceship</td>
                <td>$a<=>$b</td>
                <td>return un entier inferieur, égal ou superieur à zero, selon que a<=>b </td>
            </tr>
        </table>
        <p>L'opérateur <=> propose une comparaison combinée en ce sens qu'il: <br>
                Renvoie 0 si les valeurs des deux côtés sont égales<br>
                Renvoie 1 si la valeur à gauche est supérieure<br>
                Renvoie -1 si la valeur à droite est supérieure<br>
                Les règles utilisées par l'opérateur de comparaison combiné sont les mêmes que les opérateurs de
                comparaison <br>actuellement utilisés par PHP, à savoir. <, <=,==,> = et>.</p>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>

        <h3>6.5. Operateurs logiques </h3>
        <p>Ils permettent de combiner des conditions</p>
        <table border=1>
            <tr>
                <th>OPERATEURS</th>
                <th>NOM</th>
                <TH>EXEMPLE</TH>
                <TH>RESULTAT</TH>
            </tr>
            <tr>
                <td>Et</td>
                <td>And</td>
                <td>(Conditon1) And (condition2)</td>
                <td>true si les 2 conditions sont vérifiées</td>
            </tr>
            <tr>
                <td>Ou</td>
                <td>Or</td>
                <td>(Conditon1) Or (condition2)</td>
                <td>true si une des conditions est vérifiée</td>
            </tr>
            <tr>
                <td>Xor</td>
                <td>Xor</td>
                <td>(Conditon1) Xor (condition2)</td>
                <td>true si une des conditions est vérifiée et non les deux</td>
            </tr>
            <tr>
                <td>&&</td>
                <td>And </td>
                <td>(Conditon1) && (condition2)</td>
                <td> true si les 2 conditions sont vérifiées </td>
            </tr>
            <tr>
                <td>||</td>
                <td>or</td>
                <td>(Conditon1) || (condition2)</td>
                <td>true si une des conditions est vérifiée</td>
            </tr>
            <tr>
                <td>!</td>
                <td>Not</td>
                <td>!(Conditon)</td>
                <td>true si la condition est false</td>
            <tr>

        </table>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>

        <h3>6.6. Operateur d'incrémentation et de décrémentation</h3>
        <p>Ils permettent d'incrémenter ou de décrémenter des variables</p>
        <table border=1>
            <tr>
                <th>OPERATEURS</th>
                <th>NOM</th>
                <TH>DESCRIPTION</TH>
            </tr>
            <tr>
                <td>$i++</td>
                <td>post-incrémentation</td>
                <td>retourne i puis incrémente</td>
            </tr>
            <tr>
                <td>++$i</td>
                <td>pré-incrémentation</td>
                <td>incrémente i puis retourne la nouvelle valeur de i</td>
            </tr>
            <tr>
                <td>$i--</td>
                <td>post-décrémentation</td>
                <td>retourne i puis décrémente i</td>
            </tr>
            <tr>
                <td>--$i</td>
                <td>pré-décrémentation </td>
                <td> décrémente i puis retourne la nouvelle valeur de i</td>
            </tr>

        </table>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>

        <h3>6.7. Operateur de chaines de caracteres</h3>
        <p> ils sont conçus pour les chaines de caracteres et permettent de faire une concaténation et une affectation
        </p>
        <table border=1>
            <tr>
                <th>OPERATEURS</th>
                <th>NOM</th>
                <TH>EXEMPLE</TH>
                <TH>RESULTAT</TH>
            </tr>
            <tr>
                <td>.</td>
                <td>concaténation</td>
                <td>$x.$y</td>
                <td>concaténation de $x et de $y</td>
            </tr>
            <tr>
                <td>.=</td>
                <td>Affectation puis concaténation</td>
                <td>$x.=$y</td>
                <td>Ajoute $y à $x</td>
            </tr>
        </table>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>

        <h3>6.8. Operateur ternaire</h3>
        <p>C'est une abréviation de la condition if. il s'écrit comme suit: (condition)? "resultat if" : "resultat
            else";</p>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        <h2 id="sept">7. Les conditions </h2>
        <h3>7.1. le if else</h3>
        <p>
            l'instruction <b>if</b> exécute une instuction ou un bloc d'instructions si la condition qu'on lui a donnée
            est vraie; <br>
            Si la condition est fausse, il est possible d'utiliser d'autres instructions if. Le if peut donc s'utiliser
            tout seul et à plusieurs reprise si on le souhaite. <br>
            le <b>else</b> est une instruction dépendante de if, il s'exécute si la condition du if est fausse. <br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>7.2. le if elseif else</h3>
        <p>
            le <b>elseif</b>, comme son nom l'indique, est une combinaison du if et du else; il peut s'écrire comme suit
            <b>elseif ou else if</b>. Comme l'instruction else, il s'execute après un if dans le cas ou la condition du
            if est fausse. <br>
            Par contre, à la difference du else, il n'executera les instructions que si la ou les conditions qui lui
            sont alouées sont vraies. <br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>7.3. le switch case</h3>
        <p>
            l'instruction <b>switch</b> évalue une expression et selon le resultat obtenu et le cas associé, exécute
            l'instructions ou le bloc d'instructions correspondantes, sinon execute l'instruction par défaut.<br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h2 id="huit">8. Les boucles </h2>
        <h3>8.1. la boucle for</h3>
        <p>
            l'instruction for crée une boucle composée de trois expressions séparées par un point virgules et encadrées
            par des parentheses, suivi d'une paire d'accolade à l'intérieur desquels nous mettrons l'instruction ou le
            bloc d'instruction à exécuter. <br>
            <b>continue et break</b> sont aussi présent en Php comme nousl'avions vu sur le Javascript (voir cours
            JS).<br>
            <b><u>Syntaxe:</u></b> for(initialisation; condition d'arret; le pas ou incrémentation){
            instructions...}.
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>8.2. la boucle foreach</h3>
        <p>
            La boucle foreach fonctionne qu'avec des tableaux et des objets. Elle parcourt le tableaux en foonction de
            ses indices (clé) et de ses valeurs.<br>
            Elle peut affecter ces deux variables que sont l'indice et la valeurs à deux autres variables définies par
            le programmeur. <br>
            <b><u>Syntaxe:</u></b> foreach($tableau as $cle => $valeur){ instructions...} <br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>8.3. la boucle while</h3>
        <p>
            l'instruction <b>while</b> permet de creer une boucle qui exécute les instructions tant que la condition est
            vraie. <br>
            La condition est évaluée avant l'exécution des instructions contenues dans la boucle.
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>8.4. la boucle Do while</h3>
        <p>
            l'instruction <b>Do while</b> permet de créer une boucle qui exécute une instruction ou un bloc
            d'instructions jusqu'à ce que la condition de test ne soit plus vraie. <br>
            La condition est évaluée une fois que les instructions soient exécutées, ce qui implique que les
            instructions sont exécutées au moins fois. <br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h2 id="neuf">9. Les tabeaux </h2>
        <h3>9.1. Définition</h3>
        <p>
            Un <b>tableau</b> est une variable qui peut contenir plusieurs types de données (valeurs) indépendantes ou
            liées entre elles.<br>
            PHP propose 3 types de tableaux: <br>
            - Les tableaux indexés, <br>
            - Les tableaux associatifs, <br>
            - Les tableaux multidimentionnels <br>
            Les tableaux heritent de l'objet Superglobal <b>Array</b>.
        </p>
        <h3>9.2. Les tableaux indexés</h3>
        <p>
            Le tableau indéxé est un tableau qui contient un indice (index) qui commence à zéro jusqu'à la longueur du
            tableau. <br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>9.3. Les tableaux associatifs</h3>
        <p>
            le tableau associatif est comme le tableau indéxé sauf que pour le tableau associatif, l'indexation n'est
            plus linéaire mais elle se fait avec des clé de type string saisie par le programmeur.<br>
            On parle de tableau associatif parcequ'on associe à chaque valeur une clé qui lui est propre. <br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>9.4. Les tableaux multidimentionnels</h3>
        <p>
            Le tableau multidimentionnel est un tableau indéxé qui contient un autre tableau ou sous-tableau à chaque
            index(indice). En d'autres termes, le tableau multidimentionnel est juste un tableau de tableaux.<br>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h2 id="dix">10. Les fonctions </h2>
        <h3>10.1. Définition</h3>
        <p>
            Une fonction est un sous-programme qui permet d'effectuer un ensemble d'instruction, qu'on peut executer une
            ou plusieurs fois si besoin par simple appelle à la fonction. <br>
            En PHP comme nous l'avons vu en JS, il existe deux types fonctions: les fonctions définies par le
            programmeur et les fonctions prédéfinies (déjà disponible avec PHP). <br>
        </p>
        <h3>10.2. Les fonction définies</h3>
        <p>
            Une fonction définie est un groupe de ligne de code écrit par le programmeur déstiné à réaliser une tache
            bien définie. <br>
            <u><b>Syntaxe: </b></u> function nom_de_la fonction(les arguments ou parametres s'il y'en a){ les
            instructions et le return si besoin}.
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        </p>
        <h3>10.3. Les fonction prédéfinies</h3>
        <p>
            Une fonction prédéfinie est une fonction native de PHP, c'est à dire elle est fournit par PHP et le
            programmeur peut en faire usage autant de fois qu'il en a besoin. <br>
            PHP propose un certains nombres de fonctions prédéfinies, qu'on appelle parfois des methodes quand elles
            sont associées à un objet. <br><br>
            <b>Les fonctions chaine de caracteres:</b> <br>
            strtolower(); strtoupper(); strlen(); str_repeat(); strpos(); <br>
            Pour plus de fonctions, rendez vous sur <a href="https://www.php.net/manual/fr/index.php">Manuel PHP</a><br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a> <br><br>
            <b>Les fonctions tableaux:</b> <br>
            count(); asort(); arsort(); ksort(); krsort(); max(); min(); array_push(); array_pop() <br>
            Pour plus de fonctions, rendez vous sur <a href="https://www.php.net/manual/fr/index.php">Manuel PHP</a><br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a> <br><br>
            <b>Les fonctions isset, unset et Empty:</b> <br>
            <b>Isset()</b> détermine si une variable est définie et a une valeur différente de Null. <br>
            <b>Unset()</b> détruit la ou les variables qui lui sont passées en parametre. <br>
            <b>Empty()</b> détermine si une variable est vide, null, non défini, égale à zéro ou false. <br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h2 id="onze">11. Les objets (POO) </h2>
        <h3>11.1. Définition</h3>
        <p>
            Un objet est une instance de la class. La class est la donc la structure ou le moule qui permet de définir
            des objets. <br>
            En PHP une définition de class simple commence par le mot clé class suivi du nom de la class, ensuite d'une
            paire d'accolade contenant les propriétes et les méthodes de la class. <br>
            <b>Encapsulation</b> <br>
            L'encapsulation est un principe de conception consistant à protéger le coeur d'un système des accès
            intempestifs venant de l'extérieur.
            En UML, utilisation de modificateurs d'accès sur les attributs ou les classes :
            <br><b>Public :</b> propriété ou classe visible partout
            <br><b>Protected :</b> Propriété ou classe visible dans la classe et par tous ses descendants.
            <br><b>Private :</b> propriété ou classe visible uniquement dans la classe
            <br><b>Package:</b> propriété ou classe visible uniquement dans le paquetage. <br>
            Il n'y a pas de visibilité « par défaut » . <br>
        </p>
        <h3>11.2. Syntaxe</h3>
        <p>
            class nom_de_la_class{
            <br> private $proprietes;
            <br> public function nom_de_la_fonction(){
            <br>Instructions...
            <br>}
            <br>}
            <br>$objet = new nom_de_la_class; <br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h2 id="douze">12. Traitement des dates </h2>
        <h3>12.1. Définition</h3>
        <p>
            PHP propose plusieurs fonctions et méthodes pour manipuler les dates. <br>
            la fonction time donne le nombre de seconde écoulé depuis 1970 à 00H précise. <br>
            On utilise la fonction date() avec ses parametres pour convertir et manipuler les dates. <br>
        </p>
        <h3>12.2. la fonction date()</h3>
        <p>
            Elle est la fonction la plus utilisée en PHP pour la manipulation des dates.<br>
            <b><u>Quelques parametres de la fonction date()</u></b> <br>
            <br>d= le jour du mois en chiffre;
            <br>D= le jour de la semaine ("Mon");
            <br>m= le mois de 1 à 12;
            <br>M= le mois ("Jan");
            <br>n= le mois de 1 à 12;
            <br>y= l'année ("23");
            <br>Y= l'année ("2023");
            <br>l= le jour de la semaine ("Monday");
            <br>N= le jour de la semaine en chiffre de 1 à 7;
            <br>h= l'heure au format 00;
            <br>H= l'heure au format 00;
            <br>g= l'heure de 0 à 12;
            <br>i= les minutes;
            <br>s= les secondes;
            <br>a= "am" ou "pm"; <br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h2 id="treize">13. Traitement des formulaires </h2>
        <h3>13.1. Définition</h3>
        <p>
            Le formulaire reste à ce jour, l'un des principaux outils de communication pour les sites et application
            web.<br>
            Le formulaire permet de récuperer les saisies des utilisateurs afin de traiter ces donnees ou de les
            sauvegarder dans une base de données. <br>
            Le traitement de ces donnees via le formulaire, se fait sur PHP grace aux variables superglobales _GET,
            _POST, _REQUEST. <br>
        </p>
        <h3>13.2. _GET</h3>
        <p>
            _GET permet de transmettre les informations saisies au niveau du formulaire au serveur via l'url après les
            avoir codées par l'encodage suivant : <br>
            les paires nom/valeur sont regroupés et les espaces remplacés par des & ou des +.<br>
            Après l'encodage, les données sont envoyé via le navigateur qui les relie à l'url par ?. <br>
            Les données sont visibles sur l'url et limitées ASCII 1024 bits. <br>
            <u><b>Exemple:
                </b></u>https://www.google.fr/search?q=il+fait+beau+aujourd%27hui&source=hp&ei=P4HGY7r3BJrSgQaUuqb4Cg&iflsig=AK50M_UAAAAAY8aPT4Srgdss-0Ti2WkGZGUJeu1gbYqI&ved=0ahUKEwj6kpONu878AhUaacAKHRSdCa8Q4dUDCAg&uact=5&oq=il+fait+beau+aujourd%27hui&gs_lcp=Cgdnd3Mtd2l6EAMyCggAEIAEEEYQgAIyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6CwgAEIAEELEDEIMBOhEILhCABBCxAxCDARDHARDRAzoICAAQgAQQsQM6CAgAELEDEIMBOgsILhCABBCxAxCDAToFCC4QgAQ6CAguEIAEENQCOg4ILhCABBCxAxDHARCvAToLCC4QgAQQxwEQrwE6EQguEIAEELEDEIMBEMcBEK8BOgsILhCABBDHARDRAzoOCC4QsQMQgwEQxwEQrwE6BAgAEAM6BwguEIAEEAo6DQgAEIAEELEDEIMBEAo6CggAEIAEELEDEAo6BwgAEIAEEAo6CgguEIAEENQCEAo6BQgAELEDOgsILhCABBCxAxDUAjoICC4QgAQQsQNQ_1VYsH1glIQBaAJwAHgAgAFpiAG4D5IBBDIyLjKYAQCgAQGwAQA&sclient=gws-wiz
        </p>
        <h3>13.3. _POST</h3>
        <p>
            _POST tout comme _GET permet d'envoyer les données au serveur. <br>
            Concernant l'encodage, il utilise la meme methode que _GET. les données sont envoyés au serveur via l'entete
            HTTP, la sécurite dépend alors du HTTPS. <br>
            le HTTP fournit un tableau associatif pour acceder aux données, cette méthode n'est pas limité au types de
            données ASCII. <br>
            Avec la methode POST les données ne sont pas visible lors de l'envoie contrairement à la methode GET. La
            methode POST reste alors la methode la plus sûr pour le traitement de données sensibles. <br>
        </p>
        <h3>13.4. _REQUEST</h3>
        <p>
            _REQUEST est une variable superglobale qui contient un tableau associatif du contenu des variables _POST,
            _GET, _COOKIE. <br>
        </p>
        <p> <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a> et <a href="./formulaire.php">
                formulaire.php</a></p>
        <h2 id="quatorze">14. Sécurisation des formulaires </h2>
        <h3>14.1. Définition</h3>
        <p>
            La Sécurisation du formulaire est l'étape la plus importante pour garantir la sécurité des données des
            utilisateurs. <br>
            Il est donc necessaire de traiter toutes les données saisies par l'utilisateur afin d'etre sûr qu'il ne
            puisse ni executer de script, ni injecter du code sql ou autres, ni perturber le bon fonctionnement du site
            ou de l'application web.<br>
            Ce procédé s'appelle en anglais <b> "input sanitization" </b> qui consiste à vérifier que tous les inputs
            sont conforme à la programmation. <br>
            De nombreux frameworks proposent par défaut toutes ces vérifications. <br>.
            La sécurisation d'un site ou application web est tellement importante qu'elle doit se faire dans les
            deux cotés, c'est à dire du coté client et du coté serveur.<br>
        </p>
        <h3>14.2. Sécurisation coté client</h3>
        <p>
            Bien que la sécurité coté client soit moins développé que la sécurité coté, elle reste néanmoins à ne pas
            négliger. <br>
            On utilise l'attribut <b>required</b> pour rendre la saisie d'un champ obligatoire; <br>
            l'attribut <b>maxlength</b> pour limiter la taille d'un champ en nombre de caractères; <br>
            les attributs <b> min et max </b> pour fournir un intervalle de saisie. <br>
            l'attribut <b>pattern</b> pour ajouter des contraintes sur la forme de données que doit renseigner
            l'utilisateur en fournissant des expressions régulières (regex).<br>
            <u>Exemples:</u> <a href="./formulaire.php"> voir formulaire.php </a>
        </p>
        <h3>14.3. Sécurisation coté serveur</h3>
        <p>
            PHP fournit un cerrtains nombres de fonction pour prévenir les injections de code.<br>
            Il y'a des fonctions pour transformer les chevrons "<" ">" pour pas qu'ils soient considérées comme une
                baslise html.<br>
                IL y'en a d'autres pour supprimer les espaces et les caractères spéciaux comme l'antislash.<br>
                PHP propose aussi des fonctions pour hacher (codifier) un mot de passe. <br>
                Il propose aussi des filtres pour verifier un email ou un url. <br>
                PHP intégre aussi une bibliothèque d'expressions réguliere pour mieux controler la saisie de
                l'utilisateur. <br>
                PHP propose la fonction <b>header</b> qui permet de faire des redirections, c'est à dire contraindre
                chaque utilisateur à acceder qu'aux données qui lui sont alouées. <br>
                <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h2 id="quinze">15. Les instructions require et include (_once) </h2>
        <p>
            <b>« require » </b>et <b>« include » </b> incluent à l'endroit actuel et exécutent le fichier PHP. <br>
            Ils sont identiques dans leur fonctionnement à une exception : le traitement des erreurs. <br>
            Un include produit un « warning » (le code continue en principe à s'exécuter) tandis qu'un require produit
            une « erreur
            fatale » (l'exécution s'arrête). <br>
            Comme require et include sont des éléments du langage et pas des fonctions il n'est pas forcément nécessaire
            d'utiliser les parenthèses.<br>
            <b>« require_once »</b> et <b>« include_once »</b> ressemblent à leurs homologues avec cependant une
            différence. <br> Quoi qu'il arrive, le fichier est inclus une seule fois. Si un second « require_once »
            apparaît avec le même fichier, l'instruction ne sera pas exécutée. <br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h2 id="seize">16. Les fichiers </h2>
        <h3>16.1. Généralités</h3>
        <p>
            – De nombreuses applications travaillent avec des fichiers <br>
            – Les fichiers permettent de sauvegarder des données sur disque et les rendent en quelque sorte pérennes<br>
            – On peut les utiliser dans des sessions ultérieures
            – Il existe de nombreuses fonctions pour les lire, les remplir, les supprimer et même changer leurs
            attributs<br>
            – Dans ce chapitre on va s’intéresser aux opérations de lecture/écriture puis nous regarderons quelques
            opérations de leur manipulation sur disque Généralités<br>
            - PHP ne lit et n'écrit dans les fichiers que sous forme de texte<br>
            – Un fichier texte est un fichier caractère, construit sous un éditeur de texte<br>
            – Il est organisé sous la forme d’une suite de lignes de caractères<br>
        </p>
        <h3>16.2. Creer et ouvrir un fichier</h3>
        <p>
            Pour travailler sur un fichier (lire ou remplir), il faut l’ouvrir: <br>
            – On utilise pour cela fonction <b>fopen()</b> avec comme parametre le nom du fichier et le mode
            d'ouverture.<br>
            <u><b>Les différents modes d’ouverture</b></u><br>
        <table border="1">
            <tr>
                <th>Mode d'ouverture</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>r</td>
                <td>ouvre en lecture seule : le pointeur est placé au début du fichier</td>
            </tr>
            <td>r+</td>
            <td>ouvre en lecture/écriture : le pointeur est placé au début du fichier</td>
            </tr>
            <td>w</td>
            <td>ouvre en écriture seule : le pointeur est placé au début du fichier. Réduit la taille du fichier à 0.
                Tentative de création si celui ci n'existe pas</td>
            </tr>
            <td>w+</td>
            <td>ouvre en lecture/écriture : Le pointeur est placé au début du fichier. Réduit la taille du fichier à 0.
                Tentative de création si celui ci n'existe pas</td>
            </tr>
            <td>a</td>
            <td>ouvre en écriture seule : Le pointeur est placé au début du fichier. Tentative de création si celui ci
                n'existe pas.</td>
            </tr>
            <td>a+</td>
            <td>ouvre en lecture/écriture : Le pointeur est placé à la fin du fichier. Tentative de création si celui ci
                n'existe pas.</td>
            </tr>
            </tr>
            <td>x</td>
            <td>crée et ouvre le fichier en lecture seule : Le pointeur est placé au début du fichier. Si le fichier
                existe déjà, fopen va échouer</td>
            </tr>
            </tr>
            <td>x+</td>
            <td>crée et ouvre le fichier en lecture/écriture : le pointeur est placé au début du fichier. Si le fichier
                existe déjà, fopen va échouer</td>
            </tr>
        </table><br>
        </p>
        <p>
            <b><u>NB:</u></b> Si la fonction fopen() échoue lors de l'ouverture du fichier, celle ci retourne 0<br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h3>16.3. fermer un fichier</h3>
        <p>
            La fonction <b>fclose()</b> est utilisée pour fermer un fichier avec comme parametre le nom du fichier.<br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h3>16.4. Écrire dans un fichier</h3>
        <p>
            – L'écriture dans un fichier texte se fait avec la fonction <b>fwrite()</b>. Pour faire des retours à la
            ligne vous devez utiliser : "\n"<br>
            – Les entiers et les décimaux sont écrits sous forme de chaînes de caractères et non sous forme binaire<br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h3>16.5. Trouver la fin d'un fichier</h3>
        <p>
            – La fonction <b>feof()</b> est utilisée pour tester la fin du fichier.<br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h3>16.6. Lire un fichier</h3>
        <p>
            – La fonction <b>fgetc()</b> est utilisée pour lire un fichier caractère par caractère.<br>
            – La fonction <b>fgets()</b> est utilisée pour lire un fichier ligne par ligne.<br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h2 id="dixsept">17. LES SESSIONS</h2>
        <p>Une session est un moyen de stockage de donnees dans des variables pour etre utiliser sur plusieurs pages.
            <br>Ces informations ne sont pas stockés sur l'ordinateur de l'utilisateur.
            <br>Une session crée un fichier temporaire sur le server stockant les variables et leurs valeurs qui sont
            disponibles sur tout le site, toutes pages... et pendant toute la duree de la session en cours.
            <br>Une session se termine lorsque l'utilisateur quitte le navigateur ou termine la session au bout d'un
            temps prédéfini (environ 30mn);
        </p>
        <h3>17.1. Demarrer une session</h3>
        <p>Pour demarrer une nouvelle session, on utilise la fonction session_start();
            <br>Elle recherche si une session existe déja avec son id. Si elle existe déja, elle met en place les
            variables, sinon elle démarre une nouvelle session.
        </p>
        <p>
            session_start() doit etre placé au début de chaque page pour pouvoir l'utiliser convenablement;
        </p>
        <h3>17.2. Stockage et acces aux donnees d'une session</h3>
        <p>On peut stocker toutes les donnees d'une session sous la forme clé/valeur et y acceder pendant la durée de la
            session grace à la Superglobal $_SESSION qui crée un tableau.</p>
        <p><u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a></p>
        <h3>17.3. Fermeture d'une session</h3>
        <p>Chaque session a une durée de vie limitée qui peut se reconfigurer dans php.ini.
            <br>C'est le temps réservé à la vie de la session sans activité de l'utilisateur.
            <br>La suppression des donnees de la session se fait avec la fonction unset($variable à supprimer).
            <br>La destruction totale de la session se fait avec la fonction session_destroy();
            <br>La suppression de toutes les valeurs se fait avec la fonction session_unset();
            <br>Modifier la durée de vie de la session dans php.ini: session.gc_maxlifetime<br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>
        <h2 id="dixhuit">18. LES COOKIES</h2>
        <p>ILs permettent de configurer les informations de l'utilisateur pendant la session. ces informations sont
            stockées dans le navigateur de l'utilisateur pendant un temps défini lors de la configuration (environ un
            an).
            <br>Dans le but d'eccelerer l'acces aux sites déjà visités, de faire les statistiques de visites, du temps
            de connexion, ...
        </p>
        <h3>18.1. Acceder aux cookies</h3>
        <P>la variable global $_COOKIE permet d'acceder aux cookies.</P>

        <h3>18.2. Définir les cookies</h3>
        <p>
            Voir l'entete du fichier exemple.php<br>
            on utilise la fonction <b>setcookie()</b> pour parametrer les cookies. Il doit aussi etre placé au début de
            chaque page.<br>
            <u>Exemples:</u> voir <a href="./exemple.php"> exemple.php</a>
        </p>



    </main>

</body>

</html>