# Use a PHP-Apache base image
FROM php:8.2-apache

# Install the cURL extension
RUN apt-get update && apt-get install -y \
    libcurl4 \
    libcurl4-openssl-dev \
    && docker-php-ext-install curl