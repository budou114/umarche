## 開発環境
- Laravel 8.74.0
- php 7.3.16
- node 16.13.0
- npm  8.1.0

## 画像のダミーデータ
public/imagesフォルダ内にsample1.jpeg～sample6.jpegとして保存しています。  
```php artisan storage:link```  
コマンドの実行後、storageフォルダにリンク後、  
storage/app/public/productsフォルダ内に保存すると表示されます。  
productsフォルダがない場合は作成してください。

## ファイルのコンパイル
npmのコンパイルコマンドを実行する  
開発環境の場合  
```npm run dev```


## 参考にしたサイト
- 画像  
https://pixabay.com/ja/
