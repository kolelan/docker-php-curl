# Пример подключения в docker curl и работы с расширением php-curl
Для подключения мы будем использовать разные версии образа php.
Каждая версия будет описана и оформлена в виде ветки или тега.  

Оновным способом является такой:  
В вашем файле Dockerfile будут установлены инструкции для PHP Docker и установлен cURL, используя команду docker-php-ext-install 
```dockerfile
# Use a PHP-Apache base image
FROM php:8.2-apache

# Install the cURL extension
RUN apt-get update && apt-get install -y \
    libcurl4 \
    libcurl4-openssl-dev \
    && docker-php-ext-install curl
```