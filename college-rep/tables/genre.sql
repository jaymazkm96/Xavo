CREATE TABLE IF NOT EXISTS `genre` (  
  `genre_id` int(11) NOT NULL AUTO_INCREMENT,  
  `genre_name` varchar(250) NOT NULL,  
  PRIMARY KEY (`genre_id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `genre` (`brand_id`, `brand_name`) VALUES  
 (1, 'Genre 1'),  
 (2, 'Genre 2'),  
 (3, 'Genre 3'),  
 (4, 'Genre 4');  