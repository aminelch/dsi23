
#### java
##### installation via terminal 

	apt install default-jre
	apt install openjdk-11-jre-headless
	apt install openjdk-8-jre-headless
	apt install openjdk-9-jre-headless

si l'installation est terminé avec un erreur 

	sudo update-alternatives --config javac
	
## Verification

verifier avec la commande 

		java --version


## Compiler son code 
N'oublier de se placer dans le dossier approprié 

	cd ~/mon-repertoire

	javac fichier.java

## Executer son code 

		java fichier 
