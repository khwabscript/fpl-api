# Use the official PHP Apache image
FROM php:7.4-apache

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
