<?php
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$email = $_POST['email'];
$filename = 'form_data.txt';
file_put_contents($filename, "First Name: " . $f_name . "," . "Last Name: " . $l_name . "," .
    "Email: " . $email . ",", FILE_APPEND);
?>

<!-- SUBSCRIPTION PAGE INDEX !-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="icon" href="images/logos/topicon.png" type="image/png">
    <link rel="stylesheet" href="CSS/common.css">
    <link rel="stylesheet" href="CSS/home.css">
</head>
<body>
<header>
    <div class="menu logo"><img src="images/logos/logo100x100.png" alt="logo" id="logo"><a href=""></a></div>
    <div class="menu_index"><a href="home.html">HOME</a></div>
    <div class="menu_about"><a href="about.html">SOBRE (CC-D+M)</a></div>
    <div class="menu_speakers"><a href="dates.html">SPEAKERS</a></div>
    <div class="menu_contacts"><a href="contacts.html">CONTACTOS</a></div>
</header>
<div class="slideshow">
    <h1 >CCDM 2022</h1>
</div>
<div class="empty"></div>
<main>
    <div class="about">
        <div class="about_title"><h3>Sobre (CC-D+M)</h3></div>
        <div class="about_text"><p>“Ciclo de Conversas Design+Multimédia” é um ciclo de conferências que se realiza anualmente no
                âmbito dos cursos de Licenciatura e Mestrado em Design e Multimédia da Faculdade de Ciências e de Tecnologia da Universidade de Coimbra.
                Que decorrerá em Abril de 2022, repartida em quatro sessões que terão lugar às quartas da parte da tarde, no auditório do
                Museu da Ciência em Coimbra. As conferências são abertas ao público em geral e de entrada livre.</p></div>
    </div>
    <div class="empty"></div>
    <div class="speakers">
        <div class="speakers_title"><h3>Speakers</h3></div>
        <div class="index_joana">
            <a href="joana.html"><img class="index_img_j" src="images/speakers/joanamonteirosq.png" alt="joana_monteiro" onclick=""></a>
        </div>
        <div class="index_miguel">
            <a href="miguel.html"><img class="index_img_m" src="images/speakers/miguelsoaressq.png" alt="miguel_soares"></a>
        </div>
        <div class="index_rui">
            <a href="rui.html"><img class="index_img_r" src="images/speakers/ruiabreusq.png" alt="rui_abreu"></a>
        </div>
        <div class="index_susana">
            <a href="susana.html"><img class="index_img_s" src="images/speakers/susanacarvalhosq.png" alt="susana_carvalho"></a>
        </div>
    </div>
    <div class="empty"></div>
    <div class="contacts">
        <h3 class="contacts_title">Contactos</h3>
        <p class="contacts_text">
            Organização: <br>
            Pedro Martins <br>
            Nuno Coelho <br>
            Telefone: 239 700 600 <br>
            cicloconversas@fct.uc.pt</p>
    </div>
    <div class="subscribe">
        <h3 class="subscribe_title">Subscrição Efetuada</h3>
        <h4 class="subscribe_text">Obrigado <?php
            echo $_POST['first_name'] . " " . $_POST['last_name'] . "!";
            ?>
            <br>A partir de agora receberá informações sobre a CCDM2022
            <br>O seu email: <?php echo $_POST['email']; ?>
        </h4>
    </div>
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
<script src="JS/home.js"></script>
</body>
</html>
