Proyecto: Prueba desarrolladores
Descripción:
El proyecto es sencillo con un registro que envia la informacion a traves de AJAX al servidor y una ves valida se redirecciona al Home

Tecnologías Utilizadas:

Laravel 10.10
Bootstrap 5.3
Requisitos Previos:

PHP 8.1
Composer 2
AJAX
Instalación:

Clonar el repositorio:
git clone https://github.com/Roberth13/prueba-desarrolladores.git

Instalar dependencias:
cd prueba-desarrolladores
composer install

Configurar la base de datos:
Copiar el archivo .env.example a .env y configurar las credenciales de tu base de datos.
Ejecutar las migraciones:
php artisan migrate


Iniciar el servidor de desarrollo:
php artisan serve

Accede a tu aplicación en http://127.0.0.1:8000