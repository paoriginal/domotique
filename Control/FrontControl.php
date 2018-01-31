<?php
	class frontControl
	{
		private $listeAction_User = array('seConnecter','connexion');
		private $listeAction_Admin = array('ajouterEquipement','supprimerEquipement','seDeconnecter','home');

		public function __construct(){
			try{

				if(isset($_REQUEST['action'])){
					$action=$_REQUEST['action'];
					
					$action=Validation::sanitize($action,gettype($action));
				}
				else{
					$action='seConnecter';
				}

				switch ($action) {
					case in_array($action, $this->listeAction_User):
						$this->actionUtilisateur($action);
						break;
					
					case in_array($action, $this->listeAction_Admin):
						$this->actionAdmin($action);
						break;

					default:
						$this->actionUtilisateur('erreur');
						break;
				}
			}
			catch(PDOException $e){
				global $vues;
				$tabErreur[]=$e->getMessage();
				require $vues['erreur'];
			}
			catch(Exception $e){
				global $vues;
				$tabErreur[]=$e->getMessage();
				require $vues['erreur'];
			}
		}

		//Si l'action est présente la liste d'action des acteurs la fonction
		//créé un nouveau controlUser avec l'action en question
		public function actionUtilisateur($action){
			$controlUser = new ControlUser($action);
		}

		//Vérifie d'abord que l'utilisateur est un admin
		//sinon il est redirigé vers la page de connexion.
		//Ensuite, si l'action est présente la liste d'action des admins la fonction
		//créé un nouveau controlUser avec l'action en question
		public function actionAdmin($action){
			$bool=ControlAdmin::isAdmin();
			if($bool){
				$controlAdmin = new ControlAdmin($action);
			}
			else{
				header('location: seConnecter');
			}
		}
	}