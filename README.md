# Laravel 9 Boilerplate
> A Laravel Boilerplate with Services Design Pattern and Laravel Sanctum Ready

## Setup Project
Make a copy of `.env` using the file `env.example` and then add your MySQL database credentials to establish a connection.

```
DB_CONNECTION=mysql
DB_HOST=<database host>
DB_PORT=<database port>
DB_DATABASE=<database name>
DB_USERNAME=<database username>
DB_PASSWORD=<database password>
```


After setting up the `.env` run the following commands:
```bash
# Install package dependencies 
$ composer install

# Generate the APP_KEY
$ php artisan key:generate

# Clear all composer's cache directories, Update Autoloader and Remove the cached bootstrap files
$ composer clear
$ composer dump-autoload
$ php artisan optimize:clear

# Create the symbolic links configured for the application
$ php artisan storage:link

# Drop all tables and re-run all migrations with seeders
$ php artisan migrate:fresh --seed

# Start the server
$ php artisan serve
```

## Understanding the repository
|Branch        		 |Description                           |
|:------------------:|:------------------------------------:|
|`main`              |The default branch; Vanilla Laravel.  |
|`repository`        |Repository Design Pattern             |
|`service`           |Services Design Pattern               |
|`service_sanctum`   |Services Design Pattern with Sanctum  |

## Commits 
To be able for us to easily track our repository progress please use appropriate emojis at the start of description/message and issue-number at the end to determine type of commit.

| Illustration              | Code                          | Description                                   |
|:-------------------------:|:-----------------------------:|:---------------------------------------------:|
|:100:                      |`:100:`                        |Functions, routes, migrations etc.             |
|:wrench:                   |`:wrench:`                     |Add Some Code, Improve Code Structure or Format|
|:bug:                      |`:bug:`                        |Bug Fixed                                      |
|:bookmark_tabs:            |`:bookmark_tabs:`              |Add or Edit Comments in your code              |
|:coffee:                   |`:coffee:`                     |Initial or Non-important changes               |
|:construction:             |`:construction:`               |Work in Progress                               |
|:wastebasket:              |`:wastebasket:`                |Remove Code and Files                          |
|:notebook:                 |`:notebook:`                   |Documentation and ReadMe                       |
|:pencil2:                  |`:pencil2:`                    |Fix Typos, Rename Files, Routes etc            |
|:recycle:                  |`:recycle:`                    |Refactor Code                                  |
|:twisted_rightwards_arrows:|`:twisted_rightwards_arrows:`  |Merge Branches                                 |
|:rewind:                   |`:rewind:`                     |Revert Changes                                 |
|:iphone:                   |`:iphone:`                     |Work on Responsive Design                      |
|:pushpin:                  |`:pushpin:`                    |Hotfix                                         |
|:hash:                     |`#100`                         |Issue number                                   |
|(version-tag)              |`(v1.2.3-alpha)`               |Hotfix commits Version Tag                     |



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).