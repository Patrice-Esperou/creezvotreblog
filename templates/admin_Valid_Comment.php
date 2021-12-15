<?php
use Tracy\Debugger;
Debugger::enable();
?>
 <p> ici est admin valid comment</p>
 

<div class="commentaire">
  <?php 
      
   foreach ($comments as $commentaire) {
     
     if ($commentaire['is_valid']== 0){ 
  ?> 
  <form method="post" action="../public/index.php?route=valideComments&commentId=<?= ($commentaire['id']);?>&articleId=<?= ($commentaire['article_id']);?>">
   
     <?php echo '<h4>' . htmlspecialchars($commentaire['pseudo']) . '</h4>';
           echo '<p>'. htmlspecialchars($commentaire['createdAt']) . '</p>';  
           echo '<p>' . htmlspecialchars($commentaire['content']) . '</p>';         
     ?>
    <input name="idcomment" type="text" value=<?=$commentaire['id']?>>   
    <button type="submit" class="btn btn-primary">Valider le commentaire</button>
    </form>
    <?php
     }
    }
     ?>
   
     


   
