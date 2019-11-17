SELECT * FROM student WHERE major = 'Computer Science';

SELECT student_id, year, major FROM student;

SELECT * FROM student WHERE year=3;

SELECT * FROM student WHERE year=1 or year=2;

SELECT * FROM student WHERE dept_no=4;

SELECT * FROM student WHERE student_id LIKE '2007%';

SELECT * FROM student ORDER BY student_id;

SELECT major FROM student GROUP BY major HAVING avg(year) > 3;

SELECT * FROM student WHERE dept_no=4 and student_id LIKE '2007%' LIMIT 2;