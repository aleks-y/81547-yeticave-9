CREATE DATABASE yeticave
 DEFAULT CHARACTER SET utf8
 DEFAULT COLLATE utf8_general_ci;

USE yeticave;

CREATE TABLE categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category_name CHAR(64),
  category_symbol_code CHAR(64)
);

CREATE TABLE lots (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  name CHAR(128) NOT NULL,
  description TEXT(512) NOT NULL,
  image CHAR(128) NOT NULL,
  price_start INT NOT NULL,
  date_end TIMESTAMP,
  price_step INT NOT NULL,
  creator_id INT,
  winner_id INT,
  category_id INT
);

CREATE TABLE bets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  bet INT NOT NULL,
  user_id INT,
  lot_id INT
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email CHAR(128) NOT NULL UNIQUE,
  name CHAR(128) NOT NULL,
  password CHAR(32) NOT NULL,
  avatar CHAR(128),
  contacts TEXT NOT NULL
);

CREATE UNIQUE INDEX u_email ON users(email);
CREATE INDEX u_name ON users(name);
CREATE INDEX l_name ON lots(name);
