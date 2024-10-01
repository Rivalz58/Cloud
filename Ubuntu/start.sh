#!/bin/bash

# Build the Docker image with the tag 'image2.0'
docker build -t 'image2.0' .

# Create the Docker network if it does not already exist
docker network create mon_reseau || true

# Launch containers with specified names and connect them to the network
docker run -d --name container1.0 --network mon_reseau image2.0
docker run -d --name container2.0 --network mon_reseau image2.0
docker run -d --name container3.0 --network mon_reseau image2.0

# Inspect the network to verify the connectivity of the containers
docker network inspect mon_reseau
