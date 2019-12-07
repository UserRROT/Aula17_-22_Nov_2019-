CREATE TABLE IF NOT EXISTS `3234172_cadastro`.`dadosawardspace` ( 
`id` INT(20) NOT NULL AUTO_INCREMENT , 
`nome` VARCHAR(30) NOT NULL , 
`telefone` VARCHAR(30),
`email` VARCHAR(30) NOT NULL ,
`cidade` VARCHAR(30) NOT NULL ,
PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;