-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 07:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(60) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `trail_id` int(11) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `datetime` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`trail_id`, `event_type`, `description`, `datetime`, `username`) VALUES
(3, 'Add Account', 'Created recptionit id 14 account', '2024-03-15 23:44:04', 'jdone13');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value_range` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `chart_id` int(11) NOT NULL,
  `chart_name` varchar(120) NOT NULL,
  `date_created` date NOT NULL,
  `x_label` varchar(70) NOT NULL,
  `y_label` varchar(70) NOT NULL,
  `data_points` text NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complication`
--

CREATE TABLE `complication` (
  `complication_id` int(11) NOT NULL,
  `complication` varchar(80) NOT NULL,
  `type` varchar(50) NOT NULL,
  `severity` varchar(30) NOT NULL,
  `diagnosis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `diagnosis_id` int(11) NOT NULL,
  `diabetes_type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dietary_plan`
--

CREATE TABLE `dietary_plan` (
  `dplan_id` int(11) NOT NULL,
  `dplan_name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `specialization` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dplan_food`
--

CREATE TABLE `dplan_food` (
  `dplan_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eplan_activity`
--

CREATE TABLE `eplan_activity` (
  `eplan_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `intensity` varchar(70) NOT NULL,
  `duration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercise_plan`
--

CREATE TABLE `exercise_plan` (
  `eplan_id` int(11) NOT NULL,
  `eplan_name` varchar(70) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_history`
--

CREATE TABLE `family_history` (
  `family_history_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `disease` varchar(80) NOT NULL,
  `history_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `meal_time` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reffered_by` varchar(100) NOT NULL,
  `substance_use` text NOT NULL,
  `medication_on` text NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_allergies`
--

CREATE TABLE `history_allergies` (
  `history_id` int(11) NOT NULL,
  `allergies` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_past_medical_history`
--

CREATE TABLE `history_past_medical_history` (
  `history_id` int(11) NOT NULL,
  `past_medical_history` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_technician`
--

CREATE TABLE `lab_technician` (
  `lab_tech_id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_test`
--

CREATE TABLE `lab_test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `normal_range` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_id` int(11) NOT NULL,
  `med_name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `manu_date` date NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `name_with_intials` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` blob NOT NULL,
  `emergency_contact_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `pharmacist_Id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physical_activity`
--

CREATE TABLE `physical_activity` (
  `activity_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescribed_medicine`
--

CREATE TABLE `prescribed_medicine` (
  `pmed_id` int(11) NOT NULL,
  `status` varchar(70) NOT NULL,
  `frequency` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `dosage` varchar(50) NOT NULL,
  `med_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `prescribed_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_prescribed_med`
--

CREATE TABLE `prescription_prescribed_med` (
  `precription_id` int(11) NOT NULL,
  `prescribed_med_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionist_id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptionist_id`, `staff_id`, `name`, `contact`, `user_id`) VALUES
(1, 'R-183823', 'Megan Dioor', '0733222222', 6),
(2, 'R-273872', 'Memee', '0739829821', 7),
(3, 'R-202321', 'Sriyani ', '0838291222', 9),
(4, 'R-676767', 'Sarath', '0738291021', 13),
(5, 'R-283899', 'wewe', '0738291021', 14);

-- --------------------------------------------------------

--
-- Table structure for table `social_history`
--
-- Error reading structure for table ehr_db.social_history: #1932 - Table &#039;ehr_db.social_history&#039; doesn&#039;t exist in engine
-- Error reading data for table ehr_db.social_history: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `ehr_db`.`social_history`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `test_request`
--

CREATE TABLE `test_request` (
  `request_id` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `test_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_result`
--

CREATE TABLE `test_result` (
  `result_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `result_value` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `result_attachment` blob NOT NULL,
  `request_id` int(11) NOT NULL,
  `labtech_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`) VALUES
(2, 'jdone13', '$2y$12$FTOK1QppMHqX4nb1IvcwJO88CJRBA9J4vyTo.G9dCUQ1ojc8U7ZBi', 'receptionist'),
(6, 'megand', '$2y$12$f5S4R6iuI..RobXRlWAc.OgkEVSFovM0UYvjF0aDE6EcNGJLuupN2', 'receptionist'),
(7, 'mememe', '$2y$12$nyOKCoS8xdaI207tJf0VjOOvKFg.pfX9mxDV/oy/bLLLcs73VZeXy', 'receptionist'),
(9, 'sriyan21', '$2y$12$paAldMDxm22E6fd.As02our4nKUtV/VXKNaJk4bOHG3tJdCudwgCO', 'receptionist'),
(11, 'kasun33', '$2y$12$4qXWFbNDfrAOlurviVP8peEIwBV1/lrR.lJLeLO/VssqCepeSFUWy', 'receptionist'),
(13, 'sarath77', '$2y$12$O8MZjGVCtBbidZKqMYp9/O4S0xtICjSU3pS727cDB51yZKCcFNIS.', 'receptionist'),
(14, 'wewe123', '$2y$12$Tor0D1R7aIqV8oZ/GAMH5.LksMJd2GfuC3ChGk35IC88YnOkboPTW', 'receptionist');

-- --------------------------------------------------------

--
-- Table structure for table `visit_record`
--

CREATE TABLE `visit_record` (
  `record_id` int(11) NOT NULL,
  `bp_systolic` varchar(20) NOT NULL,
  `bp_diastolic` varchar(20) NOT NULL,
  `plus_rate` varchar(20) NOT NULL,
  `glucose_level` varchar(20) NOT NULL,
  `patient_concerns` text NOT NULL,
  `patient_condition` text NOT NULL,
  `instructions` text NOT NULL,
  `note` text NOT NULL,
  `appoinment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`trail_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`chart_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `complication`
--
ALTER TABLE `complication`
  ADD PRIMARY KEY (`complication_id`),
  ADD KEY `diagnosis_id` (`diagnosis_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`diagnosis_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `dietary_plan`
--
ALTER TABLE `dietary_plan`
  ADD PRIMARY KEY (`dplan_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `dplan_food`
--
ALTER TABLE `dplan_food`
  ADD PRIMARY KEY (`dplan_id`,`food_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `eplan_activity`
--
ALTER TABLE `eplan_activity`
  ADD PRIMARY KEY (`eplan_id`,`activity_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `exercise_plan`
--
ALTER TABLE `exercise_plan`
  ADD PRIMARY KEY (`eplan_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `family_history`
--
ALTER TABLE `family_history`
  ADD PRIMARY KEY (`family_history_id`),
  ADD KEY `history_id` (`history_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `history_allergies`
--
ALTER TABLE `history_allergies`
  ADD PRIMARY KEY (`history_id`,`allergies`);

--
-- Indexes for table `history_past_medical_history`
--
ALTER TABLE `history_past_medical_history`
  ADD PRIMARY KEY (`history_id`,`past_medical_history`);

--
-- Indexes for table `lab_technician`
--
ALTER TABLE `lab_technician`
  ADD PRIMARY KEY (`lab_tech_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `lab_test`
--
ALTER TABLE `lab_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `reciever_id` (`reciever_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `emergency_contact_id` (`emergency_contact_id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`pharmacist_Id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `physical_activity`
--
ALTER TABLE `physical_activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `prescribed_medicine`
--
ALTER TABLE `prescribed_medicine`
  ADD PRIMARY KEY (`pmed_id`),
  ADD KEY `med_id` (`med_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `prescription_prescribed_med`
--
ALTER TABLE `prescription_prescribed_med`
  ADD PRIMARY KEY (`precription_id`,`prescribed_med_no`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionist_id`);

--
-- Indexes for table `test_request`
--
ALTER TABLE `test_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `test_result`
--
ALTER TABLE `test_result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `labtech_id` (`labtech_id`),
  ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visit_record`
--
ALTER TABLE `visit_record`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `appoinment_id` (`appoinment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `trail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `chart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complication`
--
ALTER TABLE `complication`
  MODIFY `complication_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `diagnosis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dietary_plan`
--
ALTER TABLE `dietary_plan`
  MODIFY `dplan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercise_plan`
--
ALTER TABLE `exercise_plan`
  MODIFY `eplan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_history`
--
ALTER TABLE `family_history`
  MODIFY `family_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_technician`
--
ALTER TABLE `lab_technician`
  MODIFY `lab_tech_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_test`
--
ALTER TABLE `lab_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `pharmacist_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physical_activity`
--
ALTER TABLE `physical_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescribed_medicine`
--
ALTER TABLE `prescribed_medicine`
  MODIFY `pmed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `receptionist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test_request`
--
ALTER TABLE `test_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_result`
--
ALTER TABLE `test_result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visit_record`
--
ALTER TABLE `visit_record`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`);

--
-- Constraints for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD CONSTRAINT `audit_trail_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `chart`
--
ALTER TABLE `chart`
  ADD CONSTRAINT `chart_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `complication`
--
ALTER TABLE `complication`
  ADD CONSTRAINT `complication_ibfk_1` FOREIGN KEY (`diagnosis_id`) REFERENCES `diagnosis` (`diagnosis_id`);

--
-- Constraints for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD CONSTRAINT `diagnosis_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`),
  ADD CONSTRAINT `diagnosis_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dplan_food`
--
ALTER TABLE `dplan_food`
  ADD CONSTRAINT `dplan_food_ibfk_1` FOREIGN KEY (`dplan_id`) REFERENCES `dietary_plan` (`dplan_id`),
  ADD CONSTRAINT `dplan_food_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Constraints for table `eplan_activity`
--
ALTER TABLE `eplan_activity`
  ADD CONSTRAINT `eplan_activity_ibfk_1` FOREIGN KEY (`eplan_id`) REFERENCES `exercise_plan` (`eplan_id`),
  ADD CONSTRAINT `eplan_activity_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `physical_activity` (`activity_id`);

--
-- Constraints for table `exercise_plan`
--
ALTER TABLE `exercise_plan`
  ADD CONSTRAINT `exercise_plan_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `family_history`
--
ALTER TABLE `family_history`
  ADD CONSTRAINT `family_history_ibfk_1` FOREIGN KEY (`history_id`) REFERENCES `history` (`history_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lab_technician`
--
ALTER TABLE `lab_technician`
  ADD CONSTRAINT `lab_technician_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`reciever_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`emergency_contact_id`) REFERENCES `emergency_contact` (`contact_id`);

--
-- Constraints for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD CONSTRAINT `pharmacist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescribed_medicine`
--
ALTER TABLE `prescribed_medicine`
  ADD CONSTRAINT `prescribed_medicine_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`);

--
-- Constraints for table `prescription_prescribed_med`
--
ALTER TABLE `prescription_prescribed_med`
  ADD CONSTRAINT `prescription_prescribed_med_ibfk_1` FOREIGN KEY (`precription_id`) REFERENCES `prescription` (`prescription_id`),
  ADD CONSTRAINT `prescription_prescribed_med_ibfk_2` FOREIGN KEY (`prescribed_med_no`) REFERENCES `prescribed_medicine` (`pmed_id`);

--
-- Constraints for table `test_request`
--
ALTER TABLE `test_request`
  ADD CONSTRAINT `test_request_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `test_request_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `test_request_ibfk_3` FOREIGN KEY (`test_id`) REFERENCES `lab_test` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test_result`
--
ALTER TABLE `test_result`
  ADD CONSTRAINT `test_result_ibfk_1` FOREIGN KEY (`labtech_id`) REFERENCES `lab_technician` (`lab_tech_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `test_result_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `test_request` (`request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `visit_record`
--
ALTER TABLE `visit_record`
  ADD CONSTRAINT `visit_record_ibfk_1` FOREIGN KEY (`appoinment_id`) REFERENCES `appointment` (`appointment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
