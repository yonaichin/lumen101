
## Things should've known before this project
### 1. Install Composer 

```
curl -sS https://getcomposer.org/installer | php

```

``` 
mv composer.phar /usr/local/bin/composer
```
```
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

### 2. Install lumen

```
composer global require "laravel/lumen-installer=~1.0”
```

### 3. Make it accessible through zsh
```
export PATH="$PATH:$HOME/.composer/vendor/bin”
```
```
echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> ~/.zshrc
```
```
source ~/.zshrc
```

### 4. PHP Version

1. PHP >= 5.5.9
2. [PHP version manager for Mac](https://github.com/wilmoore/php-version)



## Get Started
### Download project
```
git clone https://github.com/yonaichin/lumen101.git && cd lumen101
```
### Install packages
```
composer install
```
### Setup database (Mysql)
```
cp .env.example .env # make sure to create database first
```


```
php artisan migrate # migrate tables
```

```
php artisan db:seed # seed database for mock datas
```

### Run and visit [http://localhost:8000](http://localhost:8000)
```
php artisan serve
```


### Available routes
1. GET 'api/article'  => index
2. GET 'api/article/{id}' => get article
3. POST 'api/article' => save article
4. POST 'api/article/{id}' => update article
5. DELETE 'api/article/{id}' => delete article