# Server

## Modules:
- apache2
- php (latest)
- mysql (latest)
- redis (latest)
- composer
- phpMyAdmin v5.2.1

## Up the Server

- You should create `Dockerfile` in folder `docker`. Pase code from `Dockerfile.example` to your `Dockerfile`
- Run `docker compose-build` and `docker compose-up`

## Setting projects

- You should create your projects at `web/projects/` folder
- Set the VirtualHost for your project at `docker/conf/apache/configs/` folder. And then Added `ADD ./docker/conf/apache/configs/<your_project_config>.conf /etc/apache2/sites-enabled/<your_project_config>.conf` on `Dockerfile`. You should do it for every project, that you created
- Restart docker container

## Configure phpMyAdmin

- You can set file `config.inc.php` from `config.sample.inc.php` at `web/phpMyAdmin-5.2.1` folder

