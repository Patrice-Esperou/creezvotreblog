<?php $this->title = "Inscription"; ?>
<body>
<h1>Inscription sur le blog !</h1>

<?= $this->session->show('error_register'); ?>

<main class="inscriptconnect">
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
        </br></br>
        <input type="submit" value="Inscription" id="submit" name="submit">
    </form>
</main>
</body>