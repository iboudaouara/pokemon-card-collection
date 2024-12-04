[![Open in Codespaces](https://classroom.github.com/assets/launch-codespace-7f7980b617ed060a017424585567c406b6ee15c891e84e1186181d67ecf80aa0.svg)](https://classroom.github.com/open-in-codespaces?assignment_repo_id=15002493)
# Projet de session

Le projet de session consiste à construire une application web à 3 tiers. Le sujet du projet sera la construction d'un Pokedex, une base de données des différents Pokémon. Durant la première moitié de la session, nous travaillerons sur la partie client (front-end) du site. Durant la deuxième moitié de la session, nous ajouterons un serveur qui fournira un API REST connecté à une base de données.

## Source d'information

La base de données sera peuplée d'information basée sur des données publiques des Pokémon.

* [Pokémon Dataset](https://www.kaggle.com/datasets/rounakbanik/pokemon)

Nous aurons aussi besoin d'image pour les différents Pokémon. Vous pourrez aller chercher les images disponibles dans le dépôt suivant :

* [Pokémon Assets](https://github.com/HybridShivam/Pokemon)

Pour la première partie du cours, puisque nous n'aurons pas de base de données, vous pouvez aller visiter le site PokemonDB pour aller chercher des informations de bases pour la création de pages client.

* [PokemonDB](https://pokemondb.net/pokedex/all)

## Fonctionnalités de l'application

Les fonctionnalités seront détaillées au fur et à mesure de la session, mais l'application aura les capacités suivantes :

* Affichage des Pokémon dans une liste
    * Affichage individuel d'un Pokémon avec ses caractéristiques
* Filtrage de l'affichage par type ou par génération du Pokémon
* CRUD (Create/Read/Update/Delete) Capacité d'ajouter, modifier et d'effacer un Pokémon de la liste

# Travail noté #1 - Page de contenu HTML

Vous devez créer les pages qui seront déposées sur votre dépôt Github privé. Les fichiers doivent être déposés avant le laboratoire #3.

## Travail à faire

Construire les pages suivantes :

* Fichier **index.html**
    * Contiens une liste des différents [types de Pokémon](https://bulbapedia.bulbagarden.net/wiki/Type) dans une liste non ordonnée. Chaque nom de type est un lien vers la page courante (index.html), mais en ajoutant un paramètre (voir vidéo URL Chapitre 1) qui indique le type (ex. "type=flying"). La liste de types doit aussi contenir un lien vers la page sans sélection de types.
    * Une liste de 10 Pokémon
        * Pour chaque Pokémon, on affiche son image, son/ses types et le numéro de sa génération. Le nom du Pokémon est un lien vers la page **pokemon.html** avec le numéro du Pokémon en paramètre (ex. "no=25").
* Fichier **pokemon.html**
    * Présente la fiche d'un Pokémon de votre choix.
    * La fiche doit contenir
        * Nom du Pokémon
        * Type(s)
        * Image du Pokémon
        * Génération
        * Taille
        * Poids
* Fichier **form.html**
    * Formulaire pour entrer les informations d'un Pokémon
    * Contrôles appropriés pour saisir les informations suivantes:
        * Nom du Pokémon
        * Type(s) (Sélection multiple)
        * Image du Pokémon (Saisi de texte pour une URL)
        * Taille
        * Poids
        * Génération (Valeur numérique)
    * Deux boutons doivent être disponibles pour respectivement soumettre le Pokémon et remettre les champs vides.

## Contrainte de travail

* Les pages doivent contenir des balises d'éléments **sémantiques** où c'est approprié.
* Les pages doivent être validées avec un valideur comme celui présenté en classe [du W3C](https://validator.w3.org/).

# Travail noté #2 - Présentation des pages

Vous devez ajouter du style aux différentes pages créé durant le travail noté #1. Les différentes modifications doivent être déposées sur le dépôt GitHub avant le laboratoire #5.

## Travail à faire

### Modification du contenu HTML

* Fichier **form.html**
    * Ajouter un lien qui nous retourne à la page **index.html**.
* Fichier **pokemon.html**
    * Ajouter un lien qui nous retourne à la page **index.html**.
* Fichier **index.html**
    * Ajouter un lien vers la page **form.html**

### Ajout des styles

Ajoutez du style aux pages suivantes :

* Fichier style.css:
    * Créez un et un seul fichier nommé style.css. Tous les styles que vous utiliserez doivent être dans ce fichier.

* Fichier **form.html**
    * Le formulaire doit être centré et il y doit avoir un bon espacement à gauche et à droite de celui-ci.
    * Les *label* et les contrôles doivent être séparés en deux colonnes. Le texte des *label* et les contrôles doivent être justifiés à gauche (ex.: Tous les débuts de texte des labels doivent être alignés).
    * Les deux boutons et le lien ajouté doivent être alignés au bas du formulaire. Les trois doivent avoir la même allure de bouton. Le lien doit être d'une autre couleur (exemple rouge) et le texte du bouton doit être "Cancel"/"Annuler". Le lien doit être complètement à gauche. Les deux boutons doivent être complètement à droite. Il doit avoir un espace entre la droite et la gauche.
    * Vous devez implémenté du responsive design. Si la largeur de l'écran est plus petite que 600 pixels, les labels et les contrôles ne doivent faire qu’une colonne.
* Fichier **pokemon.html**
    * Les informations du Pokémon doivent être présentées sous forme de "carte". Voir }}[l'exemple ici](https://www.w3schools.com/howto/howto_css_cards.asp) pour avoir une idée de la présentation.
        * La carte doit avoir une bordure et un ombrage (shadow)
        * La carte doit présenter l'image du Pokémon en premier. L'image doit avoir une bordure.
        * L'image du Pokémon doit être restreinte pour un visionnement agréable.
        * Le nom du Pokémon doit avoir une place prédominante (taille et/ou police).
        * La carte doit avoir une largeur qui est facilement lisible, peu importe l'appareil de visionnement.
        * Les autres informations doivent être stylisées pour une belle présentation (alignement, positionnement, prédominance, à votre choix).
    * Au-dessus de la carte, collé en haut à gauche de la page, le lien vers **index.html** rajouté doit avoir l'apparence d'un bouton qui contient le texte "Retour" (ou "Return").
* Fichier **index.html**
    * La liste de type et la liste de Pokémon doivent être séparées à l'aide d'une grille CSS. Les types doivent se retrouver soit au-dessus du contenu ou dans une barre à gauche du contenu de la liste de Pokémon.
    * Les Pokémon de la liste doivent être affichés de manière horizontale.
    * Si le nombre de Pokémon dépasse la largeur de la page, les Pokémon doivent continuer sur des lignes additionnelles.
    * L'image et les informations du Pokémon doivent être stylisées pour une belle présentation (à votre choix).
    * En bas à gauche de la page en tout temps (position fixe), vous devez avoir le lien vers la page **form.html** stylisé comme un bouton. Le lien/bouton doit toujours être visible au même endroit dans la fenêtre.

## Contrainte de travail

Vous pouvez utilisé du CSS natif ou des libraires (ex: Tailwind, Bootstrap, etc.) de CSS pour complété ce travail.

# Travail noté #3 - Comportement dans les pages

Dans cette partie du travail, vous devrez ajouter du comportement sur certaines pages qui nous permettra de mettre la liste des Pokémon de manière dynamique. Cela dans le but ultime d'avoir des données externes qui nous seront communiquées d'un serveur.

## Travail à faire

Pour chaque modification de page, créez un fichier JavaScript du même nom que la page et insérez-la comme script de la page.

* Page **form.html**
    * Rajouté un contrôle modal qui permet de vérifier que l'utilisateur veut sortir de la page d'édition après un clic sur le bouton pour retourner sur la page principale (index.html)
    	* Note: Regarder soit le [css modal](https://developer.mozilla.org/en-US/docs/Web/CSS/:modal) ou la [balise `dialog`](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog) ou la [fonction `confirm`](https://developer.mozilla.org/en-US/docs/Web/API/Window/confirm) pour faire le contrôle modal.
    * Un clic du formulaire doit valider le contenu et vérifier que les informations sont entrées correctement (ex: 1 ou 2 types sélectionnés). Si une information est manquante ou invalide, l'utilisateur doit en être informé.
	* La notification peut se faire par CSS (la boite devient rouge par exemple) ou par une fenêtre modal qui apparaît.
* Page **index.html**
    * Construction dynamique de la liste des Pokémon
        * Vous devez construire une liste d'objet qui représente les informations qui permettront d'afficher un Pokémon. La liste doit contenir les mêmes informations qui sont utilisées pour l'affichage dans votre liste.
        * Votre liste d'objet doit contenir au moins 10 Pokémon. Vous pouvez reprendre les informations des Pokemons de votre liste déjà présente.
        * Créez une fonction qui reçoit la liste d'objet de Pokémon et les ajoute à notre page de manière dynamique avec les fonctions de manipulations du DOM les Pokémon à la liste. Vous pourrez ensuite enlever de votre HTML l'affichage de Pokémon statique.
    * Utilisation de la chaine de requête (Query String)
        * Nous avons déjà les types qui sont des liens qui ajoute un query string à l'adresse de la page.
        * Construisez une fonction qui va prendre le tableau d'objet de Pokémon en paramètre et retourner une liste avec seulement les Pokémon du type sélectionné dans le Query String.
        * Faire attention que les Pokémon peuvent avoir deux types, tant que l'un des deux est le type sélectionné, il devrait être affiché.
        * Si aucun Query String n'est fourni, la liste complète est renvoyée.
        * Une fois la fonction complétée, ajoutée là à votre code d'ajout dynamique de Pokémon à votre page.
        * NOTE: Nous n'avons pas vu comment aller chercher les paramètres du Query String en classe, c'est à vous de faire les recherches nécessaires pour trouver une méthode.
* Page **pokemon.html**
    * Ajout dynamique des informations d'un Pokemon.
        * Construire un objet contenant les informations d'un Pokemon de manière statique.
        * Créé une fonction qui reçoit l'objet avec les informations du Pokemon et qui ajout à la page de manière dynamique les information du Pokemon. Enlevez les informations statique de la page.
     

# Travail noté #4 - Page générée dynamiquement avec une base de données

Nous changeons maintenant d'architecture vers une application à 3 niveaux (3-tier). Les pages seront générées par les informations dans une base de données. Nous pourrons aussi rajouter manuellement des Pokemons à cette base de données avec notre formulaire.

## Élément fourni

La base de données avec les informations de base des Pokemons est fournie. Par contre, des modifications seront nécessaires pour l'adapter à notre travail.

## Travail à faire

### Base de données

Pour nous préparer à utiliser la base de données, nous devons ajouter une colonne qui va contenir l'URL de l'image utilisée pour faire afficher le Pokémon. Nous devrons mettre à jours les données courantes avec les images disponibles dans la section de source d'information, mais on doit être capable de prendre des URL autres pour les Pokémon que nous y ajouterons manuellement avec le formulaire.

* Importez le fichier pokedex.sql dans votre base de données (onglet Import dans PHPMAdmin).
* Ajouter une colonne à la base de données pour avoir un URL.
* Mettre à jour les lignes courantes en utilisant les informations disponibles dans la [bibliothèque d'images](https://github.com/HybridShivam/Pokemon?tab=readme-ov-file#a-directly-fetching-images-from-this-repository).
    * Vous pouvez faire un [update](https://dev.mysql.com/doc/refman/8.3/en/update.html) avec l'information de la colonne du numéro du Pokémon.
    * Astuce : la fonction [LPAD](https://dev.mysql.com/doc/refman/8.0/en/string-functions.html#function_lpad) permet d'avoir une chaine avec un nombre exact de caractères.


### Page PHP

Pour chaque page, transformer votre page en PHP pour rajouter les éléments nécessaires à la génération de la page de manière dynamique. Vous devrez aussi mettre les liens à jour pour que tout fonctionne correctement.

* Page **pokemon.php**
    * La chaine de requête (Query String) sera utilisée pour générer les informations du bon Pokémon à partir de la base de données.
    * Si le Pokémon demandé n'est pas dans la base de données, on doit afficher la page avec un message indiquant que le Pokémon n'est pas trouvé. L'affichage normal des informations du Pokémon ne sera pas présent.
    * Utilisé le/les types du Pokémon pour modifier le style dans la page (ex. : changer la couleur d'une partie du texte).
* Page **form.php**
    * Le formulaire doit envoyer ses informations sur la même page avec la méthode POST.
    * Quand la page reçoit un POST, elle doit ajouter les informations du Pokémon à la base de données.
        * Le formulaire doit s'afficher de nouveau.
        * Une validation doit être faite pour l'ajout.
            * En cas d'erreur, on affiche un message d'erreur avant ou après le formulaire.
            * On affiche un message indiquant que le Pokémon a été ajouté si tout s'est bien passé.
* Page **index.php**
    * La liste des Pokemons doit être générée de manière dynamique à partir des informations de la base de données.
    * Si on utilise la chaine de requête (Query String) pour sélectionner un type à afficher, la liste doit être filtrée selon le type.
        * Vous devez déconnecter le code JavaScript fait durant le dernier laboratoire noté, la génération va se faire complètement du côté serveur.

# Travail noté #5 - Création d'une API REST

Dans cette partie du projet, vous allez mettre en place un API REST qui sera connecté aux pages de votre projet. Cet API fournira des routes pour effectuer une partie des opérations CRUD (Create/Read/Update/Delete) sur les données des Pokémons. Vous intégrerez ensuite ces fonctionnalités aux différentes pages de votre application web.

## Travail à faire

### Création de l'API REST

* Mettez en place un serveur qui fournira un API REST pour gérer les opérations sur les données des Pokémons.
* Les données envoyées et reçues doivent être en format JSON.
* L'API doit inclure les routes suivantes :
    * `GET /api/pokemons` : Récupérer la liste de tous les Pokémons.
    * `GET /api/pokemons/:id` : Récupérer les informations d'un Pokémon spécifique en fonction de son ID.
    * `GET /api/pokemons/types/:type` : Récupérer la liste de tous les Pokémons filtré avec le type spécifié.
    * `POST /api/pokemons` : Ajouter un nouveau Pokémon à la base de données.
    * `DELETE /api/pokemond/:id` : Détruit le Pokémon spécifique en fonction de son ID.

### Intégration de l'API aux pages du projet

* Modifiez les pages existantes de votre projet pour intégrer les fonctionnalités de l'API REST et enlevez les fonctionnalités fournis par la génération de page PHP :
    * **index** :
        * Utilisez l'API pour récupérer la liste des Pokémons et affichez-les dynamiquement sur la page. Utilisez (et/ou modifiez) les fonctions javascript faites durant le travail noté #3.
    * **pokemon** :
        * Utilisez l'API pour récupérer les informations d'un Pokémon spécifique et affichez-les sur la page.
	* Ajoutez un bouton 'Delete' à la page du Pokémon. Quand le bouton est clické, un dialogue confirme que le Pokémon sera supprimé. Si l'on accepte, on enlève le Pokémon de la base de données.
    * **form** :
        * Utilisez l'API pour ajouter un nouveau Pokémon en envoyant les données du formulaire au serveur.

Note: Utilisez les fonctionnalités développées dans le laboratoire numéro #3 en JavaScript pour vous aider.
