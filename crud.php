<?php
include_once 'config.php';

class crud extends config
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get($query)
	{		
		$sql = $this->connect->query($query);
		
		if ($sql == false) {
			return false;
		} 
		
		$data = array();
		
		while ($line = $sql->fetch_assoc()) {
			$data[] = $line;
		}
		
		return $data;
	}
	
		
	public function run($query) 
	{
		$sql = $this->connect->query($query);
		
		if ($sql == false) {
			echo 'Error';
			return false;
		} else {
			return true;
		}		
	}
	
	
	public function del($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$sql= $this->connect->query($query);
	
		if ($sql == false) {
			echo 'Error ';
			return false;
		} else {
			return true;
		}
	}
	
	public function escape_string($value)
	{
		return $this->connect->real_escape_string($value);
	}
	public function desc($a,$b,$c) 
	{
		if($a!="")return " Size  : ".$a." MB";
		else if($b!="")return " Weight  :  ".$b." KG";
		else if($c!='') return " Dimension  :  ".$c." M";
		else return " Description  :  None";
		
	}
}
?>
<?php
class validate
{
	public function check($data, $field)
	{
		$text= null;
		foreach ($field as $val) {
			if (empty($data[$val])) {
				$text .= "$val field empty <br />";
			}
		} 
		return $text;
	}
}
?>
