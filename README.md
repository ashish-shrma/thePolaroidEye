# thePolaroidEye
Webapp to calculate average hue of an images, and listing 


The project is made with Laravel(php)
<h1> Installation Instructions </h1>

<ol>
<li>Create a MYSQL database locally</li>
<li>Download composer https://getcomposer.org/download/</li>
<li>Pull Laravel/php project from git.</li>
<li>Rename .env.example file to .env inside your project root. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )</li>
<li>fill the database information(DB_DATABASE, DB_USERNAME, DB_PASSWORD)</li>
<li>Open the console and cd your project root directory</li>
<li>Run composer install or php composer.phar install</li>
<li>Run php artisan key:generate</li>
<li>Run php artisan migrate</li>
<li>Run php artisan serve</li>
</ol>
