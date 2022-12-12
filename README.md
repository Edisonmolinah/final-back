<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>





### Back de la app para crear post con categorias en Vue

configuracion de conexion a base de datos
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306

## se deben lanzar las migraciones : 
- php artisan migrate

## se debe correr el proyecto : 
- php artisan serve 

## Las rutas para hacer uso del app Laravel :

- get : 127.0.0.1:8000/api/category/all

- post : 127.0.0.1:8000/api/category/store

- get : 127.0.0.1:8000/api/category/{id}/edit

- put : 127.0.0.1:8000/api/category/{id}/update

- delete : 127.0.0.1:8000/api/category/{id}/destroy

- get : 127.0.0.1:8000/api/post/all

- post : 127.0.0.1:8000/api/post/store

- get : 127.0.0.1:8000/api/post/{id}/edit

- put : 127.0.0.1:8000/api/post/{id}/update

- delete : 127.0.0.1:8000/api/post/{id}/destroy


### Para consumir esta api desde una api web en vue descargar el repo URL del front: 

- https://github.com/Edisonmolinah/post-vue




