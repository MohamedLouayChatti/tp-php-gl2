

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `etudiants`.`etudiant` 
(`id` INT NOT NULL AUTO_INCREMENT ,
 `name` VARCHAR(25) NOT NULL ,
 `dateDeNaissance` DATE NOT NULL , 
 `section` ENUM('GL','RT','IMI','IIA','MPI','CBA','BIO','CH') NOT NULL , 
 `imageURL` VARCHAR(100) NOT NULL DEFAULT 'img/default.png' , PRIMARY KEY (`id`)) 
 ENGINE = InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


 INSERT INTO `etudiant` (`id`, `name`, `dateDeNaissance`, `section`, `imageURL`) VALUES
  ('1', 'yassine benyahia', '2025-04-02', 'GL', 'img/default.png'),
   ('2', 'louay chatti', '2005-04-30', 'GL', 'img/louaychatti.png'),
    ('3', 'med amine laouini', '2004-04-01', 'GL', 'img/medaminelaouini.png'),
  ('4', 'sadri skander', '2024-10-01', 'IMI', 'img/sadriskander.png');