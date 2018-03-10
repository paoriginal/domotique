<?php 
	class PriseGateway{
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
		
		public function etatBouton($idPrise){
			$query="SELECT * FROM Prise WHERE idPrise='$idPrise' ";
			$this->con->executeQuery($query);
			$result=$this->con->getResults();
			$result = $result['0']['etat'];

			if ($result == 1) {
				$query="UPDATE Prise SET etat = 0 WHERE idPrise = :idPrise";
				$this->con->executeQuery($query, array(':idPrise'=>array($idPrise,PDO::PARAM_INT)));
			}
			else{
				$query="UPDATE Prise SET etat = 1 WHERE idPrise = :idPrise";
				$this->con->executeQuery($query, array(':idPrise'=>array($idPrise,PDO::PARAM_INT)));
			}
			
			return $result;
		}

		public function changePrise($idPrise){
			$query="SELECT * FROM Prise WHERE idPrise='$idPrise' ";
			$this->con->executeQuery($query);
			$result=$this->con->getResults();
			$result = $result['0']['etat'];

			if ($result == 1) {
				$query="UPDATE Prise SET etat = 0 WHERE idPrise = :idPrise";
				$this->con->executeQuery($query, array(':idPrise'=>array($idPrise,PDO::PARAM_INT)));
			}
			else{
				$query="UPDATE Prise SET etat = 1 WHERE idPrise = :idPrise";
				$this->con->executeQuery($query, array(':idPrise'=>array($idPrise,PDO::PARAM_INT)));
			}

			return $result;
		}
	}