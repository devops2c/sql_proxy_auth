# Dockerfile
FROM php:8.2-apache

# Installer PDO MySQL (extension PHP nécessaire)
RUN docker-php-ext-install pdo pdo_mysql

# Copier le code source dans le dossier Apache
COPY index.php /var/www/html/index.php

# Exposer le port 8080 (Cloud Run attend ce port)
EXPOSE 8080

# Configurer Apache pour écouter sur 8080 au lieu de 80
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf

# Autoriser l’accès HTTP externe (corrige le Forbidden)
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/Require local/Require all granted/' /etc/apache2/apache2.conf

# Démarrer Apache en foreground (comportement par défaut)
CMD ["apache2-foreground"]

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
