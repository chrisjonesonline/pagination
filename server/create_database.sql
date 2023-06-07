create database YOUR_DB_NAME;

use YOUR_DB_NAME;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `fullName` varchar(40) NOT NULL,
  
  PRIMARY KEY  (`id`)
);

INSERT INTO `users`(`id`, `fullName`) VALUES ('','Chris Jones');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Blake Kent');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Willie Velazquez');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Aran Reilly');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Fannie Daniels');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Scott Burch');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Scott Burch');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Paula Calhoun');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Clementine Case');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Claire Bruce');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Sophia Melton');
INSERT INTO `users`(`id`, `fullName`) VALUES ('','Zaynah Mathis');