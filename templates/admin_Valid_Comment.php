<h1>Validation des blogs</h1>
 <p> ici est admin valid comment</p>
 <li class="nav-item"><a class="nav-link" href="../public/index.php?route=addArticle">Publier un blog</a></li>
<section class="roundwind1">
<div id="roundwind1">
  <?php 
      
   foreach ($comments as $commentaire) {
     
     if ($commentaire['is_valid']== 0){ 
  ?> 
  <form method="post" action="../public/index.php?route=valideComments&commentId=<?= ($commentaire['id']);?>&articleId=<?= ($commentaire['article_id']);?>">
   
     <?php echo '<h4>' . htmlspecialchars($commentaire['pseudo']) . '</h4>';
           echo '<p>'. htmlspecialchars($commentaire['createdAt']) . '</p>';  
           echo '<p>' . htmlspecialchars($commentaire['content']) . '</p>';         
     ?>
   <span class="idcommentaire"> <input name="idcomment" type="text" value=<?=$commentaire['id']?>>  </span> 
    <button type="submit" class="btn btn-primary">Valider le commentaire</button>
    </form>
    <?php
     }
    }
     ?>
     </div>
  </section>
   
     


   
