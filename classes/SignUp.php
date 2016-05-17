<?php

/**
* pseudo ,nom,prenom,pwd,email
*/
class SignUp
{
	
	public static function  Inscri($pseudo,$Nom,$Prenom,$Email,$pwd,$Date_de_naissance)
	{	
		$pass_hache = sha1($pwd);
		$tr=false;
		$BDD = Dbase::getInstance();
		$requete= $BDD->query('SELECT * FROM etudiant');
		while($resultat = $requete->fetch()){
			 if ( $resultat['pseudo'] == $pseudo && $resultat['Mot_de_passe']==$pass_hache) {$tr=true;}
			}
		
		if(!$tr){
		$requete=$BDD->prepare("  INSERT INTO etudiant (pseudo,Nom, Prenom, Mot_de_passe, Email,Date_de_naissance) VALUES (?,?,?,?,?,?) ");
		$requete->execute(array($pseudo,$Nom,$Prenom,$pass_hache,$Email,$Date_de_naissance));
		?><script type="text/javascript">alert("inscription terminee")</script> <?php
	             }
	     else{
	     	
	     }        

		
}
}
?>