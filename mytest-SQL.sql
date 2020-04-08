-- CRUD/create,read,updata,delete/資料庫操作簡稱
-- PRIMARY為主建,用來產生流水號,A_I要記得勾
--VARCHAR一定長度內的字元(一般設255),文字編碼要改為utf8_general_ci
CREATE TABLE `mytest`.`member_list` 
( `sid` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(255) NOT NULL ,
 `tel` VARCHAR(255) NOT NULL , 
 `email` VARCHAR NOT NULL , 
 `birthday` DATE NOT NULL ,
  `address` VARCHAR(255) NOT NULL ,
   `created_at` DATETIME NOT NULL ,
    PRIMARY KEY (`sid`)) 
    ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

--值一定要用單引號
INSERT INTO
 `member_list` ( `name`, `tel`, `email`, `birthday`, `address`, `created_at`)
VALUES
( '猜猜我是誰', '還敢搭訕啊', '這年頭才不會給真的呢~', '2022-10-06', '難不成是跟蹤狂?!', '2020-04-06 16:35:12'),
( '猜猜我是誰', '還敢搭訕啊', '這年頭才不會給真的呢~', '2022-10-06', '難不成是跟蹤狂?!', '2020-04-06 16:35:12'),
( '猜猜我是誰', '還敢搭訕啊', '這年頭才不會給真的呢~', '2022-10-06', '難不成是跟蹤狂?!', '2020-04-06 16:35:12');

SELECT `name` FROM `member_list` WHERE 1
--選欄位,表單
UPDATE `member_list` SET `tel`=[2345678]] WHERE 1
DELETE FROM `member_list` WHERE 0
--WHERE 1or0/判斷是否提取資料
--LIMIT 6,5從第6筆開始,拿5筆資料

--excel轉資料庫*.csv編碼設定為utf8、big5(與ANSI編碼相同,要用notepad,只能呈現中英文)
