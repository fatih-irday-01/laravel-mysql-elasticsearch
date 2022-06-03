<p align="center" style="background-color: #edf2f7">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    </a>
</p>

<p align="center" style="background-color: #edf2f7; padding: 15px 0px">
    <a href="https://www.elastic.co/elasticsearch/" target="_blank">
        <img src="https://images.contentstack.io/v3/assets/bltefdd0b53724fa2ce/blt280217a63b82a734/6202d3378b1f312528798412/elastic-logo.svg" width="300">
    </a>
</p>

---

## Installation

Laravel, MySql, ElasticSearch and Redis installation in docker.

- Step 1 (download)
```
git clone https://github.com/fatih-irday-01/laravel-mysql-elasticsearch.git myApp

cd myApp
```

- Step 2 (install)
```
cp .env.example .env

composer install
```

- Step 3 (run Docker)
```
make up 

// or

docker-compose -p elasticsearch -f docker-compose.yml up -d
```


- Step 4 (run DB)
```
docker exec -it elasticsearch_app_1 bash
php artisan migrate --seed
php artisan elastic:migrate
php artisan scout:import "App\Models\User"
```

## ElasticSearch Example URLs

*  [User Search](http://localhost:8080/user?name=)
*  [Get User](http://localhost:8080/user/get-user?name=)
*  [User Create](http://localhost:8080/user/create)
*  [User Destroy](http://localhost:8080/user/destroy/{id})
