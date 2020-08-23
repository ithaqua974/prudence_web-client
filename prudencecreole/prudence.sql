-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema prudencecreole
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `prudencecreole` ;

-- -----------------------------------------------------
-- Schema prudencecreole
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `prudencecreole` DEFAULT CHARACTER SET utf8 ;
USE `prudencecreole` ;

-- -----------------------------------------------------
-- Table `prudencecreole`.`user_role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prudencecreole`.`user_role` ;

CREATE TABLE IF NOT EXISTS `prudencecreole`.`user_role` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `role_id` INT(10) UNSIGNED NOT NULL,
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `user_role_user_id_foreign` (`user_id` ASC),
  INDEX `user_role_role_id_foreign` (`role_id` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `prudencecreole`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prudencecreole`.`users` ;

CREATE TABLE IF NOT EXISTS `prudencecreole`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(191) NOT NULL,
  `prenom` VARCHAR(191) NOT NULL,
  `adresse` VARCHAR(191) NOT NULL,
  `num_client` VARCHAR(191) NULL DEFAULT NULL,
  `email` VARCHAR(191) NOT NULL,
  `role_id` INT(11) NOT NULL DEFAULT '1',
  `telephone` VARCHAR(191) NOT NULL,
  `password` VARCHAR(191) NOT NULL,
  `actif` TINYINT(1) NULL DEFAULT NULL,
  `prenom_conjoint` VARCHAR(191) NULL DEFAULT NULL,
  `njf_conjoint` VARCHAR(191) NULL DEFAULT NULL,
  `nb_enfants` INT(11) NULL DEFAULT NULL,
  `nb_piece` INT(11) NULL DEFAULT NULL,
  `surface` INT(11) NULL DEFAULT NULL,
  `propriete` TINYINT(1) NULL DEFAULT NULL,
  `modele` VARCHAR(191) NULL DEFAULT NULL,
  `marque` VARCHAR(191) NULL DEFAULT NULL,
  `immatriculation` VARCHAR(191) NULL DEFAULT NULL,
  `chevaux` INT(11) NULL DEFAULT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `user_role_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `user_role_id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC),
  INDEX `fk_users_user_role1_idx` (`user_role_id` ASC))
ENGINE = MyISAM
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `prudencecreole`.`contrats`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prudencecreole`.`contrats` ;

CREATE TABLE IF NOT EXISTS `prudencecreole`.`contrats` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `num_contrat` VARCHAR(191) NULL DEFAULT NULL,
  `type` VARCHAR(191) NOT NULL,
  `montant` INT(11) NOT NULL,
  `actif` TINYINT(1) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `users_id` INT(10) UNSIGNED NOT NULL,
  `users_user_role_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `users_id`, `users_user_role_id`),
  INDEX `fk_contrats_users1_idx` (`users_id` ASC, `users_user_role_id` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `prudencecreole`.`contrat_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prudencecreole`.`contrat_types` ;

CREATE TABLE IF NOT EXISTS `prudencecreole`.`contrat_types` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `20` VARCHAR(191) NOT NULL,
  `contrats_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `contrats_id`),
  INDEX `fk_contrat_types_contrats1_idx` (`contrats_id` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `prudencecreole`.`migrations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prudencecreole`.`migrations` ;

CREATE TABLE IF NOT EXISTS `prudencecreole`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(191) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
AUTO_INCREMENT = 434
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `prudencecreole`.`password_resets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prudencecreole`.`password_resets` ;

CREATE TABLE IF NOT EXISTS `prudencecreole`.`password_resets` (
  `email` VARCHAR(191) NOT NULL,
  `token` VARCHAR(191) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  INDEX `password_resets_email_index` (`email` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `prudencecreole`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `prudencecreole`.`roles` ;

CREATE TABLE IF NOT EXISTS `prudencecreole`.`roles` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `nom` VARCHAR(191) NOT NULL,
  `description` VARCHAR(191) NOT NULL,
  `user_role_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`, `user_role_id`),
  INDEX `fk_roles_user_role_idx` (`user_role_id` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
