# Job Offert Test

## Clonar
```sh
git clone https://github.com/bracodev/API-Job-Offert-Test
```
## Instalación

### Uso de Docker

El proyecto está dokerizado lo que implica un entorno listo de desarrollo y producción para el proyecto. Para levantar el entorno con Docker basta correr los siguientes comando en la terminal, estos crearán en entorno de desarollo usando Apache, PHP 8.1, Mysql Server 8.0, la estructura de la base de datos y datos de ejemplo:

```sh
# Levantar contenedor
sail up -d

# Generar JWT Token
sail artisan jwt:secret

# Crear base de datos y datos de prueba
sail artisan migrate --seed 
```

## Instalación local (Sin Docker)

### Requisitos
- Apache2
- PHP 8.0
- MySQL 8.0

Luego de verificar los requisitos debe crear el archivo de configuraciones del entorno y agregar los datos de conexión a la base de datos

```sh
copy .env.example .env
```
```php
# Modificar con sus datos de conexión en el .env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=job_offert
DB_USERNAME=root
DB_PASSWORD=password
```
Correr los siguientes comando en la terminal

```sh
# Generar JWT Token
php artisan jwt:secret

# Crear base de datos y datos de prueba
php artisan migrate --seed 
```

## Prueba de la API mediante Postman

[Ir a Postman](https://www.postman.com/eaziapp/workspace/job-offert-test/collection/9966080-4d0617c6-bfb7-4f87-9a47-6f1bd7a0cdac?action=share&creator=9966080)

## Prueba mediane cURL

### Login 
```cURL
curl --location --request POST 'https://job-offert-test.herokuapp.com/api/login' \
--header 'Accept: application/json' \
--form 'email="brayan262@mail.com"' \
--form 'password="123456"'
```

### Create user 
```cURL
curl --location --request POST 'https://job-offert-test.herokuapp.com/api/user' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vam9iLW9mZmVydC10ZXN0Lmhlcm9rdWFwcC5jb20vYXBpL2xvZ2luIiwiaWF0IjoxNjUyMjkzMjExLCJleHAiOjE2NTIyOTY4MTEsIm5iZiI6MTY1MjI5MzIxMSwianRpIjoiclluT2FuS2k0NlNwVjBGdSIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.3KxOOSi5cfzryXA4P9TrF6mshHWQYJXwEPCeHQBhDzA' \
--form 'email="brayan262@mail.com"' \
--form 'password="123456"' \
--form 'tdni="cid"' \
--form 'dni="12345678"' \
--form 'name="Brayan Rincón"'
```

### Job offert list 
```cURL
curl --location --request GET 'https://job-offert-test.herokuapp.com/api/job-offert' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vam9iLW9mZmVydC10ZXN0Lmhlcm9rdWFwcC5jb20vYXBpL2xvZ2luIiwiaWF0IjoxNjUyMjkzMjExLCJleHAiOjE2NTIyOTY4MTEsIm5iZiI6MTY1MjI5MzIxMSwianRpIjoiclluT2FuS2k0NlNwVjBGdSIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.3KxOOSi5cfzryXA4P9TrF6mshHWQYJXwEPCeHQBhDzA' \
--form 'email="brayan262@mail.com"' \
--form 'password="123456"'
```

### Create Job offert 
```cURL
curl --location --request POST 'https://job-offert-test.herokuapp.com/api/job-offert' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vam9iLW9mZmVydC10ZXN0Lmhlcm9rdWFwcC5jb20vYXBpL2xvZ2luIiwiaWF0IjoxNjUyMjkzMjExLCJleHAiOjE2NTIyOTY4MTEsIm5iZiI6MTY1MjI5MzIxMSwianRpIjoiclluT2FuS2k0NlNwVjBGdSIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.3KxOOSi5cfzryXA4P9TrF6mshHWQYJXwEPCeHQBhDzA' \
--header 'Content-Type: application/json' \
--data-raw '{
  "name": "Nombre de la oferta laboral",
  "candidates": [
    {
      "dni": 123456789,
      "tdni": "cid",
      "name": "brayan",
      "email": "brayan262@gmail.com"
    }
  ]
}'
```


## Licencia
Job Offert Test es un software de código abierto con licencia [MIT license](https://opensource.org/licenses/MIT).
