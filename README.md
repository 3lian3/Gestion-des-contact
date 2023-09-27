# Projet de Gestion des Contacts avec Symfony

## Description du Projet

Ce projet est une application de gestion des contacts développée avec le framework Symfony. Il utilise diverses technologies et packages, tels que Composer, Doctrine, et FakerPHP pour la génération de données. De plus, le projet intègre un graphique via CanvasJS pour une meilleure visualisation des données.

## Fonctionnalités

- Gestion des contacts
- Base de données créée avec Doctrine
- Jeu de données de démo généré avec FakerPHP
- Représentation graphique des contacts avec CanvasJS

## Prérequis

- PHP 8.1
- Composer
- Serveur Web (Apache)
- Base de données (MySQL)

## Installation

1. **Cloner le dépôt**

    ```bash
    git clone https://github.com/3lian3/Gestion-des-contact.git
    ```

2. **Installer les dépendances avec Composer**

    ```bash
    composer install
    ```

3. **Configuration de la base de données**

    Éditez le fichier `.env` et configurez la ligne `DATABASE_URL` pour votre base de données.

4. **Créer la base de données**

    ```bash
    php bin/console doctrine:database:create
    ```

5. **Exécuter les migrations**

    ```bash
    php bin/console doctrine:migrations:migrate
    ```

6. **Charger les données de démo (fixtures)**

    ```bash
    php bin/console doctrine:fixtures:load
    ```

## Utilisation

1. **Démarrer le serveur de développement**

    ```bash
    symfony server:start
    ```

2. **Accéder à l'application**

    Ouvrez votre navigateur et accédez à `http://127.0.0.1:8000`.
