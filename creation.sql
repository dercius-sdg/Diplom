SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Registration`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Registration` (
  `idRegistration` VARCHAR(5) NOT NULL ,
  `Name` VARCHAR(25) NOT NULL ,
  `Surrname` VARCHAR(25) NOT NULL ,
  `Lastname` VARCHAR(25) NULL ,
  `Phones` VARCHAR(10) NOT NULL ,
  `Date of Birth` DATE NULL ,
  `Login` VARCHAR(30) NOT NULL ,
  `Password` VARCHAR(20) NOT NULL ,
  `E-mail` VARCHAR(50) NOT NULL ,
  `Question` TINYINT(1) NULL ,
  PRIMARY KEY (`idRegistration`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `Login_UNIQUE` ON `mydb`.`Registration` (`Login` ASC) ;

CREATE UNIQUE INDEX `E-mail_UNIQUE` ON `mydb`.`Registration` (`E-mail` ASC) ;


-- -----------------------------------------------------
-- Table `mydb`.`Services`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Services` (
  `idServices` VARCHAR(10) NOT NULL ,
  `Services_view` ENUM('PhotoService', 'VideoService', 'Rent', 'Equipment') NOT NULL ,
  `idView` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`idServices`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Custom settings`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Custom settings` (
  `idCustom settings` VARCHAR(5) NOT NULL ,
  `idRegistration` VARCHAR(5) NOT NULL ,
  `Css_settings` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCustom settings`) ,
  CONSTRAINT `idRegistration`
    FOREIGN KEY (`idRegistration` )
    REFERENCES `mydb`.`Registration` (`idRegistration` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `idRegistration_idx` ON `mydb`.`Custom settings` (`idRegistration` ASC) ;


-- -----------------------------------------------------
-- Table `mydb`.`Employees`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Employees` (
  `idEmployees` VARCHAR(3) NOT NULL ,
  `Emp_Name` VARCHAR(25) NOT NULL ,
  `Emp_Surname` VARCHAR(25) NOT NULL ,
  `Emp_Lastname` VARCHAR(25) NOT NULL ,
  `Emp_DateofBirth` DATE NOT NULL ,
  `idPosition` VARCHAR(3) NOT NULL ,
  `idWorks` VARCHAR(10) NULL ,
  `Emp_photo` VARCHAR(45) NULL ,
  PRIMARY KEY (`idEmployees`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Comments` (
  `idComments` VARCHAR(10) NOT NULL ,
  `idRegistration` VARCHAR(5) NOT NULL ,
  `Com_text` TEXT NULL ,
  `Com_date` DATETIME NULL ,
  PRIMARY KEY (`idComments`) ,
  CONSTRAINT `idRegistration`
    FOREIGN KEY (`idRegistration` )
    REFERENCES `mydb`.`Registration` (`idRegistration` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `Com_date_UNIQUE` ON `mydb`.`Comments` (`Com_date` ASC) ;

CREATE INDEX `idRegistration_idx` ON `mydb`.`Comments` (`idRegistration` ASC) ;


-- -----------------------------------------------------
-- Table `mydb`.`Equipment`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Equipment` (
  `idEquipment` VARCHAR(10) NOT NULL ,
  `Eq_title` VARCHAR(100) NOT NULL ,
  `Eq_characteristic` TINYTEXT NOT NULL ,
  `Eq_price` INT NOT NULL ,
  PRIMARY KEY (`idEquipment`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Rent`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Rent` (
  `idRent` VARCHAR(10) NOT NULL ,
  `idRegistration` VARCHAR(5) NOT NULL ,
  `Rent_obgective` VARCHAR(100) NOT NULL ,
  `idEquipment` VARCHAR(10) NOT NULL ,
  `Equipment_idEquipment` VARCHAR(10) NULL ,
  PRIMARY KEY (`idRent`) ,
  CONSTRAINT `fk_Rent_Equipment1`
    FOREIGN KEY (`Equipment_idEquipment` )
    REFERENCES `mydb`.`Equipment` (`idEquipment` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Rent_Equipment1_idx` ON `mydb`.`Rent` (`Equipment_idEquipment` ASC) ;


-- -----------------------------------------------------
-- Table `mydb`.`Video_services`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Video_services` (
  `idVideo_services` VARCHAR(10) NOT NULL ,
  `Vids_view` VARCHAR(100) NOT NULL ,
  `Vids_price` TINYTEXT NOT NULL ,
  `Vids_price` INT NOT NULL ,
  PRIMARY KEY (`idVideo_services`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Photography_services`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Photography_services` (
  `idPhotography_services` VARCHAR(10) NOT NULL ,
  `Phs_view` VARCHAR(100) NOT NULL ,
  `Phs_characteristic` TINYTEXT NOT NULL ,
  `Phs_price` INT NOT NULL ,
  PRIMARY KEY (`idPhotography_services`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Works`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Works` (
  `idWorks` VARCHAR(10) NOT NULL ,
  `Works_title` VARCHAR(45) NOT NULL ,
  `Description` VARCHAR(45) NULL ,
  `idEmployees` VARCHAR(4) NOT NULL ,
  PRIMARY KEY (`idWorks`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Position`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Position` (
  `idPosition` VARCHAR(3) NOT NULL ,
  `Position_view` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`idPosition`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Employees_has_Position`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Employees_has_Position` (
  `Employees_idEmployees` VARCHAR(3) NOT NULL ,
  `Position_idPosition` VARCHAR(3) NOT NULL ,
  PRIMARY KEY (`Employees_idEmployees`, `Position_idPosition`) ,
  CONSTRAINT `fk_Employees_has_Position_Employees1`
    FOREIGN KEY (`Employees_idEmployees` )
    REFERENCES `mydb`.`Employees` (`idEmployees` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Employees_has_Position_Position1`
    FOREIGN KEY (`Position_idPosition` )
    REFERENCES `mydb`.`Position` (`idPosition` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Employees_has_Position_Position1_idx` ON `mydb`.`Employees_has_Position` (`Position_idPosition` ASC) ;

CREATE INDEX `fk_Employees_has_Position_Employees1_idx` ON `mydb`.`Employees_has_Position` (`Employees_idEmployees` ASC) ;


-- -----------------------------------------------------
-- Table `mydb`.`Employees_has_Works`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Employees_has_Works` (
  `Employees_idEmployees` VARCHAR(3) NOT NULL ,
  `Works_idWorks` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`Employees_idEmployees`, `Works_idWorks`) ,
  CONSTRAINT `fk_Employees_has_Works_Employees1`
    FOREIGN KEY (`Employees_idEmployees` )
    REFERENCES `mydb`.`Employees` (`idEmployees` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Employees_has_Works_Works1`
    FOREIGN KEY (`Works_idWorks` )
    REFERENCES `mydb`.`Works` (`idWorks` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Employees_has_Works_Works1_idx` ON `mydb`.`Employees_has_Works` (`Works_idWorks` ASC) ;

CREATE INDEX `fk_Employees_has_Works_Employees1_idx` ON `mydb`.`Employees_has_Works` (`Employees_idEmployees` ASC) ;


-- -----------------------------------------------------
-- Table `mydb`.`Orders`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Orders` (
  `Services_idServices` VARCHAR(10) NOT NULL ,
  `Registration_idRegistration` VARCHAR(5) NOT NULL ,
  `Date_orders` DATETIME NOT NULL ,
  `Purchase` INT NOT NULL ,
  PRIMARY KEY (`Services_idServices`, `Registration_idRegistration`) ,
  CONSTRAINT `fk_Services_has_Registration_Services1`
    FOREIGN KEY (`Services_idServices` )
    REFERENCES `mydb`.`Services` (`idServices` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Services_has_Registration_Registration1`
    FOREIGN KEY (`Registration_idRegistration` )
    REFERENCES `mydb`.`Registration` (`idRegistration` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Services_has_Registration_Registration1_idx` ON `mydb`.`Orders` (`Registration_idRegistration` ASC) ;

CREATE INDEX `fk_Services_has_Registration_Services1_idx` ON `mydb`.`Orders` (`Services_idServices` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
