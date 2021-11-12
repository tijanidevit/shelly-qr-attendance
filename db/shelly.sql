-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
 Generation Time: Nov 12, 2021 at 08:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;






CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-11-10 22:14:09');




CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `generated_qrcode_id` int(11) NOT NULL,
  `block` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `attendances` (`id`, `student_id`, `generated_qrcode_id`, `block`, `created_at`) VALUES
(1, 1, 1, '341be97d9aff90c9978347f66f945b77', '2021-11-12 18:00:55'),
(2, 2, 1, 'hjkddwudw3i2iue3hdwdbwdbwdsgdjwd', '2021-11-12 18:56:24'),
(3, 1, 1, 'cjagcjehyfueyfdae8iudeiudyeaws', '2021-11-12 18:56:24'),
(4, 2, 1, '8a7cf65139a9fbb34f03b046d8dc597c', '2021-11-12 19:25:30'),
(5, 2, 1, 'a8f12d9486cbcc2fe0cfc5352011ad35', '2021-11-12 19:26:00'),
(6, 1, 1, '016669d2649ea531365419cc792ef8bc', '2021-11-12 19:38:05'),
(7, 1, 5, '93d9033636450402d67cd55e60b3f926', '2021-11-12 19:45:10'),
(8, 1, 5, '250b164d84ea39a488422da8500786e6', '2021-11-12 19:49:42');




CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `class` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `classes` (`id`, `department_id`, `class`, `created_at`) VALUES
(1, 1, 'HND 1', '2021-11-11 06:16:26'),
(2, 1, 'ND 2', '2021-11-12 19:28:05'),
(3, 1, 'HND 2', '2021-11-12 19:31:01');




CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `code` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `courses` (`id`, `class_id`, `title`, `code`, `created_at`) VALUES
(1, 1, 'Programming', 'COM414', '2021-11-12 05:56:47'),
(3, 1, 'Python Programming', 'Com 326', '2021-11-12 19:31:43'),
(4, 2, 'Com 201', 'Introduction to System Programming', '2021-11-12 19:42:47');




CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `departments` (`id`, `department`, `created_at`) VALUES
(1, 'Computer Science', '2021-11-10 22:19:23'),
(2, 'Electrical/Electronics', '2021-11-10 22:19:23'),
(3, 'SLT', '2021-11-10 22:19:44'),
(4, 'Food Technology', '2021-11-10 22:19:44');




CREATE TABLE `generated_qrcodes` (
  `id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `generated_code` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `generated_qrcodes` (`id`, `lecturer_id`, `course_id`, `generated_code`, `created_at`) VALUES
(1, 1, 1, '16367382881672', '2021-11-12 17:31:28'),
(2, 1, 1, '16367383156936', '2021-11-12 17:31:55'),
(3, 1, 1, '16367386314263', '2021-11-12 17:37:11'),
(4, 6, 1, '16367456623045', '2021-11-12 19:34:22'),
(5, 6, 3, '16367462779755', '2021-11-12 19:44:37');




CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `lecturer_code` varchar(10) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `password` text NOT NULL DEFAULT '5f4dcc3b5aa765d61d8327deb882cf99',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `lecturers` (`id`, `department_id`, `lecturer_code`, `fullname`, `password`, `created_at`) VALUES
(1, 2, 'ASD090', 'Baraq Sulaimon', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-10 22:48:24'),
(5, 1, 'QU233', 'Mr. Paul', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-12 10:55:15'),
(6, 1, 'LEC0909', 'Ismail Ajose', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-11-12 19:27:31');




CREATE TABLE `lecturer_courses` (
  `id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `lecturer_courses` (`id`, `lecturer_id`, `course_id`, `class_id`, `created_at`) VALUES
(1, 1, 1, 1, '2021-11-12 10:47:27'),
(2, 6, 3, 1, '2021-11-12 19:32:40'),
(3, 6, 4, 2, '2021-11-12 19:43:12');




CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `matric_number` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `students` (`id`, `fullname`, `matric_number`, `email`, `password`, `created_at`) VALUES
(1, 'Adeleye Oluwaseyi Olamilekan', 'H/CS/19/0708', 'oluwaseyi@gmail.com', '645ddc60899fb5001ae6371a2ece8c21', '2021-11-12 18:24:37'),
(2, 'Awodele Lawal Adeshina', 'H/CS/19/0990', 'adeshina@gmail.com', 'f4970e45c58df9ed012a1e68b60a076d', '2021-11-12 18:57:50');




ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `generated_qrcodes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `lecturer_courses`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `generated_qrcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `lecturer_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
