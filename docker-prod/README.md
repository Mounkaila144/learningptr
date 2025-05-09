# Configuration Docker pour la Production

Ce dossier contient la configuration Docker pour déployer l'application en production sur un VPS avec Apache.

## Prérequis

- Docker et Docker Compose installés sur le VPS
- Apache installé sur le VPS avec les modules proxy et proxy_fcgi activés

## Installation

1. Clonez le projet sur votre VPS:
   ```bash
   git clone [url-du-projet] /var/www/[votre-projet]
   cd /var/www/[votre-projet]
   ```

2. Créez un fichier .env dans le dossier docker-prod basé sur env-example:
   ```bash
   cd docker-prod
   cp env-example .env
   nano .env  # Modifiez les variables avec vos valeurs sécurisées
   ```

3. Activez les modules Apache nécessaires:
   ```bash
   sudo a2enmod proxy proxy_fcgi
   ```

4. Configurez le virtualhost Apache:
   ```bash
   sudo cp docker-prod/apache-vhost.conf /etc/apache2/sites-available/[votre-domaine].conf
   sudo nano /etc/apache2/sites-available/[votre-domaine].conf  # Modifiez avec votre nom de domaine
   sudo a2ensite [votre-domaine].conf
   sudo systemctl reload apache2
   ```

5. Lancez les conteneurs Docker:
   ```bash
   cd docker-prod
   docker-compose -f docker-compose.prod.yml up -d
   ```

## Structure

- `docker-compose.prod.yml`: Configuration des services Docker pour la production
- `Dockerfile.prod`: Configuration du conteneur PHP-FPM
- `apache-vhost.conf`: Exemple de configuration du virtualhost Apache pour proxyfier vers PHP-FPM
- `env-example`: Exemple de fichier d'environnement à copier vers .env

## Maintenance

- Pour mettre à jour l'application:
  ```bash
  git pull
  docker-compose -f docker-prod/docker-compose.prod.yml restart app
  ```

- Pour voir les logs:
  ```bash
  docker-compose -f docker-prod/docker-compose.prod.yml logs -f
  ``` 