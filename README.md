<<<<<<< HEAD
## Admin-O-Matic Series on Youtube

Admin panel built with Laravel 8, Jetstream, Inertia, AdminLTE, Spatie's Laravel-permissions, Jetstrap, and Bootstrap 4

[Introduction Episode]

<a href="http://www.youtube.com/watch?feature=player_embedded&v=1L8B7pGOBdc
" target="_blank"><img src="http://img.youtube.com/vi/1L8B7pGOBdc/0.jpg" 
alt="Admin-O-Matic Intro" width="240" height="180" border="10" /></a>
=======
<h1 style="text-align:center; font-weight:bolder;">Catatan Sebelum Melakukan Kloning Job Calling</h1>

## Beberapa Catatan Terkait Penggunaan Repository Ini
1. Silahkan melakukan kloning pada repository ini dengan meng-copy url repository

2. Setelah melakukan kloning ketikan di terminal perintah berikut. Bertujuan agar APP KEY update otomatis dan vendor akan terinstal serta .env akan terbentuk
     ```shell
        composer update
     ```
     ```shell
        cp .env.example .env
     ```
     ```shell
        php artisan key:generate
     ```
3. Install beberapa package berikut
    - Laravel Debugbar -> Untuk membantu proses debug
        ```shell
        composer require barryvdh/laravel-debugbar --dev
        ```
    - Laravel Query Detector -> Membantu proses pengecekan query
        ```shell
        composer require beyondcode/laravel-query-detector --dev
        ```
    - Laravel IDE Helper
        ```shell
        composer require --dev barryvdh/laravel-ide-helper
        ```
    - Doctrine/dbal
        ```shell
        composer require doctrine/dbal
        ```

4. Untuk halaman admin bisa menggunakan template
    <ul>
        <li> <a href="https://getstisla.com/">STISLA</a></li>
        <li> <a href="https://coreui.io/">Core UI</a></li>
        <li> <a href="https://adminlte.io/">Admin LTE</a></li>
    <ul>
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
