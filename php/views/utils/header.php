<link rel="stylesheet" href="../../../styles/header.css">
<script src="https://use.fontawesome.com/b0a176f32a.js"></script>
<script src="../../../scripts/nav_bar.js"></script>
<div class="navbar">
    <a id="home" href="../home/index.php?user=<?php echo $current_user;?>">Home</a>
    <a id="ranking" href="../ranking/index.php?user=<?php echo $current_user;?>">Ranking</a>
    <div class="dropdown">
      <button class="dropbtn">Notícias
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a id="create_news" href="../news/create.php?user=<?php echo $current_user;?>">Criar nova notícia</a>
          <a id="my_news" href="../news/list.php?user=<?php echo $current_user;?>">Minhas notícias</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Relatórios
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a id="user_report" href="../report/users.php?user=<?php echo $current_user;?>">Usuários</a>
        <a id="news_report" href="../report/news.php?user=<?php echo $current_user;?>">Notícias</a>
        <a id="ranking_report" href="../report/ranking.php?user=<?php echo $current_user;?>">Ranking</a>
        <a id="fake_news_report" href="../report/fake_news.php?user=<?php echo $current_user;?>">Fake-News</a>
      </div>
    </div>
    <a id="my_profile" href="../user/show.php?user=<?php echo $current_user;?>">Meu perfil</a>
    <a id="about" href="../others/about.php?user=<?php echo $current_user;?>">Sobre</a>
    <a id="logout" href="../login.php">Sair</a>
  </div>
</div>