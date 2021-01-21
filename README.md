# EcommerceProjectWeb
Voici en General ce que nous faisons dans ce projet, Il s’agit d’un site e-Commerce de vente de jeux vidéo. 
Les utilisateurs peuvent acheter des jeux vidéo.
Lorsqu’un utilisateur en achète un, il recevra un email avec le code pour activer son jeu sur sa plateforme (PC, Xbox, PlayStation, …) ainsi qu’une facture en PDF.
Cette facture se retrouvera également dans son espace membre sur le site. Un membre ne peut acheter un jeu que s’il dispose d’un solde suffisant.
Également, les jeux ont une quantité définie, il faudra vérifier le stock avant d’autoriser un achat.
Un espace administration permet de gérer les jeux en vente et les informations des membres.

#Installation de Laravel 
composer global require laravel/installer
composer create-project --prefer-dist laravel/EcommerceProjectWeb
Etant à l'interieur du projet, faire : 
	- php artisan serve (Faire "php -S localhost:8000 -t public" au cas où php artisan serve ne marche pas)
	- php -S localhost:8000 -t public (Pour lancer le serveur, le 8000 est un exemple, il peut donner un autre pour toute autre creation d'un projet laravel)