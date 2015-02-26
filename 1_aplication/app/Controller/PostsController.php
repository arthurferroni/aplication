<?php

class PostsController extends AppController {

	function index(){


		$dados = $this->Post->find('all');
		$this->set('posts', $dados);

	}
	function view($id=null,$id2=null){

		$view = array(4);
			$this->Post->id = $id;

			$view[0]  = $this->rest($id);
			$view[1] = $this->Post->read();

			$this->Post->id = $id2;

			$view[2]  = $this->rest($id2);
			$view[3] = $this->Post->read();

			$this->set('view',$view);


	}

	private function rest($rest=null)
	{
		return $rest%2;
	}


}
