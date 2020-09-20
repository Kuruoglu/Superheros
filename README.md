
##Установка

Для корректной установки на вашем сервере должны быть установлены не ниже PHP 5.5,  и Composer.
Для установки сделайте следующее:

- Склонировать проект на локальную машину, войти в папку проекта
```bash
git clone https://github.com/Kuruoglu/Superheros.git
cd Superheros
```
- Установить все зависимости приложения через [Composer](https://getcomposer.org/) и npm 
```bash
composer install
npm install
```
- Скопировать.env.example используя команду 
```bash
copy .env.example .env
```
- Создать базу данных приложения
- Настроить подключение к MySQL базе данных в файле **app/config/database.php**
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your DB
DB_USERNAME=youe user
DB_PASSWORD=your password
```
- Для генерации ключа запустите команду
```bash
php artisan key:generate
```

- Запустить скрипт генерации таблиц БД
```bash
php artisan migrate
```
- Также можно получить одного дефолтного супергероя используя отдельную команду
```bash
php artisan db:seed
```
- Или вместе с выполнением миграции
```bash
php artisan migrate --seed
```
- Запустить веб-сервер
```bash
php artisan serve
```
- Открыть страницу в браузере: [http://localhost:8000/](http://localhost:8000/)