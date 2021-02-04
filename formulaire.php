<?php
 /* La fonction include permet de "copier" le contenu d'un fichier PHP pour pouvoir utiliser son contenu (ex: les fonctions, les variables, les constantes....) 
 
 
 
 
 */
include "function.inc.php";
                    
                    
write("formulaire");
write("ceci est un formulaire de connection");

write("carre de 5 " . carre(5));
write("Affichage du formulaire : ");
include "vues/form.html.php";



?>