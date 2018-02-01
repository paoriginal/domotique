<?php 
	class AdminGateway{
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
		
		public function isAdmin($log){
			$query="SELECT * FROM Utilisateur WHERE mail='$log' ";
			$this->con->executeQuery($query);
			$result=$this->con->getResults();
			$result = $result['0'];
			$Admin = new Admin($result['idUtilisateur'],$result['nom'],$result['prenom'],$result['mail'],$result['password']);
			return $Admin;
		}

	}