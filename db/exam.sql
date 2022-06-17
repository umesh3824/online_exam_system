-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 10:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `s_id` int(11) NOT NULL,
  `out_of_marks` int(11) NOT NULL DEFAULT '20',
  `obtain_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quetion`
--

CREATE TABLE `quetion` (
  `q_id` int(11) NOT NULL,
  `qdescription` text NOT NULL,
  `A` text NOT NULL,
  `B` text,
  `C` text NOT NULL,
  `D` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quetion`
--

INSERT INTO `quetion` (`q_id`, `qdescription`, `A`, `B`, `C`, `D`, `answer`) VALUES
(31, 'Which is the container that doesn\'t contain title bar and MenuBars but it can have other components like button, textfield etc??', 'Window', 'Frame', 'Panel', 'Container', 'Panel'),
(32, 'Give the abbreviation of AWT??', 'Applet Windowing Toolkit', 'Abstract Windowing Toolkit', 'Absolute Windowing Toolkit', 'None of the above', 'Abstract Windowing Toolkit'),
(33, 'Abstract Windowing Toolkit', 'public abstract void setFont(Font font)', 'public abstract void setColor(Color c)', 'public abstract void drawString(String str, int x, int y)', 'None of the above', 'public abstract void setColor(Color c)'),
(34, 'Which object can be constructed to show any number of choices in the visible window??', '?Labels', 'Choice', 'List', 'Checkbox', 'List'),
(35, 'Which is used to store data and partial results, as well as to perform dynamic linking, return values for methods, and dispatch exceptions?', 'Window', 'Panel', 'Frame', 'Container', 'Frame'),
(36, 'Which class is used for this Processing Method processActionEvent( )??', 'Button,List,MenuItem', 'Button,Checkbox,Choice', 'Scrollbar,Component,Button', 'None of the above', 'Button,List,MenuItem'),
(37, 'Which method can set or change the text in a Label??', 'setText()', 'getText()', 'All the above', 'None of the above', 'setText()'),
(38, 'Which is a component in AWT that can contain another components like buttons, textfields, labels etc.?', 'Window', 'Container', 'Panel', 'Frame', 'Container'),
(39, 'Which are passive controls that do not support any interaction with the user??', 'Choice', '?List', 'Labels', 'Checkbox', 'Labels'),
(40, 'How many types of controls does AWT support??', '7', '6', '5', '8', '7'),
(41, 'The following a) It is lightweight. b) It supports pluggable look and feel.c) It follows MVC (Model View Controller) architecture are the advantages of _____ . ', 'Swing', 'AWT', '?Both A & B', 'None of the above', 'Swing'),
(42, 'Which package provides many event classes and Listener interfaces for event handling??', 'java.awt', 'java.awt.Graphics', '?java.awt.event', 'None of the above', '?java.awt.event'),
(43, 'The Following steps are required to perform 1) Implement the Listener interface and overrides its methods 2) Register the component with the Listener ', 'Exception Handling', 'String Handling', 'Event Handling', 'None of the above', 'Event Handling'),
(44, 'Where can the event handling code be written??', 'Same class', 'Other class', 'Anonymous class', 'All mentioned above', 'All mentioned above'),
(45, 'Which class provides many methods for graphics programming??', '?java.awt', '?java.Graphics', 'java.awt.Graphics', 'None of the above', 'java.awt.Graphics'),
(46, 'URL is an acronym for??', 'Uniform Resource Locator', 'Unified Resource Locator', 'Uniform Restore Locator', 'Unified Restore Locator', 'Uniform Resource Locator'),
(47, 'Which class is used to create servers that listen for either local client or remote client programs??', 'ServerSockets', 'httpServer', 'httpResponse', 'None of the above', 'ServerSockets'),
(48, '?Which constructor of DatagramSocket class is used to creates a datagram socket and binds it with the given Port Number??', 'DatagramSocket(int port)', 'DatagramSocket(int port, InetAddress address)', 'DatagramSocket()', 'None of the above', 'DatagramSocket(int port, InetAddress address)'),
(49, 'Which methods are commonly used in ServerSocket class??', '?public OutputStream getOutputStream()', 'public Socket accept()', 'public synchronized void close()', 'None of the above', 'public Socket accept()'),
(50, 'Which classes are used for connection-less socket programming??', 'DatagramSocket', 'DatagramPacket', 'Both A & B', 'None of the above', 'Both A & B'),
(51, 'Which method of URL class represents a URL and it has complete set of methods to manipulate URL in Java??', 'java.net.URL', 'java.net.URLConnection', 'Both A & B', 'None of the above', 'java.net.URL'),
(56, 'What does the java.net.InetAddress class represent??', 'Socket', '?IP Address', 'Protocol', 'MAC Address', '?IP Address'),
(57, 'TCP,FTP,Telnet,SMTP,POP etc. are examples of ??', 'Socket', 'IP Address', 'Protocol', 'MAC Address', 'Protocol'),
(58, 'Which steps occur when establishing a TCP connection between two computers using sockets??', 'The server instantiates a ServerSocket object, denoting which port number communication is to occur on', 'The server invokes the accept() method of the ServerSocket class. This method waits until a client connects to the server on the given port', 'After the server is waiting, a client instantiates a Socket object, specifying the server name and port number to connect to', 'All of the above', 'All of the above'),
(59, 'In InetAddress class which method returns the host name of the IP Address??', 'public String getHostName()', 'public String getHostAddress()', '?public static InetAddress getLocalHost()', 'None of the above', 'public String getHostName()');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `s_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`s_id`, `s_name`, `s_pass`) VALUES
(1700180158, 'Tejas Mandora', '1700180158'),
(1700180159, 'Patil Mayur', '1700180159'),
(1700180160, 'Narkhede Ajinkya', '1700180160'),
(1700180161, 'Chaudhari Umesh', '1700180161'),
(1700180162, 'Rohan Ravindra Joshi Bhusawal', '1700180162'),
(1700180163, 'Tayde Rajshri ', '1700180163'),
(1700180169, 'Randhir Gauri', '1700180169'),
(1700180172, 'Narkhede Prerana', '1700180172'),
(1700180173, 'Patil Ashwini', '1700180173'),
(1700180175, 'Badgujar Pratiksha', '1700180175'),
(1700180176, 'Bagul Vaishnavi', '1700180176'),
(1700180177, 'Bhoi Vijaya', '1700180177'),
(1700180178, 'Kolte Bharati', '1700180178'),
(1700180179, 'Ingale Durgesh', '1700180179'),
(1700180182, 'Rathod Priyanka', '1700180182'),
(1700180183, 'Bhirud Nikita', '1700180183'),
(1700180186, 'Behere Yadnyali', '1700180186'),
(1700180187, 'Badgujar Janhavi', '1700180187'),
(1700180189, 'Chaudhari Hetal', '1700180189'),
(1700180191, 'Patil Disha', '1700180191'),
(1700180192, 'Lambole Vaibhavi', '1700180192'),
(1700180193, 'Chaudhari Chaitali', '1700180193'),
(1700180194, 'Patil Komal', '1700180194'),
(1700180195, 'Chaudhari Shraddha', '1700180195'),
(1700180197, 'Dandage Durgesh', '1700180197'),
(1700180199, 'Jagtap Akshay', '1700180199'),
(1700180201, 'Chavan  Rahul', '1700180201'),
(1700180203, 'Yadav Arya', '1700180203'),
(1700180204, 'Harne Jagruti', '1700180204'),
(1700180205, 'Bhamare Shubham', '1700180205'),
(1700180208, 'Patil Pooja', '1700180208'),
(1700180209, 'Shastri Manasi', '1700180209'),
(1700180210, 'Patil Pallavi', '1700180210'),
(1700180212, 'Patil Bhavesh', '1700180212'),
(1700180214, 'Koli Harshal', '1700180214'),
(1700180219, 'Patil Vaishnavi', '1700180219'),
(1800180603, 'Jadhav Krushnali', '1800180603');

-- --------------------------------------------------------

--
-- Table structure for table `tempdata`
--

CREATE TABLE `tempdata` (
  `tid` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `c_ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempdata`
--

INSERT INTO `tempdata` (`tid`, `s_id`, `q_id`, `c_ans`) VALUES
(49, 1700180161, 39, 'Labels'),
(50, 1700180161, 50, 'Both A & B'),
(51, 1700180161, 58, ''),
(52, 1700180161, 37, ''),
(53, 1700180161, 38, 'Panel'),
(54, 1700180161, 34, 'Checkbox'),
(55, 1700180161, 59, 'None of the above'),
(56, 1700180161, 57, 'MAC Address'),
(57, 1700180161, 45, 'None of the above'),
(58, 1700180161, 46, 'Unified Restore Locator'),
(59, 1700180161, 43, 'String Handling'),
(60, 1700180161, 31, 'Container'),
(61, 1700180161, 36, 'Button,Checkbox,Choice'),
(62, 1700180161, 44, 'All mentioned above'),
(63, 1700180161, 48, 'None of the above'),
(64, 1700180161, 56, 'MAC Address'),
(65, 1700180161, 51, 'None of the above'),
(66, 1700180161, 47, 'httpServer'),
(67, 1700180161, 35, 'Container'),
(68, 1700180161, 33, 'public abstract void setColor(Color c)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `quetion`
--
ALTER TABLE `quetion`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tempdata`
--
ALTER TABLE `tempdata`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `t_s` (`s_id`),
  ADD KEY `t_q` (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quetion`
--
ALTER TABLE `quetion`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tempdata`
--
ALTER TABLE `tempdata`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tempdata`
--
ALTER TABLE `tempdata`
  ADD CONSTRAINT `t_q` FOREIGN KEY (`q_id`) REFERENCES `quetion` (`q_id`),
  ADD CONSTRAINT `t_s` FOREIGN KEY (`s_id`) REFERENCES `studentdata` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
