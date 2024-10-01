#!/bin/bash

docker build -t 'image2.0' .

# Créer le réseau Docker s'il n'existe pas
docker network create mon_reseau || true

# Lancer les conteneurs avec les noms spécifiés et se connecter au réseau
docker run -d --name container1.0 --network mon_reseau image2.0
docker run -d --name container2.0 --network mon_reseau image2.0
docker run -d --name container3.0 --network mon_reseau image2.0

# Inspecter le réseau pour vérifier la connexion des conteneurs
docker network inspect mon_reseau