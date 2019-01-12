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
						),
						'unique'	=> array(
							'rule'	=> 'isUnique',
							'message' => 'Este documento ya esta en base de datos'
						)
					),
					'nombre' => array(
						'rule' =>	'notBlank'
					),
					'apellido' => array(
						'rule' => 'notBlank'
					),
					'telefono' => array(
						'notBlank'	=> array(
							'rule'	=> 'notBlank'
						),
						'numeric'	=> array(
							'rule'	=> 'numeric',
							'message'	=> 'Este campo solo resive numeros'
						)
					)
				);
	}

?>