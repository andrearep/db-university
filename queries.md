## QUERIES

# 1
SELECT * FROM `students` WHERE `date_of_birth` like "1990%"

# 2
SELECT * FROM `courses` WHERE `cfu`> 10

# 3
SELECT * FROM `students` WHERE `date_of_birth` < '1991-07-02'

# 4
SELECT * FROM `courses` WHERE `period` = 'I semestre' AND `year`= 1

# 5
SELECT * FROM `exams` WHERE `hour`>'14:00:00' and `date`='2020-06-20'

# 6
SELECT * FROM `degrees` WHERE `level`='magistrale'

# 7
SELECT COUNT(*) FROM `departments`

# 8
SELECT COUNT(1) - COUNT(`phone`) FROM `teachers`

## GROUP BY

# 1
SELECT COUNT(*) AS 'number_students_for_years', YEAR(enrolment_date) as `year` FROM `students` GROUP BY `year`

# 2
SELECT count(*) as'num_teachers', office_address FROM `teachers` GROUP by office_address

# 3
SELECT AVG(vote) AS 'average_vote', exam_id FROM `exam_student` GROUP BY exam_id

# 4
SELECT COUNT(*) as 'number_degrees', department_id FROM `degrees` GROUP BY department_id

## JOIN

# 1
SELECT students.* 
FROM students
JOIN degrees
ON students.degree_id = degrees.id
WHERE degrees.name LIKE '%Economia%'

# 2
SELECT degrees.* 
FROM degrees
JOIN departments
ON degrees.department_id = departments.id
WHERE departments.name = 'Dipartimento di Neuroscienze'

# 3
SELECT courses.* 
FROM courses
JOIN course_teacher
ON courses.id= course_teacher.course_id
WHERE course_teacher.teacher_id = 44

# 4
SELECT students.*, degrees.name as 'corso_di_laurea', departments.name AS 'dipartimento'
FROM students
JOIN degrees
ON students.degree_id= degrees.id
JOIN departments
ON degrees.department_id = departments.id

# 5
SELECT degrees.*, courses.name as 'corso', teachers.*
FROM courses
JOIN degrees
ON degrees.id= courses.degree_id
JOIN course_teacher
ON courses.id = course_teacher.course_id
JOIN teachers
ON course_teacher.teacher_id= teachers.id

# 6
SELECT teachers.*
FROM teachers
JOIN course_teacher
ON course_teacher.teacher_id= teachers.id
JOIN courses
ON courses.id = course_teacher.course_id
JOIN degrees
ON courses.degree_id =degrees.id
JOIN departments
ON degrees.department_id=departments.id
WHERE departments.name= 'Dipartimento di Matematica'
