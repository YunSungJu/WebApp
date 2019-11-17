INSERT INTO student
VALUES (20070002, 'Jane Smith', 3, 4, 'Business Administration');

INSERT INTO student
VALUES (20060001, 'Ashley Jackson', 4, 4, 'Business Administration');

INSERT INTO student
VALUES (20030001, 'Liam Johnson', 4, 2, 'Electrical Engineering');

INSERT INTO student
VALUES (20040003, 'Jacob Lee', 3, 2, 'Electrical Engineering');

INSERT INTO student
VALUES (20060002, 'Noah Kim', 3, 1, 'Computer Science'); 

INSERT INTO student
VALUES (20100002, 'Ava Lim', 3, 4, 'Business Administration');

INSERT INTO student
VALUES (20110001, 'Emma Watson', 2, 1, 'Computer Science'); 

INSERT INTO student
VALUES (20080003, 'Lisa Maria', 4, 3, 'Law');

INSERT INTO student
VALUES (20040002, 'Jacob William', 4, 5, 'Law');

INSERT INTO student
VALUES  (20070001, 'Emily Rose', 4, 4, 'Business Administration');

INSERT INTO student
VALUES (20100001, 'Ethan Hunt', 3, 4, 'Business Administration'); 

INSERT INTO student
VALUES (20110002, 'Jason Mraz', 2, 1, 'Electrical Engineering');

INSERT INTO student
VALUES (20030002, 'John Smith', 5, 1, 'Computer Science'); 

INSERT INTO student
VALUES (20070003, 'Sophia Park', 4, 3, 'Law');

INSERT INTO student
VALUES (20070007, 'James Michael', 2, 4, 'Business Administration');

INSERT INTO student
VALUES (20100003, 'James Bond', 3, 1, 'Computer Science');

INSERT INTO student
VALUES (20070005, 'Olivia Madison', 2, 5, 'English Language and Literature');





ALTER TABLE department
    CHANGE COLUMN dept_name dept_name VARCHAR(50);

ALTER TABLE department
    CHANGE COLUMN office office VARCHAR(50);

INSERT INTO department
VALUES (NULL, 'Computer Science', 'Science Building 101', '02-3290-0123');

INSERT INTO department
VALUES (NULL, 'Electrical Engineering', 'Engineering Building 401', '02-3290-2345');

INSERT INTO department
VALUES (NULL, 'Law', 'Law Building 201', '02-3290-7896');

INSERT INTO department
VALUES (NULL, 'Business Administration', 'Business Building 104', '02-3290-1112');

INSERT INTO department
VALUES (NULL, 'English Language and Literature', 'Language Building 303', '02-3290-4412');
























