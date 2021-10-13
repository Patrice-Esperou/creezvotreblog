
<form action="admin_valid_comment.php" method="post">
    <div class="commentaire">
 <?php  echo '<h4>' . htmlspecialchars($rendu['pseudo']) . '  Le  ' . htmlspecialchars($addComment['commentDate']) . '</h4>' ;  ?>
 <?php  echo '<p>'  . htmlspecialchars($rendu['commentUnique']) . '</p>' ; ?>


    <input name="idcomment" type="text" value=<?=$comment['id']?>>
    
    <button type="submit" class="btn btn-primary">Valider le commentaire</button>
    
</form>
