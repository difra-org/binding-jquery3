# Jquery3 plugin for Difra Framework

Binds components/jquery to Difra.

## How to use

1. Add config inclusion to nginx's *server {}* section:
    ```
    include /full-project-path/vendor/difra/jquery3/bin/nginx.conf;
    ```
1. Include jquery3 instance in the config.php. For example:
    ```php
    'instances' => [
        'main' => [
             'include' => [
                'jquery3' => true
             ]
        ]
    ],
    ```
