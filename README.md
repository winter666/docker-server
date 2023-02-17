# Server

## Modules:
- nginx
- php (latest)
- mysql (latest)
- redis (latest)
- composer
- phpMyAdmin (latest)

## Up the Server

- Run `docker compose build && docker compose up -d` if that your first time

## Setting projects

- You should create your projects at `web/projects/` folder
- Set the nginx config for your project at `nginx/confs/` folder.
- Rebuild docker container
- Set your virtual domains into `hosts` file

## Configure phpMyAdmin

- Set file `config.user.inc.php` from `config.sample.inc.php` at `docker/phpMyAdmin` folder

## Additional
- You can check modules version & connection on `http://greeting-local.api`, if you set `greeting-local.api` into `hosts` file, and then you need run `composer install` on `/var/www/infoProject` from docker container (php)

