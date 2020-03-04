var compteur = 1000;
var clients = {};

function initPage(){

	 

}


function ajouterTache(formulaire) {
		
		var id = "C" + compteur;
		compteur++;
		var nom = formulaire.nom.value;
		var prenom = formulaire.prenom.value;
		var age = formulaire.age.value;
		
		var clients[id] = {nom : nom, prenom : prenom, age : age}

		clients.push(newClient);
		

		document.getElementById("").innerText = "Le client (" + prenom + nom + ") a bien été ajoutée avec l' id ("+ id +")."
		
		formulaire.reset();
		return false;
}
