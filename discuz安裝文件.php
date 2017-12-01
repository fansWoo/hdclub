進入 http://localhost/phpmyadmin/

建立 資料庫 fanswoo_com_hdclube  匯入hdclube.sql檔

管理員帳號 admin 密碼123456789










discuz 升級流程 安裝2.5版discuz 在本機環境測試需安裝 低階xampp 5.6.30 / PHP 5.6.30

安裝後 依序升級 3.0 > 3.2 > 3.3

安裝流程

第一步：完整地备份数据库；(可略)
第二步：在网站根目录建立文件夹 old，旧程序除了 data ，  config， uc_client, uc_server 目录以外的程序移动进入 old目录中；
第三步： 上传 3.0 程序（压缩包中 upload 目录中的文件）， 如上传时候提示覆盖目录，请选择“是”；
第四步：上传安装包 utility 目录中的 update.php 到论坛 install 目录，删除 install 目录中的index.php执行
 http://你的域名/论坛路径/install/update.php参照提示进行升级即可。升级成功后，old目录中的文件就可以进行删除。


每次升級完 要再次升級需刪除 data > updatelock 檔案

3.0 > 3.2

升級3.2時會出現MYSQL資料庫新增錯誤需要手動新增排除，mysql 語系有更新已不支援 
TYPE=MyISAM與TYPE=HEAP的寫法，需重新將所有更新文件 改寫成 ENGINE=MyISAM ENGINE=Head。


需修改update.php TYPE=MyISAM與TYPE=HEAP

升級3.3後 需登入管理後台 工具>更新緩存 

管理後台將會正常顯示選單



研究discuz 2.5版本安裝

原修改辦法 將discuz底下文件 set_magic_quotes_runtime(0) PHP語法改寫 ini_set("magic_quotes_runtime",0); 
原因PHP 7 系統改版更新將不支援舊版 PHP 5.6以下 實際操作後發現 需要修改的地方太多了。 尋找舊版本 XAMPP 有支援PHP5.6以下版本

安裝測試discuz 2.5版本3.2版本
實際測試使用網路上找到的舊版xampp 實際運行可行

研究版本環境與local 下 升級測試
發現2.5升級3.2時會出現MYSQL資料庫新增錯誤需要手動新增排除，mysql 語系有更新已不支援 TYPE=MyISAM與TYPE=HEAP的寫法，需重新將所有更新文件 改寫成 ENGINE=MyISAM ENGINE=Head。需修改update.php TYPE=MyISAM與TYPE=HEAP
localhost 環境下可安裝升級 更新3.2

研究客戶 FTP 資料庫結構 與 網站根目錄位子&&研究備份客戶資料 [1hr]

需使用SFTP連接，客戶網站跟目錄在 data->www->west->hd.club.tw

使用FTP備份 檔案將會有90萬筆 還在備份當中預計需要跑一天

研究客戶mysql 資料 取出備份 研究如何匯入大型資料庫做本機環境測試 [2hr]

客戶端資料庫sql檔龐大約2G，容易下載失敗，重複download多次，將會使用BigDump程式做大型資料庫匯入測試

研究discuz 論壇管理系統 關於網站搬移 備份相關機制功能 [1hr]

建議能否跟客戶要到 HD 論壇管理帳號，由於資料庫會員帳密使用MD5+額外判斷字元加密，無法讀取到帳號密碼。

---------------------------------------------------------
大型資料庫上傳 研究bigdump [4hr]

這次花了很多時間看文章，誤區的地方滿多的，文章分享的人上傳的資料庫根本都不到100M，此次HD的資料庫是HD的mysql 檔案達到2.85G，網路上教學直接使用bigdump照著教學還是沒辦法上傳，實際測試bigdump 皆顯示錯誤，原因 網路上文章寫的人，bigdump文件需要修改 $max_query_lines = 原設定3000，需要再往上修改，但就算修改999999還是無法直接整個上傳2.85G資料庫，找到不資料調整，最後改重新分批下載資料庫，分批使用bigdump 上傳得以解決(手動容易出問題)



備註: 可能是資料庫下載時可以設定 [建立之查詢最大長度] 待確認

discuz UCenter 本機測試更新 [新問題] [2hr]
資料備份模擬資料庫mysql download完成，本機測試發現HD本身論壇 內的UCenter版本是更久額外安裝，不像現在discuz提供的安裝本身已經整合，上網找資料如何升級UCenter 到 1.6.0 以上版本..與找 UCenter 升級軟體 原官網的下載連結已失效

UCenter 升級測試[1.5hr]

找不到舊版下載，嘗試直接修改更新文件 判斷Ucenter版本 語法
updata.php
if(version_compare($version, '1.5.2') <= 0)  修改為大於0，運行測試可以，不過資料庫table 會有缺少問題非正常升級程序，嘗試手動上傳table 運行測試可運行，各項功能是否會有bug 待測試..

HD 論壇資料備份 [0.5hr]

目前進度尚有69萬筆未下載，本機硬碟不夠大需要重新整理再另外搬移


3.30  

HD 備份資料整合 [1 hr]

原本電腦上的硬碟空間不足，組裝舊電腦的硬碟來當備份硬碟，同一所有分散抓的備份文件

目前文件還有40萬 預計到下星期一才會抓完

測試在localhost還原HD資料庫[1hr]

localhost直接匯入還是會有資料表單錯誤的訊息，除非整個原始安裝的表單全部刪除才不會錯可以順利匯入，但是會有系統的表單缺失問題要另外自動補充(存在BUG問題)，研究使用HD論壇自有功能備份還原

HD後台 admin密碼破解[3HR]

HD的論壇有兩層帳密需要登入，另一層主管所有會員資料的密碼根源先登入的不同加上密碼皆使用兩重式MD5加密 (會加上時間日期和IP位子 生成兩組KEY 需要互相對應)

解決辦法
先找到管理密碼KEY的表單

uc_server/data中打开找到文件config.inc.php 以及 config/config_global.php、config/config_ucenter.php

以本機申請的帳號密碼為主複製下來

將HD改為
define('UC_FOUNDERPW', '047099adb883dc19616dae0ef2adc5b6'); 
define('UC_FOUNDERSALT', '311254'); 

密碼將會為自己本機設定的密碼

研究登入HD 論壇 測試使用論壇功能備份還原備份資料 [1hr]


升級3.2版 登入 出現UCENTER錯誤 [1hr]
UCenter info: MySQL Query Error SQL:SELECT value FROM [Table]vars WHERE noteexists

http://www.jb51.net/article/28413.htm 參考網站

解決方式
config/config_ucenter.php文件 
define('UC_DBTABLEPRE', 'pre_ucenter_'); 
修改對應資料表
目前的方式是直接抓系統升級版的新的預設資料表

待解決::資料都是用HD的，但是抓到本機 卻沒有這個資料表，確認HD網站上 也找不到他預設的資料表 cdb_uc_ 不知道是不是UC另外存別的資料表

測試 由2.5 升級到 3.2 升級到X3.3 [2hr]
(以目前5.6 PHP 是可以運行的)

今日老闆告知客戶想要直接升到最新版3.3版 所以重新做測試

半環境模擬  HD 論壇[3hr]

今日直接測試 以目前抓的HD資料下去在本機安裝X2.5，不使用FTP 傳資料庫 而是以論壇上的功能去還原資料庫，測試狀況不錯至少前台顯示狀況皆為正常，也不會有FTP強硬匯入出現的錯誤狀況，但是待解決後台無法登入問題


/common/header_userstatus.php
/forum/guide.htm
/image/js/sxpSlide.js
/sxp_config.php