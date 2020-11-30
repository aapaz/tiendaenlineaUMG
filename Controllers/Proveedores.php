<?php 
	
	class Proveedores extends Controllers 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Proveedores()
		{
			$data['page_id'] = 3;
			$data['tag_page'] = "Proveedores - Tienda Virtual";
			$data['page_title'] = "Proveedores - Tienda Virtual";
			$data['page_name'] = "proveedores";
			$this->views->getView($this, "proveedores", $data);
		}
	}