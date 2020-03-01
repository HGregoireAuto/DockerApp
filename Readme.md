# Docker test

To start the project use: 

```bash
docker-compose build

docker-compose up
```

##Connect to Apache Server 
http://localhost:8080  


##Connect to Varnish server
http://localhost:8081  


## Prepare / download image from dockerfile
```
docker build -f Dockerfile .
```


## Start interactive shell
```
docker run -i -t e66ae809d99a /bin/bash
```
