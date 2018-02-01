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

		public function creationCompte($nom, $prenom, $mail, $passwd){
			$query='INSERT INTO Utilisateur(nom,prenom,mail,password) VALUES(:nom,:prenom,:mail,:passwd)';
			$this->con->executeQuery($query,array(':nom'=>array($nom, PDO::PARAM_STR),
												':prenom'=>array($prenom, PDO::PARAM_STR),
												':mail'=>array($mail, PDO::PARAM_STR),
												'passwd'=>array($passwd, PDO::PARAM_STR)));
		}

	}