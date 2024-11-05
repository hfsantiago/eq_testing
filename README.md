# Indicator Web App. [Backend] 🧡

  

### ¿Qué es Indicator Web App?. 📈

  

Es un servicio para visualizar Indicadores de Negocios de forma digital para Empresas y sus colaboradores!

  

### Anotaciones. 🗈

Inicialmente es construida en el backend con **PHP-Laravel** 🐘

  

### Uso de Tecnologias. 🧑🏽‍💻

-  **:Package manager**: [Composer]([https://laravel.com/](https://getcomposer.org/download/)) `v2.8.2` 
-  **Backend**: [Laravel](https://laravel.com/) `v11.30.0` 
-  **Base de datos**: [MySQL](https://laravel.com/) + [XAMPP](https://www.apachefriends.org/es/index.html). v 
-  *Lenguaje: [PHP](https://www.php.net/docs.php)* `v8.2.12` 
  
  

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


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
