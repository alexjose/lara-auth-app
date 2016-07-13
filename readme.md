# Laravel Social Auth Demo
### Installation
```sh
git clone https://github.com/alexjose/lara-auth-app.git
sudo chown -R www-data lara-auth-app/
sudo chmod -R 775 lara-auth-app/
cd lara-auth-app/
composer install
```

Create `.env` file in the root and insert the following code with the actual values for DB configuration

```
APP_ENV=local
APP_KEY=base64:zCjxHr8pGynj2ONQlNOTzPTrsG04YrRvhknkyz7HGpA=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

```bash
php artisan migrate
```
Thats all.

Now open the app at http://localhost/lara-auth-app/public/
