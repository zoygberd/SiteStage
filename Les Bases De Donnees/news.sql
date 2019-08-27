-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 août 2019 à 19:19
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `news`
--

-- --------------------------------------------------------

--
-- Structure de la table `invit`
--

DROP TABLE IF EXISTS `invit`;
CREATE TABLE IF NOT EXISTS `invit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `date` text NOT NULL,
  `concerne` longtext NOT NULL,
  `dossier` longtext NOT NULL,
  `text_ab` longtext NOT NULL,
  `etapes_conc` longtext NOT NULL,
  `Ecole` varchar(10000) NOT NULL,
  `ville` varchar(10000) NOT NULL,
  `photo` text NOT NULL,
  `intro` longtext NOT NULL,
  `link` text NOT NULL,
  `filieres` longtext CHARACTER SET utf8 NOT NULL,
  `pour` varchar(10000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invit`
--

INSERT INTO `invit` (`ID`, `titre`, `date`, `concerne`, `dossier`, `text_ab`, `etapes_conc`, `Ecole`, `ville`, `photo`, `intro`, `link`, `filieres`, `pour`) VALUES
(13, 'Concours d\'accès en master Géoressources Energetiques et Réservoires à la FST Tanger 2019-2020', '13 au 25 août 2019.', ' L’accès est ouvert aux titulaires d’une licence ou d’un diplôme reconnu équivalent dans le domaine de formation du Master offert.', 'Pas de precisions', 'Les dates importantes à retenir:\r\n<br>\r\nPréinscription en ligne sur le site Web de FST de Tanger et envoie du format numérique du dossier de candidature du :  <span style=\"color:red\">13 au 25 août 2019.</span><br>\r\n\r\nAffichage des convoqués à l\'épreuve ecrite :  <span style=\"color:red\">Vendredi 30 août 2019.</span><br>\r\n\r\nEpreuve ecrite : <span style=\"color:red\">Mardi 03 septembre 2019.</span>\r\n<br>\r\nAffichage des résultats finaux :  <span style=\"color:red\">06 septembre 2019.</span>\r\n<br>\r\nDemarrage des cours : <span style=\"color:red\"> 09 septembre 2019.</span>\r\n', '<span style=\"color:red\" >Preselection du Dossier</span>: Elle se fera sur la base des critères de mérite ;\r\n<br>\r\n\r\n<span style=\"color:red\" >Concours</span>: Les candidats présélectionnés seront convoqués à passer le concours d’accès.', 'FST', 'tanger', 'https://www.etudiant.ma/uploads/entrance_exam/cover/173/large_tanger-nocturno2.jpg', 'La Faculté des Sciences et Techniques de TANGER lance un appel à candidature au Concours d\'accès à la 1ère année du master \"Géoressources Energetiques et Réservoires\".', '', '', 'Master F'),
(15, 'Concours d\'accès en master Géoressources Energetiques et Réservoires à la FST Tanger 2019-2020', '', '<strong>Modalités D’admission</strong>\r\n<br>\r\n L’accès est ouvert aux titulaires d’une licence ou d’un diplôme reconnu équivalent dans le domaine de formation du Master offert.', '', '<strong>Les dates importantes à retenir:</strong>\r\n<br>\r\nPréinscription en ligne sur le site Web de FST de Tanger et envoie du format numérique du dossier de candidature du : <span style=\"color:red\">13 au 25 août 2019.</span>\r\n<br>\r\nAffichage des convoqués à l\'épreuve ecrite :<span style=\"color:red\"> Vendredi 30 août 2019.</span>\r\n<br>\r\nEpreuve ecrite :<span style=\"color:red\"> Mardi 03 septembre 2019.</span>\r\n<br>\r\nAffichage des résultats finaux :<span style=\"color:red\"> 06 septembre 2019.</span>\r\n<br>\r\nDemarrage des cours : <span style=\"color:red\">09 septembre 2019</span>.\r\n', '<span style=\"color:red\">Présélection sur dossier: </span>Elle se fera sur la base des critères de mérite ;\r\n<br>\r\n\r\n<span style=\"color:red\">Concours:</span> Les candidats présélectionnés seront convoqués à passer le concours d’accès.', 'FST', 'tanger', 'https://www.etudiant.ma/uploads/entrance_exam/cover/173/large_tanger-nocturno2.jpg', 'La Faculté des Sciences et Techniques de TANGER lance un appel à candidature au Concours d\'accès à la 1ère année du master \"Géoressources Energetiques et Réservoires\".\r\n\r\n\r\n', 'http://www.fstt.ac.ma/preinscription/ger/', '<strong>Filieres :</strong> <br>\r\n ===>Géoressources Energetiques et Réservoires ', 'Master S'),
(16, 'Concours d\'accès en cycle Ingénieur d’état en Génie électrique à la FST Beni Mellal 2019-2020 ', '', ' \r\n\r\n<strong>1. CONDITIONS D’ACCES </strong>\r\n<br>\r\nLe candidat doit avoir les conditions suivantes ;\r\n<br>\r\n-          Titulaire d\'un DEUG, DUT, DEUST, DEUP ou tout autre diplôme équivalent.\r\n<br>\r\n-          Titulaires d’une Licence (en Physique, Mathématiques, ..) ou tout autre diplôme équivalent\r\n<br>\r\n-       Etudiants des classes préparatoires admissibles au concours national des écoles d’Ingénieurs\r\n<br>\r\n-       Etre âgé de 23 ans au maximum au 31 Décembre 2019.', '<strong>2. PROCEDURES DE SELECTION :</strong>\r\n<br>\r\n(PRESELECTION SUR DOSSIER) Le candidat doit avoir au moins une des conditions suivantes ;\r\n<br>\r\n-          Avoir réussi le DEUG,  DEUST ou DEUP avec au moins une mention Assez Bien.\r\n<br>\r\n-          Avoir réussi le DUT avec au moins une mention Bien.\r\n<br>\r\n-          Avoir réussi la licence avec au moins une mention Assez Bien.\r\n', '<span style=\"color:red\">. CALENDRIER DU CONCOURS</span>\r\n<br><br>\r\nDate limite d’inscription en ligne<span style=\"color:red\"> 3 Septembre 2019</span>\r\n<br>\r\nAffichage des résultats de présélection<span style=\"color:red\"> 5 Septembre 2019</span>\r\n<br>\r\nDate limite de dépôt du dossier (format papier) <span style=\"color:red\">avant 8h00  10 Septembre 2019</span>\r\n<br>\r\n Concours écrit <span style=\"color:red\">10 Septembre 2019</span>\r\n<br>\r\nAffichage des résultats du concours écrit <span style=\"color:red\">16 Septembre 2019</span>\r\n<br>\r\nEntretien oral des candidats admis aux épreuves écrites <span style=\"color:red\">18 Septembre 2019</span>\r\n<br>\r\nAffichage des résultats définitifs <span style=\"color:red\">19 Septembre 2019</span><br>\r\n\r\nInscriptions liste principale <span style=\"color:red\">23 et 24 Septembre 2019  </span>\r\n<br>\r\nInscriptions liste d’attente <span style=\"color:red\">26 Septembre 2019 </span><br>', '<span style=\"color:red\">3. CONCOURS</span>\r\n<br>\r\n  Le concours est ouvert aux candidats sélectionnés et porte sur des épreuves écrites (Programme de DEUST) qui auront lieu le\r\n<br>\r\n10 Septembre 2019 à la Faculté des Sciences et Techniques de Béni-Mellal à 8H00min,\r\n<br>\r\nMathématiques (Analyse et Algèbre) 2h30min,\r\nPhysique (Mécanique 2h00mn et Electricité 2h00mn)\r\nFrançais1h30mn\r\n<br>\r\n    en plus d’un entretien oral le 18 Septembre 2019 aux candidats retenus à l’écrit et selon places disponibles.  \r\n<br>\r\n\r\n', 'FST', 'Beni Mellal', 'http://fstbm.ac.ma/img/fstbm.jpg', 'Concours d\'admission en première année\r\n<br>\r\nFilière d’Ingénieurs en Génie Electrique\r\n<br>\r\nOption : Electrotechnique et Electronique Industrielle Année Universitaire 2019/2020\r\n\r\n------\r\n\r\n\r\n\r\n\r\n<br><br>\r\nLa Faculté des Sciences et Techniques de Béni-Mellal lance un appel à candidature pour l’accès à la formation d’Ingénieurs d’état en Génie électrique - Spécialité : Electrotechnique et Electronique Industrielle.', '', '', 'Cycle dIng'),
(17, 'Concours d’accès au Master Ingénierie d’Informatique Industrielle et d’Instrumentation à la FST Errachidia 2019-2020', '', '<h4>Conditions:</h4>\r\n<ul>\r\n    <li>Avoir un Bac +3 </li>\r\n    <li>Une license Professionelle </li>\r\n    <li>Une License Fondamentale </li>\r\n    <li><strong>La license doit etre relatif a la Filiere </strong></li>\r\n</ul>', '<h4 style=\"color:red\">Dossier de candidature ( le jour même du concours ) </h4>\r\n<br>\r\nLes candidats retenus pour passer ce concours écrit, doivent êtres munis, le jour même du concours, de leur dossier complet de candidature comportant les pièces suivantes ci-dessous :\r\n<br>\r\n- CV détaillé\r\n<br>\r\n- Diplômes légalisés (Bac, Bac+2, Licence,..)\r\n<br>\r\n- Relevés légalisés des notes de chaque diplôme (de S1 à S6)\r\n<br>\r\n- Un (1) Extrait d’acte de naissance\r\n<br>\r\n- Une (1) copie légalisée de la carte d’identité nationale\r\n<br>\r\n- Deux (2) enveloppes timbrées portant l\'adresse exacte du candidat\r\n<br>\r\n- Deux (2) photos d’identité\r\n<br>\r\n- Attestations de stages Tout dossier incomplet sera automatiquement rejeté.\r\n<br>', 'Ce concours se déroulera au sein de la FST d’Errachidia et intéressera les candidats retenus par la Commission de présélection. Une pièce d’identité est obligatoire (CIN ou Carte de séjours).\r\n<!-- candidature -->\r\n</p> \r\n<h4>Procédure de Candidature</h4>\r\n\r\n<span style=\"color:red\">Étape 1:</span>\r\n\r\nFaire une pré-inscription en ligne\r\n<br>\r\n<span style=\"color:red\">Étape 2 :</span>\r\n\r\nScanner dans un même fichier (format PDF) les documents suivants: CV, relevés des notes (de S1 à S6); baccalauréat, diplômes (ou attestations) universitaires, attestations de stage.\r\n<br>\r\n\r\n<span style=\"color:red\">Étape 3 :</span>\r\n\r\nEnvoyer le fichier des documents scannés, à l’adresse e-mail de la filière (Master.Ingenierie3I@gmail.com).\r\n<br>\r\n<h4>Procédures de sélection :</h4>\r\n<br>\r\nEtude de dossier + Test écrit + Entretien\r\n<br>\r\n<h4 style=\"color:red\">Dates  importantes :</h4>\r\n<br>\r\no Dernier délais de préinscripti-n en ligne : <span style=\"color:red\">2 Septembre 2019</span>\r\n<br>\r\no Affichage des résultats de la présélection :<span style=\"color:red\">4 Septembre 2019</span> \r\n<br>\r\no Concours (test écrit) :<span style=\"color:red\">8 Septembre 2019</span>\r\n<br>\r\no Affichage de la liste des admis pour l’entretien :<span style=\"color:red\"> 12 Septembre 2019</span>\r\n<br>\r\no Entretien oral :<span style=\"color:red\">15 Septembre 2019</span>\r\n<br>\r\no Affichage des résultats définitifs :<span style=\"color:red\"> 19 Septembre 2019</span>\r\n<br>\r\no Inscriptions des candidats admis :<span style=\"color:red\"> 21 et 22 Septembre 2019</span>\r\n<br>\r\no Inscriptions des candidats de la liste d’attente :<span style=\"color:red\"> 23 et 24 Septembre 2019</span>\r\n<br>\r\no Début des Cours :<span style=\"color:red\"> 30 Septembre 2019 </span>', '', 'FST', 'errachidia', 'https://cdn-06.9rayti.com/rsrc/cache/widen_750/uploads/2015/06/fst_errachidia.jpg', 'Concours d’accès au Master «Ingénierie d’Informatique Industrielle et d’Instrumentation» (Ingénierie 3I) est prévu le Dimanche 8 septembre 2019, et ce le matin et l’après-midi :\r\n<br>\r\n<span style=\"color:red\">- de 8h 30 à 11h30 :</span> Epreuve de Culture générale et Langues\r\n<br>\r\n<span style=\"color:red\">- de 15h à 19h :</span> Epreuve de Sciences et Techniques\r\n<br>', '', '', 'Cycle dIng'),
(18, 'Concours d\'accès au cycle d’ingénieur d’Etat à AIAC Casablanca 2019-2020', '', '<h4>Conditions:</h4>\r\n\r\n<ul>\r\n    <li>Contrôle de la Navigation Aérienne: ICNA (24 places)</li>\r\n    <li>Electronique en Sécurité de la Circulation Aérienne: IESCA (16 places)</li>\r\n    <li>Réussir  le concours national commun 2019 (CNC),Cette inscription est ouverte aux candidats selon les critères suivants:</li>\r\n    <li>Etre Inscrit à la liste de l’AIAC dans l’une des trois filières proposées: GI,GIP ou GEET.</li>\r\n    <li>Après inscription à l’Académie Internationale Mohammed VI de l’Aviation Civile (AIAC), remplir le formulaire en ligne de demande d’inscription à la filière choisie (ICNA ou IESCA) sur le site web de l’AIAC (www.aiac.ma) au plus tard le 19 septembre 2019,</li>\r\n    <li>Etre de Nationalité marocaine,</li>\r\n    <li>Etre né à partir du 1er  janvier 1998,</li>\r\n</ul>', '', '<h4 style=\"color:red\">MODALITES DE LA SELECTION</h4>\r\n<br>\r\nLes candidats, ayant réussi les tests cités ci-dessus, seront convoqués à une visite médicale réglementaire conformément aux normes aéronautiques.Les candidats retenus par la commission de présélection selon leurs classements CNC, seront convoqués, par voie d’affichage en date du 20 septembre 2019 sur le site web de l’AIAC, aux entretiens en français et en anglais et suivront un test psychotechnique.\r\n\r\nLes élèves déclarés inaptes ou inadmissibles à l’issue de la sélection garderont leurs affectations selon leur choix d’origine dans l’une des trois filières GI, GIP ou GEET proposées par l’AIAC.', '', 'AIAC', 'Casablanca', 'https://www.aeronautique.ma/photo/art/default/8593981-13544094.jpg?v=1448892757', 'L’Académie Internationale Mohammed VI de l’Aviation Civile (AIAC) organisera à partir du <strong> 23 septembre 2019 </strong>au titre de l’année académique 2019/2020, une sélection pour l’accès au cycle d’ingénieur d’Etat', '', '', 'Cycle dIng');

-- --------------------------------------------------------

--
-- Structure de la table `newsall`
--

DROP TABLE IF EXISTS `newsall`;
CREATE TABLE IF NOT EXISTS `newsall` (
  `idN` int(40) NOT NULL AUTO_INCREMENT,
  `titre` text CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ville` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `intro` longtext CHARACTER SET utf8 NOT NULL,
  `plus` longtext CHARACTER SET utf8 NOT NULL,
  `sujet` longtext CHARACTER SET utf8 NOT NULL,
  `lienvers` text CHARACTER SET utf8 NOT NULL,
  `photos` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idN`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsall`
--

INSERT INTO `newsall` (`idN`, `titre`, `date`, `ville`, `intro`, `plus`, `sujet`, `lienvers`, `photos`) VALUES
(4, 'Le système LMD au Maroc', '', 'Tout le Maroc', 'Le Maroc a entrepris sa réforme universitaire en septembre 2003 dans le cadre de l’harmonisation des cursus d’enseignement supérieur avec les standards européens afin de permettre d’accroître les mobilités des étudiants marocains à l’étranger ainsi que la mobilité entre disciplines et formations.', '<strong>Principe du système LMD :</strong>\r\nDepuis 2003, les enseignements supérieurs sont organisés en semestres composées d’unités d’enseignement (U.E.) Ces derniers sont organisés en domaines regroupant un ensemble cohérent de filières et de spécialités.\r\n<br>\r\n<strong>Structure du système LMD :</strong>\r\nle système LMD (Licence – Master – Doctorat) s’articule autour de 3 cycles de formation :\r\n<br>\r\n<span style=\"color:red\">Licence (L) :</span> diplôme de niveau bac+3 (licence fondamentale ou licence professionnelle). La licence est le 1er grade du cycle d’enseignement supérieur correspondant aux 3 premières années d’études. Le diplôme de licence est obtenu au terme d’un parcours organisé en 6 semestres.<br>\r\n<span style=\"color:red\">Master (M) :</span> diplôme de niveau bac+5 (fondamental préparant à la recherche ou spécialisé). Le master est le 2e grade du cycle d’enseignement supérieur conduisant aux études doctorales ou à une activité professionnelle. Ce diplôme se prépare sur deux années (M1 et M2). Il est organisé sur deux années soit 4 semestres  qui se déclinent en spécialité et parcours recherche (inscription en doctorat) ou professionnel (insertion au marché de l’emploi).<br>\r\n<span style=\"color:red\">Doctoral (D) :</span> diplôme de niveau bac+8 sanctionnant un travail de recherche dans le cadre d’une thèse. Le doctorat représente la dernière phase du parcours LMD. Cette phase est destinée aux titulaires du Master désireux d’entamer des études de recherche. Elle se prépare en trois années ou plus après le Master.<br>\r\nEn parallèle  à ces trois diplômes, les établissements d’enseignement supérieur au Maroc délivrent des diplômes spécifiques dits d’université ou d’établissement qui correspondent à un domaine.<br>\r\n\r\nLes conditions d’accès, la durée des études, le mode d’évaluation peuvent être différents d’un établissement à l’autre.\r\n<br>', 'LMD', 'https://www.9rayti.com/dossier/systeme-lmd-maroc', 'https://cdn-03.9rayti.com/rsrc/cache/widen_750/uploads/2014/01/amphi-interieur-2-.jpg'),
(5, 'Sessions de rattrapage des Facultés de Médecine et de Pharmacie et de Médecine Dentaire', '2019-08-26', 'Tout le Maroc', '<strong>Réussite aux examens écrits</strong><br>\r\nLes Doyens des Facultés de Médecine et de Pharmacie et de Médecine Dentaire portent à la connaissance de l’ensemble des étudiants qu’exceptionnellement cette année la réussite aux examens écrits garantit le passage en année supérieure et que les plannings de revalidation des stages et des travaux pratiques pour les Facultés de Médecine et de Pharmacie seront fixés au cours ou à l’issue des examens de rattrapage en prenant en considération tous les cas de figure avec la souplesse requise.\r\n<br>\r\nConcernant la filière Médecine Dentaire, des séances de rattrapages et contrôles continus des TP, ainsi que des séances de stages cliniques sont prévus durant le mois de septembre et octobre.\r\n<br>\r\n<strong>Sessions de rattrapage</strong>\r\nLes Doyens des Facultés de Médecine Dentaire portent à la connaissance des étudiants qu’une session de rattrapage des APP (apprentissage par problèmes) et stages cliniques sera organisée à la fin des examens écrits du mois de septembre 2019.\r\n<br>\r\nLa session de rattrapage des APP comportera, d’une part, des activités de formation en rapport avec les séances programmées et non réalisées au cours de l’année, d’autres part, des évaluations sous forme de contrôles continus et examen final.\r\n<br>\r\nLes étudiants n’ayant pas validé un ou plusieurs APP, à l’issue de cette session, vont bénéficier exceptionnellement d’un examen de rattrapage.\r\n<br>\r\nPour le rattrapage des stages cliniques, un planning sera établi en concertation avec les chefs de service en tenant compte des objectifs pédagogiques, en particulier pour les stages cliniques de prothèse.<br>', '<a style=\"text-decoration:none ;color:red\" href=\"https://www.enssup.gov.ma/sites/default/files/NOUVEAUTES/2019/08/Communique-fr.pdf\">Télécharger le communiqué (examens écrits)</a> <br>\r\n<a style=\"text-decoration:none;color:red\" \r\nhref=\"https://www.enssup.gov.ma/sites/default/files/NOUVEAUTES/2019/08/Communique-rattrappage-Sep2019.pdf\">Télécharger le communiqué (sessions de rattrapage)</a>', 'FMP rattrapage', 'http://ww2.fmp-usmba.ac.ma/', 'https://cdn-06.9rayti.com/rsrc/cache/widen_750/uploads/2019/08/sessions-rattrapage-facultes-medecine-pharmacie-medecine-dentaire.png');

-- --------------------------------------------------------

--
-- Structure de la table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `Ecole` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `Ville` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `filieres` longtext CHARACTER SET utf8 NOT NULL,
  `lien` longtext CHARACTER SET utf8 NOT NULL,
  `date` longtext CHARACTER SET utf8 NOT NULL,
  `photo` longtext CHARACTER SET utf8 NOT NULL,
  `intro` longtext CHARACTER SET utf8 NOT NULL,
  `pour` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
