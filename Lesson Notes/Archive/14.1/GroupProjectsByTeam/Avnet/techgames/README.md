Tech Games
========================

Welcome to Avnet Techgames. Built by RockIT Bootcamp

1) Deploying
----------------------------------

1. Navigate to /usr/share/nginx/html/techgames
2. get latest code with `git pull`
3. Clear Cache

    ```bash
    $ php app/console cache:clear --env=prod --no-debug
    ```
4. Update resources

    ```bash
    $ php app/console assets:install
    ```
    
5. Change ownership

    ```bash
    $ sudo chown -R www-data:www-data .
    ```
