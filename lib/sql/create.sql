-- timestamp = 12/05/2022/15:15:00
USE artcompany_db;

DROP TABLE IF EXISTS purchase_item;
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS purchase;
DROP TABLE IF EXISTS customer;

CREATE TABLE customer (
  CustEmail CHAR(50) NOT NULL,
  CustFName CHAR(50) NOT NULL,
  CustLName CHAR(50) NOT NULL,
  Title CHAR(50) NOT NULL,
  -- Do we need auth?
  -- # Assuming SHA256 hash
  -- hashed_password char(64) NOT NULL,
  -- # Assuming 16 chars in salt
  -- salt char(16) NOT NULL,
  PRIMARY KEY (CustEmail)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE product (
  ProductNo int NOT NULL auto_increment,
  Description VARCHAR(255) NOT NULL,
  Price FLOAT NOT NULL,
  Category CHAR(50) NOT NULL,
  Colour CHAR(50) NOT NULL,
  Size CHAR(50) NOT NULL,
  PRIMARY KEY (ProductNo)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



CREATE TABLE purchase (
  PurchaseNo int NOT NULL auto_increment,
  CustEmail CHAR(50) NOT NULL,
  Date datetime NOT NULL,
  TotalPrice FLOAT NOT NULL,
  PRIMARY KEY (PurchaseNo),
  CONSTRAINT PurchaseItem_CustEmail_fk foreign key (CustEmail) references Customer(CustEmail) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


CREATE TABLE purchase_item (
  PurchaseItemNo int NOT NULL auto_increment,
  PurchaseNo int NOT NULL,
  ProductNo int NOT NULL,
  Quantity int NOT NULL,
  PRIMARY KEY (PurchaseItemNo),
  CONSTRAINT PurchaseItem_PurchaseNo_fk foreign key (PurchaseNo) references Purchase(PurchaseNo) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT PurchaseItem_ProductNo_fk foreign key (ProductNo) references Product(ProductNo) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
