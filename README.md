# The Jedi Council: A Star Wars Blog
A Laravel blog application styled using Tailwind CSS demonstrating the following programming concepts:
<li>MVC</li>
<li>Routing</li>
<li>Dependency Injection</li>
<li>Object-Relational Mapping</li>
<li>Database</li>
<li>Functional Frontend/Backend</li>


### Admins 
Please register using the following usernames to do CRUD operations as admin: </li>
<li>Luke Skywalker</li>
<li>Anakin Skywalker</li>
<li>Yoda</li>
<li>Obi-Wan Kenobi</li>


### Getting Started

<ol><li>Clone The Project</li> 
    <ul>
<li>CD into working directory.</li>
<li>Open terminal and run the following commands:</li>
</ul>

```git clone https://github.com/ibtehaz/star-wars-blog.git```
    <br>
```cd star-wars-blog```
    <li>Install Laravel Dependencies</li>
    ```composer install```
     <li>Install Frontend Dependencies</li>
    ```npm install &&
    npm run dev```
    <li>Configuration</li>
    <ul><li>Rename .env.example to only .env and these are the default configurations</li></ul>
    <li>Migrate Database</li>
    ```php artisan migrate```
    <li>Create symbolic link to the public storage folder</li>
    ```php artisan storage:link```
    <li>Run Application</li>
    ```php artisan serve```
</ol>
    
 ### To SAIL-ize your application

  
 <ol> 
    <li>To <i>Sail-ize</i> our web application, run the following command after cloning the repository: </li>
    <pre>composer require laravel/sail --dev && php artisan sail:install </pre>
    <li>After the command ran, we should select 0 for MySQL to install MySQL as part of the docker-compose file created by Laravel Sail. </li>  
    <li>At this point, make sure we have the docker-compose.yml file created at the root of the project. If the file is created, we can run the following command to build and run the needed containers:</li>  
<pre>COMPOSE_DOCKER_CLI_BUILD=1 DOCKER_BUILDKIT=1 ./vendor/bin/sail build</pre>
<li>As Laravel Sail is a wrapper on top of Docker compose, we can use a BuildKit to instruct docker-compose to build the needed containers. Docker BuildKit is build enhancement available in the newer versions of Docker that makes the docker build faster and efficient.</li>
    <li>To run the containers we will run the following command:</li>
    <pre>./vendor/bin/sail up</pre>
    <li>Add the APP key in the .env running the following command after the container are running:</li>
    <pre>./vendor/bin/sail artisan key:generate</pre>
    <li>After that to create the database structure run the migrations with:</li>
    <pre>./vendor/bin/sail artisan migrate --force</pre>
    <li>Create symbolic link to the application's public storage folder</li>
    <pre>./vendor/bin/sail artisan storage:link</pre>
    <pre>The application will be available in your localhost. </pre>
    </ol>
    

   

 
    
     
### Visit our <a href="https://github.com/ibtehaz/star-wars-blog/wiki" target="_blank">wiki page</a> to learn more about how to use our blog application. 
