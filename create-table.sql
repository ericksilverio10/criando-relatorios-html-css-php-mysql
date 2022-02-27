CREATE TABLE `relatorio` (
  `data` date NOT NULL,
  `material` varchar(45) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
SELECT * FROM `handspike-media`.relatorio;