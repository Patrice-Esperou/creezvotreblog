
<h1>Mon blog</h1>
<div id="block">
        <div class="onearticle">
          <h2><?= htmlspecialchars($article->getTitle());?></h2>
          <p><?= htmlspecialchars($article->getContent());?></p>
          <p><?= htmlspecialchars($article->getAuthor());?></p>
          <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
       </div>
       <div id="comments">
            <h3>Ajouter un commentaire  &#128522</h3>
            <!--inclus le formulaire-->
            <?php include('form_comment.php');?>           
        </div>
</div>
<h3>Les derniers commentaires</h3>
<div id="commentaire">
<?php

foreach ($comments as $commentaire) {
   
     if ($commentaire['is_valid'] == 1){  
 ?>
     
      <div class="roundwind">
        <h4><?= htmlspecialchars($commentaire['pseudo']);?> </h4>
        <p><?= htmlspecialchars($commentaire['createdAt']);?></p>  
        <p><?= htmlspecialchars($commentaire['content']);?></p>
      </div>
     
   <?php  
     }
    }
 ?>
 </div>



