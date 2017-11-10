<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\Network\Exception\BadRequestException;

   class HomeController extends AppController{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
      public function index(){
      }
   }
?>