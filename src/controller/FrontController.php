<?php
namespace App\src\controller;

use App\config\Parameter;


use PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

class FrontController extends Controller
{
    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('home', [
           'articles' => $articles
        ]);
    }

    public function accueil()
    {
        return $this->view->render('accueil');
    
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function addComment(Parameter $post, $articleId)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Comment');
            if(!$errors) {
                $this->commentDAO->addComment($post, $articleId);
                $this->session->set('add_comment', 'Votre commentaire est en attente de validation par administrateur et sera prochainement publié  &#128513');
                header('Location: ../public/index.php?route=article&articleId='.$articleId);
            }
            $article = $this->articleDAO->getArticle($articleId);
            $comments = $this->commentDAO->getCommentsFromArticle($articleId);
            return $this->view->render('admin', [
                'article' => $article,
                'comments' => $comments,
                'post' => $post,
                'errors' => $errors
            ]);
        }
    }

    public function register(Parameter $post)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'User');
            if($this->userDAO->checkUser($post)) {
                $errors['pseudo'] = $this->userDAO->checkUser($post);
            }
            if(!$errors) {
                $this->userDAO->register($post);
                $this->session->set('register', 'Votre inscription a bien été effectuée');
                header('Location: ../public/index.php');
            }
            return $this->view->render('register','base', [
                'post' => $post,
                'errors' => $errors
            ]);

        }
        return $this->view->render('register');
    }

    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->userDAO->login($post);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Content de vous revoir');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('pseudo', $post->get('pseudo'));
                $this->session->set('role',  $result['result']['role']);
                return $this->view->render('accueil');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                return $this->view->render('login', [
                    'post'=> $post
                ]);
            }
        }
        return $this->view->render('login');
    }
    public function sendMail(Parameter $post){
        //implementer la logique d'envoi de mailer
        $to = 'testemailblogocr@gmail.com';
        $from = $post->get("email");
        $from_name = 'Padraig';
        $subj = 'message du blog';
        $msg = $post->get('message').' '. $post->get('tel');
        $this->smtpmailer($to, $post->get('pseudo'), $from_name, $subj, $msg);
        return $this->view->render('accueil');
    }
    private function smtpmailer($to, $from, $from_name, $subject, $body): bool
    {
      // var_dump(func_get_args()); die;  
        $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPAuth = true;                     
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;                    
            $mail->Username = 'testemailblogocr@gmail.com';                 // SMTP username
            $mail->Password = '123azerty123';                           // SMTP password
                              
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->setFrom($from);
            $mail->FromName=$from_name;
            $mail->Sender=$to;
            $mail->ADDReplyTo($from, $from_name);
            $mail->subject = $subject;
            $mail->Body = $body;
            $mail->addAddress($to);
    
            return $mail->send();
         
            
    } 
}