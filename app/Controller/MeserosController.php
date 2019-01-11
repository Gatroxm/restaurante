<?php 
	
	/**
	 * summary
	 */
	class MeserosController extends AppController
	{


		public function index()
		{
			$this->set('meseros', $this->Mesero->find('all'));
		}

		public function ver($id = null)
		{
			if (!$id){
				throw new NotFoundException('Datos invalidos.');	
			}

			$mesero = $this->Mesero->findByid($id);

			if (!$mesero) {
				throw new NotFoundException('El mesero no existe.');	
			}

			$this->set('mesero', $mesero);
		}

		public function crear(){

			if ($this->request->is('post')) {

				$this->Mesero->create();
				if ($this->Mesero->save($this->request->data)) {
					$this->Session->setFlash('El mesero ha sido creado.','flash_success');
					
					return $this->redirect(array('action' => 'index'));
				}else{
					$this->Session->setFlash('El mesero no se pudo crear.','flash_error');
				}
				

			}

		}
	    
	}


?>