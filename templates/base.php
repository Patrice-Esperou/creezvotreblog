<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../public/css/style.css">
    <title><?= $title ?></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="../public/index.php">Les Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=register">inscription</a></li>
        <li class="nav-item"><a class="nav-link" href="accueil.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=logout">Se déconnecter</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=addArticle">Publier un blog</a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php">Administration</a></li>
        <li class="nav-item"><a class="nav-link" href="../public/index.php?route=getComments">Validation des commentaires</a></li>
        <li class="nav-item"><a class="nav-link" href="addComment.php">Blog Unique</a></li>        
      </ul>      
    </div>
  </div>
</nav>
    <div id="content">
        <?= $content ?>
    </div>
<footer>
    <div class="footer">
    <a class="btn-primary" href="https://github.com/padraig11" title="GitHub" rel="noreferrer noopener" target="_blank">
            <i class="fa-brands fa-github" aria-hidden="true"></i></a>
<i class="fa-brands fa-linkedin"></i>
<i class="fa-brands fa-github"></i>
<i class="fa-brands fa-twitter"></i>
</footer>
</body>

</html>