UPDATE department
SET dept_name = 'Electrical and Electronics Engineering'
WHERE dept_no=2;

INSERT INTO department
VALUES (NULL, 'Special Education', 'Education Building 403', '02-3290-2347');


UPDATE student
SET dept_no = 6
WHERE name = 'Emma Watson';

DELETE FROM student
WHERE name='Jason Mraz';

DELETE FROM student
WHERE name='John Smith';