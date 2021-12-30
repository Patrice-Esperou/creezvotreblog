<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="../public/index.php">Les Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=login">Connection</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=register">inscription</a></li>
        <li class="nav-item"><a class="nav-link" href="../templates/accueil.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=logout">Se déconnecter</a></li>
        <?php
        if ($this->session->get('role') == 1)
         {
        ?>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=addArticle">Publier un blog</a></li>
        <?php
         }
         ?>        
      </ul>      
    </div>
  </div>
</nav>