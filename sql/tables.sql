CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `login_2` (`login`),
  UNIQUE KEY `login_3` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `users` (`id`, `nom`, `prenom`, `login`, `email`, `mdp`, `role`) VALUES
(1, 'bob', 'bob', 'bob', '', 'azerty', 0),
(2, 'Vesco', 'Achille', 'u', 'achillevesco@gmail.com', 'rety', 1),
(3, 'Vesco', 'Achille', 'uss', 'achillevesco@gmail.com', 'qsde', 1),
(5, 'Vesco', 'Achille', 'usshgf', 'achillevesco@gmail.com', 'iuyt', 1);