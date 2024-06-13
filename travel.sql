SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/* Database name: travel */

/* TABLE NAME admission*/

/* Database name: travel */
/* TABLE NAME: admission */



CREATE TABLE `user`(
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*Adding data into the user table*/

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `message`) values(1, 'jmakiva', 'jmakiva@gmail.com', 07777654319, 'Cancun, Mexico');


COMMIT;

ALTER TABLE `user`
ADD PRIMARY KEY (`id`);

  ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;