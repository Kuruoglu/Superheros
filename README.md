
##Установка

Для корректной установки на вашем сервере должны быть установлены не ниже PHP 5.5,  и Composer.
Для установки сделайте следующее:

- Склонировать проект на локальную машину, войти в папку проекта
```bash
git clone https://github.com/Kuruoglu/Superheros.git
cd Superheros
```
- Установить все зависимости приложения через [Composer](https://getcomposer.org/)
```bash
composer install
```
- Настроить подключение к MySQL базе данных в файле **app/config/database.php**
- Создать базу данных приложения
```
- Запустить скрипт генерации таблиц БД
```bash
php artisan migrate
```
- Запустить веб-сервер
```bash
php artisan serve
```
- Открыть страницу в браузере: [http://localhost:8000/](http://localhost:8000/)