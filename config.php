<?php
class config{
    private $host = 'localhost';
	private $usern = 'root';
	private $pass = '';
	private $db = 'mydb';
	
	protected $connect;
	
	public function __construct()
	{
		if (!isset($this->connect)) {
			
			$this->connect= new mysqli($this->host, $this->usern, $this->pass, $this->db);
			
			if (!$this->connect) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->connect;
	}
}
?>