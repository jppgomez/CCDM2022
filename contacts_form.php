<?php
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$email = $_POST['email'];
$filename = 'form_data.txt';
file_put_contents($filename, "First Name: " . $f_name . "," . "Last Name: " . $l_name . "," .
    "Email: " . $email . ",", FILE_APPEND);
?>

<!-- SUBSCRIPTION PAGE CONTACTS !-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactos</title>
    <link rel="icon" href="images/logos/topicon.png" type="image/png">
    <link rel="stylesheet" href="CSS/common.css">
    <link rel="stylesheet" href="CSS/contacts.css">
</head>
<body>
<header>
    <div class="menu logo"><img src="images/logos/logo100x100.png" alt="logo" id="logo"><a href=""></a></div>
    <div class="menu_index"><a href="home.html">HOME</a></div>
    <div class="menu_about"><a href="about.html">SOBRE (CC-D+M)</a></div>
    <div class="menu_speakers"><a href="dates.html">SPEAKERS</a></div>
    <div class="menu_contacts"><a href="contacts.html">CONTACTOS</a></div>
</header>
<main>
    <div class="main">
        <div class="contacts_title"><h1>Contactos</h1></div>
        <div class="contacts_text"><p>
                <b>Organização:</b><br>
                Pedro Martins<br>
                Nuno Coelho<br>
                <br>
                <b>Telefone:</b><br>
                239 700 600 <br>
                <br>
                <b>Email:</b><br>
                cicloconversas@fct.uc.pt
            </p></div>
    </div>
    <div class="empty"></div>
    <div class="sub_container">
        <h3 class="sub_title">Subscrição Efetuada</h3>
        <h4 class="sub_text">Obrigado <?php
            echo $_POST['first_name'] . " " . $_POST['last_name'] . "!";
            ?>
            <br>A partir de agora receberá informações sobre a CCDM2022
            <br>O seu email: <?php echo $_POST['email']; ?>
        </h4>
    </div>
    <div class="empty"></div>
    <!--<div class="popup">
        <div class="popup_text">
            <div>GET TICKETS</div>
            <div>CONTACT US</div>
        </div>
        <img src="images/logos/logo100x100.png" alt="popup_img">
    </div>!-->
</main>
<footer>
    <div class="footer_text">CCDM 2022</div>
</footer>
<script src="JS/common.js"></script>
</body>
</html>