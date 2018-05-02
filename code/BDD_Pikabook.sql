CREATE DATABASE IF NOT EXISTS pikabook;

USE pikabook;

CREATE TABLE IF NOT EXISTS `adresse` (
`AdrID` int(11) NOT NULL,
  `AdrVille` varchar(25) DEFAULT NULL,
  `AdrPostal` int(11) DEFAULT NULL,
  `AdrRue` varchar(50) DEFAULT NULL,
  `AdrRueNum` int(11) DEFAULT NULL,
  `AdrComplement` varchar(200) DEFAULT NULL,
  `CliID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

INSERT INTO `adresse` (`AdrID`, `AdrVille`, `AdrPostal`, `AdrRue`, `AdrRueNum`, `AdrComplement`, `CliID`) VALUES
(52, 'Saint Maximin', 83470, 'chemin de regalette', 780, '', 62),
(53, 'MARSEILLE', 13005, 'Edmond Dantes', 10, '', 63),
(54, 'Aix', 13860, 'Rue du colonel machin', 42, '', 64),
(55, 'Marseille', 13004, 'Avenue des chartreux', 80, '', 65),
(56, 'Admin', 0, 'Rue des Admins', 0, '', 67);

CREATE TABLE IF NOT EXISTS `auteur` (
`AuteurID` int(11) NOT NULL,
  `AuteurBio` text,
  `AuteurNom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `auteur` (`AuteurID`, `AuteurBio`, `AuteurNom`) VALUES
(1, 'Victor Hugo est un poète, dramaturge, prosateur et dessinateur romantique français, né à Besançon le 26 février 1802  et mort le 22 mai 1885 à Paris. Il est considéré comme l’un des plus importants écrivains de langue française. Il est aussi une personnalité politique et un intellectuel engagé qui a joué un rôle majeur dans l’histoire du XIXe siècle.', 'Victor Hugo'),
(2, 'Honoré de Balzac, né Honoré Balzac à Tours le 20 mai 1799 et mort à Paris le 18 août 1850 (à 51 ans), est un écrivain français. Romancier, dramaturge, critique littéraire, critique d''art, essayiste, journaliste et imprimeur, il a laissé l''une des plus imposantes œuvres romanesques de la littérature française, avec plus de quatre-vingt-dix romans et nouvelles parus de 1829 à 1855, réunis sous le titre La Comédie humaine.', 'Honoré de Balzac'),
(3, 'Henry-René-Albert-Guy de Maupassant est un écrivain et journaliste littéraire français né le 5 août 1850 au château de Miromesnil à Tourville-sur-Arques (Seine-Inférieure) et mort le 6 juillet 1893 à Paris.', 'Guy de Maupassant'),
(4, 'Albert Camus, né le 7 novembre 1913 à Mondovi (aujourd’hui Dréan), près de Bône (aujourd’hui Annaba), en Algérie, et mort accidentellement le 4 janvier 1960 à Villeblevin, dans l''Yonne en France1, est un écrivain, philosophe, romancier, dramaturge, journaliste, essayiste et nouvelliste français. Il est aussi journaliste militant engagé dans la Résistance française et, proche des courants libertaires dans les combats moraux de l''après-guerre.', 'Albert Camus'),
(5, 'Émile Zola est un écrivain et journaliste français, né le 2 avril 1840 à Paris, où il est mort le 29 septembre 1902. Considéré comme le chef de file du naturalisme, c''est l''un des romanciers français les plus populaires, les plus publiés, traduits et commentés au monde. Ses romans ont connu de très nombreuses adaptations au cinéma et à la télévision.', 'Emile Zola'),
(13, 'Joanne Rowling, connue sous les pseudonymes de J. K. Rowling et Robert Galbraith, est une romancière et scénariste britannique née le 31 juillet 1965 dans l?agglomération de Yate, dans le Gloucestershire, en Angleterre. Elle doit sa notoriété mondiale à la série Harry Potter, dont les romans traduits en près de quatre-vingts langues ont été vendus à plus de 500 millions d''exemplaires dans le monde.', 'J.K. Rowling'),
(14, 'Anna Todd se marie à dix-huit ans avec un militaire. « J''aspirais à autre chose pour ma propre vie » que de devenir femme au foyer. Elle se met alors à écrire pour surmonter l''ennui des bases militaires.\r\n\r\nÀ l''origine, elle imagine une fanfiction avec comme personnage principal le chanteur du groupe One Direction. « Je me considère [?] comme une conteuse d''histoires hyperconnectée », dit-elle.\r\n\r\nTapée sur un smartphone ? qu''elle ne lâche jamais ? et publiée sur Wattpad, son histoire connaît un grand succès et, repérée par Simon & Schuster, aura droit à une édition papier en cinq livres. En France, la publication est réalisée par la maison d''édition Hugo & Cie et au Québec par Les Éditions de l''Homme. Les droits de l??uvre, pour une adaptation cinématographique, ont été achetés par Paramount Pictures.', 'Anna Todd'),
(15, 'Né en 1973 à Annecy, Franck Thilliez, ingénieur en nouvelles technologies1,2, vit à Mazingarbe3, petite commune proche de Béthune dans le Pas-de-Calais.\r\n\r\nRomancier, il est également scénariste et a coécrit, avec Nicolas Tackian, les dialogues du film de Pierre Isoard intitulé Alex Hugo, la mort et la belle vie : film inspiré d''un roman américain, relocalisé en Provence pour l''adaptation à la télévision.\r\n\r\n', 'Franck Thilliez');

CREATE TABLE IF NOT EXISTS `client` (
`CliID` int(11) NOT NULL,
  `CliNom` varchar(25) DEFAULT NULL,
  `CliPrenom` varchar(25) DEFAULT NULL,
  `CliSex` enum('H','F') DEFAULT NULL,
  `CliMail` varchar(50) DEFAULT NULL,
  `CliPseudo` varchar(25) DEFAULT NULL,
  `CliMdp` varchar(255) DEFAULT NULL,
  `CliBirthDate` date DEFAULT NULL,
  `CliAvatar` varchar(200) DEFAULT NULL,
  `CliStatut` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

INSERT INTO `client` (`CliID`, `CliNom`, `CliPrenom`, `CliSex`, `CliMail`, `CliPseudo`, `CliMdp`, `CliBirthDate`, `CliAvatar`, `CliStatut`) VALUES
(62, 'Ferro', 'Jean', 'H', 'jean.ferro@ynov.com', 'SkyNokK', 'JeOheYAqgIne2', '1998-12-24', NULL, '1'),
(63, 'PHILIBERT', 'OLIVIER', 'H', 'olivier.philibert@ynov.com', 'Deasp', 'JeOheYAqgIne2', '1998-12-11', NULL, '0'),
(64, 'Gr', 'Lau', 'F', 'laura.graca@ynov.com', 'Laura', 'JeYVTnBboiMxQ', '1999-04-10', NULL, '0'),
(65, 'Logos', 'Lorenzo', 'H', 'lorenzo_98@hotmail.fr', 'DJesusCry', 'JetENBqrS/A5U', '1998-04-26', NULL, '1'),
(66, 'Hubert', 'Dagobert', 'H', 'Hubert.dagobert@hotmail.fr', 'Dagogo', 'JeOheYAqgIne2', '1998-12-11', NULL, '0'),
(67, 'Admin', 'Admin', 'H', 'Admin@admin.admin', 'Admin', 'Jer0rllfSAfjk', '1990-01-01', NULL, '1');

CREATE TABLE IF NOT EXISTS `editeur` (
`EditID` int(11) NOT NULL,
  `EditNom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `editeur` (`EditID`, `EditNom`) VALUES
(1, 'Folio classique'),
(2, 'Gallimard'),
(3, 'Glénat'),
(6, 'Lgf');

CREATE TABLE IF NOT EXISTS `genre` (
`GenreID` int(11) NOT NULL,
  `GenreNom` varchar(25) DEFAULT NULL,
  `GenreDesc` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `genre` (`GenreID`, `GenreNom`, `GenreDesc`) VALUES
(1, 'Roman', 'Le roman est un genre littéraire, caractérisé essentiellement par une narration fictionnelle. La place importante faite à l''imagination transparaît dans certaines expressions comme « C''est du roman ! » ou dans certaines acceptions de l’adjectif « romanesque » qui renvoient à l''extraordinaire des personnages, des situations ou de l''intrigue.'),
(2, 'Tragédie', 'La tragédie est un genre théâtral dont l’origine remonte au théâtre grec antique. Contrairement à la comédie, elle met en scène des personnages de rangs élevés et se dénoue très souvent par la mort d’un ou de plusieurs personnages.'),
(3, 'Comédie', 'La comédie est un genre littéraire, théâtral, cinématographique et télévisuel fonctionnant sur le registre de l''humour. Née dans l''Antiquité grecque, elle est devenue un genre littéraire qui s''est épanoui de manière diversifiée en fonction des époques. Avant Molière, elle était dévalorisée comparée à la tragédie.'),
(7, 'Fantasy', 'La fantasy, ou fantasie est un genre littéraire présentant un ou plusieurs éléments surnaturels qui relèvent souvent du mythe et qui sont souvent incarnés par l?irruption ou l?utilisation de la magie.'),

CREATE TABLE IF NOT EXISTS `livre` (
`LivreID` int(11) NOT NULL,
  `LivreISBN` varchar(50) NOT NULL,
  `LivreTitre` varchar(200) NOT NULL,
  `LivreAnnee` int(11) DEFAULT NULL,
  `LivrePrix` decimal(15,3) NOT NULL,
  `LivreDesc` text,
  `LivreCouv` varchar(200) NOT NULL,
  `LivreFile` varchar(200) NOT NULL,
  `GenreID` int(11) NOT NULL,
  `EditID` int(11) NOT NULL,
  `AuteurID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO `livre` (`LivreID`, `LivreISBN`, `LivreTitre`, `LivreAnnee`, `LivrePrix`, `LivreDesc`, `LivreCouv`, `LivreFile`, `GenreID`, `EditID`, `AuteurID`) VALUES
(1, '2070584623', 'Harry Potter - Tome 1 : Harry Potter à l''école des', 2017, '8.500', 'Après la mort tragique de Lily et James Potter, leur fils Harry est recueilli par sa tante Pétunia, la s?ur de Lily et son oncle Vernon. Son oncle et sa tante, possédant une haine féroce envers les parents de Harry, le maltraitent et laissent leur fils Dudley l''humilier. Harry ne sait rien sur ses parents. On lui a toujours dit qu?ils étaient morts dans un accident de voiture.', 'Harrypotter1.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(2, '207058464X', 'Harry Potter - Tome 2 : Harry Potter et la chambre', 2017, '8.500', 'Alors que l''oncle Vernon, la tante Pétunia et son cousin Dudley reçoivent d''importants invités à dîner, Harry Potter est contraint de passer la soirée dans sa chambre. Dobby, un elfe, fait alors son apparition. Il lui annonce que de terribles dangers menacent l''école de Poudlard et qu''il ne doit pas y retourner en septembre. Harry refuse de le croire. Mais sitôt la rentrée des classes effectuée, ce dernier entend une voix malveillante.', 'Harrypotter2.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(3, '2070584925', 'Harry Potter - Tome 3 : Harry Potter et le prisonnier d''Azkaban', 2017, '8.900', 'Au cours de l''été, les informations télévisées du monde non magique annoncent l''évasion d''un très dangereux prisonnier du nom de Sirius Blacka. En parallèle, Harry se rend responsable d''un incident magique avec la tante Marge, la s?ur de Vernon, et s''enfuit de la maison de son oncle et sa tantea. Il rencontre dans la rue une sorte de chien errant caché dans la pénombre, avec de grands yeux scintillants. Dans sa panique, il fait apparaître le Magicobus par erreur, et en profite pour demander à être conduit au Chaudron Baveur, à Londres.', 'Harrypotter3.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(4, '2070585204', 'Harry Potter - Tome 4 : Harry Potter et la coupe de feu', 2017, '13.400', 'Âgé de quatorze ans, Harry est tourmenté par des cauchemars dans lesquels il rentre en connexion avec l''esprit de Voldemort, voyant ainsi tout ce que fait celui-ci. En vacances chez les Weasley, il assiste à la coupe du monde de Quidditch, durant laquelle les fidèles de Voldemort (les Mangemorts) défilent en semant la terreur et la panique dans le campement où Harry et les Weasley se trouvent.', 'HP4.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(5, '2070585212', 'Harry Potter - Tome 5 : Harry Potter et l''Ordre du Phénix', 2017, '14.900', 'Durant l''été chez les Dursley, Harry Potter, encore traumatisé par la mort de Cédric Diggory et par le retour de Voldemort au terme du Tournoi des Trois Sorciers, a des cauchemars récurrents la nuit. Un jour, alors qu''il est abordé par son détestable cousin Dudley, il perd patience et le menace de sa baguette magique. À ce moment-là, ils sont attaqués par deux Détraqueurs venus de la prison d''Azkaban. Harry arrive à les repousser en créant un Patronus, mais la confrontation traumatise profondément Dudley, qui en perd presque la raison; au grand désespoir de l''oncle Vernon.', 'HP5.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(6, '2070585220', 'Harry Potter - Tome 6 : Harry Potter et le Prince de Sang-Mêlé', 2017, '13.500', 'Voldemort est de retour et exerce son pouvoir sur le monde entier. Sorciers comme Moldus sont maintenant en danger. Des Mangemorts apparaissent à Londres et provoquent l''effondrement du Millennium Bridge, tout en kidnappant au passage le fabricant de baguettes, Ollivander.\r\n\r\nDurant l''été, Harry, qui vient de fêter son seizième anniversaire, rencontre Albus Dumbledore dans une gare.', 'HP6.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(7, '2070585239', 'Harry Potter - Tome 7 : Harry Potter et les Reliques de la Mort', 2017, '13.500', 'À la suite du départ des Dursley, les amis de Harry ainsi qu?une partie des membres de l?Ordre du Phénix se rendent au 4, Privet Drive afin d''emmener Harry au Terrier, en sécurité. Pour cela, ils expliquent un plan à Harry au cours duquel il y aurait sept Harry Potter à l''aide du Polynectar, ce qui préservera le vrai Harry en cas d''attaque, imminente selon Maugrey Fol ?il. Au cours de la bataille, Hedwige (la chouette de Harry) est atteinte par un sortilège et meurt en protégeant son maître, ce qui révèle aux Mangemorts qui est le véritable Harry. Après avoir échappé de peu à Voldemort, Harry et Hagrid réussissent à atteindre le Terrier. Les autres reviennent petit à petit. Mais les nouvelles ne sont pas très bonnes : Georges a perdu une oreille à cause du Sectumsempra lancé par Rogue et ils apprennent par Bill Weasley la mort de Maugrey Fol ?il.', 'HP7.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(8, '2075085153', 'Harry Potter - Edition augmentée : Les animaux fantastiques', 2017, '12.900', 'Inventaire et classification de la faune fantastique décrivant 75 espèces classées en fonction de leur dangerosité : quintaped, puffskein, knarl, clabbert et autres poghrebins. L''ouvrage est vendu au profit de l''association caritative Comic Relief, qui a pour vocation l''aide à l''enfance défavorisée dans les pays du tiers-monde.', 'LAF.jpg', 'fichier_du_livre.txt', 7, 2, 13),
(9, '2253069086', 'After - Tome 4 : After we rise', 2016, '7.900', 'Grâce à Zed, Tessa échappe au pire et peut commencer une nouvelle vie indépendante à Seattle. De son côté, Hardin se rapproche de plus en plus de Richard, le père de Tessa, jusqu''à l''héberger dans leur ancien appartement pour l''aider à s''en sortir ! L''occasion parfaite pour prouver qu''il a changé et que, peut-être, il peut devenir quelqu''un de bien. Mais est-ce une manipulation de plus à son actif ?\r\nReste-t-il un espoir pour Tessa et son incorrigible bad boy ? Les nuits entre les deux amants sont plus passionnées que jamais et Tessa se jette à corps perdu dans cette liaison tumultueuse. Pourtant son entourage semble croire que sa relation avec Hardin est vouée à l''échec. Elle va alors mener l''un de ses plus durs combats pour sauver son couple. C''est sans compter sur un cruel coup du destin qui va faire ressortir les pires démons d''Hardin...\r\nTessa arrivera-t-elle à chasser les ténèbres dans l''esprit torturé de son homme ?', 'after4.jpg', 'fichier_du_livre.txt', 1, 6, 14),
(10, '2253194581', 'After - Tome 1 : After', 2016, '7.900', 'Tessa est une jeune fille ambitieuse, volontaire, réservée. Elle contrôle sa vie. Son petit ami, Noah, est le gendre idéal. Celui que sa mère adore, celui qui ne fera pas de vagues. Son avenir est tout tracé : de belles études, un bon job à la clé, un mariage heureux... Mais ça, c''était avant qu''il ne la bouscule dans le dortoir. Lui, c''est Hardin, bad boy, sexy, tatoué, piercé. Grossier, provocateur et cruel, c?est le type le plus détestable que Tessa ait jamais croisé. Et pourtant, le jour où elle se retrouve seule avec lui, elle perd tout contrôle. Cet homme ingérable fait naître en elle une passion sans limites. Une passion qui, contre toute attente, semble réciproque...\r\nInitiation, sexe, jalousie, mensonges, entre Tessa et Hardin, est-ce une histoire destructrice ou un amour absolu ?\r\nLe premier tome d?une série phénomène, véritable best-seller planétaire.', 'AFTER1.jpeg', 'fichier_du_livre.txt', 1, 1, 14),
(11, '225319459X', 'After - Tome 2 : After we collided', 2016, '7.900', 'Après un début tumultueux, la relation de Tessa et Hardin semblait s?arranger. Jusqu''au moment où Tessa découvre les secrets du passé d''Hardin, qui la bouleversent. Elle savait qu''il pouvait être cruel, mais à ce point? Est-il vraiment l''homme dont Tessa est tombée éperdument amoureuse, ou ment-il depuis le début ? Ce n''est pas si facile. Le souvenir de leurs nuits passionnées trouble son jugement. Tessa n''est pas sûre de supporter une autre promesse non tenue, mais elle a besoin de lui pour avancer. Hardin sait qu''il a fait une erreur, peut-être la plus grande de sa vie, et qu''il peut perdre Tessa. Il sait aussi qu?il faut parfois se méfier de ses amis. Il veut se battre pour elle, mais pourra-t-il changer par amour ?\r\nLe deuxième tome d?une série phénomène, véritable best-seller planétaire.', 'after2.jpeg', 'fichier_du_livre.txt', 1, 6, 14),
(12, '2253194603', 'After - Tome 3 : After we fell', 2016, '7.900', 'Après le tumulte de l''université, Tessa et Hardin tentent de sauver leur couple à Seattle. Anna Todd, jeune écrivaine connue du monde entier pour son habitude de taper ses romans sur smartphone, continue de dépoussiérer la littérature érotique. Avec elle, l''amour ne sent pas la naphtaline ! Aucune fioriture à l''eau de rose n''entache les étreintes de nos deux amoureux. L''air de rien, avec sa saga, Anna Todd réalise aussi une analyse de la société occidentale. Elle dépeint la jeunesse d''aujourd''hui dans l''Amérique contemporaine. After we fell donne l''envie de tomber amoureux.', 'after4.jpeg', 'fichier_du_livre.txt', 1, 6, 14),
(13, '2266246445', 'Puzzle', 2014, '8.300', 'Ilan et Chloé sont spécialistes des chasses au trésor. Longtemps, ils ont rêvé de participer au jeu ultime, celui dont on ne connaît que le nom : Paranoïa. Le jour venu, ils reçoivent la règle numéro 1 : Quoi qu''il arrive, rien de ce que vous allez vivre n''est la réalité. Il s''agit d''un jeu. Suivie, un peu plus tard, de la règle numéro 2 : L''un d''entre vous va mourir. Et quand les joueurs trouvent un premier cadavre, jeu et réalité commencent à se confondre. Paranoïa peut alors réellement commencer...', 'puzzle.jpg', 'fichier_du_livre.txt', 2, 2, 15),
(14, '9782070409341', 'Le Père Goriot', 1835, '20.000', 'Le Père Goriot est un roman d’Honoré de Balzac, commencé à Saché en 1834, dont la publication commence dans la Revue de Paris et qui paraît en 1842 en librairie. Il fait partie des Scènes de la vie privée de La Comédie humaine.', 'peregoriot.jpg', '', 3, 1, 2),
(15, '9782070409358 ', 'Bel Ami', 1885, '20.000', 'Bel-Ami est un roman réaliste de Guy de Maupassant (1850-1893), publié en 1885. Le roman paraît d''abord sous forme de feuilleton dans Gil Blas, avant d''être édité en volume aux éditions Ollendorff. L''action du récit se déroule dans Paris pendant la seconde moitié du XIXe siècle.', 'belamiCouv.jpg', '', 1, 2, 3),
(16, '9782070411429', 'Germinal', 1885, '10.000', 'Germinal est un roman d''Émile Zola publié en 1885. Il s''agit du treizième roman de la série des Rougon-Macquart. Écrit d''avril 1884 à janvier 1885, le roman paraît d''abord en feuilleton entre novembre 1884 et février 1885 dans le Gil Blas. Il connaît sa première édition en mars 1885. Depuis, il a été publié dans plus d''une centaine de pays.', 'GerminalCouv.jpg', '', 2, 3, 5),
(17, '9782070453177', 'L''étranger', 1942, '10.000', 'L''Étranger est le premier roman d’Albert Camus, paru en 1942. Il prend place dans la tétralogie que Camus nommera « cycle de l’absurde » qui décrit les fondements de la philosophie camusienne : l’absurde.', 'etranger.jpg', '', 7, 1, 4),
(18, '9782072730672', 'Les Misérables', 1862, '20.000', 'Les Misérables est un roman de Victor Hugo paru en 1862. Il a donné lieu à de nombreuses adaptations au cinéma.', 'miserables.png', '', 2, 1, 1);

ALTER TABLE `adresse`
 ADD PRIMARY KEY (`AdrID`), ADD KEY `FK_CliID` (`CliID`);

ALTER TABLE `auteur`
 ADD PRIMARY KEY (`AuteurID`);

ALTER TABLE `client`
 ADD PRIMARY KEY (`CliID`);

ALTER TABLE `editeur`
 ADD PRIMARY KEY (`EditID`);

ALTER TABLE `genre`
 ADD PRIMARY KEY (`GenreID`);

ALTER TABLE `livre`
 ADD PRIMARY KEY (`LivreID`);

ALTER TABLE `adresse`
MODIFY `AdrID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;

ALTER TABLE `auteur`
MODIFY `AuteurID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;

ALTER TABLE `client`
MODIFY `CliID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;

ALTER TABLE `editeur`
MODIFY `EditID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;

ALTER TABLE `livre`
MODIFY `LivreID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;

ALTER TABLE `adresse`
ADD CONSTRAINT `FK_CliID` FOREIGN KEY (`CliID`) REFERENCES `client` (`CliID`);
