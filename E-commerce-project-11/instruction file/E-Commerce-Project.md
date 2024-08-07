1. Laravel Install
2. DataBase Connection
3. Breeze Install
4. Add Authentication
5. Multi Auth Using Laratrust
> Got to Laratrust > Installation> run the terminal
>1. composer require santigarcor/laratrust
2. php artisan vendor:publish --tag="laratrust"
3. php artisan laratrust:setup
4. composer dump-autoload
5. Usage>Seeder>Seeder configuration file> run the terminal 
6. php artisan laratrust:seeder
7. php artisan vendor:publish --tag="laratrust-seeder"
8. composer dump-autoload
9. In the `database/seeds/DatabaseSeeder.php` file you have to add this to the `run` method: code added> $this->call(LaratrustSeeder::class);
10. config>laratrust_seeder.php>
```d
'roles_structure' => [

        'admin' => [

            'users' => 'c,r,u,d',

            'payments' => 'c,r,u,d',

            'profile' => 'r,u',

        ],

        'user' => [

            'users' => 'c,r,u,d',

            'profile' => 'r,u',

        ],

    ],
```
11. go to installation run the terminal
12. php artisan migrate
13. php artisan db:seed
14. Usage>User Roles Assignment & Removal>Assignment>'$user->addRole($admin); '> copy the addRole
15. APP>HTTP>Controller>Auth>RegisteredUserController> past the addRole 
16. web.php>
