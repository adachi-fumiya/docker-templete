# laravel-docker

1.phpコンテナに入る
```
docker exec -it docker_test_php bash
```

2.laravelをインストール
```
composer global require laravel/installer
```

3.laravelのプロジェクト作成
```
composer create-project --prefer-dist laravel/laravel test_docker
```

.envを書き換える docker-compose.ymlを参照する
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE= sample_db
DB_USERNAME=docker
DB_PASSWORD=docker
```
