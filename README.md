# sample-docker

1. セットアップ
```
bin/setup
```

2. 起動する
```
bin/start
```

3. phpコンテナに入る
```
docker exec -it sample_app_php bash
```

<<<<<<< HEAD
4. .envを書き換える docker-compose.ymlを参照する
=======
.envを書き換える
>>>>>>> parent of 70b0dcc5... dockerの構成を変更しました
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=docker_test
DB_USERNAME=docker
DB_PASSWORD=docker
```

<<<<<<< HEAD
5. cacheを削除する
```
php artisan config:cache
```

6. migrationを走らせる
```
php artisan migarate
```
=======
sequelproのurl http://sequelpro.com/
>>>>>>> parent of 70b0dcc5... dockerの構成を変更しました
