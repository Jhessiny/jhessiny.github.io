<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Escritório Fernandes Neto</title>
    <meta name="description" content="Escritório de Advocacia especializado em direito do trabalho e ações contra o INSS." />
    <meta name="keywords" content="Direito do Trabalho, Ação contra INSS, Rescisão Indireta, Aposentadoria por invalidez, Advogado Online"/>
    <meta name="robots" content="index, follow"> 
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/estilo.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
      integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
      crossorigin="anonymous"
    />
  </head>

  <body>
      <?php
      if(isset($_POST["nome"]) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);
  
        $para = "fernandesneto.br@gmail.com";
        $assunto = "Email - Site FernandesNeto";
        $corpo = "Nome: ".$nome." - Email: ". $email. " - Mensagem: ".$mensagem;
        $cabecalho = "From: braumsolutions@braumsolutions.com"."\r\n".
                      "Reply-To: ".$email."\r\n".
                      "X-Mailer: PHP/".phpversion();
  
        mail($para, $assunto, $corpo, $cabecalho);
        $resposta = "<p style= 'color: green; clear= both'> Email enviado com sucesso!</p>";
  
      } else{
        $resposta = "<p style= 'color: red; clear= both'>Erro. Tente novamente</p>";
      }
  
  ?>

      <a href="https://api.whatsapp.com/send?L=pt&amp;phone=5521996924687"><img src="img/whatsapp.ico" style="position: fixed; bottom: 25px; right: 15px; z-index: 100;" data-selector="img" alt=""></a>
      
     <div class="header__menu-icon-box">
       <input type="checkbox" id="checkbox">
       <label for="checkbox"><i class="fas fa-bars header__menu-icon"></i></label>

       <div class="background"></div>

       <nav class="header__menu-icon-nav">
            <ul class="header__menu-ul">
                <li><a href="#" onclick="fechar()">Início</a></li>
                <li><a href="#areas" onclick="fechar()">Áreas de atuação</a></li>
                <li><a href="#sobre" onclick="fechar()">Sobre</a></li>
                <li class="header__menu-icon-contato"><a href="#contato" onclick="fechar()">Contato</a></li>
            </ul>
      </nav>
     </div>
     

      <header class="header">
    <img src="img/Logo transparente.png" alt="logo" class="header__logo" />
      <div class="container">
        <div class="header__top">
            <div class="header__contato">
                <div class="header__contato-telefone">
                    <i class="fas fa-phone"></i> 21 99692-4687
                </div>
                <div class="header__contato-email">
                    <i class="fas fa-whatsapp-sqaure"></i> fernandesneto.br@gmail.com
                </div>
                <div class="header__contato-redessociais">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                </div>
                </div>
              
               
                <nav class="header__menu">
                    <ul class="header__menu-ul">
                        <li><a href="#">Início</a></li>
                        <li><a href="#areas">Áreas de atuação</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <!-- <li><a href="#">Depoimentos</a></li> -->
                        <li class="header__menu-contato"><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
        </div>

        <div class="header__centro">
          <h1>Fernandes Neto <span>Advogados Associados</span></h1>

          <p>Busque seus direitos com um escritório especializado.</p>
        </div>
      </div>
    </header>

    <div class="form-box">
      <form action="" class="form" method="POST">
          <h2>Entre em contato</h2>
        <div class="inputs-box">
            <input type="text" name="nome" placeholder="Nome">
            <input type="email" name="email" placeholder="Email">
        </div>
        <textarea name="mensagem" id="" cols="30" rows="5" placeholder="Sua mensagem"></textarea>
        <?php
        if(isset($_POST["nome"]) && !empty($_POST['nome'])){
          echo $resposta;
        }
          ?>
        <button type="submit" class="header__center-contato">Entre em contato</button>
      </form>
    </div>

    <section class="section__areas">
      <div class="container">
        <h2 id="areas">Áreas de Atuação</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
          obcaecati expedita cumque amet placeat saepe sunt corporis ea quam
          maiores laboriosam accusantium animi, et explicabo reprehenderit ipsum
        </p>

        <div class="row" >
          <div class="col-1-of-3">
            <div class="card">
              <i class="fas fa-briefcase fa-2x"></i>
              <h4>Direito do Trabalho</h4>
              <p>
                Lorem ipsum dolor, sit ame fugiat molestiae cum quas, asperiores
                expedita saepe cumque at id minus, tempora similique totam!
                Dignissimos, fugiat fugit?
              </p>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="card">
              <i class="fas fa-hand-holding-usd fa-2x"></i>
              <h4>Direito Previdenciário</h4>
              <p>
                Lorem ipsum dolor, sit ame fugiat molestiae cum quas, asperiores
                expedita saepe cumque at id minus, tempora similique totam!
                Dignissimos, fugiat fugit?
              </p>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="card">
              <i class="fas fa-money-check-alt fa-2x"></i>
              <h4>Direito do Consumidor</h4>
              <p>
                Lorem ipsum dolor, sit ame fugiat molestiae cum quas, asperiores
                expedita saepe cumque at id minus, tempora similique totam!
                Dignissimos, fugiat fugit?
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="section__sobre" id="sobre">
          <div class="container__left">
                <h2>O escritório</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde tenetur impedit maxime temporibus, dolorum laudantium fugit nisi nostrum recusandae corrupti id quod. Molestiae officiis repellat hic iste nam placeat quo.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam dicta sit facilis, molestias voluptatum voluptate totam veritatis illum quaerat earum, quas id quibusdam corporis amet eos facere. Modi, labore sed.</p>
          </div>
      </section>
      <footer class="footer">
         <div class="container">
            <div class="footer__center">
                <img src="img/Logo transparente.png" class=" footer__logo" alt="">
                <h3>Fernandes Neto <span>Advogados Associados</span></h3>
            </div>
         </div>
         <div class="footer__contato">
                <div class="footer__contato-telefone">
                    <i class="fas fa-phone"></i> 21 99692-4687
                </div>
                <div class="footer__contato-email">
                    <i class="fas fa-envelope"></i> fernandesneto.br@gmail.com
                </div>
                <div class="footer__contato-redessociais">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                </div>
                </div>

                <p class="criado">Criado por <a href="http://www.braumsolutions.com">Braum Solutions - Design e Desenvolvimento</a></p> 
      </footer>
      <script>
        function fechar(){
          document.getElementById("checkbox").checked = 0;
        }
      </script>
  </body>
</html>
