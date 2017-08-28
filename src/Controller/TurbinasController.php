<?php
namespace App\Controller;

use App\Controller\AppController;

class TurbinasController extends AppController
{

	public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');
		
    }
	
    public function index()
    {
		/*$action = $this->Crud->action(); // Gets the IndexAction object
		debug($action->config()); // Show all configuration related to this action
		return $this->Crud->execute();*/
		$this->set('turbinas', $this->Turbinas->find('all'));
		$action = $this->Crud->action();
		$action->config('scaffold.actions', ['view', 'add', 'edit']);
		return $this->Crud->execute();
    }
	
	public function add()
    {
		/*$action = $this->Crud->action(); // Gets the IndexAction object
		debug($action->config()); // Show all configuration related to this action
		return $this->Crud->execute();*/
		//$this->set('turbinas', $this->Turbinas->find('all'));
		$action = $this->Crud->action();
		$action->config('scaffold.actions', ['view', 'add', 'edit']);
		return $this->Crud->execute();
    }
	
	public function edit()
    {
		/*$action = $this->Crud->action(); // Gets the IndexAction object
		debug($action->config()); // Show all configuration related to this action
		return $this->Crud->execute();*/
		//$this->set('turbinas', $this->Turbinas->find('all'));
		$action = $this->Crud->action();
		$action->config('scaffold.actions', ['view', 'add', 'edit']);
		return $this->Crud->execute();
    }
	
	public function delete($id = null)
	{
		$entity = $this->Turbinas->get($id);
		if($entity["active"]===false){
			$result = $this->Turbinas->delete($entity);
			$this->Flash->success(__('La turbina ID: '.$id.' ha sido eliminada.'));
            return $this->redirect(['action' => 'index']);
		}else{
			$this->Flash->error(__('La turbina ID: '.$id.' debe estar apagada antes de eliminar.'));
			//return $this->redirect(['action' => 'index']);
			return $this->redirect( $this->referer() );
		}
	}
	
}