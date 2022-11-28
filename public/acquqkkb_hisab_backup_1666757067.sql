

CREATE TABLE `accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_balance` double DEFAULT NULL,
  `total_balance` double NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO accounts VALUES("1","11111","Sales Account","1000","1000","this is first account","0","0","2018-12-17 21:58:02","2022-03-21 19:38:24");
INSERT INTO accounts VALUES("3","21211","Sa","500","500","","0","0","2018-12-17 21:58:56","2022-03-21 19:38:31");
INSERT INTO accounts VALUES("4","12345678","purchase account","500","500","sample note","0","0","2020-12-02 00:21:21","2022-03-21 19:38:36");
INSERT INTO accounts VALUES("5","151289","Management Account","2000","2000","Sample Management Account","0","0","2020-12-29 23:06:12","2022-03-21 19:38:41");
INSERT INTO accounts VALUES("6","SalesAccount","Sales Account","1000","1000","This account is used for sales purpose only","1","1","2021-02-01 23:50:55","2022-08-01 08:04:30");
INSERT INTO accounts VALUES("7","PurchaseAccount","Purchase Account","0","0","","0","1","2022-03-21 19:39:42","2022-08-01 08:04:30");
INSERT INTO accounts VALUES("8","Income Account","Income Account","0","0","","","1","2022-06-23 11:20:37","2022-06-23 11:20:37");
INSERT INTO accounts VALUES("9","Expense Account","Expense Account","0","0","","","1","2022-06-23 11:20:59","2022-06-23 11:20:59");



CREATE TABLE `adjustments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_qty` double NOT NULL,
  `item` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO adjustments VALUES("1","adr-20201201-104510","1","","1","1","sample","2020-11-30 23:45:10","2020-11-30 23:47:32");
INSERT INTO adjustments VALUES("2","adr-20201202-104708","1","","5","1","sample adjustment","2020-12-01 23:47:08","2020-12-01 23:47:08");
INSERT INTO adjustments VALUES("3","adr-20201230-045942","1","","3","1","for calculation","2020-12-29 17:59:42","2020-12-29 17:59:42");
INSERT INTO adjustments VALUES("4","adr-20201230-050411","1","","3","1","for stock count","2020-12-29 18:04:11","2020-12-29 18:04:11");
INSERT INTO adjustments VALUES("5","adr-20210106-042138","7","","5","1","","2021-01-05 17:21:38","2021-01-05 17:21:38");



CREATE TABLE `attendances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `checkin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO attendances VALUES("1","2019-01-02","1","1","10:00am","6:30pm","1","","2019-01-01 22:30:50","2019-01-01 22:30:50");
INSERT INTO attendances VALUES("3","2019-01-02","3","1","10:15am","6:30pm","0","","2019-01-01 22:57:12","2019-01-01 22:57:12");
INSERT INTO attendances VALUES("6","2020-02-03","1","1","11:30am","6:00pm","0","","2020-02-03 04:57:30","2020-02-03 04:57:30");
INSERT INTO attendances VALUES("7","2020-12-03","1","28","10:00am","6:00pm","1","Sample Attendance","2020-12-02 17:38:28","2020-12-02 17:38:28");
INSERT INTO attendances VALUES("8","2020-12-03","3","28","10:00am","6:00pm","1","sample","2020-12-02 17:39:11","2020-12-02 17:39:11");
INSERT INTO attendances VALUES("9","2020-12-04","1","28","10:15am","6:00pm","0","","2020-12-02 17:42:51","2020-12-02 17:42:51");
INSERT INTO attendances VALUES("10","2020-12-30","6","28","10:00am","6:00pm","1","not late","2020-12-29 23:11:06","2020-12-29 23:11:06");
INSERT INTO attendances VALUES("11","2020-12-28","6","28","10:15am","6:00pm","0","late","2020-12-29 23:11:30","2020-12-29 23:11:30");



CREATE TABLE `billers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO billers VALUES("1","yousuf","aks.jpg","aks","31123","yousuf@kds.com","442343324","halishahar","chittagong","","","sdgs","1","2018-05-12 17:49:30","2019-03-02 00:20:38");
INSERT INTO billers VALUES("2","tariq","","big tree","","tariq@bigtree.com","321312","khulshi","chittagong","","","","1","2018-05-12 17:57:54","2018-06-14 20:07:11");
INSERT INTO billers VALUES("3","test","","test","","test@test.com","3211","erewrwqre","afsf","","","","0","2018-05-29 22:38:58","2018-05-29 22:39:57");
INSERT INTO billers VALUES("5","modon","mogaTel.jpg","mogaTel","","modon@gmail.com","32321","nasirabad","chittagong","","","bd","1","2018-08-31 23:59:54","2018-10-06 22:35:51");
INSERT INTO billers VALUES("6","a","","a","","a@a.com","q","q","q","","","","0","2018-10-06 22:33:39","2018-10-06 22:34:18");
INSERT INTO billers VALUES("7","a","","a","","a@a.com","a","a","a","","","","0","2018-10-06 22:34:36","2018-10-06 22:36:07");
INSERT INTO billers VALUES("8","x","x.png","x","","x@x.com","x","x","x","","","","1","2019-03-18 07:02:42","2019-12-21 06:01:24");
INSERT INTO billers VALUES("9","Safi","AcquaintTechnologies.jpg","Acquaint Technologies","Sahid","safiulsahid151289@gmail.com","01521100281","mohanagar project","Dhaka","Dhaka","1000","Bangladesh","1","2020-12-02 17:56:33","2020-12-02 17:56:33");



CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO blogs VALUES("5","4 REASONS WHY MOBILE APPS ARE THE FUTURE OF STUDENT INFORMATION SYSTEMS","public/images/blogs/1690038422121221.jpg","In the previous decade, we have seen an inconceivable advancement of innovation in each part of our lives. Nowadays Mobile app is so important  for our daily life. It is an understatement to say that Mobile app has just merely improved, it has actually made leaps and bounds.

Speed and efficiency:

Mobile phones offer a few points of interest to clients, the first and conceivably the most significant is speed/efficient. SEO is the way toward improving the quality and amount of site traffic to a site or a website page from web indexes. A great many people consistently convey their smartphones with them, and this reality offers them the chance to get to data from any area without the assistance of a customary personal computer.

Precision and adaptability:

Applications utilize the data to accurately customize the user experience. Customer Management  is the significant thing. Versatile registering and context‐aware application ideas can give more user‐centric data administrations to understudies. Most mobile apps tend to ask their client’s information, for example, geolocation. With the aggregation of information, applications make a User Profile to address the requirements of each client all together for the application to cover those necessities or different preferences. Thus, this offers extraordinary abilities using the application.

Trust and easy access:

Mobile users constantly  download applications on their phones. Web design with responsive is  so important for mobile. Mobile phones starting at 2019 have found a few different ways to protect your gadget with respect to information robbery. Passwords and face acknowledgment are probably the most mainstream procedures portable information designers concocted to keep your gadget secure.

A large number of users support:

As recently expressed, most of youngsters picked cell phones over the conventional personal computer. This pattern is transcendently related to twenty to thirty year old’s and age z. To be exact, 62% of twenty to thirty year olds like to do exercises on applications rather than a work area for different reasons.","2021-01-26 23:39:19","2021-02-02 19:24:27");
INSERT INTO blogs VALUES("6","BENEFITS OF SALES AND DISTRIBUTION SOFTWARE","public/images/blogs/1690039209785133.jpg","Merchants face a novel arrangement of difficulties in their business measures, including the development of items through each phase of the appropriation cycle as monetarily and effectively as could reasonably be expected. This includes staying aware of countless exchanges and stocks. Undertaking Resource Planning and Accounting Software explicitly custom fitted for the conveyance business can help merchants an incredible arrangement at each progression, from creation to conveyance. Here is a manual for the challenges that associations in the business face, and the advantages that a dispersion programming arrangement can give.

Organizations will likewise have the option to utilize the product to recognize any disparities between the stock posting and genuine number of stocks. This can go around serious issues that record irregularities for exchanges, conveyances, stocks and deals can cause. Noxious or unlawful activities can be all the more effectively saw too, again to forestall any future issues for your organization.

Distribution software keeps clients cheerful by diminishing time among request and conveyance. The bundle and conveyance of things turns out to be more precise, as the specific number of things required can be requested in a particular measure of time. This prompts less missteps that can bring about expanding deals cost, or losing deals altogether. Giving clients quality help will tempt them to utilize your administration once more, which fabricates a quality customer list, a beneficial type of revenue.

Distribution software improves the observing of stocks via computerizing stock administration. Thing stock that is as of now utilized or conveyed would then be able to be topped off promptly, so they can generally supply the things mentioned from customers.

Our Acquaint Technologies team create and develops custom software, websites with latest responsive designs and features.

Distribution software can save an association a huge amount of cash by eliminating the need of recruiting staff to screen exchanges and stocks. ERP dispersion programming grants total store network perceivability, improved quality administration, and more precise anticipating and arranging, improving the effectiveness of a business’ cycles, which prompts lower costs too. In the event that you are more mindful of value issues, this means less cash being spent on support and new parts.","2021-01-27 00:29:48","2021-02-02 19:22:45");
INSERT INTO blogs VALUES("7","USING A POS SOFTWARE TO GROW YOUR SMALL BUSINESS","public/images/blogs/1690039568502692.jpg","POS serves as your company’s central position. It is the hub where different aspects, such as sales, inventory, and customer management are merged together to ensure the smooth running of all your business operations. Here are the reasons why you need a POS Software or Point of Sale system for your business:

Point of Sale system performs huge client relationship management (CRM) redesigns. You can discover records of single or different clients (Maintain client’s logs) effectively so they can return or trade the bought merchandise in a matter of moments.

A POS software for small businesses can give you previews of the growth, development, and execution of your store whenever, without over-burdening your group.

Retailers need to settle on savvy buying choices, and a POS for private venture gives important experiences into how much stock to purchase, the amount to sell it for, and if it should be limited.

Our Acquaint Technologies team creates and develops custom software, responsive website with latest features.

The point of sale provides analyzes of the business processes underway in real-time.

POS software is simple for representatives to learn, subsequently shortening their preparation time and assisting them with getting more effective at their working environment.","2021-01-27 00:35:30","2021-02-02 19:21:46");



CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO brands VALUES("3","HP","HP.jpg","0","2018-05-12 05:06:14","2021-02-12 17:57:56");
INSERT INTO brands VALUES("4","samsung","samsung.jpg","0","2018-05-12 05:08:41","2021-01-26 19:16:51");
INSERT INTO brands VALUES("5","Apple","Apple.jpg","0","2018-08-31 19:34:49","2021-01-26 19:16:52");
INSERT INTO brands VALUES("6","jjjj","20201019093419.jpg","0","2020-10-19 11:33:52","2020-10-19 11:35:58");
INSERT INTO brands VALUES("7","Lotto","lotto.jpg","0","2020-11-15 23:13:41","2021-01-26 19:16:52");
INSERT INTO brands VALUES("8","Acer","20201203084637.jpg","0","2020-12-02 21:46:37","2021-01-26 19:16:52");
INSERT INTO brands VALUES("9","Rokomari","20201230053107.jpg","0","2020-12-29 18:31:07","2021-01-26 19:16:52");
INSERT INTO brands VALUES("10","Sprint","20210107080018.png","0","2021-01-06 21:00:18","2021-01-26 19:16:52");
INSERT INTO brands VALUES("11","Aarong","20210126074437.jpg","1","2021-01-25 20:44:37","2021-01-25 20:44:37");
INSERT INTO brands VALUES("12","Mejuri","20210126105149.png","1","2021-01-25 23:51:49","2021-01-25 23:51:49");
INSERT INTO brands VALUES("13","Taylor & Hart","20210127041907.png","1","2021-01-26 17:19:07","2021-01-26 17:19:07");
INSERT INTO brands VALUES("14","Alex and Ani","20210127062431.png","1","2021-01-26 19:24:31","2021-01-26 19:24:31");
INSERT INTO brands VALUES("15","Pipa Bella","20210127070049.jpg","1","2021-01-26 20:00:49","2021-01-26 20:00:49");
INSERT INTO brands VALUES("16","Zaveri Pearls","20210127084405.jpg","1","2021-01-26 21:44:05","2021-01-26 21:44:05");
INSERT INTO brands VALUES("17","Lenovo","20210209080317.png","0","2021-02-08 21:03:17","2021-02-12 17:57:50");
INSERT INTO brands VALUES("18","ABC","20220322052241.jpg","1","2022-03-21 19:22:11","2022-03-21 19:22:41");
INSERT INTO brands VALUES("19","Squair Food & Bevareg Limited","","1","2022-04-27 10:08:38","2022-04-27 10:08:38");



CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=378 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO carts VALUES("164","10","1","22","192.168.1.115","","2021-01-07 01:18:09");
INSERT INTO carts VALUES("167","22","1","1000","192.168.1.115","","2021-01-07 01:15:24");
INSERT INTO carts VALUES("168","2","1","12","192.168.1.115","","2021-01-07 01:15:31");
INSERT INTO carts VALUES("377","84","30","137525","::1","","");



CREATE TABLE `cash_registers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cash_in_hand` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cash_registers VALUES("1","100","9","1","0","2020-10-13 03:32:54","2020-10-23 20:27:42");
INSERT INTO cash_registers VALUES("2","50","9","1","1","2020-10-13 11:25:26","2020-10-13 11:25:26");
INSERT INTO cash_registers VALUES("3","200","1","1","1","2020-10-22 03:53:07","2020-10-23 20:33:32");
INSERT INTO cash_registers VALUES("4","100","1","2","1","2020-10-23 21:04:39","2020-10-23 21:04:39");
INSERT INTO cash_registers VALUES("5","500","28","1","1","2020-12-01 22:36:01","2020-12-01 22:36:01");
INSERT INTO cash_registers VALUES("6","400","28","1","1","2020-12-01 22:39:10","2020-12-01 22:39:10");
INSERT INTO cash_registers VALUES("7","40","28","7","0","2020-12-02 22:01:32","2022-03-21 19:42:33");
INSERT INTO cash_registers VALUES("8","100","28","1","1","2020-12-29 18:19:13","2020-12-29 18:19:13");
INSERT INTO cash_registers VALUES("9","100","28","2","1","2020-12-29 18:19:22","2020-12-29 18:19:22");



CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO categories VALUES("1","Fruits","","9","1","2018-05-11 23:27:25","2021-01-26 18:25:07");
INSERT INTO categories VALUES("2","electronics","","","0","2018-05-11 23:35:57","2021-01-26 18:25:07");
INSERT INTO categories VALUES("3","computer","20200701093146.jpg","2","1","2018-05-11 23:36:08","2021-01-26 18:25:07");
INSERT INTO categories VALUES("4","toy","","","0","2018-05-23 18:57:48","2021-01-26 18:25:17");
INSERT INTO categories VALUES("7","jacket","","","0","2018-05-27 18:39:51","2018-05-27 18:40:48");
INSERT INTO categories VALUES("9","food","","","0","2018-06-24 21:21:40","2021-01-26 18:25:07");
INSERT INTO categories VALUES("10","anda","","","0","2018-08-28 19:36:31","2018-08-28 19:37:34");
INSERT INTO categories VALUES("11","anda","","","0","2018-08-28 19:48:06","2018-08-28 19:53:22");
INSERT INTO categories VALUES("12","accessories","","","0","2018-12-04 18:28:53","2021-01-26 18:25:06");
INSERT INTO categories VALUES("14","nn","","","0","2019-04-10 00:22:30","2019-04-10 01:38:47");
INSERT INTO categories VALUES("15","nm","","","0","2019-04-10 00:22:36","2019-04-10 01:41:43");
INSERT INTO categories VALUES("16","desktop","","3","0","2020-03-11 06:42:33","2021-01-26 18:25:07");
INSERT INTO categories VALUES("17","tostos","20200701080042.png","","0","2020-07-01 10:00:42","2020-07-01 11:35:34");
INSERT INTO categories VALUES("19","Honey","20201201101257.jpg","9","0","2020-11-30 23:12:57","2020-11-30 23:17:12");
INSERT INTO categories VALUES("20","Honey","20201201101811.jpg","9","0","2020-11-30 23:18:11","2021-01-26 18:25:07");
INSERT INTO categories VALUES("21","fish","","9","0","2020-11-30 23:42:20","2021-01-26 18:25:07");
INSERT INTO categories VALUES("22","Men's Shoe","20210107080122.png","","0","2020-11-30 23:42:20","2021-01-26 18:25:17");
INSERT INTO categories VALUES("23","Islamic Book","20201201105316.jpg","23","0","2020-11-30 23:53:16","2021-01-26 18:25:07");
INSERT INTO categories VALUES("24","fish1","","9","0","2020-11-30 23:56:39","2020-12-01 00:03:31");
INSERT INTO categories VALUES("25","fish5","","","0","2020-12-01 00:02:33","2020-12-01 00:03:18");
INSERT INTO categories VALUES("26","modhu","","20","0","2020-12-01 00:17:48","2021-01-26 18:25:17");
INSERT INTO categories VALUES("27","new","20201202043345.jpg","","0","2020-12-01 17:33:45","2020-12-01 17:34:00");
INSERT INTO categories VALUES("28","Jewellery","20210126064113.jpg","","1","2021-01-25 19:41:13","2021-01-25 19:41:13");
INSERT INTO categories VALUES("29","Ring","20210127052733.jpg","28","1","2021-01-26 18:27:33","2021-01-26 18:27:33");
INSERT INTO categories VALUES("30","Earrings","20210127053050.jpg","28","1","2021-01-26 18:30:50","2021-01-26 18:30:50");
INSERT INTO categories VALUES("31","Bracelet","20210127053318.jpg","28","1","2021-01-26 18:33:18","2021-01-26 18:33:18");
INSERT INTO categories VALUES("32","Necklace","20210127053602.jpg","28","1","2021-01-26 18:36:02","2021-01-26 18:36:02");
INSERT INTO categories VALUES("33","Electronics","20210209075511.jpg","","0","2021-02-08 20:55:11","2021-02-12 17:57:31");
INSERT INTO categories VALUES("34","abc","20220322052331.jpg","","1","2022-03-21 19:23:31","2022-03-21 19:23:31");
INSERT INTO categories VALUES("35","box","","","1","2022-04-27 10:15:18","2022-04-27 10:15:18");



CREATE TABLE `checkouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `colors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `color_name` varchar(191) NOT NULL,
  `color_description` text DEFAULT NULL,
  `color_image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO colors VALUES("1","Black","test","","2020-12-05 17:36:49","2020-12-05 17:36:49");



CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO contacts VALUES("1","Safi Ul Sahid","safiulsahid151289@gmail.com","01521100281","Hello World","2021-01-18 17:56:26","2021-01-18 17:56:26");
INSERT INTO contacts VALUES("2","Mohaimanul","mim@gmail.com","01922270873","hi","2021-01-18 23:48:21","2021-01-18 23:48:21");
INSERT INTO contacts VALUES("3","Nasir","nasir@gmail.com","01726353787","I am Nasir","2021-01-19 22:51:38","2021-01-19 22:51:38");



CREATE TABLE `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `minimum_amount` double DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `used` int(11) NOT NULL,
  `expired_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO coupons VALUES("1","sonar bangla","percentage","20","0","100","4","2020-11-19","1","1","2018-10-25 18:38:50","2020-11-17 19:52:39");
INSERT INTO coupons VALUES("2","i love bangladesh","fixed","200","1000","50","1","2018-12-31","1","1","2018-10-26 22:59:26","2019-03-02 00:46:48");
INSERT INTO coupons VALUES("3","vb115MM11a","fixed","1000","5000","3","0","2020-12-02","28","1","2020-12-01 22:42:07","2020-12-01 22:42:07");



CREATE TABLE `currencies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO currencies VALUES("1","US Dollar","USD","1","2020-10-31 20:22:58","2020-10-31 20:34:55");
INSERT INTO currencies VALUES("2","Bangladeshi Taka","BDT","1","2020-10-31 21:29:12","2020-12-29 22:34:37");



CREATE TABLE `customer_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customer_groups VALUES("1","general","0","1","2018-05-12 04:09:36","2019-03-02 01:01:35");
INSERT INTO customer_groups VALUES("2","distributor","-10","1","2018-05-12 04:12:14","2019-03-02 01:02:12");
INSERT INTO customer_groups VALUES("3","reseller","5","1","2018-05-12 04:12:26","2018-05-29 21:18:14");
INSERT INTO customer_groups VALUES("4","test","12","0","2018-05-29 21:17:16","2018-05-29 21:17:57");
INSERT INTO customer_groups VALUES("5","test","0","0","2018-08-03 05:10:27","2018-08-03 05:10:34");
INSERT INTO customer_groups VALUES("6","Major","15","1","2020-12-02 21:45:00","2020-12-02 21:45:00");



CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_group_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` double DEFAULT NULL,
  `expense` double DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customers VALUES("1","1","22","dhiman","lioncoders","dhiman@gmail.com","+8801111111101","","kajir deuri","chittagong","","","bd","190","20","1","2018-05-12 06:00:48","2020-11-15 01:14:58");
INSERT INTO customers VALUES("2","2","","moinul","lioncoders","","+8801200000001","","jamalkhan","chittagong","","","bd","100","20","1","2018-05-12 06:04:51","2019-02-22 00:38:08");
INSERT INTO customers VALUES("3","3","","tariq","big tree","","3424","","khulshi","chittagong","","","bd","","","1","2018-05-12 06:07:52","2019-03-02 00:54:07");
INSERT INTO customers VALUES("4","1","","test","","","4234","","frwerw","qwerwqr","","","","","","0","2018-05-29 21:35:28","2018-05-29 21:37:38");
INSERT INTO customers VALUES("8","1","","anwar","smart it","anwar@smartit.com","32321","","nasirabad","chittagong","","","bd","","","0","2018-08-31 23:26:13","2018-08-31 23:29:55");
INSERT INTO customers VALUES("11","1","","walk-in-customer","","ashfaqdev.php@gmail.com","01923000001","11111","mohammadpur","dhaka","","","","","0","1","2018-09-01 21:30:54","2020-07-27 10:28:19");
INSERT INTO customers VALUES("15","1","","s","","","2","","s","3e","","","","","","0","2018-11-04 23:00:39","2018-11-07 22:37:08");
INSERT INTO customers VALUES("16","1","","asas","","","2121","","dasd","asdd","","","","","","0","2018-11-30 19:07:53","2018-12-03 16:55:46");
INSERT INTO customers VALUES("17","1","","sadman","","","312312","","khulshi","ctg","","","","","","0","2020-06-22 05:45:35","2020-06-22 05:45:51");
INSERT INTO customers VALUES("19","1","19","shakalaka","Digital image","shakalaka@gmail.com","1212","999","Andorkillah","Chittagong","Chittagong","1234","Bangladesh","","","1","2020-11-08 19:07:16","2020-11-08 19:07:16");
INSERT INTO customers VALUES("21","1","21","Modon Miya","modon company","modon@gmail.com","2222","","kuril road","Dhaka","","","","","","1","2020-11-13 02:12:11","2020-11-13 02:12:11");
INSERT INTO customers VALUES("24","2","27","Safi Ul Sahid","Acquaint Technologies","safiulsahid151289@gmail.com","01521100281","01911160762","mohanagar project","Dhaka","Dhaka","1000","Bangladesh","","","0","2020-11-30 18:21:19","2020-11-30 18:21:19");
INSERT INTO customers VALUES("25","1","","Mohsin Ali","Swapno","mohsin@gmail.com","016172637764","12345678","Dhanmondi","Dhaka","Dhaka","1200","Bangladesh","","","1","2020-12-02 17:54:03","2020-12-02 17:54:03");
INSERT INTO customers VALUES("26","1","","Safi Ul Sahid","Acquaint Technologies","safiulsahid151289@gmail.com","01521100281","","mohanagar project","Dhaka","Dhaka","1000","Bangladesh","","","1","2020-12-29 19:19:51","2020-12-29 19:19:51");
INSERT INTO customers VALUES("27","1","","Rafi Ul Sahid","Acquaint Technologies","safiulsahid151289@gmail.com","01521100281","","mohanagar project","Dhaka","Dhaka","1000","Bangladesh","","","1","2021-01-08 18:12:48","2021-01-08 18:12:48");
INSERT INTO customers VALUES("28","1","","Sahid nur","ABH World","sahid@gmail.com","0167232621","","Jaleswaritrola","Bogra","Rajshahi","1234","Bangladesh","","","1","2021-01-13 00:00:09","2021-01-13 00:00:09");
INSERT INTO customers VALUES("29","1","","Shahidur Rahman","College","sahidur@gmail.com","01911160762","","romena afaz road","bogra","Rajshahi","1389","Bangladesh","","","1","2021-01-13 17:17:41","2021-01-13 17:17:41");
INSERT INTO customers VALUES("30","1","","Selina Begum","BRDB","selina@gmail.com","01521100281","","Jaleswaritola","Bogura","Rajshahi","1540","Bangladesh","","","1","2021-01-13 18:45:05","2021-01-13 18:45:05");
INSERT INTO customers VALUES("31","1","32","Mohaimanul","khadem","mim@gmail.com","01922270873","","koigari","bogra","rajshahi","1540","bangladesh","","","1","2021-01-15 18:48:44","2021-01-15 18:48:44");
INSERT INTO customers VALUES("32","1","33","karim","dream","karim@gmail.com","01521100281","011","kalitola","bogura","rajshahi","1200","Bangladesh","","","0","2021-01-16 19:02:42","2021-01-16 19:02:42");
INSERT INTO customers VALUES("33","1","34","robi ul","Aladin","robi@gmail.com","0155522811","11151","Khander","bogra","Rajshahi","1200","Bangladesh","","","1","2021-01-16 19:22:53","2021-01-19 23:41:40");
INSERT INTO customers VALUES("34","1","35","sunny","None","sunny@gmail.com","0155522811","111510","Khander","bogra","Rajshahi","1200","Bangladesh","","","1","2021-01-17 17:22:11","2021-01-19 23:10:09");
INSERT INTO customers VALUES("35","1","","Nasir","nope","nasir@gmail.com","01726353787","","gabtali","bogra","Rajshahi","1225","Bangladesh","","","1","2021-01-18 18:02:56","2021-01-18 18:02:56");
INSERT INTO customers VALUES("36","1","","sajid","no","sajid@gmail","53454656","","rahman","bogra","raj","45346","ban","","","1","2021-01-22 20:13:25","2021-01-22 20:13:25");
INSERT INTO customers VALUES("37","1","","Safi Ul Sahid","Acquaint Technologies","safiulsahid151289@gmail.com","01521100281","","mohanagar project","Dhaka","Dhaka","1000","Bangladesh","","","1","2021-01-25 18:55:42","2021-01-25 18:55:42");
INSERT INTO customers VALUES("38","1","","sohel Rana","emarat","sohel@gmail.com","01777225141","","Dharla","Manikganj","Dhaka","1340","Bangladesh","","","1","2021-01-29 23:42:28","2021-01-29 23:42:28");
INSERT INTO customers VALUES("39","1","62","Abul","nrc","abul111@gmail.com","123435576577","","paltan","dhaka","dhaka","1290","bangladesh","","","1","2021-01-30 18:57:22","2021-01-30 18:57:22");
INSERT INTO customers VALUES("40","1","63","ansar","al","ansar@gmail.com","098365434","1234","sariakandi","bogura","rajshahi","1345","Bangladesh","","","1","2021-01-30 19:09:40","2021-02-03 19:52:29");
INSERT INTO customers VALUES("41","1","64","mokbul","mkb","mkb@gmail.com","09876453","","singra","dhup","rangpur","1313","Ban","","","1","2021-02-02 20:37:07","2021-02-02 20:37:07");
INSERT INTO customers VALUES("42","1","65","rashed","rash","rashed@gmail.com","2134522","123","lahor","islamabad","lahor","9876","pak","","","1","2021-02-02 22:24:30","2021-02-02 22:27:38");
INSERT INTO customers VALUES("43","1","66","asad","as","asad@gmail.com","23124335","","gate","jhamur","khanci","678","lemur","","","1","2021-02-02 22:50:50","2021-02-02 22:50:50");
INSERT INTO customers VALUES("44","1","67","samsu","samsu company","samus@gmail.com","324563200","","rahman nagar","puran bogra","dinajpur","0000","bongo","","","1","2021-02-02 23:07:40","2021-02-03 00:17:33");
INSERT INTO customers VALUES("45","1","68","kamal","pasha","kamal@gmail.com","01521100281","","kasjimpur","tongi","dhaka","2345","ban","","","1","2021-02-03 19:53:51","2021-02-03 19:53:51");
INSERT INTO customers VALUES("46","1","69","Mobina Hasan","S N Travels & Tours Management System","samer@gmail.com","01686392899","","mirpur","Dhaka City","","","","","","1","2021-02-03 19:57:19","2021-02-03 19:57:19");
INSERT INTO customers VALUES("47","1","70","selim","salman","selim@gmail.com","019383763","","shakuntala","panchagar","dinajpur","7483","Peoples Republic Of Bangladesh","","","1","2021-02-03 22:27:30","2021-02-03 22:27:30");



CREATE TABLE `deliveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivered_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recieved_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO deliveries VALUES("1","dr-20180808-044431","1","1","kajir deuri chittagong bd","abul","dhiman","","Instrument 1","3","2018-08-08 06:44:55","2020-09-26 08:25:39");
INSERT INTO deliveries VALUES("2","dr-20181106-105936","88","1","mohammadpur dhaka","","","","","2","2018-11-05 23:59:43","2018-11-06 00:10:38");
INSERT INTO deliveries VALUES("3","dr-20181106-111321","79","1","mohammadpur dhaka","Harun","Amjad","","","3","2018-11-06 00:13:25","2020-09-26 09:22:11");
INSERT INTO deliveries VALUES("5","dr-20201202-094959","259","28","khulshi chittagong bd","safi","tariq","dr-20201202-094959.csv","demo notes","1","2020-12-01 22:51:09","2020-12-01 22:51:09");
INSERT INTO deliveries VALUES("6","dr-20210113-111015","265","28","mohammadpur dhaka","safi","tariq","","","1","2021-01-13 00:10:25","2021-01-13 00:10:25");
INSERT INTO deliveries VALUES("7","dr-20210113-111050","266","28","Jaleswaritrola Bogra Bangladesh","safi","tariq","","","1","2021-01-13 00:10:56","2021-01-13 00:10:56");



CREATE TABLE `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO departments VALUES("1","Sale","1","2018-12-27 00:16:47","2018-12-27 05:40:23");
INSERT INTO departments VALUES("2","xyz","1","2018-12-27 05:28:47","2018-12-27 05:28:47");
INSERT INTO departments VALUES("3","Information Technology (IT)","1","2020-12-02 17:29:36","2020-12-02 17:29:56");
INSERT INTO departments VALUES("4","Development Team","1","2020-12-29 23:09:32","2020-12-29 23:09:32");



CREATE TABLE `deposits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO deposits VALUES("1","90","1","1","first deposit","2018-08-25 18:48:23","2018-08-25 21:18:55");
INSERT INTO deposits VALUES("3","100","2","1","","2018-08-25 20:53:16","2018-08-26 17:42:39");
INSERT INTO deposits VALUES("4","50","1","1","","2018-09-04 18:56:19","2018-09-04 18:56:19");
INSERT INTO deposits VALUES("5","50","1","1","","2018-09-09 20:08:40","2018-09-09 20:08:40");



CREATE TABLE `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO employees VALUES("1","john","john@gmail.com","10001","2","12","johngmailcom.jpg","GEC","chittagong","Bangladesh","1","2018-12-29 19:48:37","2019-03-02 01:50:23");
INSERT INTO employees VALUES("3","tests","test@test.com","111","1","","","","","","1","2018-12-30 17:20:51","2019-01-02 19:03:54");
INSERT INTO employees VALUES("6","Safi Ul Sahid","safiulsahid151289@gmail.com","01521100281","4","","safiulsahid151289gmailcom.jpg","mohanagar project","Dhaka","Bangladesh","1","2020-12-29 23:10:20","2020-12-29 23:10:20");



CREATE TABLE `expense_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO expense_categories VALUES("1","16718342","washing","1","2018-08-15 20:32:48","2019-03-02 02:02:07");
INSERT INTO expense_categories VALUES("2","60128975","electric bill","1","2018-08-15 20:39:18","2018-08-15 20:39:18");
INSERT INTO expense_categories VALUES("3","83954970","test","0","2018-08-15 20:50:28","2018-08-15 20:51:40");
INSERT INTO expense_categories VALUES("4","1234","snacks","1","2018-08-31 22:40:04","2018-08-31 22:40:04");
INSERT INTO expense_categories VALUES("5","83694037","Transportation","1","2020-12-01 22:53:21","2020-12-01 22:53:21");
INSERT INTO expense_categories VALUES("6","01389287","Plate Bill","1","2022-04-27 09:53:00","2022-04-27 09:53:00");
INSERT INTO expense_categories VALUES("7","19335481","Stuff Expense","1","2022-05-24 06:43:25","2022-05-24 06:43:25");



CREATE TABLE `expenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL DEFAULT 1,
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO expenses VALUES("2","er-20180817-012254","1","1","1","1","","150","first expense...","2018-08-17 03:22:54","2018-08-17 03:44:13");
INSERT INTO expenses VALUES("3","er-20180817-014241","1","1","1","1","","125","second expense...","2018-08-17 03:42:41","2018-08-17 03:43:50");
INSERT INTO expenses VALUES("4","er-20181022-043609","2","1","1","1","","1000","","2018-10-22 06:36:09","2018-10-22 06:36:09");
INSERT INTO expenses VALUES("5","er-20181101-050207","2","1","1","1","","1000","","2018-10-31 19:02:07","2018-10-31 19:02:07");
INSERT INTO expenses VALUES("6","er-20181101-050231","2","1","1","1","","550","","2018-10-31 19:02:31","2018-10-31 19:02:31");
INSERT INTO expenses VALUES("7","er-20181105-091913","1","1","1","1","","2000","","2018-11-04 22:19:13","2018-11-04 22:19:13");
INSERT INTO expenses VALUES("8","er-20181105-091929","2","1","1","1","","1000","","2018-11-04 22:19:29","2018-11-04 22:19:29");
INSERT INTO expenses VALUES("9","er-20190101-063342","2","1","1","1","","100","","2018-12-31 19:33:42","2018-12-31 19:33:42");
INSERT INTO expenses VALUES("10","er-20190103-070018","2","1","1","9","","2000","","2019-01-02 20:00:18","2019-01-02 20:00:18");
INSERT INTO expenses VALUES("11","er-20190209-104656","2","1","1","1","","500","","2019-02-08 23:46:56","2019-02-08 23:46:56");
INSERT INTO expenses VALUES("12","er-20190209-104716","2","1","1","1","","400","","2019-02-08 23:47:16","2019-02-08 23:47:16");
INSERT INTO expenses VALUES("14","er-20190303-104142","2","1","1","1","","250","jjj","2019-03-02 23:41:42","2019-03-20 05:17:16");
INSERT INTO expenses VALUES("15","er-20190404-095645","2","1","1","1","","200","","2019-04-03 23:56:45","2019-04-03 23:56:45");
INSERT INTO expenses VALUES("16","er-20190528-103306","2","1","1","1","","560","","2019-05-28 00:33:06","2019-05-28 00:33:06");
INSERT INTO expenses VALUES("17","er-20190528-103325","2","1","1","1","","600","","2019-05-28 00:33:25","2019-05-28 00:33:25");
INSERT INTO expenses VALUES("19","er-20190613-101955","2","1","1","1","","800","","2019-06-13 00:19:55","2019-06-13 00:19:55");
INSERT INTO expenses VALUES("20","er-20191019-033149","2","1","1","1","","300","","2019-10-19 05:31:49","2019-10-19 05:31:49");
INSERT INTO expenses VALUES("21","er-20191222-023508","2","1","1","1","","550","","2019-12-22 03:35:08","2019-12-22 03:35:08");
INSERT INTO expenses VALUES("22","er-20200101-022304","2","1","1","1","","500","","2020-01-01 03:23:04","2020-01-01 03:23:04");
INSERT INTO expenses VALUES("23","er-20200204-105938","1","1","1","1","","400","","2020-02-04 11:59:38","2020-02-04 11:59:38");
INSERT INTO expenses VALUES("24","er-20200204-105957","1","1","1","1","","350","","2020-02-04 11:59:57","2020-02-04 11:59:57");
INSERT INTO expenses VALUES("25","er-20200406-075239","2","1","1","1","","750","","2020-04-06 09:52:39","2020-04-06 09:52:39");
INSERT INTO expenses VALUES("26","er-20200506-110112","2","1","1","1","","1260","","2020-05-06 13:01:12","2020-05-06 13:01:12");
INSERT INTO expenses VALUES("27","er-20200609-124344","2","1","1","1","","500","","2020-06-09 02:43:44","2020-06-09 02:43:44");
INSERT INTO expenses VALUES("28","er-20200609-124406","2","1","1","1","","1000","","2020-06-09 02:44:06","2020-06-09 02:44:06");
INSERT INTO expenses VALUES("29","er-20200703-064005","2","1","1","1","","630","","2020-07-03 08:40:05","2020-07-03 08:40:05");
INSERT INTO expenses VALUES("30","er-20200812-062947","1","1","1","1","","320","","2020-08-12 08:29:47","2020-08-12 08:29:47");
INSERT INTO expenses VALUES("31","er-20200812-063010","2","1","1","1","","730","","2020-08-12 08:30:10","2020-08-12 08:30:10");
INSERT INTO expenses VALUES("32","er-20201018-124438","2","1","1","9","2","100","","2020-10-18 02:44:38","2020-10-18 02:44:38");
INSERT INTO expenses VALUES("33","er-20201101-072257","1","1","1","1","4","50","","2020-10-31 21:22:57","2020-10-31 21:22:57");
INSERT INTO expenses VALUES("34","er-20201118-062500","4","1","1","1","3","200","","2020-11-17 19:25:00","2020-11-17 19:25:00");
INSERT INTO expenses VALUES("35","er-20201202-095431","5","1","1","28","5","6000","Sample Expense Sample Expense Sample Expense","2020-12-01 22:54:31","2020-12-01 22:54:31");
INSERT INTO expenses VALUES("36","er-20210209-092256","2","1","4","28","5","200","sample note","2021-02-08 22:22:56","2021-02-08 22:22:56");
INSERT INTO expenses VALUES("37","er-20220322-115724","1","1","6","1","3","500","test","2022-03-22 01:57:24","2022-03-22 01:57:24");
INSERT INTO expenses VALUES("38","er-20220322-115753","5","1","6","1","3","99999","test 1","2022-03-22 01:57:54","2022-03-22 01:58:08");
INSERT INTO expenses VALUES("39","er-20220427-095330","6","1","6","1","3","200","modina color graph","2022-04-27 09:53:30","2022-04-27 09:54:51");
INSERT INTO expenses VALUES("40","er-20220524-063413","2","1","6","1","3","5000","2nd floor","2022-05-24 06:34:13","2022-05-24 06:34:13");
INSERT INTO expenses VALUES("41","er-20220524-063434","2","1","6","1","3","500","3rd floor","2022-05-24 06:34:34","2022-05-24 06:34:34");
INSERT INTO expenses VALUES("42","er-20220623-112130","2","1","9","1","3","20000","na","2022-06-23 11:21:30","2022-06-23 11:21:30");



CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `general_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_format` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developed_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_format` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `currency_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO general_settings VALUES("1","HISAB-Accounts Automation System","G.A Bhaban, 3rd Floor, Purana Paltan, Dhaka 1000","+8801734222391","sales@acquaintbd.com","Hisab-Logo-300x94.png","2","own","d/m/Y","Acquaint Technologies","standard","1","default.css","2018-07-06 02:13:11","2022-03-23 05:44:51","prefix");



CREATE TABLE `gift_card_recharges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gift_card_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO gift_card_recharges VALUES("1","2","100","1","2018-08-24 19:08:29","2018-08-24 19:08:29");
INSERT INTO gift_card_recharges VALUES("2","1","200","1","2018-08-24 19:08:50","2018-08-24 19:08:50");
INSERT INTO gift_card_recharges VALUES("3","1","100","1","2018-09-04 19:50:41","2018-09-04 19:50:41");
INSERT INTO gift_card_recharges VALUES("4","1","50","1","2018-09-04 19:51:38","2018-09-04 19:51:38");
INSERT INTO gift_card_recharges VALUES("5","1","50","1","2018-09-04 19:53:36","2018-09-04 19:53:36");
INSERT INTO gift_card_recharges VALUES("6","2","50","1","2018-09-04 19:54:34","2018-09-04 19:54:34");
INSERT INTO gift_card_recharges VALUES("7","5","10","1","2018-09-29 20:19:48","2018-09-29 20:19:48");
INSERT INTO gift_card_recharges VALUES("8","5","10","1","2018-09-29 20:20:04","2018-09-29 20:20:04");
INSERT INTO gift_card_recharges VALUES("9","2","100","1","2018-10-06 23:13:05","2018-10-06 23:13:05");
INSERT INTO gift_card_recharges VALUES("10","1","200","1","2018-10-06 23:13:39","2018-10-06 23:13:39");
INSERT INTO gift_card_recharges VALUES("11","1","300","1","2018-10-22 20:22:49","2018-10-22 20:22:49");
INSERT INTO gift_card_recharges VALUES("12","8","50","28","2020-12-01 23:28:01","2020-12-01 23:28:01");



CREATE TABLE `gift_cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `expense` double NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO gift_cards VALUES("1","3571097513020486","1400","450","1","","2020-12-31","1","1","2018-08-17 21:57:40","2020-10-18 01:14:26");
INSERT INTO gift_cards VALUES("2","0452297501931931","370","100","2","","2020-12-31","1","1","2018-08-17 22:46:43","2019-11-10 07:56:28");
INSERT INTO gift_cards VALUES("3","123","13123","0","1","","2018-08-19","1","0","2018-08-18 18:38:21","2018-08-18 18:38:28");
INSERT INTO gift_cards VALUES("4","1862381252690499","100","0","","1","2018-10-04","1","0","2018-09-29 20:16:28","2018-09-29 20:17:21");
INSERT INTO gift_cards VALUES("5","2300813717254199","143","0","","1","2018-10-04","1","0","2018-09-29 20:18:49","2018-09-29 20:20:20");
INSERT INTO gift_cards VALUES("6","8327019475026421","1","0","1","","2018-10-07","1","0","2018-10-06 23:12:41","2018-10-06 23:12:55");
INSERT INTO gift_cards VALUES("7","2063379780590151","1","0","1","","2018-10-23","1","0","2018-10-22 20:23:22","2018-10-22 20:23:39");
INSERT INTO gift_cards VALUES("8","12345678","6050","0","","27","2020-12-02","28","1","2020-12-01 22:41:02","2020-12-01 23:28:01");



CREATE TABLE `holidays` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO holidays VALUES("12","28","2020-12-03","2020-12-05","Test Holiday","1","2020-12-02 17:45:38","2020-12-02 17:45:38");
INSERT INTO holidays VALUES("13","28","2020-12-30","2020-12-31","fever","1","2020-12-29 23:13:25","2020-12-29 23:13:25");



CREATE TABLE `hrm_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `checkin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO hrm_settings VALUES("1","10:00am","6:00pm","2019-01-01 21:20:08","2019-01-01 23:20:53");



CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO languages VALUES("1","en","2018-07-07 18:59:17","2019-12-24 12:34:20");



CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO migrations VALUES("1","2014_10_12_000000_create_users_table","1");
INSERT INTO migrations VALUES("2","2014_10_12_100000_create_password_resets_table","1");
INSERT INTO migrations VALUES("3","2018_02_17_060412_create_categories_table","1");
INSERT INTO migrations VALUES("4","2018_02_20_035727_create_brands_table","1");
INSERT INTO migrations VALUES("5","2018_02_25_100635_create_suppliers_table","1");
INSERT INTO migrations VALUES("6","2018_02_27_101619_create_warehouse_table","1");
INSERT INTO migrations VALUES("7","2018_03_03_040448_create_units_table","1");
INSERT INTO migrations VALUES("8","2018_03_04_041317_create_taxes_table","1");
INSERT INTO migrations VALUES("9","2018_03_10_061915_create_customer_groups_table","1");
INSERT INTO migrations VALUES("10","2018_03_10_090534_create_customers_table","1");
INSERT INTO migrations VALUES("11","2018_03_11_095547_create_billers_table","1");
INSERT INTO migrations VALUES("12","2018_04_05_054401_create_products_table","1");
INSERT INTO migrations VALUES("13","2018_04_06_133606_create_purchases_table","1");
INSERT INTO migrations VALUES("14","2018_04_06_154600_create_product_purchases_table","1");
INSERT INTO migrations VALUES("15","2018_04_06_154915_create_product_warhouse_table","1");
INSERT INTO migrations VALUES("16","2018_04_10_085927_create_sales_table","1");
INSERT INTO migrations VALUES("17","2018_04_10_090133_create_product_sales_table","1");
INSERT INTO migrations VALUES("18","2018_04_10_090254_create_payments_table","1");
INSERT INTO migrations VALUES("19","2018_04_10_090341_create_payment_with_cheque_table","1");
INSERT INTO migrations VALUES("20","2018_04_10_090509_create_payment_with_credit_card_table","1");
INSERT INTO migrations VALUES("21","2018_04_13_121436_create_quotation_table","1");
INSERT INTO migrations VALUES("22","2018_04_13_122324_create_product_quotation_table","1");
INSERT INTO migrations VALUES("23","2018_04_14_121802_create_transfers_table","1");
INSERT INTO migrations VALUES("24","2018_04_14_121913_create_product_transfer_table","1");
INSERT INTO migrations VALUES("25","2018_05_13_082847_add_payment_id_and_change_sale_id_to_payments_table","2");
INSERT INTO migrations VALUES("26","2018_05_13_090906_change_customer_id_to_payment_with_credit_card_table","3");
INSERT INTO migrations VALUES("27","2018_05_20_054532_create_adjustments_table","4");
INSERT INTO migrations VALUES("28","2018_05_20_054859_create_product_adjustments_table","4");
INSERT INTO migrations VALUES("29","2018_05_21_163419_create_returns_table","5");
INSERT INTO migrations VALUES("30","2018_05_21_163443_create_product_returns_table","5");
INSERT INTO migrations VALUES("31","2018_06_02_050905_create_roles_table","6");
INSERT INTO migrations VALUES("32","2018_06_02_073430_add_columns_to_users_table","7");
INSERT INTO migrations VALUES("33","2018_06_03_053738_create_permission_tables","8");
INSERT INTO migrations VALUES("36","2018_06_21_063736_create_pos_setting_table","9");
INSERT INTO migrations VALUES("37","2018_06_21_094155_add_user_id_to_sales_table","10");
INSERT INTO migrations VALUES("38","2018_06_21_101529_add_user_id_to_purchases_table","11");
INSERT INTO migrations VALUES("39","2018_06_21_103512_add_user_id_to_transfers_table","12");
INSERT INTO migrations VALUES("40","2018_06_23_061058_add_user_id_to_quotations_table","13");
INSERT INTO migrations VALUES("41","2018_06_23_082427_add_is_deleted_to_users_table","14");
INSERT INTO migrations VALUES("42","2018_06_25_043308_change_email_to_users_table","15");
INSERT INTO migrations VALUES("43","2018_07_06_115449_create_general_settings_table","16");
INSERT INTO migrations VALUES("44","2018_07_08_043944_create_languages_table","17");
INSERT INTO migrations VALUES("45","2018_07_11_102144_add_user_id_to_returns_table","18");
INSERT INTO migrations VALUES("46","2018_07_11_102334_add_user_id_to_payments_table","18");
INSERT INTO migrations VALUES("47","2018_07_22_130541_add_digital_to_products_table","19");
INSERT INTO migrations VALUES("49","2018_07_24_154250_create_deliveries_table","20");
INSERT INTO migrations VALUES("50","2018_08_16_053336_create_expense_categories_table","21");
INSERT INTO migrations VALUES("51","2018_08_17_115415_create_expenses_table","22");
INSERT INTO migrations VALUES("55","2018_08_18_050418_create_gift_cards_table","23");
INSERT INTO migrations VALUES("56","2018_08_19_063119_create_payment_with_gift_card_table","24");
INSERT INTO migrations VALUES("57","2018_08_25_042333_create_gift_card_recharges_table","25");
INSERT INTO migrations VALUES("58","2018_08_25_101354_add_deposit_expense_to_customers_table","26");
INSERT INTO migrations VALUES("59","2018_08_26_043801_create_deposits_table","27");
INSERT INTO migrations VALUES("60","2018_09_02_044042_add_keybord_active_to_pos_setting_table","28");
INSERT INTO migrations VALUES("61","2018_09_09_092713_create_payment_with_paypal_table","29");
INSERT INTO migrations VALUES("62","2018_09_10_051254_add_currency_to_general_settings_table","30");
INSERT INTO migrations VALUES("63","2018_10_22_084118_add_biller_and_store_id_to_users_table","31");
INSERT INTO migrations VALUES("65","2018_10_26_034927_create_coupons_table","32");
INSERT INTO migrations VALUES("66","2018_10_27_090857_add_coupon_to_sales_table","33");
INSERT INTO migrations VALUES("67","2018_11_07_070155_add_currency_position_to_general_settings_table","34");
INSERT INTO migrations VALUES("68","2018_11_19_094650_add_combo_to_products_table","35");
INSERT INTO migrations VALUES("69","2018_12_09_043712_create_accounts_table","36");
INSERT INTO migrations VALUES("70","2018_12_17_112253_add_is_default_to_accounts_table","37");
INSERT INTO migrations VALUES("71","2018_12_19_103941_add_account_id_to_payments_table","38");
INSERT INTO migrations VALUES("72","2018_12_20_065900_add_account_id_to_expenses_table","39");
INSERT INTO migrations VALUES("73","2018_12_20_082753_add_account_id_to_returns_table","40");
INSERT INTO migrations VALUES("74","2018_12_26_064330_create_return_purchases_table","41");
INSERT INTO migrations VALUES("75","2018_12_26_144210_create_purchase_product_return_table","42");
INSERT INTO migrations VALUES("76","2018_12_26_144708_create_purchase_product_return_table","43");
INSERT INTO migrations VALUES("77","2018_12_27_110018_create_departments_table","44");
INSERT INTO migrations VALUES("78","2018_12_30_054844_create_employees_table","45");
INSERT INTO migrations VALUES("79","2018_12_31_125210_create_payrolls_table","46");
INSERT INTO migrations VALUES("80","2018_12_31_150446_add_department_id_to_employees_table","47");
INSERT INTO migrations VALUES("81","2019_01_01_062708_add_user_id_to_expenses_table","48");
INSERT INTO migrations VALUES("82","2019_01_02_075644_create_hrm_settings_table","49");
INSERT INTO migrations VALUES("83","2019_01_02_090334_create_attendances_table","50");
INSERT INTO migrations VALUES("84","2019_01_27_160956_add_three_columns_to_general_settings_table","51");
INSERT INTO migrations VALUES("85","2019_02_15_183303_create_stock_counts_table","52");
INSERT INTO migrations VALUES("86","2019_02_17_101604_add_is_adjusted_to_stock_counts_table","53");
INSERT INTO migrations VALUES("87","2019_04_13_101707_add_tax_no_to_customers_table","54");
INSERT INTO migrations VALUES("89","2019_10_14_111455_create_holidays_table","55");
INSERT INTO migrations VALUES("90","2019_11_13_145619_add_is_variant_to_products_table","56");
INSERT INTO migrations VALUES("91","2019_11_13_150206_create_product_variants_table","57");
INSERT INTO migrations VALUES("92","2019_11_13_153828_create_variants_table","57");
INSERT INTO migrations VALUES("93","2019_11_25_134041_add_qty_to_product_variants_table","58");
INSERT INTO migrations VALUES("94","2019_11_25_134922_add_variant_id_to_product_purchases_table","58");
INSERT INTO migrations VALUES("95","2019_11_25_145341_add_variant_id_to_product_warehouse_table","58");
INSERT INTO migrations VALUES("96","2019_11_29_182201_add_variant_id_to_product_sales_table","59");
INSERT INTO migrations VALUES("97","2019_12_04_121311_add_variant_id_to_product_quotation_table","60");
INSERT INTO migrations VALUES("98","2019_12_05_123802_add_variant_id_to_product_transfer_table","61");
INSERT INTO migrations VALUES("100","2019_12_08_114954_add_variant_id_to_product_returns_table","62");
INSERT INTO migrations VALUES("101","2019_12_08_203146_add_variant_id_to_purchase_product_return_table","63");
INSERT INTO migrations VALUES("102","2020_02_28_103340_create_money_transfers_table","64");
INSERT INTO migrations VALUES("103","2020_07_01_193151_add_image_to_categories_table","65");
INSERT INTO migrations VALUES("105","2020_09_26_130426_add_user_id_to_deliveries_table","66");
INSERT INTO migrations VALUES("107","2020_10_11_125457_create_cash_registers_table","67");
INSERT INTO migrations VALUES("108","2020_10_13_155019_add_cash_register_id_to_sales_table","68");
INSERT INTO migrations VALUES("109","2020_10_13_172624_add_cash_register_id_to_returns_table","69");
INSERT INTO migrations VALUES("110","2020_10_17_212338_add_cash_register_id_to_payments_table","70");
INSERT INTO migrations VALUES("111","2020_10_18_124200_add_cash_register_id_to_expenses_table","71");
INSERT INTO migrations VALUES("112","2020_10_21_121632_add_developed_by_to_general_settings_table","72");
INSERT INTO migrations VALUES("113","2019_08_19_000000_create_failed_jobs_table","73");
INSERT INTO migrations VALUES("114","2020_10_30_135557_create_notifications_table","73");
INSERT INTO migrations VALUES("115","2020_11_01_044954_create_currencies_table","74");
INSERT INTO migrations VALUES("116","2020_11_01_140736_add_price_to_product_warehouse_table","75");
INSERT INTO migrations VALUES("117","2020_11_02_050633_add_is_diff_price_to_products_table","76");
INSERT INTO migrations VALUES("118","2020_11_09_055222_add_user_id_to_customers_table","77");
INSERT INTO migrations VALUES("119","2020_11_17_054806_add_invoice_format_to_general_settings_table","78");



CREATE TABLE `money_transfers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_account_id` int(11) NOT NULL,
  `to_account_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO money_transfers VALUES("2","mtr-20200228-071852","1","3","100","2020-02-28 08:18:52","2020-02-28 08:18:52");
INSERT INTO money_transfers VALUES("3","mtr-20201202-112344","1","4","200","2020-12-02 00:23:44","2020-12-02 00:23:44");
INSERT INTO money_transfers VALUES("4","mtr-20201230-100714","5","4","500","2020-12-29 23:07:14","2020-12-29 23:07:14");
INSERT INTO money_transfers VALUES("5","mtr-20210202-045830","3","4","400","2021-02-01 17:58:30","2021-02-01 17:58:30");
INSERT INTO money_transfers VALUES("6","mtr-20210202-045946","3","4","100","2021-02-01 17:59:46","2021-02-01 17:59:46");
INSERT INTO money_transfers VALUES("7","mtr-20210202-105134","6","5","1000","2021-02-01 23:51:34","2021-02-01 23:51:34");
INSERT INTO money_transfers VALUES("8","mtr-20210202-105302","1","6","3000","2021-02-01 23:53:02","2021-02-01 23:53:02");
INSERT INTO money_transfers VALUES("9","mtr-20220623-112631","9","8","2000","2022-06-23 11:26:31","2022-06-23 11:26:31");



CREATE TABLE `newsletters` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO newsletters VALUES("1","sales@acquaintbd.com","2021-01-26 18:26:22","2021-01-26 18:26:22");
INSERT INTO newsletters VALUES("2","ashiqur@gmail.com","2021-01-26 18:28:29","2021-01-26 18:28:29");
INSERT INTO newsletters VALUES("3","sahid@gmail.com","2021-01-26 18:29:34","2021-01-26 18:29:34");
INSERT INTO newsletters VALUES("4","safiulsahid151289@gmail.com","2021-01-26 18:34:37","2021-01-26 18:34:37");



CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO notifications VALUES("249beded-5431-40a3-ba1e-d255ffb047a3","App\Notifications\SendNotification","App\User","9","{"message":"Please delete all pending purchase."}","2020-10-31 21:33:32","2020-10-31 21:33:07","2020-10-31 21:33:32");
INSERT INTO notifications VALUES("72210ec6-aed4-4699-afdf-074458de3ac5","App\Notifications\SendNotification","App\User","21","{"message":"khllhkjl"}","","2022-03-21 01:56:15","2022-03-21 01:56:15");
INSERT INTO notifications VALUES("e38e91a3-d2f5-4c82-b45d-09ece2af6cd8","App\Notifications\SendNotification","App\User","9","{"message":"khllhkjl"}","","2022-03-21 01:55:20","2022-03-21 01:55:20");



CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `checkout_id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO orders VALUES("1","263","30","1","100","::1","2021-01-07 00:22:55","2021-01-07 00:22:55");



CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `payment_with_cheque` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `cheque_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payment_with_cheque VALUES("1","19","23425235235","2018-06-30 23:09:48","2018-06-30 23:09:48");
INSERT INTO payment_with_cheque VALUES("2","24","3123123123","2018-07-09 21:21:32","2018-07-09 21:21:32");
INSERT INTO payment_with_cheque VALUES("3","31","767867678","2018-08-08 06:36:22","2018-08-08 06:36:22");
INSERT INTO payment_with_cheque VALUES("4","34","3123412","2018-08-08 19:55:54","2018-08-08 19:55:54");
INSERT INTO payment_with_cheque VALUES("5","35","7765","2018-08-08 20:32:14","2018-08-08 20:32:14");
INSERT INTO payment_with_cheque VALUES("6","44","3124142412","2018-08-29 23:07:18","2018-08-29 23:07:18");
INSERT INTO payment_with_cheque VALUES("7","51","6576764646","2018-09-03 00:08:21","2018-09-03 00:08:21");
INSERT INTO payment_with_cheque VALUES("8","53","111111111","2018-09-03 00:15:24","2018-09-03 00:15:24");
INSERT INTO payment_with_cheque VALUES("9","79","1111","2018-10-05 20:51:55","2018-10-05 20:51:55");
INSERT INTO payment_with_cheque VALUES("10","147","221133","2018-12-03 19:58:35","2018-12-03 19:58:35");
INSERT INTO payment_with_cheque VALUES("11","175","1111","2019-02-07 01:38:23","2019-02-07 01:38:23");
INSERT INTO payment_with_cheque VALUES("12","176","1111","2019-02-07 01:54:59","2019-02-07 01:54:59");
INSERT INTO payment_with_cheque VALUES("13","178","420","2019-02-07 02:07:04","2019-02-07 02:07:04");
INSERT INTO payment_with_cheque VALUES("14","216","12344321","2019-11-10 23:39:11","2019-11-10 23:39:11");
INSERT INTO payment_with_cheque VALUES("15","295","111122222","2020-10-18 01:17:24","2020-10-18 01:17:24");
INSERT INTO payment_with_cheque VALUES("16","323","12345678","2020-12-01 19:42:40","2020-12-01 19:42:40");
INSERT INTO payment_with_cheque VALUES("17","351","5656565656","2022-03-21 21:07:57","2022-03-21 21:07:57");
INSERT INTO payment_with_cheque VALUES("18","352","546546465456","2022-05-24 06:20:16","2022-05-24 06:20:16");



CREATE TABLE `payment_with_credit_card` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payment_with_credit_card VALUES("4","294","1","cus_IDw8z9yJZn4qH3","ch_1HdUGJKwOmA8HLXePiqphlky","2020-10-18 01:16:55","2020-10-18 01:16:55");



CREATE TABLE `payment_with_gift_card` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `gift_card_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payment_with_gift_card VALUES("1","36","2","2018-08-24 17:48:36","2018-08-24 20:57:35");
INSERT INTO payment_with_gift_card VALUES("4","39","1","2018-08-24 22:36:34","2018-08-24 22:36:34");
INSERT INTO payment_with_gift_card VALUES("6","50","1","2018-09-02 19:01:38","2018-09-02 19:01:38");
INSERT INTO payment_with_gift_card VALUES("8","293","1","2020-10-18 01:14:26","2020-10-18 01:14:26");



CREATE TABLE `payment_with_paypal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `account_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `change` double NOT NULL,
  `paying_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=355 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payments VALUES("33","spr-20180809-055453","1","","2","","1","1000","0","Cash","","2018-08-08 19:54:53","2018-08-08 19:54:53");
INSERT INTO payments VALUES("34","spr-20180809-055553","1","","2","","1","1200","0","Cheque","","2018-08-08 19:55:53","2018-08-08 19:56:36");
INSERT INTO payments VALUES("35","spr-20180809-063214","1","","3","","1","897","0","Cheque","","2018-08-08 20:32:14","2018-08-08 20:32:14");
INSERT INTO payments VALUES("36","spr-20180825-034836","1","","4","","1","100","0","Gift Card","100 bucks paid...","2018-08-24 17:48:36","2018-08-24 20:57:35");
INSERT INTO payments VALUES("39","spr-20180825-083634","1","","4","","1","200","0","Gift Card","","2018-08-24 22:36:34","2018-08-24 22:36:34");
INSERT INTO payments VALUES("41","spr-20180826-094836","1","","6","","1","20","0","Deposit","20 bucks paid","2018-08-25 23:48:36","2018-08-26 17:42:13");
INSERT INTO payments VALUES("42","spr-20180827-073545","1","","7","","1","880","0","Cash","","2018-08-26 21:35:45","2018-08-26 21:35:45");
INSERT INTO payments VALUES("43","ppr-20180830-071637","1","13","","","1","100","0","Cash","100 bucks paid...","2018-08-29 21:16:37","2018-08-29 21:16:37");
INSERT INTO payments VALUES("44","ppr-20180830-090718","1","13","","","1","200","0","Cheque","","2018-08-29 23:07:18","2018-08-29 23:07:18");
INSERT INTO payments VALUES("46","spr-20180902-053954","1","","8","","1","3529.8","0","Cash","fully paid","2018-09-01 19:39:54","2018-09-01 19:39:54");
INSERT INTO payments VALUES("49","spr-20180903-033314","1","","9","","1","20","0","Deposit","fully paid","2018-09-02 17:33:14","2018-09-02 17:33:14");
INSERT INTO payments VALUES("50","spr-20180903-050138","1","","10","","1","200","0","Gift Card","50 bucks due...","2018-09-02 19:01:38","2018-09-09 17:40:28");
INSERT INTO payments VALUES("51","spr-20180903-100821","1","","11","","1","5500","0","Cheque","","2018-09-03 00:08:21","2018-09-03 00:08:21");
INSERT INTO payments VALUES("53","ppr-20180903-101524","1","16","","","1","1750","0","Cheque","","2018-09-03 00:15:24","2018-10-05 21:09:20");
INSERT INTO payments VALUES("78","spr-20180926-092105","1","","31","","1","560","0","Cash","","2018-09-25 23:21:05","2018-09-25 23:21:05");
INSERT INTO payments VALUES("79","spr-20181006-065017","1","","30","","1","100","0","Cheque","","2018-10-05 20:50:17","2018-10-05 20:51:55");
INSERT INTO payments VALUES("80","spr-20181006-065222","1","","30","","1","20","0","Cash","","2018-10-05 20:52:22","2018-10-05 20:52:22");
INSERT INTO payments VALUES("82","ppr-20181006-070935","1","16","","","1","1600","0","Cash","","2018-10-05 21:09:35","2018-10-05 21:09:35");
INSERT INTO payments VALUES("83","spr-20181010-041636","1","","41","","1","461","0","Cash","","2018-10-09 18:16:36","2018-10-09 18:16:36");
INSERT INTO payments VALUES("84","spr-20181010-053456","1","","42","","1","440","0","Cash","","2018-10-09 19:34:56","2018-10-09 19:34:56");
INSERT INTO payments VALUES("91","spr-20181021-065338","1","","55","","1","250","0","Cash","","2018-10-20 20:53:38","2018-10-20 20:53:38");
INSERT INTO payments VALUES("92","spr-20181021-082618","1","","57","","1","575.2","0","Cash","","2018-10-20 22:26:18","2018-10-20 22:26:18");
INSERT INTO payments VALUES("93","spr-20181022-032730","1","","58","","1","1220","0","Cash","","2018-10-22 05:27:30","2018-10-22 05:27:30");
INSERT INTO payments VALUES("104","spr-20181023-071548","11","","73","","1","5500","0","Cash","","2018-10-22 21:15:48","2018-10-22 21:15:48");
INSERT INTO payments VALUES("105","spr-20181023-071648","1","","74","","1","2320","0","Cash","","2018-10-22 21:16:48","2018-10-22 21:16:48");
INSERT INTO payments VALUES("126","spr-20181101-050033","1","","75","","1","7678","0","Cash","","2018-10-31 19:00:33","2018-10-31 19:00:33");
INSERT INTO payments VALUES("127","spr-20181101-050130","1","","76","","1","1424","0","Cash","","2018-10-31 19:01:30","2018-11-07 22:44:51");
INSERT INTO payments VALUES("129","spr-20181105-091523","1","","79","","1","14454","0","Cash","","2018-11-04 22:15:23","2018-11-04 22:15:23");
INSERT INTO payments VALUES("130","spr-20181105-092002","1","","80","","1","2500","0","Cash","","2018-11-04 22:20:02","2018-11-04 22:20:02");
INSERT INTO payments VALUES("131","ppr-20181105-092128","1","24","","","1","15950","0","Cash","","2018-11-04 22:21:28","2018-11-04 22:21:28");
INSERT INTO payments VALUES("137","spr-20181105-095952","1","","86","","1","1100","0","Cash","","2018-11-04 22:59:52","2018-11-04 22:59:52");
INSERT INTO payments VALUES("138","spr-20181105-100310","1","","88","","1","1100","0","Cash","","2018-11-04 23:03:10","2018-11-04 23:03:10");
INSERT INTO payments VALUES("139","spr-20181126-020534","1","","94","","1","120","0","Cash","","2018-11-26 03:05:34","2018-11-26 03:05:34");
INSERT INTO payments VALUES("140","spr-20181128-071515","1","","96","","1","132","0","Cash","","2018-11-27 20:15:15","2018-11-27 20:15:15");
INSERT INTO payments VALUES("141","spr-20181201-060524","1","","97","","1","200","300","Cash","","2018-11-30 19:05:24","2018-12-03 19:21:05");
INSERT INTO payments VALUES("148","ppr-20181204-065932","1","23","","","1","500","500","Cash","","2018-12-03 19:59:32","2018-12-03 19:59:44");
INSERT INTO payments VALUES("149","ppr-20181205-053443","1","25","","","1","4450","550","Cash","","2018-12-04 18:34:43","2018-12-04 18:34:43");
INSERT INTO payments VALUES("150","spr-20181205-053608","1","","98","","1","800","200","Cash","","2018-12-04 18:36:08","2018-12-04 18:36:08");
INSERT INTO payments VALUES("151","spr-20181205-053724","1","","99","","1","800","0","Cash","","2018-12-04 18:37:24","2018-12-04 18:37:24");
INSERT INTO payments VALUES("152","spr-20181208-062032","1","","101","","1","100","400","Cash","","2018-12-07 19:20:32","2018-12-10 22:19:39");
INSERT INTO payments VALUES("157","ppr-20181220-063439","1","27","","","1","10","0","Cash","","2018-12-19 19:34:39","2018-12-19 19:35:01");
INSERT INTO payments VALUES("159","spr-20181224-045832","1","","103","","1","120","0","Cash","","2018-12-23 17:58:32","2018-12-23 17:58:32");
INSERT INTO payments VALUES("160","spr-20190101-054544","1","","105","","1","21","0","Cash","","2018-12-31 18:45:44","2018-12-31 18:45:44");
INSERT INTO payments VALUES("161","spr-20190101-091040","1","","106","","1","860","0","Cash","","2018-12-31 22:10:40","2018-12-31 22:10:40");
INSERT INTO payments VALUES("162","spr-20190103-065627","1","","107","","1","5040","960","Cash","","2019-01-02 19:56:27","2019-01-02 19:56:27");
INSERT INTO payments VALUES("163","spr-20190120-035824","1","","108","","1","120","0","Cash","","2019-01-20 04:58:24","2019-01-20 04:58:24");
INSERT INTO payments VALUES("164","ppr-20190129-100302","9","36","","","1","650","350","Cash","","2019-01-28 23:03:02","2019-01-28 23:03:02");
INSERT INTO payments VALUES("165","ppr-20190129-100324","9","34","","","1","2860","140","Cash","","2019-01-28 23:03:24","2019-01-28 23:03:24");
INSERT INTO payments VALUES("166","spr-20190129-101451","9","","109","","1","540","460","Cash","","2019-01-28 23:14:51","2019-01-28 23:14:51");
INSERT INTO payments VALUES("167","spr-20190129-115048","9","","110","","1","1700","300","Cash","","2019-01-29 00:50:48","2019-01-29 00:50:48");
INSERT INTO payments VALUES("168","spr-20190131-110839","9","","111","","1","271","0","Cash","","2019-01-31 00:08:39","2019-01-31 00:08:39");
INSERT INTO payments VALUES("169","spr-20190202-104045","1","","112","","1","440","0","Cash","","2019-02-01 23:40:45","2019-02-01 23:40:45");
INSERT INTO payments VALUES("170","spr-20190202-114117","1","","113","","1","350","0","Cash","","2019-02-02 00:41:17","2019-02-02 00:41:17");
INSERT INTO payments VALUES("171","spr-20190205-030454","1","","114","","1","440","0","Cash","","2019-02-05 04:04:54","2019-02-05 04:04:54");
INSERT INTO payments VALUES("176","ppr-20190207-125418","1","35","","","1","50","50","Cash","","2019-02-07 01:54:18","2019-02-07 02:05:23");
INSERT INTO payments VALUES("178","ppr-20190207-010640","1","35","","","1","50","50","Cheque","","2019-02-07 02:06:40","2019-02-07 02:07:04");
INSERT INTO payments VALUES("179","spr-20190207-010915","1","","120","","1","50","50","Cash","","2019-02-07 02:09:15","2019-02-07 02:09:15");
INSERT INTO payments VALUES("180","spr-20190209-104816","1","","121","","1","1272","728","Cash","","2019-02-08 23:48:16","2019-02-08 23:48:16");
INSERT INTO payments VALUES("181","ppr-20190209-104940","1","38","","","1","1660","0","Cash","","2019-02-08 23:49:40","2019-02-08 23:49:40");
INSERT INTO payments VALUES("182","ppr-20190209-104959","1","39","","","1","973.5","0","Cash","","2019-02-08 23:49:59","2019-02-08 23:49:59");
INSERT INTO payments VALUES("183","spr-20190219-023214","1","","123","","1","440","0","Cash","","2019-02-19 03:32:14","2019-02-19 03:32:14");
INSERT INTO payments VALUES("189","spr-20190303-104010","1","","127","","1","2500","0","Cash","","2019-03-02 23:40:10","2019-03-02 23:40:10");
INSERT INTO payments VALUES("190","ppr-20190303-104046","1","40","","","1","100","0","Cash","","2019-03-02 23:40:46","2019-03-02 23:40:46");
INSERT INTO payments VALUES("191","ppr-20190303-104222","1","37","","","1","4000","0","Cash","","2019-03-02 23:42:22","2019-03-02 23:42:22");
INSERT INTO payments VALUES("192","ppr-20190303-104414","1","41","","","1","1000","0","Cash","","2019-03-02 23:44:14","2019-03-02 23:44:14");
INSERT INTO payments VALUES("193","spr-20190404-095555","1","","128","","1","560","0","Cash","","2019-04-03 23:55:55","2019-04-03 23:55:55");
INSERT INTO payments VALUES("194","ppr-20190404-095910","1","42","","","1","300","200","Cash","","2019-04-03 23:59:10","2019-04-13 06:52:38");
INSERT INTO payments VALUES("195","spr-20190404-095937","1","","129","","1","120","0","Cash","","2019-04-03 23:59:37","2019-04-03 23:59:37");
INSERT INTO payments VALUES("196","spr-20190421-122124","1","","130","","1","586","0","Cash","","2019-04-21 02:21:24","2019-04-21 02:21:24");
INSERT INTO payments VALUES("197","spr-20190528-103229","1","","131","","1","2890","0","Cash","","2019-05-28 00:32:29","2019-05-28 00:32:29");
INSERT INTO payments VALUES("198","ppr-20190613-101351","1","37","","","1","2390","0","Cash","","2019-06-13 00:13:51","2019-06-13 00:13:51");
INSERT INTO payments VALUES("199","spr-20190613-101637","1","","132","","1","840","0","Cash","","2019-06-13 00:16:37","2019-06-13 00:16:37");
INSERT INTO payments VALUES("200","ppr-20190613-101713","1","43","","","1","1000","0","Cash","","2019-06-13 00:17:13","2019-06-13 00:17:13");
INSERT INTO payments VALUES("201","spr-20190613-101752","1","","133","","1","2700","0","Cash","","2019-06-13 00:17:52","2019-06-13 00:17:52");
INSERT INTO payments VALUES("202","ppr-20191019-032925","1","43","","","1","3290","710","Cash","","2019-10-19 05:29:25","2019-10-19 05:29:25");
INSERT INTO payments VALUES("203","spr-20191019-033028","1","","134","","1","2940","60","Cash","","2019-10-19 05:30:28","2019-10-19 05:30:28");
INSERT INTO payments VALUES("205","spr-20191103-114044","1","","139","","1","488","12","Cash","","2019-11-03 01:40:44","2019-11-03 01:40:44");
INSERT INTO payments VALUES("206","ppr-20191103-114222","1","46","","","1","200","0","Cash","","2019-11-03 01:42:22","2019-11-03 01:42:22");
INSERT INTO payments VALUES("211","spr-20191109-074131","1","","144","","1","1220","0","Cash","","2019-11-09 08:41:31","2019-11-09 08:41:31");
INSERT INTO payments VALUES("216","ppr-20191111-103911","1","49","","","1","5000","0","Cheque","","2019-11-10 23:39:11","2019-11-10 23:39:11");
INSERT INTO payments VALUES("217","spr-20191111-104008","1","","147","","1","2220","780","Cash","","2019-11-10 23:40:08","2019-11-10 23:40:08");
INSERT INTO payments VALUES("222","spr-20191203-115128","1","","163","","1","3","0","Cash","","2019-12-03 00:51:28","2019-12-03 00:51:28");
INSERT INTO payments VALUES("227","ppr-20191204-111124","1","57","","","1","220","280","Cash","","2019-12-04 12:11:24","2019-12-04 12:11:24");
INSERT INTO payments VALUES("228","spr-20191205-092712","1","","173","","1","621","0","Cash","","2019-12-04 22:27:12","2019-12-04 22:27:12");
INSERT INTO payments VALUES("239","spr-20191222-104058","1","","187","","1","288","212","Cash","","2019-12-21 23:40:58","2019-12-21 23:40:58");
INSERT INTO payments VALUES("241","spr-20191223-125946","1","","190","","1","1100","400","Cash","","2019-12-23 01:59:46","2019-12-23 01:59:46");
INSERT INTO payments VALUES("244","ppr-20200101-010750","1","61","","","1","60","0","Cash","","2020-01-01 02:07:50","2020-01-01 02:07:50");
INSERT INTO payments VALUES("246","spr-20200101-022028","1","","193","","1","1100","400","Cash","","2020-01-01 03:20:28","2020-01-01 03:20:28");
INSERT INTO payments VALUES("247","ppr-20200101-022131","1","59","","","1","6","0","Cash","","2020-01-01 03:21:31","2020-01-01 03:21:31");
INSERT INTO payments VALUES("248","ppr-20200101-022137","1","58","","","1","4","0","Cash","","2020-01-01 03:21:37","2020-01-01 03:21:37");
INSERT INTO payments VALUES("249","ppr-20200101-022144","1","56","","","1","2","0","Cash","","2020-01-01 03:21:44","2020-01-01 03:21:44");
INSERT INTO payments VALUES("250","ppr-20200101-022152","1","55","","","1","4","0","Cash","","2020-01-01 03:21:52","2020-01-01 03:21:52");
INSERT INTO payments VALUES("251","ppr-20200101-022225","1","49","","","1","2000","0","Cash","","2020-01-01 03:22:25","2020-01-01 03:22:25");
INSERT INTO payments VALUES("252","spr-20200102-043947","1","","194","","1","892","108","Cash","","2020-01-02 05:39:47","2020-01-02 05:39:47");
INSERT INTO payments VALUES("258","spr-20200203-035256","1","","201","","1","120","880","Cash","","2020-02-03 04:52:56","2020-02-03 04:52:56");
INSERT INTO payments VALUES("259","spr-20200204-105853","1","","202","","1","1400","100","Cash","","2020-02-04 11:58:53","2020-02-04 11:58:53");
INSERT INTO payments VALUES("260","ppr-20200204-110050","1","67","","","1","300","0","Cash","","2020-02-04 12:00:50","2020-02-04 12:00:50");
INSERT INTO payments VALUES("261","spr-20200302-115414","1","","203","","1","350","150","Cash","","2020-03-02 00:54:14","2020-03-02 00:54:14");
INSERT INTO payments VALUES("262","spr-20200302-115741","1","","204","","1","40","10","Cash","","2020-03-02 00:57:41","2020-03-02 00:57:41");
INSERT INTO payments VALUES("263","ppr-20200302-115811","1","70","","","1","50","0","Cash","","2020-03-02 00:58:11","2020-03-02 00:58:11");
INSERT INTO payments VALUES("264","ppr-20200302-115820","1","69","","","1","50","0","Cash","","2020-03-02 00:58:20","2020-03-02 00:58:20");
INSERT INTO payments VALUES("265","spr-20200311-044642","1","","205","","1","352","148","Cash","","2020-03-11 06:46:42","2020-03-11 06:46:42");
INSERT INTO payments VALUES("266","ppr-20200406-073823","1","71","","","1","2000","1000","Cash","First Payment","2020-04-06 09:38:23","2020-04-06 09:38:55");
INSERT INTO payments VALUES("267","spr-20200406-074024","1","","207","","1","500","500","Cash","","2020-04-06 09:40:24","2020-04-06 09:40:24");
INSERT INTO payments VALUES("268","spr-20200406-074201","1","","207","","1","144","56","Cash","","2020-04-06 09:42:01","2020-04-06 09:42:01");
INSERT INTO payments VALUES("269","spr-20200506-105950","1","","208","","1","1540","460","Cash","","2020-05-06 12:59:50","2020-05-06 12:59:50");
INSERT INTO payments VALUES("270","spr-20200609-124248","1","","209","","1","1220","780","Cash","","2020-06-09 02:42:48","2020-06-09 02:42:48");
INSERT INTO payments VALUES("273","spr-20200703-063914","1","","212","","1","2585","415","Cash","","2020-07-03 08:39:14","2020-07-03 08:39:14");
INSERT INTO payments VALUES("274","spr-20200712-095153","1","","213","","1","13","37","Cash","","2020-07-12 11:51:53","2020-07-12 11:51:53");
INSERT INTO payments VALUES("276","spr-20200727-083808","1","","217","","1","385","0","Cash","","2020-07-27 10:38:08","2020-07-27 10:38:08");
INSERT INTO payments VALUES("277","spr-20200727-084024","1","","218","","1","385","0","Cash","","2020-07-27 10:40:24","2020-07-27 10:40:24");
INSERT INTO payments VALUES("278","spr-20200727-084645","1","","219","","1","385","0","Cash","","2020-07-27 10:46:45","2020-07-27 10:46:45");
INSERT INTO payments VALUES("279","spr-20200812-062806","1","","220","","1","760","240","Cash","","2020-08-12 08:28:06","2020-08-12 08:28:06");
INSERT INTO payments VALUES("280","ppr-20200812-062853","1","62","","","1","1650","0","Cash","","2020-08-12 08:28:53","2020-08-12 08:28:53");
INSERT INTO payments VALUES("281","spr-20200812-063035","1","","221","","1","1100","0","Cash","","2020-08-12 08:30:35","2020-08-12 08:30:35");
INSERT INTO payments VALUES("282","spr-20200816-100426","1","","222","","1","23000","2000","Cash","","2020-08-16 12:04:26","2020-08-16 12:04:26");
INSERT INTO payments VALUES("283","spr-20200816-100523","1","","223","","1","300","200","Cash","","2020-08-16 12:05:23","2020-08-16 12:05:23");
INSERT INTO payments VALUES("284","spr-20200816-100632","1","","223","","1","100","0","Cash","","2020-08-16 12:06:32","2020-08-16 12:06:32");
INSERT INTO payments VALUES("285","spr-20200816-100735","1","","223","","1","40","0","Cash","","2020-08-16 12:07:35","2020-08-16 12:07:35");
INSERT INTO payments VALUES("290","spr-20201017-092854","9","","230","2","1","200","0","Cash","","2020-10-17 11:28:54","2020-10-18 00:48:54");
INSERT INTO payments VALUES("291","spr-20201018-105138","9","","230","2","1","50","0","Cash","","2020-10-18 00:51:38","2020-10-18 00:51:38");
INSERT INTO payments VALUES("292","spr-20201018-111333","9","","231","2","1","100","0","Cash","","2020-10-18 01:13:33","2020-10-18 01:13:33");
INSERT INTO payments VALUES("293","spr-20201018-111426","9","","231","2","1","50","0","Gift Card","","2020-10-18 01:14:26","2020-10-18 01:14:26");
INSERT INTO payments VALUES("294","spr-20201018-111651","9","","231","2","1","50","0","Credit Card","","2020-10-18 01:16:51","2020-10-18 01:16:51");
INSERT INTO payments VALUES("295","spr-20201018-111724","9","","231","2","1","50","0","Cheque","","2020-10-18 01:17:24","2020-10-18 01:17:24");
INSERT INTO payments VALUES("296","spr-20201022-013018","9","","232","2","1","100","0","Cash","","2020-10-22 03:30:18","2020-10-22 03:30:18");
INSERT INTO payments VALUES("297","spr-20201022-015606","1","","233","3","1","250","0","Cash","","2020-10-22 03:56:06","2020-10-22 03:56:06");
INSERT INTO payments VALUES("298","spr-20201024-070508","1","","234","4","1","11500","0","Cash","","2020-10-23 21:05:08","2020-10-23 21:05:08");
INSERT INTO payments VALUES("299","spr-20201024-070753","1","","235","4","1","250","0","Cash","","2020-10-23 21:07:53","2020-10-23 21:07:53");
INSERT INTO payments VALUES("300","spr-20201024-034619","1","","237","4","1","61900","0","Cash","","2020-10-24 05:46:19","2020-10-24 05:46:19");
INSERT INTO payments VALUES("302","spr-20201027-054004","1","","239","3","1","2","0","Cash","","2020-10-26 19:40:04","2020-10-26 19:40:04");
INSERT INTO payments VALUES("303","spr-20201027-054207","1","","240","3","1","6","0","Cash","","2020-10-26 19:42:07","2020-10-26 19:42:07");
INSERT INTO payments VALUES("304","spr-20201027-063202","1","","241","4","1","250","0","Cash","","2020-10-26 20:32:02","2020-10-26 20:32:02");
INSERT INTO payments VALUES("305","spr-20201029-073033","1","","242","4","1","250","0","Cash","","2020-10-28 21:30:33","2020-10-28 21:30:33");
INSERT INTO payments VALUES("306","spr-20201101-072115","1","","243","4","1","250","0","Cash","","2020-10-31 21:21:15","2020-10-31 21:21:15");
INSERT INTO payments VALUES("307","spr-20201101-074225","1","","245","3","1","1130","0","Cash","","2020-10-31 21:42:25","2020-10-31 21:42:25");
INSERT INTO payments VALUES("308","spr-20201101-075019","1","","246","4","1","440","0","Cash","","2020-10-31 21:50:19","2020-10-31 21:50:19");
INSERT INTO payments VALUES("310","spr-20201106-013042","1","","250","4","1","378.4","0","Cash","","2020-11-06 02:30:42","2020-11-06 02:30:42");
INSERT INTO payments VALUES("311","spr-20201109-011527","1","","251","4","1","500","0","Cash","","2020-11-09 02:15:27","2020-11-09 02:15:27");
INSERT INTO payments VALUES("312","spr-20201111-055902","1","","252","3","1","229.5","0","Cash","","2020-11-10 18:59:02","2020-11-10 18:59:02");
INSERT INTO payments VALUES("313","spr-20201114-064739","1","","253","4","1","10242.5","0","Cash","","2020-11-13 19:47:39","2020-11-13 19:47:39");
INSERT INTO payments VALUES("316","spr-20201117-064751","1","","256","4","1","715","0","Cash","","2020-11-16 19:47:51","2020-11-16 19:47:51");
INSERT INTO payments VALUES("317","spr-20201117-070920","1","","257","4","1","250","0","Cash","","2020-11-16 20:09:20","2020-11-16 20:09:20");
INSERT INTO payments VALUES("320","ppr-20201118-062036","1","90","","","1","33000","0","Cash","","2020-11-17 19:20:36","2020-11-17 19:20:36");
INSERT INTO payments VALUES("321","spr-20201118-065242","1","","258","4","1","27200","0","Cash","","2020-11-17 19:52:42","2020-11-17 19:52:42");
INSERT INTO payments VALUES("322","ppr-20201202-064039","28","93","","","1","544.5","60000","Cash","demo notes demo notes demo notes demo notes","2020-12-01 19:40:39","2020-12-01 19:40:39");
INSERT INTO payments VALUES("323","ppr-20201202-064240","28","93","","","1","6000","54000","Cheque","sample","2020-12-01 19:42:40","2020-12-01 19:42:40");
INSERT INTO payments VALUES("324","ppr-20201202-064351","28","93","","","3","54000","0","Cash","test","2020-12-01 19:43:51","2020-12-01 19:43:51");
INSERT INTO payments VALUES("325","spr-20201202-094020","28","","259","","1","111751","0","Cash","","2020-12-01 22:40:20","2020-12-01 22:40:20");
INSERT INTO payments VALUES("326","ppr-20201230-054931","28","95","","","4","55054.5","0","Cash","paradoxical sajid","2020-12-29 18:49:31","2020-12-29 18:49:31");
INSERT INTO payments VALUES("327","ppr-20210106-034340","28","96","","","4","12500","0","Cash","","2021-01-05 16:43:40","2021-01-05 16:43:40");
INSERT INTO payments VALUES("328","spr-20210106-044145","28","","261","7","4","2510","0","Cash","","2021-01-05 17:41:45","2021-01-05 17:41:45");
INSERT INTO payments VALUES("329","spr-20210107-112337","28","","263","5","4","200","0","Cash","","2021-01-07 00:23:37","2021-01-07 00:23:37");
INSERT INTO payments VALUES("330","spr-20210113-110318","28","","266","5","4","2990","0","Cash","","2021-01-13 00:03:18","2021-01-13 00:03:18");
INSERT INTO payments VALUES("331","spr-20210113-110845","28","","265","9","4","440","0","Cash","","2021-01-13 00:08:45","2021-01-13 00:08:45");
INSERT INTO payments VALUES("332","spr-20210114-042348","28","","267","5","4","3294","0","Cash","","2021-01-13 17:23:48","2021-01-13 17:23:48");
INSERT INTO payments VALUES("333","spr-20210114-064345","28","","268","5","4","20","13","Cash","","2021-01-13 19:43:45","2021-01-13 19:43:45");
INSERT INTO payments VALUES("334","spr-20210116-054936","28","","269","5","4","4000","2000","Cash","","2021-01-15 18:49:36","2021-01-15 18:49:36");
INSERT INTO payments VALUES("335","spr-20210116-055137","28","","269","5","4","2000","0","Cash","","2021-01-15 18:51:37","2021-01-15 18:51:37");
INSERT INTO payments VALUES("336","ppr-20210116-112339","28","97","","","4","50000","0","Cash","","2021-01-16 00:23:39","2021-01-16 00:23:39");
INSERT INTO payments VALUES("337","spr-20210118-084038","28","","271","5","4","3","0","Cash","","2021-01-17 21:40:38","2021-01-17 21:40:38");
INSERT INTO payments VALUES("338","spr-20210118-084326","28","","270","5","4","300","0","Cash","","2021-01-17 21:43:26","2021-01-17 21:43:26");
INSERT INTO payments VALUES("339","spr-20210123-072510","28","","275","5","4","3000","0","Cash","","2021-01-22 20:25:10","2021-01-22 20:25:10");
INSERT INTO payments VALUES("340","spr-20210123-073301","28","","274","5","4","1250","0","Cash","","2021-01-22 20:33:01","2021-01-22 20:33:01");
INSERT INTO payments VALUES("341","spr-20210123-105909","28","","276","7","4","42","0","Cash","","2021-01-22 23:59:09","2021-01-22 23:59:09");
INSERT INTO payments VALUES("342","spr-20210128-102632","28","","279","5","4","454.37","0","Cash","","2021-01-27 23:26:32","2021-01-27 23:26:32");
INSERT INTO payments VALUES("343","spr-20210128-102848","28","","281","5","4","40","0","Cash","","2021-01-27 23:28:48","2021-01-27 23:28:48");
INSERT INTO payments VALUES("344","spr-20210128-103949","28","","278","5","4","46683.14","0","Cash","","2021-01-27 23:39:49","2021-01-27 23:39:49");
INSERT INTO payments VALUES("345","ppr-20210203-053356","28","99","","","4","90000","0","Cash","","2021-02-02 18:33:56","2021-02-02 18:33:56");
INSERT INTO payments VALUES("346","spr-20210203-072357","28","","296","5","4","554","0","Cash","","2021-02-02 20:23:57","2021-02-02 20:23:57");
INSERT INTO payments VALUES("347","ppr-20210207-094432","28","106","","","4","18000","0","Cash","","2021-02-06 22:44:32","2021-02-06 22:44:32");
INSERT INTO payments VALUES("348","spr-20210213-065200","28","","311","5","4","117328","0","Cash","","2021-02-12 19:52:00","2021-02-12 19:52:00");
INSERT INTO payments VALUES("349","spr-20210213-065355","28","","312","5","4","1149","0","Cash","","2021-02-12 19:53:55","2021-02-12 19:53:55");
INSERT INTO payments VALUES("350","spr-20220322-052904","1","","313","3","6","129.6","0","Cash","","2022-03-21 19:29:04","2022-03-21 19:29:04");
INSERT INTO payments VALUES("351","spr-20220322-070757","1","","316","3","6","5000","5000","Cheque","Partial paid","2022-03-21 21:07:57","2022-03-21 21:08:34");
INSERT INTO payments VALUES("352","ppr-20220524-062016","1","115","","","7","30000","20000","Cheque","","2022-05-24 06:20:16","2022-05-24 06:20:16");
INSERT INTO payments VALUES("353","ppr-20220524-062053","1","115","","","7","10000","10000","Cash","","2022-05-24 06:20:53","2022-05-24 06:20:53");
INSERT INTO payments VALUES("354","ppr-20220524-062258","1","115","","","7","10000","0","Cash","","2022-05-24 06:22:58","2022-05-24 06:22:58");



CREATE TABLE `payrolls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `paying_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payrolls VALUES("8","payroll-20190101-055231","1","1","1","100","0","","2018-12-31 18:52:31","2018-12-31 18:52:31");
INSERT INTO payrolls VALUES("9","payroll-20191204-113802","1","1","1","10000","0","","2019-12-04 12:38:02","2019-12-04 12:38:02");
INSERT INTO payrolls VALUES("10","payroll-20201203-044446","1","4","28","12000","0","Sample Payroll","2020-12-02 17:44:46","2020-12-02 17:44:46");
INSERT INTO payrolls VALUES("11","payroll-20201230-101238","6","5","28","1000","0","payroll test","2020-12-29 23:12:38","2020-12-29 23:12:38");
INSERT INTO payrolls VALUES("12","payroll-20210202-110907","6","6","28","1000","0","Internet Bills","2021-02-02 00:09:07","2021-02-02 00:09:07");



CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO permissions VALUES("4","products-edit","web","2018-06-02 21:00:09","2018-06-02 21:00:09");
INSERT INTO permissions VALUES("5","products-delete","web","2018-06-03 18:54:22","2018-06-03 18:54:22");
INSERT INTO permissions VALUES("6","products-add","web","2018-06-03 20:34:14","2018-06-03 20:34:14");
INSERT INTO permissions VALUES("7","products-index","web","2018-06-03 23:34:27","2018-06-03 23:34:27");
INSERT INTO permissions VALUES("8","purchases-index","web","2018-06-04 04:03:19","2018-06-04 04:03:19");
INSERT INTO permissions VALUES("9","purchases-add","web","2018-06-04 04:12:25","2018-06-04 04:12:25");
INSERT INTO permissions VALUES("10","purchases-edit","web","2018-06-04 05:47:36","2018-06-04 05:47:36");
INSERT INTO permissions VALUES("11","purchases-delete","web","2018-06-04 05:47:36","2018-06-04 05:47:36");
INSERT INTO permissions VALUES("12","sales-index","web","2018-06-04 06:49:08","2018-06-04 06:49:08");
INSERT INTO permissions VALUES("13","sales-add","web","2018-06-04 06:49:52","2018-06-04 06:49:52");
INSERT INTO permissions VALUES("14","sales-edit","web","2018-06-04 06:49:52","2018-06-04 06:49:52");
INSERT INTO permissions VALUES("15","sales-delete","web","2018-06-04 06:49:53","2018-06-04 06:49:53");
INSERT INTO permissions VALUES("16","quotes-index","web","2018-06-04 18:05:10","2018-06-04 18:05:10");
INSERT INTO permissions VALUES("17","quotes-add","web","2018-06-04 18:05:10","2018-06-04 18:05:10");
INSERT INTO permissions VALUES("18","quotes-edit","web","2018-06-04 18:05:10","2018-06-04 18:05:10");
INSERT INTO permissions VALUES("19","quotes-delete","web","2018-06-04 18:05:10","2018-06-04 18:05:10");
INSERT INTO permissions VALUES("20","transfers-index","web","2018-06-04 18:30:03","2018-06-04 18:30:03");
INSERT INTO permissions VALUES("21","transfers-add","web","2018-06-04 18:30:03","2018-06-04 18:30:03");
INSERT INTO permissions VALUES("22","transfers-edit","web","2018-06-04 18:30:03","2018-06-04 18:30:03");
INSERT INTO permissions VALUES("23","transfers-delete","web","2018-06-04 18:30:03","2018-06-04 18:30:03");
INSERT INTO permissions VALUES("24","returns-index","web","2018-06-04 18:50:24","2018-06-04 18:50:24");
INSERT INTO permissions VALUES("25","returns-add","web","2018-06-04 18:50:24","2018-06-04 18:50:24");
INSERT INTO permissions VALUES("26","returns-edit","web","2018-06-04 18:50:25","2018-06-04 18:50:25");
INSERT INTO permissions VALUES("27","returns-delete","web","2018-06-04 18:50:25","2018-06-04 18:50:25");
INSERT INTO permissions VALUES("28","customers-index","web","2018-06-04 19:15:54","2018-06-04 19:15:54");
INSERT INTO permissions VALUES("29","customers-add","web","2018-06-04 19:15:55","2018-06-04 19:15:55");
INSERT INTO permissions VALUES("30","customers-edit","web","2018-06-04 19:15:55","2018-06-04 19:15:55");
INSERT INTO permissions VALUES("31","customers-delete","web","2018-06-04 19:15:55","2018-06-04 19:15:55");
INSERT INTO permissions VALUES("32","suppliers-index","web","2018-06-04 19:40:12","2018-06-04 19:40:12");
INSERT INTO permissions VALUES("33","suppliers-add","web","2018-06-04 19:40:12","2018-06-04 19:40:12");
INSERT INTO permissions VALUES("34","suppliers-edit","web","2018-06-04 19:40:12","2018-06-04 19:40:12");
INSERT INTO permissions VALUES("35","suppliers-delete","web","2018-06-04 19:40:12","2018-06-04 19:40:12");
INSERT INTO permissions VALUES("36","product-report","web","2018-06-24 19:05:33","2018-06-24 19:05:33");
INSERT INTO permissions VALUES("37","purchase-report","web","2018-06-24 19:24:56","2018-06-24 19:24:56");
INSERT INTO permissions VALUES("38","sale-report","web","2018-06-24 19:33:13","2018-06-24 19:33:13");
INSERT INTO permissions VALUES("39","customer-report","web","2018-06-24 19:36:51","2018-06-24 19:36:51");
INSERT INTO permissions VALUES("40","due-report","web","2018-06-24 19:39:52","2018-06-24 19:39:52");
INSERT INTO permissions VALUES("41","users-index","web","2018-06-24 20:00:10","2018-06-24 20:00:10");
INSERT INTO permissions VALUES("42","users-add","web","2018-06-24 20:00:10","2018-06-24 20:00:10");
INSERT INTO permissions VALUES("43","users-edit","web","2018-06-24 20:01:30","2018-06-24 20:01:30");
INSERT INTO permissions VALUES("44","users-delete","web","2018-06-24 20:01:30","2018-06-24 20:01:30");
INSERT INTO permissions VALUES("45","profit-loss","web","2018-07-14 17:50:05","2018-07-14 17:50:05");
INSERT INTO permissions VALUES("46","best-seller","web","2018-07-14 18:01:38","2018-07-14 18:01:38");
INSERT INTO permissions VALUES("47","daily-sale","web","2018-07-14 18:24:21","2018-07-14 18:24:21");
INSERT INTO permissions VALUES("48","monthly-sale","web","2018-07-14 18:30:41","2018-07-14 18:30:41");
INSERT INTO permissions VALUES("49","daily-purchase","web","2018-07-14 18:36:46","2018-07-14 18:36:46");
INSERT INTO permissions VALUES("50","monthly-purchase","web","2018-07-14 18:48:17","2018-07-14 18:48:17");
INSERT INTO permissions VALUES("51","payment-report","web","2018-07-14 19:10:41","2018-07-14 19:10:41");
INSERT INTO permissions VALUES("52","warehouse-stock-report","web","2018-07-14 19:16:55","2018-07-14 19:16:55");
INSERT INTO permissions VALUES("53","product-qty-alert","web","2018-07-14 19:33:21","2018-07-14 19:33:21");
INSERT INTO permissions VALUES("54","supplier-report","web","2018-07-29 23:00:01","2018-07-29 23:00:01");
INSERT INTO permissions VALUES("55","expenses-index","web","2018-09-04 21:07:10","2018-09-04 21:07:10");
INSERT INTO permissions VALUES("56","expenses-add","web","2018-09-04 21:07:10","2018-09-04 21:07:10");
INSERT INTO permissions VALUES("57","expenses-edit","web","2018-09-04 21:07:10","2018-09-04 21:07:10");
INSERT INTO permissions VALUES("58","expenses-delete","web","2018-09-04 21:07:11","2018-09-04 21:07:11");
INSERT INTO permissions VALUES("59","general_setting","web","2018-10-19 19:10:04","2018-10-19 19:10:04");
INSERT INTO permissions VALUES("60","mail_setting","web","2018-10-19 19:10:04","2018-10-19 19:10:04");
INSERT INTO permissions VALUES("61","pos_setting","web","2018-10-19 19:10:04","2018-10-19 19:10:04");
INSERT INTO permissions VALUES("62","hrm_setting","web","2019-01-02 05:30:23","2019-01-02 05:30:23");
INSERT INTO permissions VALUES("63","purchase-return-index","web","2019-01-02 16:45:14","2019-01-02 16:45:14");
INSERT INTO permissions VALUES("64","purchase-return-add","web","2019-01-02 16:45:14","2019-01-02 16:45:14");
INSERT INTO permissions VALUES("65","purchase-return-edit","web","2019-01-02 16:45:14","2019-01-02 16:45:14");
INSERT INTO permissions VALUES("66","purchase-return-delete","web","2019-01-02 16:45:14","2019-01-02 16:45:14");
INSERT INTO permissions VALUES("67","account-index","web","2019-01-02 17:06:13","2019-01-02 17:06:13");
INSERT INTO permissions VALUES("68","balance-sheet","web","2019-01-02 17:06:14","2019-01-02 17:06:14");
INSERT INTO permissions VALUES("69","account-statement","web","2019-01-02 17:06:14","2019-01-02 17:06:14");
INSERT INTO permissions VALUES("70","department","web","2019-01-02 17:30:01","2019-01-02 17:30:01");
INSERT INTO permissions VALUES("71","attendance","web","2019-01-02 17:30:01","2019-01-02 17:30:01");
INSERT INTO permissions VALUES("72","payroll","web","2019-01-02 17:30:01","2019-01-02 17:30:01");
INSERT INTO permissions VALUES("73","employees-index","web","2019-01-02 17:52:19","2019-01-02 17:52:19");
INSERT INTO permissions VALUES("74","employees-add","web","2019-01-02 17:52:19","2019-01-02 17:52:19");
INSERT INTO permissions VALUES("75","employees-edit","web","2019-01-02 17:52:19","2019-01-02 17:52:19");
INSERT INTO permissions VALUES("76","employees-delete","web","2019-01-02 17:52:19","2019-01-02 17:52:19");
INSERT INTO permissions VALUES("77","user-report","web","2019-01-16 01:48:18","2019-01-16 01:48:18");
INSERT INTO permissions VALUES("78","stock_count","web","2019-02-17 05:32:01","2019-02-17 05:32:01");
INSERT INTO permissions VALUES("79","adjustment","web","2019-02-17 05:32:02","2019-02-17 05:32:02");
INSERT INTO permissions VALUES("80","sms_setting","web","2019-02-22 00:18:03","2019-02-22 00:18:03");
INSERT INTO permissions VALUES("81","create_sms","web","2019-02-22 00:18:03","2019-02-22 00:18:03");
INSERT INTO permissions VALUES("82","print_barcode","web","2019-03-07 00:02:19","2019-03-07 00:02:19");
INSERT INTO permissions VALUES("83","empty_database","web","2019-03-07 00:02:19","2019-03-07 00:02:19");
INSERT INTO permissions VALUES("84","customer_group","web","2019-03-07 00:37:15","2019-03-07 00:37:15");
INSERT INTO permissions VALUES("85","unit","web","2019-03-07 00:37:15","2019-03-07 00:37:15");
INSERT INTO permissions VALUES("86","tax","web","2019-03-07 00:37:15","2019-03-07 00:37:15");
INSERT INTO permissions VALUES("87","gift_card","web","2019-03-07 01:29:38","2019-03-07 01:29:38");
INSERT INTO permissions VALUES("88","coupon","web","2019-03-07 01:29:38","2019-03-07 01:29:38");
INSERT INTO permissions VALUES("89","holiday","web","2019-10-19 04:57:15","2019-10-19 04:57:15");
INSERT INTO permissions VALUES("90","warehouse-report","web","2019-10-22 02:00:23","2019-10-22 02:00:23");
INSERT INTO permissions VALUES("91","warehouse","web","2020-02-26 01:47:32","2020-02-26 01:47:32");
INSERT INTO permissions VALUES("92","brand","web","2020-02-26 01:59:59","2020-02-26 01:59:59");
INSERT INTO permissions VALUES("93","billers-index","web","2020-02-26 02:11:15","2020-02-26 02:11:15");
INSERT INTO permissions VALUES("94","billers-add","web","2020-02-26 02:11:15","2020-02-26 02:11:15");
INSERT INTO permissions VALUES("95","billers-edit","web","2020-02-26 02:11:15","2020-02-26 02:11:15");
INSERT INTO permissions VALUES("96","billers-delete","web","2020-02-26 02:11:15","2020-02-26 02:11:15");
INSERT INTO permissions VALUES("97","money-transfer","web","2020-03-02 00:41:48","2020-03-02 00:41:48");
INSERT INTO permissions VALUES("98","category","web","2020-07-13 08:13:16","2020-07-13 08:13:16");
INSERT INTO permissions VALUES("99","delivery","web","2020-07-13 08:13:16","2020-07-13 08:13:16");
INSERT INTO permissions VALUES("100","send_notification","web","2020-10-31 02:21:31","2020-10-31 02:21:31");
INSERT INTO permissions VALUES("101","today_sale","web","2020-10-31 02:57:04","2020-10-31 02:57:04");
INSERT INTO permissions VALUES("102","today_profit","web","2020-10-31 02:57:04","2020-10-31 02:57:04");
INSERT INTO permissions VALUES("103","currency","web","2020-11-08 19:23:11","2020-11-08 19:23:11");
INSERT INTO permissions VALUES("104","backup_database","web","2020-11-14 19:16:55","2020-11-14 19:16:55");



CREATE TABLE `pos_setting` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `biller_id` int(11) NOT NULL,
  `product_number` int(11) NOT NULL,
  `keybord_active` tinyint(1) NOT NULL,
  `stripe_public_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `pos_setting_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO pos_setting VALUES("1","11","1","1","4","0","pk_test_ITN7KOYiIsHSCQ0UMRcgaYUB","sk_test_TtQQaawhEYRwa3mU9CzttrEy","2018-09-01 23:17:04","2021-02-12 19:51:14");



CREATE TABLE `product_adjustments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adjustment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` double NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_adjustments VALUES("1","1","3","1","-","2020-11-30 23:45:10","2020-11-30 23:47:32");
INSERT INTO product_adjustments VALUES("2","2","68","5","+","2020-12-01 23:47:08","2020-12-01 23:47:08");
INSERT INTO product_adjustments VALUES("3","3","1","3","+","2020-12-29 17:59:42","2020-12-29 17:59:42");
INSERT INTO product_adjustments VALUES("4","4","3","3","+","2020-12-29 18:04:11","2020-12-29 18:04:11");
INSERT INTO product_adjustments VALUES("5","5","70","5","-","2021-01-05 17:21:38","2021-01-05 17:21:38");



CREATE TABLE `product_purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `recieved` double NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `net_unit_cost` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `expire_date` date NOT NULL DEFAULT '9999-12-31',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_purchases VALUES("59","12","4","","200","200","1","1","0","0","0","200","9999-12-31","2018-08-08 19:48:36","2018-08-08 19:48:36");
INSERT INTO product_purchases VALUES("60","12","5","","100","100","1","100","0","0","0","10000","9999-12-31","2018-08-08 19:48:36","2018-08-08 19:48:36");
INSERT INTO product_purchases VALUES("66","13","2","","100","100","3","166.96","0","15","2504.35","19200","9999-12-31","2018-08-08 19:49:55","2018-08-08 19:49:55");
INSERT INTO product_purchases VALUES("67","13","3","","100","100","1","200","0","0","0","20000","9999-12-31","2018-08-08 19:49:55","2018-08-08 19:49:55");
INSERT INTO product_purchases VALUES("68","13","1","","150","150","1","320","0","10","4800","52800","9999-12-31","2018-08-08 19:49:55","2018-08-08 19:49:55");
INSERT INTO product_purchases VALUES("69","13","10","","60","60","7","10","0","0","0","600","9999-12-31","2018-08-08 19:49:55","2018-08-08 19:49:55");
INSERT INTO product_purchases VALUES("70","14","1","","100","100","1","320","0","10","3200","35200","9999-12-31","2018-08-09 03:23:48","2018-08-09 03:23:48");
INSERT INTO product_purchases VALUES("71","14","2","","50","50","3","166.96","0","15","1252.17","9600","9999-12-31","2018-08-09 03:23:48","2018-08-09 03:23:48");
INSERT INTO product_purchases VALUES("72","14","3","","100","100","1","200","0","0","0","20000","9999-12-31","2018-08-09 03:23:49","2018-08-09 03:23:49");
INSERT INTO product_purchases VALUES("73","14","5","","100","100","1","100","0","0","0","10000","9999-12-31","2018-08-09 03:23:49","2018-08-09 03:23:49");
INSERT INTO product_purchases VALUES("74","14","10","","50","50","7","10","0","0","0","500","9999-12-31","2018-08-09 03:23:49","2018-08-09 03:23:49");
INSERT INTO product_purchases VALUES("76","15","22","","20","20","1","800","0","10","1600","17600","9999-12-31","2018-09-03 00:06:46","2018-09-03 00:06:46");
INSERT INTO product_purchases VALUES("87","16","22","","20","20","1","800","0","10","1600","17600","9999-12-31","2018-09-20 05:09:12","2018-09-20 05:09:12");
INSERT INTO product_purchases VALUES("89","18","4","","50","50","1","1","0","0","0","50","9999-12-31","2018-10-22 06:26:25","2018-10-22 06:26:25");
INSERT INTO product_purchases VALUES("90","19","4","","50","50","1","1","0","0","0","50","9999-12-31","2018-10-22 06:26:52","2018-10-22 06:26:52");
INSERT INTO product_purchases VALUES("91","20","25","","15","15","1","500","0","10","750","8250","9999-12-31","2018-10-22 21:14:21","2018-10-22 21:14:21");
INSERT INTO product_purchases VALUES("93","21","25","","15","15","1","500","0","10","750","8250","9999-12-31","2018-10-22 21:14:58","2018-10-22 21:14:58");
INSERT INTO product_purchases VALUES("94","22","22","","5","5","1","800","0","10","400","4400","9999-12-31","2018-10-31 18:59:03","2018-10-31 18:59:03");
INSERT INTO product_purchases VALUES("96","23","22","","5","5","1","800","0","10","400","4400","9999-12-31","2018-11-02 23:23:52","2018-11-02 23:23:52");
INSERT INTO product_purchases VALUES("97","24","22","","15","15","1","800","0","10","1200","13200","9999-12-31","2018-11-04 22:18:19","2018-11-04 22:18:19");
INSERT INTO product_purchases VALUES("98","24","25","","5","5","1","500","0","10","250","2750","9999-12-31","2018-11-04 22:18:19","2018-11-04 22:18:19");
INSERT INTO product_purchases VALUES("99","25","31","","15","15","1","250","0","0","0","3750","9999-12-31","2018-12-04 18:34:30","2018-12-04 18:34:30");
INSERT INTO product_purchases VALUES("100","25","30","","15","15","1","50","0","0","0","750","9999-12-31","2018-12-04 18:34:30","2018-12-04 18:34:30");
INSERT INTO product_purchases VALUES("101","26","31","","15","15","1","250","0","0","0","3750","9999-12-31","2018-12-04 18:35:08","2018-12-04 18:35:08");
INSERT INTO product_purchases VALUES("102","26","30","","15","15","1","50","0","0","0","750","9999-12-31","2018-12-04 18:35:08","2018-12-04 18:35:08");
INSERT INTO product_purchases VALUES("104","27","32","","10","10","1","1","0","0","0","10","9999-12-31","2018-12-18 18:57:41","2018-12-18 18:57:41");
INSERT INTO product_purchases VALUES("112","33","33","","10","10","1","1","0","0","0","10","9999-12-31","2018-12-23 22:04:21","2018-12-23 22:04:21");
INSERT INTO product_purchases VALUES("113","34","25","","2","2","1","500","0","10","100","1100","9999-12-31","2019-01-02 20:01:24","2019-01-02 20:01:24");
INSERT INTO product_purchases VALUES("114","34","22","","2","2","1","800","0","10","160","1760","9999-12-31","2019-01-02 20:01:24","2019-01-02 20:01:24");
INSERT INTO product_purchases VALUES("115","35","31","","2","2","1","250","0","0","0","500","9999-12-31","2019-01-28 22:54:48","2019-01-28 22:54:48");
INSERT INTO product_purchases VALUES("116","35","30","","2","2","1","50","0","0","0","100","9999-12-31","2019-01-28 22:54:48","2019-01-28 22:54:48");
INSERT INTO product_purchases VALUES("117","36","30","","3","3","1","50","0","0","0","150","9999-12-31","2019-01-28 22:55:58","2019-01-28 22:55:58");
INSERT INTO product_purchases VALUES("118","36","31","","2","2","1","250","0","0","0","500","9999-12-31","2019-01-28 22:55:58","2019-01-28 22:55:58");
INSERT INTO product_purchases VALUES("121","39","1","","2","2","1","315","10","10","63","693","9999-12-31","2019-02-08 23:44:13","2019-02-08 23:44:13");
INSERT INTO product_purchases VALUES("122","39","2","","1","1","3","192","0","0","0","192","9999-12-31","2019-02-08 23:44:13","2019-02-08 23:44:13");
INSERT INTO product_purchases VALUES("123","38","32","","10","10","1","1","0","0","0","10","9999-12-31","2019-02-08 23:45:24","2019-02-08 23:45:24");
INSERT INTO product_purchases VALUES("124","38","25","","3","3","1","500","0","10","150","1650","9999-12-31","2019-02-08 23:45:24","2019-02-08 23:45:24");
INSERT INTO product_purchases VALUES("125","37","33","","10","10","1","1","0","0","0","10","9999-12-31","2019-02-08 23:46:22","2019-02-08 23:46:22");
INSERT INTO product_purchases VALUES("126","37","25","","2","2","1","500","0","10","100","1100","9999-12-31","2019-02-08 23:46:23","2019-02-08 23:46:23");
INSERT INTO product_purchases VALUES("127","37","22","","6","6","1","800","0","10","480","5280","9999-12-31","2019-02-08 23:46:23","2019-02-08 23:46:23");
INSERT INTO product_purchases VALUES("128","40","33","","10","10","1","10","0","0","0","100","9999-12-31","2019-03-02 23:39:17","2019-03-02 23:39:17");
INSERT INTO product_purchases VALUES("129","41","33","","5","5","1","10","0","0","0","50","9999-12-31","2019-03-02 23:43:58","2019-03-02 23:43:58");
INSERT INTO product_purchases VALUES("130","41","1","","10","10","1","320","0","10","320","3520","9999-12-31","2019-03-02 23:43:59","2019-03-02 23:43:59");
INSERT INTO product_purchases VALUES("133","42","30","","1","1","1","50","0","0","0","50","9999-12-31","2019-04-13 09:50:08","2019-04-13 09:50:08");
INSERT INTO product_purchases VALUES("134","42","31","","1","1","1","250","0","0","0","250","9999-12-31","2019-04-13 09:50:08","2019-04-13 09:50:08");
INSERT INTO product_purchases VALUES("135","43","25","","3","3","1","500","0","10","150","1650","9999-12-31","2019-06-13 00:16:00","2019-06-13 00:16:00");
INSERT INTO product_purchases VALUES("136","43","22","","3","3","1","800","0","10","240","2640","9999-12-31","2019-06-13 00:16:01","2019-06-13 00:16:01");
INSERT INTO product_purchases VALUES("137","44","25","","1","1","1","500","0","10","50","550","9999-12-31","2019-10-19 05:31:19","2019-10-19 05:31:19");
INSERT INTO product_purchases VALUES("138","44","22","","1","1","1","800","0","10","80","880","9999-12-31","2019-10-19 05:31:20","2019-10-19 05:31:20");
INSERT INTO product_purchases VALUES("140","46","33","","10","10","1","10","0","0","0","100","9999-12-31","2019-11-03 01:39:49","2019-11-03 01:39:49");
INSERT INTO product_purchases VALUES("141","46","32","","10","10","1","5","0","0","0","50","9999-12-31","2019-11-03 01:39:49","2019-11-03 01:39:49");
INSERT INTO product_purchases VALUES("142","47","1","","2","2","1","315","10","10","63","693","9999-12-31","2019-11-09 00:25:10","2019-11-09 00:25:10");
INSERT INTO product_purchases VALUES("143","47","2","","1","1","3","192","0","0","0","192","9999-12-31","2019-11-09 00:25:10","2019-11-09 00:25:10");
INSERT INTO product_purchases VALUES("144","48","4","","100","100","1","1","0","0","0","100","9999-12-31","2019-11-10 08:02:21","2019-11-10 08:02:21");
INSERT INTO product_purchases VALUES("149","49","22","","10","10","1","800","0","10","800","8800","9999-12-31","2019-11-10 23:28:59","2019-11-10 23:28:59");
INSERT INTO product_purchases VALUES("158","55","48","3","1","1","1","2","0","0","0","2","9999-12-31","2019-11-27 11:28:35","2019-11-27 11:28:35");
INSERT INTO product_purchases VALUES("159","55","48","2","1","1","1","2","0","0","0","2","9999-12-31","2019-11-27 11:28:35","2019-11-27 11:28:35");
INSERT INTO product_purchases VALUES("161","57","3","","1","1","1","200","0","0","0","200","9999-12-31","2019-12-04 12:07:49","2019-12-04 12:07:49");
INSERT INTO product_purchases VALUES("162","58","48","2","1","1","1","2","0","0","0","2","9999-12-31","2019-12-04 23:21:10","2019-12-04 23:21:10");
INSERT INTO product_purchases VALUES("163","58","48","3","1","1","1","2","0","0","0","2","9999-12-31","2019-12-04 23:21:10","2019-12-04 23:21:10");
INSERT INTO product_purchases VALUES("169","59","48","3","1","1","1","2","0","0","0","2","9999-12-31","2019-12-21 05:22:29","2019-12-21 05:22:29");
INSERT INTO product_purchases VALUES("170","59","48","2","1","1","1","2","0","0","0","2","9999-12-31","2019-12-21 05:22:29","2019-12-21 05:22:29");
INSERT INTO product_purchases VALUES("171","59","48","5","1","1","1","2","0","0","0","2","9999-12-31","2019-12-21 05:22:29","2019-12-21 05:22:29");
INSERT INTO product_purchases VALUES("174","56","48","2","1","1","1","2","0","0","0","2","9999-12-31","2019-12-21 08:27:16","2019-12-21 08:27:16");
INSERT INTO product_purchases VALUES("178","61","48","3","10","10","1","2","0","0","0","20","9999-12-31","2020-01-01 02:06:31","2020-01-01 02:06:31");
INSERT INTO product_purchases VALUES("179","61","48","2","10","10","1","2","0","0","0","20","9999-12-31","2020-01-01 02:06:31","2020-01-01 02:06:31");
INSERT INTO product_purchases VALUES("180","61","48","5","10","10","1","2","0","0","0","20","9999-12-31","2020-01-01 02:06:31","2020-01-01 02:06:31");
INSERT INTO product_purchases VALUES("181","62","25","","3","3","1","500","0","10","150","1650","9999-12-31","2020-01-01 03:24:02","2020-01-01 03:24:02");
INSERT INTO product_purchases VALUES("209","67","31","","1","1","1","250","0","0","0","250","9999-12-31","2020-02-04 12:00:41","2020-02-04 12:00:41");
INSERT INTO product_purchases VALUES("210","67","30","","1","1","1","50","0","0","0","50","9999-12-31","2020-02-04 12:00:41","2020-02-04 12:00:41");
INSERT INTO product_purchases VALUES("212","69","4","","50","50","1","1","0","0","0","50","9999-12-31","2020-03-02 00:55:10","2020-03-02 00:55:10");
INSERT INTO product_purchases VALUES("213","70","4","","50","50","1","1","0","0","0","50","9999-12-31","2020-03-02 00:56:03","2020-03-02 00:56:03");
INSERT INTO product_purchases VALUES("214","71","25","","3","3","1","500","0","10","150","1650","9999-12-31","2020-04-06 09:35:12","2020-04-06 09:35:12");
INSERT INTO product_purchases VALUES("215","71","31","","5","5","1","250","0","0","0","1250","9999-12-31","2020-04-06 09:35:12","2020-04-06 09:35:12");
INSERT INTO product_purchases VALUES("216","71","30","","3","3","1","50","0","0","0","150","9999-12-31","2020-04-06 09:35:12","2020-04-06 09:35:12");
INSERT INTO product_purchases VALUES("217","72","61","","10","10","1","2500","5000","15","3750","28750","9999-12-31","2020-08-16 12:02:07","2020-08-16 12:02:07");
INSERT INTO product_purchases VALUES("219","73","62","12","2","2","1","1","0","0","0","2","9999-12-31","2020-09-27 05:07:44","2020-09-27 05:07:44");
INSERT INTO product_purchases VALUES("221","74","61","","11","11","1","3000","0","15","4950","37950","9999-12-31","2020-10-23 21:03:16","2020-10-23 21:03:16");
INSERT INTO product_purchases VALUES("222","74","22","","4","4","1","800","0","10","320","3520","9999-12-31","2020-10-23 21:03:16","2020-10-23 21:03:16");
INSERT INTO product_purchases VALUES("232","83","60","9","2","2","1","1","0","0","0","2","9999-12-31","2020-10-26 18:56:11","2020-10-26 18:56:11");
INSERT INTO product_purchases VALUES("233","84","60","9","2","2","1","2","0","0","0","4","9999-12-31","2020-10-26 18:56:58","2020-10-26 18:56:58");
INSERT INTO product_purchases VALUES("234","85","1","","1","1","1","320","0","10","32","352","9999-12-31","2020-11-01 22:29:52","2020-11-01 22:29:52");
INSERT INTO product_purchases VALUES("239","87","1","","1","1","1","320","0","10","32","352","9999-12-31","2020-11-02 00:20:34","2020-11-02 00:20:34");
INSERT INTO product_purchases VALUES("242","89","62","12","1","1","1","1","0","0","0","1","9999-12-31","2020-11-16 04:01:45","2020-11-16 04:01:45");
INSERT INTO product_purchases VALUES("243","89","1","","1","1","1","320","0","10","32","352","9999-12-31","2020-11-16 04:01:45","2020-11-16 04:01:45");
INSERT INTO product_purchases VALUES("244","90","61","","10","10","1","3000","0","15","4500","34500","9999-12-31","2020-11-17 19:15:44","2020-11-17 19:15:44");
INSERT INTO product_purchases VALUES("245","91","25","","100","100","1","500","0","10","5000","55000","9999-12-31","2020-11-29 00:03:35","2020-11-29 00:03:35");
INSERT INTO product_purchases VALUES("246","92","1","","2","2","1","315","10","10","63","693","9999-12-31","2020-11-30 23:40:53","2020-11-30 23:40:53");
INSERT INTO product_purchases VALUES("247","92","2","","1","1","3","192","0","0","0","192","9999-12-31","2020-11-30 23:40:53","2020-11-30 23:40:53");
INSERT INTO product_purchases VALUES("248","93","68","20","100","100","7","500","0","10","5000","55000","9999-12-31","2020-12-01 19:23:23","2020-12-01 19:23:23");
INSERT INTO product_purchases VALUES("249","94","1","","2","0","1","315","10","10","63","693","9999-12-31","2020-12-01 19:36:27","2020-12-01 19:36:27");
INSERT INTO product_purchases VALUES("250","94","2","","1","0","3","192","0","0","0","192","9999-12-31","2020-12-01 19:36:27","2020-12-01 19:36:27");
INSERT INTO product_purchases VALUES("251","95","69","","200","200","1","227.27","0","10","4545.45","50000","9999-12-31","2020-12-29 18:47:11","2020-12-29 18:47:11");
INSERT INTO product_purchases VALUES("253","96","70","","25","25","1","500","0","0","0","12500","9999-12-31","2021-01-03 18:04:45","2021-01-03 18:04:45");
INSERT INTO product_purchases VALUES("254","97","71","","100","100","1","500","0","0","0","50000","9999-12-31","2021-01-15 18:44:45","2021-01-15 18:44:45");
INSERT INTO product_purchases VALUES("255","98","73","","1","1","1","1200","0","0","0","1200","9999-12-31","2021-01-26 23:05:24","2021-01-26 23:05:24");
INSERT INTO product_purchases VALUES("257","99","82","","2","2","1","45000","0","0","0","90000","9999-12-31","2021-02-02 18:07:44","2021-02-02 18:07:44");
INSERT INTO product_purchases VALUES("258","100","92","","3","3","1","354","0","0","0","1062","9999-12-31","2021-02-02 18:36:31","2021-02-02 18:36:31");
INSERT INTO product_purchases VALUES("259","101","92","","1","1","1","354","0","0","0","354","9999-12-31","2021-02-02 18:38:27","2021-02-02 18:38:27");
INSERT INTO product_purchases VALUES("261","102","93","","5","5","1","818","0","0","0","4090","9999-12-31","2021-02-03 19:29:41","2021-02-03 19:29:41");
INSERT INTO product_purchases VALUES("262","103","73","","1","1","1","1000","0","0","0","1000","9999-12-31","2021-02-04 00:38:10","2021-02-04 00:38:10");
INSERT INTO product_purchases VALUES("265","105","74","","1","1","1","3000","0","0","0","3000","9999-12-31","2021-02-05 18:42:06","2021-02-05 18:42:06");
INSERT INTO product_purchases VALUES("272","106","85","","2","2","1","3000","0","0","0","6000","2021-02-10","2021-02-05 18:57:12","2021-02-05 18:57:12");
INSERT INTO product_purchases VALUES("273","106","75","","4","4","1","3000","0","0","0","12000","2021-02-27","2021-02-05 18:57:12","2021-02-05 18:57:12");
INSERT INTO product_purchases VALUES("274","104","84","","2","2","1","107525","0","0","0","215050","2021-02-21","2021-02-05 23:12:00","2021-02-05 23:12:00");
INSERT INTO product_purchases VALUES("275","104","87","","3","3","1","9832","0","0","0","29496","2021-02-14","2021-02-05 23:12:00","2021-02-05 23:12:00");
INSERT INTO product_purchases VALUES("276","107","73","","5","5","1","1000","0","0","0","5000","2021-02-17","2021-02-07 23:14:15","2021-02-07 23:14:15");
INSERT INTO product_purchases VALUES("282","108","95","","1","1","1","68000","0","0","0","68000","2024-02-09","2021-02-08 21:38:13","2021-02-08 21:38:13");
INSERT INTO product_purchases VALUES("283","108","96","","1","1","1","48000","0","0","0","48000","2021-02-09","2021-02-08 21:38:13","2021-02-08 21:38:13");
INSERT INTO product_purchases VALUES("284","108","97","","1","1","1","56000","0","0","0","56000","2021-02-09","2021-02-08 21:38:14","2021-02-08 21:38:14");
INSERT INTO product_purchases VALUES("285","108","98","","1","1","1","52000","0","0","0","52000","2021-02-09","2021-02-08 21:38:14","2021-02-08 21:38:14");
INSERT INTO product_purchases VALUES("286","108","99","","1","1","1","1800","0","0","0","1800","2021-02-09","2021-02-08 21:38:14","2021-02-08 21:38:14");
INSERT INTO product_purchases VALUES("287","109","99","","5","5","1","1800","0","0","0","9000","2021-02-18","2021-02-11 00:13:16","2021-02-11 00:13:16");
INSERT INTO product_purchases VALUES("288","110","100","","6","6","1","70","0","0","0","420","2021-02-12","2021-02-11 00:25:54","2021-02-11 00:25:54");
INSERT INTO product_purchases VALUES("289","111","82","","2","2","1","45000","0","0","0","90000","2021-02-20","2021-02-12 19:55:24","2021-02-12 19:55:24");
INSERT INTO product_purchases VALUES("290","112","73","","1","1","1","1000","0","0","0","1000","2022-04-26","2022-03-21 19:31:29","2022-03-21 19:31:29");
INSERT INTO product_purchases VALUES("291","113","101","","1","1","1","4000","0","0","0","4000","2022-03-30","2022-03-21 20:05:03","2022-03-21 20:05:03");
INSERT INTO product_purchases VALUES("293","114","101","","100","100","1","4000","0","0","0","400000","2022-03-30","2022-03-21 20:22:52","2022-03-21 20:22:52");
INSERT INTO product_purchases VALUES("295","115","78","","10000","0","1","5","0","0","0","50000","2022-05-23","2022-05-24 06:23:41","2022-05-24 06:23:41");



CREATE TABLE `product_quotation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `net_unit_price` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_quotation VALUES("2","1","1","","1","2","5030","10","15","754.5","5784.5","2018-08-08 19:52:50","2018-08-27 20:09:57");
INSERT INTO product_quotation VALUES("3","1","4","","50","1","1.5","25","10","7.5","82.5","2018-08-08 19:53:25","2018-08-27 20:34:36");
INSERT INTO product_quotation VALUES("4","1","2","","6","1","9.55","0","10","5.73","63","2018-08-27 21:03:48","2018-08-27 21:07:07");
INSERT INTO product_quotation VALUES("5","2","10","","2.5","7","22","0","0","0","55","2018-09-03 18:02:58","2018-09-20 06:37:41");
INSERT INTO product_quotation VALUES("6","2","13","","1","0","21","0","0","0","21","2018-09-03 18:02:58","2018-09-03 18:02:58");
INSERT INTO product_quotation VALUES("7","3","1","","1","1","400","0","10","40","440","2018-10-22 20:12:49","2019-12-21 01:41:37");
INSERT INTO product_quotation VALUES("19","3","48","2","1","1","13","0","0","0","13","2019-12-07 03:50:02","2019-12-21 01:41:37");
INSERT INTO product_quotation VALUES("27","11","61","","2","1","10000","0","15","3000","23000","2020-10-23 23:08:14","2020-12-01 22:57:03");
INSERT INTO product_quotation VALUES("28","12","68","20","1","7","34000","0","10","3400","37400","2020-12-01 23:19:14","2020-12-01 23:19:14");



CREATE TABLE `product_returns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `return_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `net_unit_price` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_returns VALUES("3","2","4","","20","1","2","0","0","0","40","","");
INSERT INTO product_returns VALUES("4","3","10","","2","7","22","0","0","0","44","","2018-10-06 22:19:40");
INSERT INTO product_returns VALUES("6","5","3","","1","1","250","0","0","0","250","","2018-12-25 17:16:08");
INSERT INTO product_returns VALUES("12","6","1","","1","1","400","0","10","40","440","","");
INSERT INTO product_returns VALUES("23","11","13","","1","0","21","0","0","0","21","2019-12-24 00:20:29","2019-12-24 00:20:29");
INSERT INTO product_returns VALUES("26","13","61","","1","1","10000","0","15","1500","11500","2020-08-16 12:25:02","2020-08-16 12:25:02");
INSERT INTO product_returns VALUES("27","14","1","","1","1","400","0","10","40","440","2020-10-13 07:39:54","2020-10-13 07:39:54");
INSERT INTO product_returns VALUES("31","18","61","","1","1","10000","0","15","1500","11500","2020-11-17 20:02:18","2020-11-17 20:02:18");
INSERT INTO product_returns VALUES("32","19","68","20","1","7","30600","0","10","3060","33660","2020-12-02 00:08:57","2020-12-02 00:08:57");
INSERT INTO product_returns VALUES("33","20","69","","1","1","280","0","0","0","280","2020-12-29 23:03:25","2020-12-29 23:03:25");
INSERT INTO product_returns VALUES("34","21","70","","1","1","502","0","0","0","502","2021-01-05 17:42:42","2021-01-05 17:42:42");
INSERT INTO product_returns VALUES("35","22","101","","1","1","5000","0","0","0","5000","2022-03-21 21:13:34","2022-03-21 21:19:15");



CREATE TABLE `product_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `net_unit_price` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=472 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_sales VALUES("1","1","2","","1","2","104.35","0","15","15.65","120","2018-08-08 06:36:23","2018-08-08 07:13:27");
INSERT INTO product_sales VALUES("3","1","5","","2","1","115","10","0","0","230","2018-08-08 07:13:28","2018-08-08 07:13:28");
INSERT INTO product_sales VALUES("4","2","1","","10","1","420","0","10","420","4620","2018-08-08 19:54:53","2018-08-08 19:54:53");
INSERT INTO product_sales VALUES("5","2","4","","50","1","2.1","0","0","0","105","2018-08-08 19:54:53","2018-08-08 19:54:53");
INSERT INTO product_sales VALUES("6","2","2","","3","2","109.57","0","15","49.3","378","2018-08-08 19:54:53","2018-08-08 19:54:53");
INSERT INTO product_sales VALUES("7","3","4","","20","1","2.1","0","0","0","42","2018-08-08 20:32:15","2018-08-08 20:32:15");
INSERT INTO product_sales VALUES("8","3","5","","5","1","126","0","0","0","630","2018-08-08 20:32:15","2018-08-08 20:32:15");
INSERT INTO product_sales VALUES("9","3","3","","1","1","225","0","0","0","225","2018-08-08 20:32:15","2018-08-08 20:32:15");
INSERT INTO product_sales VALUES("10","4","1","","2","1","400","0","10","80","880","2018-08-24 17:48:37","2018-08-24 17:48:37");
INSERT INTO product_sales VALUES("12","6","13","","1","0","18.9","0","0","0","18.9","2018-08-25 23:48:36","2018-08-26 01:48:05");
INSERT INTO product_sales VALUES("13","7","1","","2","1","400","0","10","80","880","2018-08-26 21:35:45","2018-08-26 21:35:45");
INSERT INTO product_sales VALUES("14","8","5","","2","2","1440","0","10","288","3168","2018-09-01 19:39:54","2018-09-01 19:39:54");
INSERT INTO product_sales VALUES("15","9","4","","10","1","2","0","0","0","20","2018-09-02 17:33:14","2018-09-02 17:33:14");
INSERT INTO product_sales VALUES("16","10","3","","1","1","250","0","0","0","250","2018-09-02 19:01:39","2018-09-02 19:01:39");
INSERT INTO product_sales VALUES("17","11","22","","5","1","1000","0","10","500","5500","2018-09-03 00:08:21","2018-09-03 00:08:21");
INSERT INTO product_sales VALUES("18","12","22","","10","1","1050","0","10","1050","11550","2018-09-03 00:10:33","2018-09-03 00:10:33");
INSERT INTO product_sales VALUES("46","29","5","","1","1","120","0","0","0","120","2018-09-08 23:38:41","2018-09-08 23:38:41");
INSERT INTO product_sales VALUES("47","30","1","","1","1","400","0","10","40","440","2018-09-09 18:57:06","2018-09-20 05:12:38");
INSERT INTO product_sales VALUES("48","31","1","","1","1","400","0","10","40","440","2018-09-25 23:20:59","2018-09-25 23:21:25");
INSERT INTO product_sales VALUES("49","31","2","","1","2","104.35","0","15","15.65","120","2018-09-25 23:20:59","2018-09-25 23:21:25");
INSERT INTO product_sales VALUES("50","32","1","","1","1","400","0","10","40","440","2018-10-03 23:55:48","2018-10-03 23:55:48");
INSERT INTO product_sales VALUES("51","33","1","","1","1","400","0","10","40","440","2018-10-04 00:00:23","2018-10-04 00:00:23");
INSERT INTO product_sales VALUES("57","37","3","","1","1","250","0","0","0","250","2018-10-06 20:46:05","2018-10-06 20:46:05");
INSERT INTO product_sales VALUES("58","38","1","","1","1","400","0","10","40","440","2018-10-06 20:47:19","2018-10-06 20:47:19");
INSERT INTO product_sales VALUES("61","40","1","","1","1","400","0","10","40","440","2018-10-06 21:13:12","2018-10-06 21:13:12");
INSERT INTO product_sales VALUES("62","41","1","","1","1","400","0","10","40","440","2018-10-09 18:16:21","2018-10-09 18:16:21");
INSERT INTO product_sales VALUES("63","41","13","","1","0","21","0","0","0","21","2018-10-09 18:16:21","2018-10-09 18:16:21");
INSERT INTO product_sales VALUES("64","42","1","","1","1","400","0","10","40","440","2018-10-09 19:34:51","2018-10-09 19:34:51");
INSERT INTO product_sales VALUES("65","43","1","","1","1","400","0","10","40","440","2018-10-15 17:34:35","2018-10-15 17:34:35");
INSERT INTO product_sales VALUES("78","55","3","","1","1","250","0","0","0","250","2018-10-20 20:53:34","2018-10-20 20:53:34");
INSERT INTO product_sales VALUES("80","57","1","","1","1","400","0","10","40","440","2018-10-20 22:26:12","2018-10-20 22:26:12");
INSERT INTO product_sales VALUES("81","57","13","","2","0","21","0","0","0","42","2018-10-20 22:26:13","2018-10-20 22:26:13");
INSERT INTO product_sales VALUES("82","58","22","","1","1","1000","0","10","100","1100","2018-10-22 05:27:24","2018-10-22 05:27:24");
INSERT INTO product_sales VALUES("83","58","5","","1","1","120","0","0","0","120","2018-10-22 05:27:24","2018-10-22 05:27:24");
INSERT INTO product_sales VALUES("101","73","25","","3","1","1000","0","10","300","3300","2018-10-22 21:15:43","2018-10-22 21:15:43");
INSERT INTO product_sales VALUES("102","73","22","","2","1","1000","0","10","200","2200","2018-10-22 21:15:44","2018-10-22 21:15:44");
INSERT INTO product_sales VALUES("103","74","22","","1","1","1000","0","10","100","1100","2018-10-22 21:16:44","2018-10-22 21:16:44");
INSERT INTO product_sales VALUES("104","74","25","","1","1","1000","0","10","100","1100","2018-10-22 21:16:44","2018-10-22 21:16:44");
INSERT INTO product_sales VALUES("105","74","5","","1","1","120","0","0","0","120","2018-10-22 21:16:44","2018-10-22 21:16:44");
INSERT INTO product_sales VALUES("106","75","2","","3","2","104.35","0","15","46.96","360","2018-10-31 19:00:27","2018-10-31 19:00:27");
INSERT INTO product_sales VALUES("107","75","22","","2","1","1000","0","10","200","2200","2018-10-31 19:00:27","2018-10-31 19:00:27");
INSERT INTO product_sales VALUES("108","75","25","","3","1","1000","0","10","300","3300","2018-10-31 19:00:27","2018-10-31 19:00:27");
INSERT INTO product_sales VALUES("109","75","1","","2","1","400","0","10","80","880","2018-10-31 19:00:27","2018-10-31 19:00:27");
INSERT INTO product_sales VALUES("110","75","5","","2","1","120","0","0","0","240","2018-10-31 19:00:27","2018-10-31 19:00:27");
INSERT INTO product_sales VALUES("111","76","3","","1","1","250","0","0","0","250","2018-10-31 19:01:26","2018-11-02 23:28:56");
INSERT INTO product_sales VALUES("112","76","22","","1","1","1000","0","10","100","1100","2018-10-31 19:01:27","2018-11-02 23:28:56");
INSERT INTO product_sales VALUES("113","76","13","","4","0","21","0","0","0","84","2018-10-31 19:01:27","2018-11-02 23:28:56");
INSERT INTO product_sales VALUES("117","79","1","","4","1","400","0","10","160","1760","2018-11-04 22:15:17","2018-11-04 22:15:17");
INSERT INTO product_sales VALUES("118","79","2","","7","2","104.35","0","15","109.57","840","2018-11-04 22:15:17","2018-11-04 22:15:17");
INSERT INTO product_sales VALUES("119","79","3","","7","1","250","0","0","0","1750","2018-11-04 22:15:17","2018-11-04 22:15:17");
INSERT INTO product_sales VALUES("120","79","4","","7","1","2","0","0","0","14","2018-11-04 22:15:17","2018-11-04 22:15:17");
INSERT INTO product_sales VALUES("121","79","22","","8","1","1000","0","10","800","8800","2018-11-04 22:15:17","2018-11-04 22:15:17");
INSERT INTO product_sales VALUES("122","79","13","","10","0","21","0","0","0","210","2018-11-04 22:15:17","2018-11-04 22:15:17");
INSERT INTO product_sales VALUES("123","79","5","","9","1","120","0","0","0","1080","2018-11-04 22:15:17","2018-11-04 22:15:17");
INSERT INTO product_sales VALUES("124","80","2","","2","2","104.35","0","15","31.3","240","2018-11-04 22:19:58","2018-11-04 22:19:58");
INSERT INTO product_sales VALUES("125","80","3","","2","1","250","0","0","0","500","2018-11-04 22:19:58","2018-11-04 22:19:58");
INSERT INTO product_sales VALUES("126","80","1","","4","1","400","0","10","160","1760","2018-11-04 22:19:58","2018-11-04 22:19:58");
INSERT INTO product_sales VALUES("132","86","22","","1","1","1000","0","10","100","1100","2018-11-04 22:59:48","2018-11-04 22:59:48");
INSERT INTO product_sales VALUES("134","88","22","","1","1","1000","0","10","100","1100","2018-11-04 23:02:58","2018-11-04 23:02:58");
INSERT INTO product_sales VALUES("142","94","2","","1","2","104.35","0","15","15.65","120","2018-11-26 03:05:34","2018-11-26 03:05:34");
INSERT INTO product_sales VALUES("143","95","5","","3","1","120","0","0","0","360","2018-11-26 22:36:08","2018-11-26 22:36:08");
INSERT INTO product_sales VALUES("144","95","5","","3","1","120","0","0","0","360","2018-11-26 22:36:08","2018-11-26 22:36:08");
INSERT INTO product_sales VALUES("145","96","2","","1","2","104.35","0","15","15.65","120","2018-11-27 20:15:09","2018-11-27 20:15:09");
INSERT INTO product_sales VALUES("146","97","2","","2","2","104.35","0","15","31.3","240","2018-11-30 19:05:18","2018-11-30 19:05:18");
INSERT INTO product_sales VALUES("147","97","10","","1","7","22","0","0","0","22","2018-11-30 19:05:18","2018-11-30 19:05:18");
INSERT INTO product_sales VALUES("148","98","30","","2","1","100","0","0","0","200","2018-12-04 18:35:58","2018-12-04 18:35:58");
INSERT INTO product_sales VALUES("149","98","31","","2","1","300","0","0","0","600","2018-12-04 18:35:58","2018-12-04 18:35:58");
INSERT INTO product_sales VALUES("150","99","30","","2","1","100","0","0","0","200","2018-12-04 18:37:19","2018-12-04 18:37:19");
INSERT INTO product_sales VALUES("151","99","31","","2","1","300","0","0","0","600","2018-12-04 18:37:20","2018-12-04 18:37:20");
INSERT INTO product_sales VALUES("153","101","30","","1","1","100","0","0","0","100","2018-12-07 19:20:26","2018-12-07 19:20:26");
INSERT INTO product_sales VALUES("155","103","2","","1","2","104.35","0","15","15.65","120","2018-12-23 17:58:32","2018-12-23 17:58:32");
INSERT INTO product_sales VALUES("156","104","33","","4","1","2","0","0","0","8","2018-12-23 22:15:27","2018-12-24 16:55:23");
INSERT INTO product_sales VALUES("157","104","26","","2","0","1250","0","0","0","2500","2018-12-24 16:47:54","2018-12-24 16:55:23");
INSERT INTO product_sales VALUES("158","105","13","","1","0","21","0","0","0","21","2018-12-31 18:45:38","2018-12-31 18:45:38");
INSERT INTO product_sales VALUES("159","106","2","","1","2","104.35","0","15","15.65","120","2018-12-31 22:10:40","2018-12-31 22:10:40");
INSERT INTO product_sales VALUES("160","106","3","","2","1","250","0","0","0","500","2018-12-31 22:10:40","2018-12-31 22:10:40");
INSERT INTO product_sales VALUES("161","106","5","","2","1","120","0","0","0","240","2018-12-31 22:10:40","2018-12-31 22:10:40");
INSERT INTO product_sales VALUES("162","107","3","","2","1","250","0","0","0","500","2019-01-02 19:56:27","2019-01-02 19:56:27");
INSERT INTO product_sales VALUES("163","107","5","","2","1","120","0","0","0","240","2019-01-02 19:56:27","2019-01-02 19:56:27");
INSERT INTO product_sales VALUES("164","107","22","","2","1","1000","0","10","200","2200","2019-01-02 19:56:27","2019-01-02 19:56:27");
INSERT INTO product_sales VALUES("165","107","25","","1","1","1000","0","10","100","1100","2019-01-02 19:56:27","2019-01-02 19:56:27");
INSERT INTO product_sales VALUES("166","107","1","","2","1","400","0","10","80","880","2019-01-02 19:56:27","2019-01-02 19:56:27");
INSERT INTO product_sales VALUES("167","107","2","","1","2","104.35","0","15","15.65","120","2019-01-02 19:56:27","2019-01-02 19:56:27");
INSERT INTO product_sales VALUES("168","108","2","","1","2","104.35","0","15","15.65","120","2019-01-20 04:58:24","2019-01-20 04:58:24");
INSERT INTO product_sales VALUES("169","109","1","","1","1","400","0","10","40","440","2019-01-28 23:14:43","2019-01-28 23:14:43");
INSERT INTO product_sales VALUES("170","109","30","","1","1","100","0","0","0","100","2019-01-28 23:14:43","2019-01-28 23:14:43");
INSERT INTO product_sales VALUES("171","110","31","","2","1","300","0","0","0","600","2019-01-29 00:50:41","2019-01-29 00:50:41");
INSERT INTO product_sales VALUES("172","110","25","","1","1","1000","0","10","100","1100","2019-01-29 00:50:41","2019-01-29 00:50:41");
INSERT INTO product_sales VALUES("173","111","3","","1","1","250","0","0","0","250","2019-01-31 00:08:39","2019-01-31 00:08:39");
INSERT INTO product_sales VALUES("174","111","13","","1","0","21","0","0","0","21","2019-01-31 00:08:39","2019-01-31 00:08:39");
INSERT INTO product_sales VALUES("175","112","1","","1","1","400","0","10","40","440","2019-02-01 23:40:45","2019-02-01 23:40:45");
INSERT INTO product_sales VALUES("176","113","3","","1","1","250","0","0","0","250","2019-02-02 00:41:17","2019-02-02 00:41:17");
INSERT INTO product_sales VALUES("177","113","30","","1","1","100","0","0","0","100","2019-02-02 00:41:17","2019-02-02 00:41:17");
INSERT INTO product_sales VALUES("178","114","1","","1","1","400","0","10","40","440","2019-02-05 04:04:45","2019-02-05 04:04:45");
INSERT INTO product_sales VALUES("183","118","1","","1","1","400","0","10","40","440","2019-02-07 00:15:42","2019-02-07 00:15:42");
INSERT INTO product_sales VALUES("185","120","1","","1","1","400","0","10","40","440","2019-02-07 00:40:37","2019-02-07 00:40:37");
INSERT INTO product_sales VALUES("186","121","3","","1","1","250","0","0","0","250","2019-02-08 23:48:14","2019-02-08 23:48:14");
INSERT INTO product_sales VALUES("187","121","2","","1","2","104.35","0","15","15.65","120","2019-02-08 23:48:14","2019-02-08 23:48:14");
INSERT INTO product_sales VALUES("188","121","4","","10","1","2","0","0","0","20","2019-02-08 23:48:15","2019-02-08 23:48:15");
INSERT INTO product_sales VALUES("189","121","13","","2","0","21","0","0","0","42","2019-02-08 23:48:15","2019-02-08 23:48:15");
INSERT INTO product_sales VALUES("190","121","1","","1","1","400","0","10","40","440","2019-02-08 23:48:15","2019-02-08 23:48:15");
INSERT INTO product_sales VALUES("191","121","31","","1","1","300","0","0","0","300","2019-02-08 23:48:15","2019-02-08 23:48:15");
INSERT INTO product_sales VALUES("192","121","30","","1","1","100","0","0","0","100","2019-02-08 23:48:15","2019-02-08 23:48:15");
INSERT INTO product_sales VALUES("194","123","1","","1","1","400","0","10","40","440","2019-02-19 03:32:14","2019-02-19 03:32:14");
INSERT INTO product_sales VALUES("198","127","31","","1","1","300","0","0","0","300","2019-03-02 23:40:10","2019-03-02 23:40:10");
INSERT INTO product_sales VALUES("199","127","25","","1","1","1000","0","10","100","1100","2019-03-02 23:40:10","2019-03-02 23:40:10");
INSERT INTO product_sales VALUES("200","127","22","","1","1","1000","0","10","100","1100","2019-03-02 23:40:10","2019-03-02 23:40:10");
INSERT INTO product_sales VALUES("201","128","1","","1","1","400","0","10","40","440","2019-04-03 23:55:55","2019-04-03 23:55:55");
INSERT INTO product_sales VALUES("202","128","2","","1","2","104.35","0","15","15.65","120","2019-04-03 23:55:55","2019-04-03 23:55:55");
INSERT INTO product_sales VALUES("203","129","5","","2","1","120","0","0","0","240","2019-04-03 23:59:37","2019-04-11 00:50:16");
INSERT INTO product_sales VALUES("204","130","1","","1","1","400","0","10","40","440","2019-04-21 02:21:24","2019-04-21 02:21:24");
INSERT INTO product_sales VALUES("205","130","2","","1","2","125.22","0","15","18.78","144","2019-04-21 02:21:24","2019-04-21 02:21:24");
INSERT INTO product_sales VALUES("206","130","4","","1","1","2","0","0","0","2","2019-04-21 02:21:24","2019-04-21 02:21:24");
INSERT INTO product_sales VALUES("207","131","1","","1","1","400","0","10","40","440","2019-05-28 00:32:29","2019-05-28 00:32:29");
INSERT INTO product_sales VALUES("208","131","3","","1","1","250","0","0","0","250","2019-05-28 00:32:29","2019-05-28 00:32:29");
INSERT INTO product_sales VALUES("209","131","25","","1","1","1000","0","10","100","1100","2019-05-28 00:32:29","2019-05-28 00:32:29");
INSERT INTO product_sales VALUES("210","131","22","","1","1","1000","0","10","100","1100","2019-05-28 00:32:29","2019-05-28 00:32:29");
INSERT INTO product_sales VALUES("211","132","1","","1","1","400","0","10","40","440","2019-06-13 00:16:37","2019-06-13 00:16:37");
INSERT INTO product_sales VALUES("212","132","30","","1","1","100","0","0","0","100","2019-06-13 00:16:37","2019-06-13 00:16:37");
INSERT INTO product_sales VALUES("213","132","31","","1","1","300","0","0","0","300","2019-06-13 00:16:37","2019-06-13 00:16:37");
INSERT INTO product_sales VALUES("214","133","3","","2","1","250","0","0","0","500","2019-06-13 00:17:51","2019-06-13 00:17:51");
INSERT INTO product_sales VALUES("215","133","25","","1","1","1000","0","10","100","1100","2019-06-13 00:17:52","2019-06-13 00:17:52");
INSERT INTO product_sales VALUES("216","133","22","","1","1","1000","0","10","100","1100","2019-06-13 00:17:52","2019-06-13 00:17:52");
INSERT INTO product_sales VALUES("217","134","1","","1","1","400","0","10","40","440","2019-10-19 05:30:28","2019-10-19 05:30:28");
INSERT INTO product_sales VALUES("218","134","22","","1","1","1000","0","10","100","1100","2019-10-19 05:30:28","2019-10-19 05:30:28");
INSERT INTO product_sales VALUES("219","134","25","","1","1","1000","0","10","100","1100","2019-10-19 05:30:28","2019-10-19 05:30:28");
INSERT INTO product_sales VALUES("220","134","31","","1","1","300","0","0","0","300","2019-10-19 05:30:28","2019-10-19 05:30:28");
INSERT INTO product_sales VALUES("224","138","5","","1","1","120","0","0","0","120","2019-10-31 02:29:37","2019-10-31 02:29:37");
INSERT INTO product_sales VALUES("225","139","2","","2","2","125.22","0","15","37.57","288","2019-11-03 01:40:44","2019-11-03 01:40:44");
INSERT INTO product_sales VALUES("226","139","4","","100","1","2","0","0","0","200","2019-11-03 01:40:44","2019-11-03 01:40:44");
INSERT INTO product_sales VALUES("236","144","22","","1","1","1000","0","10","100","1100","2019-11-09 08:41:31","2019-11-09 08:41:31");
INSERT INTO product_sales VALUES("237","144","5","","1","1","120","0","0","0","120","2019-11-09 08:41:31","2019-11-09 08:41:31");
INSERT INTO product_sales VALUES("241","147","22","","1","1","1000","0","10","100","1100","2019-11-10 23:40:08","2019-11-10 23:40:08");
INSERT INTO product_sales VALUES("242","147","25","","1","1","1000","0","10","100","1100","2019-11-10 23:40:08","2019-11-10 23:40:08");
INSERT INTO product_sales VALUES("243","147","4","","10","1","2","0","0","0","20","2019-11-10 23:40:08","2019-11-10 23:40:08");
INSERT INTO product_sales VALUES("282","172","1","","1","1","400","0","10","40","440","2019-12-03 04:46:31","2019-12-03 04:46:31");
INSERT INTO product_sales VALUES("283","173","3","","1","1","225","0","0","0","225","2019-12-04 12:19:40","2019-12-04 12:19:40");
INSERT INTO product_sales VALUES("284","173","1","","1","1","360","0","10","36","396","2019-12-04 12:19:40","2019-12-04 12:19:40");
INSERT INTO product_sales VALUES("306","187","2","","2","2","125.22","0","15","37.57","288","2019-12-21 23:40:58","2019-12-21 23:40:58");
INSERT INTO product_sales VALUES("308","190","22","","1","1","1000","0","10","100","1100","2019-12-23 01:59:46","2019-12-23 01:59:46");
INSERT INTO product_sales VALUES("312","193","25","","1","1","1000","0","10","100","1100","2020-01-01 03:20:28","2020-01-01 03:20:28");
INSERT INTO product_sales VALUES("313","194","1","","2","1","400","0","10","80","880","2020-01-02 05:39:47","2020-01-02 05:39:47");
INSERT INTO product_sales VALUES("314","194","2","","1","1","10.43","0","15","1.57","12","2020-01-02 05:39:47","2020-01-02 05:39:47");
INSERT INTO product_sales VALUES("323","201","5","","1","1","120","0","0","0","120","2020-02-03 04:52:56","2020-02-03 04:52:56");
INSERT INTO product_sales VALUES("324","202","25","","1","1","1000","0","10","100","1100","2020-02-04 11:58:53","2020-02-04 11:58:53");
INSERT INTO product_sales VALUES("325","202","31","","1","1","300","0","0","0","300","2020-02-04 11:58:53","2020-02-04 11:58:53");
INSERT INTO product_sales VALUES("326","203","3","","1","1","250","0","0","0","250","2020-03-02 00:54:14","2020-03-02 00:54:14");
INSERT INTO product_sales VALUES("327","203","30","","1","1","100","0","0","0","100","2020-03-02 00:54:14","2020-03-02 00:54:14");
INSERT INTO product_sales VALUES("328","204","4","","20","1","2","0","0","0","40","2020-03-02 00:57:41","2020-03-02 00:57:41");
INSERT INTO product_sales VALUES("329","205","1","","1","1","400","0","10","40","440","2020-03-11 06:46:42","2020-03-11 06:46:42");
INSERT INTO product_sales VALUES("330","206","5","","1","1","120","0","0","0","120","2020-03-11 06:52:30","2020-03-11 06:54:04");
INSERT INTO product_sales VALUES("331","207","30","","2","1","100","0","0","0","200","2020-04-06 09:40:24","2020-04-06 09:41:11");
INSERT INTO product_sales VALUES("332","207","31","","1","1","300","0","0","0","300","2020-04-06 09:40:24","2020-04-06 09:41:11");
INSERT INTO product_sales VALUES("333","207","2","","1","2","125.22","0","15","18.78","144","2020-04-06 09:41:11","2020-04-06 09:41:11");
INSERT INTO product_sales VALUES("334","208","25","","1","1","1000","0","10","100","1100","2020-05-06 12:59:50","2020-05-06 12:59:50");
INSERT INTO product_sales VALUES("335","208","1","","1","1","400","0","10","40","440","2020-05-06 12:59:50","2020-05-06 12:59:50");
INSERT INTO product_sales VALUES("336","209","5","","1","1","120","0","0","0","120","2020-06-09 02:42:48","2020-06-09 02:42:48");
INSERT INTO product_sales VALUES("337","209","25","","1","1","1000","0","10","100","1100","2020-06-09 02:42:48","2020-06-09 02:42:48");
INSERT INTO product_sales VALUES("340","212","1","","1","1","350","0","10","35","385","2020-07-03 08:39:14","2020-07-03 08:39:14");
INSERT INTO product_sales VALUES("341","212","25","","1","1","1000","0","10","100","1100","2020-07-03 08:39:14","2020-07-03 08:39:14");
INSERT INTO product_sales VALUES("342","212","22","","1","1","1000","0","10","100","1100","2020-07-03 08:39:14","2020-07-03 08:39:14");
INSERT INTO product_sales VALUES("343","213","48","2","1","1","13","0","0","0","13","2020-07-12 11:51:53","2020-07-12 11:51:53");
INSERT INTO product_sales VALUES("344","214","3","","1","1","250","0","0","0","250","2020-07-14 01:53:41","2020-07-14 01:53:41");
INSERT INTO product_sales VALUES("347","217","1","","1","1","350","0","10","35","385","2020-07-27 10:38:08","2020-07-27 10:38:08");
INSERT INTO product_sales VALUES("348","218","1","","1","1","350","0","10","35","385","2020-07-27 10:40:24","2020-07-27 10:40:24");
INSERT INTO product_sales VALUES("349","219","1","","1","1","350","0","10","35","385","2020-07-27 10:46:45","2020-07-27 10:46:45");
INSERT INTO product_sales VALUES("350","220","31","","2","1","300","0","0","0","600","2020-08-12 08:28:04","2020-08-12 08:28:04");
INSERT INTO product_sales VALUES("351","220","33","","3","1","20","0","0","0","60","2020-08-12 08:28:04","2020-08-12 08:28:04");
INSERT INTO product_sales VALUES("352","220","30","","1","1","100","0","0","0","100","2020-08-12 08:28:04","2020-08-12 08:28:04");
INSERT INTO product_sales VALUES("353","221","25","","1","1","1000","0","10","100","1100","2020-08-12 08:30:35","2020-08-12 08:30:35");
INSERT INTO product_sales VALUES("354","222","61","","2","1","10000","0","15","3000","23000","2020-08-16 12:04:24","2020-08-16 12:04:24");
INSERT INTO product_sales VALUES("355","223","1","","1","1","400","0","10","40","440","2020-08-16 12:05:23","2020-08-16 12:05:23");
INSERT INTO product_sales VALUES("356","224","1","","3","1","390","30","10","117","1287","2020-08-26 10:01:39","2020-08-26 10:01:39");
INSERT INTO product_sales VALUES("362","230","3","","1","1","250","0","0","0","250","2020-10-17 11:28:52","2020-10-17 11:28:52");
INSERT INTO product_sales VALUES("363","231","1","","1","1","400","0","10","40","440","2020-10-18 01:13:33","2020-10-18 01:13:33");
INSERT INTO product_sales VALUES("364","232","30","","1","1","100","0","0","0","100","2020-10-22 03:30:14","2020-10-22 03:30:14");
INSERT INTO product_sales VALUES("365","233","3","","1","1","250","0","0","0","250","2020-10-22 03:56:04","2020-10-22 03:56:04");
INSERT INTO product_sales VALUES("366","234","61","","1","1","10000","0","15","1500","11500","2020-10-23 21:05:06","2020-10-23 21:05:06");
INSERT INTO product_sales VALUES("367","235","3","","1","1","250","0","0","0","250","2020-10-23 21:07:52","2020-10-23 21:07:52");
INSERT INTO product_sales VALUES("369","237","25","","2","1","1000","0","10","200","2200","2020-10-24 05:46:01","2020-10-24 05:46:01");
INSERT INTO product_sales VALUES("370","237","22","","2","1","1000","0","10","200","2200","2020-10-24 05:46:01","2020-10-24 05:46:01");
INSERT INTO product_sales VALUES("371","237","61","","5","1","10000","0","15","7500","57500","2020-10-24 05:46:01","2020-10-24 05:46:01");
INSERT INTO product_sales VALUES("373","239","60","9","1","1","2","0","0","0","2","2020-10-26 19:40:02","2020-10-26 19:40:02");
INSERT INTO product_sales VALUES("374","240","60","9","2","1","3","0","0","0","6","2020-10-26 19:42:06","2020-10-26 19:42:06");
INSERT INTO product_sales VALUES("375","241","3","","1","1","250","0","0","0","250","2020-10-26 20:32:00","2020-10-26 20:32:00");
INSERT INTO product_sales VALUES("376","242","3","","1","1","250","0","0","0","250","2020-10-28 21:30:30","2020-10-28 21:30:30");
INSERT INTO product_sales VALUES("377","243","3","","1","1","250","0","0","0","250","2020-10-31 21:21:12","2020-10-31 21:21:12");
INSERT INTO product_sales VALUES("380","245","1","","2","1","400","0","10","80","880","2020-10-31 21:42:23","2020-10-31 21:42:23");
INSERT INTO product_sales VALUES("381","245","3","","1","1","250","0","0","0","250","2020-10-31 21:42:23","2020-10-31 21:42:23");
INSERT INTO product_sales VALUES("382","246","1","","1","1","400","0","10","40","440","2020-10-31 21:50:18","2020-11-02 05:39:17");
INSERT INTO product_sales VALUES("386","250","1","","1","1","344","0","10","34.4","378.4","2020-11-06 02:30:41","2020-11-06 02:30:41");
INSERT INTO product_sales VALUES("387","251","1","","1","1","344","0","10","34.4","378.4","2020-11-09 02:15:24","2020-11-09 02:15:24");
INSERT INTO product_sales VALUES("388","251","3","","1","1","232.2","0","0","0","232.2","2020-11-09 02:15:24","2020-11-09 02:15:24");
INSERT INTO product_sales VALUES("389","252","3","","1","1","229.5","0","0","0","229.5","2020-11-10 18:58:58","2020-11-10 18:58:58");
INSERT INTO product_sales VALUES("390","253","3","","1","1","212.5","0","0","0","212.5","2020-11-13 19:47:36","2020-11-13 19:47:36");
INSERT INTO product_sales VALUES("391","253","31","","1","1","255","0","0","0","255","2020-11-13 19:47:36","2020-11-13 19:47:36");
INSERT INTO product_sales VALUES("392","253","61","","1","1","8500","0","15","1275","9775","2020-11-13 19:47:36","2020-11-13 19:47:36");
INSERT INTO product_sales VALUES("395","256","1","","1","1","400","0","10","40","440","2020-11-16 19:47:48","2020-11-16 19:47:48");
INSERT INTO product_sales VALUES("396","256","3","","1","1","250","0","10","25","275","2020-11-16 19:47:48","2020-11-16 19:47:48");
INSERT INTO product_sales VALUES("397","257","3","","1","1","250","0","0","0","250","2020-11-16 20:09:19","2020-11-16 20:09:19");
INSERT INTO product_sales VALUES("398","258","61","","3","1","10000","0","15","4500","34500","2020-11-17 19:52:39","2020-11-17 19:52:39");
INSERT INTO product_sales VALUES("399","259","4","","1","1","178.5","0","0","0","178.5","2020-12-01 22:38:07","2020-12-01 22:38:07");
INSERT INTO product_sales VALUES("400","259","26","","1","0","111562.5","0","0","0","111562.5","2020-12-01 22:38:07","2020-12-01 22:38:07");
INSERT INTO product_sales VALUES("401","260","69","","1","1","20863.64","0","10","2086.36","22950","2020-12-29 22:07:46","2020-12-29 22:07:46");
INSERT INTO product_sales VALUES("402","261","70","","5","1","502","0","0","0","2510","2021-01-05 17:39:50","2021-01-05 17:39:50");
INSERT INTO product_sales VALUES("403","262","32","","6","1","10","0","0","0","60","2021-01-06 21:56:12","2021-01-06 21:56:12");
INSERT INTO product_sales VALUES("404","262","3","","1","1","250","0","0","0","250","2021-01-06 21:56:12","2021-01-06 21:56:12");
INSERT INTO product_sales VALUES("405","262","25","","1","1","1000","0","10","100","1100","2021-01-06 21:56:12","2021-01-06 21:56:12");
INSERT INTO product_sales VALUES("406","262","2","","1","2","125.22","0","15","18.78","144","2021-01-06 21:56:13","2021-01-06 21:56:13");
INSERT INTO product_sales VALUES("408","265","1","","1","1","400","0","10","40","440","2021-01-07 01:09:25","2021-01-07 01:09:25");
INSERT INTO product_sales VALUES("409","266","70","","5","1","598","0","0","0","598","","");
INSERT INTO product_sales VALUES("410","267","70","","3","1","598","0","0","0","598","2021-01-13 17:17:41","2021-01-13 17:17:41");
INSERT INTO product_sales VALUES("411","267","68","","5","1","300","0","0","0","300","2021-01-13 17:17:41","2021-01-13 17:17:41");
INSERT INTO product_sales VALUES("412","268","48","","1","1","3","0","0","0","3","2021-01-13 18:45:06","2021-01-13 18:45:06");
INSERT INTO product_sales VALUES("413","268","32","","3","1","10","0","0","0","30","2021-01-13 18:45:06","2021-01-13 18:45:06");
INSERT INTO product_sales VALUES("414","269","71","","10","1","600","0","0","0","6000","2021-01-15 18:48:44","2021-01-15 18:48:44");
INSERT INTO product_sales VALUES("415","270","68","","1","1","300","0","0","0","300","2021-01-17 19:11:50","2021-01-17 19:11:50");
INSERT INTO product_sales VALUES("419","274","3","","5","1","250","0","0","0","1250","2021-01-22 20:16:16","2021-01-22 20:16:16");
INSERT INTO product_sales VALUES("420","275","71","","5","1","600","0","0","0","3000","2021-01-22 20:25:09","2021-01-22 20:25:09");
INSERT INTO product_sales VALUES("421","276","13","","2","0","21","0","0","0","42","2021-01-22 23:59:07","2021-01-22 23:59:07");
INSERT INTO product_sales VALUES("426","280","71","","2","1","600","0","0","0","1200","2021-01-27 23:27:58","2021-01-27 23:27:58");
INSERT INTO product_sales VALUES("427","281","32","","4","1","10","0","0","0","40","2021-01-27 23:28:46","2021-01-27 23:28:46");
INSERT INTO product_sales VALUES("428","285","91","","1","1","1974.35","0","0","0","2034.35","2021-01-27 23:49:18","2021-01-27 23:49:18");
INSERT INTO product_sales VALUES("429","286","94","","1","1","2045.24","0","0","0","2105.24","2021-01-27 23:52:20","2021-01-27 23:52:20");
INSERT INTO product_sales VALUES("430","287","92","","1","1","454.37","0","0","0","514.37","2021-01-29 17:25:47","2021-01-29 17:25:47");
INSERT INTO product_sales VALUES("431","287","90","","1","1","1044.7","0","0","0","1104.7","2021-01-29 17:25:47","2021-01-29 17:25:47");
INSERT INTO product_sales VALUES("432","288","94","","1","1","2045","0","0","0","2145","2021-01-29 23:42:28","2021-01-29 23:42:28");
INSERT INTO product_sales VALUES("433","288","93","","2","1","918","0","0","0","1936","2021-01-29 23:42:28","2021-01-29 23:42:28");
INSERT INTO product_sales VALUES("434","289","92","","1","1","454","0","0","0","514","2021-01-30 00:54:07","2021-01-30 00:54:07");
INSERT INTO product_sales VALUES("435","289","89","","1","1","754","0","0","0","814","2021-01-30 00:54:07","2021-01-30 00:54:07");
INSERT INTO product_sales VALUES("436","290","76","","1","1","1331","0","0","0","1431","2021-01-30 01:02:31","2021-01-30 01:02:31");
INSERT INTO product_sales VALUES("437","290","77","","1","1","2085","0","0","0","2185","2021-01-30 01:02:31","2021-01-30 01:02:31");
INSERT INTO product_sales VALUES("438","291","81","","1","1","44561","0","0","0","44621","2021-01-30 01:04:51","2021-01-30 01:04:51");
INSERT INTO product_sales VALUES("439","291","83","","1","1","125018","0","0","0","125078","2021-01-30 01:04:51","2021-01-30 01:04:51");
INSERT INTO product_sales VALUES("440","292","94","","2","1","2045","0","0","0","4150","2021-01-30 18:57:22","2021-01-30 18:57:22");
INSERT INTO product_sales VALUES("441","292","73","","1","1","1149","0","0","0","1209","2021-01-30 18:57:22","2021-01-30 18:57:22");
INSERT INTO product_sales VALUES("442","293","92","","1","1","454","0","0","0","454","2021-01-30 19:09:40","2021-01-30 19:09:40");
INSERT INTO product_sales VALUES("443","294","10","","2.5","7","22","0","0","0","55","2021-02-01 19:24:17","2021-02-01 19:24:17");
INSERT INTO product_sales VALUES("444","294","13","","1","0","21","0","0","0","21","2021-02-01 19:24:17","2021-02-01 19:24:17");
INSERT INTO product_sales VALUES("446","296","92","","1","1","454","0","0","0","454","2021-02-02 20:23:54","2021-02-02 20:23:54");
INSERT INTO product_sales VALUES("447","297","82","","1","1","46683","0","0","0","46683","2021-02-02 20:37:07","2021-02-02 20:37:07");
INSERT INTO product_sales VALUES("448","298","73","","1","1","1149","0","0","0","1149","2021-02-02 20:41:07","2021-02-02 20:41:07");
INSERT INTO product_sales VALUES("449","299","92","","1","1","454","0","0","0","454","2021-02-02 22:24:31","2021-02-02 22:24:31");
INSERT INTO product_sales VALUES("450","300","92","","1","1","454","0","0","0","454","2021-02-02 22:30:11","2021-02-02 22:30:11");
INSERT INTO product_sales VALUES("451","301","93","","2","1","918","0","0","0","1836","2021-02-02 22:50:50","2021-02-02 22:50:50");
INSERT INTO product_sales VALUES("452","302","93","","1","1","918","0","0","0","918","2021-02-02 23:07:40","2021-02-02 23:07:40");
INSERT INTO product_sales VALUES("453","303","93","","1","1","918","0","0","0","918","2021-02-03 00:17:33","2021-02-03 00:17:33");
INSERT INTO product_sales VALUES("454","304","92","","1","1","454","0","0","0","454","2021-02-03 19:52:29","2021-02-03 19:52:29");
INSERT INTO product_sales VALUES("455","305","91","","1","1","1974","0","0","0","1974","2021-02-03 19:53:51","2021-02-03 19:53:51");
INSERT INTO product_sales VALUES("456","306","78","","3","1","1152","0","0","0","3456","2021-02-03 19:57:19","2021-02-03 19:57:19");
INSERT INTO product_sales VALUES("457","307","92","","1","1","454","0","0","0","454","2021-02-03 22:27:30","2021-02-03 22:27:30");
INSERT INTO product_sales VALUES("458","308","1","","2","1","340","20","10","68","748","2021-02-07 23:01:48","2021-02-07 23:01:48");
INSERT INTO product_sales VALUES("459","308","2","","1","2","104.35","0","15","15.65","120","2021-02-07 23:01:48","2021-02-07 23:01:48");
INSERT INTO product_sales VALUES("460","308","13","","2","0","21","0","0","0","42","2021-02-07 23:01:49","2021-02-07 23:01:49");
INSERT INTO product_sales VALUES("461","309","73","","3","1","1149","0","0","0","3447","2021-02-07 23:16:26","2021-02-07 23:16:26");
INSERT INTO product_sales VALUES("462","310","95","","1","1","68000","0","0","0","68000","2021-02-08 21:56:21","2021-02-08 21:56:21");
INSERT INTO product_sales VALUES("463","311","73","","2","1","1149","0","0","0","2298","2021-02-12 19:51:58","2021-02-12 19:51:58");
INSERT INTO product_sales VALUES("464","311","82","","2","1","46683","0","0","0","93366","2021-02-12 19:51:58","2021-02-12 19:51:58");
INSERT INTO product_sales VALUES("465","311","87","","2","1","10832","0","0","0","21664","2021-02-12 19:51:58","2021-02-12 19:51:58");
INSERT INTO product_sales VALUES("466","312","73","","1","1","1149","0","0","0","1149","2021-02-12 19:53:54","2021-02-12 19:53:54");
INSERT INTO product_sales VALUES("467","313","2","","1","2","112.7","0","15","16.9","129.6","2022-03-21 19:29:03","2022-03-21 19:29:03");
INSERT INTO product_sales VALUES("468","314","101","","1","1","5000","0","0","0","5000","2022-03-21 20:52:23","2022-03-21 20:52:23");
INSERT INTO product_sales VALUES("469","315","101","","1","1","5000","0","0","0","5000","2022-03-21 20:53:36","2022-03-21 20:53:36");
INSERT INTO product_sales VALUES("470","316","101","","2","1","5000","0","0","0","10000","2022-03-21 21:00:35","2022-03-21 21:04:29");
INSERT INTO product_sales VALUES("471","317","92","","1","1","50000","0","0","0","50000","2022-05-24 06:29:04","2022-05-24 06:29:04");



CREATE TABLE `product_transfer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transfer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `net_unit_cost` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_transfer VALUES("1","1","4","","100","1","1","0","0","100","2018-08-08 07:17:10","2018-12-24 17:16:55");
INSERT INTO product_transfer VALUES("7","6","48","3","1","1","2","0","0","2","2019-12-05 08:55:04","2019-12-05 09:09:42");
INSERT INTO product_transfer VALUES("11","8","5","","10","1","100","0","0","1000","2020-01-22 01:30:59","2020-01-22 01:30:59");
INSERT INTO product_transfer VALUES("13","10","1","","1","1","320","10","32","352","2020-10-08 03:27:35","2020-10-08 03:29:35");
INSERT INTO product_transfer VALUES("14","11","62","12","1","1","1","0","0","1","2020-10-18 08:17:08","2020-10-18 08:17:08");
INSERT INTO product_transfer VALUES("15","12","61","","10","1","3000","15","4500","34500","2020-10-23 23:01:46","2020-10-23 23:01:46");
INSERT INTO product_transfer VALUES("16","13","68","20","50","7","500","10","2500","27500","2020-12-02 00:04:06","2020-12-02 00:04:06");
INSERT INTO product_transfer VALUES("17","14","70","","5","1","500","0","0","2500","2021-01-05 17:16:34","2021-01-05 17:16:34");



CREATE TABLE `product_variants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_price` double DEFAULT NULL,
  `qty` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_variants VALUES("3","48","3","1","S-93475396","","13","2019-11-21 02:03:04","2020-01-10 06:22:49");
INSERT INTO product_variants VALUES("5","48","5","3","L-93475396","50","11","2019-11-24 01:07:20","2020-03-16 10:08:26");
INSERT INTO product_variants VALUES("6","48","2","2","M-93475396","10","13","2019-11-24 02:17:07","2020-07-12 11:51:53");
INSERT INTO product_variants VALUES("10","60","9","1","a-32081679","","1","2020-05-18 12:44:14","2020-10-26 19:42:06");
INSERT INTO product_variants VALUES("11","60","11","2","b-32081679","","0","2020-05-18 12:58:31","2020-05-18 12:58:31");
INSERT INTO product_variants VALUES("12","62","12","1","variant 1-81145830","","3","2020-09-27 02:08:27","2020-11-16 04:01:45");
INSERT INTO product_variants VALUES("13","62","13","2","variant 2-81145830","","0","2020-09-27 02:08:27","2020-09-27 02:08:27");
INSERT INTO product_variants VALUES("20","68","18","1","test-70331946","","0","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO product_variants VALUES("21","68","19","2","sample-70331946","","0","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO product_variants VALUES("22","68","20","3","demo-70331946","","101","2020-12-01 19:08:30","2020-12-02 00:08:56");
INSERT INTO product_variants VALUES("23","68","18","4","test-70331946","","0","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO product_variants VALUES("24","68","19","5","sample-70331946","","0","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO product_variants VALUES("25","68","20","6","demo-70331946","","0","2020-12-01 19:08:30","2020-12-01 19:08:30");



CREATE TABLE `product_warehouse` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) NOT NULL DEFAULT 1,
  `qty` double NOT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_warehouse VALUES("10","1","","1","136.5","","2018-08-08 04:30:12","2021-02-07 23:01:48");
INSERT INTO product_warehouse VALUES("11","2","","1","1392","","2018-08-08 04:30:12","2022-03-21 19:29:03");
INSERT INTO product_warehouse VALUES("12","3","","1","96","","2018-08-08 04:30:13","2021-01-22 20:16:16");
INSERT INTO product_warehouse VALUES("13","5","","1","77","","2018-08-08 04:30:13","2020-10-18 08:48:08");
INSERT INTO product_warehouse VALUES("14","4","","1","171","","2018-08-08 05:16:09","2020-03-02 00:56:03");
INSERT INTO product_warehouse VALUES("15","4","","1","120","","2018-08-08 07:16:15","2020-12-01 22:38:07");
INSERT INTO product_warehouse VALUES("16","2","","1","1847","","2018-08-08 07:26:49","2020-04-06 09:41:11");
INSERT INTO product_warehouse VALUES("17","1","","1","64.5","","2018-08-08 07:33:33","2020-11-16 19:47:48");
INSERT INTO product_warehouse VALUES("18","3","","1","59","","2018-08-08 19:47:23","2020-12-01 22:38:07");
INSERT INTO product_warehouse VALUES("19","5","","1","62","","2018-08-08 19:48:36","2020-06-09 02:42:48");
INSERT INTO product_warehouse VALUES("20","10","","1","47.5","","2018-08-08 19:49:29","2021-02-01 19:24:17");
INSERT INTO product_warehouse VALUES("21","10","","1","61","","2018-08-08 19:49:55","2018-11-30 19:05:18");
INSERT INTO product_warehouse VALUES("22","22","","1","24","","2018-09-03 00:06:09","2019-01-02 20:01:24");
INSERT INTO product_warehouse VALUES("23","22","","1","23","","2018-09-03 00:07:14","2020-10-24 05:46:01");
INSERT INTO product_warehouse VALUES("24","24","","1","0","","2018-09-15 17:49:30","2018-09-15 17:50:49");
INSERT INTO product_warehouse VALUES("25","25","","1","113","","2018-10-22 21:14:21","2021-01-06 21:56:12");
INSERT INTO product_warehouse VALUES("26","25","","1","11","","2018-10-22 21:14:41","2020-12-01 22:38:07");
INSERT INTO product_warehouse VALUES("27","31","","1","14","","2018-12-04 18:34:30","2020-10-23 23:24:13");
INSERT INTO product_warehouse VALUES("28","30","","1","14","","2018-12-04 18:34:30","2020-10-22 03:30:14");
INSERT INTO product_warehouse VALUES("29","31","","1","12","","2018-12-04 18:35:08","2020-11-13 19:47:36");
INSERT INTO product_warehouse VALUES("30","30","","1","12","","2018-12-04 18:35:08","2020-08-12 08:28:04");
INSERT INTO product_warehouse VALUES("31","32","","1","0","","2018-12-18 18:57:16","2021-01-27 23:28:46");
INSERT INTO product_warehouse VALUES("32","32","","1","20","","2018-12-18 18:57:41","2019-11-10 23:28:59");
INSERT INTO product_warehouse VALUES("33","33","","1","16","","2018-12-23 19:38:40","2019-03-02 23:39:17");
INSERT INTO product_warehouse VALUES("34","33","","1","22","","2019-02-08 23:21:38","2020-08-12 08:28:04");
INSERT INTO product_warehouse VALUES("35","48","3","1","2","","2019-11-25 09:23:02","2020-01-10 06:10:24");
INSERT INTO product_warehouse VALUES("36","48","2","1","3","","2019-11-26 01:47:42","2020-01-10 06:10:24");
INSERT INTO product_warehouse VALUES("37","48","3","1","11","","2019-11-26 03:12:08","2020-01-10 06:22:49");
INSERT INTO product_warehouse VALUES("38","48","2","1","10","","2019-11-26 03:12:08","2020-07-12 11:51:53");
INSERT INTO product_warehouse VALUES("39","48","5","1","1","","2019-12-21 05:18:51","2020-01-10 06:10:24");
INSERT INTO product_warehouse VALUES("40","48","5","1","10","","2019-12-22 03:36:39","2020-03-16 10:08:26");
INSERT INTO product_warehouse VALUES("45","61","","1","11","","2020-08-16 12:02:07","2020-11-17 20:02:18");
INSERT INTO product_warehouse VALUES("46","62","12","1","2","","2020-09-27 02:55:33","2020-11-16 04:01:45");
INSERT INTO product_warehouse VALUES("47","62","12","1","1","","2020-10-18 08:17:08","2020-10-26 19:39:39");
INSERT INTO product_warehouse VALUES("48","61","","1","10","","2020-10-23 23:01:46","2020-10-23 23:30:00");
INSERT INTO product_warehouse VALUES("49","60","9","1","1","","2020-10-26 06:34:05","2020-10-26 19:42:06");
INSERT INTO product_warehouse VALUES("51","68","","1","5","500","2020-12-01 19:08:30","2020-12-01 23:47:08");
INSERT INTO product_warehouse VALUES("52","68","","1","0","510","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO product_warehouse VALUES("53","68","","1","0","500","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO product_warehouse VALUES("54","68","","1","0","510","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO product_warehouse VALUES("55","68","20","1","51","","2020-12-01 19:23:23","2020-12-02 00:08:56");
INSERT INTO product_warehouse VALUES("56","69","","1","150","280","2020-12-29 18:42:01","2020-12-29 23:03:25");
INSERT INTO product_warehouse VALUES("57","69","","1","0","284","2020-12-29 18:42:01","2020-12-29 18:42:01");
INSERT INTO product_warehouse VALUES("58","69","","1","0","290","2020-12-29 18:42:01","2020-12-29 18:42:01");
INSERT INTO product_warehouse VALUES("59","70","","1","0","","2021-01-01 20:16:08","2021-01-06 23:05:38");
INSERT INTO product_warehouse VALUES("60","70","","1","5","","2021-01-01 20:16:08","2021-01-06 23:05:38");
INSERT INTO product_warehouse VALUES("61","70","","1","6","","2021-01-01 20:16:08","2021-01-06 23:05:38");
INSERT INTO product_warehouse VALUES("62","71","","1","88","600","2021-01-13 21:56:42","2021-01-27 23:27:58");
INSERT INTO product_warehouse VALUES("63","71","","1","0","550","2021-01-13 21:56:42","2021-01-13 21:56:42");
INSERT INTO product_warehouse VALUES("64","71","","1","0","575","2021-01-13 21:56:42","2021-01-13 21:56:42");
INSERT INTO product_warehouse VALUES("65","73","","1","2","","2021-01-26 23:05:24","2022-03-21 19:31:29");
INSERT INTO product_warehouse VALUES("66","82","","1","2","","2021-02-02 17:19:34","2021-02-12 19:55:24");
INSERT INTO product_warehouse VALUES("67","92","","1","2","","2021-02-02 18:36:31","2022-05-24 06:29:04");
INSERT INTO product_warehouse VALUES("68","93","","1","5","","2021-02-02 22:48:20","2021-02-03 19:29:41");
INSERT INTO product_warehouse VALUES("69","84","","1","2","","2021-02-05 18:28:30","2021-02-05 23:12:00");
INSERT INTO product_warehouse VALUES("70","87","","1","1","","2021-02-05 18:28:30","2021-02-12 19:51:58");
INSERT INTO product_warehouse VALUES("71","74","","1","1","","2021-02-05 18:42:05","2021-02-05 18:42:05");
INSERT INTO product_warehouse VALUES("72","85","","1","2","","2021-02-05 18:43:54","2021-02-05 18:57:12");
INSERT INTO product_warehouse VALUES("73","75","","1","4","","2021-02-05 18:43:54","2021-02-05 18:57:12");
INSERT INTO product_warehouse VALUES("74","95","","1","0","","2021-02-08 21:34:56","2021-02-08 21:56:21");
INSERT INTO product_warehouse VALUES("75","96","","1","1","","2021-02-08 21:34:57","2021-02-08 21:38:13");
INSERT INTO product_warehouse VALUES("76","97","","1","1","","2021-02-08 21:34:57","2021-02-08 21:38:13");
INSERT INTO product_warehouse VALUES("77","98","","1","1","","2021-02-08 21:34:57","2021-02-08 21:38:14");
INSERT INTO product_warehouse VALUES("78","99","","1","6","","2021-02-08 21:34:57","2021-02-11 00:13:16");
INSERT INTO product_warehouse VALUES("79","100","","1","6","80","2021-02-11 00:25:54","2021-02-11 00:46:56");
INSERT INTO product_warehouse VALUES("80","100","","1","0","50","2021-02-11 00:46:56","2021-02-11 00:46:56");
INSERT INTO product_warehouse VALUES("81","100","","1","0","70","2021-02-11 00:46:56","2021-02-11 00:46:56");
INSERT INTO product_warehouse VALUES("82","101","","1","97","","2022-03-21 20:05:03","2022-03-21 21:19:15");
INSERT INTO product_warehouse VALUES("83","78","","1","0","","2022-05-24 06:19:32","2022-05-24 06:19:32");



CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode_symbology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` double DEFAULT NULL,
  `alert_quantity` double DEFAULT NULL,
  `promotion` tinyint(4) DEFAULT NULL,
  `promotion_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_date` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `tax_method` int(11) DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_variant` tinyint(1) DEFAULT NULL,
  `is_diffPrice` tinyint(1) DEFAULT NULL,
  `featured` tinyint(4) DEFAULT NULL,
  `product_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO products VALUES("1","Mouse","63920719","standard","C39","4","3","1","1","1","320","400","201","20","1","350","2020-06-30","2020-07-31","1","1","toponemouse.jpg","","","0","0","","","","<p style=@text-align: center;@>11:11:30 AM&nbsp;<span style=@background-color: #ccffff;@>hello world<br /></span></p>","1","2018-05-12 18:23:03","2021-02-12 23:50:41");
INSERT INTO products VALUES("2","mango","72782608","standard","C128","","1","1","3","2","8","12","3239","100","","","","","2","2","mango.jpg","","","0","0","","","","","1","2018-05-12 18:38:31","2022-03-21 19:29:03");
INSERT INTO products VALUES("3","Earphone","85415108","standard","C128","4","2","1","1","1","200","250","155","25","","220","2020-11-02","2020-11-30","","1","airphonesamsung.jpg","","","0","1","","","","<p>Earphone with good <strong>sound quality.</strong></p>
<p>jhjkhjkhjh @@</p>","0","2018-05-12 18:39:55","2021-01-26 18:25:07");
INSERT INTO products VALUES("4","lychee","38314290","standard","C128","","1","1","1","1","1","2","291","50","","","","","","1","lychee.jpg","","","","1","","","","<p style=@text-align: center;@><em>sweet lychee from <strong>kalipur</strong>, bashkhali</em></p>","0","2018-05-23 18:54:56","2021-01-26 18:25:07");
INSERT INTO products VALUES("5","Baby doll","31261512","standard","C128","3","4","1","1","1","100","120","139","50","1","100","2020-02-28","2020-02-29","","1","lalacrybabydoll.jpg,15992893905761572515542825e4e2e433-e29b-4ca1-abb2-aad995574f2a_1.e4dc9f20c1d8b2999d66556ae0aa1600.jpeg","","","","1","","","","","0","2018-05-23 18:58:20","2021-01-26 18:25:17");
INSERT INTO products VALUES("6","test","78041363","standard","C128","","2","1","1","1","12","21","0","","","","","","","1","","","","","","","","","","0","2018-05-27 19:50:25","2021-01-26 18:25:07");
INSERT INTO products VALUES("10","potato","212132","standard","C128","","9","7","7","7","10","22","108.5","","","","","","","1","potato.jpeg","","","","","","","","","0","2018-06-24 21:34:53","2021-02-01 19:24:17");
INSERT INTO products VALUES("13","ldms","40624536","digital","C128","","3","0","0","0","0","21","0","","","","","","","1","ldms.jpg","1532330693.JPG","","","1","","","","<p>Amazon Prime 1 Month<br />Price: 300tk</p>
<p>User Ability: Max 2 Mobile User<br />Duration: 1 Month<br />Package: Premium</p>","0","2018-07-22 21:09:29","2021-01-26 18:25:07");
INSERT INTO products VALUES("14","ni","40237871","standard","C128","","9","8","8","8","55","56","0","","","","","","","1","","","","","","","","","","0","2018-07-31 18:36:51","2021-01-26 18:25:07");
INSERT INTO products VALUES("15","edawe","awd","standard","C128","","1","4","4","4","312","132","0","","","","","","","1","","","","","","","","","","0","2018-08-04 21:26:19","2021-01-26 18:25:07");
INSERT INTO products VALUES("16","weq","eqw","digital","C128","","2","0","0","0","0","2","0","","","","","","","1","","1533454125.jpg","","","","","","","","0","2018-08-04 21:28:45","2021-01-26 18:25:07");
INSERT INTO products VALUES("17","et","wer","standard","C128","","2","4","4","4","12","21","0","","","","","","","1","","","","","","","","","","0","2018-08-06 00:25:43","2021-01-26 18:25:07");
INSERT INTO products VALUES("18","wre","wre","standard","C128","","1","4","4","4","3","2","0","","","","","","","1","","","","","","","","","","0","2018-08-06 00:45:42","2021-01-26 18:25:07");
INSERT INTO products VALUES("19","ewr","wer","standard","C128","","2","4","4","4","3","23","0","","1","","2018-08-06","2018-08-10","","1","","","","","","","","","","0","2018-08-06 01:41:46","2021-01-26 18:25:07");
INSERT INTO products VALUES("20","dim","4234","standard","C128","","10","1","1","1","1","2","0","","","","","","","1","","","","","","","","","","0","2018-08-28 19:37:07","2018-08-28 19:43:18");
INSERT INTO products VALUES("21","dim","1","standard","C128","","11","1","1","1","1","2","0","","","","","","","1","","","","","","","","","","0","2018-08-28 19:49:27","2018-08-28 19:53:21");
INSERT INTO products VALUES("22","iphone-X","97103461","standard","C128","5","2","1","1","1","800","1000","47","20","","","","","1","1","iphoneX.jpg","","","","1","","","","","0","2018-09-03 00:05:17","2021-01-26 18:25:07");
INSERT INTO products VALUES("23","qwq","1237920612311a","standard","C39","","2","1","1","1","1","2","0","","","","","","","1","","","","","","","","","","0","2018-09-10 19:53:18","2021-01-26 18:25:07");
INSERT INTO products VALUES("24","chocolate","84802317","standard","C128","","9","1","1","1","1","2","0","","","","","","","1","","","","","1","","","","","0","2018-09-15 17:42:01","2021-01-26 18:25:07");
INSERT INTO products VALUES("25","Galaxy S9","72100265","standard","C128","","2","1","1","1","500","1000","124","50","","","","","1","1","SamsungGalaxyS9.jpg","","","","1","","","","","0","2018-10-22 21:13:22","2021-01-26 18:25:07");
INSERT INTO products VALUES("26","Samsung Set","39053411","combo","C128","4","2","0","0","0","0","1250","0","","","","","","","1","zummXD2dvAtI.png","","","","","3,25","1,1","250,1000","","0","2018-11-18 22:59:06","2021-01-26 18:25:07");
INSERT INTO products VALUES("27","mixed fruit juice","24805187","combo","C128","","9","0","0","0","0","16","0","","","","","","","1","zummXD2dvAtI.png","","","","","4,2","3,1","2,10","","0","2018-11-19 04:39:26","2021-01-26 18:25:07");
INSERT INTO products VALUES("28","ssaaa","sasas","standard","C128","","2","1","1","2","1","2","0","","","","","","","1","zummXD2dvAtI.png","","","","","","","","","0","2018-11-19 23:14:12","2021-01-26 18:25:07");
INSERT INTO products VALUES("29","testcloth","16055884","standard","C128","","4","10","10","10","10","15","0","","","","2018-11-29","","","1","zummXD2dvAtI.png","","","","","","","","","0","2018-11-28 22:49:25","2021-01-26 18:25:17");
INSERT INTO products VALUES("30","Polo Shirt","53467102","standard","C128","","12","1","1","1","50","100","26","10","","","","","","1","PoloShirt.jpg","","","","1","","","","","0","2018-12-04 18:29:43","2021-01-26 18:25:06");
INSERT INTO products VALUES("31","Shoe","90471412","standard","C128","","12","1","1","1","250","300","26","10","","","","","","1","Shoe.jpg","","","","1","","","","","0","2018-12-04 18:33:09","2021-01-26 18:25:06");
INSERT INTO products VALUES("32","Toothpaste","859875003032","standard","C128","","12","1","1","1","5","10","20","","","","","","","1","1572759415477product-page-fresh-breath.jpg","","","","","","","","","0","2018-12-18 18:56:08","2021-01-27 23:28:46");
INSERT INTO products VALUES("33","tissue","8941161008066","standard","C128","","12","1","1","1","10","20","38","","","","","","","1","zummXD2dvAtI.png","","","","0","","","","","0","2018-12-23 18:33:58","2021-01-26 18:25:06");
INSERT INTO products VALUES("48","T-shirt","93475396","standard","C128","","12","1","1","1","2","3","37","","","","","","","1","1577165120189220px-Blue_Tshirt.jpg","","1","","0","","","","","0","2019-11-21 02:03:04","2021-01-26 18:25:06");
INSERT INTO products VALUES("60","testvar","32081679","standard","C128","","12","1","1","1","1","2","1","","","","","","","1","zummXD2dvAtI.png","","1","","0","","","","","0","2020-05-18 12:44:14","2021-01-26 18:25:06");
INSERT INTO products VALUES("61","TV","32703342","standard","C128","4","2","1","1","1","3000","10000","21","","","","","","2","1","zummXD2dvAtI.png","","","","1","","","","","0","2020-08-16 11:58:39","2021-01-26 18:25:07");
INSERT INTO products VALUES("62","Test variant","81145830","standard","C128","","4","1","1","1","1","2","3","","","","","","","1","zummXD2dvAtI.png","","1","","","","","","","0","2020-09-27 02:08:27","2021-01-26 18:25:17");
INSERT INTO products VALUES("68","Sample","70331946","standard","C128","7","20","7","7","7","500","300","106","48","1","400","2020-12-02","2020-12-23","1","1","1606889201291lostbook.jpg","","1","1","1","","","","<ol>
<li>demo deatail&nbsp;demo deatail&nbsp;demo deataildemo deatail&nbsp;demo deatail&nbsp;</li>
<li>demo deatail&nbsp;demo deatail&nbsp;demo deataildemo deatail&nbsp;demo deatail&nbsp;</li>
<li>demo deatail&nbsp;demo deatail&nbsp;demo deataildemo deatail&nbsp;demo deatail&nbsp;</li>
<li>demo deatail&nbsp;demo deatail&nbsp;demo deataildemo deatail&nbsp;demo deatail&nbsp;</li>
</ol>","0","2020-12-01 19:08:30","2021-01-26 18:25:07");
INSERT INTO products VALUES("70","car","53458923","standard","C128","7","21","1","1","1","495","598","11","4","","","","","","1","1609571736822Acquaint LogoSmall.png","","","0","1","","","","<p>hello&nbsp;<strong>hi</strong></p>","0","2021-01-01 20:16:08","2021-01-26 18:25:07");
INSERT INTO products VALUES("71","Black Angel","99713255","standard","C128","10","12","1","1","1","500","600","88","50","","","","","","1","1610614553592perfume.jpg","","","1","","","","","<p>Demo&nbsp;<strong>Perfume</strong></p>","0","2021-01-13 21:56:42","2021-01-27 23:27:58");
INSERT INTO products VALUES("72","Book","17034740","standard","C128","9","23","1","1","1","200","250","0","5","","","","","","1","1611557224207on your company website development.png","","","","","","","","<p>Sample</p>","0","2021-01-24 19:47:15","2021-01-26 18:25:07");
INSERT INTO products VALUES("73","Brass Earrings","83501759","standard","C128","11","30","1","1","1","1000","1149","2","5","","","","","","1","16116475209541052010003257_1.jpg","","","0","1","","","","<p>Red and green stones studded brass earrings.<br />Specifications<br />Colour Golden<br />Material Brass<br />Value Addition Stone-Setting<br />Style Drop<br />Stone/Beads Multi Stone<br />Back Type Bullet Clutch Back<br />Length 8.5<br />Width 4.5<br />Measurement Unit CM<br />Care Clean With Soft Dry Brush And Keep It Dry Place</p>","1","2021-01-25 20:54:00","2022-03-21 19:31:29");
INSERT INTO products VALUES("74","Pearl Necklace","50490196","standard","C128","11","32","1","1","1","3000","3185","1","","","","","","","1","16116478566970850000092164_2.jpg","","","0","0","","","","<p>Mother of pearls, leaf shaped stone and brass beads studded necklace.<br />Specifications<br />Colour Multicolour<br />Length 60<br />Material Multi-Stones<br />Value Addition Pearl-Setting<br />Type Pearl<br />Style Lariat Necklace<br />Clasp Type S-Hook Clasp<br />Measurement Unit CM<br />Care Store Pearls Separately To Avoid It Getting Scratched</p>","1","2021-01-25 20:58:03","2021-02-05 18:42:05");
INSERT INTO products VALUES("75","Pink Pearl Necklace","83264815","standard","C128","11","32","1","1","1","3000","3548","4","","","","","","","1","1611648314353pink.jpg","","","0","0","","","","<p>Pink pearls and multicolour stone studded necklace.<br />Specifications<br />Colour Multicolour<br />Length 51<br />Material Stone<br />Value Addition Pearl-Setting<br />Style Multi Layered Necklace<br />Stone/Beads Brown Stone<br />Clasp Type Hook Clasp<br />Measurement Unit CM<br />Care Store Pearls Separately To Avoid It Getting Scratched</p>","1","2021-01-25 21:02:21","2021-02-05 18:57:12");
INSERT INTO products VALUES("76","Pearl Bracelet","53720528","standard","C128","11","31","1","1","1","1000","1331","0","","","","","","","1","16116484902810852010091847_1.jpg","","","0","0","","","","<p>Grey pearls and fibre stone studded bracelet.<br />Specifications<br />Colour Grey<br />Material Pearl<br />Value Addition Stone-Setting<br />Bracelet Adjustable<br />Style Charm Bracelet<br />Clasp Type No Clasp<br />Length 44<br />Measurement Unit CM<br />Care Store Pearls Separately To Avoid It Getting Scratched</p>","1","2021-01-25 21:08:35","2021-01-29 22:16:31");
INSERT INTO products VALUES("77","Stone Studded Oxidized Silver Bracelet","23532104","standard","C128","11","31","1","1","1","2000","2085","0","","","","","","","1","16116514320680830000043382_1.jpg","","","0","0","","","","<p>Faux coral and grey pearls studded oxidized silver bracelet.<br />Specifications<br />Colour Oxidized Silver<br />Material Silver<br />Value Addition Pearl-Setting, Stone-Setting<br />Bracelet Adjustable<br />Style Charm Bracelet<br />Stone/Beads Coral<br />Stone Cut Round<br />Clasp Type Hook Clasp<br />Length 18<br />Measurement Unit CM<br />Care High quality silver oxidizes hence recommended to be cleaned with mild soapy water for shine</p>","1","2021-01-25 21:58:32","2021-01-29 22:17:49");
INSERT INTO products VALUES("78","Oxidized Silver Ring","22710093","standard","C128","11","29","1","1","1","1000","1152","0","","","","","","","1","16116517799040830000041737.jpg","","","0","0","","","","<p>Engraved oxidized silver finger ring.<br />Specifications<br />Colour Oxidized<br />Material Silver<br />Ring Adjustable<br />Diameter 1.7<br />Measurement Unit CM<br />Care High quality silver oxidizes hence recommended to be cleaned with mild soapy water for shine</p>","1","2021-01-25 22:03:29","2021-01-29 22:14:54");
INSERT INTO products VALUES("79","Heirloom Ring","81235999","standard","C128","12","28","1","1","1","45000","46683.14","0","","","","","","","1","1611658490082Heirloom_ring_HoneyQuartz_yg_hero0326.jpg,1611658490086HoneyQuartz_ring_solo.jpg,1611658892495Heirloom_ring_HoneyQuartz_yg_hero0326.jpg,1611658897168HoneyQuartz_ring_solo.jpg,1611659013792Heirloom_ring_HoneyQuartz_yg_hero0326.jpg","","","0","0","","","","<p>Gemstones<br />All of our gemstones are genuine mineral stones that are highly valued for their beauty, longevity and rarity. We use an array of natural, AAA grade gemstones.</p>
<p>14k Solid Gold<br />Our 14k solid gold pieces are made to last forever. 14k gold will not oxidize or discolor, so you can wear your jewelry every day, everywhere.</p>","0","2021-01-25 23:59:00","2021-01-26 00:06:43");
INSERT INTO products VALUES("80","Heirloom Ring","12929571","standard","C128","12","28","1","1","1","45000","46683.14","0","","","","","","","1","1611659317269Heirloom_ring_HoneyQuartz_yg_hero0326.jpg,16116593863230830000043382_1.jpg","","","0","0","","","","<p>Gemstones<br />All of our gemstones are genuine mineral stones that are highly valued for their beauty, longevity and rarity. We use an array of natural, AAA grade gemstones.</p>
<p><br />14k Solid Gold<br />Our 14k solid gold pieces are made to last forever. 14k gold will not oxidize or discolor, so you can wear your jewelry every day, everywhere.</p>","0","2021-01-26 00:09:10","2021-01-26 00:10:18");
INSERT INTO products VALUES("81","LA Dôme Ring","54363917","standard","C128","12","29","1","1","1","42000","44561","0","","","","","","","1","1611659623461DomeCitiesLA_ring_yg_alt.jpg","","","0","0","","","","<p><br />Diamonds<br />Our diamonds are ethically sourced from suppliers who follow conflict-free and socially responsible practices.</p>
<p><br />14k Solid Gold<br />Our 14k solid gold pieces are made to last forever. 14k gold will not oxidize or discolor, so you can wear your jewelry every day, everywhere.</p>","1","2021-01-26 00:14:18","2021-01-29 22:14:09");
INSERT INTO products VALUES("82","Heirloom Ring","37076302","standard","C128","12","29","1","1","1","45000","46683","1","","","","","","","1","1611659881342Heirloom_ring_LondonBlueTopaz_yg_hero.jpg","","","0","1","","","","<p>Gemstones<br />All of our gemstones are genuine mineral stones that are highly valued for their beauty, longevity and rarity. We use an array of natural, AAA grade gemstones.</p>
<p><br />14k Solid Gold<br />Our 14k solid gold pieces are made to last forever. 14k gold will not oxidize or discolor, so you can wear your jewelry every day, everywhere.</p>","1","2021-01-26 00:18:21","2021-02-12 19:55:24");
INSERT INTO products VALUES("83","AURORA","78829053","standard","C128","13","29","1","1","1","105018","125018","0","","","","","","","1","1611721317125581.jpg","","","0","0","","","","<p>Metal:18ct Rose Gold<br />Band width:2.0mm<br />Side diamonds total carat weight estimate based on UK size N:0.28<br />Side diamonds colour &amp; clarity<br />G-H / VS1-VS2</p>","1","2021-01-26 17:24:47","2021-01-29 22:11:55");
INSERT INTO products VALUES("84","DAWN","71443390","standard","C128","13","29","1","1","1","107525","137525","2","","","","","","","1","161172777047916136-round.jpeg","","","0","0","","","","<p>Metal: Platinum<br />Band width: 1.6mm<br />Side diamonds total carat weight estimate based on UK size N:0.09<br />Side diamonds colour &amp; clarity: G-H / VS1-VS2</p>","1","2021-01-26 19:11:16","2021-02-11 00:03:24");
INSERT INTO products VALUES("85","Pavé Paw Print Bead Charm Bangle","87361716","standard","C128","14","31","1","1","1","3000","3215","2","","","","","","","1","1611729058429a19ebpave05sr_front_700x.jpg","","","0","0","","","","<p>Expandable from 2@ to 3.5@<br />Finish: Shiny Rose Gold<br />Nickel-free<br />Adorned with Swarovski&reg; Crystals</p>","1","2021-01-26 19:31:23","2021-02-05 18:57:12");
INSERT INTO products VALUES("86","Frontline Warrior Duo Charm Bangle","11976682","standard","C128","14","31","1","1","1","3000","3300","0","","","","","","","1","1611729804694a20ebflwsr_front_700x.jpg","","","0","0","","","","<p>Honor those on the Frontline with this expandable wire bangle. Featuring a two-sided charm that says @Frontline Warrior@ with a heart on the front, and @we couldn't do it without you@ on the back.</p>
<p>Expandable from 2@ to 3.5@<br />Finish: Shiny Rose Gold<br />Nickel-free<br />Adorned with a genuine Amethyst gemstone; colors may vary due to natural makeup of the gemstones</p>","1","2021-01-26 19:37:31","2021-01-29 22:13:14");
INSERT INTO products VALUES("87","Life is a Journey","19653970","standard","C128","14","31","1","1","1","9832","10832","1","","","","","","","1","1611730045924A20SETPOLSR_FRONT_V4_700x.jpg","","","0","1","","","","<p>This expandable wire bangle set features 5 bangles: 3 accent beaded bangles and 2 charm bangles - 1 has the Path of Life&reg; symbol, and the other charm says @Life is a journey not a destination.@</p>
<p>Expandable from 2@ to 3.5@<br />Finish: Shiny Rose Gold<br />Nickel-free</p>","1","2021-01-26 19:48:10","2021-02-12 19:51:58");
INSERT INTO products VALUES("88","Chand Aur Tare Earrings","29146902","standard","C128","15","30","1","1","1","1874","1974","0","","","","","","","1","1611731308914o-oc20er00113622 (1).jpg","","","0","0","","","","<p>Pipa Bella x Nykaa Fashion Chand Aur Tare Earrings<br />Best Suited For: Festive Wear<br />Country Of Origin: India<br />Expiry Date: N/A<br />Material: Brass<br />Warranty: While we currently don't provide warranties, here are some helpful tips to ensure your jewellery maintain it's sparkle for a long time.</p>
<p>&nbsp;</p>","1","2021-01-26 20:06:42","2021-01-29 22:12:14");
INSERT INTO products VALUES("89","Hibiscus Temple Earrings","64991348","standard","C128","15","30","1","1","1","654","754","0","","","","","","","1","1611733175669o-oc20er00113624.jpg","","","0","0","","","","<p>Best Suited For: Festive Wear<br />Country Of Origin: India<br />Expiry Date: N/A<br />Material: Brass<br />Warranty: While we currently don't provide warranties</p>
<p>&nbsp;</p>","1","2021-01-26 20:41:02","2021-01-29 22:13:51");
INSERT INTO products VALUES("90","Stella temple earrings","27859123","standard","C128","15","30","1","1","1","944","1044","0","","","","","","","1","1611733399324o-oc20er00113625.jpg","","","0","0","","","","<p>Best Suited For: Festive Wear<br />Country Of Origin: India<br />Expiry Date: N/A<br />Material: Brass<br />Warranty: While we currently don't provide warranties</p>
<p>&nbsp;</p>","1","2021-01-26 20:44:03","2021-01-29 22:17:30");
INSERT INTO products VALUES("91","Esra Matte Gold Earrings","19162360","standard","C128","15","30","1","1","1","1874","1974","0","","","","","","","1","1611733570383o-oc20er00113664.jpg","","","0","0","","","","<p>Best Suited For: Festive Wear<br />Country Of Origin: India<br />Expiry Date: N/A<br />Material: Brass<br />Warranty: While we currently don't provide warranties</p>
<p>&nbsp;</p>","1","2021-01-26 20:46:38","2021-01-29 22:12:53");
INSERT INTO products VALUES("92","Women White  Green Pearl Studded Jewellery Set","81765927","standard","C128","16","32","1","1","1","354","454","1","","","","","","","1","161173721329521d7796a-9a98-4bcd-85ef-05b4b98ceca41571391956850-Zaveri-Pearls-Women-White--Green-Pearl-Studded-Jewellery-Set-1.jpg","","","0","0","","","","<p>White and green pearl studded Jewellery Set<br />White and green choker necklace with pearl embellishment secured with a drawstring closure<br />Comes with a matching pair of studs, secured with post-and-back closure</p>
<p><strong>Size &amp; Fit</strong><br />Necklace Length: 75 cm</p>
<p><strong>Material &amp; Care</strong><br />Material: Alloy<br />Stone Type: Pearls</p>
<p><strong>Care Instructions:</strong><br />Wipe your jewellery with a soft cloth after every use<br />Always store your jewellery in a flat box to avoid accidental scratches<br />Keep sprays and perfumes away from your jewellery<br />Do not soak your jewellery in water<br />Clean your jewellery using a soft brush, dipped in jewellery cleaning solution only</p>
<p>&nbsp;</p>","1","2021-01-26 21:50:46","2022-05-24 06:29:04");
INSERT INTO products VALUES("93","PANASH","80691270","standard","C128","16","32","1","1","1","818","918","5","","","","","","","1","16117376960791d0e9faa-b78a-44c1-9d9e-2cfe3abe36471556089299523-PANASH-Women-Gold-Plated-Pink--Off-White-Pearls-Beaded-Ename-1.jpg","","","0","0","","","","<p>This jewellery set consists of a necklace and a pair of earrings<br />Gold-plated and off-white pearl beaded handcrafted necklace, has a circular-shaped centerpiece enamelled with pink and kundan-studded detail, secured with an adjustable S-hook closure<br />A pair of matching drop earrings, secured with post and back closure</p>
<p><br />Size &amp; Fit<br />Length of Necklace: 56 cm<br />Length of Earrings: 3.2 cm</p>
<p><br />Material &amp; Care<br />Alloy<br />Care Instructions:<br />Wipe your jewellery with a soft cloth after every use<br />Always store your jewellery in a flat box to avoid accidental scratches<br />Keep sprays and perfumes away from your jewellery<br />Do not soak your jewellery in water<br />Clean your jewellery using a soft brush, dipped in jewellery cleaning solution only</p>
<p>&nbsp;</p>","1","2021-01-26 21:55:48","2021-02-03 19:29:41");
INSERT INTO products VALUES("94","AccessHer","95534604","standard","C128","16","32","1","1","1","1945","2045","0","0","","","","","","1","161173816990912.jpg","","","0","0","","","","<p>This jewellery set consists of a necklace, and a pair of earrings<br />Green and White, gold-plated stone-studded necklace with kundan studded detail, secured with a drawstring closure<br />A pair of matching drop earrings, secured with a post and back closure</p>
<p>Size &amp; Fit<br />Necklace Length: 43 cm<br />Earring Length: 4.2 cm</p>
<p>Material &amp; Care<br />Brass<br />Stone: Kundan<br />Plating: Gold-plated<br />Wipe your jewellery with a soft cloth after every use<br />Always store your jewellery in a flat box to avoid accidental scratches<br />Keep sprays and perfumes away from your jewellery<br />Do not soak your jewellery in water<br />Clean your jewellery using a soft brush, dipped in jewellery cleaning solution only</p>","1","2021-01-26 22:03:17","2021-02-07 23:27:30");
INSERT INTO products VALUES("95","Laptop","25189403","standard","C128","17","33","1","1","1","68000","68000","0","0","","","","","","1","zummXD2dvAtI.png","","","0","0","","","","<p>Processor: Intel Core i5-8265U Processor (6m Cache, 1.60 GHz up to 3.90 Ghz).</p>
<p>SSD: 512 GB</p>
<p>RAM: 8 GB</p>
<p>Screen: 14 inch FHD (1920 x 1080) antiglare display.</p>
<p>Metal Cover: 329mm x 242mm x 19.9mm/ 12.9@ x 9.5@ x 0.78@.</p>
<p>Plastic Cover: 329mm x 242mm x 21.9mm/ 12.9@ x 9.5@ x 0.86@</p>
<p>Warranty: 3 Years</p>
<p>Equivalent to Lenevo Thinkpad E490</p>","0","2021-02-08 20:57:05","2021-02-12 17:57:31");
INSERT INTO products VALUES("96","Printer- Color Laser jet","37287159","standard","C128","","33","1","1","1","48000","48000","1","0","","","","","","1","zummXD2dvAtI.png","","","","0","","","","<p>All-In-One Print/Copy/Scan/Fax/Duplex/Wifi Color Laser Printer</p>","0","2021-02-08 21:07:33","2021-02-12 17:57:31");
INSERT INTO products VALUES("97","Printer- B &amp; W laser jet","32153667","standard","C128","","33","1","1","1","56000","56000","1","0","","","","","","1","zummXD2dvAtI.png","","","","0","","","","<p>All-In-One Print/Copy/Scan/Fax/Duplex/Wifi Black &amp; white Laser Printer</p>","0","2021-02-08 21:09:17","2021-02-12 17:57:31");
INSERT INTO products VALUES("98","Printer - Inkjet","77904659","standard","C128","","33","1","1","1","52000","52000","1","0","","","","","","1","zummXD2dvAtI.png","","","0","0","","","","<p>All-In-One Print/Copy/Scan/Fax/Duplex/Wifi Ink Jet Printer</p>","0","2021-02-08 21:10:18","2021-02-12 17:57:31");
INSERT INTO products VALUES("99","Toner","41131925","standard","C128","3","33","1","1","1","1800","1800","6","0","","","","","","1","zummXD2dvAtI.png","","","","1","","","","<p>Printer model: HP Laser Jet pro M225dn,</p>
<p>Ink Color: Black</p>
<p>original HP toner</p>","0","2021-02-08 21:11:58","2021-02-12 17:57:31");
INSERT INTO products VALUES("100","Soap","38746823","standard","C128","19","35","1","1","1","20","25","4","0","","","","","","1","1613042514095honey.jpg","","","","1","","","","<p>smple</p>","0","2021-02-11 00:22:02","2021-02-11 00:46:56");
INSERT INTO products VALUES("101","Abc product","30833515","standard","C128","18","34","1","1","1","4000","5000","97","30","","","","","","1","1647926790022combination.jpg","","","0","0","","","","","1","2022-03-21 19:26:33","2022-03-21 21:19:15");



CREATE TABLE `purchase_product_return` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `return_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `net_unit_cost` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO purchase_product_return VALUES("1","1","3","","1","1","200","0","0","0","200","","2019-12-07 06:19:03");
INSERT INTO purchase_product_return VALUES("12","7","69","","50","1","250","0","0","0","12500","2020-12-29 22:59:09","2020-12-29 22:59:09");
INSERT INTO purchase_product_return VALUES("13","8","70","","5","1","500","0","0","0","2500","2021-01-05 17:23:16","2021-01-05 17:23:16");
INSERT INTO purchase_product_return VALUES("14","9","71","","5","1","500","0","0","0","2500","2021-01-22 20:15:07","2021-01-22 20:15:07");
INSERT INTO purchase_product_return VALUES("15","10","101","","1","1","4000","0","0","0","4000","2022-03-21 20:37:09","2022-03-21 20:41:45");



CREATE TABLE `purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL DEFAULT 1,
  `supplier_id` int(11) DEFAULT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_cost` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `order_discount` double DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `paid_amount` double NOT NULL,
  `status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO purchases VALUES("12","pr-20180808-051614","1","1","3","2","300","0","0","10200","0","0","0","0","10200","0","1","1","","","2018-08-08 07:16:14","2018-09-21 22:53:24");
INSERT INTO purchases VALUES("13","pr-20180809-054723","1","1","3","4","410","0","7304.35","92600","10","9260","0","500","102360","300","1","1","","","2018-08-08 19:47:23","2018-08-29 23:07:18");
INSERT INTO purchases VALUES("14","pr-20180809-012348","1","1","1","5","400","0","4452.17","75300","10","7480","500","1000","83280","0","1","1","","","2018-08-09 03:23:48","2018-08-09 03:23:48");
INSERT INTO purchases VALUES("15","pr-20180903-100609","1","1","1","1","20","0","1600","17600","0","0","0","100","17700","0","1","1","","","2018-09-03 00:06:09","2018-10-07 18:11:24");
INSERT INTO purchases VALUES("16","pr-20180903-100714","1","1","3","1","20","0","1600","17600","0","0","0","150","17750","3350","1","1","","","2018-09-03 00:07:14","2018-10-06 20:57:36");
INSERT INTO purchases VALUES("18","pr-20181022-042625","1","1","1","1","50","0","0","50","0","0","","","50","0","1","1","","","2018-10-22 06:26:25","2018-10-22 06:26:25");
INSERT INTO purchases VALUES("19","pr-20181022-042652","1","1","3","1","50","0","0","50","0","0","","","50","0","1","1","","","2018-10-22 06:26:52","2018-10-22 06:26:52");
INSERT INTO purchases VALUES("20","pr-20181023-071420","11","1","1","1","15","0","750","8250","0","0","","","8250","0","1","1","","","2018-10-22 21:14:20","2018-10-22 21:14:20");
INSERT INTO purchases VALUES("21","pr-20181023-071441","11","1","3","1","15","0","750","8250","0","0","0","0","8250","0","1","1","","","2018-10-22 21:14:41","2018-10-22 21:14:58");
INSERT INTO purchases VALUES("22","pr-20181101-045903","1","1","1","1","5","0","400","4400","0","0","","","4400","0","1","1","","","2018-10-31 18:59:03","2018-10-31 18:59:03");
INSERT INTO purchases VALUES("23","pr-20181101-045928","1","1","3","1","5","0","400","4400","10","430","100","0","4730","500","1","1","","","2018-10-31 18:59:28","2018-12-03 20:01:34");
INSERT INTO purchases VALUES("24","pr-20181105-091819","1","1","1","2","20","0","1450","15950","0","0","","","15950","15950","1","2","","","2018-11-04 22:18:19","2018-11-04 22:21:27");
INSERT INTO purchases VALUES("25","pr-20181205-053429","1","1","1","2","30","0","0","4500","0","0","100","50","4450","4450","1","2","","","2018-12-04 18:34:29","2018-12-04 18:34:43");
INSERT INTO purchases VALUES("26","pr-20181205-053508","1","1","3","2","30","0","0","4500","0","0","","","4500","0","1","1","","","2018-12-04 18:35:08","2018-12-09 19:20:52");
INSERT INTO purchases VALUES("27","pr-20181219-055716","1","1","","1","10","0","0","10","0","0","0","0","10","10","1","2","","","2018-12-18 18:57:16","2018-12-19 19:34:39");
INSERT INTO purchases VALUES("33","pr-20181224-063840","1","1","","1","10","0","0","10","0","0","0","0","10","0","1","1","","","2018-12-23 19:38:40","2018-12-23 22:04:21");
INSERT INTO purchases VALUES("34","pr-20190103-070123","1","1","1","2","4","0","260","2860","0","0","","","2860","2860","1","2","","","2019-01-02 20:01:23","2019-01-28 23:03:24");
INSERT INTO purchases VALUES("35","pr-20190129-095448","9","1","1","2","4","0","0","600","0","0","","","600","100","1","1","","","2019-01-28 22:54:48","2019-02-07 02:06:40");
INSERT INTO purchases VALUES("36","pr-20190129-095558","9","1","1","2","5","0","0","650","0","0","","","650","650","1","2","","","2019-01-28 22:55:58","2019-01-28 23:03:02");
INSERT INTO purchases VALUES("37","pr-20190209-102138","1","1","1","3","18","0","580","6390","0","0","0","0","6390","6390","1","2","","","2019-02-08 23:21:38","2019-06-13 00:13:51");
INSERT INTO purchases VALUES("38","pr-20190209-102208","1","1","1","2","13","0","150","1660","0","0","0","0","1660","1660","1","2","","","2019-02-08 23:22:08","2019-02-08 23:49:40");
INSERT INTO purchases VALUES("39","pr-20190209-104413","1","1","1","2","3","10","63","885","10","88.5","","","973.5","973.5","1","2","","","2019-02-08 23:44:13","2019-02-08 23:49:59");
INSERT INTO purchases VALUES("40","pr-20190303-103917","1","1","1","1","10","0","0","100","0","0","","","100","100","1","2","","","2019-03-02 23:39:17","2019-03-02 23:40:46");
INSERT INTO purchases VALUES("41","pr-20190303-104358","1","1","","2","15","0","320","3570","0","0","","","3570","1000","1","1","","","2019-03-02 23:43:58","2019-04-13 07:02:41");
INSERT INTO purchases VALUES("42","pr-20190404-095757","1","1","3","2","2","0","0","300","0","0","0","0","300","300","1","2","","","2019-04-03 23:57:57","2019-04-13 09:50:08");
INSERT INTO purchases VALUES("43","pr-20190613-101600","1","1","1","2","6","0","390","4290","0","0","","","4290","4290","1","2","","","2019-06-13 00:16:00","2019-10-19 05:29:25");
INSERT INTO purchases VALUES("44","pr-20191019-033119","1","1","3","2","2","0","130","1430","0","0","","","1430","0","1","1","","","2019-10-19 05:31:19","2019-10-19 05:31:19");
INSERT INTO purchases VALUES("46","pr-20191103-113949","1","1","3","2","20","0","0","150","0","0","","50","200","200","1","2","","","2019-11-03 01:39:49","2019-11-03 01:42:22");
INSERT INTO purchases VALUES("47","pr-20191109-112510","1","1","","2","3","10","63","885","0","0","","66","951","0","1","1","","","2019-11-09 00:25:10","2019-11-09 00:25:10");
INSERT INTO purchases VALUES("48","pr-20191110-070221","1","1","","1","100","0","0","100","0","0","","40","140","0","1","1","","","2019-11-10 08:02:21","2019-11-10 08:02:21");
INSERT INTO purchases VALUES("49","pr-20191111-102155","1","1","1","1","10","0","800","8800","0","0","0","50","8850","7000","1","1","","","2019-11-10 23:21:55","2020-01-01 03:22:25");
INSERT INTO purchases VALUES("55","pr-20191127-102835","1","1","","2","2","0","0","4","0","0","","","4","4","1","2","","","2019-11-27 11:28:35","2020-01-01 03:21:52");
INSERT INTO purchases VALUES("56","pr-20191127-102906","1","1","","1","1","0","0","2","0","0","0","0","2","2","1","2","","","2019-11-27 11:29:06","2020-01-01 03:21:44");
INSERT INTO purchases VALUES("57","pr-20191204-110749","1","1","1","1","1","0","0","200","0","0","","20","220","220","1","2","","","2019-12-04 12:07:49","2019-12-04 12:11:24");
INSERT INTO purchases VALUES("58","pr-20191205-102110","1","1","1","2","2","0","0","4","0","0","0","0","4","4","1","2","","","2019-12-04 23:21:10","2020-01-01 03:21:37");
INSERT INTO purchases VALUES("59","pr-20191221-041851","1","1","","3","3","0","0","6","0","0","0","0","6","6","1","2","","","2019-12-21 05:18:51","2020-01-01 03:21:31");
INSERT INTO purchases VALUES("61","pr-20200101-010631","1","1","1","3","30","0","0","60","0","0","","","60","60","1","2","","","2020-01-01 02:06:31","2020-01-01 02:07:50");
INSERT INTO purchases VALUES("62","pr-20200101-022402","1","1","","1","3","0","150","1650","0","0","","","1650","1650","1","2","","","2020-01-01 03:24:02","2020-08-12 08:28:52");
INSERT INTO purchases VALUES("67","pr-20200204-110041","1","1","1","2","2","0","0","300","0","0","","","300","300","1","2","","","2020-02-04 12:00:41","2020-02-04 12:00:50");
INSERT INTO purchases VALUES("69","pr-20200302-115510","1","1","","1","50","0","0","50","0","0","","","50","50","1","2","","","2020-03-02 00:55:10","2020-03-02 00:58:20");
INSERT INTO purchases VALUES("70","pr-20200302-115603","1","1","1","1","50","0","0","50","0","0","","","50","50","1","2","","","2020-03-02 00:56:03","2020-03-02 00:58:11");
INSERT INTO purchases VALUES("71","pr-20200406-073512","1","1","3","3","11","0","150","3050","10","305","","","3355","2000","1","1","","","2020-04-06 09:35:12","2020-04-06 09:38:23");
INSERT INTO purchases VALUES("72","pr-20200816-100207","1","1","1","1","10","5000","3750","28750","0","0","","2000","30750","0","1","1","","","2020-08-16 12:02:07","2020-08-16 12:02:07");
INSERT INTO purchases VALUES("73","pr-20200927-125533","1","1","","1","2","0","0","2","0","0","0","0","2","0","1","1","","","2020-09-27 02:55:33","2020-09-27 05:07:44");
INSERT INTO purchases VALUES("74","pr-20201024-070201","1","1","1","2","15","0","5270","41470","0","0","0","0","41470","0","1","1","","","2020-10-23 21:02:01","2020-10-23 21:03:16");
INSERT INTO purchases VALUES("83","pr-20201027-045611","1","1","","1","2","0","0","2","0","0","","","2","0","1","1","","","2020-10-26 18:56:11","2020-10-26 18:56:11");
INSERT INTO purchases VALUES("84","pr-20201027-045658","1","1","","1","2","0","0","4","0","0","","","4","0","1","1","","","2020-10-26 18:56:58","2020-10-26 18:56:58");
INSERT INTO purchases VALUES("85","pr-20201102-092952","1","1","","1","1","0","32","352","0","0","","","352","0","1","1","","asasda
dasdasd","2020-11-01 22:29:52","2020-11-01 22:29:52");
INSERT INTO purchases VALUES("87","pr-20201102-093644","1","1","","1","1","0","32","352","0","0","0","0","352","0","1","1","","kjkljklj
lljkljkljkl
jhjhjh.","2020-11-01 22:36:44","2020-11-02 00:20:34");
INSERT INTO purchases VALUES("89","pr-20201116-030145","1","1","","2","2","0","32","353","0","0","","","353","0","1","1","","","2020-11-16 04:01:45","2020-11-16 04:01:45");
INSERT INTO purchases VALUES("90","pr-20201118-061543","1","1","","1","10","0","4500","34500","0","0","1000","100","33600","33000","1","1","","","2020-11-17 19:15:43","2020-11-17 19:20:36");
INSERT INTO purchases VALUES("91","pr-20201129-110335","1","1","1","1","100","0","5000","55000","0","0","","","55000","0","1","1","","","2020-11-29 00:03:35","2020-11-29 00:03:35");
INSERT INTO purchases VALUES("92","pr-20201201-104053","1","1","1","2","3","10","63","885","0","0","0","","885","0","1","1","","","2020-11-30 23:40:53","2020-11-30 23:40:53");
INSERT INTO purchases VALUES("93","pr-20201202-062323","28","1","1","1","100","0","5000","55000","10","5499.5","5","50","60544.5","60544.5","1","2","AtechSalesPOS (3).pdf","sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note sample note","2020-12-01 19:23:23","2020-12-01 19:43:51");
INSERT INTO purchases VALUES("94","pr-20201202-063627","28","1","3","2","3","10","63","885","15","132","5","600","1612","0","4","1","pr-20201202-063627.pdf","demo  demo  demo demo  demo","2020-12-01 19:36:27","2020-12-01 19:36:27");
INSERT INTO purchases VALUES("95","pr-20201230-054711","28","1","6","1","200","0","4545.45","50000","10","4999.5","5","60","55054.5","55054.5","1","2","paradoxical sajid.txt","Paradoxical sajid purchase","2020-12-29 18:47:11","2020-12-29 18:49:31");
INSERT INTO purchases VALUES("96","pr-20210104-050339","28","1","6","1","25","0","0","12500","0","0","0","0","12500","12500","1","2","","","2021-01-03 18:03:39","2021-01-05 16:43:40");
INSERT INTO purchases VALUES("97","pr-20210116-054445","28","1","1","1","100","0","0","50000","0","0","","","50000","50000","1","2","","","2021-01-15 18:44:45","2021-01-16 00:23:39");
INSERT INTO purchases VALUES("98","pr-20210127-100524","28","1","1","1","1","0","0","1200","0","0","","","1200","0","1","1","","","2021-01-26 23:05:24","2021-01-26 23:05:24");
INSERT INTO purchases VALUES("99","pr-20210203-041934","28","1","1","1","2","0","0","90000","0","0","0","0","90000","90000","1","2","","","2021-02-02 17:19:34","2021-02-02 18:33:56");
INSERT INTO purchases VALUES("100","pr-20210203-053631","28","1","3","1","3","0","0","1062","0","0","","","1062","0","1","1","","","2021-02-02 18:36:31","2021-02-02 18:36:31");
INSERT INTO purchases VALUES("101","pr-20210203-053827","28","1","1","1","1","0","0","354","0","0","","","354","0","1","1","","","2021-02-02 18:38:27","2021-02-02 18:38:27");
INSERT INTO purchases VALUES("102","pr-20210203-094820","28","1","3","1","5","0","0","4090","0","0","0","0","4090","0","1","1","","","2021-02-02 22:48:20","2021-02-03 19:29:41");
INSERT INTO purchases VALUES("103","pr-20210204-113810","28","1","3","1","1","0","0","1000","0","0","","","1000","0","1","1","","","2021-02-04 00:38:10","2021-02-04 00:38:10");
INSERT INTO purchases VALUES("104","pr-20210206-052830","28","1","3","2","5","0","0","244546","0","0","0","0","244546","0","1","1","","","2021-02-05 18:28:30","2021-02-05 23:12:00");
INSERT INTO purchases VALUES("105","pr-20210206-054205","28","1","1","1","1","0","0","3000","0","0","","","3000","0","1","1","","","2021-02-05 18:42:05","2021-02-05 18:42:05");
INSERT INTO purchases VALUES("106","pr-20210206-054354","28","1","1","2","6","0","0","18000","0","0","0","0","18000","18000","1","2","","","2021-02-05 18:43:54","2021-02-06 22:44:32");
INSERT INTO purchases VALUES("107","pr-20210208-101415","28","1","3","1","5","0","0","5000","0","0","","","5000","0","1","1","","","2021-02-07 23:14:15","2021-02-07 23:14:15");
INSERT INTO purchases VALUES("108","pr-20210209-083456","28","1","1","5","5","0","0","225800","7.5","16935","0","15000","257735","0","1","1","","Quote validity period","2021-02-08 21:34:56","2021-02-08 21:38:14");
INSERT INTO purchases VALUES("109","pr-20210211-111316","28","1","1","1","5","0","0","9000","0","0","","","9000","0","1","1","","","2021-02-11 00:13:16","2021-02-11 00:13:16");
INSERT INTO purchases VALUES("110","pr-20210211-112553","28","1","1","1","6","0","0","420","0","0","","","420","0","1","1","","","2021-02-11 00:25:53","2021-02-11 00:25:53");
INSERT INTO purchases VALUES("111","pr-20210213-065524","28","1","3","1","2","0","0","90000","0","0","","","90000","0","1","1","","","2021-02-12 19:55:24","2021-02-12 19:55:24");
INSERT INTO purchases VALUES("112","pr-20220322-053129","1","1","1","1","1","0","0","1000","0","0","","","1000","0","1","1","","","2022-03-21 19:31:29","2022-03-21 19:31:29");
INSERT INTO purchases VALUES("113","pr-20220322-060503","1","1","1","1","1","0","0","4000","0","0","","","4000","0","1","1","","","2022-03-21 20:05:03","2022-03-21 20:05:03");
INSERT INTO purchases VALUES("114","pr-20220322-061052","1","1","1","1","100","0","0","400000","0","0","0","0","400000","0","1","1","","test","2022-03-21 20:10:52","2022-03-21 20:22:52");
INSERT INTO purchases VALUES("115","pr-20220524-061932","1","1","1","1","10000","0","0","50000","0","0","0","0","50000","50000","4","2","","","2022-05-24 06:19:32","2022-05-24 06:23:41");



CREATE TABLE `quotations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `biller_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_price` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `order_discount` double DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `quotation_status` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO quotations VALUES("1","qr-20180809-055250","1","1","3","3","1","3","57","35","767.73","5930","10","583","100","500","6913","2","","first quotation...","2018-08-08 19:52:50","2018-09-03 23:32:16");
INSERT INTO quotations VALUES("2","qr-20180904-040257","1","1","","1","1","2","3.5","0","0","76","0","0","1.6","2.7","77.1","1","","","2018-09-03 18:02:57","2018-09-21 03:05:57");
INSERT INTO quotations VALUES("3","qr-20181023-061249","9","1","3","11","1","2","2","0","40","453","0","0","0","0","453","2","","","2018-10-22 20:12:49","2019-12-21 01:41:36");
INSERT INTO quotations VALUES("11","qr-20201024-090814","1","1","","1","1","1","2","0","3000","23000","0","0","0","0","23000","2","","","2020-10-23 23:08:14","2020-12-01 22:57:03");
INSERT INTO quotations VALUES("12","qr-20201202-101914","28","2","1","1","1","1","1","0","3400","37400","10","3736","40","50","41146","2","20190228-124939.csv","hello hello","2020-12-01 23:19:14","2020-12-01 23:19:14");



CREATE TABLE `report_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(191) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `site_logo` varchar(191) DEFAULT NULL,
  `logo_position` tinyint(4) DEFAULT NULL COMMENT '1=center|0=left',
  `text_font` tinyint(4) DEFAULT NULL COMMENT '0=small|1=medium|2=large',
  `text_format` tinyint(4) DEFAULT NULL COMMENT '0=ariel|1=roman|2=lucida',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `developed_by` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO report_settings VALUES("1","Acquaint Technologies","G.A Bhaban, 3rd Floor, Purana Paltan, Dhaka 1000","01521100281","safi151289@gmail.com","Fax-12345678","acquaintbd.com","Acquaint Logo Whit.png","0","0","0","2018-07-06 02:13:11","2021-02-12 22:15:28","acquaint");



CREATE TABLE `return_purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_cost` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO return_purchases VALUES("1","prr-20190101-090759","3","1","1","1","1","1","0","0","200","0","0","200","","","","2018-12-31 22:07:59","2019-12-07 06:19:03");
INSERT INTO return_purchases VALUES("7","prr-20201230-095909","6","1","28","4","1","50","0","0","12500","0","0","12500","","","","2020-12-29 22:59:09","2020-12-29 22:59:09");
INSERT INTO return_purchases VALUES("8","prr-20210106-042316","6","1","28","4","1","5","0","0","2500","0","0","2500","","","","2021-01-05 17:23:16","2021-01-05 17:23:16");
INSERT INTO return_purchases VALUES("9","prr-20210123-071507","1","1","28","4","1","5","0","0","2500","0","0","2500","","","","2021-01-22 20:15:07","2021-01-22 20:15:07");
INSERT INTO return_purchases VALUES("10","prr-20220322-063709","1","1","1","6","1","1","0","0","4000","0","0","4000","","","","2022-03-21 20:37:09","2022-03-21 20:41:45");



CREATE TABLE `returns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `biller_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_price` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO returns VALUES("2","rr-20180809-055834","1","","1","1","1","1","1","20","0","0","40","10","4","44","","","","2018-08-08 19:58:34","2018-08-08 19:58:34");
INSERT INTO returns VALUES("3","rr-20180828-045527","1","","1","1","1","1","1","2","0","0","44","0","0","44","","","","2018-08-27 18:55:27","2018-09-20 07:03:47");
INSERT INTO returns VALUES("5","rr-20181007-082129","1","","11","1","2","1","1","1","0","0","250","0","0","250","","","","2018-10-06 22:21:29","2018-12-25 17:16:08");
INSERT INTO returns VALUES("6","rr-20190101-090630","9","","1","1","1","1","1","1","0","40","440","0","0","440","","","","2018-12-31 22:06:30","2018-12-31 22:06:30");
INSERT INTO returns VALUES("13","rr-20200816-102502","1","","1","1","2","1","1","1","0","1500","11500","0","0","11500","","","","2020-08-16 12:25:02","2020-08-16 12:25:02");
INSERT INTO returns VALUES("14","rr-20201013-053954","9","1","1","1","1","1","1","1","0","40","440","0","0","440","","","","2020-10-13 07:39:54","2020-10-13 07:39:54");
INSERT INTO returns VALUES("18","rr-20201118-070218","1","4","1","1","1","1","1","1","0","1500","11500","0","0","11500","","","","2020-11-17 20:02:18","2020-11-17 20:02:18");
INSERT INTO returns VALUES("19","rr-20201202-110856","28","5","2","1","2","1","1","1","0","3060","33660","10","3366","37026","AtechSalesPOS (3).csv","sample","demo","2020-12-02 00:08:56","2020-12-02 00:08:56");
INSERT INTO returns VALUES("20","rr-20201230-100325","28","5","26","1","9","4","1","1","0","0","280","0","0","280","","","","2020-12-29 23:03:25","2020-12-29 23:03:25");
INSERT INTO returns VALUES("21","rr-20210106-044242","28","7","26","1","9","4","1","1","0","0","502","0","0","502","","","","2021-01-05 17:42:42","2021-01-05 17:42:42");
INSERT INTO returns VALUES("22","rr-20220322-071334","1","3","25","1","1","6","1","1","0","0","5000","0","0","5000","","","","2022-03-21 21:13:34","2022-03-21 21:19:15");



CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO role_has_permissions VALUES("4","1");
INSERT INTO role_has_permissions VALUES("4","2");
INSERT INTO role_has_permissions VALUES("4","4");
INSERT INTO role_has_permissions VALUES("5","1");
INSERT INTO role_has_permissions VALUES("5","2");
INSERT INTO role_has_permissions VALUES("6","1");
INSERT INTO role_has_permissions VALUES("6","2");
INSERT INTO role_has_permissions VALUES("6","4");
INSERT INTO role_has_permissions VALUES("7","1");
INSERT INTO role_has_permissions VALUES("7","2");
INSERT INTO role_has_permissions VALUES("7","4");
INSERT INTO role_has_permissions VALUES("8","1");
INSERT INTO role_has_permissions VALUES("8","2");
INSERT INTO role_has_permissions VALUES("8","4");
INSERT INTO role_has_permissions VALUES("9","1");
INSERT INTO role_has_permissions VALUES("9","2");
INSERT INTO role_has_permissions VALUES("9","4");
INSERT INTO role_has_permissions VALUES("10","1");
INSERT INTO role_has_permissions VALUES("10","2");
INSERT INTO role_has_permissions VALUES("11","1");
INSERT INTO role_has_permissions VALUES("11","2");
INSERT INTO role_has_permissions VALUES("12","1");
INSERT INTO role_has_permissions VALUES("12","2");
INSERT INTO role_has_permissions VALUES("12","4");
INSERT INTO role_has_permissions VALUES("13","1");
INSERT INTO role_has_permissions VALUES("13","2");
INSERT INTO role_has_permissions VALUES("13","4");
INSERT INTO role_has_permissions VALUES("14","1");
INSERT INTO role_has_permissions VALUES("14","2");
INSERT INTO role_has_permissions VALUES("15","1");
INSERT INTO role_has_permissions VALUES("15","2");
INSERT INTO role_has_permissions VALUES("16","1");
INSERT INTO role_has_permissions VALUES("16","2");
INSERT INTO role_has_permissions VALUES("17","1");
INSERT INTO role_has_permissions VALUES("17","2");
INSERT INTO role_has_permissions VALUES("18","1");
INSERT INTO role_has_permissions VALUES("18","2");
INSERT INTO role_has_permissions VALUES("19","1");
INSERT INTO role_has_permissions VALUES("19","2");
INSERT INTO role_has_permissions VALUES("20","1");
INSERT INTO role_has_permissions VALUES("20","2");
INSERT INTO role_has_permissions VALUES("20","4");
INSERT INTO role_has_permissions VALUES("21","1");
INSERT INTO role_has_permissions VALUES("21","2");
INSERT INTO role_has_permissions VALUES("21","4");
INSERT INTO role_has_permissions VALUES("22","1");
INSERT INTO role_has_permissions VALUES("22","2");
INSERT INTO role_has_permissions VALUES("22","4");
INSERT INTO role_has_permissions VALUES("23","1");
INSERT INTO role_has_permissions VALUES("23","2");
INSERT INTO role_has_permissions VALUES("24","1");
INSERT INTO role_has_permissions VALUES("24","2");
INSERT INTO role_has_permissions VALUES("24","4");
INSERT INTO role_has_permissions VALUES("25","1");
INSERT INTO role_has_permissions VALUES("25","2");
INSERT INTO role_has_permissions VALUES("25","4");
INSERT INTO role_has_permissions VALUES("26","1");
INSERT INTO role_has_permissions VALUES("26","2");
INSERT INTO role_has_permissions VALUES("27","1");
INSERT INTO role_has_permissions VALUES("27","2");
INSERT INTO role_has_permissions VALUES("28","1");
INSERT INTO role_has_permissions VALUES("28","2");
INSERT INTO role_has_permissions VALUES("28","4");
INSERT INTO role_has_permissions VALUES("29","1");
INSERT INTO role_has_permissions VALUES("29","2");
INSERT INTO role_has_permissions VALUES("29","4");
INSERT INTO role_has_permissions VALUES("30","1");
INSERT INTO role_has_permissions VALUES("30","2");
INSERT INTO role_has_permissions VALUES("31","1");
INSERT INTO role_has_permissions VALUES("31","2");
INSERT INTO role_has_permissions VALUES("32","1");
INSERT INTO role_has_permissions VALUES("32","2");
INSERT INTO role_has_permissions VALUES("33","1");
INSERT INTO role_has_permissions VALUES("33","2");
INSERT INTO role_has_permissions VALUES("34","1");
INSERT INTO role_has_permissions VALUES("34","2");
INSERT INTO role_has_permissions VALUES("35","1");
INSERT INTO role_has_permissions VALUES("35","2");
INSERT INTO role_has_permissions VALUES("36","1");
INSERT INTO role_has_permissions VALUES("36","2");
INSERT INTO role_has_permissions VALUES("37","1");
INSERT INTO role_has_permissions VALUES("37","2");
INSERT INTO role_has_permissions VALUES("38","1");
INSERT INTO role_has_permissions VALUES("38","2");
INSERT INTO role_has_permissions VALUES("39","1");
INSERT INTO role_has_permissions VALUES("39","2");
INSERT INTO role_has_permissions VALUES("40","1");
INSERT INTO role_has_permissions VALUES("40","2");
INSERT INTO role_has_permissions VALUES("41","1");
INSERT INTO role_has_permissions VALUES("41","2");
INSERT INTO role_has_permissions VALUES("42","1");
INSERT INTO role_has_permissions VALUES("42","2");
INSERT INTO role_has_permissions VALUES("43","1");
INSERT INTO role_has_permissions VALUES("43","2");
INSERT INTO role_has_permissions VALUES("44","1");
INSERT INTO role_has_permissions VALUES("44","2");
INSERT INTO role_has_permissions VALUES("45","1");
INSERT INTO role_has_permissions VALUES("45","2");
INSERT INTO role_has_permissions VALUES("46","1");
INSERT INTO role_has_permissions VALUES("46","2");
INSERT INTO role_has_permissions VALUES("47","1");
INSERT INTO role_has_permissions VALUES("47","2");
INSERT INTO role_has_permissions VALUES("48","1");
INSERT INTO role_has_permissions VALUES("48","2");
INSERT INTO role_has_permissions VALUES("49","1");
INSERT INTO role_has_permissions VALUES("49","2");
INSERT INTO role_has_permissions VALUES("50","1");
INSERT INTO role_has_permissions VALUES("50","2");
INSERT INTO role_has_permissions VALUES("51","1");
INSERT INTO role_has_permissions VALUES("51","2");
INSERT INTO role_has_permissions VALUES("52","1");
INSERT INTO role_has_permissions VALUES("52","2");
INSERT INTO role_has_permissions VALUES("53","1");
INSERT INTO role_has_permissions VALUES("53","2");
INSERT INTO role_has_permissions VALUES("54","1");
INSERT INTO role_has_permissions VALUES("54","2");
INSERT INTO role_has_permissions VALUES("55","1");
INSERT INTO role_has_permissions VALUES("55","2");
INSERT INTO role_has_permissions VALUES("55","4");
INSERT INTO role_has_permissions VALUES("56","1");
INSERT INTO role_has_permissions VALUES("56","2");
INSERT INTO role_has_permissions VALUES("56","4");
INSERT INTO role_has_permissions VALUES("57","1");
INSERT INTO role_has_permissions VALUES("57","2");
INSERT INTO role_has_permissions VALUES("57","4");
INSERT INTO role_has_permissions VALUES("58","1");
INSERT INTO role_has_permissions VALUES("58","2");
INSERT INTO role_has_permissions VALUES("59","1");
INSERT INTO role_has_permissions VALUES("59","2");
INSERT INTO role_has_permissions VALUES("60","1");
INSERT INTO role_has_permissions VALUES("60","2");
INSERT INTO role_has_permissions VALUES("61","1");
INSERT INTO role_has_permissions VALUES("61","2");
INSERT INTO role_has_permissions VALUES("62","1");
INSERT INTO role_has_permissions VALUES("62","2");
INSERT INTO role_has_permissions VALUES("63","1");
INSERT INTO role_has_permissions VALUES("63","2");
INSERT INTO role_has_permissions VALUES("63","4");
INSERT INTO role_has_permissions VALUES("64","1");
INSERT INTO role_has_permissions VALUES("64","2");
INSERT INTO role_has_permissions VALUES("64","4");
INSERT INTO role_has_permissions VALUES("65","1");
INSERT INTO role_has_permissions VALUES("65","2");
INSERT INTO role_has_permissions VALUES("66","1");
INSERT INTO role_has_permissions VALUES("66","2");
INSERT INTO role_has_permissions VALUES("67","1");
INSERT INTO role_has_permissions VALUES("67","2");
INSERT INTO role_has_permissions VALUES("68","1");
INSERT INTO role_has_permissions VALUES("68","2");
INSERT INTO role_has_permissions VALUES("69","1");
INSERT INTO role_has_permissions VALUES("69","2");
INSERT INTO role_has_permissions VALUES("70","1");
INSERT INTO role_has_permissions VALUES("70","2");
INSERT INTO role_has_permissions VALUES("71","1");
INSERT INTO role_has_permissions VALUES("71","2");
INSERT INTO role_has_permissions VALUES("72","1");
INSERT INTO role_has_permissions VALUES("72","2");
INSERT INTO role_has_permissions VALUES("73","1");
INSERT INTO role_has_permissions VALUES("73","2");
INSERT INTO role_has_permissions VALUES("74","1");
INSERT INTO role_has_permissions VALUES("74","2");
INSERT INTO role_has_permissions VALUES("75","1");
INSERT INTO role_has_permissions VALUES("75","2");
INSERT INTO role_has_permissions VALUES("76","1");
INSERT INTO role_has_permissions VALUES("76","2");
INSERT INTO role_has_permissions VALUES("77","1");
INSERT INTO role_has_permissions VALUES("77","2");
INSERT INTO role_has_permissions VALUES("78","1");
INSERT INTO role_has_permissions VALUES("78","2");
INSERT INTO role_has_permissions VALUES("79","1");
INSERT INTO role_has_permissions VALUES("79","2");
INSERT INTO role_has_permissions VALUES("80","1");
INSERT INTO role_has_permissions VALUES("80","2");
INSERT INTO role_has_permissions VALUES("81","1");
INSERT INTO role_has_permissions VALUES("81","2");
INSERT INTO role_has_permissions VALUES("82","1");
INSERT INTO role_has_permissions VALUES("82","2");
INSERT INTO role_has_permissions VALUES("83","1");
INSERT INTO role_has_permissions VALUES("83","2");
INSERT INTO role_has_permissions VALUES("84","1");
INSERT INTO role_has_permissions VALUES("84","2");
INSERT INTO role_has_permissions VALUES("85","1");
INSERT INTO role_has_permissions VALUES("85","2");
INSERT INTO role_has_permissions VALUES("86","1");
INSERT INTO role_has_permissions VALUES("86","2");
INSERT INTO role_has_permissions VALUES("87","1");
INSERT INTO role_has_permissions VALUES("87","2");
INSERT INTO role_has_permissions VALUES("88","1");
INSERT INTO role_has_permissions VALUES("88","2");
INSERT INTO role_has_permissions VALUES("89","1");
INSERT INTO role_has_permissions VALUES("89","2");
INSERT INTO role_has_permissions VALUES("90","1");
INSERT INTO role_has_permissions VALUES("90","2");
INSERT INTO role_has_permissions VALUES("91","1");
INSERT INTO role_has_permissions VALUES("91","2");
INSERT INTO role_has_permissions VALUES("92","1");
INSERT INTO role_has_permissions VALUES("92","2");
INSERT INTO role_has_permissions VALUES("93","1");
INSERT INTO role_has_permissions VALUES("93","2");
INSERT INTO role_has_permissions VALUES("94","1");
INSERT INTO role_has_permissions VALUES("94","2");
INSERT INTO role_has_permissions VALUES("95","1");
INSERT INTO role_has_permissions VALUES("95","2");
INSERT INTO role_has_permissions VALUES("96","1");
INSERT INTO role_has_permissions VALUES("96","2");
INSERT INTO role_has_permissions VALUES("97","1");
INSERT INTO role_has_permissions VALUES("97","2");
INSERT INTO role_has_permissions VALUES("98","1");
INSERT INTO role_has_permissions VALUES("98","2");
INSERT INTO role_has_permissions VALUES("99","1");
INSERT INTO role_has_permissions VALUES("99","2");
INSERT INTO role_has_permissions VALUES("100","1");
INSERT INTO role_has_permissions VALUES("100","2");
INSERT INTO role_has_permissions VALUES("101","1");
INSERT INTO role_has_permissions VALUES("101","2");
INSERT INTO role_has_permissions VALUES("102","1");
INSERT INTO role_has_permissions VALUES("102","2");
INSERT INTO role_has_permissions VALUES("103","1");
INSERT INTO role_has_permissions VALUES("103","2");
INSERT INTO role_has_permissions VALUES("104","1");
INSERT INTO role_has_permissions VALUES("104","2");



CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO roles VALUES("1","Admin","admin can access all data...","web","1","2018-06-01 19:46:44","2018-06-02 19:13:05");
INSERT INTO roles VALUES("2","Owner","Owner of shop...","web","1","2018-10-21 22:38:13","2018-10-21 22:38:13");
INSERT INTO roles VALUES("4","staff","staff has specific acess...","web","1","2018-06-01 20:05:27","2018-06-01 20:05:27");
INSERT INTO roles VALUES("5","Customer","","web","1","2020-11-05 01:43:16","2020-11-14 19:24:15");
INSERT INTO roles VALUES("6","IT Officer","Simple IT Officer","web","1","2020-12-02 21:39:19","2020-12-02 21:39:19");



CREATE TABLE `sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL DEFAULT 1,
  `biller_id` int(11) DEFAULT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_price` double NOT NULL,
  `grand_total` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `order_discount` double DEFAULT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `coupon_discount` double DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `sale_status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `sale_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=318 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO sales VALUES("1","sr-20180808-043622","1","","1","1","1","2","3","10","15.65","350","380","10","30","50","","","50","1","2","","0","ukgjkgjkgkj","gjkgjkgkujg","2018-08-08 06:36:22","2018-10-06 05:25:29","");
INSERT INTO sales VALUES("2","sr-20180809-055453","1","","3","1","1","3","63","0","469.3","5103","5503","0","0","100","","","500","1","2","","2200","","","2018-08-08 19:54:53","2018-08-08 19:56:35","");
INSERT INTO sales VALUES("3","posr-20180809-063214","1","","2","1","2","3","26","0","0","897","897","0","0","","","","","1","4","","897","","","2018-08-08 20:32:14","2018-08-08 20:32:14","");
INSERT INTO sales VALUES("4","sr-20180825-034836","1","","1","1","1","1","2","0","80","880","880","0","0","","","","","1","2","","300","","","2018-08-24 17:48:36","2018-09-21 22:56:03","");
INSERT INTO sales VALUES("6","sr-20180826-094836","1","","2","1","2","1","1","0","0","18.9","20","0","0","0","","","1.1","1","4","","20","","","2018-08-25 23:48:36","2018-08-26 01:48:05","");
INSERT INTO sales VALUES("7","sr-20180827-073545","1","","1","1","1","1","2","0","80","880","880","0","0","","","","","1","4","","880","","","2018-08-26 21:35:45","2018-08-26 21:35:45","");
INSERT INTO sales VALUES("8","posr-20180902-053954","1","","1","1","2","1","2","0","288","3168","3529.8","10","311.8","50","","","100","1","4","","3529.8","good customer","good customer","2018-09-01 19:39:54","2018-09-01 19:39:54","");
INSERT INTO sales VALUES("9","posr-20180903-033314","1","","1","1","1","1","10","0","0","20","20","0","0","","","","","1","4","","20","","","2018-09-02 17:33:14","2018-09-02 17:33:14","");
INSERT INTO sales VALUES("10","posr-20180903-050138","1","","11","1","1","1","1","0","0","250","250","0","0","","","","","1","2","","200","","","2018-09-02 19:01:38","2018-09-09 17:40:28","");
INSERT INTO sales VALUES("11","posr-20180903-100821","1","","11","1","1","1","5","0","500","5500","5500","0","0","","","","","1","4","","5500","","","2018-09-03 00:08:21","2018-09-03 00:08:21","");
INSERT INTO sales VALUES("12","sr-20180903-101026","1","","3","1","5","1","10","0","1050","11550","11550","0","0","","","","","1","2","","0","","","2018-09-03 00:10:26","2018-09-21 22:55:14","");
INSERT INTO sales VALUES("29","sr-20180909-093841","1","","1","1","1","1","1","0","0","120","132","10","12","","","","","1","2","","0","","","2018-09-08 23:38:41","2018-10-05 22:36:52","");
INSERT INTO sales VALUES("30","posr-20180910-045706","1","","11","1","1","1","1","0","40","440","440","0","0","0","","","0","1","2","","120","","","2018-09-09 18:57:06","2018-10-05 20:53:20","");
INSERT INTO sales VALUES("31","posr-20180926-092059","1","","11","1","1","2","2","0","55.65","560","560","0","0","0","","","0","1","4","","560","","","2018-09-25 23:20:59","2018-09-25 23:21:25","");
INSERT INTO sales VALUES("32","posr-20181004-095547","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","2","","","","","2018-10-03 23:55:47","2018-10-03 23:55:47","");
INSERT INTO sales VALUES("33","posr-20181004-100022","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","2","","","","","2018-10-04 00:00:22","2018-10-04 00:00:22","");
INSERT INTO sales VALUES("37","sr-20181007-064605","1","","1","1","1","1","1","0","0","250","250","0","0","","","","","1","2","","0","","","2018-10-06 20:46:05","2018-10-06 20:46:28","");
INSERT INTO sales VALUES("38","posr-20181007-064719","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","2","","0","","","2018-10-06 20:47:19","2018-10-06 23:17:02","");
INSERT INTO sales VALUES("40","posr-20181007-071312","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","2","","0","","","2018-10-06 21:13:12","2018-10-06 23:17:39","");
INSERT INTO sales VALUES("41","posr-20181010-041621","1","","1","1","1","2","2","0","40","461","461","0","0","","","","","1","4","","461","","","2018-10-09 18:16:21","2018-10-09 18:16:21","");
INSERT INTO sales VALUES("42","posr-20181010-053450","1","","1","1","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2018-10-09 19:34:50","2018-10-09 19:34:50","");
INSERT INTO sales VALUES("43","sr-20181016-033434","1","","1","1","1","1","1","0","40","440","440","0","0","","","","","1","2","","0","sss
sss
s","","2018-10-15 17:34:34","2018-10-22 20:21:27","");
INSERT INTO sales VALUES("55","posr-20181021-065334","1","","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2018-10-20 20:53:34","2018-10-20 20:53:34","");
INSERT INTO sales VALUES("57","posr-20181021-082612","1","","11","1","1","2","3","0","40","482","575.2","10","43.2","50","","","100","1","4","","575.2","","","2018-10-20 22:26:12","2018-10-20 22:26:12","");
INSERT INTO sales VALUES("58","posr-20181022-032723","1","","11","1","1","2","2","0","100","1220","1220","0","0","","","","","1","4","","1220","","","2018-10-22 05:27:23","2018-10-22 05:27:23","");
INSERT INTO sales VALUES("73","posr-20181023-071543","11","","11","1","5","2","5","0","500","5500","5500","0","0","","","","","1","4","","5500","","","2018-10-22 21:15:43","2018-10-22 21:15:43","");
INSERT INTO sales VALUES("74","posr-20181023-071644","1","","11","1","1","3","3","0","200","2320","2320","0","0","","","","","1","4","","2320","","","2018-10-22 21:16:44","2018-10-22 21:16:44","");
INSERT INTO sales VALUES("75","posr-20181101-050027","1","","11","1","1","5","12","0","626.96","6980","7678","10","698","","","","","1","4","","7678","","","2018-10-31 19:00:27","2018-10-31 19:00:27","");
INSERT INTO sales VALUES("76","posr-20181101-050126","1","","11","1","1","3","6","0","100","1434","1424","0","0","10","","","0","1","4","","1424","","","2018-10-31 19:01:26","2018-11-07 22:44:51","");
INSERT INTO sales VALUES("79","posr-20181105-091516","1","","11","1","1","7","52","0","1069.57","14454","14454","0","0","","","","","1","4","","14454","","","2018-11-04 22:15:16","2018-11-04 22:15:16","");
INSERT INTO sales VALUES("80","posr-20181105-091958","1","","11","1","1","3","8","0","191.3","2500","2500","0","0","","","","","1","4","","2500","","","2018-11-04 22:19:58","2018-11-04 22:19:58","");
INSERT INTO sales VALUES("86","posr-20181105-095948","1","","11","1","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2018-11-04 22:59:48","2018-11-04 22:59:48","");
INSERT INTO sales VALUES("88","posr-20181105-100258","1","","11","1","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2018-11-04 23:02:58","2018-11-04 23:02:58","");
INSERT INTO sales VALUES("94","posr-20181126-020534","1","","11","1","1","1","1","0","15.65","120","120","0","0","","","","","1","4","","120","","","2018-11-26 03:05:34","2018-11-26 03:05:34","");
INSERT INTO sales VALUES("95","posr-20181127-093608","1","","11","1","1","1","3","0","0","360","360","0","0","","","","","1","2","","","","","2018-11-26 22:36:08","2018-11-26 22:36:08","");
INSERT INTO sales VALUES("96","posr-20181128-071509","1","","11","1","1","1","1","0","15.65","120","132","10","12","","","","","1","4","","132","","","2018-11-27 20:15:09","2018-11-27 20:15:09","");
INSERT INTO sales VALUES("97","posr-20181201-060518","1","","11","1","1","2","3","0","31.3","262","262","0","0","","","","","1","2","","200","","","2018-11-30 19:05:18","2018-12-03 19:21:05","");
INSERT INTO sales VALUES("98","posr-20181205-053558","1","","11","1","1","2","4","0","0","800","800","0","0","","","","","1","4","","800","","","2018-12-04 18:35:58","2018-12-04 18:35:58","");
INSERT INTO sales VALUES("99","posr-20181205-053719","1","","11","1","1","2","4","0","0","800","800","0","0","","","","","1","4","","800","","","2018-12-04 18:37:19","2018-12-04 18:37:19","");
INSERT INTO sales VALUES("101","posr-20181208-062026","1","","11","1","1","1","1","0","0","100","100","0","0","","","","","1","4","","100","","","2018-12-07 19:20:26","2018-12-07 19:20:26","");
INSERT INTO sales VALUES("103","posr-20181224-045832","1","","11","1","1","1","1","0","15.65","120","120","0","0","","","","","1","4","","120","","","2018-12-23 17:58:32","2018-12-23 17:58:32","");
INSERT INTO sales VALUES("104","sr-20181224-091527","1","","1","1","2","2","6","0","0","2508","2518","0","0","0","","","10","1","2","","","","","2018-12-23 22:15:27","2018-12-24 16:55:23","");
INSERT INTO sales VALUES("105","posr-20190101-054538","1","","1","1","1","1","1","0","0","21","21","0","0","","","","","1","4","","21","","","2018-12-31 18:45:38","2018-12-31 18:45:38","");
INSERT INTO sales VALUES("106","posr-20190101-091040","1","","11","1","1","3","5","0","15.65","860","860","0","0","","","","","1","4","","860","","","2018-12-31 22:10:40","2018-12-31 22:10:40","");
INSERT INTO sales VALUES("107","posr-20190103-065626","1","","11","1","1","6","10","0","395.65","5040","5040","0","0","","","","","1","4","","5040","","","2019-01-02 19:56:26","2019-01-02 19:56:26","");
INSERT INTO sales VALUES("108","posr-20190120-035824","1","","11","1","1","1","1","0","15.65","120","120","0","0","","","","","1","4","","120","","","2019-01-20 04:58:24","2019-01-20 04:58:24","");
INSERT INTO sales VALUES("109","posr-20190129-101443","9","","11","1","5","2","2","0","40","540","540","0","0","","","","","1","4","","540","","","2019-01-28 23:14:43","2019-01-28 23:14:43","");
INSERT INTO sales VALUES("110","posr-20190129-115041","9","","11","1","5","2","3","0","100","1700","1700","0","0","","","","","1","4","","1700","","","2019-01-29 00:50:41","2019-01-29 00:50:41","");
INSERT INTO sales VALUES("111","posr-20190131-110839","9","","11","1","5","2","2","0","0","271","271","0","0","","","","","1","4","","271","","","2019-01-31 00:08:39","2019-01-31 00:08:39","");
INSERT INTO sales VALUES("112","posr-20190202-104045","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2019-02-01 23:40:45","2019-02-01 23:40:45","");
INSERT INTO sales VALUES("113","posr-20190202-114117","1","","11","1","1","2","2","0","0","350","350","0","0","","","","","1","4","","350","","","2019-02-02 00:41:17","2019-02-02 00:41:17","");
INSERT INTO sales VALUES("114","posr-20190205-030445","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2019-02-05 04:04:45","2019-02-05 04:04:45","");
INSERT INTO sales VALUES("118","posr-20190207-111542","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","3","2","","","","","2019-02-07 00:15:42","2019-02-07 00:15:42","");
INSERT INTO sales VALUES("120","sr-20190207-114036","1","","1","1","2","1","1","0","40","440","440","0","0","","","","","1","2","","50","","","2019-02-07 00:40:36","2019-02-07 02:09:15","");
INSERT INTO sales VALUES("121","posr-20190209-104814","1","","11","1","1","7","17","0","55.65","1272","1272","0","0","","","","","1","4","","1272","","","2019-02-08 23:48:14","2019-02-08 23:48:14","");
INSERT INTO sales VALUES("123","posr-20190219-023214","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2019-02-19 03:32:14","2019-02-19 03:32:14","");
INSERT INTO sales VALUES("127","posr-20190303-104010","1","","11","1","1","3","3","0","200","2500","2500","0","0","","","","","1","4","","2500","","","2019-03-02 23:40:10","2019-03-02 23:40:10","");
INSERT INTO sales VALUES("128","posr-20190404-095555","1","","11","1","1","2","2","0","55.65","560","560","0","0","","","","","1","4","","560","","","2019-04-03 23:55:55","2019-04-03 23:55:55","");
INSERT INTO sales VALUES("129","posr-20190404-095937","1","","11","1","1","1","2","0","0","240","240","0","0","0","","","0","1","2","","120","","","2019-04-03 23:59:37","2019-04-11 00:50:16","");
INSERT INTO sales VALUES("130","posr-20190421-122124","1","","11","1","1","3","3","0","58.78","586","586","0","0","","","","","1","4","","586","","","2019-04-21 02:21:24","2019-04-21 02:21:24","");
INSERT INTO sales VALUES("131","posr-20190528-103229","1","","11","1","1","4","4","0","240","2890","2890","0","0","","","","","1","4","","2890","","","2019-05-28 00:32:29","2019-05-28 00:32:29","");
INSERT INTO sales VALUES("132","posr-20190613-101637","1","","11","1","1","3","3","0","40","840","840","0","0","","","","","1","4","","840","","","2019-06-13 00:16:37","2019-06-13 00:16:37","");
INSERT INTO sales VALUES("133","posr-20190613-101751","1","","11","1","1","3","4","0","200","2700","2700","0","0","","","","","1","4","","2700","","","2019-06-13 00:17:51","2019-06-13 00:17:51","");
INSERT INTO sales VALUES("134","posr-20191019-033028","1","","11","1","1","4","4","0","240","2940","2940","0","0","","","","","1","4","","2940","","","2019-10-19 05:30:28","2019-10-19 05:30:28","");
INSERT INTO sales VALUES("138","sr-20191031-122937","1","","1","1","1","1","1","0","0","120","120","0","0","","","","","1","1","","","","","2019-10-31 02:29:37","2019-10-31 02:29:37","");
INSERT INTO sales VALUES("139","posr-20191103-114044","1","","11","1","1","2","102","0","37.57","488","488","0","0","","","","","1","4","","488","","","2019-11-03 01:40:44","2019-11-03 01:40:44","");
INSERT INTO sales VALUES("144","posr-20191109-074131","1","","11","1","1","2","2","0","100","1220","1220","0","0","0","","","0","1","4","","1220","","","2019-11-09 08:41:31","2019-11-09 08:41:31","");
INSERT INTO sales VALUES("147","posr-20191111-104008","1","","11","1","1","3","12","0","200","2220","2220","0","0","","","","","1","4","","2220","","","2019-11-10 23:40:08","2019-11-10 23:40:08","");
INSERT INTO sales VALUES("172","posr-20191203-034631","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","2","","","","","2019-12-03 04:46:31","2019-12-03 04:46:31","");
INSERT INTO sales VALUES("173","sr-20191204-111940","1","","2","1","1","2","2","0","36","621","621","0","0","","","","","1","4","","621","","","2019-12-04 12:19:40","2019-12-04 22:27:12","");
INSERT INTO sales VALUES("187","posr-20191222-104058","1","","11","1","1","1","2","0","37.57","288","288","0","0","","","","","1","4","","288","","","2019-12-21 23:40:58","2019-12-21 23:40:58","");
INSERT INTO sales VALUES("190","posr-20191223-125946","1","","11","1","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2019-12-23 01:59:46","2019-12-23 01:59:46","");
INSERT INTO sales VALUES("193","posr-20200101-022028","1","","11","1","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2020-01-01 03:20:28","2020-01-01 03:20:28","");
INSERT INTO sales VALUES("194","posr-20200102-043947","1","","11","1","1","2","3","0","81.57","892","892","0","0","","","","","1","4","","892","","","2020-01-02 05:39:47","2020-01-02 05:39:47","");
INSERT INTO sales VALUES("201","posr-20200203-035256","1","","11","1","1","1","1","0","0","120","120","0","0","","","","","1","4","","120","","","2020-02-03 04:52:56","2020-02-03 04:52:56","");
INSERT INTO sales VALUES("202","posr-20200204-105853","1","","11","1","1","2","2","0","100","1400","1400","0","0","","","","","1","4","","1400","","","2020-02-04 11:58:53","2020-02-04 11:58:53","");
INSERT INTO sales VALUES("203","posr-20200302-115414","1","","11","1","1","2","2","0","0","350","350","0","0","","","","","1","4","","350","","","2020-03-02 00:54:14","2020-03-02 00:54:14","");
INSERT INTO sales VALUES("204","posr-20200302-115741","1","","11","1","1","1","20","0","0","40","40","0","0","","","","","1","4","","40","","","2020-03-02 00:57:41","2020-03-02 00:57:41","");
INSERT INTO sales VALUES("205","posr-20200311-044641","1","","11","1","1","1","1","0","40","440","352","0","0","","1","88","","1","4","","352","","","2020-03-11 06:46:42","2020-03-11 06:46:42","");
INSERT INTO sales VALUES("206","sr-20200311-045230","1","","1","1","1","1","1","0","0","120","120","0","0","0","","","0","1","2","","","","","2020-03-11 06:52:30","2020-03-11 06:54:04","");
INSERT INTO sales VALUES("207","posr-20200406-074024","1","","11","1","1","3","4","0","18.78","644","644","0","0","0","","","0","1","4","","644","","","2020-04-06 09:40:24","2020-04-06 09:42:01","");
INSERT INTO sales VALUES("208","posr-20200506-105950","1","","11","1","1","2","2","0","140","1540","1540","0","0","","","","","1","4","","1540","","","2020-05-06 12:59:50","2020-05-06 12:59:50","");
INSERT INTO sales VALUES("209","posr-20200609-124248","1","","11","1","1","2","2","0","100","1220","1220","0","0","","","","","1","4","","1220","","","2020-06-09 02:42:48","2020-06-09 02:42:48","");
INSERT INTO sales VALUES("212","posr-20200703-063914","1","","11","1","1","3","3","0","235","2585","2585","0","0","","","","","1","4","","2585","","","2020-07-03 08:39:14","2020-07-03 08:39:14","");
INSERT INTO sales VALUES("213","posr-20200712-095153","1","","11","1","1","1","1","0","0","13","13","0","0","","","","","1","4","","13","","","2020-07-12 11:51:53","2020-07-12 11:51:53","");
INSERT INTO sales VALUES("214","posr-20200714-115341","1","","11","1","1","1","1","0","0","250","309.5","10","24.5","5","","","40","3","2","","","","","2020-07-14 01:53:41","2020-07-14 01:53:41","");
INSERT INTO sales VALUES("217","posr-20200727-083808","1","","11","1","1","1","1","0","35","385","385","0","0","","","","","1","4","","385","","","2020-07-27 10:38:08","2020-07-27 10:38:08","");
INSERT INTO sales VALUES("218","posr-20200727-084024","1","","11","1","1","1","1","0","35","385","385","0","0","","","","","1","4","","385","","","2020-07-27 10:40:24","2020-07-27 10:40:24","");
INSERT INTO sales VALUES("219","posr-20200727-084644","1","","11","1","1","1","1","0","35","385","385","0","0","","","","","1","4","","385","","","2020-07-27 10:46:45","2020-07-27 10:46:45","");
INSERT INTO sales VALUES("220","posr-20200812-062804","1","","11","1","1","3","6","0","0","760","760","0","0","","","","","1","4","","760","","","2020-08-12 08:28:04","2020-08-12 08:28:04","");
INSERT INTO sales VALUES("221","posr-20200812-063035","1","","11","1","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2020-08-12 08:30:35","2020-08-12 08:30:35","");
INSERT INTO sales VALUES("222","posr-20200816-100424","1","","11","1","1","1","2","0","3000","23000","23000","0","0","","","","","1","4","","23000","","","2020-08-16 12:04:24","2020-08-16 12:04:24","");
INSERT INTO sales VALUES("223","posr-20200816-100523","1","","11","1","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2020-08-16 12:05:23","2020-08-16 12:07:35","");
INSERT INTO sales VALUES("224","sr-20200826-080139","1","","1","1","1","1","3","30","117","1287","1287","0","0","","","","","1","1","","","","","2020-08-26 10:01:39","2020-08-26 10:01:39","");
INSERT INTO sales VALUES("230","posr-20201017-092852","9","2","11","1","5","1","1","0","0","250","250","0","0","","","","","1","2","","350","","","2020-10-17 11:28:52","2020-10-18 00:51:38","");
INSERT INTO sales VALUES("231","sr-20201018-111333","9","2","1","1","5","1","1","0","40","440","440","0","0","","","","","1","2","","250","","","2020-10-18 01:13:33","2020-10-18 01:17:24","");
INSERT INTO sales VALUES("232","posr-20201022-013014","9","2","11","1","5","1","1","0","0","100","100","0","0","","","","","1","4","","100","","","2020-10-22 03:30:14","2020-10-22 03:30:14","");
INSERT INTO sales VALUES("233","posr-20201022-015604","1","3","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-22 03:56:04","2020-10-22 03:56:04","");
INSERT INTO sales VALUES("234","posr-20201024-070506","1","4","11","1","1","1","1","0","1500","11500","11500","0","0","","","","","1","4","","11500","","","2020-10-23 21:05:06","2020-10-23 21:05:06","");
INSERT INTO sales VALUES("235","posr-20201024-070751","1","4","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-23 21:07:51","2020-10-23 21:07:51","");
INSERT INTO sales VALUES("237","posr-20201024-034601","1","4","11","1","1","3","9","0","7900","61900","61900","0","0","","","","","1","4","","61900","","","2020-10-24 05:46:01","2020-10-24 05:46:01","");
INSERT INTO sales VALUES("239","posr-20201027-054002","1","3","11","1","1","1","1","0","0","2","2","0","0","","","","","1","4","","2","","","2020-10-26 19:40:02","2020-10-26 19:40:02","");
INSERT INTO sales VALUES("240","posr-20201027-054206","1","3","11","1","1","1","2","0","0","6","6","0","0","","","","","1","4","","6","","","2020-10-26 19:42:06","2020-10-26 19:42:06","");
INSERT INTO sales VALUES("241","posr-20201027-063200","1","4","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-26 20:32:00","2020-10-26 20:32:00","");
INSERT INTO sales VALUES("242","posr-20201029-073030","1","4","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-28 21:30:30","2020-10-28 21:30:30","");
INSERT INTO sales VALUES("243","posr-20201101-072112","1","4","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-31 21:21:12","2020-10-31 21:21:12","");
INSERT INTO sales VALUES("245","posr-20201101-074223","1","3","11","1","5","2","3","0","80","1130","1130","","0","0","","","0","1","4","","1130","","","2020-10-31 21:42:23","2020-10-31 21:42:23","");
INSERT INTO sales VALUES("246","posr-20201101-075017","1","4","11","1","1","1","1","0","40","440","440","0","0","0","","","0","1","4","","440","ssss
ssas","hhhh
kkkk","2020-10-31 21:50:17","2020-11-02 05:39:17","");
INSERT INTO sales VALUES("250","posr-20201106-013041","1","4","11","1","1","1","1","0","34.4","378.4","378.4","0","0","","","","","1","4","","378.4","","","2020-11-06 02:30:41","2020-11-06 02:30:41","");
INSERT INTO sales VALUES("251","posr-20201109-011524","1","4","19","1","1","2","2","0","34.4","610.6","610.6","0","0","","","","","1","2","","500","","","2020-11-09 02:15:24","2020-11-09 02:15:24","");
INSERT INTO sales VALUES("252","posr-20201111-055858","1","3","11","1","1","1","1","0","0","229.5","229.5","0","0","","","","","1","4","","229.5","","","2020-11-10 18:58:58","2020-11-10 18:58:58","");
INSERT INTO sales VALUES("253","posr-20201114-064736","1","4","11","1","1","3","3","0","1275","10242.5","10242.5","0","0","","","","","1","4","","10242.5","","","2020-11-13 19:47:36","2020-11-13 19:47:36","");
INSERT INTO sales VALUES("256","posr-20201117-064748","1","4","11","1","1","2","2","0","65","715","715","0","0","","","","","1","4","","715","","","2020-11-16 19:47:48","2020-11-16 19:47:48","");
INSERT INTO sales VALUES("257","posr-20201117-070919","1","4","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-11-16 20:09:19","2020-11-16 20:09:19","");
INSERT INTO sales VALUES("258","posr-20201118-065239","1","4","11","1","1","1","3","0","4500","34500","27200","0","0","600","1","6800","100","1","4","","27200","","","2020-11-17 19:52:39","2020-11-17 19:52:39","");
INSERT INTO sales VALUES("259","sr-20201202-093807","28","","3","1","5","2","2","0","0","111741","111751","0","0","40","","","50","1","4","sample_category (1).csv","111751","demo sales demo sales demo sales demo sales demo sale sdemo sales demo sales","staxsaxxm kvzx","2020-12-01 22:38:07","2020-12-01 22:40:20","");
INSERT INTO sales VALUES("260","sr-20201230-090746","28","5","26","1","9","1","1","0","2086.36","22950","22950","0","0","","","","","1","1","","","","","2020-12-29 22:07:46","2020-12-29 22:07:46","");
INSERT INTO sales VALUES("261","sr-20210106-043949","28","7","26","1","9","1","5","0","0","2510","2510","0","0","","","","","1","4","","2510","","","2021-01-05 17:39:49","2021-01-05 17:41:45","");
INSERT INTO sales VALUES("262","sr-20210107-085612","28","5","25","1","9","4","9","0","118.78","1554","1554","0","0","","","","","1","1","","","","","2021-01-06 21:56:12","2021-01-06 21:56:12","");
INSERT INTO sales VALUES("263","ecom-20210107-112255","28","5","25","1","1","4","10","0","20","200","200","","","","","","","1","4","","200","","","2021-01-07 00:22:55","2021-01-07 00:23:37","::1");
INSERT INTO sales VALUES("265","posr-20210107-120925","28","9","11","1","9","1","1","0","40","440","440","0","0","","","","","3","4","","440","","","2021-01-07 01:09:25","2021-01-13 00:08:46","");
INSERT INTO sales VALUES("266","ecom-20210113-110009","28","5","28","1","1","1","5","0","0","2990","2990","0","0","","","","","3","4","","2990","","","2021-01-13 00:00:09","2021-01-13 00:03:18","");
INSERT INTO sales VALUES("267","ecom-20210114-041741","28","","29","1","1","2","8","0","0","3294","3294","","","","","","","3","4","","3294","","","2021-01-13 17:17:41","2021-01-13 17:23:48","");
INSERT INTO sales VALUES("268","ecom-20210114-054506","28","","30","1","1","2","4","0","0","33","33","","","","","","","3","2","","20","","","2021-01-13 18:45:06","2021-01-13 19:43:45","");
INSERT INTO sales VALUES("269","ecom-20210116-054844","28","","31","1","1","1","10","0","0","6000","6000","","","","","","","3","4","","6000","","","2021-01-15 18:48:44","2021-01-15 18:51:37","");
INSERT INTO sales VALUES("270","ecom-20210118-061150","34","","34","1","1","1","1","0","0","300","300","","","","","","","3","4","","300","","","2021-01-17 19:11:50","2021-01-17 21:43:26","");
INSERT INTO sales VALUES("274","sr-20210123-071616","28","5","36","1","2","1","5","0","0","1250","1250","0","0","","","","","1","4","","1250","","","2021-01-22 20:16:16","2021-01-22 20:33:01","");
INSERT INTO sales VALUES("275","posr-20210123-072509","28","5","36","1","1","1","5","0","0","3000","3000","","","0","","","0","1","4","","3000","","","2021-01-22 20:25:09","2021-01-22 20:25:09","");
INSERT INTO sales VALUES("276","posr-20210123-105907","28","7","11","1","5","1","2","0","0","42","42","","0","0","","","0","1","4","","42","","","2021-01-22 23:59:07","2021-01-22 23:59:07","");
INSERT INTO sales VALUES("280","posr-20210128-102758","28","5","37","1","1","2","6","0","0","2400","2400","","","0","","","0","1","4","","2400","","","2021-01-27 23:27:58","2021-01-27 23:27:58","");
INSERT INTO sales VALUES("281","posr-20210128-102846","28","5","35","1","1","1","4","0","0","40","40","","","0","","","0","1","4","","40","","","2021-01-27 23:28:46","2021-01-27 23:28:46","");
INSERT INTO sales VALUES("285","ecom-20210128-104918","35","","34","1","1","1","1","0","0","1974.35","1974.35","","","","","","","3","2","","","","","2021-01-27 23:49:18","2021-01-27 23:49:18","");
INSERT INTO sales VALUES("286","ecom-20210128-105220","35","","34","1","1","1","1","0","0","2105.24","2105.24","","","","","","","3","2","","","","","2021-01-27 23:52:20","2021-01-27 23:52:20","");
INSERT INTO sales VALUES("287","ecom-20210130-042547","34","","33","1","1","2","2","0","0","1559.07","1559.07","","","","","","","3","2","","","","","2021-01-29 17:25:47","2021-01-29 17:25:47","");
INSERT INTO sales VALUES("288","ecom-20210130-104228","28","","38","1","1","2","3","0","0","3981","3981","","","","","","","3","2","","","","","2021-01-29 23:42:28","2021-01-29 23:42:28","");
INSERT INTO sales VALUES("289","ecom-20210130-115407","35","","34","1","1","2","2","0","0","1208","1208","","","","","","60","3","2","","","","","2021-01-30 00:54:07","2021-01-30 00:54:07","");
INSERT INTO sales VALUES("290","ecom-20210130-120231","35","","34","1","1","2","2","0","0","3416","3416","","","","","","100","3","2","","","","","2021-01-30 01:02:31","2021-01-30 01:02:31","");
INSERT INTO sales VALUES("291","ecom-20210130-120451","35","","34","1","1","2","2","0","0","169579","169639","","","","","","60","3","2","","","","","2021-01-30 01:04:51","2021-01-30 01:04:51","");
INSERT INTO sales VALUES("292","ecom-20210131-055722","28","","39","1","1","2","3","0","0","5239","5299","","","","","","60","3","2","","","","","2021-01-30 18:57:22","2021-01-30 18:57:22","");
INSERT INTO sales VALUES("293","ecom-20210131-060940","28","","40","1","1","1","1","0","0","454","514","","","","","","60","3","2","","","","","2021-01-30 19:09:40","2021-01-30 19:09:40","");
INSERT INTO sales VALUES("294","sr-20210202-062417","28","5","1","1","1","2","3.5","0","0","76","77.1","0","0","1.6","","","2.7","1","1","","","","","2021-02-01 19:24:17","2021-02-01 19:24:17","");
INSERT INTO sales VALUES("296","posr-20210203-072354","28","5","40","1","1","1","1","0","0","454","554","","","0","","","100","1","4","","554","","","2021-02-02 20:23:54","2021-02-02 20:23:54","");
INSERT INTO sales VALUES("297","ecom-20210203-073707","28","","41","1","1","1","1","0","0","46683","46743","","","","","","60","3","2","","","","","2021-02-02 20:37:07","2021-02-02 20:37:07","");
INSERT INTO sales VALUES("298","ecom-20210203-074107","34","","33","1","1","1","1","0","0","1149","1249","","","","","","100","3","2","","","","","2021-02-02 20:41:07","2021-02-02 20:41:07","");
INSERT INTO sales VALUES("299","ecom-20210203-092431","28","","42","1","1","1","1","0","0","454","514","","","","","","60","3","2","","","","","2021-02-02 22:24:31","2021-02-02 22:24:31","");
INSERT INTO sales VALUES("300","ecom-20210203-093011","65","","42","1","1","1","1","0","0","454","554","","","","","","100","3","2","","","","","2021-02-02 22:30:11","2021-02-02 22:30:11","");
INSERT INTO sales VALUES("301","ecom-20210203-095050","28","","43","1","1","1","2","0","0","1836","1936","","","","","","100","3","2","","","","","2021-02-02 22:50:50","2021-02-02 22:50:50","");
INSERT INTO sales VALUES("302","ecom-20210203-100740","28","","44","1","1","1","1","0","0","918","978","","","","","","60","3","2","","","","","2021-02-02 23:07:40","2021-02-02 23:07:40","");
INSERT INTO sales VALUES("303","ecom-20210203-111733","67","","44","1","1","1","1","0","0","918","978","","","","","","60","3","2","","","","","2021-02-03 00:17:33","2021-02-03 00:17:33","");
INSERT INTO sales VALUES("304","ecom-20210204-065229","63","","40","1","1","1","1","0","0","454","514","","","","","","60","3","2","","","","","2021-02-03 19:52:29","2021-02-03 19:52:29","");
INSERT INTO sales VALUES("305","ecom-20210204-065351","68","","45","1","1","1","1","0","0","1974","2034","","","","","","60","3","2","","","","","2021-02-03 19:53:51","2021-02-03 19:53:51","");
INSERT INTO sales VALUES("306","ecom-20210204-065719","69","","46","1","1","1","3","0","0","3456","3556","","","","","","100","3","2","","","","","2021-02-03 19:57:19","2021-02-03 19:57:19","");
INSERT INTO sales VALUES("307","ecom-20210204-092730","70","","47","1","1","1","1","0","0","454","514","","","","","","60","3","2","","","","","2021-02-03 22:27:30","2021-02-03 22:27:30","");
INSERT INTO sales VALUES("308","sr-20210208-100148","28","","1","1","1","3","5","20","83.65","910","910","0","0","","","","","1","2","","0","","","2021-02-07 23:01:48","2021-02-07 23:01:49","");
INSERT INTO sales VALUES("309","sr-20210208-101626","28","5","27","1","1","1","3","0","0","3447","3447","0","0","","","","","1","1","","","","","2021-02-07 23:16:26","2021-02-07 23:16:26","");
INSERT INTO sales VALUES("310","sr-20210209-085621","28","5","37","1","1","1","1","0","0","68000","78100","7.5","5100","","","","5000","1","1","","","Sample sale note","sample staff note","2021-02-08 21:56:21","2021-02-08 21:56:21","");
INSERT INTO sales VALUES("311","posr-20210213-065158","28","5","11","1","1","3","6","0","0","117328","117328","0","0","","","","","1","4","","117328","","","2021-02-12 19:51:58","2021-02-12 19:51:58","");
INSERT INTO sales VALUES("312","posr-20210213-065354","28","5","35","1","1","1","1","0","0","1149","1149","0","0","","","","","1","4","","1149","","","2021-02-12 19:53:54","2021-02-12 19:53:54","");
INSERT INTO sales VALUES("313","sr-20220322-052903","1","3","2","1","1","1","1","0","16.9","129.6","129.6","0","0","","","","","1","4","","129.6","","","2022-03-21 19:29:03","2022-03-21 19:29:03","");
INSERT INTO sales VALUES("314","sr-20220322-065222","1","3","26","1","1","1","1","0","0","5000","5000","0","0","","","","","1","1","","","test","test","2022-03-21 20:52:22","2022-03-21 20:52:22","");
INSERT INTO sales VALUES("315","sr-20220322-065336","1","3","27","1","9","1","1","0","0","5000","5000","0","0","","","","","1","1","","","","","2022-03-21 20:53:36","2022-03-21 20:53:36","");
INSERT INTO sales VALUES("316","sr-20220322-070034","1","3","25","1","1","1","2","0","0","10000","10000","0","0","0","","","0","1","2","","5000","","","2022-03-21 21:00:34","2022-03-21 21:08:34","");
INSERT INTO sales VALUES("317","sr-20220524-062904","1","3","1","1","1","1","1","0","0","50000","50000","0","0","","","","","1","1","","","","","2022-05-24 06:29:04","2022-05-24 06:29:04","");



CREATE TABLE `stock_counts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_adjusted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO stock_counts VALUES("1","scr-20190228-124939","1","","","1","full","20190228-124939.csv","","","0","2019-02-28 01:49:39","2019-02-28 01:49:39");
INSERT INTO stock_counts VALUES("2","scr-20201202-105610","1","20","7","28","partial","20201202-105610.csv","","","0","2020-12-01 23:56:10","2020-12-01 23:56:10");
INSERT INTO stock_counts VALUES("3","scr-20201230-094344","1","","","28","full","20201230-094344.csv","","","0","2020-12-29 22:43:44","2020-12-29 22:43:44");
INSERT INTO stock_counts VALUES("4","scr-20201230-095724","1","23","9","28","partial","20201230-095724.csv","","","0","2020-12-29 22:57:24","2020-12-29 22:57:24");
INSERT INTO stock_counts VALUES("5","scr-20201230-104145","1","23","9","28","partial","20201230-104145.csv","","","0","2020-12-29 23:41:45","2020-12-29 23:41:45");



CREATE TABLE `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO suppliers VALUES("1","abdullah","globaltouch.jpg","global touch","","abdullah@globaltouch.com","231231","fsdfs","fsdfs","","","bd","1","2018-05-12 18:06:34","2019-12-21 05:58:47");
INSERT INTO suppliers VALUES("2","test","lion.jpg","lion","","lion@gmail.com","242","gfdg","fgd","","","","0","2018-05-29 19:59:41","2018-05-29 20:00:06");
INSERT INTO suppliers VALUES("3","ismail","","techbd","","ismail@test.com","23123123","mohammadpur","dhaka","","","bangladesh","1","2018-07-20 00:34:17","2018-07-20 00:34:17");
INSERT INTO suppliers VALUES("4","modon","mogaFruit.jpg","mogaFruit","","modon@gmail.com","32321","nasirabad","chittagong","","","bd","0","2018-09-01 00:30:07","2018-09-01 00:37:20");
INSERT INTO suppliers VALUES("5","sadman","","anda boda","dsa","asd@dsa.com","3212313","dadas","sdad","Other","1312","Australia","0","2020-06-22 05:48:33","2020-06-22 05:48:52");
INSERT INTO suppliers VALUES("6","Sahid","ABHWorld.jpg","ABH World","12345678","sahid@gmail.com","0167232621","Jaleswaritrola","Bogra","Rajshahi","1234","Bangladesh","0","2020-12-02 17:58:48","2021-01-07 01:01:30");



CREATE TABLE `taxes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO taxes VALUES("1","vat@7.5","7.5","1","2018-05-12 05:58:30","2021-02-08 21:36:26");
INSERT INTO taxes VALUES("2","vat@15","15","1","2018-05-12 05:58:43","2018-05-27 19:35:05");
INSERT INTO taxes VALUES("3","test","6","0","2018-05-27 19:32:54","2018-05-27 19:34:44");
INSERT INTO taxes VALUES("4","vat 20","20","1","2018-08-31 20:58:57","2018-08-31 20:58:57");
INSERT INTO taxes VALUES("5","vat","5","1","2020-12-02 21:51:07","2020-12-02 21:51:07");



CREATE TABLE `transfers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `from_warehouse_id` int(11) NOT NULL,
  `to_warehouse_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_cost` double NOT NULL,
  `shipping_cost` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO transfers VALUES("1","tr-20180808-051710","1","1","1","1","1","100","0","100","0","100","","","2018-08-08 07:17:10","2018-12-24 17:16:55");
INSERT INTO transfers VALUES("6","tr-20191205-075504","1","1","1","1","1","1","0","2","0","2","","","2019-12-05 08:55:04","2019-12-05 09:09:42");
INSERT INTO transfers VALUES("8","tr-20200122-123058","1","1","1","1","1","10","0","1000","","1000","","","2020-01-22 01:30:58","2020-01-22 01:30:58");
INSERT INTO transfers VALUES("10","tr-20201008-012735","9","1","1","1","1","1","32","352","0","352","","","2020-10-08 03:27:35","2020-10-08 03:29:35");
INSERT INTO transfers VALUES("11","tr-20201018-061708","9","1","1","1","1","1","0","1","","1","","","2020-10-18 08:17:08","2020-10-18 08:17:08");
INSERT INTO transfers VALUES("12","tr-20201024-090146","1","1","1","1","1","10","4500","34500","","34500","","","2020-10-23 23:01:46","2020-10-23 23:01:46");
INSERT INTO transfers VALUES("13","tr-20201202-110406","28","3","1","1","1","50","2500","27500","50","27550","sample_category (1).csv","Demo transfer Demo transfer Demo transfer Demo transfer Demo transfer Demo transfer","2020-12-02 00:04:06","2020-12-02 00:04:06");
INSERT INTO transfers VALUES("14","tr-20210106-041634","28","1","1","1","1","5","0","2500","","2500","","","2021-01-05 17:16:34","2021-01-05 17:16:34");



CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unit_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_unit` int(11) DEFAULT NULL,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operation_value` double DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO units VALUES("1","pc","Piece","","*","1","1","2018-05-11 22:27:46","2018-08-17 17:41:53");
INSERT INTO units VALUES("2","dozen","dozen box","1","*","12","1","2018-05-12 05:57:05","2018-05-12 05:57:05");
INSERT INTO units VALUES("3","cartoon","cartoon box","1","*","24","1","2018-05-12 05:57:45","2020-03-11 06:36:59");
INSERT INTO units VALUES("4","m","meter","","*","1","1","2018-05-12 05:58:07","2018-05-27 19:20:57");
INSERT INTO units VALUES("6","test","test","","*","1","0","2018-05-27 19:20:20","2018-05-27 19:20:25");
INSERT INTO units VALUES("7","kg","kilogram","","*","1","1","2018-06-24 20:49:26","2018-06-24 20:49:26");
INSERT INTO units VALUES("8","20","ni33","8","*","1","0","2018-07-31 18:35:51","2018-07-31 18:40:54");
INSERT INTO units VALUES("9","gm","gram","7","/","1000","1","2018-08-31 20:06:28","2018-08-31 20:06:28");
INSERT INTO units VALUES("10","gz","goz","","*","1","0","2018-11-28 22:40:29","2019-03-02 06:53:29");
INSERT INTO units VALUES("11","70331946","Sample","7","safi","12","1","2020-12-02 21:49:38","2020-12-02 21:49:38");



CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` date NOT NULL DEFAULT '9999-12-31',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `biller_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES("1","admin","admin@gmail.com","$2y$10$DWAHTfjcvwCpOCXaJg11MOhsqns03uvlwiSUOQwkHL2YYrtrXPcL6","9999-12-31","JxnF7xYXv9MtFkjXZOxHCv2srzX8HJyNPR1P6pk10W3YbBZVHQtxDB4rEXSa","12112","lioncoders","1","","","1","0","2018-06-01 23:24:15","2018-09-04 20:14:15");
INSERT INTO users VALUES("3","dhiman da","dhiman@gmail.com","$2y$10$Fef6vu5E67nm11hX7V5a2u1ThNCQ6n9DRCvRF9TD7stk.Pmt2R6O.","9999-12-31","5ehQM6JIfiQfROgTbB5let0Z93vjLHS7rd9QD5RPNgOxli3xdo7fykU7vtTt","212","lioncoders","1","","","0","1","2018-06-13 18:00:31","2020-11-05 02:06:51");
INSERT INTO users VALUES("6","test","test@gmail.com","$2y$10$TDAeHcVqHyCmurki0wjLZeIl1SngKX3WLOhyTiCoZG3souQfqv.LS","9999-12-31","KpW1gYYlOFacumklO2IcRfSsbC3KcWUZzOI37gqoqM388Xie6KdhaOHIFEYm","1234","212312","4","","","0","1","2018-06-22 23:05:33","2018-06-22 23:13:45");
INSERT INTO users VALUES("8","test","test@yahoo.com","$2y$10$hlMigidZV0j2/IPkgE/xsOSb8WM2IRlsMv.1hg1NM7kfyd6bGX3hC","9999-12-31","","31231","","4","","","0","1","2018-06-24 18:35:49","2018-07-01 21:07:39");
INSERT INTO users VALUES("9","staff","anda@gmail.com","$2y$10$kxDbnynB6mB1e1w3pmtbSOlSxy/WwbLPY5TJpMi0Opao5ezfuQjQm","9999-12-31","DIDsmdI5kMZfkk2n4OkOpuH8yYHs3O0aPp9xUO0zuY4TwPvylsW5H6ovgE0K","3123","","4","5","1","1","0","2018-07-01 21:08:08","2018-10-23 17:41:13");
INSERT INTO users VALUES("10","abul","abul@alpha.com","$2y$10$5zgB2OOMyNBNVAd.QOQIju5a9fhNnTqPx5H6s4oFlXhNiF6kXEsPq","9999-12-31","x7HlttI5bM0vSKViqATaowHFJkLS3PHwfvl7iJdFl5Z1SsyUgWCVbLSgAoi0","1234","anda","1","","","0","0","2018-09-07 19:44:48","2018-09-07 19:44:48");
INSERT INTO users VALUES("11","teststaff","a@a.com","$2y$10$5KNBIIhZzvvZEQEhkHaZGu.Q8bbQNfqYvYgL5N55B8Pb4P5P/b/Li","9999-12-31","DkHDEcCA0QLfsKPkUK0ckL0CPM6dPiJytNa0k952gyTbeAyMthW3vi7IRitp","111","aa","4","5","1","0","1","2018-10-21 22:47:56","2018-10-22 22:10:56");
INSERT INTO users VALUES("12","john","john@gmail.com","$2y$10$P/pN2J/uyTYNzQy2kRqWwuSv7P2f6GE/ykBwtHdda7yci3XsfOKWe","9999-12-31","O0f1WJBVjT5eKYl3Js5l1ixMMtoU6kqrH7hbHDx9I1UCcD9CmiSmCBzHbQZg","10001","","4","2","2","0","1","2018-12-29 19:48:37","2019-03-05 23:59:49");
INSERT INTO users VALUES("13","jjj","test@test.com","$2y$10$/Qx3gHWYWUhlF1aPfzXaCeZA7fRzfSEyCIOnk/dcC4ejO8PsoaalG","9999-12-31","","1213","","1","","","0","1","2019-01-02 19:08:31","2019-03-02 23:02:29");
INSERT INTO users VALUES("19","shakalaka","shakalaka@gmail.com","$2y$10$ketLWT0Ib/JXpo00eJlxoeSw.7leS8V1CUGInfbyOWT4F5.Xuo7S2","9999-12-31","","1212","Digital image","5","","","1","0","2020-11-08 19:07:16","2020-11-08 19:07:16");
INSERT INTO users VALUES("21","modon","modon@gmail.com","$2y$10$7VpoeGMkP8QCvL5zLwFW..6MYJ5MRumDLDoX.TTQtClS561rpFHY.","9999-12-31","","2222","modon company","5","","","1","0","2020-11-13 02:12:08","2020-11-13 02:12:08");
INSERT INTO users VALUES("22","dhiman","dhiman@gmail.com","$2y$10$3mPygsC6wwnDtw/Sg85IpuExtUhgaHx52Lwp7Rz0.FNfuFdfKVpRq","9999-12-31","","+8801111111101","lioncoders","5","","","1","0","2020-11-15 01:14:58","2020-11-15 01:14:58");
INSERT INTO users VALUES("27","Safi","safiulsahid151289@gmail.com","$2y$10$8/WAKFEXq2AA1xgbcE//h..htYqyVKuvhAgcfP0UAlJwti1eC/6sK","9999-12-31","","01521100281","Acquaint Technologies","5","","","1","0","2020-11-30 18:21:19","2020-11-30 21:52:30");
INSERT INTO users VALUES("28","Sahid","sahid@gmail.com","$2y$10$zx7xatY7N0zgdDuNTxR7du8OeXWql86mpksOEfDMs3YEk.bo3.6qW","9999-12-31","","01911160762","Acquaint Technologies","1","","","1","0","2020-11-30 18:29:10","2020-11-30 18:29:10");
INSERT INTO users VALUES("29","safi ul","safiul@gmail.com","$2y$10$r0c5672vQK6N.F6t./jP3OWTj2s.UBiox6tFV33mJz4cXfyhDociK","9999-12-31","","01521100281","Acquaint Technologies","2","","","1","0","2020-11-30 19:51:48","2020-11-30 19:51:48");
INSERT INTO users VALUES("30","nur","nur@gmail.com","$2y$10$860RC4Bi4OzY.MrVwXNpEuMBQd7EsUrZfRKs25nPAPSk4RZ/Ec3me","9999-12-31","","01911160762","Acquaint Technologies","4","1","1","1","0","2020-11-30 19:54:29","2020-11-30 19:54:29");
INSERT INTO users VALUES("31","Rafi Ul Sahid","rafi@gmail.com","$2y$10$GcOyJlKbcbn3x5hDHwaBxeL.iYEAyyWMkjwBmNCPk0OQsW42pzKjG","9999-12-31","","01717626265","Bangla Trac Ltd","2","","","1","0","2020-12-02 17:50:01","2020-12-02 17:50:01");
INSERT INTO users VALUES("32","Mohaimanul islam","mim@gmail.com","$2y$10$8rL9RpvmXYPqp/s0lvzAVexKYtdoc49l1F3d4JvFBUcPaj6AJZpc6","9999-12-31","","01922270873","khadem","5","1","1","1","0","2021-01-16 17:40:32","2021-01-16 18:05:15");
INSERT INTO users VALUES("33","karim","karim@gmail.com","$2y$10$fUPj.ReEuy6pRaK/TteHa.VYV2N1i7hzBdE6RK.Om/m3gYAjUh7Q6","9999-12-31","","01521100281","dream","5","","","0","0","2021-01-16 19:02:42","2021-01-16 19:02:42");
INSERT INTO users VALUES("34","Robiul","robi@gmail.com","$2y$10$/pMLi6I2zGYYBrQyif/.2.QNe.or2QdzidnQk/zqD7bGH.Io1Zg96","9999-12-31","","0155522811","None","5","1","1","1","0","2021-01-16 19:22:53","2021-01-19 23:25:50");
INSERT INTO users VALUES("35","sunny","sun@gmail.com","$2y$10$mCo0R8.wbBWs9qS8h9eWY.CueD7yuUyNDKp7ZPYaxD30tW.t54FUi","9999-12-31","","01632211392","None","5","1","1","1","0","2021-01-17 17:22:10","2021-01-17 21:47:41");
INSERT INTO users VALUES("58","hamid","hamid@gmail.com","$2y$10$KuaHPRwKLQGhibrnxIaBuOBn0vYaQGAYFByNQJE.F8otCzfLUwPeG","2021-01-25","","01911160762","abc","1","","","1","0","2021-01-24 16:44:26","2021-01-24 19:12:00");
INSERT INTO users VALUES("59","samsul","samsul@gmail.com","$2y$10$msvO/tjsQdViWIFa4/fYzefAsAUNQdJAFSazC6Xoh5Sq.gNBpqMue","2021-01-27","","324465745","zzz","1","","","1","0","2021-01-24 18:39:27","2021-01-24 18:39:27");
INSERT INTO users VALUES("60","zami","zami@gmail.com","$2y$10$xIR/9LjP8aYq5B7asdoAI.phf/p9FsoR7P3Y.Y9NHEnk4vYTGSvbi","9999-12-31","","14989734345","nnn","1","","","1","0","2021-01-24 18:44:45","2021-01-24 18:44:45");
INSERT INTO users VALUES("61","khalil","khalil@gmail.com","$2y$10$9mKWCWGtrpEj1.HFMsOfxeBlWng5DepHFS.txZje30.uX5d6hFKAa","2021-01-26","","98785745","ccc","1","","","1","0","2021-01-24 19:44:57","2021-01-24 20:02:00");
INSERT INTO users VALUES("62","Abul","abul111@gmail.com","12345678","9999-12-31","","123435576577","","5","","","1","0","2021-01-30 18:57:22","2021-01-30 18:57:22");
INSERT INTO users VALUES("63","ansar","ansar@gmail.com","$2y$10$t8AV0/E2z8LlbQ7qmDUCb.0RT2FXgdxFhi63/jKFqiLAy1BMk1LE2","9999-12-31","","098365434","","5","","","1","0","2021-01-30 19:09:40","2021-02-02 20:10:52");
INSERT INTO users VALUES("64","mokbul","mkb@gmail.com","$2y$10$2uGCEBuSIWOgoL7QTyDwU.YK.W/QuR2TL5lgGmHQQBLTiQA3W9zgW","9999-12-31","","09876453","","5","","","1","0","2021-02-02 20:37:07","2021-02-02 20:37:07");
INSERT INTO users VALUES("65","rashed","rashed@gmail.com","$2y$10$1BmQMEODkCeW4Z1Jtf6z/eV3y/LRAPaXP6GWeQDn4X36ko7a2MYAO","9999-12-31","","2134522","","5","","","1","0","2021-02-02 22:24:30","2021-02-02 22:49:25");
INSERT INTO users VALUES("66","asad","asad@gmail.com","$2y$10$e52izq7wEjDkxdQoCh7M9eEjgsbx1wg05gH22RftXkUJmWRTPP6o.","9999-12-31","","23124335","","5","","","1","0","2021-02-02 22:50:50","2021-02-02 22:50:50");
INSERT INTO users VALUES("67","samus","samus@gmail.com","$2y$10$RiDi7enubVnhIETzyiuyW.L.CNlwx4vn6kZ/b05MizH1Ktf9/kj7S","9999-12-31","","3434","","5","","","1","0","2021-02-02 23:07:40","2021-02-03 00:02:56");
INSERT INTO users VALUES("68","kamal","kamal@gmail.com","$2y$10$fQWA8UzRgzlDR.geP9ji7eElaxlMaFu5qL/1gCUpt.znBrqr1f/E.","9999-12-31","","01521100281","","5","","","1","0","2021-02-03 19:53:51","2021-02-03 19:53:51");
INSERT INTO users VALUES("69","Mobina Hasan","samer@gmail.com","$2y$10$I4Lzt4qig25QtAyBFvECYuJbjP6R6kkNprmEteXpeAWiy8ypwjgX2","9999-12-31","","01686392899","","5","","","1","0","2021-02-03 19:57:19","2021-02-03 19:57:19");
INSERT INTO users VALUES("70","selim","selim@gmail.com","$2y$10$GzCAVtO0Ras3Stj8yH8ym.jYJTzHNnnVvGX155izT0ZR7f0m9h7ue","9999-12-31","","019383763","","5","","","1","0","2021-02-03 22:27:30","2021-02-03 23:22:02");



CREATE TABLE `variants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO variants VALUES("2","Medium","2019-11-21 02:03:04","2019-11-24 03:43:52");
INSERT INTO variants VALUES("3","Small","2019-11-21 02:03:04","2019-11-24 03:43:52");
INSERT INTO variants VALUES("5","Large","2019-11-24 01:07:20","2019-11-24 03:44:56");
INSERT INTO variants VALUES("9","a","2020-05-18 12:44:14","2020-05-18 12:44:14");
INSERT INTO variants VALUES("11","b","2020-05-18 12:53:49","2020-05-18 12:53:49");
INSERT INTO variants VALUES("12","variant 1","2020-09-27 02:08:27","2020-09-27 02:08:27");
INSERT INTO variants VALUES("13","variant 2","2020-09-27 02:08:27","2020-09-27 02:08:27");
INSERT INTO variants VALUES("15","S","2020-11-16 01:09:33","2020-11-16 01:09:33");
INSERT INTO variants VALUES("16","M","2020-11-16 01:09:33","2020-11-16 01:09:33");
INSERT INTO variants VALUES("17","L","2020-11-16 01:09:33","2020-11-16 01:09:33");
INSERT INTO variants VALUES("18","test","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO variants VALUES("19","sample","2020-12-01 19:08:30","2020-12-01 19:08:30");
INSERT INTO variants VALUES("20","demo","2020-12-01 19:08:30","2020-12-01 19:08:30");



CREATE TABLE `warehouses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO warehouses VALUES("1","warehouse 1","2312121","war1@lion.com","khatungonj, chittagong","1","2018-05-12 03:51:44","2019-03-02 10:40:17");
INSERT INTO warehouses VALUES("2","warehouse 2","1234","","boropul, chittagong","1","2018-05-12 04:09:03","2018-06-19 18:30:38");
INSERT INTO warehouses VALUES("3","test","","","dqwdeqw","0","2018-05-29 20:14:23","2018-05-29 20:14:47");
INSERT INTO warehouses VALUES("6","gudam","2121","","gazipur","0","2018-08-31 18:53:26","2018-08-31 18:54:48");
INSERT INTO warehouses VALUES("7","warehouse 3","01521100281","warehouse3@gmail.com","New warehouse","1","2020-12-02 21:42:13","2020-12-02 21:42:13");

