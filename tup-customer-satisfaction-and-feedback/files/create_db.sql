CREATE TABLE `tup_customer_satisfaction_and_feedback`.`evaluations`
(
    `eval_id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(100) NOT NULL,
    `last_name` VARCHAR(100),
    `email` VARCHAR(100),
    `contactno` VARCHAR(100),
    `company` VARCHAR(100) NOT NULL,
    `office` VARCHAR(100) NOT NULL,
    `employee_name` VARCHAR(100) NOT NULL,
    `criteria_1` VARCHAR(100) NOT NULL,
    `criteria_2` VARCHAR(100) NOT NULL,
    `criteria_3` VARCHAR(100) NOT NULL,
    `criteria_4` VARCHAR(100) NOT NULL,
    `criteria_5` VARCHAR(100) NOT NULL,
    `feedback` VARCHAR(100) NOT NULL,
    `comment` VARCHAR(100) NOT NULL,
    `eval_date` VARCHAR(100) NOT NULL,
     PRIMARY KEY (`eval_id`)
);