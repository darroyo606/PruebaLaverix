1.Pasos para ejecutar el codigo
2.git clone https://github.com/darroyo606/TESTLAVERIX.git
3.git checkout master
4. dentro de la carpeta del repositorio ejecutar:
4.1 composer install
4.2 npm install
4.3 copy .env.example .env
4.3.1 configurar archivo .env 
4.4 php artisan key:generate
4.5 php artisan migrate
4.6 php artisan server
Ingreser un usuario por medio del registro 
En la base de datos  llenar manualmente la tabla "roles"
en el campo 
nombre: Admin
url: administrador
Asignar el rol en la tabla users
en el campo
roles_id: 1
