<?php $this->title = 'Accueil';

 ?>

<h1>Mon blog</h1>
<?= $this->session->show('accueil');?>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?php
if ($this->session->get('pseudo')) {
    ?>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <?php
} else {
    ?>
   
    <?php
}
?>
  <section class="row">
<?php
foreach ($articles as $article)
{
 ?>            
    <div class="card">
         <h3 class="card-header"><?= htmlspecialchars($article->getAuthor());?></h3>                
          <ul>
            <li class="list-group-item">Le <?= htmlspecialchars($article->getCreatedAt());?></li>
            <li class="list-group-item"><?= htmlspecialchars($article->getTitle());?></li>
            <li class="list-group-item"><?= htmlspecialchars($article->getContent());?></li>
         </ul>
           
         <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">
                <button style="color: white; background-color: green; margin-bottom: 10px;">Voir & ajouter un commentaire </button>
         </a>
         <a href="../public/index.php?route=deleteArticle&articleId=<?= htmlspecialchars($article->getId());?>">
                <button style="color: white; background-color: red; margin-bottom: 10px;">Supprimer ce blog </button>
         </a>
         <a href="../public/index.php?route=editArticle&articleId=<?= htmlspecialchars($article->getId());?>">
                <button style="color: black; background-color: yellow; margin-bottom: 10px;">Modifier le blog </button>
         </a>
    </div>
<?php
}
?>
</section>