

## Install Composer

I install [Globally](https://getcomposer.org/doc/00-intro.md#globally) on my Mac

## Clone repository to your desktop

````
    git clone git@github.com:zmon/Site-Org.git
````

## Change to the directory

````
    cd Site-Org
````

## Change to the composer branch

````
    git checkout composer
````

## Run composer to grab all of the dependancies

````
    composer install
````

you sould see something simular to the following:

````
Loading composer repositories with package information
Installing dependencies (including require-dev)       
  - Installing commonaccord/ccmac (dev-master 6d54920)
    Cloning 6d54920dbb67f75c9bed957abdc9969325cc3c2b

Writing lock file
Generating autoload files
````
## Create the Web Site

You will need to have a web site running that will process PHP files, 
with the DocumentRoot pointing to your directory.


You should be good to go.
