## Aplicacion de ejemplo

La presente es una aplicacion de ejemplo que muestra una landing page, y un pequeño formulario, ofreciendo un cupon por la compra de un producto determinado.
Una vez que el visitante ingresa sus datos, son enviados al servidor donde son almacenados y el numero de cupon generado, el cual queda asociado a los datos del usuario creado

Software que necesitara:
- PHP 5.4
- Servidor Web
- Composer. Manejador de dependencias de PHP ([getcomposer.org](http://getcomposer.org))
- Git. Opcional, para clonar el repositorio

### Instrucciones
1. Si usa git, clone el repositorio en el directorio apropiado de su servidor web.
2. Si no usa git, descargue el proyecto como zip desde GitHub, (esquina superior derecha, enlace Clone or Download) y descomprimalo en el directorio apropiado de su servidor web
3. desde una ventana de linea de comandos y desde dentro del directorio del proyecto ejecute:
```
composer install
```
se descargara diversos paquetes necesarios para el funcionamiento del proyecto. Esto puede tardar algunos minutos.

a continuacion:
```
php artisan key:generate
```

4. Use su aplicacion de gestion de mysql preferida y crear una base de datos
5. en el directorio principal del proyecto hay un archivo llamado .env, debe modificar las siguientes llaves del archivo:
- DB_HOST. La direccion de su servidor mysql
- DB_PORT. El puerto donde escucha mysql
- DB_DATABASE. El nombre de la base de datos que acaba de crear
- DB_USERNAME. El usuario para acceder a mysql
- DB_PASSWORD. La contraseña para acceder a mysql.

6. Ejecute:
```
php artisan migrate
```

A partir de aqui ya puede acceder al proyecto desde la direccion de su servidor web:
ip_servidor_web/movesa/public
