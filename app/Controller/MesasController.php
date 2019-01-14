<?php

	class MesasController extends AppController{

		public function index(){
			$this->set('mesas', $this->Mesa->find('all'));
		}

	}

?>