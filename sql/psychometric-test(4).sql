-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 04:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psychometric-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `code` varchar(4) NOT NULL,
  `strength` varchar(348) CHARACTER SET utf8 DEFAULT NULL,
  `carrers` varchar(132) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`code`, `strength`, `carrers`) VALUES
('ENFJ', 'Responsive and responsible. Feel real concern what others think or what, and try to handle things with due regard for other’s feelings. \r\nCan present a proposal or lead a group discussion with ease and tact.\r\nSociable, popular, sympathetic.\r\nResponsive to praise and criticism.\r\nLike to facilitate others and enable people to achieve their potentia', 'Community and Social Service,Media and Communication,Education,Business, Management, and Sales,Entertainment, Arts and Design,Legal.'),
('ENFP', 'Warmly enthusiastic, high spirited, ingenious, imaginative.\r\nAble to do any thing that interests them.\r\nQuick with a solution for any difficulty and ready to help anyone with problem.\r\nOften rely on their ability to improvise than preparing in advance.\r\nCan usually find compelling reasons for what ever they want.\r\n', 'Entertainment,Media and Communication,Business and Sales,Education, Training.'),
('ENTJ', 'Frank, decisive, leaders in activities.\r\nDevelop and implement comprehensive systems to solve organizational problems.\r\nGood in anything that requires reasoning and intelligent talk, such as public speaking. \r\nAre usually well informed and enjoy adding knowledge', 'Business and Financial,Management,Sales,Architecture and Engineering,Arts and Media,Healthcare,Entertainment and Sports.'),
('ENTP', 'Quick, ingenious, good at many things.\r\nStimulating company, alert and outspoken.\r\nMay argue for fun on either side of a question.\r\nResourceful in solving new and challenging problems, but may neglect routine assignments.\r\nApt to turn one new interest after another.\r\nSkillful in finding logical reasons for what they want.\r\n', 'Science and Medicine,Arts, Entertainment & Media,Law,Business and Financial.'),
('ESFJ', 'Warm-hearted, talkative, popular, conscientious, born cooperative, active committee members.\r\nNeed harmony and may be good at creating it. Always good at doing something nice for someone.\r\nWork best with encouragement and praise. \r\nMain interest in things that directly visibly affect people’s lives.\r\n', 'Counseling and Social Service,Business & Law,Language and Arts.'),
('ESFP', 'Outgoing, accepting, friendly, enjoy everything and make things more fun for others by their enjoyment.\r\nLike actions and making things happen.\r\nKnow what is going on and join in eagerly.\r\nFind remembering facts easier than mastering theories.\r\nAre best in situations that need sound common sense and practical ability with people.\r\n', 'Health Care,Social Service,Media,Law,Business and Financial.'),
('ESTJ', 'Practical, realistic, matter-of-fact with a natural head for business. \r\nNot interested in abstract theories, want learning to have direct and immediate application.\r\nLike to organize and run activities.\r\nOften make good administrators, are decisive, quickly move to implement decisions, take care of routine details.\r\n', 'Business and Financial,Management,Sales,Architecture and Engineering,Arts and Media,Healthcare,Entertainment and Sports.'),
('ESTP', 'Good at on the spot problem solving.\r\nLike action, enjoy what ever comes along.\r\nTend to like mechanical things and sports with friends on the side.\r\nAdaptable, tolerant, pragmatic, focused in getting results.\r\nDislike long explanations. \r\nAre best with real things that can be worked, handled.\r\n', 'Design and Communications,Science and Health Care,Community and Social Service,Education .'),
('INFJ', 'Succeeded by perseverance, originality and desire to do what ever is needed or wanted. Put their best efforts into their work.\r\nQuietly forceful, conscientious, concerned with others.\r\nRespected for their firm principles.\r\nLikely to be honored and followed for their clear visions as to how best to serve the common good.', 'Health Care,Counseling and Social Service,Business & Law,Language and Arts'),
('INFP', 'Quiet observers, idealistic, loyal.\r\nImportant that outer life be congruent with inner values. \r\nCurious, quick to possibilities, adaptable and flexible unless a value is threatened.\r\nWant to understand people and ways of fulfilling human potential.\r\nLittle concerned with possessions or surroundings\r\n', 'Arts, Design and Communications,Science and Health Care,Community and Social Service,Education .'),
('INTJ', 'Have original minds and great drive for their own ideas and purposes. \r\nHave long range vision.\r\nIN the fields that appeal to them, they have fine power to organize a job and carry it through.\r\nDoubting, critical, independent, and determined.\r\nHave high standards of competence and performance.\r\n', 'Business, Science and Health Care,Architecture and Engineering,Computers and Information Technology,Arts, Design, and Communications'),
('INTP', 'Quiet and reserved.\r\nEspecially enjoy theoretical or scientific pursuits.\r\nLike solving problems with logic and analysis. Interested mainly in ideas, with little liking for parties or small talk.\r\nTend to have sharply defined interests and likes careers where some strong interests can be used. \r\n', 'Engineering,Sciences,Business and Law,Arts and Language'),
('ISFJ', ' Quiet, friendly, responsible, and conscientious.\r\nWork devotedly to meet their obligations.\r\nLend stability to any project or group.\r\nThorough, painstaking, and accurate.\r\nCan be patient with necessary details.\r\nLoyal, considerate, perceptive, and concerned with how others feel.\r\n', 'Engineering,Sciences,Business and Law,Arts and Language'),
('ISFP', 'Retiring, quietly friendly, sensitive, kind, modest about their abilities.\r\nShun disagreements, do not force their opinions or values on others. \r\nUsually do not care to lead but are often loyal followers.\r\nOften relaxed about getting things done because they enjoy present moment and do not want to spoil it by undue haste or exertion. \r\n', 'Design and Communications,Science and Health Care,Community and Social Service,Education .'),
('ISTJ', 'Practical, orderly, logical, realistic and dependable.\r\nSerious, quiet, earn success by concentration and thoroughness.\r\nSee to it that every thing is well organized.\r\n', 'Business & Financial management,Architecture & Engineering,Community and Social Service,Construction & Extraction '),
('ISTP', 'Cool, quiet, reserved, observing and analyzing life with detached curiosity.\r\nUsually interested in cause and effect, how and why mechanical things work and in organizing facts using logical principles.\r\nExcel at getting to the core of a practical problem and finding the solution.\r\n', 'Community and Social Service,Media and Communication,Education,Business, Management, and Sales,Entertainment, Arts and Design,Legal.');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(100) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`answer`)),
  `code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `sname`, `grade`, `stream`, `email`, `country`, `phno`, `answer`, `code`) VALUES
(35, 'Amit Naik', '1sem', 'MCA', 'test@gmail.com', 'AU', '8468687678', '[{\"op1\":\"E - I am Outgoing\",\"op2\":\"E - I am Relaxed\",\"op3\":\"E - I am Enthusiastic\",\"op4\":\"E - I Speak-out in groups\",\"op5\":\"E - My Energy grows at parties\",\"op6\":\"E - I have a large group of friends\",\"op7\":\"E - I think out loud\",\"op8\":\"I - I seek for quiet time\",\"op9\":\"I - I like to listen\",\"op10\":\"I - I am unapproachable\",\"op11\":\"I - I like stability in my inner life\",\"op12\":\"I - I take a detached approach\",\"op13\":\"I - i am inner directed\",\"op14\":\"I - I exercise restraint\",\"op15\":\"I - I respond carefully\",\"op16\":\"I - I am Inspirational\",\"op17\":\"I - I like Variety\",\"op18\":\"S - I think about facts\",\"op19\":\"S - I like Precision\",\"op20\":\"S - I am concerned with the present\",\"op21\":\"I - I rely on my sixth sense\",\"op22\":\"I - My head is in the clouds\",\"op23\":\"I - My mind is Symbolic\",\"op24\":\"I - I make allegorical statements\",\"op25\":\"I - I pay attention to overtones\",\"op26\":\"I - I acquire new skills\",\"op27\":\"I - My focus is on inspiration\",\"op28\":\"I - I am mercurial\",\"op29\":\"I - I discover problems\",\"op30\":\"I - I like the big picture\",\"op31\":\"T - I am logical and analytical\",\"op32\":\"F - I am Pleasant\",\"op33\":\"F - I bend the rules\",\"op34\":\"F - I have strong personal involvement in problems\",\"op35\":\"F - I am tactful\",\"op36\":\"F - I show mercy\",\"op37\":\"F - I am soft-minded\",\"op38\":\"F - I am sympathetic\",\"op39\":\"F - I focus on ideals\",\"op40\":\"F - I am gentle\",\"op41\":\"F - I am tuned into atmosphere\",\"op42\":\"F - I concentrate on the relationship\",\"op43\":\"F - I avoid unpleasantness\",\"op44\":\"F - I accept illogic\",\"op45\":\"F - I am tuned into people\",\"op46\":\"P - I am spontaneous\",\"op47\":\"P - I prefer to be unstructured\",\"op48\":\"P - I am cautious\",\"op49\":\"P - I am open-minded\",\"op50\":\"P - I procrastinate\",\"op51\":\"P - I am flexible\",\"op52\":\"P - I am open-minded\",\"op53\":\"P - I am relaxed\",\"op54\":\"P - I am impulsive\",\"op55\":\"P - I accept being wrong\",\"op56\":\"P - I am geared to existential\",\"op57\":\"P - I consent\",\"op58\":\"P - I am open to new experiences\",\"op59\":\"P - I have easy acquaintanceships\",\"op60\":\"P - I like unplanned activities\"}]', 'IIFP'),
(40, 'Raamu', 'BE', 'CSE', 'test@gmail.com', 'AF', '6846984985', '[{\"op1\":\"I - I am Reserved\",\"op2\":\"I - I am Intense\",\"op3\":\"I - I am Aloof\",\"op4\":\"I - I Absorb information in groups\",\"op5\":\"E - My Energy grows at parties\",\"op6\":\"E - I have a large group of friends\",\"op7\":\"E - I think out loud\",\"op8\":\"E - I look for activity\",\"op9\":\"E - I like to talk\",\"op10\":\"I - I am unapproachable\",\"op11\":\"I - I like stability in my inner life\",\"op12\":\"I - I take a detached approach\",\"op13\":\"E - I am influenced by external opinions\",\"op14\":\"E - I show emotions\",\"op15\":\"I - I respond carefully\",\"op16\":\"I - I am Inspirational\",\"op17\":\"I - I like Variety\",\"op18\":\"I - I think about possibilities\",\"op19\":\"I - I like Brainstorming\",\"op20\":\"I - I am concerned with the future\",\"op21\":\"I - I rely on my sixth sense\",\"op22\":\"I - My head is in the clouds\",\"op23\":\"I - My mind is Symbolic\",\"op24\":\"I - I make allegorical statements\",\"op25\":\"I - I pay attention to overtones\",\"op26\":\"S - I use learned skills\",\"op27\":\"S - My focus is on reality\",\"op28\":\"I - I am mercurial\",\"op29\":\"I - I discover problems\",\"op30\":\"S - I like details\",\"op31\":\"F - I have a personal value orientation\",\"op32\":\"F - I am Pleasant\",\"op33\":\"F - I bend the rules\",\"op34\":\"F - I have strong personal involvement in problems\",\"op35\":\"T - I am direct\",\"op36\":\"T - I show justice\",\"op37\":\"T - I am hard-headed\",\"op38\":\"T - I am far-minded\",\"op39\":\"T - I focus on ideas\",\"op40\":\"T - I am firm\",\"op41\":\"F - I am tuned into atmosphere\",\"op42\":\"F - I concentrate on the relationship\",\"op43\":\"F - I avoid unpleasantness\",\"op44\":\"F - I accept illogic\",\"op45\":\"F - I am tuned into people\",\"op46\":\"P - I am spontaneous\",\"op47\":\"P - I prefer to be unstructured\",\"op48\":\"J - I am decisive\",\"op49\":\"P - I am open-minded\",\"op50\":\"J - I persevere\",\"op51\":\"P - I am flexible\",\"op52\":\"P - I am open-minded\",\"op53\":\"J - I am punctual\",\"op54\":\"P - I am impulsive\",\"op55\":\"P - I accept being wrong\",\"op56\":\"J - I am geared to morality\",\"op57\":\"P - I consent\",\"op58\":\"P - I am open to new experiences\",\"op59\":\"P - I have easy acquaintanceships\",\"op60\":\"P - I like unplanned activities\"}]', 'IIFP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
