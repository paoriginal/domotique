<?php

	Class ControlAdmin{

		public function __construct ($action){
			global $vues;
			try{

				switch ($action) {

					case 'home':
						global $vues;
						$info = $this->getInfo();
						$data = $this->getTemperature();
						require $vues['home'];
						break;
						
					case 'seDeconnecter':
						$this->seDeconnecter();
						break;				

					case 'ajouterEquipement':
						$this->ajouterEquipement();
						break;

					case 'supprimerEquipement':
						$this->supprimerEquipement();
						break;

					case 'etatBouton':
						$this->etatBouton();
						break;

					case 'changePrise':
						$this->changePrise();
						break;

					default:
						$tabErreur[]="Action inconnue";
						require $vues['erreur'];
						break;
				}

			}
			catch(PDOException $e){
				throw new PDOException($e->getMessage());
				
			}
			catch(Exception $e){
				throw new Exception($e->getMessage());
			}
		}

		//Si le 'login' est présent dans la session : appel de isAdmin dans ModelAdmin
		//Pour savoir si l'utilisateur actuel est un admin
		public static function isAdmin(){
			if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {
				$log=Validation::sanitize($_SESSION['login'],gettype($_SESSION['login']));
				$mdpBool=Validation::sanitize($_SESSION['mdp'],'text');
				if ($mdpBool) {
					$bool=ModelAdmin::isAdmin($log,$_SESSION['mdp']);
					return $bool;
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}

		public function getInfo(){
			if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {
				$log=Validation::sanitize($_SESSION['login'],gettype($_SESSION['login']));
				$mdpBool=Validation::sanitize($_SESSION['mdp'],'text');
				if ($mdpBool) {
					$info=ModelAdmin::getInfo($log);
					return $info;
				}
				else{
					return null;
				}
			}
			else{
				return null;
			}
		}

		public function getTemperature(){
			if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {
				$log=Validation::sanitize($_SESSION['login'],gettype($_SESSION['login']));
				$mdpBool=Validation::sanitize($_SESSION['mdp'],'text');
				if ($mdpBool) {
					$temperature=ModelAdmin::getTemperature();
					return $temperature;
				}
				else{
					return null;
				}
			}
			else{
				return null;
			}
		}

		public function changePrise(){
			$idPrise = $_POST['idPrise'];
			if(!is_null($idPrise)) {
				$idPrise = intval($idPrise, 10);
				$etat=ModelAdmin::changePrise($idPrise);
			}
			else{
				$etat="failed";
			}
			//$json["json"] = json_encode($etat);
			//header('Content-Type: application/json');
			echo json_encode($etat);
		}

		public function etatBouton(){
			$idPrise = $_POST['idPrise'];
			if(!is_null($idPrise)) {
				$idPrise = intval($idPrise, 10);
				$etat=ModelAdmin::etatBouton($idPrise);
			}
			else{
				$etat="failed";
			}
			//$json["json"] = json_encode($etat);
			//header('Content-Type: application/json');
			echo json_encode($etat);
		}

		//Permet de passer d'administrateur à simple visiteur
		//Détruit la session
		//Une redirection vers l'index est fait ensuite
		public function seDeconnecter(){
			session_unset();
			session_destroy();
			header ('location: index.php');

		}

		//Récupère les valeurs necessaire pour ajouter un acteur dans la base de donnée
		//Appel d'ajouterActeur du ModelActeur en donnant les information necessaire
		//Une redirection vers l'index est faite ensuite
		public function ajouterEquipement(){
			header ('location: index.php');
		}

		//Permet de supprimer un acteur grâce à son id
		//Une redirection vers l'index est faite ensuite
		public function supprimerEquipement(){			
			header ('location: index.php');
		}
	}
?>