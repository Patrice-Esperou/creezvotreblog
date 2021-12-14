<div class="postcom" align="center">
    <?php
foreach ($comments as $commentaire) {
           if ($commentaire['is_valid']== 1){
    ?>
    <form method="post" action="../public/index.php?route=editComments=<?= htmlspecialchars($commentaire->getId()); ?>">
        
    <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($commentaire->getTitle()); ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= htmlspecialchars($commentaire->getContent()); ?></textarea><br>
        <label for="pseudo">Auteur</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= htmlspecialchars($commentaire->getPseudo()); ?>"><br>
        
     <div class="button">
        <input type="submit" value="Mettre à jour" id="submit" name="submit">
        </div>
        <?php
           } 
        }
           ?>   
    </form>
    </div></div>


    ci dessous a ete enlever de single <div class="php"
    <?php
    foreach ($comments as $comment)
    { 
        if($comment->getIs_Valid()==1)
        {
        ?>
        <div id="block1">
        <div class="lesderniers">
        <h4><?= htmlspecialchars($article->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        </div></div>
        <?php }
    }
    ?></div>
</div></div>

