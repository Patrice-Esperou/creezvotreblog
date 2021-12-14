<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Comment;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        return $comment;
    }

    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT  id, pseudo, content, createdAt, is_valid FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$articleId]);
     //   $comments = [];
     //  foreach ($result as $row) {
     //       $commentId = $row['id'];
      //      $comments[$commentId] = $this->buildObject($row);
      //  }
       // $result->closeCursor();
        return $result;
    }

    public function addComment(Parameter $post, $articleId)
    {
        $sql = 'INSERT INTO comment (pseudo, content, createdAt, article_id) VALUES (?, ?, NOW(), ?)';
        $result = $this->createQuery($sql, [$post->get('pseudo'), $post->get('content'), $articleId]);
        
    }

    public function editComment($commentId)
    {
        $commentId = $_POST['idcomment'];
        $sql = 'UPDATE comment SET is_valid = 1 WHERE id = ?';
        $result = $this->createQuery($sql, [$commentId]);
    
       
    }

    public function getComments()
    {
        $sql = 'SELECT * FROM comment ORDER BY id DESC';
        $result = $this->createQuery($sql);
        
        return $result;
    }

   

}