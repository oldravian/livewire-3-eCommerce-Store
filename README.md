This Script is live at: [http://18.216.184.16:8004/](http://18.216.184.16:8004/)

# Script Installation
1. **Install Composer Dependencies**
```
composer install
```

2. **Set Up Environment Variables. After creating .env put your database credentials there.**
```
cp .env.example .env
```

3. **Generate Application Key**
```
php artisan key:generate
```

4. **Install NPM Dependencies**
```
npm install
```

5. **Build Assets**
```
npm run build
```

6. **Create Storage Link**
```
php artisan storage:link
```

7. **Run Database Migrations**
```
php artisan migrate
```

8. **Seed the Database**
```
php artisan db:seed
```

# Running Tests
```
php artisan test
