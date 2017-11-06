
 CREATE TABLE IF NOT EXISTS `tbl_employee` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` varchar(50) NOT NULL,  
  `address` text NOT NULL,  
  `gender` varchar(10) NOT NULL,  
  `designation` varchar(100) NOT NULL,  
  `age` int(11) NOT NULL,  
  `image` varchar(100) NOT NULL,  
  PRIMARY KEY (`id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=187 ;  