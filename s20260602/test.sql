CREATE TABLE `db202606`.`students` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `mobile` VARCHAR(20) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO
    `students` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911'),
    (NULL, 'bob', '0922'),
    (NULL, 'cat', '0933'),
    (NULL, 'dog', '0944')


UPDATE
    `students`
SET
    `mobile` = '0922-123'
WHERE
    `students`.`id` = 2


DELETE FROM
    students
WHERE
    `students`.`id` = 3


SELECT
    *
FROM
    `students`