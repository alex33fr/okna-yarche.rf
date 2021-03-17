**<h1>To run this app</h1>**<br>
1) Install composer 2.0.9, symfony 4.4, Apache 2.4.46, php 7.4.14, mysql 5.7.31, git, yarn<br>
2) You need to set PHP, Symfony and Composer to global Path<br>
3) Clone git project `https://github.com/alex33fr/okna-yarche.rf.git` <br>
4) Go to folder project run `composer install`
5) Edit .env file, set APP_ENV=dev or APP_ENV=prod and edit path to your base
_DATABASE_URL="mysql://`db_user:db_password@127.0.0.1`:3306/`db_name`?serverVersion=5.7_
6) After install, just run `doctrine:database:create`
7) Make migration entity for your BDD `make:migration`
8) Migrate your schema BDD in to BDD `doctrine:migrations:migrate`
9) Run web design compiler `yarn encore production` 
10) Run this app in local web server machine `symfony server:start`