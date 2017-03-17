## iThome Laravel 基礎入門班 todo 應用程式範例程式碼

Laravel 道場於 2017/03/25 與 iThome 合作舉辦 Laravel 一日體驗班，讓參與的學員在 6 個小時內學習使用 Laravel 5.4.15 建置一個簡單的 todo 應用程式。此為課程範例程式碼，課程詳細資訊及內容請參考：<http://class.ithome.com.tw/laravel/>

### 警告！

#### 這個範例程式碼僅是配合投影片/講義教學順序而撰寫，範例內為引導初學者漸進式學習，許多程式碼並非最佳實踐；程式內的諸多功能、錯誤處理也不完整。目的僅是做為示範與提示，並期能引導學員自行完成不足之處。請勿將這個程式碼佈署至上線機器，若因此造成您的損失恕不負責。

#### 此範例版本為 Laravel 5.4.15

### 如何使用範例程式碼

1. 下載 或 `git clone https://github.com/laravel-dojo/201703-ithome-todo-example.git todo` 
2. 打開 Terminal ，切換至 `todo` 資料夾
3. 執行 `composer install`
4. 複製一份 `.env.example` 成 `.env` 
5. 在專案資料夾下執行 `php artisan key:generate` 產生 `APP_KEY`
6. 啟動您的 MySQL 伺服器後進入您的 MySQL 管理介面，建立一個新的 `todo_local` 資料庫
7. 打開 `.env` 設定 MySQL 資料庫
8. 在 Terminal 執行 `php artisan migrate` 確認資料庫連線正確並建立專案運作所謂的資料表
9. 設定您的 HTTP 伺服器的文件根目錄 (Document Root) 指向 `todo/public` 並啟動您的 HTTP 伺服器
10. 瀏覽應用程式首頁即可

### 補充說明

* 這個範例是參考自 Laravel 官方文件內 [Beginner Task List](https://laravel.com/docs/5.2/quickstart) 教學為基礎修改而成。
