<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro - MotoGuide</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="./styles/fonts.css" />
    <link rel="icon" href="components/icones/mgicone2.png" />
  </head>
  <style></style>

  <body>
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
      <aside>
        <h2><span>Cadastre-se</span></h2>
        <p>
        E receba notificações sobre o andamento do nosso app     
        <span>Moto Guide</span>, em primeira mão
        </p>
        <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="cadastro1.php">
			
			<input type="text" name="nome" placeholder="Digite o nome completo">
					
			<input type="date" name="DataNas" placeholder="Digite sua data de nascimento">
			
			<input type="email" name="email" placeholder="Digite o seu e-mail">
			
			<input type="submit" value="Cadastrar">
		</form>
      </aside>
      <article>
        <img
          id="logomarca"
          src="components/images/Logoofc_motoguide.png"
          alt="logomotoguide"
        />
      </article>
    </main>
    <div id="footer">
      <footer>&copy;Copyright 2023. Made by: Equipe Moto-Guide</footer>
      
    </div>
  </body>
</html>