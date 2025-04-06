CREATE TABLE `etudiants`.`section` (`id` INT NULL DEFAULT NULL AUTO_INCREMENT ,
 `designation` ENUM('GL','RT','IMI','IIA','MPI','CBA','BIO','CH') NULL DEFAULT '' , 
 `description` VARCHAR(100) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


 INSERT INTO `section` (`id`, `designation`, `description`) VALUES ('1', 'GL', 'Génie Logiciel'),
    ('2', 'RT', 'réseau et télécommunication'),
    ('3', 'IMI', 'Instrumentation et Maintenance Industrielle'),
    ('4', 'IIA', 'Informatique Industrielle Automatique '),
    ('5', 'CH', 'Chimie   Industrielle'),
    ('6', 'BIO', 'Biologie Industrielle'),
    ('7', 'MPI', 'Maths, Physiques & Informatiques'),
    ('8', 'CBA', 'Chimie & Biologie Indistruelle');

    