

<form method="post" action="../admin_Valid_comment.php?route=getComments=<?= htmlspecialchars($article->getId()); ?>">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo"><br>
    <label for="content">Message</label><br>
    <textarea id="content" name="content"></textarea><br>
    <input type="submit" value="Ajouter" id="submit" name="submit">
    
</form>