https://www.twilio.com/blog/build-restful-api-php-yii2



Run migrations & seeds:
- php yii migrate



### QUERIES

CREATE TABLE `pais` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `codigo` CHAR(2) NOT NULL,
  `nome` CHAR(52) NOT NULL,
  `populacao` INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

use member;
create table `user` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `username` CHAR(52) NOT NULL,
  `password` CHAR(52) NOT NULL,
  `authKey` CHAR(52) NOT NULL,
  `accessToken` CHAR(52) NOT NULL
);

DROP TABLE pais;

INSERT INTO `user` VALUES (100, 'admin', 'admin', 'test100key', '100-token');

INSERT INTO `pais` VALUES (1, 'AU','Austrália',24016400);
INSERT INTO `pais` VALUES (2, 'BR','Brasil',205722000);
INSERT INTO `pais` VALUES (3, 'CA','Canadá',35985751);
INSERT INTO `pais` VALUES (4, 'CN','China',1375210000);
INSERT INTO `pais` VALUES (5, 'DE','Alemanha',81459000);
INSERT INTO `pais` VALUES (6, 'FR','França',64513242);
INSERT INTO `pais` VALUES (7, 'GB','Reino Unido',65097000);
INSERT INTO `pais` VALUES (8, 'IN','Índia',1285400000);
INSERT INTO `pais` VALUES 	(8, 'RU','Rússia',146519759);
INSERT INTO `pais` VALUES (10, 'US','Estados Unidos',322976000);

select * from pais;

select * from user;

INSERT INTO `pais` VALUES ('TS','Teste',123456789);



ALTER TABLE pais
DROP PRIMARY KEY;

