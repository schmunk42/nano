Phundament nano
===============

## Installation

Setup vendor folder for local development and code-completion

    docker-compose run php composer install

Start stack

    docker-compose up -d

Check the logs, especially when you are starting a fresh stack, since the setup may take a minute
    
    docker-compose logs
    
When you see `Application initialized.` you are ready to open the application in your browser
    
OS X
    
    open http://192.168.99.100:8005
    
Ubuntu
    
    xdg-open http://192.168.99.100:8005

## Usage

### Files

See `app/`...

### Add package

Find the packages you need and edit your `composer.json` file

run

    docker-compose run php composer update

### Add module

Mount folder in `docker-compose.yml`

    YII_ENV=dev yii gii/module --moduleID=cms --moduleClass=app\\modules\\cms\\Module

## Develop
    
    docker-compose run php bash
    
## Deploy

Build

    docker-compose build

Tag

    docker tag -f nano_php registry/vendor/image

Push    
    
    docker push registry/vendor/image
    

