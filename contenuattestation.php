<?php
if(!isset($_SESSION['userrole'])){
    header("Location: connexion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contenu attestation</title>
</head>
<body>
    <div style="text-align: left;">
        <h2 style= 'margin-bottom: -20px; color:gray'>WEB!NAIRE</h2>
        <p>Centre de formation<br>
            <b>Tel :</b> 06 42 54 14 79<br>
            <b>Mail :</b> contact@webinaire.com<br>
            5 avenue de france, <br>
            91300 Massy
        </p>
    </div>
    <div style="text-align: right;">
        <?php
        echo "<h2>". $_SESSION['civilite']. " ".$_SESSION['prenom']." ".$_SESSION['nom']."</h2>
        <p>
            <b>Tel :</b> 0" .$_SESSION['telephone']."<br>
            <b>Mail :</b>". $_SESSION['mail']."<br>".
            $_SESSION['adresse'].",<br>".
            $_SESSION['codepostal']." ".$_SESSION['ville']."
        </p>
        ";
        ?>
    </div><br><br>
    <center>
        <h1>ATTESTATION DE FORMATION</h1>
        <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore provident officia adipisci repellat autem modi. Quisquam quaerat ea architecto adipisci aspernatur. Asperiores soluta sunt, at iste deleniti repellendus aperiam non sit quaerat quas beatae ipsam quisquam vel! Molestias sapiente qui illum odio possimus aperiam illo? Quaerat, quisquam exercitationem. Labore ullam cupiditate necessitatibus incidunt odit harum dignissimos quae! Est assumenda officiis iste eaque repudiandae ullam commodi deleniti quam deserunt cum eveniet nihil fugit, id iusto consequuntur veniam aspernatur nulla eligendi provident! Eveniet harum magnam nulla quibusdam nobis quaerat, eligendi fugit facere incidunt sapiente nemo autem in? Consectetur reiciendis sint non saepe eum. Dolor id tempore delectus laudantium vel maiores numquam quam eius placeat, commodi nisi aut corporis ipsam cumque? Quae necessitatibus voluptatem, reprehenderit quis pariatur illum quam aperiam soluta nihil libero labore inventore quibusdam aliquid similique error sit ex accusamus expedita sunt recusandae nesciunt nulla harum molestias. Nam vel dicta odit at animi mollitia harum minus nulla nesciunt modi dolorem porro labore aperiam perferendis, consequuntur vitae, nihil tempore cum quibusdam ipsam? Animi dolorum totam autem cumque ex voluptatum ab commodi amet vel, quos, accusamus ad. Obcaecati ab laborum tempora accusamus repellendus. Laborum delectus nobis laboriosam rem voluptatum dolorum quod, voluptas iure.
        </p>
        <img src="./assets/Images/im2.jpeg" alt="" style="width: 100px;">
    </center>

</body>
</html>