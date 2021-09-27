/* Users */
CREATE TABLE `users` (
 `id` bigint(10) NOT NULL AUTO_INCREMENT,
 `phone` varchar(20) NOT NULL,
 `name` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
)

/* GST Plans */
CREATE TABLE IF NOT EXISTS `gstPlans` (
    `id` bigint(10) NOT NULL AUTO_INCREMENT,
    `planname` varchar(200) NOT NULL,
    `currency` varchar(50) NOT NULL,
    `amount` varchar(50) NOT NULL,
    `decimalamt` varchar(50) NOT NULL,
    `timeperiod` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
);

/* Contact Users */
CREATE TABLE IF NOT EXISTS `contactusers` (
    `id` bigint(10) NOT NULL,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(100) NOT NULL,
    `message` TEXT NOT NULL,
    PRIMARY KEY(`id`)
)