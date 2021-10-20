

<form action="index.php?route=article" method="post">
    <div class="commentaire">
     <?php 
     
       foreach ($comments as $commentaire) {
           if ($commentaire['is_valid']== 0){
     
   echo '<h4>' . htmlspecialchars($commentaire['pseudo']) . '</h4>';
   echo '<p>'. htmlspecialchars($commentaire['createdAt']) . '</p>';  
   echo '<p>'  . htmlspecialchars($commentaire['content']) . '</p>' ; 
   ?>

    <input name="idcomment" type="text"value=<?=$commentaire['id']?>>
   
    <button type="submit" class="btn btn-primary">Valider le commentaire</button>
     <?php  
    }

}
     ?>
</form>
<div class="postcom" align="center">
    <?php
foreach ($comments as $commentaire) {
           if ($commentaire['is_valid']== 0){
    ?>
    <form method="post" action="../public/index.php?route=article=<?= htmlspecialchars($article->getId()); ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($article->getTitle()); ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= htmlspecialchars($article->getContent()); ?></textarea><br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author" value="<?= htmlspecialchars($article->getAuthor()); ?>"><br>
        </div>
     <div class="button">
        <input type="submit" value="Mettre à jour" id="submit" name="submit">
        </div>
        <?php
           } 
        }
           ?>   
    </form>
    </div>
    
