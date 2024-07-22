                                                         Description du Projet 


Le mini projet BTP  est un site web  de présentation pour une entreprise spécialisée dans le bâtiment et les travaux publics.
 Le site permet aux utilisateurs de s'inscrire, se connecter, consulter les services offerts, et demander à l'entreprise un formation ou un produit aussi modifier ou supprimer le produit . 

                          Voilà chaque fonction du site BTP :
                                    1. Formulaire d'inscription :(inscrire.php)
                                               un formulaire permettant aux utilisateurs de s'inscrire en fournissant leur nom, 
                                               email et mot de passe.
                                               Récupère les données du formulaire.
                                              
                                               Insère les données dans la table connextion de la base de données.
                                               Redirige l'utilisateur vers une page de utilisateur  pour demander un service.         
                                   
                                    2. Connexion
                                        Page de connexion (connexion.php) :
                                           Formulaire de connexion  :
                                               Page connection permettant aux utilisateurs de se connecter 
                                               en fournissant leur email et mot de passe.
                                               Récupère les données du formulaire.
                                               Vérifie si l'email existe dans la base de données.
                                               Vérifie le mot de passe .
                                               Démarre une session utilisateur et redirige vers la page utilisateur si les informations sont correctes.
                                                -pageutilisateur.php:
                                                     -contient un formulaire pour demander un formation sur un materiel tel que si les donnes est stoké dans un fichier.
                                                     -un formulaire (reservation.php)pour de demander les produit avec la calcule de facture.
                                                     -consultation(commande.php) de demande avec le droit de modifier ou supprimer la demande de reservation.
                                    3. Accueil
                                           Page d'accueil (acceuil.php) :
                                               Page  présentant l'entreprise BTP .
                                    4. projet
                                       Page (projet.php)
                                         présenter des mini projet de Entreprise BTP  
                                    5.Services
                                          Page de service (service.php) :
                                               page décrit les différents services offerts par BTP  :
                                               Vendre les prouits.
                                               Construction de bâtiments 
                                               Formation Technique.
                                               Travaux Publics
                                    6. XML
                                     Contient le conte rendue de tp xml
                                   

                                    7. Structure de la Base de Données
                                          Table connextion :
                                               Stocke les informations des utilisateurs inscrits (id, nom, email, mot_de_passe).
                                         Table commande :   
                                               Stocke les informations des commandes de utilisateurs (id, nom, email, prix,ect).
                                         Table commande :   
                                               Stocke les projets ( nom, image, description).
                                                   