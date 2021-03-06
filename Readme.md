# Docker test

## Prerequisites
+ Download and install [Docker Desktop](https://www.docker.com/products/docker-desktop) 
+ Restart your PC
+ Open Docker console -> Settings -> Resources -> File Sharing and then the drive where (this) project is on.

## Project setup

To use this project first clone the project on your PC.

```
git clone https://github.com/HGregoireAuto/DockerApp.git
```

Then download all required Docker images

```bash
docker-compose pull
```

Bring up all Docker images

```bash
docker-compose up
```

Wait until everthing is finish. 

Connect to Apache Server 
http://localhost:8080  


Connect to Varnish server
http://localhost:8081  


Connect to Maria DB
localhost:3307


# Misc commands

Start docker up background mode

```bash
docker-compose up -d
```

Stop docker background mode

```bash
docker-compose stop
```


## Upload / update Docker images
```
docker push ylupien/my.php:tg1
docker push ylupien/my.apache:tg1
```

## To clean all / remove all docker images from your system
```
docker system prune -a
```

## Prepare & and build an image from dockerfile
```
docker build -f Dockerfile .
```

## List running containers
```bash
docker ps
```

## Start interactive shell on a running container
```
docker exec -it %container_id% /bin/bash
docker exec -it 2488326f2ab6 /bin/bash

docker-compose run php /bin/bash
```

# Swarm
```
docker swarm init
```

To add a worker to this swarm, run the following command:

```
docker swarm join --token SWMTKN-1-4m6qwq3mabkgphi4p3fdckonqml9m099kp6tc4oet14yvrc864-bomluxen39syr0qo6xbmx264n 192.168.65.3:2377
```

To add a manager to this swarm, run 'docker swarm join-token manager' and follow the instructions.

```
docker stack deploy -c docker-compose.yml prjDoc
```

Build image / replace existing / running
```
docker-compose up -d --build
```

Copy folder from container to host
```bash
docker cp docker_php_1:/var/www/vendor ./app
docker cp docker_php_1:/var/www/composer.lock ./app
```


## References
+ https://github.com/mlocati/docker-php-extension-installer
