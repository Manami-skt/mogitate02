# mogitate
# 環境構築
dockerビルド
1. git clone
2. DockerDesktopを立ち上げる
3. docker compose up -d --build

Laravel環境構築
1. docker compose exec php bash
2. composer install
3. 「.env.example」を「.env」に命名変更
4. .env中のDB環境変数を追加
5. php artisan key:generate
6. php artisan make:migrate
7. php artisan db:seed

#使用技術
・php 
・Laravel 
・MySQL 8.0.26

#URL
・開発環境：http://localhost/
・phpMyAdmin：http://localhost:8080