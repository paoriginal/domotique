<?php 
	class TemperatureGateway{
		private $con;
		private $tabTest;
		public function __construct() {
			try{
				$this->con = new Connexion(DSN,USERNAME,PASSWORD);
			}
			catch(Exception $e){
				throw new Exception($e->getMessage());
			}
		}
		
		public function getTemperature(){
			$query='SELECT * FROM Temperature';
			$this->con->executeQuery($query);
			$tabtmp = $this->con->getResults();
			foreach($tabtmp as $row){
				$temperature[] = array(date('d-m-Y-H-i-s',strtotime($row['date'])),$row['temperature']);
			}
			return $temperature;
		}
	}