-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 05:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(10) NOT NULL,
  `admin_fname` varchar(100) NOT NULL,
  `admin_lname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_fname`, `admin_lname`, `username`, `password`, `email`, `mobile`, `user_type`) VALUES
(1, 'admin', 'lastname', 'admin', 'admin', 'admin@gmail.com', 777588654, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `delivery_status` varchar(100) NOT NULL DEFAULT 'Not Accepted',
  `delivery_staff` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cus_id`, `food_id`, `quantity`, `delivery_status`, `delivery_staff`) VALUES
(256, 14, 4, 3, 'Not Accepted', NULL),
(255, 14, 4, 1, 'Accepted', 'arunan'),
(253, 33, 3, 1, 'Not Accepted', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(100) NOT NULL,
  `cus_fname` varchar(30) NOT NULL,
  `cus_lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'cus'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_fname`, `cus_lname`, `username`, `password`, `nic`, `mobile`, `email`, `status`, `user_type`) VALUES
(5, 'archchana', 'sivarajah', 'archchu', 'badulla18', '956771544v', 778679549, 'archchu95@gmail.com', 1, 'admin'),
(7, 'roch', 'danistan', 'roch', 'badulla23', '954546672v', 768789149, 'roch23@gmail.com', 1, 'cus'),
(6, 'shiyani', 'kirupa', 'shiyani', 'colombo12', '956784948v', 768789149, 'shiyani56@gmail.com', 1, 'cus'),
(8, 'theepak', 'ghhgjh', 'bjhv', 'badulla12', '436457447v', 768789149, 'vgc', 0, 'cus'),
(9, 'theepak', 'ghhgjh', 'bjhv', 'as', '436457447v', 768789149, 'vgc', 1, 'cus'),
(10, 'dnjfk', 'sjdbks', 'archchu', 'badulla12', '3728673v', 778679549, ',nmvlsvn', 1, 'cus'),
(12, 'shiyani', 'kirupa', 'shiya', 'shiya123', '36424647v', 3242472, 'shiyani@gmail.com', 0, 'cus'),
(32, 'esdryfygu', 'dfgh', 'dfcgvbh', '202cb962ac59075b964b', 'fcgvbh', 2147483647, 'gvbhjn@fgvhb', 0, 'cus'),
(14, 'Theepag', 'Atputhalingam', 'theepag', '1234', '950292873V', 768789149, 'theepag@live.com', 1, 'cus'),
(33, 'safees', 'cfjy', 'safees', '81dc9bdb52d04dc20036', '23456745675v', 2147483647, 'safees@gmail.com', 1, 'cus'),
(31, 'shan', 'si', 're', '12eccbdd9b3291813134', '0382983838', 747347434, 'zx@jshj', 0, 'cus');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(20) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_desc` varchar(500) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `unit_price1` int(100) NOT NULL,
  `gallery_link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `food_name`, `food_desc`, `category_name`, `unit_price1`, `gallery_link`) VALUES
(3, 'Fried Chicken', 'Fried chicken  is a dish consisting of chicken pieces usually from broiler chickens which have been floured or battered and then pan-fried, deep fried, or pressure fried. ', 'Chicken', 300, 'imgg12.jpg'),
(4, 'Chicken in lemon sauce', 'Lemon chicken is the name of several dishes found in cuisines around the world which include chicken and lemon.', 'Chicken', 250, 'imgg13.jpg'),
(5, 'Crispy Chicken', ' fried pieces of boneless chicken which you can dip into a garlic sauce or serve covered in the sauce.', 'Chicken', 350, 'imgg14.jpg'),
(6, 'Vegetable fried rice', '\"This dish combines the nutty flavor of brown rice with the fresh taste of bell peppers, baby peas, and other vegetables.\"', 'Fried Rice', 100, 'imgg1.jpg'),
(7, 'Chicken Fried Rice', 'Instead of tough, over-cooked chicken, with the fried rice as an afterthought, the dish was cooked fresh from scratch. The cooking time was literally minutes and the result was delicious. I have created a version that comes very close to the original. It is quick and easy and makes a meal in itself. The rice to be fried is cooked beforehand.', 'Fried Rice', 300, 'imgg2.jpg'),
(8, 'Egg Fried Rice', 'This easy egg fried rice is something that I cook every other week. It’s a no-fuss meal, made with seven key ingredients: rice, eggs, olive oil, onions, frozen vegetables, scallions, and soy sauce (option to add sesame oil). The fried rice is great with my Chinese Garlic Cucumber Salad, Sambal Potatoes, Honey Chili Garlic Shrimp.', 'Fried Rice', 200, 'imgg3.jpg'),
(9, 'Sausages Fried rice', 'Sausage fried rice is a savoury egg fried rice dish that’s quick and easy to make and can be on the table in less than half an hour. We’ve used pouches of express cooked rice which just need heating through for a few minutes. You can add some canned sweetcorn or frozen mixed vegetables to make the dish go further. Serve with extra soy sauce or a drizzle of sweet chilli sauce and some crisp prawn crackers, if liked.', 'Fried Rice', 300, 'imgg4.jpg'),
(10, 'Vegetable Kottu', '. Kottu literally means “chop”. It’s made with flat bread called “Gothamba roti” mixed with meat, spicy gravy, and vegetables.  Kottu is blended together in a heated iron sheet using blunt metal blades. Clashing of metal creates a distinctive sound. This sound and aroma of kottu will invite any passerby to stop and indulge in this mouthwatering meal.', 'Kottu Rotti', 120, 'imgg5.jpg'),
(11, 'Egg Kottu', 'Sri Lankan dish made from godhamba roti (a type of Sri Lankan roti) and vegetables, egg  and spices. The bread is described as similar to the type found in the south Indian kothu parotta and roti canai, with the former dish overall being very similar to the Koththu Rotti. A common dinner dish, kottu has become popular in cities with a significant Sri Lankan diaspora population, such as Toronto and New York City\'s Little Sri Lanka neighborhood.', 'Kottu Rotti', 200, 'imgg6.jpg'),
(12, 'Chicken kottu', 'Chicken Kottu Roti is insanely popular in Sri Lanka! Chopped flatbread mixed and mashed together with chicken and vegetables and lots of aromatic spices, this chicken kottu roti recipe is as delicious as it is comforting, and it also works splendidly as an anti-hangover meal! ', 'Kottu Rotti', 300, 'imgg7.jpg'),
(13, 'Seafood Kottu', 'The roti is normally fried at the beginning of the day, piled into stacks and served as it\'s ordered. When you place an order, the kottu chef will fry and chop the roti with a selection of ingredients you choose. The result is a tasty mixture of salty pieces of fried dough, lightly spiced and extremely comforting.', 'Kottu Rotti', 400, 'imgg8.jpg'),
(14, 'Vegetable Briyani', 'Vegetable Biryani is a bold and flavorful Indian rice diss', 'Briyani', 150, 'imgg17.jpg'),
(15, 'Egg Briyani', 'Hyderabadi Egg Biryani is an authentic egg dum biryani where you get wonderfully fragrant and so fluffy.', 'Briyani', 200, 'imgg18.jpg'),
(16, 'Chicken Briyani', 'The meat is usually marinated before being cooked, and the most common marinade is yogurt-spiced based as the acid in the yogurt helps to tenderize the meat. It is the layers of spices that give a biryani its complex flavor, and these spices can be whole or ground, or individual or a spice mix (such as garam masala). ', 'Briyani', 350, 'imgg9.jpg'),
(17, 'Mutton Briyani', 'Hyderabadi Mutton Biryani is an authentic biryani recipe which can be prepared using some easily available ingredients at home. Here’s an easy way to make this dish at home by following some simple steps.', 'Briyani', 400, 'imgg10.jpg'),
(18, 'Nasi goreng', 'i Goreng | There are as many versions of this Indonesian fried rice as there are cooks. My version has chicken and prawns, and a variety of garnishes.\r\n\r\nShrimp paste and crispy fried shallots can be found in the Asian section of large supermarkets, otherwise in Asian grocery stores. As always, chilli heat can be adjusted to your taste.', 'Nasi goreng', 500, 'imgg10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_id` int(100) NOT NULL,
  `order_no` int(100) NOT NULL,
  `delivery_status` varchar(100) NOT NULL DEFAULT 'Not Accepted',
  `delivery_staff` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer_id`, `order_no`, `delivery_status`, `delivery_staff`) VALUES
(2001, 111, 'Accepted', 'wsd'),
(2001, 11, 'Not Accepted', ''),
(456, 56, 'Not Accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `name`, `food`, `rating`, `hits`) VALUES
(4, 'Dulsara', '', 3.60645, 13);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `table_type` varchar(10) NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `reservation_status` varchar(100) NOT NULL DEFAULT 'Not Accepted',
  `reservation_staff` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `cus_id`, `date`, `time`, `table_type`, `no_of_people`, `reservation_status`, `reservation_staff`) VALUES
(73, 14, '2019-02-08', '9-11', 'SV6C1', 0, 'Accepted', ''),
(74, 14, '2019-06-07', '12-2', 'SV6C2', 0, 'Accepted', ''),
(75, 14, '2019-06-07', '9-11', 'SV6C2', 0, 'Accepted', ''),
(76, 14, '2019-02-23', '9-11', 'SV6C2', 0, 'Accepted', ''),
(77, 14, '2019-02-21', '9-11', 'SV6C1', 0, 'Accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `username`, `password`, `nic`, `mobile`, `email`, `type`, `salary`) VALUES
(11, 'Ajith', 'Kumar', 'ajith', '1234', '950797856V', 777588698, 'a.ajith@live.com', 'table', '5000'),
(12, 'Theepag', 'Atputhalingam', 'theepag', '1234', '950292873V', 777588654, 'theepag@live.com', 'table', '10000'),
(13, 'Arunan', 'Sundralingam', 'arunan', '1234', '942356876V', 778654896, 'arunan@gmail.com', 'delivery', '6000'),
(23, 'Sinthuja', 'Kana', 'sinthu', '1234', '950286974V', 777588698, 'aj@li.co', 'delivery', '5200'),
(24, 'Sachin', 'Sach', 'sachin', '1234', '9502869V', 777588789, 'sachin@gmail.com', 'table', '52000'),
(25, 'w', 'we', 'sd55', 'sds', '5564', 777588654, 'wew@sd', 'primary', '45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(6, 0, 'very good', 'sharu', '2019-01-31 09:58:24'),
(8, 0, 'good', 'archchana', '2019-02-13 18:03:32'),
(9, 6, 'ggsg', 're', '2019-02-20 09:10:10'),
(10, 0, 'good', 'saru', '2019-02-20 10:54:44'),
(11, 10, 'thank', 'are', '2019-02-20 10:56:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
