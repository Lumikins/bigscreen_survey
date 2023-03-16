## A propos du projet

Il s'agit du projet final de l'école multimédia à Paris. Le projet est une application d'enquête qui permet aux utilisateurs de :

- Répondre à un sondage.
- Voir ses propres réponses.
- Se connecter en tant qu'administrateur.
- Afficher la liste de toutes les questions en tant qu'administrateur.
- Afficher les réponses à certaines questions sous forme de graphiques en tant qu'administrateur (en utilisant [chartjs](https://www.chartjs.org/)).
- Consulter les réponses individuelles au sondage en tant qu'administrateur.

## Dépendances

Avant d'exécuter le code sur votre machine, veuillez vous assurer que vous disposez des dernières versions de :
- [PHP](https://www.php.net/downloads.php) * PHP 8.2.1 a été utilisé dans ce projet.
- [MySQL](https://dev.mysql.com/downloads/mysql/).
- [Laravel](https://laravel.com/docs/10.x/installation).
- [Composer](https://getcomposer.org/download/).
- [Node.js et NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm).
- [Visual Studio Code](https://code.visualstudio.com/download) ou tout autre IDE de votre choix.

## Exécution du projet

Afin d'exécuter le code sur votre machine, suivez les instructions ci-dessous :
- téléchargez le dossier du projet sur votre ordinateur ou clonez le dépôt.
- Lancez Visual Studio Code.
- Ouvrez le terminal et exécutez les commandes suivantes :
    - Ouvrez le dossier du projet (dézippé) dans votre IDE.
    - Renommez le fichier .env.example par .env, et remplacez la ligne DB_DATABASE=votre_base_de_donnees par DB_DATABASE=bigscreen_survey.
    - npm i (installe toutes les dépendances utilisées dans ce projet).
    - npx vite (ou npm run dev) pour lancer l'environnement de développement.
    - php artisan migrate:refresh --seed (exécute toutes les migrations Laravel, et crée l'utilisateur administrateur dans la base de données).
    - php artisan serve (exécute l'adresse du serveur de développement Laravel, habituellement sur : http://127.0.0.1:8000).

## License

Il s'agit d'une application à source ouverte sous [licence de MIT](https://opensource.org/licenses/MIT).
