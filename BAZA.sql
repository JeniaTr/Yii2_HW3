CREATE TABLE `tovar_order` (
	`order_id` int(11) NOT NULL DEFAULT '0',
	`tovar_id` int(11) NOT NULL DEFAULT '0'
);

CREATE TABLE `buyer` (
	`buyer` int(11) NOT NULL,
	`fio` TEXT(35) NOT NULL UNIQUE,
	`adres` TEXT(55) NOT NULL,
	`telefon` int(20) NOT NULL,
	PRIMARY KEY (`buyer`)
);

CREATE TABLE `tovar` (
	`tovar` int(11) NOT NULL,
	`name` TEXT(35) NOT NULL,
	PRIMARY KEY (`tovar`)
);

CREATE TABLE `orders` (
	`order` int NOT NULL,
	`buyer_id` int NOT NULL,
	`date` DATE NOT NULL,
	`sum` TEXT(45) NOT NULL UNIQUE,
	PRIMARY KEY (`order`)
);

ALTER TABLE `tovar_order` ADD CONSTRAINT `tovar_order_fk0` FOREIGN KEY (`order_id`) REFERENCES `orders`(`order`);

ALTER TABLE `tovar_order` ADD CONSTRAINT `tovar_order_fk1` FOREIGN KEY (`tovar_id`) REFERENCES `tovar`(`tovar`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`buyer_id`) REFERENCES `buyer`(`buyer`);
