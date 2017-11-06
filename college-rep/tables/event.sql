 
CREATE TABLE IF NOT EXISTS `event` (  
  `event_id` int(11) NOT NULL AUTO_INCREMENT,  
  `event_name` varchar(250) NOT NULL,  
  `genre_id` int(11) NOT NULL,  
  PRIMARY KEY (`event_id`)  
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ; 
 
 
 INSERT INTO `event` (`event_id`, `event_name`, `genre_id`) VALUES  
 (1, 'Event 1', 1),  
 (2, 'Event 2', 1),  
 (3, 'Event 3', 1),  
 (4, 'Event 4', 2),  
 (5, 'Event 5', 2),  
 (6, 'Event 6', 2),  
 (7, 'Event 7', 3),  
 (8, 'Event 8', 3),  
 (9, 'Event 9', 4),  
 (10, 'Event 10', 4); 