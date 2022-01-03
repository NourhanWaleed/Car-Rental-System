CREATE DATABASE Car_Rental_System;
CREATE TABLE Car(
car_id INT AUTO_INCREMENT,
plate_number VARCHAR(255) UNIQUE NOT NULL,
model VARCHAR(255) NOT NULL,
brand VARCHAR(255) NOT NULL,    
`year` SMALLINT NOT NULL,
status VARCHAR(255) NOT NULL,
color VARCHAR(255) NOT NULL,
price_per_day FLOAT NOT NULL,    
PRIMARY KEY (car_id)
);
CREATE TABLE `User`(
user_id INT AUTO_INCREMENT,
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
gender char not null,
date_of_birth DATE NOT NULL,
email  VARCHAR(255) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
balance FLOAT NOT NULL,
is_admin char NOT NULL,    
PRIMARY KEY(user_id)    
);
CREATE TABLE Reservation(
user_id INT,
car_id  INT,
status VARCHAR(255)NOT NULL,
reserve_date DATE NOT NULL,
return_date  DATE NOT NULL,
payment VARCHAR(255) NOT NULL,    
PRIMARY KEY (user_id,car_id),
FOREIGN KEY (user_id) REFERENCES User(user_id),
FOREIGN KEY (car_id) REFERENCES Car(car_id)    
);
/*CREATE TABLE ISADMIN(
user_id INT AUTO_INCREMENT,
is_admin CHAR,
PRIMARY KEY user_id,
FOREIGN KEY user_id REFERENCES User(user_id)
)*/