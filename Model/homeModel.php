<?php 

	class homeModel extends Mysql
	{

		public function __construct()
		{
			parent::__construct();
		}

		public function setCliente(string $nombre, int $edad)
		{
			$query_insert = "INSERT INTO clientes(nombre,edad) VALUES (?,?)";
			$arraData = array($nombre, $edad);
			$request_insert = $this->insert($query_insert, $arraData);
			return $request_insert;
		}

		public function getCliente($id)
		{
			$sql= "SELECT * FROM clientes WHERE id_cliente = $id";
			$request = $this->select($sql);
			return $request;
		}

		public function updateCliente(int $id, string $nombre, int $edad)
		{
			$sql= "UPDATE clientes SET nombre = ?, edad = ? WHERE id_cliente = $id";
			$arraData = array($nombre, $edad);
			$request = $this->update($sql, $arraData);
			return $request;
		}

		public function delCliente($id)
		{
			$sql= "DELETE FROM clientes WHERE id_cliente = $id";
			$request = $this->delete($sql);
			return $request;
		}

		public function setProveedor(string $nombre, int $edad)
		{
			$query_insert = "INSERT INTO proveedor(nombre,edad) VALUES (?,?)";
			$arraData = array($nombre, $edad);
			$request_insert = $this->insert($query_insert, $arraData);
			return $request_insert;
		}

		public function getProveedor($id)
		{
			$sql= "SELECT * FROM proveedor WHERE id_proveedor = $id";
			$request = $this->select($sql);
			return $request;
		}

		public function updateProveedor(int $id, string $nombre, int $edad)
		{
			$sql= "UPDATE proveedor SET nombre = ?, edad = ? WHERE id_proveedor = $id";
			$arraData = array($nombre, $edad);
			$request = $this->update($sql, $arraData);
			return $request;
		}

		public function delProveedor($id)
		{
			$sql= "DELETE FROM proveedor WHERE id_proveedor = $id";
			$request = $this->delete($sql);
			return $request;
		}
	}

 ?>