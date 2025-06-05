-- Write your PostgreSQL query statement below
SELECT 
    d.name as Department,
    e.name as Employee,
    e.salary as Salary
    from Department d join Employee e on e.departmentId = d.id
    where e.salary IN(
        SELECT  DISTINCT(s.salary)
        FROM Employee s
        WHERE s.departmentId = d.id 
        ORDER BY s.salary Desc
        LIMIT 3)
    
