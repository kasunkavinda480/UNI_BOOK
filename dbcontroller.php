<!-
Code Initiator - NAFEES IDREES
Begin Date - jan 10 - 2022
>

<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "unibook";
	private $connection;
	
	function __construct() {
		$this->connection = $this->connectDB();
	}
	
	function connectDB() {
		$connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $connection;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->connection,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if (!empty($resultset)) {
            return $resultset;
        }
    }
	
	function numRows($query) {
		$result  = mysqli_query($this->connection,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>
