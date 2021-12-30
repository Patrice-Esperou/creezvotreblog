<?php

namespace App\src\controller;

use App\config\Parameter;

class BackController extends Controller
{
    public function addArticle(Parameter $post)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Article');
            if(!$errors) {
                $this->articleDAO->addArticle($post);
                $this->session->set('add_article', 'Le nouvel article a bien été ajouté');
                header('Location: ../public/index.php');
            }
            return $this->view->render('add_article', [
                'post' => $post,
                'errors' => $errors
            ]);
        }
        return $this->view->render('add_article');
    }

    public function editArticle(Parameter $post, $articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Article');
            if(!$errors) {
                $this->articleDAO->editArticle($post, $articleId);
                $this->session->set('edit_article', 'L\' article a bien été modifié');
                header('Location: ../public/index.php');
            }
            return $this->view->render('edit_article', [
                'article' => $article,
                'errors' => $errors
            ]);
        }
        $post->set('id', $article->getId());
        $post->set('title', $article->getTitle());
        $post->set('content', $article->getContent());
        $post->set('author', $article->getAuthor());

        return $this->view->render('edit_article', [
            'article' => $article
        ]);
    }

    public function deleteArticle($articleId)
    {
        $this->articleDAO->deleteArticle($articleId);
        $this->session->set('delete_article', 'L\' article a bien été supprimé');
        header('Location: ../public/index.php');
    }

    public function deleteComment($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');
        header('Location: ../public/index.php');
    }

    public function logout()
    {
        $this->session->remove('login');
        $this->session->remove('id');
        $this->session->remove('pseudo');
        $this->session->remove('role');
        
        $this->session->stop();
        header('Location: ../public/index.php');
    }

    public function addComment(Parameter $post, $articleId)
    {
        if($post->get('submit')) { 
           $errors = $this->validation->validate($post, 'Comment');
          if(!$errors) {
          
                $this->commentDAO->addComment($post, $articleId);
                $this->session->set('add_comment', 'Le nouveau commentaire a bien été ajouté');
                header('Location: ../public/index.php');
           }
            $article = $this->articleDAO->getArticle($articleId);
          
            $comments = $this->commentDAO->getComments();
            return $this->view->render('admin_Valid_Comment', [
                'article' => $article,
                'comments' => $comments,
                //'post' => $post,
               'errors' => $errors
            ]);
        }
    }

    public function displayComments()
    {
        $comments = $this->commentDAO->getComments();
            return $this->view->render('admin_Valid_Comment', [
               'comments' => $comments               
            ]);
    }

    public function editComment($commentId, $articleId)

    {
       $editComment = $this->commentDAO->editComment($commentId);
    
       $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        $article = $this->articleDAO->getArticle($articleId);
        
        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
      
   // }   
    
}
}