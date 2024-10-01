FROM mysql:5.7

# Définir les variables d'environnement pour la configuration de la base de données
ENV MYSQL_ROOT_PASSWORD=rootpassword
ENV MYSQL_DATABASE=mydb
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=password

# Copier le script d'initialisation dans le répertoire d'initialisation MySQL
COPY init.sql /docker-entrypoint-initdb.d/

# Afficher le contenu du répertoire pour vérifier la présence du script
RUN ls -l /docker-entrypoint-initdb.d/

EXPOSE 3306
