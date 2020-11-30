<?php 
	
	class Carrito extends Controllers 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Carrito()
		{
			$data['page_id'] = 2;
			$data['tag_page'] = "Carrito - Tienda Virtual";
			$data['page_title'] = "Carrito - Tienda Virtual";
			$data['page_name'] = "carrito";
			$this->views->getView($this, "carrito", $data);
		}
	}
 ?>