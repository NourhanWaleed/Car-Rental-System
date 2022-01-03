INSERT INTO User(first_name,last_name,gender,date_of_birth,email,password,balance,is_admin) VALUES('Armin','Arlert','M','2000-11-3','arminarlert@gmail.com','beretorotoletstalk',20000,'N'),
('Kaori','Miyazono','F','1998-7-4','kaori74@yahoo.com','143arimakosei',10000,'N'),
('Shoko','Nishimiya','F','1996-6-7','shokosan@gmail.com','123456678',537,'N'),
('Tanjiro','Kamado','M','1995-7-14','tanjiro@gmail.com','notademon33',1700,'N'),
('Light','Yagami','M','1990-2-28','lightyagami@yahoo.com','kiradess',100000,'N'),
('Eren','Jaeger','M','2000-3-30','freedom@gmail.com','tatakaex1000',1000000,'Y');

INSERT INTO Car (plate_number,model,brand,`year`,status,color,price_per_day) VALUES ('2345678','Roma','Ferrari','2021','active','red',500),
('2333378','Spider','Ferrari','2020','active','blue',500),
('7438238','Sonata','Hyundai','2018','active','yellow',200),
('6284327','Azera','Hyundai','2018','active','silver',200),
('6342876','Azera','Hyundai','2016','out of service','red',200),
('3468762','Panda','Fiat','2012','out of service','green',50),
('3578343','Granta','Lada','2016','rented','blue',75),
('3477344','SUV','Kia','2020','rented','indigo',100),
('3468764','Maruti','Suzuki','2018','rented','silver',75),
('5326742','Z4','BMW','2021','active','white',700);

INSERT INTO Reservation VALUES
(1,8,'rented','2021-12-15','2022-1-15','done'),
(4,6,'rented','2021-12-25','2022-2-1','done'),
(2,7,'rented','2021-12-28','2022-2-5','done'),
(5,10,'pending','2022-1-1','2022-1-5','not yet');
