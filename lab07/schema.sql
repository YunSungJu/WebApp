CREATE table student (
	student_id INTEGER PRIMARY KEY NOT NULL,
	name VARCHAR(20) NOT NULL,
	year TINYINT(1) NOT NULL DEFAULT 1,
	dept_no INTEGER NOT NULL,
	major VARCHAR(20)
);

CREATE table department (
	dept_no INTEGER PRIMARY KEY AUTO_INCREMENT,
	dept_name VARCHAR(20) UNIQUE,
	office VARCHAR(20) ,
	office_tel VARCHAR(13) NOT NULL
);


ALTER TABLE student
    CHANGE COLUMN major major VARCHAR(50);

ALTER TABLE student
	ADD COLUMN gender CHAR(6);

DESC student;

ALTER TABLE student
	DROP COLUMN gender;

DESC student;	