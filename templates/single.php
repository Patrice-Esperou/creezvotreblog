<?php $this->title = 'Article'; ?>
<h1>Mon blog</h1>
<div id="block">
        <div class="onearticle">
          <h2><?= htmlspecialchars($article->getTitle());?></h2>
          <p><?= htmlspecialchars($article->getContent());?></p>
          <p><?= htmlspecialchars($article->getAuthor());?></p>
          <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
       </div>
       <div id="comments" >
            <h3>Ajouter un commentaire  &#128522</h3>
            <?php include('form_comment.php'); ?>
        </div>
        <div id="admin">
            <h4> Les Nouveaux commentaires</h4>
            <?php include('admin_Valid_Comment');?> 
</div>
<h3>Les derniers commentaires</h3>
        
    <?php
    foreach ($comments as $comment)
    {
        if($comment->getIs_Valid()==1)
        {
        ?>
        <div id="block1">
        <div class="lesderniers">
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        </div></div>
        <?php }
    }
    ?></div>
</div></div>
<p>a supprimer</p>
<a href="../public/index.php">Retour à l'accueil</a><br>
<div class="actions">
    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
 
</div>