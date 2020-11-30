<?php 

	class Home extends Controllers 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_id'] = 1;
			$data['tag_page'] = "home";
			$data['page_title'] = "Pagina principal";
			$data['page_name'] = "home";
			$data['page_content'] = "L";
			$this->views->getView($this, "home", $data);
		}

		public function insertar()
		{
			$data = $this->model->setUser("carlos", 22);
		}

		public function verClientes($id)
		{
			$data = $this->model->getUser($id);
		}


		public function actualizar()
		{
			$data = $this->model->updateCliente(1, "Roberto", 22);
			print_r($data);
		}

		public function eliminarClientes($id)
		{
			$data = $this->model->delCliente($id);
			print_r($data);
		}

	}

 ?>