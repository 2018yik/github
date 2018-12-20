<?php

class Menu
{
	

	
	private $name;
	private $address;
	private $dname;
	private $tel;

    public function getMenu($id) {
        $db=mysqli_connect('localhost', 'root', '', 'omj');
		$query = "Select * From takeaway,district where takeaway.did = district.did and twid = $id";
		$result = mysqli_query($db,$query);
		while ($row = mysqli_fetch_assoc($result)) {
			$name = $row['name'];
			$address = $row['address'];
			$dname = $row['mainname'];
			$tel = $row['tel'];
		}
	}
		
		public function getName() {
			return $name;
		}
		public function getAddress() {
			return $address;
		}
		
		public function getDname() {
			return dname;
		}
		
		public function getTel() {
			return tel;
		}
			
		
    }
    

	

?>