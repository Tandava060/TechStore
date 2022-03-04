<!-- CREATE TABLE cart(
    id int PRIMARY KEY,
    userId int NOT NULL,
    pId int NOT NULL,
    qty int NOT NULL,
    status varchar(5) NOT NULL,
    FOREIGN KEY (userId) REFERENCES user(userId),
    FOREIGN KEY (pId) REFERENCES product(pId)
); -->

<!-- CREATE TABLE `images` (
  id int(11) NOT NULL AUTO_INCREMENT,
  image longblob NOT NULL,
 	pId int NOT NULL,
  PRIMARY KEY (id),
    FOREIGN KEY (pId) REFERENCES product(pId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; -->