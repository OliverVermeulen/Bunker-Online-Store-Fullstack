-- Database: bunker

-- Adds in users table
CREATE TABLE `bunker`.`users` ( 
`user_id` INT NOT NULL AUTO_INCREMENT, 
`name` VARCHAR(50) NOT NULL, 
`username` VARCHAR(50) NOT NULL, 
`email` VARCHAR(50) NOT NULL, 
`password` TEXT NOT NULL, 
`created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY (`user_id`)
) ENGINE = InnoDB;

CREATE TABLE `bunker`.`products` (
`product_id` INT NOT NULL AUTO_INCREMENT , 
`type` VARCHAR(20) NOT NULL ,
`name` VARCHAR(50) NOT NULL , 
`brand` VARCHAR(50) NOT NULL , 
`price` INT NOT NULL , 
`image` VARCHAR(250) NOT NULL , 
`alt_view_image` VARCHAR(250) NOT NULL , 
`released` VARCHAR(10) NOT NULL , 
`featured` VARCHAR(10) NOT NULL , 
PRIMARY KEY (`product_id`)
) ENGINE = InnoDB;

CREATE TABLE `bunker`.`cart` (
`user_id` INT NOT NULL AUTO_INCREMENT , 
`product_id` INT NOT NULL, 
`product_name` VARCHAR(50) NOT NULL , 
`product_price` INT NOT NULL , 
`product_image` VARCHAR(250) NOT NULL , 
PRIMARY KEY (`user_id`)
) ENGINE = InnoDB;

-- Links books and authors tables via foreign key
ALTER TABLE `cart` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- Adds records into books table
INSERT INTO `products` (`product_id`, `type`, `name`, `brand`, `price`, `image`, `alt_view_image`, `released`, `featured`) VALUES 
(NULL, 'top', 'Float Tee', 'Supreme', '700', '/Bunker-Online-Store-Fullstack/src/images/products/t-shirt.png', '/Bunker-Online-Store-Fullstack/src/images/products/t-shirt-alt-view.png', 'true', 'true'), 
(NULL, 'top', 'Camo Field Jacket With Patches', 'Off-White', '22000', '/Bunker-Online-Store-Fullstack/src/images/products/camo-jacket.png', '/Bunker-Online-Store-Fullstack/src/images/products/camo-jacket-alt-view.png', 'true', 'false'),