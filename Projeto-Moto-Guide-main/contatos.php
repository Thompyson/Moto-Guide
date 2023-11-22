<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="styles/style.css" />
<link rel="stylesheet" href="styles/fonts.css" />
<link rel="icon" href="components/icones/mgicone2.png" />
<title>Contatos</title>
</head>
<body>
<div class="page">
    <header>
    <nav>
        <a href="index.html"><img
        src="components/images/LogoMG1.png"
        alt="logofinal"
        />
        </a>

        <ul class="ul-nav">
        <a href="index.html"><li>Inicio</li></a>
        <a href="sobre.html"><li>Sobre</li></a>
        <a href="contatos.php"><li>Contatos</li></a>
        <a href="cadastro.php" id="btnnav-cadastro"><li>Cadastre-se</li></a>
        </ul>
    </nav>
    </header>
    <main>
    <section>
        <h2><span>Sugestões</span></h2>
        <p>
        Nos envie sugestões, ou entre em contato <br>
        através dos nossos canais.
        </p>
        <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
        <form method="POST" action="contatos1.php">
        <input type="email" name="email" placeholder="Digite o seu e-mail">
        <textarea
            name="sugestao"
            id="textarea"
            placeholder="Envie sua sugestão"
            cols="50"
            rows="50"
        ></textarea>
        <input type="submit" value="Enviar">
        </form>
    </section>

    </main>
    <footer class="main-footer">
    <div class="main-container">
        <div class="main-footer__upper">
        <div class="main-footer__row main-footer__row-1">
            <h2 class="heading heading-sm main-footer__heading-sm">
            <span>Social</span>
            </h2>
            <div class="main-footer__social-cont">
            <a target="_blank" rel="noreferrer" href="#">
                <img
                class="main-footer__icon"
                src="./components/images/linkedin-ico.png"
                alt="icon"
                />
            </a>
            <a target="_blank" rel="noreferrer" href="#">
                <img
                class="main-footer__icon"
                src="./components/images/github-ico.png"
                alt="icon"
                />
            </a>
            <a target="_blank" rel="noreferrer" href="mailto:motoguide420@gmail.com">
                <img
                class="main-footer__icon"
                src="./components/images/email-ico.png"
                alt="icon"
                />
            </a>
            <a target="_blank" rel="noreferrer" href="#">
                <img
                class="main-footer__icon"
                src="./components/images/yt-ico.png"
                alt="icon"
                />
            </a>
            <a target="_blank" rel="noreferrer" href="https://www.instagram.com/motoguideofc/">
                <img
                class="main-footer__icon main-footer__icon--mr-none"
                src="./components/images/insta-ico.png"
                alt="icon"
                />
            </a>
            </div>
        </div>
        <div class="main-footer__row main-footer__row-2">
            
        </div>
        </div>

        <div class="main-footer__lower">
        © Copyright 2023. Made by:
        <a
            rel="noreferrer"
            target="_blank"
            href="https://www.linkedin.com/in/nemesio-carlos-650960254/"
            >Equipe Moto-Guide</a
        >
        </div>
    </div>
    </footer>
</div>
</body>
</html>
