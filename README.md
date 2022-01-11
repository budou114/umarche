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

## ファイルのコンパイル
npmのコンパイルコマンドを実行する  
開発環境の場合  
```npm run dev```


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
