
## ダウンロード方法
git clone

git clone https://github.com/budou114/umarche.git

git clone ブランチを指定してダウンロードする場合

git clone -b ブランチ名 https://github.com/budou114/umarche.git

もしくはzipファイルでダウンロードしてください

## インストール方法
- cd laravel_umarche
- composer install
- npm install
- npm run dev
- cp .env.example .env

.envファイルの中の下記をご利用の環境に合わせて変更してください。

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=umarche
- DB_USERNAME=umarche
- DB_PASSWORD=password
XAMPP/MAMPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。(データベーステーブルとダミーデータが追加されればOK)

最後に php artisan key:generate と入力してキーを生成後、

php artisan serve で簡易サーバーを立ち上げ、表示確認してください。

## 開発環境
- Laravel 8.74.0
- php 7.3.16
- node 16.13.0
- npm  8.1.0

## 機能概要  
- URL設計、テーブル設計、機能設計  
https://docs.google.com/spreadsheets/d/1YIDqTKH2v2-n97kb2GNhWrcMGnJD84JMqTuzD_poMqo/edit#gid=0

- ER図  
https://drive.google.com/file/d/18sEk5LC-jJum-NU9JKNZibGRVX81aWE1/view
## 画像のダミーデータ
public/imagesフォルダ内にsample1.jpeg～sample6.jpegとして保存しています。  
```php artisan storage:link```  
コマンドの実行後、storageフォルダにリンク後、  
storage/app/public/productsフォルダ内に保存すると表示されます。  
productsフォルダがない場合は作成してください。

ショップの画像も表示する場合は、  
storage/app/public/shopsフォルダを作成し  
画像を保存してください。

## 参考にしたサイト
- 画像  
https://pixabay.com/ja/

## プラグイン  
*フロント*  
- 画像のカルーセルで使用  
swiper@6.7.0
- モーダル画面で使用  
micromodal@0.4.10  

*サーバー*  
- 画像のリサイズで使用  
intervention/image@2.7
- 決済処理で使用  
laravel/stripe-php@7.108  

## .envのファイルで設定したもの
- 使用するデータベースの設定
- stripeのトークン
- mailableの設定
- メール送信の非同期の設定

## メール送信について
メール処理には時間がかかるので、  
キューを使用しています。

必要な場合は
```
php artisan queue:work
```
を使用し、ワーカーを立ち上げて動作確認するようにしてください。

