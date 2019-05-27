# USA States' Cities - Laravel Seaders.
Laravel Migrations and Seeders for the cities of the Unisted Stated asociated to their state.

## Description:
This Project has been created to simplified database migrations in any laravel project where you need to have cities of the United State related to their state. 

### Installation instructions:

To configure the migration and execute the seeders you must have the .ENV file already configured and connected to an existing database.

1- Download this repository as zip file.
```
Copy the two folders to your laravel project in the database folder.

migrations ->>>>>  YourLaravelProject> database 
seeds      ->>>>>  YourLaravelProject> database
```

2- Configure composer.json for 'state-cities' seeders folder path:
Add in autoload > classmap  the path of 'database/seeds/state-cities' and save the changes.
it will look as the following example:
```
  "autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/seeds/state-cities",
            "database/factories"
        ]
    }
```

3- Run the following commands in the terminal:
Go to the root of your project:
```
composer dump-autoload

After the first command executed successfully run the Migrations with the seeders:

php artisan migrate:fresh --seed

```
You are done! :)

### PHP Artisan migrate will generate the following structure:

Seaders creates:
1 - Country 
51 - States including (Washington DC) as state asociated to their country
29,984 - Cities asociated to their states.


countries:

|   Column    |     Data type     |
| ----------- | ----------------- |
|*country_id  | INT AUTO_INCREMENT|
| code        | CHAR, 3           |
| name        | VARCHAR, 45       | 

states:

|   Column    |     Data type     |
| ----------- | ----------------- |
|*state_id    | INT AUTO_INCREMENT|
| name        | VARCHAR,  45      |
| abv         | VARVCHAR, 45      | 
|-country_id  | INT               | 

cities:

|   Column    |     Data type     |
| ----------- | ----------------- |
|*state_id    | INT AUTO_INCREMENT|
| name        | VARCHAR,  45      |
|-state_id    | INT               | 

## Data sources:
The database table structure has been created following MySQL world database standard
https://dev.mysql.com/doc/index-other.html] 

Data has been extracted and parsed to laravel format using windows powershell
Data comes from free postal code data page, it is 99.9 acurate: http://download.geonames.org/export/zip/

## Donation:
If this project help you reduce time to develop, you can give me a cup of coffee :)

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.me/cmartinezone)
