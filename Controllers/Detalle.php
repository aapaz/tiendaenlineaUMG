<?php 
	
	class Detalle extends Controllers 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Detalle()
		{
			$data['page_id'] = 2;
			$data['tag_page'] = "Detalle - Tienda Virtual";
			$data['page_title'] = "Detalle - Tienda Virtual";
			$data['page_name'] = "detalle";
			$this->views->getView($this, "detalle", $data);
		}
	}
 ?>