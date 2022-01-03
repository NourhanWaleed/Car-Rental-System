INSERT INTO Customer(first_name,last_name,gender,date_of_birth,email,password,balance) VALUES
('Armin','Arlert','M','2000-11-3','arminarlert@gmail.com','beretorotoletstalk',20000),
('Kaori','Miyazono','F','1998-7-4','kaori74@yahoo.com','143arimakosei',10000),
('Shoko','Nishimiya','F','1996-6-7','shokosan@gmail.com','123456678',537),
('Tanjiro','Kamado','M','1995-7-14','tanjiro@gmail.com','notademon33',1700),
('Light','Yagami','M','1990-2-28','lightyagami@yahoo.com','kiradess',100000);

INSERT INTO Office(Country, City, Street) VALUES 
('United States Of America','Newyork','Newyork Street'),
('South Korea','Seoul','Gangnam Street'),
('Germany','Nordlingen','Shiganshina Street'),
('Egypt','Cairo','Mohamed Aly Street'),
('South Korea','Seoul','Dongdangmun Street'),
('Japan','Osaka','Suzuki Street');

INSERT INTO Car (plate_number,model,brand,`year`,status,color,price_per_day,office_id,is_reserved) VALUES
('2345678','Roma','Ferrari','2021','active','red',500,1,'N'),
('2333378','Spider','Ferrari','2020','active','blue',500,1,'N'),
('7438238','Sonata','Hyundai','2018','active','yellow',200,2,'N'),
('6284327','Azera','Hyundai','2018','active','silver',200,3,'N'),
('6342876','Azera','Hyundai','2016','out of service','red',200,3,'N'),
('3468762','Panda','Fiat','2012','out of service','green',50,4,'Y'),
('3578343','Granta','Lada','2016','rented','blue',75,4,'Y'),
('3477344','SUV','Kia','2020','rented','indigo',100,5,'Y'),
('3468764','Maruti','Suzuki','2018','rented','silver',75,6,'N'),
('5326742','Z4','BMW','2021','active','white',700,1,'Y');

INSERT INTO Reservation VALUES
(1,8,1,'2021-12-15','2022-1-15','Y',3100.0),
(4,6,2,'2021-12-25','2022-2-1','Y',1850.0),
(2,7,3,'2021-12-28','2022-2-5','Y',2850.0),
(5,10,4,'2022-1-1','2022-1-5','N',2800.0);

INSERT INTO Admin(first_name,last_name,gender,date_of_birth,email,password) VALUES
('Eren','Jaeger','M','2000-3-30','freedom@gmail.com','tatakaex1000');