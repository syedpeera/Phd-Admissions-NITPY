-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2019 at 10:53 AM
-- Server version: 8.0.11
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phd_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_details`
--

DROP TABLE IF EXISTS `applicant_details`;
CREATE TABLE IF NOT EXISTS `applicant_details` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `application_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `t_no` text NOT NULL,
  `t_date` text NOT NULL,
  `amount` text NOT NULL,
  `bank_drawn` text NOT NULL,
  `application_category` text NOT NULL,
  `department` text NOT NULL,
  `area_of_research` text NOT NULL,
  `c_name` text NOT NULL,
  `f_name` text NOT NULL,
  `dob` text NOT NULL,
  `age` text NOT NULL,
  `gender` text NOT NULL,
  `maritalstatus` text NOT NULL,
  `category` text NOT NULL,
  `ph` text NOT NULL,
  `ews` text NOT NULL,
  `nationality` text NOT NULL,
  `address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `landline` text,
  `mobile_number` text NOT NULL,
  `applicant_email` text NOT NULL,
  `ug_name_of_degree` text NOT NULL,
  `ug_branch` text NOT NULL,
  `ug_marks_gpa` text NOT NULL,
  `ug_class` text NOT NULL,
  `ug_name_of_institute` text NOT NULL,
  `ug_name_of_university` text,
  `ug_year_of_passing` text NOT NULL,
  `pg_name_of_degree` text NOT NULL,
  `pg_branch` text NOT NULL,
  `pg_marks_gpa` text NOT NULL,
  `pg_class` text NOT NULL,
  `pg_name_of_institute` text NOT NULL,
  `pg_name_of_university` text,
  `pg_year_of_passing` text NOT NULL,
  `pg_project_title` text NOT NULL,
  `f_date` text NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=1090 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `applicant_details`
--

INSERT INTO `applicant_details` (`sno`, `application_number`, `t_no`, `t_date`, `amount`, `bank_drawn`, `application_category`, `department`, `area_of_research`, `c_name`, `f_name`, `dob`, `age`, `gender`, `maritalstatus`, `category`, `ph`, `ews`, `nationality`, `address`, `permanent_address`, `landline`, `mobile_number`, `applicant_email`, `ug_name_of_degree`, `ug_branch`, `ug_marks_gpa`, `ug_class`, `ug_name_of_institute`, `ug_name_of_university`, `ug_year_of_passing`, `pg_name_of_degree`, `pg_branch`, `pg_marks_gpa`, `pg_class`, `pg_name_of_institute`, `pg_name_of_university`, `pg_year_of_passing`, `pg_project_title`, `f_date`) VALUES
(1063, 'EE106322820900', '9876543', '1/2/2019', '500', 'SBI', 'Full Time', 'Electrical and Electronics Engineering', 'Control and Instrumentation System', 'sdljsdkfj', 'lkasdjflsdaj', '1/2/1998', '22', 'Male', 'Single', 'OC', 'No', 'Yes', 'Indian', 'adsfasf lasjf alkjflasjd flj flasjdlkja sdlkjf kj', 'ajdkjflas dfkasjdkflsaldjfkasdfjklsjdf  jkljlkj  ksdfjlkj af', '7895846324', '8309366892', 'peeraandroid.123@gmail.com', 'asfsda ', 'asdf as', '9.5', 'Distinction', 'NIT Puducherry', 'NIT Puducherry', '2016', 'asdf sdf a f a ', 'adfadf a', '9.8', 'Distinction', 'asdfsad sad sad fa sd', 'asfa  fas dsf sdf dsf', '2020', 'Networking Protocols', '1/3/2019'),
(1064, 'CE106483668888', '9876543', '1/2/2019', '500', 'SBI', 'Full Time', 'Civil Engineering', 'Structural Engineering', 'bbbbbbb', 'lkasdjflsdaj', '1/2/1998', '22', 'Male', 'Single', 'OC', 'No', 'Yes', 'Indian', 'adsfasf lasjf alkjflasjd flj flasjdlkja sdlkjf kj', 'ajdkjflas dfkasjdkflsaldjfkasdfjklsjdf  jkljlkj  ksdfjlkj af', '7895846324', '8309366892', 'peeraandroid.123@gmail.com', 'asfsda ', 'asdf as', '9.5', 'Distinction', 'NIT Puducherry', 'NIT Puducherry', '2016', 'asdf sdf a f a ', 'adfadf a', '9.8', 'Distinction', 'asdfsad sad sad fa sd', 'asfa  fas dsf sdf dsf', '2020', 'Networking Protocols', '1/3/2019'),
(1065, 'CS106567755106', '9876543', '1/2/2019', '500', 'SBI', 'Full Time', 'Computer Science and Engineering', 'Artificial Intelligence', 'nhimdja', 'lkasdjflsdaj', '1/2/1998', '22', 'Male', 'Single', 'OC', 'No', 'Yes', 'Indian', 'adsfasf lasjf alkjflasjd flj flasjdlkja sdlkjf kj', 'ajdkjflas dfkasjdkflsaldjfkasdfjklsjdf  jkljlkj  ksdfjlkj af', '7895846324', '8309366892', 'peeraandroid.123@gmail.com', 'asfsda ', 'asdf as', '9.5', 'Distinction', 'NIT Puducherry', 'NIT Puducherry', '2016', 'asdf sdf a f a ', 'adfadf a', '9.8', 'Distinction', 'asdfsad sad sad fa sd', 'asfa  fas dsf sdf dsf', '2020', 'Networking Protocols', '1/3/2019'),
(1066, 'EC106640058024', '9876543', '1/2/2019', '500', 'SBI', 'Full Time', 'Electronics and Communication Engineering', 'Climate related studies and signal processing', 'testing mailfuncphp', 'lkasdjflsdaj', '1/2/1998', '22', 'Male', 'Single', 'OC', 'No', 'Yes', 'Indian', 'adsfasf lasjf alkjflasjd flj flasjdlkja sdlkjf kj', 'ajdkjflas dfkasjdkflsaldjfkasdfjklsjdf  jkljlkj  ksdfjlkj af', '7895846324', '8309366892', 'peeraandroid.123@gmail.com', 'asfsda ', 'asdf as', '9.5', 'Distinction', 'NIT Puducherry', 'NIT Puducherry', '2016', 'asdf sdf a f a ', 'adfadf a', '9.8', 'Distinction', 'asdfsad sad sad fa sd', 'asfa  fas dsf sdf dsf', '2020', 'Networking Protocols', '1/3/2019'),
(1067, 'CS106711867148', '9876543', '1/2/2019', '500', 'SBI', 'Full Time', 'Computer Science and Engineering', 'Artificial Intelligence', 'wqwqwq', 'lkasdjflsdaj', '1/2/1998', '22', 'Male', 'Single', 'OC', 'No', 'Yes', 'Indian', 'adsfasf lasjf alkjflasjd flj flasjdlkja sdlkjf kj', 'ajdkjflas dfkasjdkflsaldjfkasdfjklsjdf  jkljlkj  ksdfjlkj af', '7895846324', '8309366892', 'peeraandroid.123@gmail.com', 'asfsda ', 'asdf as', '9.5', 'Distinction', 'NIT Puducherry', 'NIT Puducherry', '2016', 'asdf sdf a f a ', 'adfadf a', '9.8', 'Distinction', 'asdfsad sad sad fa sd', 'asfa  fas dsf sdf dsf', '2020', 'Networking Protocols', '1/3/2019'),
(1068, 'CH106894359576', '123456', '1/1/2019', '500', 'sbi', 'Full Time', 'Chemistry', 'Nanomaterials', 'sdfkhasdf sadhfksahd fk ', 'haskjf kjsdhfk ', '1/1/1998', '22', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdkjflkasd fjklasd jfklasdj fklasj f', 'lkjalskdf aklsdfjlaskf djkalsd fj', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdfhskdafhdksfh', 'asdfkjlasd fl', '9.5', 'Distinction', 'asjdlkfjasldfj', 'kajsdlfjasldfjlskj', '2016', 'askdfsafjsdajfl', 'jlkajsfklasjdf ', '9.8', 'Distinction', 'aasdfklasjdkfjaslk', 'jlkjaksldjflkasjdflkj', '2019', 'Networking Protocols', '1/1/2019'),
(1069, 'EE106994079930', '12345555555555', '1/1/2019', '500', 'SBI', 'Both', 'Electrical and Electronics Engineering', 'Control and Instrumentation System', 'asdjfklasjfkasj ', 'lkajsflkajsdk ', '1/1/2019', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdjfklasjdfklasj flkajs ldfk jalskj flkasj fdlkj aslkfj lklkjlk', 'klajflkjasdlf aklsf jklasjdf lkasj dfljaslkdfj lasjl', '', '839366898', 'peeraandroid.123@gmail.com', 'asdfkasdfjkl', 'lkjalskdfj lj', '9.8', 'asdfkasljks df', 'lkjasdlkfjaksdfjlkasjd f', 'kajlkasjdflkajsdf lj', '2019', 'asdfasldfjlkasjdf', 'kjadfljasldf ', '9.8', 'Distinction', 'kjasldkfjalskjfdklajdskf', 'aksjdflkjasdlf alksdjf', '2019', 'Networking Protocols', '1/1/2019'),
(1070, 'CS107036692334', '111111', '1/1/2019', '500', 'sbi', 'Full Time', 'Computer Science and Engineering', 'Artificial Intelligence', 'asfkjsdlf las jflasd j', 'lkjalskdf lksadjf laskd fla ', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdfl sdjfk sadflksa jfklja sdlj aslf alskddddddddddda', 'sadfasdjfksajd fkasjd flkja skdlfjlkaaaaaaaakkkkkkkkkkkkkkkkkkkkasjdfk', '', '8309366892', 'peeraandroid.123@gmail.com', 'asjdflkas jlasdk jflasj d sjd', 'lkasf lksjad k jasdlf lkjas ', '9.8', 'Distinction', 'aksdjfl asldkjflasd jflasjd fj', 'lajskf jasldkfj lkasjd fk aslkdfj ', '2019', 'asljdflas dfklajsdf j', 'jlksj fkjs lfjasldjl', '9.8', 'Distinction', 'ajslkjfklas klfas djlk al sdf', 'lkjafdlsk aksldj fkalsd ka fjd', '2016', 'Networking Protocols', '1/1/1998'),
(1071, 'EE107184899410', '111111', '1/1/2019', '500', 'sbi', '', 'Electrical and Electronics Engineering', 'Control and Instrumentation System', 'asfkjsdlf las jflasd j', 'lkjalskdf lksadjf laskd fla ', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdfl sdjfk sadflksa jfklja sdlj aslf alskddddddddddda', 'sadfasdjfksajd fkasjd flkja skdlfjlkaaaaaaaakkkkkkkkkkkkkkkkkkkkasjdfk', '', '8309366892', 'peeraandroid.123@gmail.com', 'asjdflkas jlasdk jflasj d sjd', 'lkasf lksjad k jasdlf lkjas ', '9.8', 'Distinction', 'aksdjfl asldkjflasd jflasjd fj', 'lajskf jasldkfj lkasjd fk aslkdfj ', '2019', 'asljdflas dfklajsdf j', 'jlksj fkjs lfjasldjl', '9.8', 'Distinction', 'ajslkjfklas klfas djlk al sdf', 'lkjafdlsk aksldj fkalsd ka fjd', '2016', 'Networking Protocols', '1/1/1998'),
(1072, 'CH107211295966', '111111', '1/1/2019', '500', 'sbi', 'Full Time', 'Chemistry', 'Nanomaterials', 'kasdjflk', 'lkjalskdf lksadjf laskd fla ', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdfl sdjfk sadflksa jfklja sdlj aslf alskddddddddddda', 'sadfasdjfksajd fkasjd flkja skdlfjlkaaaaaaaakkkkkkkkkkkkkkkkkkkkasjdfk', '', '8309366892', 'peeraandroid.123@gmail.com', 'asjdflkas jlasdk jflasj d sjd', 'lkasf lksjad k jasdlf lkjas ', '9.8', 'Distinction', 'aksdjfl asldkjflasd jflasjd fj', 'lajskf jasldkfj lkasjd fk aslkdfj ', '2019', 'asljdflas dfklajsdf j', 'jlksj fkjs lfjasldjl', '9.8', 'Distinction', 'ajslkjfklas klfas djlk al sdf', 'lkjafdlsk aksldj fkalsd ka fjd', '2016', 'Networking Protocols', '1/1/1998'),
(1073, 'EN107312146023', '111111', '1/1/2019', '500', 'sbi', 'Full Time', 'English', 'English Language Teaching and Literary Studies', 'asdfaslkjfklasj', 'lkjafljasdklfj', '1/1/1998', '22', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'saldkjfaslkj flaksjflkasjlkdfjalsdj lkasjdf', 'lkjalsd jflkajsdklf aslkdjf klas jdflkaj sklfj alks', '', '8309366892', 'peeraandroid.123@gmail.com', 'lasjlfkasjdklfjasd jf', 'ljaslfjsadjfklfsa ', '9.5', 'kjasdlkfjaskldj', 'klajsdljsdalfj', 'lkasjdlkfjasfd', '2016', 'asfkasjf sadkfjkasd j', 'lkjasf sakldfjksl f', '9.8', 'kajdlfjas dfjlk', 'lksjadfl jasdklfj ', 'lkjaslkfj askldjfl', '2018', 'Networking Protocols', '1/1/2019'),
(1074, 'CH107451626167', '111111', '1/1/2019', '500', 'sbi', 'kljasdklfj laskdjflkasjd flj parttime', 'Chemistry', 'Nanomaterials', 'kjlfkjslakdjflksdf', 'lkjafljasdklfj', '1/1/1998', '22', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'saldkjfaslkj flaksjflkasjlkdfjalsdj lkasjdf', 'lkjalsd jflkajsdklf aslkdjf klas jdflkaj sklfj alks', '', '8309366892', 'peeraandroid.123@gmail.com', 'lasjlfkasjdklfjasd jf', 'ljaslfjsadjfklfsa ', '9.5', 'kjasdlkfjaskldj', 'klajsdljsdalfj', 'lkasjdlkfjasfd', '2016', 'asfkasjf sadkfjkasd j', 'lkjasf sakldfjksl f', '9.8', 'kajdlfjas dfjlk', 'lksjadfl jasdklfj ', 'lkjaslkfj askldjfl', '2018', 'Networking Protocols', '1/1/2019'),
(1075, 'EE107552594740', '11111', '1/1/2019', '500', 'SBI', 'Full Time', 'Electrical and Electronics Engineering', 'Control and Instrumentation System', 'asjdlfjasdfjalsdjf asd', 'alsdjflkasdjfldsj', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'fasdfasdfasdf', 'asdfasdfasdfas dfas dfjasdlk jalksd jklas jdf', 'lkjasdlkfj aksldj klasd jfklas jkfl jaslkdfj alks jfl', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdflkasjdflkasjdf', 'lasjdfklasjdflkasjdf', '8', 'laasdlkjflasjkd', 'lkajsfklajsdkfljasldkfj', 'laksdjlkasdjflkasjdfkljsd', '2016', 'jfjaslkdfjlaksjf klasdjlk ', 'lkasjdfklasdjf', '9.8', 'asdkfjalskdjlkasdf', 'aksljdflkasjdlfkjsdlkf', 'lasjdflkasdjflkasjdfklajsdf', '2018', 'asdfajsdfjasdlkfjalksdjfklj asdfajsdklf ajskdlf la sdjlasd klasjdlf asld fjlasd jf', '1/1/2019'),
(1076, 'EE107687350917', '11111', '1/1/2019', '500', 'SBI', 'Full Time', 'Electrical and Electronics Engineering', 'Control and Instrumentation System', 'jfsd aslkdfj askd', 'asdfjkas askdfasld', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'fasdfasdfasdf', 'jflskadj fkajsdflk', 'ljdslkfj askldfj laks fj', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdflkasjdflkasjdf', 'lasjdfklasjdflkasjdf', '8', 'laasdlkjflasjkd', 'lkajsfklajsdkfljasldkfj', 'laksdjlkasdjflkasjdfkljsd', '2016', 'jfjaslkdfjlaksjf klasdjlk ', 'lkasjdfklasdjf', '9.8', 'asdkfjalskdjlkasdf', 'aksljdflkasjdlfkjsdlkf', 'lasjdflkasdjflkasjdfklajsdf', '2018', 'asdfasdfjalsd fkalsj dfkla jsdflk jaslkd jflk', '1/1/2019'),
(1077, 'EN107711689019', '11111', '1/1/2019', '500', 'SBI', 'Full Timeas', 'English', 'English Language Teaching and Literary Studies', 'dfsdfj sa djkflas', 'asdfjkas askdfasld', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'fasdfasdfasdf', 'jflskadj fkajsdflk', 'ljdslkfj askldfj laks fj', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdflkasjdflkasjdf', 'lasjdfklasjdflkasjdf', '8', 'laasdlkjflasjkd', 'lkajsfklajsdkfljasldkfj', 'laksdjlkasdjflkasjdfkljsd', '2016', 'jfjaslkdfjlaksjf klasdjlk ', 'lkasjdfklasdjf', '9.8', 'asdkfjalskdjlkasdf', 'aksljdflkasjdlfkjsdlkf', 'lasjdflkasdjflkasjdfklajsdf', '2018', 'asdfasdfjalsd fkalsj dfkla jsdflk jaslkd jflk lkasdjksaj dkf jasdlfjlasd jfjklasd f jklsad jfjlaskjlasdjk flk', '1/1/2019'),
(1078, 'CH107888463207', '11111', '1/1/2019', '500', 'SBI', 'Full Timeas', 'Chemistry', 'Nanomaterials', 'dsfas a sdfasdf', 'asdfjkas askdfasld', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'fasdfasdfasdf', 'jflskadj fkajsdflk', 'ljdslkfj askldfj laks fj', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdflkasjdflkasjdf', 'lasjdfklasjdflkasjdf', '8', 'laasdlkjflasjkd', 'lkajsfklajsdkfljasldkfj', 'laksdjlkasdjflkasjdfkljsd', '2016', 'jfjaslkdfjlaksjf klasdjlk ', 'lkasjdfklasdjf', '9.8', 'asdkfjalskdjlkasdf', 'aksljdflkasjdlfkjsdlkf', 'lasjdflkasdjflkasjdfklajsdf', '2018', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', '1/1/2019'),
(1079, 'CS107982170261', '11111', '1/1/2019', '500', 'SBI', 'Full Timeas', 'Computer Science and Engineering', 'Artificial Intelligence', 'sfsadfsadasdf', 'asdfjkas askdfasld', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'fasdfasdfasdf', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', 'ljdslkfj askldfj laks fj', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdflkasjdflkasjdf', 'lasjdfklasjdflkasjdf', '8', 'laasdlkjflasjkd', 'lkajsfklajsdkfljasldkfj', 'laksdjlkasdjflkasjdfkljsd', '2016', 'jfjaslkdfjlaksjf klasdjlk ', 'lkasjdfklasdjf', '9.8', 'asdkfjalskdjlkasdf', 'aksljdflkasjdlfkjsdlkf', 'lasjdflkasdjflkasjdfklajsdf', '2018', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', '1/1/2019'),
(1080, 'EC108073506822', '11111', '1/1/2019', '500', 'SBI', 'Full Timeas', 'Electronics and Communication Engineering', 'Climate related studies and signal processing', 'sadflsakjdf  asldk fj', 'asdfjkas askdfasld', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'fasdfasdfasdf', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', 'ljdslkfj askldfj laks fj', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdflkasjdflkasjdf', 'lasjdfklasjdflkasjdf', '8', 'laasdlkjflasjkd', 'lkajsfklajsdkfljasldkfj', 'laksdjlkasdjflkasjdfkljsd', '2016', 'jfjaslkdfjlaksjf klasdjlk ', 'lkasjdfklasdjf', '9.8', 'asdkfjalskdjlkasdf', 'aksljdflkasjdlfkjsdlkf', 'lasjdflkasdjflkasjdfklajsdf', '2018', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', '1/1/2019'),
(1081, 'CE108197032872', '11111', '1/1/2019', '500', 'SBI', 'Full Timeas', 'Civil Engineering', 'Structural Engineering', 'fasdfasdf', 'asdfjkas askdfasld', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'fasdfasdfasdf', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdflkasjdflkasjdf', 'lasjdfklasjdflkasjdf', '8', 'laasdlkjflasjkd', 'lkajsfklajsdkfljasldkfj', 'laksdjlkasdjflkasjdfkljsd', '2016', 'jfjaslkdfjlaksjf klasdjlk ', 'lkasjdfklasdjf', '9.8', 'asdkfjalskdjlkasdf', 'aksljdflkasjdlfkjsdlkf', 'lasjdflkasdjflkasjdfklajsdf', '2018', 'this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.this is a sentence for testing the length of the sentence that can fit in the pdf and the textbox also.', '1/1/2019'),
(1082, 'EN108242904432', '111111', '1/1/2019', '500', 'sbi', 'asdfasdfasf', 'English', 'English Language Teaching and Literary Studies', 'asdfasdfadfd', 'asdfasdf', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdf a kasdjfajsdfklj adskj la sdjflk', 'laksdjflkasjdfl jasdl fjlasd jfl sdkl jfla jdkfj', '', '8309366892', 'peeraandroid.123@gmail.com', 'sadfasdlf skadf j', 'asdjfklasd jfk ', '9.5', 'asdjfask dfjlskd ', 'asdjflkasjd fjaksldjf ', 'k a sjdfkla sjdfklas jdfk', '2016', 'sajfkasjd fklasdj', 'sdfkljfasdklj f', '9.8', 'asdjfkas dfkas df', 'lasdjfkasd jfl asdlfjl', 'asldkjfkasd fklas dlf jlk', '2020', 'Networking Protocols', '1/1/2019'),
(1083, 'MA108327091588', '111111', '1/1/2019', '500', 'sbi', 'asdfasdfasf', 'Mathematics', 'Fuzzy optimization', 'fsadfasdf', 'asdfasdf', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdf a kasdjfajsdfklj adskj la sdjflk', 'laksdjflkasjdfl jasdl fjlasd jfl sdkl jfla jdkfj', '', '8309366892', 'peeraandroid.123@gmail.com', 'sadfasdlf skadf j', 'asdjfklasd jfk ', '9.5', 'asdjfask dfjlskd ', 'asdjflkasjd fjaksldjf ', 'k a sjdfkla sjdfklas jdfk', '2016', 'sajfkasjd fklasdj', 'sdfkljfasdklj f', '9.8', 'asdjfkas dfkas df', 'lasdjfkasd jfl asdlfjl', 'asldkjfkasd fklas dlf jlk', '2020', 'Networking Protocols', '1/1/2019'),
(1084, 'CH108474479642', '111111', '1/1/2019', '500', 'sbi', 'asdfasdfasf', 'Chemistry', 'Nanomaterials', 'vbv vc cvbcvb', 'asdfasdf', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'asdf a kasdjfajsdfklj adskj la sdjflk', 'laksdjflkasjdfl jasdl fjlasd jfl sdkl jfla jdkfj', '', '8309366892', 'peeraandroid.123@gmail.com', 'sadfasdlf skadf j', 'asdjfklasd jfk ', '9.5', 'asdjfask dfjlskd ', 'asdjflkasjd fjaksldjf ', 'k a sjdfkla sjdfklas jdfk', '2016', 'sajfkasjd fklasdj', 'sdfkljfasdklj f', '9.8', 'asdjfkas dfkas df', 'lasdjfkasd jfl asdlfjl', 'asldkjfkasd fklas dlf jlk', '2020', 'Networking Protocols', '1/1/2019'),
(1085, 'CS108575041352', '111111', '1/2/2019', '555', 'SBI', 'Full Timeasfasdfpass', 'Computer Science and Engineering', 'Artificial Intelligence', 'asdfasfasdfasdf', 'asdfasdfasd', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'sdfsd fasd fasdf asdfdsa fasd fsddf sd adsf asdf ', 'asdfasdf as asd fasdf asd fasd fasd fasd fasd fasd fasd fasdd', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdf asd as asd f', 'dsdf asdf asd fas df', '9.5', 'xcvza sdf asd fas', 'asdf asd afsd fdsa ', 'asd fasd asd asdf', '2016', 'asdf sad fasd f', 'asdf asd fasd a', '9.8', 'fasd asd fasd asd', 'asdf asd asd fa sdd', 'asd asd fasd fsd f', '2020', ' fasd fsda fasd f', '1/1/2019'),
(1086, 'CE108648069810', '111111', '1/2/2019', '555', 'SBI', 'Full Timeasfasdfpass', 'Civil Engineering', 'Structural Engineering', 'asdfasfasdfasdf', 'asdfasdfasd', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'sdfsd fasd fasdf asdfdsa fasd fsddf sd adsf asdf ', 'asdfasdf as asd fasdf asd fasd fasd fasd fasd fasd fasd fasdd', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdf asd as asd f', 'dsdf asdf asd fas df', '9.5', 'xcvza sdf asd fas', 'asdf asd afsd fdsa ', 'asd fasd asd asdf', '2016', 'asdf sad fasd f', 'asdf asd fasd a', '9.8', 'fasd asd fasd asd', 'asdf asd asd fa sdd', 'asd asd fasd fsd f', '2020', ' fasd fsda fasd f', '1/1/2019'),
(1087, 'CE108719453799', '111111', '1/2/2019', '555', 'SBI', 'Full Timeasfasdfpass', 'Civil Engineering', 'Structural Engineering', 'asdfasfasdfasdf ', 'asdfasdfasd', '1/1/1998', '20', 'Male', 'Single', 'OC', 'No', 'No', 'indian', 'sdfsd fasd fasdf asdfdsa fasd fsddf sd adsf asdf ', 'asdfasdf as asd fasdf asd fasd fasd fasd fasd fasd fasd fasdd', '', '8309366892', 'peeraandroid.123@gmail.com', 'asdf asd as asd f', 'dsdf asdf asd fas df', '9.5', 'xcvza sdf asd fas', 'asdf asd afsd fdsa ', 'asd fasd asd asdf', '2016', 'asdf sad fasd f', 'asdf asd fasd a', '9.8', 'fasd asd fasd asd', 'asdf asd asd fa sdd', 'asd asd fasd fsd f', '2020', ' fasd fsda fasd f', '1/1/2019'),
(1088, 'MA108852409136', 'DUB4174765', '05/06/2019', '1000', 'INDIAN BANK', 'PART TIME(on - campus)', 'Mathematics', 'Fuzzy optimization', 'MANECKSHAW B', 'BALAKRISHNAN R', '18/02/1973', '46', 'Male', 'Married', 'OC', 'No', 'No', 'INDIAN', 'No. 15, First Cross, MSP Lakshmi Nagar, Keezhakasakudy, Karaikal 609 609', 'No. 30, 7th Cross Tagore Nagar, Pondicherry 605008', '', '9443413821', 'maneckshawb@gmail.com', 'B.SC', 'Mathematics', '72.42', 'First', 'St. Josephs College (Autonomous), TrichyBharathidasan University, Trichy', 'Bharathidasan University, Trichy', '1993', 'MSC', 'Mathematics', '86.09', 'First', 'St. Josephs College (Autonomous), Trichy', 'Bharathidasan University', '1995', 'M.PHIL - On Graph equations, Inequalities and Graphs with Switching equivalent to their Line graphs', '6/6/2019'),
(1089, 'PH108936680534', 'asdfasd', 'asdlasdkjfl', 'ljasdlkfja', 'lkajflkasjd', 'lkajfdlkajsdklf', 'Physics', 'Materials Science for energy storage', 'asdjklajsdklfasjdlk', 'lkjasdlkjaslkdfjlaskdj', 'lkajsdlkasdjflk', 'lkajsdf', 'Male', 'Married', 'OC', 'No', 'No', 'asdfasdljfasdj', 'ljdklajsd klfjasdlkf jaslkdj flkasdj flasd flkasjd flkj lsdkaj flkaj flk', 'laksdjf laks jfdlkasj dflkasd jlfkajs dlkfj asldkfj alksd jflkasd fjlasd jf', 'asdfjalskdjalskdj', 'asjflkasdjflaksdj', 'alksdjfalksjflkasdjfldksaj@gmail.com', 'alsfaslkdjfalskdjf', 'laksdfjalksdjf', 'alsdjlsdf', 'lkjsdljsalfjdslk', 'lkjslakdfjlkasdjlkfj', 'lkjasdflkjalksdjflkdsjf', 'kljasdkfljadskljfl', 'lasdjflaskdjfkl', 'kljdslkajfalksdjf', 'ljalsdkfjlasdkjfls', 'lkjdsflasjdflk', 'lkjasdflkajsdfl', 'lkajsdflkasjdflkj', 'lkasdjflkasjdf', 'lkasjdflkasdjfklaj alsd jflaksjd flkasd j', 'asdfasdlkjf alsdkf j');

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

DROP TABLE IF EXISTS `exam_details`;
CREATE TABLE IF NOT EXISTS `exam_details` (
  `serialno` int(11) NOT NULL DEFAULT '-1',
  `gate_score` text,
  `gate_rank` text,
  `gate_percentile` text,
  `gate_discipline` text,
  `gate_year` text,
  `gate_validity` text,
  `net_score` text,
  `net_rank` text,
  `net_percentile` text,
  `net_discipline` text,
  `net_year` text,
  `net_validity` text,
  `slet_score` text,
  `slet_rank` text,
  `slet_percentile` text,
  `slet_discipline` text,
  `slet_year` text,
  `slet_validity` text,
  `csir_score` text,
  `csir_rank` text,
  `csir_percentile` text,
  `csir_discipline` text,
  `csir_year` text,
  `csir_validity` text,
  `cat_score` text,
  `cat_rank` text,
  `cat_percentile` text,
  `cat_discipline` text,
  `cat_year` text,
  `cat_validity` text,
  `ugc_score` text,
  `ugc_rank` text,
  `ugc_percentile` text,
  `ugc_discipline` text,
  `ugc_year` text,
  `ugc_validity` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`serialno`, `gate_score`, `gate_rank`, `gate_percentile`, `gate_discipline`, `gate_year`, `gate_validity`, `net_score`, `net_rank`, `net_percentile`, `net_discipline`, `net_year`, `net_validity`, `slet_score`, `slet_rank`, `slet_percentile`, `slet_discipline`, `slet_year`, `slet_validity`, `csir_score`, `csir_rank`, `csir_percentile`, `csir_discipline`, `csir_year`, `csir_validity`, `cat_score`, `cat_rank`, `cat_percentile`, `cat_discipline`, `cat_year`, `cat_validity`, `ugc_score`, `ugc_rank`, `ugc_percentile`, `ugc_discipline`, `ugc_year`, `ugc_validity`) VALUES
(1063, '933', '23', '98', 'cse', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1064, '933', '23', '98', 'cse', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1065, '933', '23', '98', 'cse', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1066, '933', '23', '98', 'cse', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1067, '933', '23', '98', 'cse', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1068, '987', '234', '98', 'dalsfjalskdjf', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1069, '987', '234', '98', 'JASKLDFJLSAK', '2019', '2018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1070, '987', '223', '98', 'sdfsjdflk', '2019', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1071, '987', '223', '98', 'sdfsjdflk', '2019', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1072, '987', '223', '98', 'sdfsjdflk', '2019', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1073, '999', '22', '98', 'dis', 'asdkjalskdjf', 'klajskdlfjasdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1074, '999', '22', '98', 'dis', 'asdkjalskdjf', 'klajskdlfjasdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1075, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1076, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1077, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1078, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1079, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1080, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1081, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1082, '987', '23', '98', 'asdhfkajsdhf', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1083, '987', '23', '98', 'asdhfkajsdhf', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1084, '987', '23', '98', 'asdhfkajsdhf', '2016', '2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1085, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1086, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1087, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1088, '', '', '', '', '', '', '', '', '', '', '', '', 'NA', 'NA', 'NA', 'Mathematics', '1996', 'NA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1089, 'lkjasdflkajsdf', 'lkjasdflkjasdflk', 'alskdfjalsdkfj', 'lkadjsflkajdsf', 'lkajdsflkajdsf', 'lkadjsflaksdjf', 'laksdjflasdkjf', 'lkdasjflkasdfj', 'lkjasdflkjasd', 'lkdsajflakdsfj', 'lasdfkjasldfj', 'lksdajflkasdjf', 'lkjflkasdjf', 'lkasdfjkalsdjf', 'ljasdflkjadslfk', 'lkjasdflkjl', 'lakjdflkdsfj', 'lkjdsflkjasdlkfj', 'jalsdfjasdlkfj', 'lksjdaflkasjdf', 'lkjdsflkajsdf', 'lkjdsalkfjasdlkj', 'lkjasdlfkjalsdjf', 'lkjasdflkjasdlkfj', 'ljasdflkjasdlkfj', 'lkjdslfkjadslkj', 'lkjdslkafjlskadjl', 'kjlasdkjflsdk', 'lkjsdalfkjl', 'lkjsdflsdj', 'lkjdslfjalsdkj', 'lkjsdaflkj', 'lkjadflkasjd', 'lkjasdlkfj', 'lkjafsdlkjlkjasdf', 'kjsdflkaj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
