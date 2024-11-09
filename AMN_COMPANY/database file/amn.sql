

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `AMN Company`
--

-
-- --------------------------------------------------------

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `assignproduct`
--

CREATE TABLE `assignproducts` (
 
  `id` int(11) NOT NULL, 
  `product_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` int(11) NOT NULL,
  `user`varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `product`
--

CREATE TABLE `products` (
 
  `id` int(11) NOT NULL, 
  `product_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
 `status` varchar(50) NOT NULL,
  `date` int(11) NOT NULL,
  `from`varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `phon` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `phon`, `type`) VALUES
('muleta12', 'mm12', 'muleta', '09134677842', 'Admin');


-- Indexes for dumped tables
--


--
-- Indexes for table `product`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `assignproducts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--


-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `assignproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
 




