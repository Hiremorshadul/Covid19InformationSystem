CREATE DATABASE IF NOT EXISTS filter_system;
USE filter_system;

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `admin_login` (`user_name`, `password`) VALUES ('admin', 'admin');

CREATE TABLE IF NOT EXISTS `data` (
  `case_no` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  PRIMARY KEY (`case_no`)
);

INSERT INTO `data` (`case_no`, `age`, `state`, `nationality`, `status`, `gender`, `from_date`, `to_date`) VALUES
('C-001', 45, 'California', 'American', 'Recovered', 'Male', '2020-03-01', '2020-03-15'),
('C-002', 30, 'New York', 'American', 'Active', 'Female', '2020-04-10', '2020-04-25'),
('C-003', 60, 'Florida', 'American', 'Deceased', 'Male', '2020-02-15', '2020-03-05');
