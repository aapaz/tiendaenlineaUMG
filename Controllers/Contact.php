<?php 
	
	class Contact extends Controllers 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Contact()
		{
			$data['page_id'] = 3;
			$data['tag_page'] = "Contact - Tienda Virtual";
			$data['page_title'] = "Contact - Tienda Virtual";
			$data['page_name'] = "contact";
			$this->views->getView($this, "contact", $data);
		}
	}
 ?>