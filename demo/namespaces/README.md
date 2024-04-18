# Namespace

## Depuis composer.json

### Partie dédiée

`    "autoload": {
        "psr-4": {
            "Glodie\\Namespaces\\": "src/"
        }
    },`

#### Explications

- `PSR-4` : standard (normes) pour la partie dédiée à l'autoloading (auto-chargement de vos classes)
- `Glodie\\Namespaces\\` est le *namespace*, finir toujours avec `\\`
- `src/` : le *namespace* `Glodie\\Namespaces\\` pointe vers le dossier `src`, autrement dit, une classe qui a se *namespace* se trouvera physiquement dans le dossier `src`

- Vous pouvez avoir autant de namespace que vous souhaitez le tout est de les indiquer dans le composer.json dans la partie dédiée (autoload/psr-4).
- A chaque modification des informations sur les *namespaces*, il faut exécuter la commande `composer dump-autoload` pour mettre à jour le fichier `vendor/autoload.php`.
- Le fichier `vendor/autoload.php` importera automatiquement nos classes à l'exécution, donc il n'est plus nécessaire de faire des `require`de vos classes. Par contre le fichier `vendor/autoload.php`doit être chargé dans le fichier qui exécutera votre code.