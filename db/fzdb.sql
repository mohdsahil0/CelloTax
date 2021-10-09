/* Users */
CREATE TABLE `users` (
 `id` bigint(10) NOT NULL AUTO_INCREMENT,
 `phone` varchar(20) NOT NULL,
 `name` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
);

/* GST Plans Web */
CREATE TABLE IF NOT EXISTS `gstPlans` (
    `id` bigint(10) NOT NULL AUTO_INCREMENT,
    `amt` varchar(100) NOT NULL,
    `planname` varchar(200) NOT NULL,
    `planamt` varchar(200) NOT NULL,
    `content` varchar(200) NOT NULL,
    `services` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
);

/* GST Imp. Plans */
CREATE TABLE IF NOT EXISTS `gstImpPlans` (
    `id` bigint(10) NOT NULL AUTO_INCREMENT,
    `amt` varchar(100) NOT NULL,
    `planname` varchar(200) NOT NULL,
    `planamt` varchar(200)  NOT NULL,
    `planimg` varchar(100) NOT NULL,
    `content` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
);

/* Income Tax Plans Web */
CREATE TABLE IF NOT EXISTS `itPlans` (
    `id` bigint(10) NOT NULL AUTO_INCREMENT,
    `amt` varchar(100) NOT NULL,
    `planname` varchar(200) NOT NULL,
    `planamt` varchar(200) NOT NULL,
    `content` varchar(200) NOT NULL,
    `services` varchar(200) NOT NULL,
    PRIMARY KEY (`id`)
);

/* Contact Users */
CREATE TABLE IF NOT EXISTS `contactusers` (
    `id` bigint(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(100) NOT NULL,
    `message` TEXT NOT NULL,
    PRIMARY KEY(`id`)
);

/* Client Reviews */
CREATE TABLE IF NOT EXISTS `clientreviews` (
    `id` bigint(10) NOT NULL AUTO_INCREMENT,
    `filename` varchar(255) NOT NULL,
    `count` varchar(10) NOT NULL,
    `name` varchar(200) NOT NULL,
    `review` varchar(200) NOT NULL,
    `ratings` varchar(10) NOT NULL,
    PRIMARY KEY(`id`)
);