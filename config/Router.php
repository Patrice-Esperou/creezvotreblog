<?php

namespace App\config;
use App\src\controller\BackController;
use App\src\controller\ErrorController;
use App\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;
    private $backController;
    private $errorController;
    private $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        $parameters = $this->request->getGet();
        $route = $parameters->get('route');
        // var_dump($route);
        try{
            if(isset($route))
            {
  
                if($route === 'article'){
                    $this->frontController->article($this->request->getGet()->get('articleId'));
                }
                elseif($route === 'valideComments'){
                    $this->backController->editComment($this->request->getGet()->get('commentId'), $this->request->getGet()->get('articleId'));
                }
                elseif($route === 'addArticle'){
                    $this->backController->addArticle($this->request->getPost());
                }
                elseif($route === 'editArticle'){
                    $this->backController->editArticle($this->request->getPost(), $this->request->getGet()->get('articleId'));
                }
                elseif($route === 'deleteArticle'){
                    $this->backController->deleteArticle($this->request->getGet()->get('articleId'));
                }
                
                elseif($route === 'getComments'){
                    $this->backController->displayComments();
                }

                elseif($route === 'addComment'){                   
                    $this->backController->addComment($this->request->getPost(), $this->request->getGet()->get('articleId'));
                }
                
                elseif($route === 'register'){
                    $this->frontController->register($this->request->getPost());
                }
                elseif($route === 'login'){
                    $this->frontController->login($this->request->getPost());
                }
                elseif($route === 'logout'){
                    $this->backController->logout();
                }
                elseif($route === 'accueil'){
                    $this->frontController->accueil();
                }
                elseif($route === 'home'){
                    $this->frontController->home();
                }
                
                else{
                    $this->errorController->errorNotFound();
                }
            }
            else{
                $this->frontController->home();
            }
        }
        catch (Exception $e)
        {
            $this->errorController->errorServer();
        }
    }
}