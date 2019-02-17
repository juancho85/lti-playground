# Usage
## Install docker
* Install the stable package

`sudo snap install docker`

* Create docker group and add user to docker group (restart for changes to take effect)

`sudo groupadd docker`

`sudo usermod -aG docker $USER`


## Install composer

`sudo apt install composer`

## Init Laravel app (https://laravel.com/docs/5.7/installation)

`composer create-project --prefer-dist laravel/laravel app`
