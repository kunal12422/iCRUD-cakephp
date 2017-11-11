<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\Network\Exception\BadRequestException;

   class ListController extends AppController{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadModel('Users');
    }

    public function index()
    {
        $this->autoRender = false;
        
        $users = $this->Users->find('all');
        // $response = $this->response;
        // $response->withType('application/json');
        // $response->withCharset('UTF-8');
        // $response->withStringBody(json_encode($users));
        $this->response->type('json');
        $this->response->body(json_encode($users));
   
        return $this->response;
    }

    public function view($id=null)
    {
        $this->autoRender = false; 
        $user= $this->Users->get($id);
        $this->response->type('json');
        $this->response->body(json_encode($user));
        return $this->response;
    }

    public function add()
    {
        $this->autoRender = false; 
        $newUser= $this->Users->newEntity($this->request->getData());
        if ($this->Users->save($newUser)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->response->type('json');
        $this->response->body(json_encode(array('message'=>$message,'data'=>$newUser)));
        return $this->response;
    }

    public function edit($id=null)
    {
        $this->autoRender = false; 
        $user = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->response->type('json');
        $this->response->body(json_encode(array('message'=>$message,'data'=>$user)));
        return $this->response;
    }

    public function delete($id=null)
    {
        $this->autoRender = false; 
        $user = $this->Users->get($id);
        $message = 'Deleted';
        if (!$this->Users->delete($user)) {
            $message = 'Error';
        }
        $this->response->type('json');
        $this->response->body(json_encode(array('message'=>$message,'data'=>$user)));
        return $this->response;
    }
}
   
?>