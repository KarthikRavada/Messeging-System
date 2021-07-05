

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;


INSERT INTO `friends` (`id`, `user_id`, `friend`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 1, 6),
(6, 1, 7),
(7, 1, 8),
(8, 1, 9),
(9, 1, 10),
(10, 1, 11),
(11, 1, 12),
(12, 2, 3),
(13, 2, 4),
(14, 2, 5),
(15, 2, 6),
(16, 2, 7),
(17, 3, 4),
(18, 3, 5),
(19, 3, 6),
(20, 3, 8),
(21, 3, 10),
(22, 4, 5),
(23, 4, 6),
(24, 4, 12),
(25, 5, 6),
(26, 5, 7),
(27, 5, 8),
(28, 5, 9),
(29, 5, 10),
(30, 5, 11),
(31, 6, 7),
(32, 6, 8),
(33, 6, 9),
(34, 6, 10),
(35, 6, 11),
(36, 7, 8),
(37, 7, 9),
(38, 7, 10),
(39, 7, 11),
(40, 7, 12),
(41, 8, 10),
(42, 8, 11),
(43, 9, 12),
(44, 10, 12),
(45, 11, 12);



CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `storage_a` int(11) NOT NULL,
  `storage_b` int(11) NOT NULL,
  `status` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;



CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `display_name` varchar(60) NOT NULL,
  `profile_image` varchar(120) NOT NULL,
  `status` varchar(250) NOT NULL,
  `type_status` varchar(300) NOT NULL DEFAULT 'stopped',
  `last_seen` int(11) NOT NULL,
  `session_status` varchar(7) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2894 ;



INSERT INTO `users` (`id`, `username`, `password`, `display_name`, `profile_image`, `status`, `type_status`, `last_seen`, `session_status`) VALUES
(1, 'anna', '8cb2237d0679ca88db6464eac60da96345513964', 'Anna', 'anna.jpg', 'at work, can''t talk', 'stopped', 1468273635, 'offline'),
(2, 'albert', '8cb2237d0679ca88db6464eac60da96345513964', 'Albert Toss', 'albert.jpg', '', 'stopped', 1408897662, 'offline'),
(3, 'tracy', '8cb2237d0679ca88db6464eac60da96345513964', 'Tracy', 'tracy.jpg', '', 'stopped', 1408482289, 'offline'),
(4, 'john', '8cb2237d0679ca88db6464eac60da96345513964', 'John Doe', 'john.jpg', '', 'stopped', 1468273636, 'online'),
(5, 'mike', '8cb2237d0679ca88db6464eac60da96345513964', 'Mike Boss', 'mike.jpg', 'today I am playing at discowave', 'stopped', 1408482289, 'offline'),
(6, 'jane', '8cb2237d0679ca88db6464eac60da96345513964', 'Jane Doe', 'jane.jpg', '', 'stopped', 1408309489, 'offline'),
(7, 'betty', '8cb2237d0679ca88db6464eac60da96345513964', 'Betty Faces', 'betty.jpg', '', 'stopped', 1408482289, 'offline'),
(8, 'carla', '8cb2237d0679ca88db6464eac60da96345513964', 'Carla J', 'carla.jpg', '', 'stopped', 1408482289, 'offline'),
(9, 'jessy', '8cb2237d0679ca88db6464eac60da96345513964', 'Jessy M', 'jessy.jpg', '', 'stopped', 1408482289, 'offline'),
(10, 'sismic', '8cb2237d0679ca88db6464eac60da96345513964', 'The Sismic', 'sismic.jpg', '', 'stopped', 1408828786, 'offline'),
(11, 'mustaf', '8cb2237d0679ca88db6464eac60da96345513964', 'Mustaf Bo', 'mustaf.jpg', '', 'stopped', 1408898790, 'offline'),
(12, 'soap', '8cb2237d0679ca88db6464eac60da96345513964', 'Soap T', 'soap.jpg', '', 'stopped', 1408898786, 'offline');
