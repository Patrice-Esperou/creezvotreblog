
<form action="" method="post">
    <div class="commentaire">
 <?php  echo '<h4>' . htmlspecialchars($comment['pseudo']) . '  Le  ' . htmlspecialchars($addComment['commentDate']) . '</h4>' ;  ?>
 <?php  echo '<p>'  . htmlspecialchars($comment['commentUnique']) . '</p>' ; ?>


    <input name="idcomment" type="text" value=<?=$comment['id']?>>
    
    <button type="submit" class="btn btn-primary">Valider le commentaire</button>
    
</form>
