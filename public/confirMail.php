<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=blackblog2;', 'root', '');
if(isset($_GET['id']) AND !empty($_GET['id']) AND !empty($_GET['ident']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $getident = $_GET['ident'];
    $recupUser = db->prepare('SELECT id,email, ident, confirm FROM user WHERE id = ? AND ident = ?');
    $recupUser->execute(array($getid, $getident));
    if($recupUser->rowCount() > 0){
        $userInfo = $recupUser->fetch();
        if($userInfo['confirm'] != 1){
            $updateConfirm = $db->prepare('UPDATE user SET confirm = ? WHERE id = ?');
            $updateConfirm->execute(array(1, $getid));
            $_SESSION['ident'] = $getident;
            header('Location: index.php');
        }else{
            $_SESSION['ident'] = $getident;
            header('Location: index.php');
        }
    }else{
        echo "Votre identifiant est incorrect";
        }
     } else{
        echo "Aucun utilisateur trouvé";
}
?>