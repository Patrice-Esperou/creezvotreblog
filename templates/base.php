<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  
    <title><?= $title ?></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="../public/index.php">Les Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=login">Connection</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=register">inscription</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=accueil">Accueil</a></li>                 
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=logout">Se déconnecter</a></li>
        <?php
      
            if ($_SESSION == true)
             {
        ?>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=addArticle">Publier un blog</a></li>
        <?php
         }
         if ($_SESSION['role'] == 1)
         {
          ?>
          <li class="nav-item"><a class="nav-link" href="../public/index.php?route=getComments">Valider le commentaire</a></li>
          <?php
           }

         ?>        
      </ul>      
    </div>
  </div>
</nav>
    <div id="content">
        <?= $content ?>
    </div>
    <div class="footer">
    <a class="btn" href="https://github.com/padraig11" title="GitHub" rel="noreferrer noopener" target="_blank">
            <i class="fa-brands fa-github" aria-hidden="true"></i></a>
    
            <a class="btn" href="https://www.linkedin.com/in/patrice-esperou-92aaa7191/" title=" Linkedin Patrice Esperou" rel="noreferrer noopener" target="_blank">
           <i class="fa-brands fa-linkedin"></i>
        </a>
        <a class="btn" href="https://www.facebook.com/creasite.narbonne" title=" Facebook creasite.narbonne" rel="noreferrer noopener" target="_blank">
           <i class="fab fa-facebook"></i>
        </a>
        <a class="btn" href="../public/index.php?route=login">Admistration
        </a>
        </footer>
</body>

</html>