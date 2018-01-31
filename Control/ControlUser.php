<?php

	Class ControlUser{

		public function __construct($action){
			try{
				$action=Validation::sanitize($action,gettype($action));
				switch ($action) {
					case 'connexion':
						$this->connexion();
						break;
					case 'seConnecter':
						$this->seConnecter();
						break;

					default:
						global $vues;
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

		//Fonction permettant d'accéder à la page pour passer admin 
		//Disponible seulement si on n'est pas déjà en admin
		public static function seConnecter(){
			global $vues;
			require $vues['seConnecter'];
		}

		//Bouton de connexion
		//Si la connexion a reussi : vérification que la personne est un admin via le statut
		public function connexion(){
			$pseudo=$_REQUEST['email'];
			$password=$_REQUEST['passwd'];
			$pseudo=Validation::sanitize($pseudo,gettype($pseudo));
			$passwordBool=Validation::sanitize($password,'text');
			if ($passwordBool) {
				$admin = ModelAdmin::connexion($pseudo,$password);
				if ($admin != null) {
					$_SESSION['login']=$admin->getMail();
					$_SESSION['mdp']=$admin->getMdp();

					header ('location: home');
				}
			}
		}
		
	}
?>