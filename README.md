### Détails des Fichiers

- **Data_base/Dockerfile** : Définit l'image Docker pour le serveur MySQL. Les variables d'environnement pour la configuration de la base de données sont spécifiées, et un script d'initialisation est copié pour créer la base de données et la table.

- **Data_base/init.sql** : Contient les instructions SQL pour créer la base de données `mydb` et la table `test_table`.

- **Web_server/Dockerfile** : Définit l'image Docker pour le serveur web Apache avec PHP. Il active l'extension MySQL pour PHP et copie les fichiers HTML et PHP nécessaires dans le répertoire web.

- **Web_server/db_test.php** : Script PHP pour tester la connexion à la base de données et effectuer des opérations de base (insertion et sélection de données).

- **Web_server/index.html** : Page d'accueil simple qui affiche un message et un lien pour tester la connexion à la base de données.

- **docker-compose.yml** : Fichier de configuration Docker Compose qui définit les services `webserver` et `database`, les lie à un réseau et expose les ports nécessaires.

### Instructions pour Exécuter le Projet

1. **Installation de Docker** :
   - Assurez-vous que Docker et Docker Compose sont installés sur votre machine. Vous pouvez télécharger Docker [ici](https://www.docker.com/products/docker-desktop).

2. **Construire et Lancer les Conteneurs** :
   - Ouvrez une console dans le répertoire du projet.
   - Exécutez la commande suivante pour construire et démarrer les conteneurs :
     ```bash
     docker-compose up --build
     ```

3. **Accéder au Serveur Web** :
   - Ouvrez un navigateur et allez à `http://localhost:8080` pour voir la page d'accueil.

4. **Tester la Connexion à la Base de Données** :
   - Cliquez sur le lien "Test DB Connection" sur la page d'accueil pour exécuter le script PHP qui teste la connexion à la base de données.
