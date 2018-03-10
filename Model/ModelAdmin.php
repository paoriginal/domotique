<?php
	class ModelAdmin{

		public static function connexion($log,$pass){
			$adminGateway = new AdminGateway();
			$admin = $adminGateway->isAdmin($log);
			if($admin != null && password_verify($pass, $admin->getMdp())){
 				return $admin;
 			}
 			else{
 				return false;
 			}
		}

		public static function isAdmin($log, $pass_crypt){
			$adminGateway = new AdminGateway();
			$admin = $adminGateway->isAdmin($log);
			if($pass_crypt == $admin->getMdp()){
				return true;
			}
			else{
				return false;
			}
		}

		public static function changePrise($idPrise){
			$priseGateway = new PriseGateway();
			$etat = $priseGateway->changePrise($idPrise);
			return $etat;
		}

		public static function etatBouton($idPrise){
			$priseGateway = new PriseGateway();
			$etat = $priseGateway->etatBouton($idPrise);
			return $etat;
		}

		public static function getInfo($log){
			$adminGateway = new AdminGateway();
			$info = $adminGateway->isAdmin($log);
			return $info;
		}

		public static function getTemperature(){
			$temperatureGateway = new TemperatureGateway();
			$temperature = $temperatureGateway->getTemperature();
			return $temperature;
		}

		public static function creationCompte($nom, $prenom, $mail, $passwd){
			$adminGateway = new AdminGateway();
			$adminGateway->creationCompte($nom, $prenom, $mail, password_hash($passwd, PASSWORD_DEFAULT));
		}

		public static function ajouterEquipement($nom,$prenom,$pseudo,$mdp,$statut){
			$adminGateway = new AdminGateway();
			$adminGateway->ajouterEquipement($nom,$prenom,$pseudo,$mdp,$statut);
		}

		public static function supprimerEquipement(){
			$adminGateway = new AdminGateway();
			$tabAdmin = $adminGateway->supprimerEquipement();
			return $tabAdmin;
		}
	}