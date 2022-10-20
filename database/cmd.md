<!-- how to create a model and a migrate -->
php artisan make:model <name> -m

<!-- how to migrate to phpmyadmin -->
php artisan migrate

<!-- how to rollback data -->
php artisan migrate:rollback

<!-- how to refrech database after rollbacking -->
php artisan migrate:refresh