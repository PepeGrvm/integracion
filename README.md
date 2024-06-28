AL MOMENTO DE HACER EL CLONE, RUTA RECOMENDADA:

C:\laragon\www


Paso 1: 
    Copiar .env.example 
    Pegar  .env.example
    Renombrar a .env

Paso 2:
    Cambiar DB_DATABASE y DB_PASSWORD en el archivo (Si has cambiado el nombre y no es 'root', cambiar el campo DB_USERNAME tambien) .env
    debes colocar los datos de tu base de datos, en este ejemplo son 

    name = clasesyadb
    password = 1234

Paso 2:
    En consola escribir:
        composer install

Paso 3:
    En consola:
        php artisan serve

Paso 4:
    Abirir el navegador y generar la KEY

Paso 5:
    Recargar
