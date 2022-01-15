<?php $this->title = "Connexion"; ?>
<body>
<h1>Connection au blog !</h1>

<?= $this->session->show('error_login'); ?>

<main class="inscriptconnect">
    <form method="post" action="../public/index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        </br></br>
        <input type="submit" value="Connexion" id="submit" name="submit">
    </form>
</main>
</body>