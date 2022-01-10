CREATE DATABASE Car_Rental_System;
CREATE TABLE Office(
office_id INT AUTO_INCREMENT,
Country VARCHAR(255) NOT NULL,
CITY VARCHAR(255) NOT NULL,
street VARCHAR(255) NOT NULL,
PRIMARY KEY(office_id)    
);
CREATE TABLE Customer(
customer_id INT AUTO_INCREMENT,
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
gender char not null,
date_of_birth DATE NOT NULL,
email  VARCHAR(255) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
balance FLOAT NOT NULL,  
PRIMARY KEY(customer_id)    
);
CREATE TABLE Car(
car_id INT AUTO_INCREMENT,
plate_number VARCHAR(255) UNIQUE NOT NULL,
model VARCHAR(255) NOT NULL,
brand VARCHAR(255) NOT NULL,    
`year` SMALLINT NOT NULL,
status VARCHAR(255) NOT NULL,
color VARCHAR(255) NOT NULL,
price_per_day FLOAT NOT NULL,    
office_id INT NOT NULL,    
is_reserved CHAR NOT NULL,    
PRIMARY KEY (car_id),
FOREIGN KEY (office_id) REFERENCES Office(office_id)    
);
CREATE TABLE Payment(
payment_id INT NOT NULL AUTO_INCREMENT,
payment_type VARCHAR(255) NOT NULL,
amount_paid float NOT NULL,
amount_remaining float NOT NULL,
total_amount float not null,
PRIMARY KEY(payment_id)
);
CREATE TABLE Reservation(
customer_id INT,
car_id  INT,
reservation_number INT UNIQUE NOT NULL AUTO_INCREMENT,
reserve_date DATE NOT NULL,
return_date  DATE NOT NULL,
payment_id int NOT NULL,
PRIMARY KEY (customer_id,car_id),
FOREIGN KEY (customer_id) REFERENCES Customer(customer_id),
FOREIGN KEY (car_id) REFERENCES Car(car_id),    
FOREIGN KEY (payment_id) REFERENCES Payment(payment_id)
);

CREATE TABLE admin(
admin_id INT AUTO_INCREMENT,
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
gender char not null,
date_of_birth DATE NOT NULL,
email  VARCHAR(255) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
PRIMARY KEY (admin_id)   
);
