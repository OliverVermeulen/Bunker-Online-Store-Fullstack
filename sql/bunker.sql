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
`released` INT NOT NULL , 
`featured` INT NOT NULL , 
PRIMARY KEY (`product_id`)
) ENGINE = InnoDB;

CREATE TABLE `bunker`.`cart` (
`user_id` INT NOT NULL, 
`product_id` INT NOT NULL, 
`product_name` VARCHAR(50) NOT NULL , 
`product_price` INT NOT NULL , 
`product_image` VARCHAR(250) NOT NULL
) ENGINE = InnoDB;

-- Links books and authors tables via foreign key
ALTER TABLE `cart` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- Adds records into books table
INSERT INTO `products` (`product_id`, `type`, `name`, `brand`, `price`, `image`, `alt_view_image`, `released`, `featured`) VALUES 
(NULL, 'top', 'Float Tee', 'Supreme', 700, 't-shirt.png', 't-shirt-alt-view.png', 1, 1), 
(NULL, 'top', 'Camo Field Jacket With Patches', 'Off-White', 22000, 'camo-jacket.png', 'camo-jacket-alt-view.png', 1, 0),
(NULL, 'top', 'Cotton Ripstop Dyed Jacket', 'Stone Island', 10600, 'cotton-dyed-jacket.png', 'cotton-dyed-jacket-alt-view.png', 1, 0), 
(NULL, 'top', 'Peace Of Mind Hoodie', 'Vans', 1500, 'hoodie.png', 'hoodie-alt-view.png', 1, 0),
(NULL, 'top', 'Busy Shark Chambray Shirt', 'Bape', 5670, 'chambray-shirt.png', 'chambray-shirt-alt-view.png', 1, 0), 
(NULL, 'bottom', 'Credit Card Jean', 'Supreme', 3050, 'jean.png', 'jean-alt-view.png', 1, 0),
(NULL, 'bottom', 'Denim Shorts', 'Off-White', 7500, 'denim-short.png', 'denim-short-alt-view.png', 1, 1),
(NULL, 'bottom', 'Cotton Ripstop Dyed Jacket', 'Stone Island', 4400, 'canvas-trousers.png', 'canvas-trousers-alt-view.png', 1, 0),
(NULL, 'bottom', 'Eco Positivity Short', 'Vans', 799, 'elastic-short.png', 'elastic-short-alt-view.png', 1, 0),
(NULL, 'bottom', 'Camo Painter Pants', 'Bape', 8250, 'painter-pants.png', 'painter-pants-alt-view.png', 1, 0), 
(NULL, 'accessory', 'Velo Sunglasses', 'Supreme', 3400, 'sunglasses.png', 'sunglasses-alt-view.png', 1, 0),
(NULL, 'accessory', 'Tape Industrial Belt', 'Off-White', 3220, 'belt.png', 'belt-alt-view.png', 1, 0),
(NULL, 'accessory', 'Commato Backpack', 'Stone Island', 6350, 'backpack.png', 'backpack-alt-view.png', 1, 1),
(NULL, 'accessory', 'Checkerboard Crew Socks', 'Vans', 300, 'socks.png', 'socks-alt-view.png', 1, 0),
(NULL, 'accessory', 'Knit Cap', 'Bape', 1600, 'beanie.png', 'beanie-alt-view.png', 1, 0),
(NULL, 'soon', 'Palm Tree Bowling Shirt', 'Gucci', 16710, 'coming-soon-1.png', 'coming-soon-1.png', 0, 0),
(NULL, 'soon', '50/50 Wide Leg Jeans', 'Balenciaga', 12510, 'coming-soon-2.png', 'coming-soon-2.png', 0, 0),
(NULL, 'soon', 'Monogram Split Scarf', 'Louis Vuitton', 19000, 'coming-soon-3.png', 'coming-soon-3.png', 0, 0)