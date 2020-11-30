<?php 
	
	class Clientes extends Controllers 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Clientes()
		{
			$data['page_id'] = 3;
			$data['tag_page'] = "Clientes - Tienda Virtual";
			$data['page_title'] = "Clientes - Tienda Virtual";
			$data['page_name'] = "clientes";
			$this->views->getView($this, "clientes", $data);
		}

		public function insertar()
		{
			$data = $this->model->setUser("carlos", 22);
		}
	}
 ?>