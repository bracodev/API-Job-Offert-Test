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

## Licencia
Job Offert Test es un software de código abierto con licencia [MIT license](https://opensource.org/licenses/MIT).
