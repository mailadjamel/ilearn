<?php

/**
* 
*/

class SignIn 
{	

	
	public static function Login($pseudo,$pwd)
	{
		$pass_hache = sha1($pwd);
		$tr=false;
		$BDD = Dbase::getInstance();
		$requete= $BDD->query('SELECT * FROM etudiant');
		
		while($resultat = $requete->fetch()){
			 if ( $resultat['pseudo'] == $pseudo && $resultat['Mot_de_passe']==$pass_hache){
			 		$etudiant=$resultat['ID_Et'];
			 		$tr=true;
			 		
			 	} 
			 }
		
		if($tr){
		
		$_SESSION['id'] = $etudiant;
		$_SESSION['pseudo'] = $pseudo;
		

		}
		


	}
}

?>