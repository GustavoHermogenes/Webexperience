<Header>

<nav class="topo" id="topo-fixo">

    <div>
        <a href="index.php" >
        <h1>web experience</h1>
        </a>

    </div>

        <button class="menu-abrir"></button>

    </nav>

    <nav class="menu">

        <button class="menu-fechar"></button>

        <h4 class="orcamento" id="open-modal"><a >orçamento</a></h4>

        <?php
            $url = $_SERVER['REQUEST_URI'];
            $urlBase = basename($url);
            ?>

        
        <ul>

            <li><a href="index.php" <?php if($urlBase == 'index.php') echo 'class="ativo"'?>>Home</a></li>
            <span class="linha"></span>

            <li><a href="sobre.php" <?php if($urlBase == 'sobre.php') echo 'class="ativo"'?>>Sobre</a></li>
            <span class="linha"></span>

            <li><a href="contato.php" <?php if($urlBase == 'contato.php') echo 'class="ativo"'?>>Contato</a></li>
            <span class="linha"></span>

        </ul>

        <img src="img/logo02.png" alt="">

    </nav>

</nav>

<section class="fnd-modal">


<div id="fade" class="hide"></div>

<div id="modal" class="hide">

  <div class="modal-header">

    <h2>Orçamento</h2>

    <i  id="close-modal" class="fa-solid fa-xmark"></i>
  </div>
  
  <hr>

  <span class="linha-modal"></span>

  <div class="modal-body">

    <p>
    Para garantir um site incrível que retrate toda a grandeza da sua empresa, não deixe escapar nenhum detalhe! Escreva cuidadosamente todos os aspectos e peculiaridades que tornem sua empresa única, para que possamos criar uma presença online vivida e verdadeiramente representativa do seu negócio.
    </p>

    <textarea style="resize:none" name="mens" id="mens" cols="30" rows="10" placeholder="informe sua mensagem"></textarea>

    <i class="fa-solid fa-paper-plane send-modal" onclick="event.preventDefault(); formWhats()"></i>

  </div>

</div>

</section>

</Header>
