## how to create a model and a migration
> php artisan make:model model_name -m


## how to create a migration with function up and down
> php artisan make:migration create_nametables_table



## how to make a controller full of ressources
> make:controller nameController -r 


## how to migrate to phpmyadmin
> php artisan migrate


## how to create all what you need
> php artisan make:model testing -mcf


# how to rollback data

> php artisan migrate:rollback

# how to refrech database after rollbacking

> php artisan migrate:refresh
