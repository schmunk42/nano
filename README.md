nano
====

Nano is a minimalistic application template using Phundament, Yii 2.0 Framework, PHP and Docker.

Based upon the Docker `phundament/app` image it includes a ready-to-use application, which you can customize to fit your
needs.

## Installation

Setup `vendor` folder for local development and code-completion

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

To customize the application you have the following options.

### Override existing files

You can override files on the base-image as layed out in Phundament's [`src`](https://github.com/phundament/app/tree/master/src) 
folder. 

By default we're *adding* the src folder to the built image, see [`ADD`](https://docs.docker.com/engine/articles/dockerfile_best-practices/#add-or-copy) 
for details how this works. 

### Change configuration

Add your custom configuration opions to `src/config/local.php`.

### Add `composer` package

A large part of an application usually consists of libraries. To use an library, find the package 
you want to install and edit your `composer.json` file, afterwards run

    docker-compose run php composer update

### Development `bash`

Start a bash in the PHP container to run `yii`, `composer` or other commands.     
    
    docker-compose run php bash

### Create a `yii` module

By default there is `cms` folder mounted in `docker-compose.yml`. You can create a skeleton module there by entering
an application bash and run the following command inside the PHP container

    $ yii gii/module --moduleID=cms --moduleClass=app\\modules\\cms\\Module
    
## Deploy

Build your image

    docker-compose build

Tag it

    docker tag -f nano_php registry/vendor/image

And push it to a registry    
    
    docker push registry/vendor/image
    
---

Built by [*dmstr](http://diemeisterei.de), Stuttgart :de: