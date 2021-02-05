# Proyecto FCT

## Objetivo del proyecto

Crear una página haciendo uso de [laravel](laravel.md) que permita hacer la gestion de un programa de formación en centros de trabajo, debe contener un sistema de login, formularios y acceso a base de datos

## Desplegar proyecto

Copia el proyecto en un servidor web apache con php instalado, la raíz del servidor debe coincidir con la carpeta public, el resto del contenido no debe ser accesible.

Cambia el nombre de el fichero [.env.example](.env.example) a *.env* y añade los datos correspondientes en las variables de base de datos (empiezan por `DB_`).

Ejecuta el comando `php artisan migrate` para crear las tablas en la base de datos.

###### Jose María Samos Diago