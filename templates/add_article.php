<?php $this->title = "Nouvel article"; ?>
<h1>Publication D'un Nouveau Blog  &#128522 </h1>

<div>
<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?> <!--formulaire ajouter un blog-->
    <div class="publishblog" align="center">
    <form method="post" action="../public/index.php?route=addArticle">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"></textarea><br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author"><br>
     </div>
     <div class="button">
        <input type="submit" class="btn btn-primary" value="Publier votre blog" id="submit" name="submit">
    </div>
    </form><br>
   
    <a href="../public/index.php">Retour à l'accueil</a>
</div>

