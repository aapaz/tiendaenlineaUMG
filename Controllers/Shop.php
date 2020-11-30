<?php 
	
	class Shop extends Controllers 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function shop()
		{
			$data['page_id'] = 3;
			$data['tag_page'] = "Shop - Tienda Virtual";
			$data['page_title'] = "Shop - Tienda Virtual";
			$data['page_name'] = "shop";
			$this->views->getView($this, "shop", $data);
		}
	}
 ?>