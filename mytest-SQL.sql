-- SQL
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

    INSERT INTO `member_list` (`sid`, `name`, `tel`, `email`, `birthday`, `address`, `created_at`) 
    VALUES (NULL, '猜猜我是誰', '還敢搭訕啊', '這年頭才不會給真的呢~', '2022-10-06', '難不成是跟蹤狂?!', '201