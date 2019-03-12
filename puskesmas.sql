-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 07:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `icd`
--

CREATE TABLE `icd` (
  `id_icd` int(11) NOT NULL,
  `kode_icd` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icd`
--

INSERT INTO `icd` (`id_icd`, `kode_icd`, `deskripsi`) VALUES
(1, 'R10.4', 'Abdominal pain'),
(2, 'H 33', 'Ablasi dan kerusakan retina'),
(3, 'H33.2', 'Ablasio Retina / Cornea'),
(4, 'O20.0', 'Abortus iminens'),
(5, 'O08.0', 'Abortus infeksius'),
(6, 'O06.9', 'Abortus inkomplit'),
(7, 'O02.1', 'Abortus insiplens'),
(8, 'O 05', 'Abortus lainnya'),
(9, 'O 04', 'Abortus medik'),
(10, 'O 03', 'Abortus spontan'),
(11, 'L02.9', 'Abses(LUKA)'),
(12, 'K65.0', 'Abses abdominal'),
(13, 'L02.4', 'Abses Akilla'),
(14, 'K 35.1', 'Abses apendicular/apendikes'),
(15, 'K35.1', 'Abses app'),
(16, 'N75.1', 'Abses bartolin'),
(17, 'J34.0', 'Abses beplum'),
(18, 'N73.5', 'Abses CD'),
(19, 'Q06.0', 'Abses cerebri'),
(20, 'L02.1', 'Abses colli'),
(21, 'H16.3', 'Abses cornea'),
(22, 'Q76.4', 'Abses coxal'),
(23, 'J86.9', 'Abses dada'),
(24, 'K05.2', 'Abses gingival'),
(25, 'N15.1', 'Abses ginjal'),
(26, 'A 06.4', 'Abses hati amuba'),
(27, 'K75.0', 'Abses hati/liver/hepar'),
(28, 'L02.2', 'Abses ingunialis'),
(29, 'L02.8', 'Abses kepala/ragio'),
(30, 'L02.4', 'Abses lutut kiri/axilla/femur/femoral'),
(31, 'N61', 'Abses mama'),
(32, 'K10.0', 'Abses mandibula'),
(33, 'G06.6', 'Abses otak'),
(34, 'J86.9', 'Abses pada dada'),
(35, 'N76.0', 'Abses pagina '),
(36, 'K12.2', 'ABSES PALATUM'),
(37, 'H00.0', 'Abses palpebra'),
(38, 'K85', 'Abses pancereas'),
(39, 'L02.3', 'Abses pantat/buttock/glutea'),
(40, 'J39.0', 'Abses paraparingeal'),
(41, 'K61.0', 'Abses parienal'),
(42, 'J 85.1, .2', 'Abses paru'),
(43, 'J85.1', 'Abses paru/lung'),
(44, 'J36', 'Abses peritonsilair'),
(45, 'K05.2', 'Abses perodental'),
(46, 'K65.0', 'Abses perut'),
(47, 'L02.2', 'Abses pinggang kiri'),
(48, 'L02.0', 'Abses pipi'),
(49, 'T81.4', 'Abses post op/luka oprasi'),
(50, 'N15.1', 'Abses renal'),
(51, 'K65.0', 'Abses Retro pritonial'),
(52, 'K12.2', 'Abses sub mandibula'),
(53, 'J86.9', 'Abses torax'),
(54, 'N70.9', 'Abses turbo ovarial (ATO)'),
(55, 'L02.2', 'Abses umbilicia/dinding (Abdomen punggung)'),
(56, 'K22.0', 'Achalasia cardia / esopagus'),
(57, 'Q39.5', 'Achelasia congenital'),
(58, 'Q40.0', 'Achelasia pylorus'),
(59, 'R10.0', 'Acut abdomen'),
(60, 'J20.9', 'Acut laringo tracea broncitis'),
(61, 'C92.0', 'Acut myelocitic leukemia (AML)'),
(62, 'J80', 'Acut respiratory distress syndrom'),
(63, 'K72.0', 'Acute hepatic failure'),
(64, 'D16.5', 'Adamantinoma'),
(65, 'C11.1', 'Adeno ca'),
(66, 'C16.9', 'Adeno ca. gaster '),
(67, 'C18.9', 'Adeno Ca.Colon'),
(68, 'C34.9', 'Adeno Ca.paru'),
(69, 'J35.2', 'Adeno tonsilitis cronis'),
(70, 'N80.0', 'Adenomycosio'),
(71, 'N70.9', 'Adnexitis'),
(72, 'O64.1', 'After Coming head'),
(73, 'D 70', 'Agranulositosus'),
(74, 'T 15, T 17 - T19', 'Akibat dari kemasukan benda asing melalui  lubang tubuh'),
(75, 'T78.4', 'Alergi'),
(76, 'J 30.3', 'Alergi rhinitis akibat kerja'),
(77, 'C95.7', 'Aleukimia leukimia'),
(78, 'C91.0', 'ALL'),
(79, 'A06.9', 'Amebiasis'),
(80, 'A 06.0-.3 .5-.9', 'Amebiasis lainnya'),
(81, 'N 91.0, .1, .2', 'Amenore'),
(82, 'N91.2', 'Amenorrhea'),
(83, 'I21.9', 'AMI ( infark miokard akut)'),
(84, 'S98.1', 'Amputasi jari kaki satu'),
(85, 'D64.8', 'Anemia (gravio)'),
(86, 'D 61', 'Anemia aplastik lainnya'),
(87, 'D 50', 'Anemia defisiensi zat besi'),
(88, 'D58.9', 'Anemia hemolitik'),
(89, 'D 59', 'Anemia Hemolitik'),
(90, 'D 51 – D 58,  D 60, D 62 - D 64', 'Anemia lainnya'),
(91, 'D50.0', 'Anemia pasca pendarahan'),
(92, 'Q00.0', 'Anencepalus bayi'),
(93, 'Q35.0', 'anencepalus ibu'),
(94, 'I71.4', 'Aneorisme Aorta Abdominal'),
(95, 'I71.9', 'Aneuryama aorta'),
(96, 'I20.9', 'Angina pictoris '),
(97, 'I20.0', 'angina pictoris unsiable/fasca infark'),
(98, 'D10.6', 'Angio fibroma nasofaring'),
(99, 'T78.3', 'Angioauritic Alergi'),
(100, 'Q89.9', 'Anomali intra cranial'),
(101, 'O99.0', 'Anomia post partum '),
(102, 'Q11.1', 'Anoptalmia'),
(103, 'R63.0', 'Anorexia'),
(104, 'A 22', 'Anthraks'),
(105, 'O62.2', 'Antonea Uteri'),
(106, 'F41.9', 'Anxietas'),
(107, 'I35.1', 'Aorta insufisianis'),
(108, 'Q25.3', 'Aorta stenosis '),
(109, 'R47.0', 'Apasia'),
(110, 'O48.9', 'APB'),
(111, 'H27.0', 'Apekia'),
(112, 'K37', 'Apendicitis'),
(113, 'K35.9', 'Apendicitis acut'),
(114, 'K36', 'Apendicitis kronis'),
(115, 'K35.0', 'Apendicitis perforasi'),
(116, 'K38.1', 'Apendicular'),
(117, 'K38.1', 'Apendix infilltrat'),
(118, 'R06.8', 'Apnea'),
(119, 'P28.4', 'Apnea bayi'),
(120, 'R06.8', 'Apneic spell'),
(121, 'A06.9', 'AR'),
(122, 'I49.0', 'Aritmia'),
(123, 'M25.5', 'Artialgia'),
(124, 'M13.9', 'Artretis '),
(125, 'M 08 - M 09', 'Artritis belia'),
(126, 'M 00 - M 01', 'Artritis piogenik dan artritis pada penyakit infeksi dan parasit YDK di tempat lain'),
(127, 'M 05 - M 06', 'Artritis reumatoid'),
(128, 'M 12 - M 14', 'Artropati dan artritis'),
(129, 'M 02 - M 03', 'Artropati reaktif'),
(130, 'M 15 - M 19', 'Artrosis'),
(131, 'B77.9', 'Ascariasis'),
(132, 'R18', 'Ascites'),
(133, 'Q21.1', 'ASD ( Atreal septa depta )'),
(134, 'Z31.2', 'Aseptor implant'),
(135, 'E87.2', 'Asidosis metabdik'),
(136, 'J 45', 'Asma akibat kerja'),
(137, 'J45.9', 'Asma bronciale (AB)'),
(138, 'R09.0', 'Asphixia'),
(139, 'P21.0', 'Asphixia berat'),
(140, 'P21.1', 'asphixia ringan'),
(141, 'T17.1', 'Aspirasi hidung '),
(142, 'P24.0', 'Aspirasi mecodum'),
(143, 'T17.9', 'Aspirasi minyak T /Bd.Asing/Food'),
(144, 'J69', 'Aspirasi pnemunea dewasa'),
(145, 'P24.1', 'Aspirasi pnemunia bayi'),
(146, 'R53', 'Astenea '),
(147, 'J98.1', 'Atelactasis'),
(148, 'I 70', 'Aterosklerosis'),
(149, 'I70.9', 'Atoroma'),
(150, 'Q42.3', 'Atresia ani '),
(151, 'Q 41.0', 'Atresia duodeni'),
(152, 'Q41.0', 'Atresia Ileum'),
(153, 'Q42.1', 'Atresia rectum '),
(154, 'I48', 'Atrial fibrilasi (AF)'),
(155, 'M08.0', 'Atritis Rematik'),
(156, 'I44.3', 'AV block'),
(157, 'T14.7', 'Avulsion'),
(158, 'R79.8', 'Azotermia'),
(159, 'N48.1', 'Balanitis'),
(160, 'N48.1', 'balanitis '),
(161, 'C44.1', 'Basalioma Canthus lateralis'),
(162, 'C44.3', 'Basalioma hidung/pipi/mata'),
(163, 'C44.2', 'Basalioma telinga '),
(164, 'N20.0', 'Batu btaghorn'),
(165, 'K80.8', 'Batu empedu'),
(166, 'N20.0', 'Batu ginjal'),
(167, 'N21.1', 'Batu uretra /BBB'),
(168, 'A37.9', 'batuk rejan ( pertusis)'),
(169, 'Z33', 'bayi belum lahir ( infartu)'),
(170, 'P08.0', 'Bayi besar'),
(171, 'P92.2', 'bayi kurang minum'),
(172, 'Z 38', ''),
(173, 'P95', 'bayi mati'),
(174, 'O36.4', 'bayi meninggal ibu hidup (KJDR)'),
(175, 'Z38.0', 'bayi normal'),
(176, 'P03.4', 'Bayi sectio'),
(177, 'P03.3', 'Bayi vakum'),
(178, 'F05.0', 'BBLR'),
(179, 'T 16', 'Benda asing pada telinga'),
(180, 'Y04', 'berkelahi'),
(181, 'Q 35 - Q 37', 'Bibir celah dan langit-langit celah'),
(182, 'Q36.9', 'Bibir sumbing'),
(183, 'O02.0', 'Bilgted ovum'),
(184, 'K80.5', 'Biliary kolik'),
(185, 'J 66.0', 'Bisinosis'),
(186, 'N93.0', 'Bleeding post coitus'),
(187, 'B50.8', 'Block Water Fever'),
(188, 'K92.1', 'Bloody diare'),
(189, 'R00.1', 'Bmdicardia'),
(190, 'N75.8', 'bortolintitis'),
(191, 'N10', 'BPH ( prostat)'),
(192, 'P14.3', 'Bracial Palsy'),
(193, 'J47', 'Bronciektasis'),
(194, 'J21.9', 'Bronciolitis /Acut'),
(195, 'J40', 'Broncitis'),
(196, 'J20.9', 'Broncitis acut'),
(197, 'J42', 'Broncitis kronik'),
(198, 'J18.0', 'Bronco pnemunia'),
(199, 'J 47', 'Bronkiektasis'),
(200, 'J 20 - J 21', 'Bronkitis akut dan bronkiolitis akut'),
(201, 'J 40 - J 44', 'Bronkitis, emfisema dan penyakit paru obstruktif kronik lainnya'),
(202, 'A 23', 'Bruselosis'),
(203, 'Z47.0', 'Buka pen'),
(204, 'Z30.5', 'Buka spiral'),
(205, 'X76.0', 'bunuh diri dengan membakar diri '),
(206, 'X70', 'bunuh diri dengan menusuk badan '),
(207, 'E78.3', 'Burger O'),
(208, 'T21', 'Burt abdomen'),
(209, 'H 54', 'Buta dan rabun'),
(210, 'C54.1', 'CA ewametrium'),
(211, 'C67.9', 'Ca. Blader'),
(212, 'C68.0', 'Ca. Buli-buli'),
(213, 'C18.0', 'Ca. Caecum'),
(214, 'C53.9', 'Ca. Cerviks'),
(215, 'C76.0', 'ca. Coll'),
(216, 'C18.9', 'Ca. Colon'),
(217, 'C54.9', 'ca. Corpus'),
(218, 'C44', 'Ca. Epidermoid'),
(219, 'C15.9', 'Ca. Esopagus'),
(220, 'C40.2', 'Ca. Femur'),
(221, 'C16.9', 'Ca. Gaster/lambung'),
(222, 'C77.9', 'ca. Gland (kelenjar)'),
(223, 'C32.9', 'Ca. Laring'),
(224, 'C02.9', 'Ca. Lidah'),
(225, 'C50.9', 'Ca. Mama'),
(226, 'C41.1', 'Ca. Mandibula'),
(227, 'C11.9', 'Ca. Nesofaring'),
(228, 'C56', 'Ca. Ovari'),
(229, 'C05.9', 'Ca. Palata'),
(230, 'C25.9', 'Ca. Pancereas'),
(231, 'C76.3', 'Ca. Pantat'),
(232, 'L 07', 'Ca. Parotis ( pinggang)'),
(233, 'C34.1', 'Ca. Paru'),
(234, 'C60.9', 'ca. Penis'),
(235, 'C55', 'Ca. Rahim/uterus'),
(236, 'C20', 'Ca. Recti'),
(237, 'C18.7', 'Ca. Sigmoid'),
(238, 'C76.0', 'ca. Squo mous cell'),
(239, 'C51.9', 'Ca. Tibia'),
(240, 'C52', 'Ca. Vagina'),
(241, 'C22.1', 'Ca.chalangio'),
(242, 'C58', 'ca.corio'),
(243, 'C61', 'Ca.prostat'),
(244, 'C73', 'Ca.teroid'),
(245, 'Q03.0', 'cacat bawaan '),
(246, 'I25.1', 'CAD/CHD (PJK)'),
(247, 'B 05', 'Campak'),
(248, 'B05.9', 'campak/measles'),
(249, 'B37.9', 'candidiasis'),
(250, 'P12.8', 'Capul succedonum'),
(251, 'K76.1', 'cardioac cirosis'),
(252, 'K76.1', 'cardioac cirosis'),
(253, 'R57.0', 'cardiogenic syok'),
(254, 'I42.9', 'cardiomeapaty'),
(255, 'I51.7', 'cardiomegali'),
(256, 'C44.2', 'carsinoma telinga'),
(257, 'C55', 'carsinoma utery'),
(258, 'Q12.0', 'catarac'),
(259, 'H26.2', 'Catarac compilated'),
(260, 'H26.0', 'catarac muda ( juvenil)'),
(261, 'H26.4', 'catarac scondary'),
(262, 'H26.1', 'Catarac traumatik'),
(263, 'H25.2', 'Catarac tua(mature)'),
(264, 'S 26 - S 27', 'Cedera alat dalam lainnya'),
(265, 'S 06', 'Cedera intrakranial'),
(266, 'P 10 - P 15', 'Cedera lahir'),
(267, 'S 05', 'Cedera mata dan orbita'),
(268, 'S 36 - S 37 S 97-98, T04-05', 'Cedera remuk dan trauma amputasi YDT dan daerah badan multipel'),
(269, 'S00-S01, S04, S09-S11, ', 'Cedera YDT lainnya, YTT dan daerah badan multipel'),
(270, 'L03.9', 'celuitis'),
(271, 'H05.0', 'celulitis orbita'),
(272, 'R51', 'cepalgia'),
(273, 'P12.0', 'cepalhematoma bayi'),
(274, 'S08.8', 'cepalhematoma bayi traumatik'),
(275, 'P12.0', 'cepalhomatoma bayi'),
(276, 'G93.9', 'cerebral '),
(277, 'G80.9', 'cerebral palsy (CP)'),
(278, 'H61.2', 'cerumen'),
(279, 'M53.1', 'cervisal syndrome'),
(280, 'K74.6', 'CH (cirosis hati)'),
(281, 'H00.1', 'chalazion'),
(282, 'R07.4', 'chest pain'),
(283, 'I50.0', 'CHF (gagal jantung kongestif)'),
(284, 'A 92.0', 'Chikungunya'),
(285, 'K80.5', 'choledocholitiasis'),
(286, 'K80.2', 'cholelitiasis'),
(287, 'K83.1', 'cholestasis'),
(288, 'K83.1', 'cholestasis'),
(289, 'K81.9', 'cholicystitis'),
(290, 'K81.0', 'cholicystitis acut'),
(291, 'M98.8', 'chondroitis'),
(292, 'N48.9', 'chordea'),
(293, 'G25.5', 'Chorea'),
(294, 'C58', 'chorio cersininoma'),
(295, 'E24.9', 'chusing syndrome'),
(296, 'L90.5', 'cicatrix'),
(297, 'D06.9', 'CIN ( carsinoma insitu cerviks)'),
(298, 'K76.1', 'ciroses cardiac'),
(299, 'T17.1', 'cirosis alineum cav.nasi'),
(300, 'N03.9', 'CKD (cronic kidny disease)'),
(301, 'K76.0', 'CLD'),
(302, 'K76.9', 'CLD'),
(303, 'C91.1/M9823/3', 'CLL'),
(304, 'C92.1/M98/G31.3', 'CMI'),
(305, 'A00.9', 'colera'),
(306, 'R10.4', 'colic abdomen'),
(307, 'R10.4', 'colic abdomen'),
(308, 'N23', 'colic ureter'),
(309, 'N23', 'colit renal ginjal'),
(310, 'A09', 'Colitis (acut)'),
(311, 'A06.0', 'colitis amooba'),
(312, 'K51.9', 'colitis ulceritiva'),
(313, 'K51.9', 'colitis ulkiraliv'),
(314, 'A16.2', 'Coll abses'),
(315, 'Q80.2', 'colodian baby'),
(316, 'K92.1', 'colon post radiasi'),
(317, 'K91.4', 'colostomi prolaps'),
(318, 'K91.4', 'colostomy'),
(319, 'R40.2', 'coma'),
(320, 'P91.5', 'coma bayi'),
(321, 'E14.0', 'coma diabetic'),
(322, 'K72.9', 'coma hepaticum'),
(323, 'E14.0', 'coma hiperglikemik'),
(324, 'E15', 'coma hipoglikemik'),
(325, 'E14.0', 'coma honk ( hiper osmolarilas non ketosis)'),
(326, 'N19', 'coma uremikum'),
(327, 'N19', 'coma urine'),
(328, 'T31.1', 'combustio grade 10-19%'),
(329, 'T31.3', 'combustio grade 30-39%'),
(330, 'T31.6', 'combustio grade 60-69%'),
(331, 'T31.7', 'combustio grade 70-79%'),
(332, 'T22.1', 'combustio lengan '),
(333, 'L70.0', 'comedo'),
(334, 'R41.0', 'comfusi'),
(335, 'D13.5', 'comon bill duct (CBD)'),
(336, 'J00', 'comon colid'),
(337, 'T14.2', 'compresion'),
(338, 'G93.5', 'compressisi medula spinalis'),
(339, 'A63.0', 'condiloma acuminatum'),
(340, '', 'Congenital centralis /PSC'),
(341, 'H13.1', 'conjungtivitas neunatal gonocokal'),
(342, 'H10.9', 'conjungtivitis'),
(343, 'M62.9', 'conraktur otot /leher'),
(344, 'K59.0', 'contifation'),
(345, 'M79.9', 'contractur akilla'),
(346, 'M24.4', 'contraktur alku kanan/elbow'),
(347, 'M20.0', 'contraktur jari kaki kiri'),
(348, 'M62.4', 'contraktur musole'),
(349, 'S06.2', 'contusio cerebri /CKB'),
(350, 'S06.0', 'contusio cerebril/CKS/CKR'),
(351, 'S05.8', 'contusio mata'),
(352, 'S34.3', 'contusio modula spinalis'),
(353, 'T14.6', 'contusio muscolorum'),
(354, 'T14.6', 'contusio otot leher'),
(355, 'S30.2', 'contusio penis'),
(356, 'S37.0', 'contusio renis'),
(357, 'S20.2', 'contusio torax'),
(358, 'R56.8', 'convulsi ( kejang)'),
(359, 'J44.9', 'COPD/PPOM'),
(360, 'I27.9', 'cor pulmunale cronic ( CPC)'),
(361, 'T17.2', 'corpus alienum hipoparing'),
(362, 'T17.5', 'Corpus Alineum Broncus '),
(363, 'S21.0', 'corpus alineum peluru'),
(364, 'S29.9', 'corpus alineumthoacal (punggung)'),
(365, 'M13.1', 'coxitis'),
(366, 'J81', 'CPA ( odema perut akut)'),
(367, 'Q33.9', 'CPD'),
(368, 'H34.2', 'CRAO'),
(369, 'N18.9', 'CRF/GGK'),
(370, 'K76.9', 'cronic liver disease'),
(371, 'J98.4', 'cronic lung disiase'),
(372, 'J05.0', 'Croup'),
(373, 'M53.1', 'CRS'),
(374, 'S97.8', 'crush foot'),
(375, 'S95.9', 'crush injuri cruris'),
(376, 'Q66.0', 'CTEV'),
(377, 'N94.1', 'Cuitus'),
(378, 'L02.4', 'curetage skin'),
(379, 'I 64', 'CVA'),
(380, 'I61.9', 'CVA bleeding/hemorage/HS'),
(381, 'I63.9', 'CVA infak'),
(382, 'I67.9', 'CVD'),
(383, 'I66.9', 'CVD trombosit'),
(384, 'R23.0', 'cyanosis'),
(385, 'N30.9', 'cyatitis'),
(386, 'Q24.9', 'cynotic CHD'),
(387, 'N75.0', 'cysta bartolini'),
(388, 'L72.1', 'cysta cebaceaus'),
(389, 'G93.0', 'cysta cerebrl'),
(390, 'N80.1', 'cysta coklat'),
(391, 'H11.4', 'cysta conjunctiva'),
(392, 'H04.8', 'cysta ductus laclimaris'),
(393, 'N85.8', 'cysta endometrium'),
(394, 'I72.0', 'cysta epidermoid'),
(395, 'H02.8', 'Cysta eyelld (kelopak mata)'),
(396, 'K09.0', 'cysta folikuler'),
(397, 'I51.9', 'cysta hati'),
(398, 'N60.0', 'cysta mama'),
(399, 'K09.2', 'cysta maxijja'),
(400, 'J34.1', 'cysta nasal(binus)'),
(401, 'N83.2', 'Cysta overy'),
(402, 'K86.2', 'cysta pancereas'),
(403, 'Q18.1', 'cysta preauriculer'),
(404, 'K04.8', 'cysta radioculer'),
(405, 'Q18.1', 'cysta retro kurikuler'),
(406, 'D46.6', 'cysta sarcoma'),
(407, 'K11.6', 'cysta sub mandibula'),
(408, 'Q89.2', 'cysta thyrogiasus'),
(409, 'E04.1', 'cysta tiroid'),
(410, 'N81.1', 'cystocele (female)'),
(411, 'N32.8', 'cystocele (male)'),
(412, 'N81.4', 'cystocele (prolaps uteri)'),
(413, 'O02.1', 'dead conseptus'),
(414, 'I51.9', 'Decom cordis'),
(415, 'L89', 'decubitus(ulcer)'),
(416, 'E 50', 'Defisiensi vitamin A'),
(417, 'E 51 - E 56', 'Defisiensi vitamin lainnya'),
(418, 'Q 66', 'Deformasi kongenital kaki'),
(419, 'Q 65', 'Deformasi kongenital sendi panggul'),
(420, 'K06.8', 'deformiti gum'),
(421, 'E06', 'dehidrasi'),
(422, 'R62.8', 'deloyed depelopment'),
(423, 'F80.9', 'deloyed movement'),
(424, 'L02.9', 'demam abses'),
(425, 'A 91', 'Demam berdarah dengue'),
(426, 'A 68', 'Demam bolak balik'),
(427, 'A 90', 'Demam dengue'),
(428, 'A 95', 'Demam kuning'),
(429, 'I00', 'demam rematik'),
(430, 'I 00 - I 02', 'Demam reumatik akut'),
(431, 'A 01', 'Demam tifoid dan paratifoid'),
(432, 'A 75', 'Demam tifus'),
(433, 'A01.0', 'demam tipoid'),
(434, 'A 93 - A 94 A 96 - A 99', 'Demam virus dan demam berdarah virus tular serangga lainnya'),
(435, 'A 92.1 - A 92', 'Demam virus tular nyamuk'),
(436, 'R 50', 'Demam yang sebabnya tidak diketahui'),
(437, 'F 00 - F 03 ', 'Demensia'),
(438, 'F03', 'dementia senlititis'),
(439, 'A90', 'dengue'),
(440, 'A09', 'Dengue fever'),
(441, 'E 86', 'Deplesi volume (dehidrasi)'),
(442, 'F32.9', 'depresi'),
(443, 'M 20 - M 21', 'Derformitas tungkai didapat'),
(444, 'L30.8', 'Dermatitis'),
(445, 'L 23 - L 24', 'Dermatosis akibat kerja'),
(446, 'N94.6', 'Desmenorrhea'),
(447, 'K30', 'Despepsia'),
(448, 'J34.2', 'deviasi septuri'),
(449, 'G36.0', 'devic\'s desease'),
(450, 'Q24.0', 'dextrocordia'),
(451, 'A91', 'DHF/DSS'),
(452, 'E 10', 'Diabetes melitus bergantung insulin'),
(453, 'E 12', 'Diabetes melitus berhubungan malnutrisi'),
(454, 'O 24', 'Diabetes melitus dalam kehamilan'),
(455, 'E 11', 'Diabetes melitus tidak bergantung insulin'),
(456, 'E 13', 'Diabetes melitus YDT lainnya'),
(457, 'E 14', 'Diabetes melitus YTT '),
(458, 'A 09', 'Diare & gastroenteritis oleh penyebab infeksi tertentu (kolitis infeksi)'),
(459, 'P78.3', 'diare bayi baru lahir'),
(460, 'A09', 'diare yang ada hasil lab'),
(461, 'K52.9', 'diare yang tidak ada leb'),
(462, 'D69.9', 'diathesis hemorrhage'),
(463, 'W45.0', 'dibacok/ditebas/ditusuk maling'),
(464, 'X 85 - Y 09', 'Dicederai'),
(465, 'N86', 'dicubitus ( cerviks)'),
(466, 'T14.4', 'diffuse axonal injury'),
(467, 'A 36', 'Difteria'),
(468, 'W54.0', 'digigit anjing ( dogbite)'),
(469, 'Y04.0', 'dikeroyok'),
(470, 'I51.7', 'Dilated cardio myopanti (DCM)'),
(471, 'Y04', 'dipikul'),
(472, 'H53.2', 'diplopia'),
(473, 'A36.9', 'Dipteria'),
(474, 'A06.0', 'disentri amoeba'),
(475, 'A03.9', 'disentri basiler'),
(476, 'W64.9', 'diseruduk kerbau'),
(477, 'R13', 'Disfagia'),
(478, 'G93.9', 'disfungsi batang otak'),
(479, 'T14.3', 'Dislokasi'),
(480, 'S93.0', 'Dislokasi Ankle'),
(481, 'S43.0', 'Dislokasi bahu/humerus'),
(482, 'S53.1', 'dislokasi elbow/siku'),
(483, 'S73.0', 'Dislokasi HIP'),
(484, 'H27.1', 'Dislokasi lensa'),
(485, 'S83.1', 'dislokasi lutut'),
(486, 'S03.0', 'Dislokasi mandibula'),
(487, 'S33.2', 'Dislokasi panggul kiri'),
(488, 'S03.0', 'dislokasi TMJ'),
(489, 'S 03, 13, 23, 33, 43, 53 S 63, 73, 83, 93, T 03', 'Dislokasi, terkilir, teregang YDT dan daerah badan multipel'),
(490, 'K 30', 'Dispepsia '),
(491, 'R14', 'distension abdomen'),
(492, 'O66.9', 'Distocia'),
(493, 'P22.9', 'Distress pernapasan bal'),
(494, 'J98.4', 'distroyed lung'),
(495, 'V03.1', 'ditabrak mobil dari belakang sedang jalan'),
(496, 'W34.0', 'ditembak'),
(497, 'Q43.0', 'diverticula meckel\'s'),
(498, 'E14.9', 'DM'),
(499, 'E14.5', 'DM gangren'),
(500, 'E10', 'DM Juvenil'),
(501, 'E14.2', 'DM nepropaty'),
(502, 'G81.9', 'doble hemiparese'),
(503, 'M 40 - M 44, M 54.6, .8, .9', 'Dorsopati lainnya'),
(504, 'Q90.9', 'down syndrom'),
(505, 'B 72', 'Drakunkuliasis'),
(506, 'P03.6', 'drip normal bayi'),
(507, 'I62.1', 'Drip normal ibu'),
(508, 'T75.1', 'Drowning'),
(509, 'L27.0', 'drug eruption '),
(510, 'T43.3', 'drug induce halopridal'),
(511, 'F19.0', 'drug intoxication'),
(512, 'T88.7', 'drugindiced hepatitis'),
(513, 'N93.8', 'DUB'),
(514, 'K29.8', 'Duodenitis'),
(515, 'I82.9', 'DVT'),
(516, 'R49.0', 'dysphonia'),
(517, 'I49.9', 'dysrhytmia'),
(518, 'R60.1', 'edema anasorhe'),
(519, 'G93.6', 'edema cerebral '),
(520, 'H02.8', 'edema eyelid mata'),
(521, 'H47.1', 'edema papil'),
(522, 'J81', 'edema paru akut'),
(523, 'N90.8', 'edema vulva'),
(524, 'O 10 - O 13, O 16', 'Edema, proteinuria dan gangguan hipertensi dalam kehamilan, persalinan dan masa nifas'),
(525, 'S06.4', 'EDH ( epidural hematoma)'),
(526, 'H 83.3', 'Efek kebisingan telinga bagian dalam'),
(527, 'T 67', 'Efek panas dan pencahayaan'),
(528, 'T 66', 'Efek radiasi YTT'),
(529, 'Y 40 - Y 59', 'Efek samping pengguna obat, bahan obat dan bahan biologik'),
(530, 'T 33 - T 35, T 68 - T69  T 71-T 73, T 75 - T 78', 'Efek sebab luar lainnya dan YTT pembedahan dan perawatan YTK di tempat lain'),
(531, 'T 70', 'Efek tekanan udara dan tekanan air'),
(532, 'T 51, T 53 -T 55 , T 57 - T58, T61- T 65', 'Efek toksik bahan non medisinal lainnya'),
(533, 'J90', 'efusi pleura'),
(534, 'J 90 - J 91', 'Efusi pleura (empiema)'),
(535, 'B 67', 'Ekinokokosis'),
(536, 'O15.9', 'eklampsia'),
(537, 'O 15', 'Eklampsia'),
(538, 'Q24.8', 'Ektopic cordis'),
(539, 'T75.4', 'elektrik shook'),
(540, 'I 74', 'Emboli dan trombosis arteri'),
(541, 'I 26', 'Emboli paru'),
(542, 'R11', 'emesis'),
(543, 'J43.9', 'empisema paru'),
(544, 'J86.9', 'empyema'),
(545, 'G93.4', 'encepalopati'),
(546, 'J38', 'endocarditia'),
(547, 'N80.9', 'endometnosis'),
(548, 'N 80', 'Endometriosis'),
(549, 'N71.9', 'endometritis'),
(550, 'H44.0', 'endoptalmitis'),
(551, 'G04.9', 'ensefalitis'),
(552, 'A 83 - 86', 'Ensefalitis virus'),
(553, 'K72.9', 'ensepalopati hepatikum'),
(554, 'A09', 'enteritis'),
(555, 'K63.2', 'entrocular fistula'),
(556, 'Q64.1', 'entropia bulu-buli'),
(557, 'H02.1', 'entropien mata citaticial'),
(558, 'N45.9', 'epididmitis'),
(559, 'S06.4', 'epidoral hematoma'),
(560, 'R10', 'epigastro pain'),
(561, 'J05.1', 'epigglotitis'),
(562, 'G40.9', 'epilepsi'),
(563, 'G 40 - G 41', 'Epilepsi'),
(564, 'F 32 - F 39', 'Episoda depresif, gangguan depresif  berulang, gangguan suasana perasaan (mood afektif) menetap, lainnya atau YTT'),
(565, 'F 30,  F 31', 'Episode manik dan gangguan afektif bipolar'),
(566, 'R04.0', 'epitaxis'),
(567, 'K06.0', 'epulis'),
(568, 'A46', 'erisipelas'),
(569, 'L53.9', 'eritodemi'),
(570, 'L53.0', 'erythema toxica'),
(571, 'K20', 'esopagitis'),
(572, 'H50.0', 'esotrapia'),
(573, 'B05.2', 'exanthema subitum'),
(574, 'T14.0', 'excoriasis'),
(575, 'M89.9', 'exostosis'),
(576, 'Q75.6', 'exostusis multiple'),
(577, 'G25.9', 'exstra piramidal syndrom'),
(578, 'S02.2', 'faktur hidung/nasi'),
(579, 'J 02 ', 'Faringitis akut'),
(580, 'O 85', 'febris pueperalis'),
(581, 'P 20,1', 'fetal bayi'),
(582, 'O 33,9', 'fetal distress'),
(583, 'D 24', 'fibro adenoma mama (FAM)'),
(584, 'M 79,0', 'fibro myostis'),
(585, 'D 21,9 ', 'fibro sarcoma'),
(586, 'D 36,7', 'fibroma'),
(587, 'D 21,3', 'fibroma axilla'),
(588, 'D 16,2', 'fibroma femur'),
(589, 'D 36,7', 'fibroma jari/pipi'),
(590, 'D 21,0', 'fibroma kepala'),
(591, 'D 26,0', 'fibroma osteo'),
(592, 'M 79,0', 'fibromyalgia'),
(593, 'N 48,6', 'fibrosis corpora cavernosa'),
(594, 'B 74', 'Filariasis'),
(595, 'K 60,3', 'fistal perianal'),
(596, 'N 38,0', 'fistal perineum'),
(597, 'T 81,8', 'fistal post op'),
(598, 'K 63,2', 'fistel enterocutaneous'),
(599, 'Q 35,9', 'fistel palatum'),
(600, 'Q 18,1', 'fistel preauriculer'),
(601, 'K 63,2', 'fistula abdomen'),
(602, 'Q 42,2', 'fistula afresia ani'),
(603, 'J86.0', 'fistula dada '),
(604, 'Q 18,8', 'fistula medula'),
(605, 'Q 43,6', 'fistula rectum/kelainan'),
(606, 'N 36,0', 'fistula uretra'),
(607, 'L 98,4', 'fistula vesico cutanens'),
(608, 'H 61.8', 'Fistula/Kista preaurikel'),
(609, 'R 14', 'flatulence'),
(610, 'I 80 - I 82', 'Flebitis, tromboflebitis, emboli dan trombosis vena'),
(611, 'M 23,4', 'floating kuee'),
(612, 'N89.8', 'flour albus( keputihan)'),
(613, 'J 11,1', 'flu'),
(614, 'O 33,9', 'FPD'),
(615, 'S 32,4', 'fr acetabulus'),
(616, 'S 92,3', 'fr fedis'),
(617, 'S 32,5', 'fr remus inferlor/superlor, pubis'),
(618, 'S 02,4', 'fr zygoma'),
(619, 'S 32,2', 'Fr. Oxygeus'),
(620, 'S02.8', 'fraktur alveolis'),
(621, 'S 82,8', 'fraktur ankie'),
(622, 'S02.1', 'fraktur basis cranil/okipitalis'),
(623, 'S82.8', 'fraktur bimaleolar'),
(624, 'S92.0', 'fraktur calcaneus'),
(625, 'S12.9', 'fraktur cervical'),
(626, 'S42.0', 'fraktur clavicula'),
(627, 'S42.0.0', 'fraktur clavicula close'),
(628, 'S52.5', 'fraktur colles'),
(629, 'T14.2', 'fraktur comperesion'),
(630, 'S32.2', 'fraktur cosial/coxle'),
(631, 'S32.2.1', 'fraktur costal/coxle open'),
(632, 'S82.3', 'fraktur cruris distal'),
(633, 'S 52,0', 'fraktur elbow'),
(634, 'S72.9', 'fraktur femur '),
(635, 'S82.4', 'fraktur fibula'),
(636, 'S02.0', 'fraktur frontalis/pariental'),
(637, 'S42.3', 'fraktur humarius'),
(638, 'S42.3.1', 'fraktur humarius open'),
(639, 'S 12, S 22, S 32, T 08', 'Fraktur leher, toraks atau panggul '),
(640, 'S32.0', 'fraktur lumbar/l2'),
(641, 'S82.8', 'fraktur maleolus'),
(642, 'M84.0', 'fraktur maluncin'),
(643, 'S02.6', 'fraktur mandibula'),
(644, 'S 62,3', 'fraktur matacarpai'),
(645, 'S02.4', 'fraktur maxilla'),
(646, 'T 02', 'Fraktur meliputi daerah badan multipel'),
(647, 'S92.5', 'fraktur metatarual'),
(648, 'S52.0', 'fraktur montigia'),
(649, 'T02.9', 'fraktur multiple'),
(650, 'S52.0', 'fraktur okanon'),
(651, 'S32.5', 'fraktur os pubis'),
(652, 'S 72', 'Fraktur paha'),
(653, 'S82.0', 'fraktur patella /genu'),
(654, 'S32.8', 'fraktur pelvis'),
(655, 'S92.5', 'fraktur phalink'),
(656, 'S52.0', 'fraktur radius antebrichis '),
(657, 'S22.3', 'fraktur rib lga'),
(658, 'S42.1', 'fraktur scapula '),
(659, 'S52.5', 'fraktur sinithis'),
(660, 'S91.1', 'fraktur talus'),
(661, 'S02.1', 'fraktur temporal'),
(662, 'S 02', 'Fraktur tengkorak dan tulang muka'),
(663, 'S82.2', 'fraktur tibia'),
(664, 'S72.1', 'fraktur trocanta '),
(665, 'S 42, S 52, S 62, S 82  S 92, T 10,T 12', 'Fraktur tulang anggota gerak lainnya'),
(666, 'S52.2', 'fraktur ulna'),
(667, 'Y 08', 'fraktur vetebrata'),
(668, 'S92.1', 'fraktur weber'),
(669, 'S62.8', 'fraktur wist'),
(670, 'R 50,9', 'fuo'),
(671, 'H 60,0', 'furunkel telinga'),
(672, 'N 17.8', 'Gagal ginjal akut akibat asam jengkol'),
(673, 'N 17.0-.2,.9-N19', 'Gagal ginjal lainnya'),
(674, 'I50.0', 'gagal jantung'),
(675, 'I 50', 'Gagal jantung'),
(676, 'J96.9', 'gagal napas'),
(677, 'R 09.2', 'Gagal napas'),
(678, 'N64.8', 'galactocele'),
(679, 'F 40, F 41', 'Gangguan anxietas fobik, gangguan anxietas lainnya'),
(680, 'H 43 - H 45', 'Gangguan badan kaca dan bola mata'),
(681, 'R48.0', 'gangguan belajar '),
(682, 'N 83', 'Gangguan bukan radang pada indung telur, saluran telur dan ligamentum latum'),
(683, 'N 95', 'Gangguan dalam masa menopause dan perime nopause lainnya '),
(684, 'H 90 - H 91', 'Gangguan daya dengar'),
(685, 'H 53', 'Gangguan daya lihat'),
(686, 'M 50 - M 51', 'Gangguan diskus servikal dan intervertebral lainnya'),
(687, 'F 44', 'Gangguan disosiatif [konversi]'),
(688, 'E15-35, E 58, E 63, E 65, E 67 - E 85, E 87 - E90', 'Gangguan endokrin, nutrisi dan metabolik lainnya'),
(689, 'X 50', 'Gangguan gerakan  berulang-ulang dengan kekuatan berlebih'),
(690, 'N 91.3 - .5, N 92.2 - .6', 'Gangguan haid Lainnya'),
(691, 'I 44 - I 49', 'Gangguan hantaran dan aritmia jantung'),
(692, 'F 05 - F 06, F 90 - F 98', 'Gangguan hiperkinetik, perilaku, emosional atau fungsi sosial khas, gangguan \"tic\", dan gangguan mental dan emosional lainnya'),
(693, 'M 30 - M 31,  M 33 - M 36', 'Gangguan jaringan ikat sistemik lainnya'),
(694, 'M 70', 'Gangguan jaringan lunak akibat yang berhubungan  dengan penggunaan tekanan berlebihan'),
(695, 'M 71 - M 79', 'Gangguan jaringan lunak lainnya'),
(696, 'F 99', 'Gangguan jiwa YTT'),
(697, 'E 07', 'Gangguan kelenjar tiroid lainnya'),
(698, 'F 60 - F 69', 'Gangguan kepribadian, gangguan kebiasaan dan impuls, gangguan identitas, gangguan prevensi seksual'),
(699, 'Y 96', 'Gangguan kesehatan yang berhubungan dengan  '),
(700, 'H 30 - H 32', 'Gangguan koroid dan korioretina'),
(701, 'H 51', 'Gangguan lain gerakan mata binokular'),
(702, 'H 02 - H 03', 'Gangguan lain kelopak mata'),
(703, 'H 35 - H 36', 'Gangguan lain retina '),
(704, 'F 10', 'Gangguan mental dan perilaku akibat penggunaan Alkohol'),
(705, 'F 16', 'Gangguan mental dan perilaku akibat penggunaan Halosinogenika'),
(706, 'F 12', 'Gangguan mental dan perilaku akibat penggunaan Kanabinoida'),
(707, 'F 14', 'Gangguan mental dan perilaku akibat penggunaan Kokain'),
(708, 'F 11', 'Gangguan mental dan perilaku akibat penggunaan Opioida'),
(709, 'F 13', 'Gangguan mental dan perilaku akibat penggunaan Sedativa atau Hipnotika'),
(710, 'F 15', 'Gangguan mental dan perilaku akibat penggunaan Stimulansia'),
(711, 'F 17', 'Gangguan mental dan perilaku akibat penggunaan Tembakau'),
(712, 'F 18, F 19', 'Gangguan mental dan perilaku akibat zat pelarut yang mudah menguap atau zat multipel dan zat psikoaktif lainnya'),
(713, 'F 42', 'Gangguan obsesif - kompulsif'),
(714, 'N 60 - N 64', 'Gangguan pada payudara'),
(715, 'K 00 – K 01', 'Gangguan perkembangan dan erupsi gigi termasuk impaksi'),
(716, 'F 80 - F 89', 'Gangguan perkembangan psikologis'),
(717, 'J 68', 'Gangguan pernapasan akibat menghirup zat kimia, gas, asap dan uap'),
(718, 'N 41 - N 42', 'Gangguan prostat lainnya'),
(719, 'F 28 - F 29', 'Gangguan psikotik nonorganik lainnya atau YTT'),
(720, 'H 52', 'Gangguan refraksi dan akomodasi'),
(721, 'P 22 - P 28', 'Gangguan saluran napas lainnya yang ber-hubungan dengan masa perinatal'),
(722, 'H 46 - H 48', 'Gangguan saraf optik dan saraf penglihatan'),
(723, 'G 50 - G 55, G 56.1, .4, .9, G 57 - G 59', 'Gangguan saraf, radiks dan pleksus saraf'),
(724, 'G 45', 'Gangguan serangan peredaran otak sepintas dan sindrom yang terkait'),
(725, 'N 82, N 84 - N 90, N 93- N 94, N 96, N 98 - N 99', 'Gangguan sistem kemih kelamin lainnya'),
(726, 'H 04 - H 06', 'Gangguan sistem lakrimal dan orbita'),
(727, 'F 25', 'Gangguan skizoafektif'),
(728, 'F 43.1', 'Gangguan stress pasca trauma'),
(729, 'M 80 - M 85', 'Gangguan struktur dan densitas tulang'),
(730, 'E 00 - E 02', 'Gangguan tiroid berhubungan dengan defisiensi  iodium'),
(731, 'F 22, F 24', 'Gangguan waham menetap dan induksi'),
(732, 'M07.4', 'ganglion'),
(733, 'K04.1', 'gangren pulpa( GP)'),
(734, 'R02', 'gangren radix (GR)'),
(735, 'R02', 'gangrene'),
(736, 'K31.9', 'gaster porforasi'),
(737, 'K25.9', 'gastri ulcer'),
(738, 'K29.7', 'gastritis'),
(739, 'K29.1', 'gastritis acut'),
(740, 'K29.2', 'gastritis alcoholik'),
(741, 'K29.6', 'gastritis alergi'),
(742, 'K29.4', 'gastritis chronik'),
(743, 'K 29', 'Gastritis dan duodenitis'),
(744, 'K29.9', 'gastro duodenitis'),
(745, 'Q79.3', 'gastro schizis'),
(746, 'O68.9', 'gawat janin'),
(747, 'G61.0', 'GBS'),
(748, 'A09', 'GE'),
(749, 'R 00 - R 01', 'Gejala pada jantung'),
(750, 'T 90 - T 98', 'Gejala sisa cedera, keracunan dan akibat lanjut sebab luar'),
(751, 'E 64', 'Gejala sisa malnutrisi dan defisiensi gizi lainnya'),
(752, 'R 02 - R 09.0, .1, .3, .8 R96 - R 99', 'Gejala, tanda dan penemuan klinik dan laboratorium tidak normal lainnya, YTK di tempat lain'),
(753, 'O30.0', 'gemeli'),
(754, 'N17.9', 'GGA'),
(755, 'N18.9', 'GGK/GNC'),
(756, 'K05.1', 'ginggivitis'),
(757, 'R10.1', 'gipastrik pain'),
(758, 'K06.8', 'glant cell femur'),
(759, 'Q15.0', 'glaucoma congenital'),
(760, 'H40.1', 'glaucoma kronik'),
(761, 'H40.5', 'glaucoma sekunder'),
(762, 'H 40 - H 42', 'Glaukoma'),
(763, 'H40.2', 'glaukoma acut'),
(764, 'N03.9', 'glomerulo nepritis kronis'),
(765, 'N00.9', 'GNA( gromeruloneprritis acut)'),
(766, 'N00', 'GNAPS ( glomerulonepritis acut post streptococos)'),
(767, 'B 26', 'Gondong'),
(768, 'M00.0', 'gonitis'),
(769, 'A54.9', 'gonorrhea'),
(770, 'M10.9', 'gout ( urat)'),
(771, 'M10.0', 'gout artritis'),
(772, 'Z35.4', 'grande multipara'),
(773, 'L92.9', 'granuloma'),
(774, 'J32.9', 'granuloma hidung'),
(775, 'H01.8', 'granuloma mata'),
(776, 'H71', 'granuloma telinga'),
(777, 'L92.3', 'granuloma umbilicus'),
(778, 'E05', 'grave\"s desease'),
(779, 'K06.0', 'gusi berdarah'),
(780, 'N62', 'gynecomastia'),
(781, 'Z01.4', 'gyneko ekologi'),
(782, 'M20.1', 'hallux valgus'),
(783, 'Q66.3', 'hallux valgus congenital'),
(784, 'O16', 'hamil + hipertensi'),
(785, 'O00.9', 'hamil ectopic'),
(786, 'O47.0', 'hamil kurang dari 37 mg'),
(787, 'O26.9', 'hamil muda'),
(788, 'O80.9', 'hamil normal'),
(789, 'O99.0', 'hamil+ anemia'),
(790, 'R 75', 'Hasil laboratorium positif HIV'),
(791, 'R51', 'headache'),
(792, 'T67.0', 'heat struke'),
(793, 'B 68 - 71, B 75, B 77 - B 83', 'Helmintiasis lain'),
(794, 'K43.9', 'hema insisionalis'),
(795, 'D18.0', 'hemangioma'),
(796, 'C49.3', 'hemangioma sarcoma'),
(797, 'R04.2', 'hemaptoe'),
(798, 'K92.0', 'hematemasis'),
(799, 'O21.1', 'hematematis graviderum'),
(800, 'P54.8', 'hemato bayi'),
(801, 'S27.1', 'hemato pnemo thorax'),
(802, 'S27.1', 'hemato traumatik'),
(803, 'B65.0', 'hematocyluria'),
(804, 'T14.0', 'hematoma '),
(805, 'S09.9', 'hematoma dahi kiri'),
(806, 'N90.8', 'hematoma labia'),
(807, 'S06.5', 'hematoma subdural'),
(808, 'N50.1', 'hematoma testis'),
(809, 'N89.8', 'hematoma vagina'),
(810, 'O71.7', 'hematoma vulva'),
(811, 'R16.0', 'hematomegali'),
(812, 'N35.7', 'hematometra'),
(813, 'R31', 'hematuria'),
(814, 'G81.9', 'hemiparesis'),
(815, 'D18.0/M9131/0', 'hemongioma capilary'),
(816, 'D66', 'hemopili'),
(817, 'H44.3', 'hemorage intra ocular'),
(818, 'P21.8', 'hemorage intra of newbron'),
(819, 'R58', 'HEMORHAGE  '),
(820, 'H11.3', 'hemorhage conjupctiva'),
(821, 'I84.9', 'hemoroid'),
(822, 'I84.5', 'hemoroid external'),
(823, 'I34.2', 'hemoroid interna'),
(824, 'I 84', 'Hemoroid/Wasir'),
(825, 'N94.8', 'henmatocal'),
(826, 'D69.0', 'henoch schonlein purpura (HSP)'),
(827, 'K72.9', 'hepatik fallure'),
(828, 'K75.9', 'hepatitis'),
(829, 'B15.9', 'hepatitis A'),
(830, 'B 15', 'Hepatitis A akut'),
(831, 'K72.0', 'hepatitis acut'),
(832, 'B16.9', 'hepatitis B akut'),
(833, 'B 16', 'Hepatitis B akut'),
(834, 'B 17.1', 'Hepatitis C akut'),
(835, 'B17.1', 'hepatitis C cronis'),
(836, 'B 17.2', 'Hepatitis E akut'),
(837, 'B19.9', 'hepatitis fulminaat'),
(838, 'K73.9', 'hepatitis kronik'),
(839, 'K 73', 'Hepatitis kronik'),
(840, 'P59.2', 'hepatitis neunatal'),
(841, 'B19.9', 'hepatitis virus akut'),
(842, 'B16.9', 'hepatitis virus B'),
(843, 'B 17.0.8,  B18 - B19', 'Hepatitis virus lainnya'),
(844, 'K76.7', 'hepato renal syndrom'),
(845, 'C22.0', 'hepatoma'),
(846, 'R16.2', 'hepatos plenomegali'),
(847, 'E79.0', 'heperurisemia'),
(848, 'I95.9', 'hepotensi'),
(849, 'Q66.0', 'hermoprodite'),
(850, 'K46.9', 'hernia'),
(851, 'K44.9', 'hernia eoigastric/ventral'),
(852, 'K43.9', 'hernia femoral'),
(853, 'K 40', 'Hernia inguinal'),
(854, 'K41.9', 'hernia insisional'),
(855, 'K 41 - K 46', 'Hernia lainnya'),
(856, 'K45.8', 'hernia medialis'),
(857, 'K42.9', 'hernia umbicollis'),
(858, 'B00.1', 'herpes facialis'),
(859, 'B00.9', 'herpes simpleks'),
(860, 'B02,9', 'herpes zooster'),
(861, 'K43.9', 'HHD'),
(862, 'R06.6', 'hiccup'),
(863, 'O 40', 'Hidramnion'),
(864, 'N43.3', 'hidrocelle'),
(865, 'N50.9', 'hidrocelle testis dextra'),
(866, 'G91.9', 'hidrocepalus'),
(867, 'Q03.0', 'hidrocepalus bayi'),
(868, 'N 43', 'Hidrokel dan spermatokel'),
(869, 'P01.3', 'hidrom neos bayi'),
(870, 'O40', 'hidromnios'),
(871, 'N13.3', 'hidroneorosis'),
(872, 'K60.9', 'hidrops'),
(873, 'Q 03', 'Hidrosefalus kongenital'),
(874, 'G93.4', 'HIE ( hipoxic ischemic ensialopaty)'),
(875, 'T66', 'hifopermia'),
(876, 'D18.1', 'higroma ( colli d Cystioa)'),
(877, 'K40.9', 'HIL /scrotalis/inguinalis'),
(878, 'P70.4', 'hipaglikemia bayi'),
(879, 'E88.0', 'hipalbumenimia'),
(880, 'H21.0', 'hipema'),
(881, 'S05.1', 'hipema traumatic'),
(882, 'P59.9', 'hiper billirubimania'),
(883, 'E78.0', 'hiper cholestrol'),
(884, 'I51.3', 'hiperactive exercise'),
(885, 'E78.0', 'hipercolestrolemia'),
(886, 'K04.0', 'hiperemia pulpa HP'),
(887, 'R73.9', 'hipergilikemia'),
(888, 'R50.9', 'hiperpirakia'),
(889, 'N 40', 'Hiperplasia prostat'),
(890, 'I67.4', 'hipertensi ensepalopaty'),
(891, 'I 10', 'Hipertensi esensial (primer)'),
(892, 'O 14', 'Hipertensi gestasional (akibat kehamilan)dengan proteinuria yang nyata/preeklamsia'),
(893, 'K 76.6', 'Hipertensi portal'),
(894, 'E05.9', 'hipertiroid'),
(895, 'L91.0', 'hipertrapi scar'),
(896, 'N40', 'hipertropi  prostat'),
(897, 'K31.1', 'hipertropi pilory stenosis'),
(898, 'E16.2', 'hipoglikemia'),
(899, 'P 20 - P 21', 'Hipoksia intrauterus dan asfiksia lahir'),
(900, 'Q54.9', 'hipospadia   '),
(901, 'Q54.4', 'hipospadia penoscrotal'),
(902, 'E03.9', 'hipotiroid'),
(903, 'E 03', 'Hipotiroidisme lain'),
(904, 'T79.4', 'hipovolamik syok'),
(905, 'P21.9', 'hipoxia bayi'),
(906, 'Q43.1', 'hischpruag'),
(907, 'F44.9', 'histeria'),
(908, 'B24', 'HIV'),
(909, 'I42.1', 'HOCM hipertensi oostruktif cardiomyopati'),
(910, 'C81.0', 'hodkin disease'),
(911, 'B08.4', 'hona,foot dan mouth disease ( HFMD)'),
(912, 'E14.0', 'HONK'),
(913, 'H00.0', 'hordeolum'),
(914, 'O72.1', 'HPP'),
(915, 'N92.0', 'hyper menorea'),
(916, 'E05.9', 'hyperthiroid'),
(917, 'S06.2', 'ICH multiple'),
(918, 'R17', 'icterus '),
(919, 'P59.9', 'icterus neonatorum'),
(920, 'I25.9', 'IHD'),
(921, 'K56.7', 'ileus'),
(922, 'K56.0', 'ileus paralitik'),
(923, 'K 56', 'Ileus paralitik dan obstruksi usus tanpa Hernia'),
(924, 'K56.6', 'ilius obstruktif'),
(925, 'I21.9', 'imark miokard'),
(926, 'Q52.3', 'Imperforata hymen (blum pernah hamil)'),
(927, 'L00', 'impetigo bulose'),
(928, 'F52.2', 'impotensi dini'),
(929, 'X25.0', 'impressi fr.os frontal'),
(930, 'Z 23. 2', 'Imunisasi BCG'),
(931, 'Z 24. 4', 'Imunisasi campak'),
(932, 'Z 23.0, .1, .3 - .4, .6 - .8', 'Imunisasi dan kemoterapi pencegahan lainnya'),
(933, 'Z 27. 1', 'Imunisasi gabungan DPT (Difteri, Pertusis, Tetanus)'),
(934, 'Z 24. 6', 'Imunisasi hepatitis virus'),
(935, 'Z 24. 0', 'Imunisasi poliomielitis'),
(936, 'Z 24. 2', 'Imunisasi rabies'),
(937, 'Z 23. 5', 'Imunisasi tetanus'),
(938, 'G 80', 'Infantil cerebral palsy'),
(939, 'I 21 - I 22', 'Infark miokard akut'),
(940, 'I 63', 'Infark serebral'),
(941, 'J40', 'infeksi bronohitis'),
(942, 'K04.7', 'infeksi gigi'),
(943, 'K01.1', 'infeksi gigi'),
(944, 'S54.9', 'infeksi gonocolle'),
(945, 'A 54', 'Infeksi gonokok   '),
(946, 'B 00', 'Infeksi herpesvirus (Herpes simpleks)'),
(947, 'P 38 - P 39', 'Infeksi khusus lainnya pada masa perinatal'),
(948, 'A 70', 'Infeksi Klamedia'),
(949, 'L 00 - L 08', 'Infeksi kulit dan jaringan subkutan'),
(950, 'A 57 - A 64', 'Infeksi lainnya yang terutama ditularkan melalui hubungan seksual'),
(951, 'T81.4', 'infeksi luka oprasi (ILO)'),
(952, 'A 39', 'Infeksi meningokok'),
(953, 'A39.9', 'infeksi meninokok'),
(954, 'P39.9', 'infeksi neunatal'),
(955, 'P39.9', 'infeksi neunatrium'),
(956, 'O86.4', 'infeksi puerferalis'),
(957, 'N11.9', 'infeksi renal chronis'),
(958, 'J 00 - J 01 J 05 - J 06', 'Infeksi saluran napas bagian atas akut lainnya'),
(959, 'B 66', 'Infeksi trematoda lainnya'),
(960, 'R38', 'infeksi umbilicus'),
(961, 'N97.9', 'infertality'),
(962, 'N 97', 'Infertilitas perempuan'),
(963, 'K11.9', 'infiltrat parotis'),
(964, 'J 10 - J 11', 'Influensa'),
(965, 'T14.9', 'injury'),
(966, 'R19.8/Z33', 'inpartu'),
(967, 'T14.0', 'insect bite'),
(968, 'T63.4', 'insect bite'),
(969, 'G47.0', 'insomnia'),
(970, 'N18.9', 'insufisiensi renal GGK'),
(971, 'G93.9', 'inta cerebral bleding'),
(972, 'A05.9', 'intake makanan'),
(973, 'J84.9', 'interstitial lung oedema'),
(974, 'K08.9', 'interusi gigi'),
(975, 'T39.1', 'intocikasi bodrex'),
(976, 'K90.4', 'intolorance food'),
(977, 'T60.9/X48.0', 'intosikasi racun serangga'),
(978, 'T14.7/X44.0', 'intosikasi susu'),
(979, 'T88.7', 'intosikesi'),
(980, 'F15.0', 'intoxcisasi CTM'),
(981, 'T62.0/X49.0', 'intoxcisasi jamur'),
(982, 'T60.9/X68.9', 'intoxicasi bayigon'),
(983, 'T52.0/X66.0', 'intoxicasi bensin'),
(984, 'T55/X69.0', 'intoxicasi deterjen'),
(985, 'T52.0/X46.0', 'intoxicasi kerosin'),
(986, 'F10.0', 'intoxicasi obat'),
(987, 'T60.4', 'intoxicasi racun tikus'),
(988, 'D75.9', 'intra cranial bleeding'),
(989, 'I62.2', 'intra cranial bleeding non traumatik'),
(990, 'S06.3', 'intra cranial bleeding traumatik'),
(991, 'K56.1', 'invaginasi'),
(992, 'N85.5', 'inversio uteri '),
(993, 'O71.2', 'inversio uteri post fartum'),
(994, 'C76.0', 'inverte papiloma cav.nasi'),
(995, 'L01.0', 'invertigo'),
(996, 'H 20 - H 22', 'Iridosiklitis dan gangguan lain iris dan badan silier'),
(997, 'K04.9', 'iritasi pulpa'),
(998, 'I99', 'ischemik'),
(999, 'M54.3', 'ischialgia'),
(1000, 'N39.0', 'ISK'),
(1001, 'J06.9', 'ISPA'),
(1002, 'D69.3', 'ITP'),
(1003, 'Z30.5', 'IUD'),
(1004, 'O36.4', 'IUFD ( KJDR)'),
(1005, 'P95', 'IUFD ( KJDR)bayi'),
(1006, 'KODE', 'J'),
(1007, 'V03.4', 'jalan kaki ditabrak mobil'),
(1008, 'V01.9', 'jalan kaki ditabrak motor'),
(1009, 'P 00 - P 04', 'Janin dan bayi baru lahir yang dipengaruhi oleh faktor dan penyulit kehamilan persalinan dan kelahiran'),
(1010, 'I25.9', 'jantung kroner'),
(1011, 'I09.0', 'jantung rematik'),
(1012, 'W19.0', 'jatuh'),
(1013, 'W 00 - W 19', 'Jatuh'),
(1014, 'V38.1', 'jatuh dari cidomo'),
(1015, 'W18.0', 'jatuh dari kamar mandi '),
(1016, 'W07.0', 'jatuh dari korsi '),
(1017, 'V48.6', 'jatuh dari mobil di jalan raya'),
(1018, 'V28.9', 'jatuh dari motor'),
(1019, 'W14.0', 'jatuh dari pohon'),
(1020, 'W13.0', 'jatuh dari rumah /bangunan'),
(1021, 'V18.9', 'jatuh dari sepeda'),
(1022, 'W11.0', 'jatuh dari tangga '),
(1023, 'W06.0', 'jatuh dari tempat tidur'),
(1024, 'V58.0', 'jatuh dari truck'),
(1025, 'W01.0', 'jatuh dibawah'),
(1026, 'W51.2', 'jatuh disekolah sox ditabrak teman'),
(1027, 'W17.0', 'jatuh kesumur'),
(1028, 'V48.6', 'jatuh terguling dari mobil'),
(1029, 'E14,0', 'KAD (koma asidosis diabetic)'),
(1030, 'V38,1', 'kaki masuk jeruji motor'),
(1031, 'O63,0', 'kala I'),
(1032, 'O63,1', 'Kala II'),
(1033, 'I 42 - I 43', 'Kardiomiopati'),
(1034, 'K 02', 'Karies gigi'),
(1035, 'K02,9', 'karies propunda'),
(1036, 'D 04', 'Karsinoma in situ kulit'),
(1037, 'D 00 - D 03 D 07 - D 09', 'Karsinoma in situ lainnya'),
(1038, 'D 05', 'Karsinoma in situ payudara'),
(1039, 'D 06', 'Karsinoma in situ serviks uterus'),
(1040, 'H 25 - H 28', 'Katarak dan gangguan lain lensa'),
(1041, 'Z30,9', 'KB suntik'),
(1042, 'E41', 'KCCL'),
(1043, 'Z 21', 'Keadaan infeksi HIV asimtomatik'),
(1044, 'X09,0', 'kebekeran rumah'),
(1045, 'V 90 - V 94', 'Kecelakaan angkutan air'),
(1046, 'V 01 - V 89', 'Kecelakaan angkutan darat'),
(1047, 'V 98 -V 99', 'Kecelakaan angkutan lain'),
(1048, 'V 95 - V 97', 'Kecelakaan angkutan udara dan ruang angkasa'),
(1049, 'X 40 - X 44', 'Kecelakaan keracunan dan terdedah oleh bahan beracun lainnya'),
(1050, 'W 65 - W 74', 'Kecelakaan tenggelam dan terbenam'),
(1051, 'K83,0', 'kedangnitis'),
(1052, 'O00,0', 'kehamilan abdominal'),
(1053, 'O 00', 'Kehamilan ektopik'),
(1054, 'O 02, O 06 - O 08', 'Kehamilan lain yang berakhir dengan abortus'),
(1055, 'O48', 'kehamilan lewat waktu'),
(1056, 'O 48', 'Kehamilan lewat waktu'),
(1057, 'O 30', 'Kehamilan multipel'),
(1058, 'R56,8', 'kejang '),
(1059, 'R56,0', 'kejang demam'),
(1060, 'R 56', 'Kejang YTT'),
(1061, 'W20', 'kejatuhan benda'),
(1062, 'K 07 – K 08', 'Kelainan dentofasial termasuk maloklusi'),
(1063, 'Q 91 - Q 99', 'Kelainan kromosom YTK ditempat lain'),
(1064, 'M 22 - M 25', 'Kelainan sendi lainnya'),
(1065, 'L91,0', 'keloid'),
(1066, 'W44,0', 'kemasukan biji di telingga'),
(1067, 'O84', 'Kembar siam'),
(1068, 'R14', 'kembung'),
(1069, 'X11,0', 'kena air panas'),
(1070, 'E25,0', 'kena gelas/kaca'),
(1071, 'W 27', 'kena jarum'),
(1072, 'W27', 'kena kapak'),
(1073, 'W22,0', 'kena kawat/besi'),
(1074, 'W21', 'kena kayu'),
(1075, 'W20,0', 'kena lempar buku'),
(1076, 'W31', 'kena mesin giling'),
(1077, 'X10', 'kena minyak panas'),
(1078, 'W22,0', 'kena paku'),
(1079, 'W20,8', 'kena pancing'),
(1080, 'W29,0', 'kena peluru nyasar'),
(1081, 'W26,0', 'kena pisau/pedang'),
(1082, 'X58', 'kena ranting pohon'),
(1083, 'W 34,0', 'kena tembak'),
(1084, 'E46', 'KEP'),
(1085, 'X 45', 'Keracunan akibat pemaparan alkohol'),
(1086, 'X 49', 'Keracunan akibat pemaparan bahan beracun berbahaya lainnya'),
(1087, 'X 47', 'Keracunan akibat pemaparan gas-gas & uap-uap lainnya'),
(1088, 'X 46', 'Keracunan akibat pemaparan pelarut organik & hidrokarbon serta uapnya'),
(1089, 'X 48', 'Keracunan akibat pemaparan pestisida'),
(1090, 'T 59', 'Keracunan gas, asap dan uap lain'),
(1091, 'T 56', 'Keracunan logam'),
(1092, 'T 36 - T 50', 'Keracunan obat dan preparat biologik'),
(1093, 'T 52', 'Keracunan pelarut organik'),
(1094, 'T 60', 'Keracunan pestisida'),
(1095, 'H16,9', 'Keratitis'),
(1096, 'H 15 - H 19', 'Keratitis dan gangguan lain sklera dan kornea'),
(1097, 'H20,9', 'kerato uvcitis'),
(1098, 'P57,9', 'kern icterus'),
(1099, 'Y 60 - Y 84', 'Kesalahan pada pasien selama perawatan medis non bedah'),
(1100, 'W87,0', 'kestrum'),
(1101, 'O00,1', 'KET'),
(1102, 'O 42', 'Ketuban pecah dini'),
(1103, 'Z 41.2', 'Khitanan menurut agama dan adat kebiasaan'),
(1104, 'T88,1', 'KIPI (komplikasi ikutan pasca imuisasi)'),
(1105, 'Q89,8', 'kista cengenital'),
(1106, 'N 75.0.1', 'Kista dan abses kelenjar Bartholin'),
(1107, 'K66,8', 'kista mesenterial'),
(1108, 'H05,8', 'kista orbit'),
(1109, 'N83,2', 'kista ovarli (beraslin)'),
(1110, 'Q50,5', 'kista parovarium'),
(1111, 'K04,8', 'kista radicular'),
(1112, 'K 09 – K 10', 'Kista rongga mulut dan penyakit pada rahang'),
(1113, 'C44,5', 'kista umbilicoli'),
(1114, 'D27', 'kistoma ovaril'),
(1115, 'V29,9', 'KLL'),
(1116, 'K 80', 'Kolelitiasis'),
(1117, 'A60,9', 'kolera'),
(1118, 'A 00', 'Kolera'),
(1119, 'K 81', 'Kolesistitis'),
(1120, 'K 72', 'Koma hepatikum dan hepatitis fulminan '),
(1121, 'X02,0', 'kompor meledak /kena api kompor'),
(1122, 'G93,5', 'kompressi medulla'),
(1123, 'D 65 – D 69, D 71 - D 73, D 75 – D 77', 'Kondisi hemoragik dan penyakit darah dan organ pembuat darah lainnya'),
(1124, 'P 08, P 29, P 50 - P 54 P 56 - P 94, P 96', 'Kondisi lain yang bermula pada masa Perinatal'),
(1125, 'H 10 - H 13', 'Konjungtivitis dan gangguan lain konjungtiva'),
(1126, 'J24,8', 'konka hipertrofi'),
(1127, 'X 10 - X 19', 'Kontak dengan bahan panas'),
(1128, 'X 20 - X 29', 'Kontak dengan binatang & tumbuhan beracun'),
(1129, 'M20,0', 'kontraktur jari'),
(1130, 'A16,9', 'KP'),
(1131, 'A16,2', 'KP lama'),
(1132, 'O42,9', 'KPD'),
(1133, 'E40', 'kwarsiakor'),
(1134, 'Q36.9', 'labio genato suzies'),
(1135, 'Q51.0', 'labio mayora'),
(1136, 'Q35.9', 'labio palato baizies'),
(1137, 'S31.8', 'lacerasi anus'),
(1138, 'S05.2', 'lacerasi eye/cornea tampaprolapsa'),
(1139, 'S31.4', 'lacerasi vulva'),
(1140, 'T14.1', 'laceratum'),
(1141, 'H02.2', 'lagophitalmoes'),
(1142, 'P 95', 'Lahir mati'),
(1143, 'Q31.0', 'laringeal web'),
(1144, 'J04.0', 'laringitis akut'),
(1145, 'J37.0', 'laringitis cronik'),
(1146, 'J 04', 'Laringitis dan trakeitis akut'),
(1147, 'J38.0', 'laringo malacea/plagin'),
(1148, 'J36.0', 'laringo paringitis acut'),
(1149, 'S05.3', 'lecerasi cerebri'),
(1150, 'W36.0', 'ledakan tabung gas'),
(1151, 'S06.2', 'left heard failure LHF'),
(1152, 'D 25', 'Leiomioma uterus'),
(1153, 'A 30', 'Lepra/Kusta'),
(1154, 'G 56.3', 'Lesi saraf radialis'),
(1155, 'G 56.2', 'Lesi saraf ulnaris'),
(1156, 'B 55', 'Lesmaniasis'),
(1157, 'P01.7', 'letak lintang anak'),
(1158, 'O32.2', 'letak lintang ibu'),
(1159, 'P03.1', 'letak lintang kasep anak'),
(1160, 'O64.1', 'letak lintang kasiep ibu'),
(1161, 'O32.3', 'Letak muka'),
(1162, 'O32.1', 'letak sunsang ( ibu)'),
(1163, 'P01.7', 'letak sunsang anak '),
(1164, 'H17.8', 'leucoma cornea '),
(1165, 'C 91 - C 95', 'Leukemia'),
(1166, 'C95.0', 'leukemia acut'),
(1167, 'H18.9', 'leukemia comea'),
(1168, 'AO6.4', 'lever ambic abses'),
(1169, 'A06.1', 'lever amebic abses'),
(1170, 'M35.9', 'leymyosarcoma'),
(1171, 'A 18.2', 'Limfadenitis tuberkulosa '),
(1172, 'C 82 - C 85', 'Limfoma non Hodgkin'),
(1173, 'C85.9', 'limpoma no hodgkins'),
(1174, 'C85.9', 'limpomamalignah'),
(1175, 'I50.1', 'lipoma'),
(1176, 'D17.9', 'lipoma neohal'),
(1177, 'C85.9', 'lipoma retraurculer'),
(1178, 'K76.9', 'liver cronic'),
(1179, 'K76.9', 'liver cronis disease'),
(1180, 'K12.2', 'lodwing angina '),
(1181, 'M23.4', 'loose body patela (knee)'),
(1182, 'T 20 - T 32', 'Luka bakar dan korosi'),
(1183, 'T79.3', 'luka empeksi'),
(1184, 'M54.5', 'lumbago ( LBP) /low back pain'),
(1185, 'M32.9', 'lupa CNS'),
(1186, 'M 32', 'Lupus eritemateus sistemik'),
(1187, 'I51.7', 'LVH cardiomegali'),
(1188, 'I88.9', 'lympadenitis'),
(1189, 'C85.0', 'lympadenopaty'),
(1190, 'R59.1', 'lympadenpaty sup mandibula'),
(1191, 'Q89.2', 'lympadepaty colli'),
(1192, 'D18.1', 'lympengioma'),
(1193, 'D17.9', 'lympo sarcoma'),
(1194, 'Q18.4', 'macrostamia'),
(1195, 'K07.4', 'mal oclussion'),
(1196, 'B 50 - B 54', 'Malaria (Included all malaria)'),
(1197, 'B50.0+', 'malaria cerebral'),
(1198, 'B54', 'malaria cerebral klinis /demam'),
(1199, 'B50.9', 'malaria falciferum/tropical/algida'),
(1200, 'B53.0', 'malaria ovaie'),
(1201, 'B52.9', 'malaria quartana'),
(1202, 'B51.9', 'malaria vivak /tertiana'),
(1203, 'Q 67 - Q 79', 'Malformasi dan deformasi kongenital sistem muskuloskeletal lain'),
(1204, 'Q 54 - Q 56', 'Malformasi kongenital alat kelamin laki'),
(1205, 'Q 50 - Q 52', 'Malformasi kongenital alat kelamin wanita'),
(1206, 'Q 10 - Q 18, Q 30 - Q 34, Q 80 - Q 89', 'Malformasi kongenital lainnya'),
(1207, 'Q 38 - Q 40,Q 42 - Q 45', 'Malformasi kongenital sistem cerna lainnya'),
(1208, 'Q 60 - Q 64', 'Malformasi kongenital sistem kemih lainnya'),
(1209, 'Q 20 - Q 28', 'Malformasi kongenital sistem peredaran darah'),
(1210, 'Q 00 - Q 02 Q 04, Q 06, Q 07', 'Malformasi kongenital susunan saraf lain'),
(1211, 'C76.5', 'malignancy lutut'),
(1212, 'E46', 'malnutrisi'),
(1213, 'E 40 - E 46', 'Malnutrisi'),
(1214, 'Q43.3', 'malrotasi'),
(1215, 'M84.0', 'malunion'),
(1216, 'Q83.8', 'mama alberant'),
(1217, 'E41', 'marasmus'),
(1218, 'E42', 'marasmus kwarsi'),
(1219, 'N60.9', 'marnae diplasia'),
(1220, 'K63.8', 'massa colon'),
(1221, 'N61', 'mastititis abses'),
(1222, 'H70.9', 'mastoiditis'),
(1223, 'N64.9', 'mastopati'),
(1224, 'W57', 'masuk lintah'),
(1225, 'C71.6', 'medulo blastoma'),
(1226, 'K59.3', 'mega colon'),
(1227, 'Q43.1', 'mega colon congenital'),
(1228, 'Q43.1', 'megacolon congenital'),
(1229, 'Q82.0', 'meiges syndrom'),
(1230, 'C 43', 'Melanoma ganas kulit'),
(1231, 'P54.1', 'melena bayi'),
(1232, 'K92.1', 'melena dewasa'),
(1233, 'C43.9', 'melenoma malignen'),
(1234, 'K22.6', 'mellery weis syndrom'),
(1235, 'W22', 'menabrak dinding'),
(1236, 'V47', 'menabrak pohon'),
(1237, 'W44.0', 'menelan uang logam'),
(1238, 'G03.9', 'menengitis'),
(1239, 'A17.0 ', 'meningitis TBC'),
(1240, 'A 17.0', 'Meningitis tuberkulosa'),
(1241, 'G04.9', 'meningo ensafalitis'),
(1242, 'Q01.9', 'meningo ensefalocelle'),
(1243, 'A17.8+ G05.0*', 'meningo gasepalitis TB'),
(1244, 'Q05.9', 'meningocelle'),
(1245, 'N92.1', 'menometroragia'),
(1246, 'N95.1', 'menopause'),
(1247, 'N92.0', 'menoraghia'),
(1248, 'N 92.0, .1', 'Menoragi atau metroragi'),
(1249, 'N92.6', 'menstruasi'),
(1250, 'F79', 'mental retardation'),
(1251, 'Z39.0', 'menunggu bayi'),
(1252, 'C 45', 'Mesotelioma'),
(1253, 'D 74', 'Metahaemoglobinema'),
(1254, 'C81', 'metastase glutea CA'),
(1255, 'C71.9', 'metastase intra cranial'),
(1256, 'R14', 'meteorismus ( perut kembung) '),
(1257, 'Q55.8', 'micro urethra conginital'),
(1258, 'Q02', 'microcepally'),
(1259, 'G43.9', 'migren'),
(1260, 'G 43 - G 44', 'Migren dan sindrom nyeri kepala lainnya'),
(1261, 'B 35 - B 49', 'Mikosis'),
(1262, 'G00.9', 'miningitis prulent /bacterial'),
(1263, 'M 60 – M 64, \'M 66 – M 68', 'Miopati dan reumatisme'),
(1264, 'O02.1', 'mised abortion/dead concytens'),
(1265, 'K00.0', 'missing teeth'),
(1266, 'I05.9', 'mitra valve prolapa'),
(1267, 'I34.0', 'mitral insufiensi'),
(1268, 'I05.0', 'mitral stenosis'),
(1269, 'J18.9', 'mnemonia berat'),
(1270, 'O 01', 'Mola hidatidosa'),
(1271, 'O01.9', 'mola hidatodosa'),
(1272, 'B08.1', 'moluscum contagiosum'),
(1273, 'H03.1', 'moluscum contagiosum mata'),
(1274, 'B37.9', 'monoliasis'),
(1275, 'P37.5', 'monoliasis bayi'),
(1276, 'G 56.8', 'Mononeuropati anggota tubuh bagian atas lainnya'),
(1277, 'G83.1', 'monoparase extrimitas'),
(1278, 'B05.9', 'morbili'),
(1279, 'A30.9', 'morbus harsan fieaksi'),
(1280, 'T75.3', 'motion sicknese'),
(1281, 'I34.0', 'MR ( mitral regorgitasi)'),
(1282, 'G57.7', 'mulitple cranial palsy'),
(1283, 'Z64.1', 'multipara'),
(1284, 'G93.9', 'multiple cerebri'),
(1285, 'Q89.9', 'multiple conginital anomaly'),
(1286, 'T06.4', 'multiple contusio muscolorum'),
(1287, 'Q78.6', 'multiple exostosis'),
(1288, 'D21.2', 'multiple fibroma colorsum'),
(1289, 'H00.0', 'multiple hordeulum'),
(1290, 'C97', 'multiple polip senile'),
(1291, 'M79.1', 'myalgia'),
(1292, 'G70.0', 'myastenia gravis'),
(1293, 'P94.0', 'myastenia gravis bayi'),
(1294, 'B49', 'mycosis mycotic'),
(1295, 'N12', 'myelenopritis'),
(1296, 'G04.9', 'myelitis'),
(1297, 'D47.1', 'myelofibrosis'),
(1298, 'I40.0', 'myocardial infection MCI'),
(1299, 'I51.4', 'myocarditis'),
(1300, 'D25.9', 'myoma uteri'),
(1301, 'H52.1', 'myopia'),
(1302, 'C42.9', 'myosercoma betis kiri'),
(1303, 'M60.9', 'myositis'),
(1304, 'KODE', 'N'),
(1305, 'Q82.5', 'naevus pigmentasi'),
(1306, 'T87.5', 'necrasis palax /brachl'),
(1307, 'R02', 'necrosis'),
(1308, 'N 12', 'Nefritis tubulo - interstitial, tidak ditentukan akut atau kronik/pielonefritis'),
(1309, 'N 14.3', 'Nefropati disebabkan oleh logam–logam berat'),
(1310, 'N 02.8', 'Nefropati Imunoglobulin A (Ig A)'),
(1311, 'C 30, C 31, C 37 - C 38.0, C 39', 'Neoplasma ganas  sistem napas dan alat  rongga dada lainnya'),
(1312, 'C 51 - C 52, C 57', 'Neoplasma ganas alat kelamin  perempuan lainnya'),
(1313, 'C 63', 'Neoplasma ganas alat kelamin pria lainnya'),
(1314, 'C 66, C 68', 'Neoplasma ganas alat kemih lainnya'),
(1315, 'C 70, C 72', 'Neoplasma ganas bagian susunan saraf pusat'),
(1316, 'C 55', 'Neoplasma ganas bagian uterus lainnya dan YTT');
INSERT INTO `icd` (`id_icd`, `kode_icd`, `deskripsi`) VALUES
(1317, 'C 00 - C 10', 'Neoplasma ganas bibir, rongga mulut,  kelenjar liur, faring, tonsil'),
(1318, 'C 12 - C 14', 'Neoplasma ganas bibir, rongga mulut, faring, lainnya & YTT'),
(1319, 'C 34', 'Neoplasma ganas bronkus dan paru'),
(1320, 'C 19 - C 21', 'Neoplasma ganas daerah  rektosigmoid, rektum dan anus'),
(1321, 'C 15', 'Neoplasma ganas esofagus'),
(1322, 'C 64 - C 65', 'Neoplasma ganas ginjal, pelvis ginjal'),
(1323, 'C 22', 'Neoplasma ganas hati dan saluran empedu intrahepatik'),
(1324, 'C 46 - C 49', 'Neoplasma ganas jaringan ikat & jaringan lunak'),
(1325, 'C 67', 'Neoplasma ganas kandung kemih (buli-buli)'),
(1326, 'C 74 - C 75', 'Neoplasma ganas kelenjar endokrin lain dan struktur terkait '),
(1327, 'C 73', 'Neoplasma ganas kelenjar tiroid'),
(1328, 'C 18 ', 'Neoplasma ganas kolon'),
(1329, 'C 54', 'Neoplasma ganas korpus uteri'),
(1330, 'C 44', 'Neoplasma ganas kulit lainnya'),
(1331, 'C 88-C 90, C 96', 'Neoplasma ganas lain dari limfoid, hematopoetik dan jaringan terkait lainnya'),
(1332, 'C 16', 'Neoplasma ganas lambung'),
(1333, 'C 32', 'Neoplasma ganas laring'),
(1334, 'C 69', 'Neoplasma ganas mata dan  adneksa'),
(1335, 'C 38.1-.8', 'Neoplasma ganas mediastinum'),
(1336, 'C 11', 'Neoplasma ganas nasofaring    '),
(1337, 'C 71', 'Neoplasma ganas otak'),
(1338, 'C 56', 'Neoplasma ganas ovarium (indung telur)'),
(1339, 'C 25', 'Neoplasma ganas pankreas'),
(1340, 'C 50', 'Neoplasma ganas payudara'),
(1341, 'C 60', 'Neoplasma ganas penis'),
(1342, 'C 58', 'Neoplasma ganas plasenta (uri)'),
(1343, 'C 97', 'Neoplasma ganas primer tempat multipel'),
(1344, 'C 61', 'Neoplasma ganas prostat'),
(1345, 'C 77 - C 80', 'Neoplasma ganas sekunder dan neoplasma ganas kelenjar getah bening YTT'),
(1346, 'C 53', 'Neoplasma ganas serviks uterus'),
(1347, 'C 76', 'Neoplasma ganas tempat lain dan yang tidak jelas batasannya'),
(1348, 'C 62', 'Neoplasma ganas testis'),
(1349, 'C 33', 'Neoplasma ganas trakea'),
(1350, 'C 40 - C 41', 'Neoplasma ganas tulang dan tulang rawan sendi'),
(1351, 'C 17, C 23 - C 24,  C 26', 'Neoplasma ganas usus halus dan alat cerna lainnya'),
(1352, 'D 30', 'Neoplasma jinak alat kemih'),
(1353, 'D 22 - D 23', 'Neoplasma jinak kulit'),
(1354, 'D 10 - D12.0-.5,.7-.9, D13 D 31 - D32, D 34 - D36', 'Neoplasma jinak lainnya'),
(1355, 'D 15.2', 'Neoplasma jinak mediastinum'),
(1356, 'D 33', 'Neoplasma jinak otak dan susunan saraf pusat lainnya'),
(1357, 'D 27', 'Neoplasma jinak ovarium (indung telur)'),
(1358, 'D 24', 'Neoplasma jinak payudara'),
(1359, 'D 14.1 - .4', 'Neoplasma jinak sistem napas lainnya'),
(1360, 'D 37 - D 48', 'Neoplasma yang tak menentu perangainya dan yang tak diketahui sifatnya'),
(1361, 'N29.8', 'nephro calcinosis'),
(1362, 'N04.8', 'nepratio sindrom'),
(1363, 'N05', 'nepritis'),
(1364, 'N20.0', 'neprolitiasis'),
(1365, 'E14.2+N08.3*', 'nepropati diabetik'),
(1366, 'M79.2', 'neuralgia'),
(1367, 'F48.0', 'neurastania'),
(1368, 'H46', 'neuritis optic'),
(1369, 'H46', 'neuritis retro bulbar'),
(1370, 'H30.9', 'neuro chorioretiasis'),
(1371, 'Q85.0', 'neuro fibromatosis'),
(1372, 'D70', 'neuro panic'),
(1373, 'G58.9', 'neuropaty'),
(1374, 'K56.7', 'neus post histerectomy'),
(1375, 'L85.9', 'NHL'),
(1376, 'I64', 'NHS ( non hemorage stroke)'),
(1377, 'H 55', 'Nistagmus & pergerakan mata yang tidak teratur lainnya'),
(1378, 'A69.0', 'noma'),
(1379, 'M84.1', 'non union fraktur'),
(1380, 'R07.4', 'nyeri dada'),
(1381, 'R 10', 'Nyeri perut dan panggul'),
(1382, 'M54.5', 'nyeri pinggang'),
(1383, 'M 54.5', 'Nyeri punggung bawah'),
(1384, 'KODE', 'O'),
(1385, 'E 66', 'Obesitas'),
(1386, 'E66.9', 'obesitas /overweleh '),
(1387, 'R50.9', 'OBS febris'),
(1388, 'K59.0', 'obstipasi'),
(1389, 'P03.1', 'obstruksi anus ( akut bawan bayi)'),
(1390, 'J34.8', 'obstruksi nasi '),
(1391, 'K11.8', 'obstruksi parsial'),
(1392, 'N13.1', 'obstruksi uropati'),
(1393, 'P76.9', 'obstruksi usus'),
(1394, 'K87', 'obstruktif sundice'),
(1395, 'H34.1', 'oclosio arteri retina sentral '),
(1396, 'I25.2', 'old myocard infaction ( OMI)'),
(1397, 'O41.0', 'oligohidramnion'),
(1398, 'H66.9', 'OMP '),
(1399, 'P38', 'ompalitis '),
(1400, 'Q79.2', 'ompalocelle'),
(1401, 'B 73', 'Onkosersiasis'),
(1402, 'S 82,2,1', 'open fr cruris'),
(1403, 'S31.8', 'open wound prut'),
(1404, 'S31.1', 'open wourd abdomen wall'),
(1405, 'S81.0', 'open wourd knee'),
(1406, 'S71.1', 'open wourd tigh paha'),
(1407, 'H49.9', 'opthalmopalgia'),
(1408, 'B46', 'oral trush'),
(1409, 'Z 20, Z 22', 'Orang lain dengan risiko gangguan kesehatan yang berkaitan dengan penyakit menular'),
(1410, 'Z 00.2 - Z 13', 'Orang yang mendapatkan pelayanan kesehatan untuk pemeriksaan khusus dan investigasi lainnya'),
(1411, 'Z 40 - Z41.0, .1, .3 - Z 45,Z 51 - Z 54', 'Orang yang mengunjungi pelayanan kesehatan untuk tindakan perawatan khusus lainnya'),
(1412, 'H05.0', 'orbital celluitis'),
(1413, 'N46.9', 'orchitis'),
(1414, 'C40.1', 'osteo sarcoma dari'),
(1415, 'C49.2', 'osteo sarcoma femur'),
(1416, 'C40.2', 'osteo sarcoma lutut'),
(1417, 'M19.9', 'osteoartritis'),
(1418, 'M 86', 'Osteomielitis'),
(1419, 'M86.9', 'osteomyolitis'),
(1420, 'M87.9', 'osteonecrosis'),
(1421, 'H66.9', 'otitis'),
(1422, 'H 65 - H 75', 'Otitis media dan gangguan  mastoid dan  telinga tengah'),
(1423, 'T50.9', 'over dosis'),
(1424, 'K38.1', 'PAI'),
(1425, 'R10.4', 'pain abdominal'),
(1426, 'O44.0', 'palacenta previa ( jalan keluar bayi tertutup placenta)'),
(1427, 'Q35.9', 'palato sciziz'),
(1428, 'R00.2', 'palpitasi'),
(1429, 'G80.9', 'palsy cerebral'),
(1430, 'K86.8', 'pancereas anular'),
(1431, 'K85', 'pancreatitis acut'),
(1432, 'D61.9', 'pancytopenia'),
(1433, 'F41.0', 'panic diserdes'),
(1434, 'K 85 - K 86', 'Pankreatitis akut dan penyakit pankreas lainnya'),
(1435, 'H44.0', 'panophtalmitis'),
(1436, 'G12.3', 'paraliasi pertodik'),
(1437, 'K56.0', 'paralitik ilius '),
(1438, 'G82.2', 'paraparesis'),
(1439, 'J02.9', 'paringitis'),
(1440, 'G20', 'parkinson'),
(1441, 'G 21', 'Parkinson sekunder'),
(1442, 'K11.2', 'parotitis'),
(1443, 'O47.0', 'partus imaturus'),
(1444, 'O63.0', 'partus kasep'),
(1445, 'O62.3', 'partus kobrojal'),
(1446, 'O63.2', 'partus lama'),
(1447, 'B 90.9.1', 'Paru/lobus luluh akibat TB'),
(1448, 'Z30.1', 'pasang sepiral'),
(1449, 'Z90.7', 'pasca oferictomi'),
(1450, 'F45.9', 'pasiccsomatis'),
(1451, 'I47.1', 'PAT'),
(1452, 'A 66', 'Patek (Frambusia)'),
(1453, 'Z 50', 'Pelayanan yang melibatkan gangguan prosedur prosedur rehabilitasi'),
(1454, 'N73.5', 'pelvic peritonisis'),
(1455, 'W 42', 'Pemaparan bising'),
(1456, 'W 43', 'Pemaparan getaran '),
(1457, 'W 88', 'Pemaparan radiasi pengion'),
(1458, 'W 90', 'Pemaparan radiasi pengion lain'),
(1459, 'W 91', 'Pemaparan radiasi YTT'),
(1460, 'W 89', 'Pemaparan sinar ultra violet dan man-mide visible'),
(1461, 'Z 46.3', 'Pemasangan dan penyesuaian gigi palsu'),
(1462, 'Z 46.0', 'Pemasangan dan penyesuaian kacamata dan lensa kontak'),
(1463, 'Z 00.1', 'Pemeriksaan kesehatan bayi dan anak secara rutin'),
(1464, 'Z 00.0', 'Pemeriksaan kesehatan umum'),
(1465, 'K62.5', 'pendarahan anus'),
(1466, 'K06.8', 'pendarahan gusi'),
(1467, 'D75.9', 'pendarahan infra kranial PIK'),
(1468, 'R58', 'pendarahan intra abdomen'),
(1469, 'D75.9', 'pendarahan intra cranial'),
(1470, 'N95.0', 'pendarahan pasca menopouse'),
(1471, 'O 72', 'Pendarahan pasca persalinan'),
(1472, 'T18.0', 'pendarahan post op'),
(1473, 'P51.9', 'pendarahan tali pusat bayi'),
(1474, 'P51.9', 'pendarahan umbilicoli'),
(1475, 'I61.3', 'pendarahn pons'),
(1476, 'H46', 'penelitis'),
(1477, 'J93.9', 'penemo thorax'),
(1478, 'J93.8', 'penemo torax acut /cronik'),
(1479, 'P25.2', 'penemunia deastinum bayi'),
(1480, 'J98.2', 'penemunia disdtinum'),
(1481, 'Z 35', 'Pengawasan kehamilan dengan risiko tinggi'),
(1482, 'Z 34', 'Pengawasan kehamilan normal'),
(1483, 'Z 30', 'Pengelolaan kontrasepsi'),
(1484, 'Z 31 - Z 33, Z 37,Z 55 - Z 99', 'Penunjang sarana kesehatan untuk alasan Lainnya'),
(1485, 'N 44 - N 46 N 48 - N 51', 'Penyakit alat kelamin laki lainnya'),
(1486, 'G 30', 'Penyakit Alzheimer'),
(1487, 'K 35 - K 38', 'Penyakit apendiks'),
(1488, 'I 71 - I 72, I 77 - I 79', 'Penyakit arteri, arteriol dan kapiler lainnya'),
(1489, 'A 21, A 24-28 A 31-32, A 38, A 42-49', 'Penyakit bakteria lainnya'),
(1490, 'K 13 - K 14', 'Penyakit bibir, mukosa mulut lainnya dan lidah'),
(1491, 'B 76', 'Penyakit cacing tambang'),
(1492, 'K 50 - K 51', 'Penyakit Crohn dan tukak kolitis    '),
(1493, 'M 65.4', 'Penyakit de Quervain'),
(1494, 'K 57', 'Penyakit Divertikel usus'),
(1495, 'K 20 - K 23, K 28,  K 31', 'Penyakit esofagus, lambung dan duodenum lainnya'),
(1496, 'N 02.0 -.7,.9,N03, N 05 - N 08', 'Penyakit glomerulus lainnya'),
(1497, 'E 04', 'Penyakit gondok nontoksik lain'),
(1498, 'K 05 – K 06', 'Penyakit gusi, jaringan periodontal dan tulang alveolar'),
(1499, 'K 71', 'Penyakit hati akibat bahan beracun di tempat kerja'),
(1500, 'K 70', 'Penyakit Hati Alkohol'),
(1501, 'K 74.0 - .5, K 75, K 76.1-.5, .8, .9, K 77', 'Penyakit hati lainnya'),
(1502, 'P 55', 'Penyakit hemolitik pd janin & bayi baru lahir'),
(1503, 'J 30.0 - J 30.2,  J 33,  J 34.0 - .3   ', 'Penyakit hidung dan sinus hidung lainnya'),
(1504, 'I 11 - I 15', 'Penyakit hipertensi lainnya'),
(1505, 'C 81', 'Penyakit Hodgkin'),
(1506, 'P 35 - P 37', 'Penyakit infeksi dan parasit kongenital'),
(1507, 'A 65, A 67, A 69, A 74, B 85 - B 89, B 94 - B 99', 'Penyakit infeksi dan parasit lainnya'),
(1508, 'A 02, A 04 - A 05 A 07 - A 08', 'Penyakit infeksi usus lainnya'),
(1509, 'I 20, I 23 - I 25', 'Penyakit jantung iskemik lainnya'),
(1510, 'I 27 - I 41, I 51- I 52', 'Penyakit jantung lainnya'),
(1511, 'I 05 - I 09', 'Penyakit jantung reumatik kronik'),
(1512, 'K 03', 'Penyakit jaringan keras gigi lainnya'),
(1513, 'K 12', 'Penyakit jaringan lunak mulut (Stomatitis)  dan lesi yang berkaitan'),
(1514, 'K 11', 'Penyakit kelenjar liur'),
(1515, 'A 55 - A 56', 'Penyakit klamidia yg ditularkan melalui hubungan seksual'),
(1516, 'L 10 - L 22, L 25 - L 99', 'Penyakit kulit dan jaringan subkutan lainnya'),
(1517, 'H 57 - H 59', 'Penyakit lain mata dan adneksa'),
(1518, 'G 20', 'Penyakit Parkinson'),
(1519, 'I 73.1 - .9', 'Penyakit pembuluh darah perifer lainnya'),
(1520, 'K 04', 'Penyakit pulpa dan periapikal'),
(1521, 'N94.9', 'penyakit radang panggul PRP'),
(1522, 'G 00 - G 09', 'Penyakit radang susunan saraf pusat'),
(1523, 'J 36 - J 39', 'Penyakit saluran napas bagian atas lainnya'),
(1524, 'I 65 - I 69', 'Penyakit serebrovaskular lainnya'),
(1525, 'K 82 - K 83, K 87 - K 93', 'Penyakit sistem cerna lainnya'),
(1526, 'N 25 - N 29, N 31 - N 39', 'Penyakit sistem kemih lainnya'),
(1527, 'M 87 - M 99', 'Penyakit sistem muskuloskeletal dan jaringan ikat '),
(1528, 'J 22, J 66.1 -2, J 66.8, J 94 - J 99 ', 'Penyakit sistem napas lainnya'),
(1529, 'I 86 - I 99', 'Penyakit sistem sirkulasi lainnya'),
(1530, 'G 10 - G 13, G 22 - G 26, G 90 - G 91, G 93 - G 99', 'Penyakit susunan saraf lainnya'),
(1531, 'H 60 - H 61.0-.3,.9, H 62, H 83.8, .9, H 92 - H 95', 'Penyakit telinga dan prosesus mastoid'),
(1532, 'D 80 – D 89', 'Penyakit tertentu yang menyangkut mekanisme imun'),
(1533, 'J 35', 'Penyakit tonsil dan adenoid kronik'),
(1534, 'N 10 - N 11,  N 13, N 14.0-2. .4, N 15 -  N 16', 'Penyakit tubulo-interstitial ginjal lainnya'),
(1535, 'K 52 - K 55, K 59 - K 67', 'Penyakit usus dan peritoneum lainnya'),
(1536, 'B 20 - B 24', 'Penyakit virus gangguan defisiensi imun  pada manusia (HIV)'),
(1537, 'A 81,  A 87 - A 89 B 25,  B 27 - B 34', 'Penyakit virus lainnya'),
(1538, 'T 79 - T 88', 'Penyulit awal trauma tertentu dan penyulit pembedahan dan perawatan YTK di tempat lain'),
(1539, 'O 20 - O 23, O 25 - O 29', 'Penyulit kehamilan dan persalinan lainnya'),
(1540, 'O 85 - O 99', 'Penyulit yang lebih banyak berhubungan  dengan masa nifas dan kondisi obstetrik  lainnya, YTK ditempat lain'),
(1541, 'Z 39', 'Perawatan dan pemeriksaan pasca persalinan'),
(1542, 'O 31 - O 39 O 41, O 43, O 47', 'Perawatan ibu yang berkaitan dengan janin  dan ketuban dan masalah persalinan'),
(1543, 'Z91.5', 'percoban bunuh diri ( gantung diri)'),
(1544, 'O 46', 'Perdarahan antepartum YTK ditempat lain'),
(1545, 'I 60 - I 62', 'Perdarahan intrakranial'),
(1546, 'D46.9', 'pereleukemia'),
(1547, 'G52.2', 'pereplegia'),
(1548, 'K63.1', 'perforasi ileum/usus'),
(1549, 'N92.1', 'peri penopose bleeding'),
(1550, 'K37', 'periapendicitis'),
(1551, 'I31.3', 'pericardial Effusi'),
(1552, 'K05.2', 'periodentitis acut'),
(1553, 'K65.0', 'peritonisis difusi'),
(1554, 'K65.0', 'peritonisis generalized'),
(1555, 'K65.9', 'peritonitis'),
(1556, 'J36', 'peritonsilaer abses'),
(1557, 'K 76.0', 'Perlemakan hati'),
(1558, 'K05.3', 'perodenitis cronic'),
(1559, 'K63.1', 'perporasi jejunum'),
(1560, 'K63.1', 'perporasi kolon sigmoid'),
(1561, 'H66.9', 'perpurasi MAC'),
(1562, 'O 68', 'Persalinan dengan penyulit gawat janin'),
(1563, 'O 64 - O 66', 'Persalinan macet'),
(1564, 'O 84', 'Persalinan multipel'),
(1565, 'O 60', 'Persalinan prematur'),
(1566, 'O 80', 'Persalinan tunggal spontan'),
(1567, 'G81.9', 'persiapan CT scen'),
(1568, 'K00.6', 'persistensi gigi'),
(1569, 'P 05 - P 07', 'Pertumbuhan janin lamban, malnutrisi janin dan gangguan yang berhubungan dengan ke-hamilan pendek dan berat badan lahir rendah'),
(1570, 'A37.9', 'pertusis'),
(1571, 'A 37', 'Pertusis/Batuk rejan'),
(1572, 'N47', 'phymosis'),
(1573, 'J 86', 'Piotoraks [empiema]'),
(1574, 'F09', 'pisikosis organik'),
(1575, 'P02.0', 'placenta pravia bayi'),
(1576, 'J 92', 'Plak pleural'),
(1577, 'O 44', 'Plasenta previa'),
(1578, 'J18.8', 'plaura pnemunia'),
(1579, 'I 80.9', 'plebitis'),
(1580, 'K10.2', 'plegmoa'),
(1581, 'J90', 'pleura efusi'),
(1582, 'N11.8', 'PNC'),
(1583, 'J18.1', 'pnemonia lobaris'),
(1584, 'J86.9', 'pnemu torax'),
(1585, 'J15.7', 'pnemunia antipical'),
(1586, 'J69.0', 'pnemunia sapirasi'),
(1587, 'J 60 - J 65', 'Pneumokoniosis'),
(1588, 'J 12 - J 18', 'Pneumonia'),
(1589, 'J 67', 'Pneumonitis Hipersensitivity akibat abu organik'),
(1590, 'J 93', 'Pneumotoraks'),
(1591, 'D59.5', 'PNH ( parokimal noctumal hemoglobimuria)'),
(1592, 'M13.0', 'poli artritis'),
(1593, 'D45', 'policetimia vera'),
(1594, 'J98.4', 'policystic pam'),
(1595, 'Q69.9', 'polidektili'),
(1596, 'M35.3', 'polimialgia'),
(1597, 'G62.9', 'polineurpati'),
(1598, 'A 80', 'Poliomielitis akut'),
(1599, 'N84.1', 'polip cervikes'),
(1600, 'N84.0', 'polip endumetrium'),
(1601, 'D13.1', 'polip gaster'),
(1602, 'D13.1', 'polip gaster /stomach'),
(1603, 'D 12.6', 'Polip gastrointestinal'),
(1604, 'J33.9', 'polip nasi'),
(1605, 'K62.1', 'polip recti'),
(1606, 'K62.1', 'polip rectum'),
(1607, 'J33.8', 'pollip nasi'),
(1608, 'Q25.6', 'polmunal stenosis'),
(1609, 'J81', 'polmunari congestion'),
(1610, 'K63.1', 'porforasi sigmoid'),
(1611, 'K63.1', 'porforasi usus'),
(1612, 'K63.1', 'porfurasi ileum'),
(1613, 'K31.9', 'porpurasi gaster'),
(1614, 'J36', 'portionisilair infiltrat'),
(1615, 'F07.2', 'post concusison syndrome'),
(1616, 'N93.0', 'post congital bleding'),
(1617, 'Z98.8', 'post op apendictomy'),
(1618, 'Z98.8', 'post op strumectomy'),
(1619, 'Z93.3', 'post sigmoidectomy'),
(1620, 'Z93.3', 'post vcolostomy'),
(1621, 'O34.8', 'post veginal repair'),
(1622, 'J44.9', 'PPOM'),
(1623, 'O14.1', 'pre eklamsia brat'),
(1624, 'O14.9', 'pre eklamusia ringan'),
(1625, 'O60', 'prematur'),
(1626, 'P07.3', 'prematur bayi'),
(1627, 'N 47', 'Prepusium berlebih, fimosis dan parafimosis'),
(1628, 'O42.9', 'PRM'),
(1629, 'K62.8', 'proktitis'),
(1630, 'N81.4', 'prolap uteri'),
(1631, 'N 81', 'Prolaps alat kelamin perempuan'),
(1632, 'K62.9', 'prolaps anus'),
(1633, 'K91.4', 'prolaps colostomy'),
(1634, 'S05.2', 'prolaps iris'),
(1635, 'T85.3', 'prolaps mata '),
(1636, 'O34.5', 'prolaps tali pusat'),
(1637, 'K63.4', 'prolaps usus'),
(1638, 'N81.4', 'prolaps uteri ( tunggal pagiana)'),
(1639, 'O63.9', 'prolongud leten fase'),
(1640, 'H05.2', 'propthosis'),
(1641, 'N41.9', 'protatitis'),
(1642, 'J84.0', 'protenosis alveuler'),
(1643, 'A18.3+ K673*', 'prtonisis TBC'),
(1644, 'I60.9', 'PSA ( pendarahan sub arachnoid'),
(1645, 'M84.1', 'psaudar throsis'),
(1646, 'Z93.1', 'pseudophkia'),
(1647, 'F29', 'psikosis'),
(1648, 'M 07', 'Psoriasis dan artropati enteropati'),
(1649, 'M 10 - M 11', 'Psoriasis dan atropati lainnya'),
(1650, 'L40.1', 'psoriasis pustular'),
(1651, 'L40.0', 'psoriasis vulgenis'),
(1652, 'H11.8', 'psudo pteregium'),
(1653, 'H11.0', 'pteregium'),
(1654, 'O01.9', 'PTG ( penyakit tropobles ganas)'),
(1655, 'H02.4', 'ptisisc bulbi'),
(1656, 'H02.4', 'ptosis'),
(1657, 'N93.8', 'PUD'),
(1658, 'J98.4', 'pulmunal insufiensi'),
(1659, 'I27.9', 'PVC bigemini'),
(1660, 'N20.0', 'pyalolitasi'),
(1661, 'N12', 'pyelonepritis'),
(1662, 'N10', 'pyelonepritis acut'),
(1663, 'N11.9', 'pyolonepritis kronik'),
(1664, 'N13.6', 'pyoneprosus'),
(1665, 'M06.9', 'RA '),
(1666, 'A82.9', 'rabies'),
(1667, 'A 82', 'Rabies'),
(1668, 'N 71, N 74, N 75.8 - N 77', 'Radang alat dalam panggul perempuan lainnya (adneksitis)'),
(1669, 'H 00 - H 01', 'Radang kelopak mata'),
(1670, 'N 73', 'Radang panggul perempuan lainnya '),
(1671, 'N 72', 'Radang serviks'),
(1672, 'K11.6', 'ranala'),
(1673, 'I44.7', 'RBBB'),
(1674, 'P22.0', 'RDS'),
(1675, 'K75.2', 'reactur hepatitis'),
(1676, 'T78.2', 'reaksi anaphilactic'),
(1677, 'F44.9', 'reaksi conversi'),
(1678, 'F44.9', 'reaksi convrsi'),
(1679, 'E16.0', 'reaksi hipoglekimia '),
(1680, 'F43.0', 'reaksi stress acut'),
(1681, 'F 43.0, F 43.2-.9 F 45, F 48', 'Reaksi terhadap stres berat dan gangguan penyesuaian, gangguan somatoform, gangguan neurotik lainnya'),
(1682, 'C49.1', 'rebtomysarcoma cruris dextra'),
(1683, 'K62.5', 'rectal bleeding'),
(1684, 'P54.2', 'rectal bleeding bayi'),
(1685, 'N82.3', 'recto vagianal fistula'),
(1686, 'K21.9', 'reflex esofagus'),
(1687, 'K21.0', 'reflix esofagus'),
(1688, 'S05.8', 'reftur palpebra'),
(1689, 'S56.1', 'reftur tendon flexon digit'),
(1690, 'K06.8', 'refture alvecler '),
(1691, 'I77.2', 'refture artery'),
(1692, 'N83.8', 'refture tuba'),
(1693, 'S31.4', 'refture vagina'),
(1694, 'N28.8', 'ren mobilis'),
(1695, 'N23', 'renal colix'),
(1696, 'N19', 'renal fail'),
(1697, 'N19', 'renal nsipiensi'),
(1698, 'O70.9', 'reptum perineum (post partum )'),
(1699, 'S36.2', 'reptun pancereas traumatik'),
(1700, 'S05.3', 'reptur bola mata'),
(1701, 'S05.2', 'reptur cornea dengan prolap'),
(1702, 'S05.3', 'reptur cornea tampa prolaps'),
(1703, 'S36.1', 'reptur hepas '),
(1704, 'S86.0', 'reptur injuri tendon aciles'),
(1705, 'T14.6', 'reptur tendon'),
(1706, 'N36.8', 'reptur uretra non traumatik'),
(1707, 'S09.2', 'reptur uretra traumatik'),
(1708, 'O71.1', 'repture uteri'),
(1709, 'Z91.5', 'resiko ifeksi'),
(1710, '', 'respirasi puradokal'),
(1711, 'P22.9', 'respiratory distress bayi'),
(1712, 'J96.9', 'respiratory failure'),
(1713, 'P28.5', 'respiratory failure bayi '),
(1714, 'O72.0', 'rest. Placenta ( sisa placenta)'),
(1715, 'R33', 'retantio urine'),
(1716, 'F79', 'retar dasi mental'),
(1717, 'F 70 - F 79', 'Retardasi mental'),
(1718, 'R 33', 'retensi urin'),
(1719, 'C96.2', 'retino blastoma'),
(1720, 'Q55.2', 'retractile testis'),
(1721, 'H52.0', 'retraksi contas'),
(1722, 'K66,8', 'retropertioneal'),
(1723, 'N22', 'revtur VE'),
(1724, 'I09.9', 'RHD'),
(1725, 'M06.9', 'rhematoid'),
(1726, 'J31.0', 'rhinitis'),
(1727, 'J00', 'rhino paringitis'),
(1728, 'S31.4', 'robekan jalan lahir'),
(1729, 'B 06', 'Rubela'),
(1730, 'T14.6', 'ruftur muscolorum'),
(1731, 'S37.0', 'rufture lenkideney/ gijal'),
(1732, 'N09.0', 'rumah terbakar'),
(1733, 'S05.3', 'ruptur sclera'),
(1734, 'M46.1', 'sacro lleitis'),
(1735, 'I60.9', 'SAH ( sub aranoid hemoragic)'),
(1736, 'O32', 'salah letak'),
(1737, 'N 70', 'Salpingitis dan ooforitis'),
(1738, 'A 20', 'Sampar/Pes'),
(1739, 'I20.9', 'SAP ( stable anggia pastoris)'),
(1740, 'D21.1', 'sarcoma lengan '),
(1741, 'C55', 'sarcoma utery'),
(1742, 'J33.0', 'SBE'),
(1743, 'A49.9', 'SBP ( spontan bacterial peritonitis)'),
(1744, '', 'schizoprenia'),
(1745, 'J98.4', 'schwarte paru'),
(1746, 'S31.8', 'scizur abdomen penetrane'),
(1747, 'O62.1', 'scondery arrest'),
(1748, 'A18.4', 'scrof uloderma'),
(1749, 'W 20 - W 41, W 44 - W 64,', 'Sebab luar lainnya'),
(1750, 'H21.4', 'secclusio'),
(1751, '', 'seclusion pupil'),
(1752, 'O82.9', 'sectio'),
(1753, 'K04.3', 'secundarcan'),
(1754, 'B 92', 'Sekuele (gejala sisa) lepra'),
(1755, 'B 91', 'Sekuele (gejala sisa) poliomielitis'),
(1756, 'B 90.0 - .8', 'Sekuele (gejala sisa) TB lainnya'),
(1757, 'Z 36', 'Seleksi antenatal'),
(1758, 'A02.0', 'selmonikosis'),
(1759, 'C62.9', 'seminoma testis'),
(1760, 'X 60 - X 69', 'Sengaja mencederai diri dengan bahan beracun'),
(1761, 'X 70 - X 84', 'Sengaja mencederai diri lainnya'),
(1762, 'R 54', 'Senilitas'),
(1763, 'P06.9', 'sepsis bayi'),
(1764, 'O85', 'sepsis puerperalis'),
(1765, 'P36.9', 'sepsis seunatrium'),
(1766, 'M00.9', 'septic arteriris '),
(1767, 'A14.9', 'septic syok'),
(1768, 'A41.9', 'septicemia'),
(1769, 'A41.9', 'septikaimia'),
(1770, 'A 40 - A 41', 'Septisemia'),
(1771, 'R06.0', 'sesak'),
(1772, 'I61.9', 'SH ( struke hemorage)'),
(1773, 'A03.9', 'shigeloss'),
(1774, 'T78.2', 'shock anaphylatic'),
(1775, 'R57.1', 'shock hyvopelemic'),
(1776, 'N11.2', 'shymlaeparon'),
(1777, 'A 50', 'Sifilis bawaan'),
(1778, 'A 51', 'Sifilis dini     '),
(1779, 'A 52 - A 53', 'Sifilis lainnya   '),
(1780, 'A 03', 'Sigelosis'),
(1781, 'N55', 'sincope'),
(1782, 'F 04, F 07, F 09', 'Sindrom amnesik dan gangguan mental organik'),
(1783, 'Q03.1', 'sindrom dendy walcer'),
(1784, 'Q 90', 'Sindrom Down'),
(1785, 'K 76.7', 'Sindrom hepatorenal'),
(1786, 'F 50 - F 59', 'Sindrom makan, gangguan tidur, disfungsi seksual, gangguan perilaku lainnya'),
(1787, 'R 95', 'Sindrom mati mendadak pada bayi'),
(1788, 'N 00 - N 01', 'Sindrom nefritik progresif cepat dan akut'),
(1789, 'N 04', 'Sindrom nefrotik'),
(1790, 'B 90.9.2', 'Sindrom obstruksi pasca TB'),
(1791, 'G 81 - G 83', 'Sindrom paralitik lainnya'),
(1792, 'T 74', 'Sindrom salah perlakuan'),
(1793, 'K 58', 'Sindrom usus ringkih (Irritable bowel syndrome)'),
(1794, 'G 56.0', 'Sindroma carpal tunnel'),
(1795, 'I 73.0', 'Sindroma Raynaud’s'),
(1796, 'I64', 'sindrome batang otak'),
(1797, 'F07.2', 'sindrome concusion'),
(1798, 'G43.9', 'sindrome migren'),
(1799, 'I87.1', 'sindrome vena cava'),
(1800, 'J32.9', 'sinostis nasi'),
(1801, 'R00.1', 'sinus brodycardia'),
(1802, 'J32.9', 'sinus hati'),
(1803, 'Q18.1', 'sinus preacular'),
(1804, 'J 32', 'Sinusitis kronik'),
(1805, 'Z41.2', 'sircumsisi'),
(1806, 'K 74.6', 'Sirosis hati'),
(1807, 'N 30', 'Sistitis'),
(1808, 'L98.9', 'skin tag'),
(1809, 'B 65', 'Skistosomiasis (Bilharziasis)'),
(1810, 'F 20, F 21, F 23', 'Skizofrenia, gangguan skizotipal, psikotik akut dan sementara'),
(1811, 'G 35', 'Sklerosis multipel'),
(1812, 'L93.0', 'SLE'),
(1813, 'T63.0', 'snake bite'),
(1814, 'I63.9', 'SNH ( struke non hemorage)'),
(1815, '', 'socet dangkal'),
(1816, 'R57.0', 'sock cardiogenic'),
(1817, 'R900', 'SOL'),
(1818, 'M41.9', 'Soliausis'),
(1819, 'O 45', 'Solusio plasenta'),
(1820, 'O43.3', 'solutio placenta'),
(1821, 'R90.0', 'SOP'),
(1822, 'Q05.9', 'spina bepida '),
(1823, 'Q 05', 'Spina bifida'),
(1824, 'M46.9', 'spondilitis'),
(1825, 'M 45 - M 49', 'Spondiloartropati seronegatif'),
(1826, 'M43.1', 'spondilolisthesis'),
(1827, 'M47.9', 'spondilosis'),
(1828, 'C69.9', 'squemus cell ca.orbita'),
(1829, 'I47.1', 'Supraventricular tachycardia'),
(1830, 'N20.0', 'staghum stone ( calculus)'),
(1831, 'J 46', 'Status Asmatikus'),
(1832, 'J46', 'status asmeticus'),
(1833, 'G44.0', 'status convcilisive'),
(1834, 'G41.9', 'status epileptikus'),
(1835, '', 'stenosis jejunum'),
(1836, 'Q64.3', 'stenosis oni'),
(1837, '', 'stenosis pylorus'),
(1838, 'M48.0', 'stenosis spinalis'),
(1839, 'N35.9', 'stenosis ureter'),
(1840, 'K12.1', 'stomatitis'),
(1841, 'H 49 - H 50', 'Strabismus'),
(1842, 'K27.9', 'strees ulcer'),
(1843, 'K27.9', 'stres ulcus'),
(1844, 'K62.4', 'stricture ani/anus'),
(1845, 'N35.9', 'stricture uretra '),
(1846, 'I 64', 'Strok tak menyebut perdarahan atau infark'),
(1847, 'I64', 'stroke'),
(1848, 'E05.2', 'stroma hipertiroid'),
(1849, '', 'stroma hypertyroid'),
(1850, 'E04.9', 'stroma nodusa'),
(1851, 'E05.0', 'struma difuse tocxic'),
(1852, 'E04.2', 'struma multi nodusa '),
(1853, 'E05.2', 'struma nodusa hypertiroid'),
(1854, 'E04.9', 'struma nodusa non toxix'),
(1855, 'E05.1', 'struma nudusa toxix'),
(1856, 'E04.2', 'struma systic'),
(1857, 'E04.1', 'struma uni nadular non toxic'),
(1858, 'D14.3', 'STU parn'),
(1859, '', 'sub dural hematoma non traumatik'),
(1860, '', 'sub dural hematoma SDH'),
(1861, '', 'sub dural hematoma traumatik'),
(1862, 'I51.9', 'sub endo miocard'),
(1863, 'I21.4', 'sub endocaroio infarak'),
(1864, 'R96.0', 'suden death'),
(1865, 'H 34', 'Sumbatan vaskular retina'),
(1866, 'H11.2', 'sumbilofiron'),
(1867, 'I47.1', 'SVT ( supra venticuler tachicandila)'),
(1868, 'Q74.2', 'sympus'),
(1869, 'R55', 'syncope'),
(1870, 'Q70.9', 'syndaktily'),
(1871, 'G45.0', 'syndrom vertevro basiler'),
(1872, 'G61.0', 'syndrome barre guillain SGB'),
(1873, 'G25.9', 'syndrome extra pramidal'),
(1874, '', 'syndrome frontal lobe'),
(1875, 'G43.9', 'syndrome migrain'),
(1876, 'N04.8', 'syndrome nefhrotic '),
(1877, 'F06.9', 'syndrome otak organik'),
(1878, 'G45.0', 'syndrome vertebro basiler'),
(1879, 'H21.5', 'synechia/perlekatan mata'),
(1880, 'N57.9', 'syock'),
(1881, 'A53.9', 'sypilis'),
(1882, 'R00.0', 'tacicandia'),
(1883, 'A71.9', 'tacom'),
(1884, 'D56.9', 'talasemia'),
(1885, 'P02.4', 'tali pusat menimbung'),
(1886, 'L81.8', 'tatto'),
(1887, 'W70.0', 'tenggelam dikali'),
(1888, 'G44.2', 'tension head ache'),
(1889, 'X 00 - X 09', 'Terdedah asap, api dan uap'),
(1890, 'X 30 - X 39', 'Terdedah faktor alam'),
(1891, 'W20.0', 'tertimpa besi'),
(1892, 'Q 53', 'Testis tidak turun'),
(1893, 'A35', 'tetanus ( cephalic)'),
(1894, 'A 34 - A 35', 'Tetanus lainnya'),
(1895, 'A 33', 'Tetanus neonatorum'),
(1896, 'A33', 'tetanus neunatrium'),
(1897, 'Q21.3', 'tetralogi falot'),
(1898, 'M31.4', 'thalogasus'),
(1899, 'A01.0', 'thypoid fefer /abdominalis'),
(1900, 'O89.2', 'thyroglosal persistent'),
(1901, 'G45.9', 'TIA'),
(1902, 'Q 41', 'Tidak ada, atresia dan stenosis usus halus'),
(1903, 'G93.2', 'TIK'),
(1904, 'E 06', 'Tiroiditis'),
(1905, 'E06.3', 'tiroiditis hasimoto'),
(1906, 'E 05', 'Tirotoksikosis (hipertiroidisme)'),
(1907, 'R25.2', 'tismus'),
(1908, 'A33', 'tismus bayi'),
(1909, 'D33.0', 'to eccipital '),
(1910, 'G 92', 'Toksik insefalopati'),
(1911, 'B 58', 'Toksoplasmosis'),
(1912, 'J03.9', 'tonsilitis acut'),
(1913, 'J 03', 'Tonsilitis akut'),
(1914, 'J35.0', 'tonsilitis cronic'),
(1915, 'J06.8', 'tonsilo phanngitis'),
(1916, 'N44', 'torsi tersis D'),
(1917, 'M43.6', 'torticolis'),
(1918, 'J45.9', 'total blok'),
(1919, 'J04.1', 'traceitis acut'),
(1920, 'J39.8', 'traceomalacea '),
(1921, 'A 71', 'Trakoma'),
(1922, 'M67.3', 'transien synoritis'),
(1923, 'G82.5', 'traptorasre/tetraplegia'),
(1924, 'N28.9', 'trauma ginjal'),
(1925, 'S39.0', 'trauma pelvis'),
(1926, 'B 56 - B 57', 'Tripanosomiasis'),
(1927, 'A 15.0', 'Tuberkulosis (TB) paru BTA (+) dengan/ tanpa biakan kuman TB'),
(1928, 'A 16.3 - .9', 'Tuberkulosis alat napas lainnya'),
(1929, 'A  18.1, .3 - .8', 'Tuberkulosis lainnya'),
(1930, 'A 19', 'Tuberkulosis milier'),
(1931, 'A 15.1 - A 16.2', 'Tuberkulosis paru lainnya'),
(1932, 'A 17.1 - .9', 'Tuberkulosis susunan saraf pusat lainnya'),
(1933, 'A 18.0', 'Tuberkulosis tulang dan sendi'),
(1934, 'K 25 - K 27', 'Tukak lambung dan duodenum'),
(1935, 'D12.9', 'tumor anus'),
(1936, 'D12.0', 'tumor ceacum'),
(1937, 'D13.1', 'tumor gaster'),
(1938, 'D36.7', 'tumor glutea'),
(1939, 'C76.3', 'tumor glutea malignom'),
(1940, 'D48.0', 'tumor gusi '),
(1941, 'D13.1 ', 'tumor kantong empedu'),
(1942, 'C51.0', 'tumor labio mayora'),
(1943, 'D14.1', 'tumor laring ( paru)'),
(1944, 'C69', 'tumor mata'),
(1945, 'D16.4', 'tumor maxilla'),
(1946, 'O36.7', 'tumor meilum'),
(1947, 'D31.6', 'tumor orbit'),
(1948, 'O27', 'tumor ovari'),
(1949, 'C05.9', 'tumor palatum'),
(1950, 'D11.0', 'tumor parotis ( preaucular)'),
(1951, 'C49.0', 'tumor soft tissue ( ganas)'),
(1952, 'D11.7', 'tumor sub mandibula'),
(1953, 'D36.7', 'tumor tulang dada IGA'),
(1954, 'E05.9', 'tyrotoxi cosis'),
(1955, 'J 34.8', 'Ulcus mucosa hidung & perforasi septum nasi'),
(1956, 'N 20 - N 23', 'Urolitiasis'),
(1957, 'B 01 - B 02', 'Varisela (cacar air) dan zoster (herpes zoster)'),
(1958, 'I 85', 'Varises esofagus'),
(1959, 'R58', 'Haemorrhage, not elsewhere classified( pendarahan)'),
(1960, '1960', 'Varises vena ekstremitas bawah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` int(3) NOT NULL,
  `nama_bidang` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`) VALUES
(1, 'Paramedis'),
(2, 'Apotek'),
(3, 'Administrasi'),
(5, 'Bendahara'),
(6, 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosa_penyakit`
--

CREATE TABLE `tbl_diagnosa_penyakit` (
  `kode_diagnosa` varchar(6) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `ciri_ciri_penyakit` text NOT NULL,
  `keterangan` text NOT NULL,
  `ciri_ciri_umum` text NOT NULL,
  `nama_poli` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_diagnosa_penyakit`
--

INSERT INTO `tbl_diagnosa_penyakit` (`kode_diagnosa`, `nama_penyakit`, `ciri_ciri_penyakit`, `keterangan`, `ciri_ciri_umum`, `nama_poli`) VALUES
('Db-37', 'Diabetes', 'Kebanyakan Gula Darah', 'Penyakit Tingkat Tinggi', 'Kebanyakan Gula Darah', 'POLI UMUM'),
('Gg-39', 'Gigi Berlubang', 'Mengalami Linu DI Gigi', 'Penyakit Bagian Mulut', 'Mengalami Linu DI Gigi', 'POLI GIGI'),
('HB-39', 'Hidung Bengkak', 'Alergi Obat', 'Penyakit Tingkat Menengah', 'Hidung Berwarna Kemerahan', 'POLI GIGI'),
('KR-292', 'Mata Rabun', 'Mata Mengalami Sedikit Pergeseran Di Bagian Retina', 'Penyakit Tingkat Tinggi', 'Mata Mengalami Penurunan Penglihatan', 'LABORATORIUM'),
('Kt-18', 'Cacar', 'Gatal', 'Berbahaya', 'Gatal', 'POLI UMUM'),
('S-9956', 'Kirarawit', 'Kulit Berwarna Bercak Kemerahan', 'Penyakit Ini Berhubungan Dengan Saraf', 'Kulit Berwarna Bercak Kemerahan', 'POLI UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `kode_dokter` varchar(4) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nomor_induk_dokter` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_poli` varchar(2) NOT NULL,
  `no_telp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kode_dokter`, `nama_dokter`, `jenis_kelamin`, `nomor_induk_dokter`, `tempat_lahir`, `tgl_lahir`, `alamat`, `id_poli`, `no_telp`) VALUES
('D11', 'Irawan', 'Laki-Laki', '13242334', 'Malang', '01-02-1996', 'akjdlkajlkdad', '2', '198237918731'),
('S-24', 'Maryudi', 'Laki-Laki', '71816838888718', 'Cepu', '21-08-1993', 'Santiong', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hak_akses`
--

CREATE TABLE `tbl_hak_akses` (
  `id` int(2) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hak_akses`
--

INSERT INTO `tbl_hak_akses` (`id`, `id_user_level`, `id_menu`) VALUES
(19, 1, 3),
(30, 1, 2),
(31, 1, 10),
(32, 1, 11),
(33, 1, 12),
(34, 1, 13),
(35, 1, 14),
(36, 1, 15),
(37, 1, 16),
(38, 1, 17),
(39, 1, 18),
(40, 1, 19),
(41, 1, 20),
(42, 1, 21),
(43, 1, 1),
(44, 1, 22),
(45, 1, 23),
(46, 1, 24),
(47, 1, 9),
(48, 1, 25),
(49, 1, 26),
(50, 1, 27),
(51, 1, 28),
(52, 1, 29),
(53, 1, 30),
(54, 1, 31),
(55, 1, 32),
(56, 1, 33),
(57, 1, 34),
(58, 1, 35),
(59, 1, 36),
(60, 1, 40),
(61, 1, 37),
(62, 1, 38),
(63, 1, 39),
(64, 1, 41),
(65, 1, 42),
(66, 1, 43),
(67, 1, 44),
(68, 1, 46),
(72, 2, 21),
(74, 2, 23),
(76, 1, 47),
(77, 1, 48),
(78, 1, 49),
(80, 3, 36),
(81, 1, 50),
(85, 5, 33),
(86, 5, 31),
(87, 5, 29),
(88, 3, 33),
(90, 4, 46),
(92, 4, 40),
(93, 4, 39),
(94, 4, 38),
(95, 4, 37),
(96, 4, 36),
(97, 4, 31),
(98, 4, 50),
(99, 1, 52),
(100, 10, 1),
(101, 10, 2),
(102, 10, 19),
(103, 3, 50),
(104, 15, 50),
(105, 14, 50),
(106, 13, 50),
(107, 12, 50),
(108, 11, 50),
(109, 1, 53),
(110, 1, 54),
(111, 1, 55),
(112, 1, 56),
(113, 1, 57),
(115, 14, 43),
(117, 13, 34),
(118, 13, 36),
(119, 18, 1),
(120, 18, 3),
(121, 18, 33),
(122, 18, 34),
(123, 18, 36),
(124, 18, 40),
(125, 18, 46),
(126, 18, 53),
(127, 18, 52),
(128, 18, 50),
(129, 12, 1),
(130, 12, 3),
(131, 12, 29),
(132, 12, 33),
(133, 12, 36),
(134, 12, 40),
(135, 12, 46),
(137, 12, 53),
(138, 12, 54),
(139, 12, 52),
(140, 12, 55),
(141, 19, 15),
(142, 19, 19),
(143, 19, 20),
(144, 19, 21),
(145, 19, 27),
(146, 5, 54),
(147, 5, 56),
(148, 5, 57),
(149, 5, 52),
(150, 12, 31),
(151, 12, 34),
(152, 20, 31),
(153, 20, 33),
(154, 20, 37),
(155, 20, 52),
(156, 1, 58),
(157, 1, 59);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Staff Apotek'),
(2, 'Staff Administrasi'),
(3, 'Kepala Puskesmas'),
(4, 'Staff Paramedis'),
(5, 'house keeping');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_praktek_dokter`
--

CREATE TABLE `tbl_jadwal_praktek_dokter` (
  `id_jadwal` int(2) NOT NULL,
  `hari` varchar(13) NOT NULL,
  `loket` varchar(13) NOT NULL,
  `pelayanan` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal_praktek_dokter`
--

INSERT INTO `tbl_jadwal_praktek_dokter` (`id_jadwal`, `hari`, `loket`, `pelayanan`) VALUES
(11, 'Sabtu', '07.00 - 10.00', '08.00 - 12.00'),
(12, 'Jumat', '07.00 - 10.00', '08.00 - 11.00'),
(13, 'Senin - Kamis', '07.00 - 12.00', '08.00 - 14.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `kode_kamar` varchar(20) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `kelas_kamar` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`kode_kamar`, `nama_kamar`, `kelas_kamar`, `kapasitas`, `harga`, `stok`) VALUES
('K01', 'MELATI', 'Ekonomi', 4, 120000, 0),
('K02', 'KENANGA', 'Ekonomi', 4, 120000, 0),
('K03', 'SAKURA', 'Ekonomi', 4, 120000, 1),
('K04', 'ANGGREK', 'Ekonomi', 3, 120000, 1),
('K05', 'MAWAR', 'Ekonomi', 4, 120000, 1),
('K06', 'LAVENDA', 'Ekonomi', 4, 120000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kesehatan_ibu_anak`
--

CREATE TABLE `tbl_kesehatan_ibu_anak` (
  `id_kia` int(5) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `nama_operasi` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `ditangani_oleh` enum('dokter','petugas','dokter dan petugas') NOT NULL,
  `dibayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `keterangan` varchar(13) NOT NULL,
  `tgl_tindakan` varchar(10) NOT NULL,
  `jam_tindakan` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kesehatan_ibu_anak`
--

INSERT INTO `tbl_kesehatan_ibu_anak` (`id_kia`, `nama_pasien`, `no_bpjs`, `status_pasien`, `nama_operasi`, `biaya`, `ditangani_oleh`, `dibayar`, `kembalian`, `keterangan`, `tgl_tindakan`, `jam_tindakan`) VALUES
(11, 'Yulia', 'Yulia', 'Umum', 'Penanganan Persalinan', 180000, 'dokter', 200000, 20000, 'Berbayar', '26-07-2018', '00:00:00'),
(12, 'Maulida Fitria', 'Maulida Fitria', 'BPJS', 'Pemeriksaan Ibu Hamil', 0, 'dokter', 0, 0, 'Gratis', '26-07-2018', '00:00:00'),
(13, 'Yulia', 'Yulia', 'BPJS', 'Pemeriksaan Ibu Hamil', 0, 'dokter', 0, 0, 'Gratis', '27-07-2018', '00:00:00'),
(14, 'Diana', 'Diana', 'BPJS', 'Penanganan Persalinan', 0, 'dokter', 0, 0, 'Gratis', '30-07-2018', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laboratorium`
--

CREATE TABLE `tbl_laboratorium` (
  `id_lab` int(3) NOT NULL,
  `nama_alat_lab` varchar(50) NOT NULL,
  `jenis_alat_lab` varchar(50) NOT NULL,
  `status_alat_lab` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(30) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `is_main_menu` int(3) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL COMMENT 'y=yes,n=no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `title`, `url`, `icon`, `is_main_menu`, `is_aktif`) VALUES
(1, 'DATA MENU', 'kelolamenu', 'fa fa-server', 22, 'y'),
(2, 'KELOLA PENGGUNA', 'user', 'fa fa-user-o', 0, 'y'),
(3, 'level PENGGUNA', 'userlevel', 'fa fa-users', 0, 'y'),
(15, 'DATA PARAMEDIS', 'paramedis', 'fa fa-graduation-cap', 22, 'y'),
(19, 'DATA JABATAN', 'jabatan', 'fa fa-area-chart', 22, 'y'),
(20, 'DATA BIDANG', 'bidang', 'fa fa-user-circle', 22, 'y'),
(21, 'DATA PEGAWAI', 'pegawai', 'fa fa-user-circle', 0, 'y'),
(22, 'DATA MASTER', '#', 'fa fa-id-card', 0, 'y'),
(23, 'DATA POLI', 'poli', 'fa fa-bed', 22, 'y'),
(27, 'DATA DOKTER', 'dokter', 'fa fa-graduation-cap', 0, 'y'),
(29, 'JADWAL RAWAT JALAN', 'jadwalpraktek', 'fa fa-calendar', 0, 'y'),
(31, 'DATA PASIEN', 'pasien', 'fa fa-user', 0, 'y'),
(33, 'DATA PENDAFTARAN', 'pendaftaran', 'fa fa-sign-in', 0, 'y'),
(34, 'DATA DIAGNOSA', 'diagnosa', 'fa fa-id-card', 0, 'y'),
(36, 'DATA TINDAKAN', 'tindakan', 'fa fa-flask', 0, 'y'),
(37, 'STOK OBAT', 'stokobat', 'fa fa-bed', 40, 'y'),
(38, 'PENGADAAN OBAT', 'pengadaanobat', 'fa fa-bed', 40, 'y'),
(39, 'PENGELUARAN OBAT', 'pengeluaranobat', 'fa fa-calendar', 40, 'y'),
(40, 'DATA OBAT', 'dataobat', 'fa fa-card', 0, 'y'),
(41, 'DATA SUPPLIER', 'supplier', 'fa fa-bed', 0, 'y'),
(42, 'DATA OPERASI', 'operasi', 'fa fa-bed', 44, 'y'),
(43, 'Penanganan Operasi', 'penangananoperasi', 'fa fa-card', 44, 'y'),
(44, 'DATA TIND. OPERASI', '#', 'fa fa-bed', 0, 'y'),
(46, 'DATA OBAT-OBATAN', 'dataobat', 'fa fa-user', 40, 'y'),
(48, 'DATA POLI KIA', 'polikia', 'fa fa-graduation-cap', 0, 'n'),
(49, 'DATA PERBAIKAN GIZI', 'perbaikangizi', 'fa fa-user', 0, 'y'),
(50, 'DATA TINDAKAN BEROBAT', 'tindakanberobat/index', 'fa fa-graduation-cap', 0, 'y'),
(52, 'Pembayaran', 'kasir', 'fa fa-bed', 0, 'y'),
(53, 'DATA ICD', 'dataicd', 'fa fa-bed', 22, 'y'),
(54, 'DATA RAWAT INAP', '#', 'fa fa-bed', 0, 'y'),
(55, 'DATA KAMAR', 'datakamar', 'fa fa-user', 54, 'y'),
(56, 'PASIEN RAWAT INAP', 'rawatinap/index', 'fa fa-user', 54, 'y'),
(57, 'DATA SEWA KAMAR', 'pengeluarankamar', 'fa fa-bed', 54, 'y'),
(58, 'OBAT NON PASIEN', 'obatnonpasien', 'fa fa-user', 40, 'y'),
(59, 'Penanggung', 'penanggung', 'fa fa-user', 40, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(40) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `satuan`, `harga_jual`) VALUES
('A-282', 'Anexsamol', 'Kapsul', '2x1 Sehari', 'Strip', 2000),
('A-989', 'Salicyl', 'Bedak', '3 x 1 sehari', 'Buah', 3000),
('acycs', 'Acyclovir SK 5%', 'tube', '3x1', 'tube', 10000),
('B12', 'Boderexin', 'Tablet', '3x1', 'Butir', 12000),
('bo67', 'bodrex', 'Tablet', '3x1', 'Butir', 15000),
('D-118', 'Dextrane', 'Tablet', '3x1 Sehari', 'Strip', 5000),
('P-332', 'PoliSaxechon', 'Cairan Alkohol', 'Setiap pakai 10 ml', 'Botol', 2000),
('P11', 'Parachetamol', 'Kapsul', '3x1', 'Butir', 12000),
('PG-58', 'Pil Vitamin A', 'Suplemen', '3 x 1 Sehari', 'Strip', 1000),
('SD-65', 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 'Botol ', 10000),
('U11', 'Ultraflu', 'Tablet', '3x1', 'Butir', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obatnonpasien`
--

CREATE TABLE `tbl_obatnonpasien` (
  `id_obatnonpasien` varchar(6) NOT NULL,
  `no_trans` varchar(15) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tgl_transaksi` varchar(10) NOT NULL,
  `kode_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obatnonpasien`
--

INSERT INTO `tbl_obatnonpasien` (`id_obatnonpasien`, `no_trans`, `supplier`, `kode_obat`, `nama_obat`, `jenis_obat`, `jumlah`, `keterangan`, `satuan`, `tgl_transaksi`, `kode_ruang`) VALUES
('1', 'B-190312-1', 'Randra', 'A-989', 'Salicyl', 'Bedak', 1, 'a', 'Buah', '12-03-2019', 'PU1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operasi`
--

CREATE TABLE `tbl_operasi` (
  `kode_operasi` varchar(6) NOT NULL,
  `nama_operasi` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `tindakan_oleh` enum('dokter','petugas','dokter dan petugas','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_operasi`
--

INSERT INTO `tbl_operasi` (`kode_operasi`, `nama_operasi`, `biaya`, `tindakan_oleh`) VALUES
('A-3494', 'Penanganan Luka Memar', 50000, 'dokter'),
('BJ-191', 'Pemeriksaan Katarak', 75000, 'dokter'),
('IA-282', 'Pemeriksaan Polio', 80000, 'dokter'),
('IA-383', 'Penanganan Persalinan', 180000, 'dokter dan petugas'),
('IA-878', 'Pemeriksaan Ibu Hamil', 75000, 'dokter'),
('L-4839', 'Luka Jahit', 95000, 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paramedis`
--

CREATE TABLE `tbl_paramedis` (
  `kode_paramedis` varchar(4) NOT NULL,
  `nama_paramedis` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_izin_paramedis` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `id_poli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paramedis`
--

INSERT INTO `tbl_paramedis` (`kode_paramedis`, `nama_paramedis`, `jenis_kelamin`, `no_izin_paramedis`, `tempat_lahir`, `tanggal_lahir`, `alamat_tinggal`, `id_poli`) VALUES
('A-12', 'Aulia Mustika Putri', 'Perempuan', '29829822291', 'Bandung', '24-07-1988', 'Klari', 2),
('P-35', 'Lucky Ardi Wijaya', 'Laki-Laki', '29829823991', 'Jogjakarta', '18-03-1991', 'Wadas', 1),
('P-49', 'Marcel Ali Wijaya', 'Laki-Laki', '29829829291', 'Karawang', '19-07-1988', 'Rengas Dengklok', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `no_rekamedis` char(6) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(25) NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`no_rekamedis`, `no_ktp`, `no_bpjs`, `nama_pasien`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `desa`, `status_pasien`, `no_telp`, `password`) VALUES
('000003', '3335021831771822', '28287188196156', 'Muhammad Yogi', 'L', 'Surabaya', '09-02-1993', 'okkk', '', 'BPJS', '', ''),
('000004', '3215089831777722', '28287188196139', 'Yulia', 'P', 'Cicaheum', '06-07-1994', 'Serdang', '', 'BPJS', '', ''),
('000005', '3015021831271822', '28287188196145', 'Diana', 'P', 'See Do Are Jo', '09-07-1995', 'CKM', '', 'BPJS', '', ''),
('000006', '3015021899271822', '28287134996145', 'Maulida Fitria', 'P', 'Karawang', '26-12-1984', 'Jatirasa', '', 'BPJS', '', ''),
('000007', '3218291973381903', '28287188096166', 'Rian', 'L', 'Kuningan', '18-07-1978', 'Kosambi', '', 'BPJS', '', ''),
('000008', '3349021991771822', '-', 'Maulana', 'L', 'Lamongan', '19-03-1999', 'Pamelang', '', 'Umum', '', ''),
('000009', '32836273283672', '-', 'Alif', 'L', 'Ngunut', '30-03-2019', 'Nguns, Tals', '', 'Umum', '', ''),
('000010', '12345', '12345', 'Andi Novan', 'L', 'Pasuruan', '01-03-2019', 'jalan', '', 'BPJS', '', ''),
('000011', '6252625', '', 'Ndun', 'L', 'Ngujang', '14-03-2019', 'Ngujang', '', 'BPJS', '', ''),
('000012', '12345636547647', '-', 'Chandra', 'L', 'Pasuruan', '02-03-2019', 'aa', 'Besuki', 'Umum', '082334197238', 'chandra'),
('000013', '12345636547647', '32423523', 'Yusuf', 'L', 'Pasuruan', '01-01-2020', 'hh', 'Masaran', 'BPJS', '6643', 'yusuf'),
('000015', '12345678', '-', 'Thomas', 'L', 'Lumajang', '11-06-1985', 'jalan bla bla bla bla bla', 'Sobo', 'Umum', '123456789', '12345678'),
('000016', '888978979079686', '', 'Randra', 'L', 'Pasuruan', '28-01-2019', 'FGDG', 'Bangun', 'BPJS', '76576576554', '123'),
('000017', '9449499494', '', 'Tara', 'L', 'Malang', '08-03-2014', 'Uwuwwu', 'Bangun', 'BPJS', '099877', '123'),
('000018', '6357162537123', '-', 'Adi doank', 'L', 'bangun', '05-02-1996', 'jalan bla bla bla bla', 'Bangun', 'Umum', '625371523', '12345678'),
('000019', '65765', '-', 'toyo doank', 'L', 'trenggalek', '31-12-2006', 'hgjhgjhg', 'Besuki', 'Umum', '65654654', '12345678'),
('000020', '9873984579384543', '-', 'hildan', 'L', 'Malang', '01-02-1984', 'Jl. Candi Panggung No. 3A', 'Ngulungwetan', 'Umum', '98762983434', '12345678'),
('000021', 'o9798734345', '-', 'andiiiii', 'L', 'uhkjh', '01-03-2019', 'jjhgh', 'Craken', 'Umum', '87687634', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_jabatan` int(2) NOT NULL,
  `id_bidang` int(3) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `no_kepeg` varchar(30) NOT NULL,
  `status_kepeg` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penanganan_operasi`
--

CREATE TABLE `tbl_penanganan_operasi` (
  `id_penanganan` int(5) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `nama_operasi` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `ditangani_oleh` enum('dokter','petugas','dokter dan petugas','') NOT NULL,
  `dibayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `keterangan` varchar(13) NOT NULL,
  `tgl_operasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penanganan_operasi`
--

INSERT INTO `tbl_penanganan_operasi` (`id_penanganan`, `nama_pasien`, `no_bpjs`, `status_pasien`, `nama_operasi`, `biaya`, `ditangani_oleh`, `dibayar`, `kembalian`, `keterangan`, `tgl_operasi`) VALUES
(9, 'Fitri', 'Fitri', 'Umum', 'Pemeriksaan Polio', 80000, 'dokter', 100000, 20000, 'Berbayar', '24-07-2018'),
(10, 'Oman', 'Oman', 'Umum', 'Pemeriksaan Polio', 80000, 'dokter', 130000, 50000, 'Berbayar', '26-07-2018'),
(11, 'Niko Rahmad', 'Niko Rahmad', 'Umum', 'Pemeriksaan Katarak', 75000, 'dokter', 100000, 25000, 'Berbayar', '26-07-2018'),
(12, 'Diana', 'Diana', 'BPJS', 'Pemeriksaan Katarak', 0, 'dokter', 0, 0, 'Gratis', '26-07-2018'),
(13, 'Muhammad Yogi', 'Muhammad Yogi', 'Umum', 'Pemeriksaan Polio', 80000, 'dokter', 100000, 20000, 'Berbayar', '26-07-2018'),
(14, 'Mehmet', 'Mehmet', 'BPJS', 'Luka Jahit', 0, 'dokter', 0, 0, 'Gratis', '26-07-2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `no_registrasi` varchar(4) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `kode_dokter_penanggung_jawab` varchar(4) NOT NULL,
  `id_poli` varchar(2) NOT NULL,
  `nama_penanggung_jawab` varchar(30) NOT NULL,
  `hubungan_dengan_penanggung_jawab` varchar(30) NOT NULL,
  `alamat_penanggung_jawab` text NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `status_periksa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`no_registrasi`, `no_rawat`, `no_rekamedis`, `tanggal_daftar`, `kode_dokter_penanggung_jawab`, `id_poli`, `nama_penanggung_jawab`, `hubungan_dengan_penanggung_jawab`, `alamat_penanggung_jawab`, `status_pasien`, `no_bpjs`, `status_periksa`) VALUES
('0001', '2018-07-27-0001', '000002', '2018-07-27', 'S-23', '1', 'Suarez', 'Orang Tua', 'Barcelona', 'Umum', '-', ''),
('0002', '2018-07-27-0002', '000004', '2018-07-27', 'K-12', '2', 'Michelle', 'Saudara Kandung', 'Adiarsa', 'BPJS', '28287188196139', ''),
('0001', '2018-07-30-0001', '000005', '2018-07-30', 'K-12', '4', 'Arif', 'Saudara Kandung', 'Teljam', 'BPJS', '28287188196145', ''),
('0001', '2019-03-02-0001', '000011', '2019-03-02', 'S-23', '1', 'candra', 'Saudara Kandung', 'ndun', 'BPJS', '12345', ''),
('0002', '2019-03-02-0002', '000009', '2019-03-02', 'K-02', '2', 'Aura Kanza', 'Orang Tua', 'Ngujang', 'BPJS', '-', ''),
('0003', '2019-03-02-0003', '000005', '2019-03-02', 'K-02', '1', 'Aura', 'Saudara Kandung', 'Malang', 'BPJS', '28287188196145', ''),
('0001', '2019-03-04-0001', '000004', '2019-03-04', 'K-02', '1', 'ss', 'Orang Tua', 'aa', 'BPJS', '28287188196139', 'Sudah Diperiksa'),
('0001', '2019-03-05-0001', '000003', '2019-03-05', 'K-12', '1', 'yy', 'Orang Tua', 'tt', 'BPJS', '28287188196156', 'Sudah Diperiksa'),
('0002', '2019-03-05-0002', '000012', '2019-03-05', 'S-24', '7', 'uu', 'Saudara Kandung', 'ss', 'Umum', '-', 'Sudah Diperiksa'),
('0001', '2019-03-06-0001', '000012', '2019-03-06', 'K-12', '1', 'ss', 'Saudara Kandung', 'aa', 'Umum', '-', 'Lunas'),
('0002', '2019-03-06-0002', '000012', '2019-03-06', 'IA-0', '2', 'ss', 'Saudara Kandung', 'ii', 'Umum', '-', 'Sudah Diperiksa'),
('0003', '2019-03-06-0003', '000013', '2019-03-06', 'K-02', '1', 'aa', 'Saudara Kandung', 'ii', 'BPJS', '32423523', 'Belum Diperiksa'),
('0001', '2019-03-07-0001', '000013', '2019-03-07', 'S-24', '2', 'hgdjahgdsasd', 'Orang Tua', 'aljdlajd', 'Umum', '32423523', 'Lunas'),
('0002', '2019-03-07-0002', '000006', '2019-03-07', 'IA-0', '2', 'hgdjahgdsasd', 'Saudara Kandung', 'asdjkhkhasd', 'BPJS', '28287134996145', 'Lunas'),
('0003', '2019-03-07-0003', '000009', '2019-03-07', 'D11', '2', 'ajsdkjhasd', 'Orang Tua', 'llkahsdkjahsd', 'Umum', '-', 'Lunas'),
('0004', '2019-03-07-0004', '000012', '2019-03-07', 'D11', '2', 'asdasd', 'Orang Tua', 'sadasd', 'Umum', '-', 'Lunas'),
('0005', '2019-03-07-0005', '000015', '2019-03-07', 'D11', '2', 'laksd', 'Saudara Kandung', 'lkasdlkasd', 'Umum', '-', 'Sudah Diperiksa'),
('0006', '2019-03-07-0006', '000016', '2019-03-07', 'S-24', '7', 'rtrt', 'Saudara Kandung', 'ytutu', 'BPJS', '454565', 'Lunas'),
('0007', '2019-03-07-0007', '000017', '2019-03-07', 'S-24', '2', 'Baba', 'Orang Tua', 'Jwjwiwjw', 'BPJS', '', 'Lunas'),
('0002', '2019-03-08-0002', '000018', '2019-03-08', 'S-24', '1', 'ksjhdkfh', 'Saudara Kandung', 'sifyisuyfsd', 'BPJS', '-', 'Sudah Diperiksa'),
('0003', '2019-03-08-0003', '000019', '2019-03-08', 'D11', '2', 'hgfhfg', 'tetangga', 'gfhgfhgf', 'Umum', '-', 'Sudah Diperiksa'),
('0004', '2019-03-08-0004', '000010', '2019-03-08', 'D11', '2', 'ytuytu', 'Orang Tua', 'jhgjhg', 'BPJS', '12345', 'Sudah Diperiksa'),
('0005', '2019-03-08-0005', '000003', '2019-03-08', 'S-24', '4', 'jhgjhg', 'Orang Tua', 'hgfh', 'BPJS', '28287188196156', 'Sudah Diperiksa'),
('0006', '2019-03-08-0006', '000006', '2019-03-08', 'D11', '2', 'randra', 'Orang Tua', 'lkajsdlkjasd', 'BPJS', '28287134996145', 'Sudah Diperiksa'),
('0001', '2019-03-11-0001', '000020', '2019-03-11', 'D11', '2', 'asdjhasd', 'tetanggajahkdsjhasd', 'ahgsdjhasd', 'Umum', '-', 'Lunas'),
('0002', '2019-03-11-0002', '000019', '2019-03-11', 'D11', '8', 'ghgfhgf', 'Orang Tua', 'fhgfhgfh', 'Umum', '-', 'Rawat Inap');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengadaan_obat`
--

CREATE TABLE `tbl_pengadaan_obat` (
  `id_pengadaan` varchar(6) NOT NULL,
  `no_trans` varchar(15) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_transaksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengadaan_obat`
--

INSERT INTO `tbl_pengadaan_obat` (`id_pengadaan`, `no_trans`, `supplier`, `kode_obat`, `nama_obat`, `jenis_obat`, `harga_beli`, `jumlah`, `satuan`, `keterangan`, `total`, `tgl_transaksi`) VALUES
('1', 'B-190308-1', '-', 'bo67', 'bodrex', 'Tablet', 10000, 100, 'Butir', 'tunai', 1000000, '08-03-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran_kamar`
--

CREATE TABLE `tbl_pengeluaran_kamar` (
  `id_pengeluaran` int(11) NOT NULL,
  `no_terima_kamar` varchar(30) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `kode_kamar` varchar(11) NOT NULL,
  `nama_kamar` varchar(40) NOT NULL,
  `kelas_kamar` varchar(40) NOT NULL,
  `kapasitas` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengeluaran_kamar`
--

INSERT INTO `tbl_pengeluaran_kamar` (`id_pengeluaran`, `no_terima_kamar`, `nama_pasien`, `kode_kamar`, `nama_kamar`, `kelas_kamar`, `kapasitas`, `harga`, `tanggal_masuk`, `tanggal_keluar`, `keterangan`) VALUES
(4, '2019-03-06-0001', 'Chandra', 'K01', 'Mawar', 'Ekonomi', '1', 200000, '2019-03-06', '2019-03-09', 'yy'),
(5, '2019-03-08-0004', 'Andi Novan', 'K02', 'KENANGA', 'Ekonomi', '1', 120000, '2019-03-08', '2019-03-08', 'hgfhgfh'),
(6, '2019-03-11-0002', 'toyo doank', 'K01', 'MELATI', 'Ekonomi', '1', 120000, '2019-03-11', '0000-00-00', 'tunai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran_obat`
--

CREATE TABLE `tbl_pengeluaran_obat` (
  `id_pengeluaran` varchar(6) NOT NULL,
  `no_terima_obat` char(15) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(50) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_serah_obat` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengeluaran_obat`
--

INSERT INTO `tbl_pengeluaran_obat` (`id_pengeluaran`, `no_terima_obat`, `nama_pasien`, `kode_obat`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `jumlah`, `satuan`, `keterangan`, `tgl_serah_obat`) VALUES
('0001', 'S-180620-0001', 'Oman', 'K-198', 'Paracetamol', 'Tablet', '3 x 1 Sehari Setelah Makan', 5, 'Strip', 'ok', '20-06-2018'),
('0002', 'S-180620-0002', 'Niko Rahmad', 'A-989', 'Salicyl', 'Bedak', '3 x 1 sehari', 1, 'Buah', 'ok', '20-06-2018'),
('0001', 'S-180621-0001', 'Niko Rahmad', 'A-989', 'Salicyl', 'Bedak', '3 x 1 sehari', 4, 'Buah', 'an', '21-06-2018'),
('0002', 'S-180621-0002', 'Oman', 'K-198', 'Paracetamol', 'Tablet', '3 x 1 Sehari Setelah Makan', 2, 'Strip', 'ad', '21-06-2018'),
('0001', 'S-180624-0001', 'Muhammad Yogi', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 3, 'Botol', 'ok', '24-06-2018'),
('0002', 'S-180624-0002', 'Oman', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 3, 'Botol', 'ok', '24-06-2018'),
('0001', 'S-180630-0001', 'Niko Rahmad', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 1, 'Botol', 'ok', '30-06-2018'),
('0001', 'S-180710-0001', 'Diana', 'SD-65', 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 2, 'Botol', 'ok', '10-07-2018'),
('0001', 'S-190301-0001', 'Niko Rahmad', 'SN-11', 'Alpara', 'Kapsul', '3 x 1 sehari', 1, 'Buah', 'ok', '01-03-2019'),
('0001', 'S-190302-0001', 'Dinda', 'A-989', 'Salicyl', 'Bedak', '3 x 1 sehari', 8, 'Buah', 'laalla', '02-03-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perbaikan_gizi`
--

CREATE TABLE `tbl_perbaikan_gizi` (
  `id_gizi` int(5) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `nama_tindakan` varchar(35) NOT NULL,
  `nama_obat` varchar(40) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perbaikan_gizi`
--

INSERT INTO `tbl_perbaikan_gizi` (`id_gizi`, `nama_anak`, `nama_tindakan`, `nama_obat`, `jumlah`, `satuan`, `tanggal`) VALUES
(8, 'Alzam', 'Pemberian MP-ASI', 'Sun', 1, 'Buah', '18-07-2018'),
(9, 'Thio', 'Penanggulangan GAKY', 'Pil Vitamin A', 1, 'Strip', '18-07-2018');

--
-- Triggers `tbl_perbaikan_gizi`
--
DELIMITER $$
CREATE TRIGGER `perbaikan_gizi` AFTER INSERT ON `tbl_perbaikan_gizi` FOR EACH ROW BEGIN
UPDATE tbl_stok_obat
SET jumlah = jumlah - new.jumlah
WHERE nama_obat= new.nama_obat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poli`
--

CREATE TABLE `tbl_poli` (
  `id_poli` int(2) NOT NULL,
  `nama_poli` varchar(40) NOT NULL,
  `ruang_poli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_poli`
--

INSERT INTO `tbl_poli` (`id_poli`, `nama_poli`, `ruang_poli`) VALUES
(1, 'POLI GIGI', 'RUANG POLI GIGI'),
(2, 'POLI UMUM', 'RUANG POLI UMUM'),
(4, 'POLI KIA', 'RUANG POLI KIA'),
(5, 'POLI KONSULTASI', 'RUANG POLI KONSULTAS'),
(6, 'LABORATORIUM', 'RUANG LABORATORIUM'),
(7, 'POLI MATA', 'RUANG POLI MATA'),
(8, 'POLI JIWA', 'Ruang POLI'),
(9, 'POLI KB', 'Ruang Poli');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep_obat`
--

CREATE TABLE `tbl_resep_obat` (
  `kode_resep` int(4) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `dosis_aturan_obat` varchar(40) NOT NULL,
  `jumlah_obat` int(2) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resep_obat`
--

INSERT INTO `tbl_resep_obat` (`kode_resep`, `nama_obat`, `jenis_obat`, `dosis_aturan_obat`, `jumlah_obat`, `no_rawat`, `no_rekamedis`, `tanggal`) VALUES
(1, 'Salicyl', 'Bedak', '3 x 1 sehari', 2, '2018/06/24/0001', '000002', '2018-06-24'),
(2, 'Salicyl', 'Bedak', '3 x 1 sehari', 4, '2018/06/24/0001', '000002', '2018-06-24'),
(3, 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 1, '2018/06/25/0001', '000002', '2018-06-25'),
(4, 'Alpara', 'Tablet', '3x1 Sehari', 1, '2018/06/30/0001', '000002', '2018-06-30'),
(5, 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 2, '2018/07/03/0001', '000003', '2018-07-03'),
(6, 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 1, '2018/07/04/0001', '000003', '2018-07-04'),
(7, 'Alpara', 'Tablet', '3x1 Sehari', 1, '2018/07/06/0002', '000003', '2018-07-06'),
(8, 'Polivanol', 'Obat Tetes Luka', 'Setiap pakai 50 ml', 1, '2018-07-14-0001', '000001', '2018-07-14'),
(9, 'Anexsamol', 'Kapsul', '2x1 Sehari', 1, '2018-07-17-0002', '000003', '2018-07-17'),
(10, 'Salicyl', 'Bedak', '3 x 1 sehari', 1, '2019-03-01-0001', '000001', '2019-03-01'),
(11, 'Alpara', 'Kapsul', '3x1 sehari', 2, '2019-03-01-0001', '000001', '2019-03-01'),
(12, 'Salicyl', 'Bedak', '12', 12, '2019-03-02-0003', '000005', '2019-03-02'),
(13, 'Salicyl', 'Bedak', '3 x 1 sehari', 2, '2019-03-02-0003', '000005', '2019-03-02'),
(14, 'Anexsamol', 'Kapsul', '3x2 hari', 3, '2019-03-04-0001', '000004', '2019-03-04'),
(15, 'Salicyl', 'Bedak', '3', 2, '2019-03-04-0001', '000004', '2019-03-04'),
(16, 'Salicyl', 'Bedak', '3x1 hari', 2, '2019-03-05-0001', '000003', '2019-03-05'),
(17, 'Polivanol', 'obat tetes', '3x1 hari', 4, '2019-03-05-0001', '000003', '2019-03-05'),
(18, 'Anexsamol', 'Bedak', '2', 2, '2019-03-05-0002', '000012', '2019-03-05'),
(19, 'PoliSaxechon', 'Gula', '9', 3, '2019-03-06-0001', '000012', '2019-03-06'),
(20, 'Sun', 'Kapsul', '3x2 hari', 2, '2019-03-06-0001', '000012', '2019-03-06'),
(21, 'Polivanol', 'Kapsul', '3x2 hari', 1, '2019-03-06-0002', '000010', '2019-03-06'),
(22, 'Salicyl', 'Bedak', '6', 3, '2019-03-06-0003', '000007', '2019-03-06'),
(23, 'Anexsamol', 'salep', '3x1', 12, '2019-03-07-0001', '000013', '2019-03-07'),
(24, 'PoliSaxechon', 'Bedak', '3x1', 12, '2019-03-07-0002', '000006', '2019-03-07'),
(25, 'Salicyl', 'Bedak', '3x1', 2, '2019-03-07-0003', '000009', '2019-03-07'),
(26, 'Salicyl', 'Bedak', '3x1', 12, '2019-03-07-0005', '000015', '2019-03-07'),
(27, 'Salicyl', 'Bedak', '10x1', 1, '2019-03-07-0006', '000016', '2019-03-07'),
(28, 'Salicyl', 'Bedak', '2x4', 1, '2019-03-07-0007', '000017', '2019-03-07'),
(29, 'Parachetamol', 'tablet', '3x1', 1, '2019-03-08-0002', '000018', '2019-03-08'),
(30, 'Parachetamol', 'Tablet', '3x1', 9, '2019-03-08-0003', '000019', '2019-03-08'),
(31, 'Parachetamol', 'Tablet', '3x1', 10, '2019-03-08-0006', '000006', '2019-03-08'),
(32, 'Salicyl', 'Tablet', '3x1', 3, '2019-03-11-0001', '000020', '2019-03-11'),
(33, 'Parachetamol', 'Tablet', '3x1', 10, '2019-03-11-0002', '000021', '2019-03-11'),
(34, 'Parachetamol', 'Tablet', '3x1', 56, '2019-03-11-0003', '000006', '2019-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat_tindakan`
--

CREATE TABLE `tbl_riwayat_tindakan` (
  `id_riwayat_tindakan` int(11) NOT NULL,
  `id_poli` varchar(2) NOT NULL,
  `kode_penyakit` varchar(6) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `pemeriksaan_fisik` varchar(255) NOT NULL,
  `pemeriksaan_lab` varchar(255) NOT NULL,
  `kode_tindakan` varchar(6) NOT NULL,
  `no_rawat` varchar(18) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `kode_icd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_riwayat_tindakan`
--

INSERT INTO `tbl_riwayat_tindakan` (`id_riwayat_tindakan`, `id_poli`, `kode_penyakit`, `keluhan`, `pemeriksaan_fisik`, `pemeriksaan_lab`, `kode_tindakan`, `no_rawat`, `no_rekamedis`, `tanggal`, `kode_icd`) VALUES
(36, '1', 'Db-37', 'A', 'S', 'D', 'K-0016', '2019-03-05-0001', '000003', '05-03-2019', 'K35.1'),
(37, '1', 'Db-37', 'Meriang', 'Bagus', 'Bagus', 'P-8392', '2019-03-06-0001', '000012', '06-03-2019', 'B77.9'),
(38, '2', 'HB-39', 'Meriang', 'Bagus', 'Bagus', 'PG-39', '2019-03-06-0002', '000010', '06-03-2019', 'K12.2'),
(39, '5', 'Kt-18', 'yu', 'yi', 'yr', 'P-8392', '2019-03-06-0003', '000007', '06-03-2019', 'J86.9'),
(42, '2', 'Kt-18', 'gatal di kulit ', 'test alergi', '-', 'K-2882', '2019-03-07-0001', '000013', '07-03-2019', 'A 22'),
(43, '2', 'Kt-18', 'aqsdlakjlajsd', 'lkjalkjsd', 'asdad', 'D11', '2019-03-07-0003', '000009', '07-03-2019', 'D 70'),
(44, '2', 'Kt-18', 'gatal', 'tes alergi', '-', 'D11', '2019-03-07-0005', '000015', '07-03-2019', 'B 05'),
(45, '7', 'KR-292', 'asad', 'fssf', 'sfs', 'K-0016', '2019-03-07-0006', '000016', '07-03-2019', 'D16.5'),
(46, '2', 'Db-37', 'TRIVAM PROPOFOL', 'Badan', 'Nanan', 'K-9892', '2019-03-07-0007', '000017', '07-03-2019', 'K65.0'),
(47, '1', 'Kt-18', 'gatel', 'kahjsd', '-', 'K-9892', '2019-03-08-0002', '000018', '08-03-2019', 'N19'),
(48, '2', 'Kt-18', 'gatal', 'hgfhf', '-', 'D11', '2019-03-08-0003', '000019', '08-03-2019', 'B 05'),
(49, '4', 'Kt-18', 'jhgjhg', 'jhhgjg', 'jhgjg', 'D66', '2019-03-08-0005', '000003', '08-03-2019', 'B 05'),
(50, '2', 'Kt-18', 'gatal', '-', '-', 'D11', '2019-03-11-0001', '000020', '11-03-2019', 'B 05'),
(51, '5', 'Kt-18', 'khkajhsd', 'lkjalkjsd', 'lkajlkds', 'D66', '2019-03-11-0002', '000021', '11-03-2019', 'C11.1'),
(52, '7', 'Db-37', 'gatal', 'jkahsd', '-', 'D66', '2019-03-11-0003', '000006', '11-03-2019', 'B 05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rujukan`
--

CREATE TABLE `tbl_rujukan` (
  `kode_rujukan` varchar(11) NOT NULL,
  `no_rujukan` varchar(18) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `nama_rumah_sakit` varchar(40) NOT NULL,
  `poli_tujuan` varchar(25) NOT NULL,
  `tgl_rujukan` varchar(10) NOT NULL,
  `no_rawat` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rujukan`
--

INSERT INTO `tbl_rujukan` (`kode_rujukan`, `no_rujukan`, `nama_pasien`, `nama_penyakit`, `diagnosa`, `nama_rumah_sakit`, `poli_tujuan`, `tgl_rujukan`, `no_rawat`) VALUES
('0001', 'R-20180621-0001', 'Niko Rahmad', 'Cacar', 'cacar ganas', 'RSUD Palembang', 'Poli Kulit', '2018-06-21', '2018/06/21/0002'),
('0001', 'R-20180623-0001', 'Muhammad Yogi', 'Diabetes', 'Kencing Manis', 'RS.Bayukarta', 'Poli Dalam', '2018-06-23', '2018/06/23/0001'),
('0001', 'R-20180625-0001', 'Oman', 'Diabetes', 'Mengalami Sedikit Penghambatan', 'RSUD Tembilahan ', 'Poli Saraf', '2018-06-25', '2018/06/25/0001'),
('0001', 'R-20180630-0001', 'Oman', 'Cacar', 'Bintik-Bintik Merah', 'RS Bayukarta', 'Poli Kulit', '2018-06-30', '2018/06/30/0001'),
('0001', 'R-20180706-0001', 'Muhammad Yogi', 'Cacar', 'Sakit Berdarah', 'RSUD Karawang', 'Poli Kulit', '2018-07-06', '2018/07/06/0002'),
('0001', 'R-20180714-0001', 'Niko Rahmad', 'Hidung Bengkak', 'Hidung Berdarah', 'RSUD Semarang', 'Poli Saraf', '2018-07-14', '2018-07-14-0001'),
('0001', 'R-20180717-0001', 'Muhammad Yogi', 'Gigi Berlubang', 'Pendarahan Di Gigi', 'RSUD Bandung', 'Poli Gigi', '2018-07-17', '2018-07-17-0002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_setting` varchar(50) NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `nama_setting`, `value`) VALUES
(1, 'Tampil Menu', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stok_obat`
--

CREATE TABLE `tbl_stok_obat` (
  `kode_obat` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stok_obat`
--

INSERT INTO `tbl_stok_obat` (`kode_obat`, `jumlah`, `satuan`) VALUES
('bo67', 100, 'Butir'),
('', 16, ''),
('A-282', 10, ''),
('acycs', 5, ''),
('A-989', 19, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `kode_supplier` varchar(6) NOT NULL,
  `nama_supplier` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `no_telpon`) VALUES
('AW-189', 'Novita', 'Perum Pemda', '082872878219'),
('B-2827', 'Bentoman', 'Johar', '0828728726');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggungobat`
--

CREATE TABLE `tbl_tanggungobat` (
  `kode_ruang` varchar(25) NOT NULL,
  `penanggung` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tanggungobat`
--

INSERT INTO `tbl_tanggungobat` (`kode_ruang`, `penanggung`, `jabatan`, `no_telp`) VALUES
('PU1', 'Maryono', 'Pegawai', '09090'),
('PU2', 'Randra', 'Pegawai', '909090');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tindakan`
--

CREATE TABLE `tbl_tindakan` (
  `kode_tindakan` varchar(6) NOT NULL,
  `nama_tindakan` varchar(30) NOT NULL,
  `tindakan_oleh` enum('dokter','petugas','dokter_dan_petugas','') NOT NULL,
  `id_poliklinik` int(2) DEFAULT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tindakan`
--

INSERT INTO `tbl_tindakan` (`kode_tindakan`, `nama_tindakan`, `tindakan_oleh`, `id_poliklinik`, `harga`) VALUES
('D11', 'periksa kulit', 'petugas', 2, 12000),
('D66', 'nebulizer', 'dokter', 2, 24000),
('K-0016', 'Periksa Mata', 'dokter', 2, 10000),
('K-2882', 'Periksa Kulit', 'dokter', 2, 0),
('K-9892', 'Periksa Hidung', 'dokter_dan_petugas', 2, 0),
('P-1912', 'Pemeriksaan Gigi', 'dokter', 1, 0),
('P-3831', 'Periksa Mulut', 'dokter', 2, 0),
('P-8392', 'Periksa Suhu', 'dokter', 2, 15000),
('PG-39', 'Pemberian MP-ASI', 'petugas', 2, 5000),
('PG-48', 'Penanggulangan GAKY', 'dokter_dan_petugas', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_users` int(2) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') NOT NULL,
  `no_telp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_users`, `full_name`, `email`, `password`, `images`, `id_user_level`, `is_aktif`, `no_telp`) VALUES
(16, 'Irawan', 'file.irawan@gmail.com', '$2y$04$KHa1KnuJM1uOK4nvG54tv.j302AM.VkRjB7MuhX6w0GNYODW/ftI.', '', 1, 'y', '082112244772'),
(19, 'admin', 'admin@gmail.com', '$2y$04$fGW7ZYw3wfnx.vS2d9yRiOn9cLi9tkX3A9Xmzv4zv23Odnv6lNfe2', '', 1, 'y', '087'),
(26, 'ara', 'ara@gmail.com', '$2y$04$h77JcQb/RTmppN.2l/o2xuoGChYU2nAtsmX3bRowjuNEv4uGADPa2', '', 14, 'y', '086'),
(29, 'Puskesmas Munjungan', 'munjungan@puskesmasmunjungan.com', '$2y$04$XWCkzoqT.GtEmgb/hEhvbO2vi6z/M6NXMWxIeKCDDInG0PZq/bGDy', '', 1, 'y', '836645345'),
(31, 'POLI GIGI', 'poligigi@gmail.com', '$2y$04$HhhKTZc2AL1.BpFNwB6ulOW7zXZkgtsNtTw.LcR/VF/Hf3YEPV4fW', '', 13, 'y', '082234496586'),
(32, 'POLI KIA', 'polikia@gmail.com', '$2y$04$dP8wJORcYWinQV1ROyCxquBcEswIjfcuQPvZQ8yIz1R1tapBcsjq6', '', 3, 'y', '08223364407'),
(33, 'APOTEK', 'apotekpkm@gmail.com', '$2y$04$oax3LogQcAoAQW5Gro0kN.fDowYBR8zR8NyP132nfoCPGwFgV9Hnq', '', 4, 'y', '085330366924'),
(34, 'LABORATORIUM', 'laborat@gmail.com', '$2y$04$rPoeQIXgKYh.6A5b0qQrqO.YS3Ukn3CazLJ05idCe0krAbfVrS9eC', '', 15, 'y', '085204942350'),
(35, 'POLI GIZI', 'poligizi@gmail.com', '$2y$04$qadTw.HFkNnvfz584yoWH.8v6Y7YvF0te0fIo9CbrzpEX9bKAQaHy', '', 17, 'y', '081234449786'),
(36, 'PENDAFTARAN', 'pendaftaran@gmail.com', '$2y$04$OnEOPnTEqig7ja19O3xlBukoSnbrM4pt1x2vBLXApBxPVW18KuWK2', '', 5, 'y', '085204861278'),
(37, 'POLI JIWA', 'polijiwa@gmail.com', '$2y$04$Njv2KozXSR1uc/hn01Wt3ODZe0ivmjJJBTbR3AxlcvVBbkBCi54s.', '', 18, 'y', '081240794077'),
(38, 'POLI KB', 'polikb@gmail.com', '$2y$04$mPvF3bQ/5ED1zh909nxexO.1awynNZx9EfA6c3pHwEHr.47/ZKOze', '', 16, 'y', '082301906364'),
(39, 'POLI UMUM', 'poliumum@gmail.com', '$2y$04$vpwAMT69MQDnpeDQPsnhTu.LRmeoS31xBdvT5A/jQfxtRS4.q4QWu', '', 12, 'y', '082234916765'),
(41, 'KEPEGAWAIAN', 'kepegawaian@gmail.com', '$2y$04$rQun/B9uEn/uyQJuSQ8IiuoHdm/FSnRrcxsXuBp7s6WbJNjbSFEOC', '', 19, 'y', '081359000031'),
(42, 'dr Titis', 'titis@gmail.com', '$2y$04$DGjCn8npVx95fO3jC0vDv.GSFc8ndeLwdTEj9/Vs8bvtzpovmb0IC', '', 13, 'y', '8768376123'),
(43, 'Tomie', 'tomie@gmail.com', '$2y$04$YKMw1tg91D26W9aAsnzZWutRUUeHo9hcnQUq/ZfFlNjfoj6KVzBNO', '', 20, 'y', '081093813');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `id_user_level` int(2) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`id_user_level`, `nama_level`) VALUES
(1, 'ADMIN'),
(3, 'POLI KIA'),
(4, 'APOTEK'),
(5, 'PENDAFTARAN'),
(12, 'POLI UMUM'),
(13, 'POLI GIGI'),
(15, 'LABORATORIUM'),
(16, 'POLI KB'),
(17, 'POLI GIZI'),
(18, 'POLI JIWA'),
(19, 'KEPEGAWAIAN'),
(20, 'PENDAFTARAN 1'),
(21, 'admin 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icd`
--
ALTER TABLE `icd`
  ADD PRIMARY KEY (`id_icd`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_diagnosa_penyakit`
--
ALTER TABLE `tbl_diagnosa_penyakit`
  ADD PRIMARY KEY (`kode_diagnosa`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_jadwal_praktek_dokter`
--
ALTER TABLE `tbl_jadwal_praktek_dokter`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`kode_kamar`);

--
-- Indexes for table `tbl_kesehatan_ibu_anak`
--
ALTER TABLE `tbl_kesehatan_ibu_anak`
  ADD PRIMARY KEY (`id_kia`);

--
-- Indexes for table `tbl_laboratorium`
--
ALTER TABLE `tbl_laboratorium`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tbl_obatnonpasien`
--
ALTER TABLE `tbl_obatnonpasien`
  ADD PRIMARY KEY (`no_trans`);

--
-- Indexes for table `tbl_operasi`
--
ALTER TABLE `tbl_operasi`
  ADD PRIMARY KEY (`kode_operasi`);

--
-- Indexes for table `tbl_paramedis`
--
ALTER TABLE `tbl_paramedis`
  ADD PRIMARY KEY (`kode_paramedis`),
  ADD KEY `id_spesialis` (`id_poli`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`no_rekamedis`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tbl_penanganan_operasi`
--
ALTER TABLE `tbl_penanganan_operasi`
  ADD PRIMARY KEY (`id_penanganan`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`no_rawat`);

--
-- Indexes for table `tbl_pengadaan_obat`
--
ALTER TABLE `tbl_pengadaan_obat`
  ADD PRIMARY KEY (`no_trans`);

--
-- Indexes for table `tbl_pengeluaran_kamar`
--
ALTER TABLE `tbl_pengeluaran_kamar`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tbl_pengeluaran_obat`
--
ALTER TABLE `tbl_pengeluaran_obat`
  ADD PRIMARY KEY (`no_terima_obat`);

--
-- Indexes for table `tbl_perbaikan_gizi`
--
ALTER TABLE `tbl_perbaikan_gizi`
  ADD PRIMARY KEY (`id_gizi`);

--
-- Indexes for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  ADD PRIMARY KEY (`kode_resep`);

--
-- Indexes for table `tbl_riwayat_tindakan`
--
ALTER TABLE `tbl_riwayat_tindakan`
  ADD PRIMARY KEY (`id_riwayat_tindakan`);

--
-- Indexes for table `tbl_rujukan`
--
ALTER TABLE `tbl_rujukan`
  ADD PRIMARY KEY (`no_rujukan`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tbl_stok_obat`
--
ALTER TABLE `tbl_stok_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `tbl_tanggungobat`
--
ALTER TABLE `tbl_tanggungobat`
  ADD PRIMARY KEY (`kode_ruang`);

--
-- Indexes for table `tbl_tindakan`
--
ALTER TABLE `tbl_tindakan`
  ADD PRIMARY KEY (`kode_tindakan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icd`
--
ALTER TABLE `icd`
  MODIFY `id_icd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1961;

--
-- AUTO_INCREMENT for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  MODIFY `id_bidang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_hak_akses`
--
ALTER TABLE `tbl_hak_akses`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jadwal_praktek_dokter`
--
ALTER TABLE `tbl_jadwal_praktek_dokter`
  MODIFY `id_jadwal` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kesehatan_ibu_anak`
--
ALTER TABLE `tbl_kesehatan_ibu_anak`
  MODIFY `id_kia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_laboratorium`
--
ALTER TABLE `tbl_laboratorium`
  MODIFY `id_lab` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_penanganan_operasi`
--
ALTER TABLE `tbl_penanganan_operasi`
  MODIFY `id_penanganan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pengeluaran_kamar`
--
ALTER TABLE `tbl_pengeluaran_kamar`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_perbaikan_gizi`
--
ALTER TABLE `tbl_perbaikan_gizi`
  MODIFY `id_gizi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_poli`
--
ALTER TABLE `tbl_poli`
  MODIFY `id_poli` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_resep_obat`
--
ALTER TABLE `tbl_resep_obat`
  MODIFY `kode_resep` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_riwayat_tindakan`
--
ALTER TABLE `tbl_riwayat_tindakan`
  MODIFY `id_riwayat_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_users` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `id_user_level` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
