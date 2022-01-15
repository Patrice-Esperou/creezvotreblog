
<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 

<main id="home">
    <section class="presentation">
        <div class="photo">
           <img src="../public/img/profil.jpg" alt="photo de profil">
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
        <form method="POST" action="?route=sendMail">
        <h1>Contactez-nous</h1>
        <div class="separation"></div>
          <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label>Votre prénom</label>
                    <input type="text" name="pseudo">
                    <i class="fa-solid fa-user"></i>
                </div>
                    <div class="groupe">
                      <label>Votre adresse e-mail</label>
                      <input type="email" name="email">
                      <i class="fa-solid fa-envelope"></i>
                   </div>
                    <div class="groupe">
                      <label>Votre téléphone</label>
                      <input type="text" name="tel" class="form-control">
                      <i class="fa-solid fa-mobile-screen"></i>
                   </div>
            </div>
            <div class="droite">
                <div class="groupe">
                    <label>Message</label>
                    <textarea name ="message"></textarea>
                </div>
            </div>
          </div>
        <div class="pied-formulaire" align="center">
            <button type="submit" name="valider">Envoyer votre message</button>
        </div></div>
        </form>
        </section>
    </main>
  
   
