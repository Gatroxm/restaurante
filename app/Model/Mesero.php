<?php 
	
	/**
	 * summary
	 */
	class Mesero extends AppModel
	{
		public $validate = array(
					'doc' => array(
						'notBlank'	=> array(
							'rule'	=> 'notBlank'
						),
						'numeric'	=> array(
							'rule'	=> 'numeric',
							'message'	=> 'Este campo solo resive numeros'
						)
					),
					'nombre' => array(
						'rule' =>	'notBlank'
					),
					'apellido' => array(
						'rule' => 'notBlank'
					),
					'telefono' => array(
						'rule'	=> 'notBlank'
					)
				);
	}

?>