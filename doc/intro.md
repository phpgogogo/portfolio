# 網站功能規劃
1. 前台
    * navbar
        介紹:使用bootstrap技術編輯外觀，配合文件物件模型(DOM)製作平滑移動的效果。
    * jumbotron圖片區塊
        介紹:使用bootstrap的jumbotron製作，配合CSS的animation，做出圖片移動和文字鍵入的效果。
    * 自我介紹區塊
        介紹:使用bootstrap排版。
    * 作品集區塊
        介紹:使用bootstrap排版，將黑色背景設為透明的div區塊和作品圖片重疊後，利用hover呈現視覺效果。
    * CONTACT區塊
        介紹:使用bootstrap排版。
    * FOOTER區塊
        介紹:使用bootstrap + CSS排版
2. 後台
    * 首頁
        介紹:使用PHP include + GET 顯示不同頁面
    * block.php
        介紹:使用a標籤連到api/block.php，並設定判斷式來變更顯示狀態。
    * contact.php
        介紹:使用ajax回傳id到del_contact.php刪除資料。
    * edit_contact_text.php
        介紹:使用form表單回傳變數到api/edit_contact_text.php編輯資料。
    * edit_footer_text.php
        介紹:使用form表單回傳變數到api/edit_footer_text.php編輯資料。
    * edit_footer.php
        介紹:1.使用form表單回傳變數到api/add_footer_text.php新增資料。
             2.使用form表單回傳變數到api/edit_footer_text.php編輯資料。
             3.使用form表單回傳變數到api/del_footer_text.php刪除資料。
    * edit_intro.php
        介紹:1.使用ajax回傳變數到api/edit_intro.php編輯資料。
             2.使用form表單回傳變數到api/edit_introimg.php編輯圖檔。
    * edit_portfolio.php
        介紹:1.使用form表單回傳變數到api/edit_portfolio.php編輯資料。
             2.使用form表單回傳變數到api/upload_portfolio.php新增資料。
    * 登入登出 login.php
        介紹:1.簡單使用判斷式判斷是否為管理員，並給予SESSION，讓沒登入的使用者無法進入後台。
             2.點擊登出按鈕，連到api/logout.php消除SESSION並導回前台首頁。
3. 其他
    * base.php
        介紹:儲存使用的函式。
    * css/style.css
        介紹:外部連結的CSS檔。
    








