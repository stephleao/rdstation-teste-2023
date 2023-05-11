# Imagem base para o PHP
FROM php:7.4-apache

# Atualiza o sistema e instala as dependências
RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Instala o Node.js e o npm
RUN curl -fsSL https://deb.nodesource.com/setup_14.x | bash - && \
    apt-get install -y nodejs

# Configurações do PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Configurações do Apache
RUN a2enmod rewrite

# Copia os arquivos do projeto para o diretório do servidor web
COPY . /var/www/html/

# Configurações do Node.js
WORKDIR /var/www/html
RUN npm install

# Porta de exposição para o Apache
EXPOSE 80