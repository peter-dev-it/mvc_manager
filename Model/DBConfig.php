<?php 
	class Database
	{
		private $hostname = 'localhost';
		private $username = 'root';
		private $pass = '';
		private $dbname = 'quanlythanhvien_mvc';

		private $conn = NULL;
		private $result = NULL;

		public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
			if (!$this->conn) {
				echo "Kết nối thất bại";
				exit();
			}else
			{
				mysqli_set_charset($this->conn, 'utf8');
			}
			return $this->conn;
		}

		// Thuc thi cau lenh truy van
		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);
			return $this->result;
		}



		// Phuong thuc lay du lieu 
		public function getData()
		{
			if ($this->result) { 
				$data = mysqli_fetch_array($this->result);
			}
			else
			{
				$data = 0;
			}
			return $data;
		}


		// Phuong thuc lay du lieu theo id
		public function getDataID($table, $id)
		{
			$sql = "SELECT * FROM $table WHERE id = '$id'";
			$this->execute($sql);
			if ($this->num_rows() != 0) { 
				$data = mysqli_fetch_array($this->result);
			}
			else
			{
				$data = 0;
			}
			return $data;
		}

		// Phuong thuc lay toan bo du lieu
		public function getAllData($table)
		{
			$sql = "SELECT * FROM $table";
			$this->execute($sql);
			if ($this->num_rows() == 0) {
				return $data = 0;
			}
			else
			{
				while ($datas = $this->getData()) {
				    $data[] = $datas;
				}
			}
			return $data;
		}

		// Phuong thuc dem so ban ghi
		public function num_rows()
		{
			if($this->result){
				$num = mysqli_num_rows($this->result);
			}else{
				$num = 0;
			}
			return $num;
		}

		// Phuong thuc them du lieu 
		public function InsertData($hoten, $namsinh, $quequan)
		{
			$sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan) VALUES(null, '$hoten', '$namsinh', '$quequan')";
			return $this->execute($sql);
		}

		// Phuong thuc sua du lieu 
		public function UpdateData($id, $hoten, $namsinh, $quequan)
		{
			$sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh = '$namsinh', quequan = '$quequan' WHERE id = '$id'";
			return $this->execute($sql);
		}

		// Phuong thuc xoa 
		public function Delete($id, $table)
		{
			$sql = "DELETE FROM $table WHERE id = '$id'";
			return $this->execute($sql);
		}

		// Phuong thuc tim kiem du lieu theo tu khoa
		public function SearchData($table, $key)
		{
			$sql = "SELECT * FROM $table WHERE hoten REGEXP '$key' ORDER BY id DESC";
			$this->execute($sql);
			if ($this->num_rows() == 0) {
				return $data = 0;
			}
			else
			{
				while ($datas = $this->getData()) {
				    $data[] = $datas;
				}
			}
			return $data;
		}

	}

 ?>