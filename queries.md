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
