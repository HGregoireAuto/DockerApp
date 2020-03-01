# Docker test

To use / start the project.
Open Docker -> Settings -> Resources -> File Sharing and check "C"

Then execute 

```bash
docker-compose pull
docker-compose up
```

##Connect to Apache Server 
http://localhost:8080  


##Connect to Varnish server
http://localhost:8081  


#Upload / update Docker images
```
docker push ylupien/my.php:tg1
docker push ylupien/my.apache:tg1
```



## Prepare / download image from dockerfile
```
docker build -f Dockerfile .
```


## Start interactive shell
```
docker run -i -t e66ae809d99a /bin/bash
```
