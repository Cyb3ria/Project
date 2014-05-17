<?php
	class Login
	{
		private $m_sNaam;
		private $m_iImage;

		public function __set($p_sProperty, $p_vValue)
			{
				switch($p_sProperty){
					case 'Naam':
						$this->m_sNaam =$p_vValue;
						break;
					case 'Image':
						$this->m_iImage =$p_vValue;
						break;
				}
			}
		public function __get($p_sProperty)
			{
				switch($p_sProperty)
				{
					case 'Naam':
						return $this->m_sNaam;
						break;
					case 'Image':
						return $this->$p_vValue;
						break;
				}
			}

		public function getAll()
			{
				$conn = new mysqli("localhost", "root", "azerty", "project");	
				$sql="select * from tbl_login";
				$result = $conn->query($sql);
				
				return $result;

			}

		/*public function getImg()
			{
				$conn = new mysqli("localhost", "root", "azerty", "project");	
				$sql="select avatar from tbl_login where naam =".$_GET['naam']."";
				$result = $conn->query($sql);
				
				return $result;

			}*/

			/*public function getImg($userNaam)
 			 {

				   $conn = new mysqli("localhost", "root", "azerty", "project");
				   $sql = "SELECT loginID FROM tbl_user WHERE naam = '$userNaam'";
				   echo $sql;
				   $result = $conn->query($sql);
				   

				   if($result)
				   {
				    $results = mysqli_fetch_array($result, MYSQL_ASSOC);

				    $naamUser = $_SESSION['naam'];
				    $avatarUser = $_SESSION['avatar'];
				    $userID = $results['loginID'];

				    return $userID;
				    return $avatarUser;
				    return $naamUser;
				   }
				  }*/


		public function save()
			{
				
				$conn = new mysqli("localhost", "root", "azerty", "project");
				$sql = "insert into tbl_login (naam, avatar) VALUES
				('". $conn->real_escape_string($this->m_sNaam) ."' ,
				 '". $conn->real_escape_string($this->m_iImage) ."')";
				$conn->query($sql);
				//$_SESSION['naam']=$this->m_sNaam;

			}


	}
?>