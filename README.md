<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>





### Back de la app para crear post con categorias en Vue

configuracion de conexion a base de datos, es importante configurar estos parametros y crear una base de datos con la informacion aqui mencionada.

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=post

## se deben lanzar las migraciones : 
- php artisan migrate

## crear en la base de datos los siguientes roles:

- insert into post.roles(id, name) values (1, 'ADMIN');
- insert into post.roles(id, name) values (2, 'VIEWER');

## se debe correr el proyecto : 
- php artisan serve 

### Descripcion:

- Se realizo la creacion y validacion de token que se obtiene al registrarse y posteriormente cuando se inicia sesion para poder validar las funcionalidades y pemrisos, y se crearon las migraciones necesarias




## Las rutas para hacer uso del app Laravel :

Los metodos crud tienen la restriccion para que se puedan utilizar solo si se tiene el permiso del token, asi que primero debe registrarse como 1 para admin, 2 para viwer y luego loguearse el usuario creado.

### registro y login de usuarios
- post : 127.0.0.1:8000/api/register

- post : 127.0.0.1:8000/api/login

### CRUD para caterorias

- get : 127.0.0.1:8000/api/category/all

- post : 127.0.0.1:8000/api/category/store

- get : 127.0.0.1:8000/api/category/{id}/edit

- put : 127.0.0.1:8000/api/category/{id}/update

- delete : 127.0.0.1:8000/api/category/{id}/destroy

### CRUD para Posts

- get : 127.0.0.1:8000/api/post/all

- post : 127.0.0.1:8000/api/post/store

- get : 127.0.0.1:8000/api/post/{id}/edit

- put : 127.0.0.1:8000/api/post/{id}/update

- delete : 127.0.0.1:8000/api/post/{id}/destroy


### Para consumir esta api desde una api web en vue descargar el repo URL del front: 

- https://github.com/Edisonmolinah/final-front



