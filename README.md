# Indicator Web App. [Backend] 🧡

  

### ¿Qué es Indicator Web App?. 📈

  

Es un servicio para visualizar Indicadores de Negocios de forma digital para Empresas y sus colaboradores!

  

### Anotaciones. 🗈

Inicialmente es construida en el backend con **PHP-Laravel** 🐘

  

### Uso de Tecnologias. 🧑🏽‍💻

-  **Backend**: [Laravel](https://laravel.com/)
-  **Base de datos**: [MySQL](https://laravel.com/) + [XAMPP](https://www.apachefriends.org/es/index.html) .
-  *Lenguaje: [PHP](https://www.php.net/docs.php)*
  
  

### Herramientas/Recursos. 🛠️

- [Diseño de modelo ER](https://www.figma.com/design/vi1ytI8PhMJZpd30lyjnoq/ER-EQ?node-id=0-1&node-type=canvas&t=wxPmXunZ6Wsju7ZJ-0), si no tienes acceso solicítalo.

  

### Instalacion Local del proyecto. 🚀

  

1. Abre una terminal local y clona el proyecto.

`git clone https://github.com/hfsantiago/eq_testing.git`


⚠️ NOTAS: 
- *Antes de ejecutar, verificar tener instalada el paquete `laravel-tools` en caso contrario podria generar error 💣 al momento de ejecutar el proyeto en local*

- Asegpurese de que en el archivo .env esté bien configurada la base de datos. Por defecto está sqlite y debe aparecer así; 

`DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
`DB_PORT=3306`
`DB_DATABASE="eq_test"`
`DB_USERNAME="root"`
`DB_PASSWORD=""`
  

### Ejecucion Local del proyecto. 💻


1. Necesitas abrir una terminal de linea de comando, para desplegar el servidor localmente a través del siguiente comando: 

`php artisan serve`


## Docker 🐋 
1. En las consola local de la carpeta raiz del proyecto ejecute el siguiente comando:

  `docker compose up -d`
  
2. Una vez los contenedores estén arriba ingrese a la consola del proyecto en el **docker desktop** y ejecute los siguientes comandos 

`php artisan migrate`
`php artisan serve --host 0.0.0.0 --port 80`
