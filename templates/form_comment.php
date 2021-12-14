<?php
use Tracy\Debugger;

Debugger::enable();
//$route = isset($commentaire) && $commentaires->get('id') ? 'editComment&valideComments='.$post->get('id') : 'valideComments';
//$submit = $route === 'valideComments' ? 'Envoyer' : 'Mettre à jour';
?>

<!-- champ du FORMULAIRE QUI SE TROUVE SUR LA PAGE AJOUTER UN COMMENTAIRE le formulaire est sur single.php-->
<form method="post" action="../public/index.php?route=addComment&articleId=<?= htmlspecialchars($article->getId());?>">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo"><br>
    <label for="content">Message</label><br>
    <textarea id="content" name="content"></textarea><br>
    <input type="submit" value="Ajouter" id="submit" name="submit">
    
</form>
<p>repere la page</p>