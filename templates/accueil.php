<?php
require '../vendor/autoload.php' ;
require '../vendor/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/src/SMTP.php';
require '../vendor/phpmailer/src/Exception.php';


session_start();
$db = new PDO('mysql:host=localhost;dbname=blackblog2;', 'root', '');
if(isset($_POST['valider'])){
    if(!empty($_POST['email'])){
        $ident = rand(1000000, 9000000);
        $email = $_POST['email'];
        $insertUser = $db->prepare('INSERT INTO user(email, ident, confirm)VALUES (?, ?, ?)');
        $insertUser->execute(array($email, $ident, 0));
    
        $recupUser = $db->prepare('SELECT id, email, ident, confirm FROM user WHERE email = ?');
        $recupUser->execute(array($email));
        if($recupUser->rowCount() > 0){
            $userInfo = $recupUser->fetch();
            $_SESSION['id'] = $userInfo['id'];
        
function smtpmailer($to, $from, $from_name, $subject, $body)
{
    $mail = new PHPMailer\PHPMailer\PHPMailer();

        
        $mail->isSMTP();
        $mail->SMTPAuth = true;                     
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;                    
        $mail->Username = 'testemailblogocr@gmail.com';                 // SMTP username
        $mail->Password = '123azerty123';                           // SMTP password
                          
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->setFrom("testemailblogocr@gmail.com");
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->ADDReplyTo($from, $from_name);
        $mail->subject = $subject;
        $mail->Body = $body;
        $mail->addAddress($to);
        if(!$mail->Send())
        {
            $error="essais plus tard";
            return $error;
        }
        else
        {
            $error = "Merci votre Email a ete envoyé";
            return $error;
        } 
}                              
    
        $to = $_POST['email'];
        $from = 'testemailblogocr@gmail.com';
        $name = 'Padraig';
        $subj = 'Email de confirmation';
        $msg = 'http://localhost:8080/creezvotreblog/public/confirMail.php?id='.$_SESSION['id'].'&ident='.$ident;

        $error=smtpmailer($to, $from, $name, $subj, $msg);
}
}else{
    echo "veuillez";
}
}
   

?>
<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <main id="home">
    <section class="presentation">
        <div class="photo">
           <img src="img/profil.jpg" alt="photo de profil">
        </div> 
        <div class="nomprenom">
            <p>Patrice</p>
            <p>ESPEROU</p>
            <div class="cv">
            <a href="#">Curriculum Vitae</a>
        </div>
    </section>
    <div class="phraseaccroche">
        <p>L' expertise Du Développeur Par Exellence</p>
    </div>
    
        
        <section class="contact">        
        <form method="POST" action="">
        <h1>Contactez-nous</h1>
        <div class="separation"></div>
          <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label>Votre prénom</label>
                    <input type="text">
                    <i class="fa-solid fa-user"></i>
                </div>
                    <div class="groupe">
                      <label>Votre adresse e-mail</label>
                      <input type="email" name="email">
                      <i class="fa-solid fa-envelope"></i>
                   </div>
                    <div class="groupe">
                      <label>Votre téléphone</label>
                      <input type="text">
                      <i class="fa-solid fa-mobile-screen"></i>
                   </div>
            </div>
            <div class="droite">
                <div class="groupe">
                    <label>Message</label>
                    <textarea></textarea>
                </div>
            </div>
          </div>
        <div class="pied-formulaire" align="center">
            <button type="submit" name="valider">Envoyer votre message</button>
        </div></div>
        </form>
        </section>
    </main>
   
    <div class="footer">
    <a class="btn-primary" href="https://github.com/padraig11" title="GitHub" rel="noreferrer noopener" target="_blank">
            <i class="fa-brands fa-github" aria-hidden="true"></i></a>
    
            <a class="btn-primary" href="https://www.linkedin.com/in/patrice-esperou-92aaa7191/" title=" Linkedin Patrice Esperou" rel="noreferrer noopener" target="_blank">
           <i class="fa-brands fa-linkedin"></i>
        </a>
        <a class="btn-primary" href="https://www.facebook.com/creasite.narbonne" title=" Facebook creasite.narbonne" rel="noreferrer noopener" target="_blank">
           <i class="fab fa-facebook"></i>
        </a>
        <a class="btn-primary" href="../public/index.php?route=getComments">Admistration
        </a>
        </footer>
