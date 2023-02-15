# Server

## Modules:
- ubuntu (latest) based on
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
- Rebuild docker container
- Set your virtual domains into `hosts` file

## Configure phpMyAdmin

- Set `phpmyadmin-local.ap` into `hosts` file
- You can set file `config.inc.php` from `config.sample.inc.php` at `web/phpMyAdmin-5.2.1` folder

## Additional
- You can check modules version & connection on `http://greeting-local.api`, if you set `greeting-local.api` into `hosts` file, and then you need run `composer install` on `/var/www/web/infoProject` from docker container

