///////////////////////////////////////////////////

TASK 1: Average Population

select round(sum(population)/count(id),1) from city;

///////////////////////////////////////////////////

TASK 2: Revising Aggregations - The Sum Function

select sum(population) from city where district='California';

///////////////////////////////////////////////////

TASK 3: Revising Aggregations - The Count Function

select count(id) from city where population > 100000;

///////////////////////////////////////////////////

TASK 4: Type of Triangle

select case 
    when a>=(b+c) or b>=(a+c) or c>=(a+b) then 'Not A Triangle'
    when a=b and b=c then 'Equilateral'
    when a=b or b=c or a=c then 'Isosceles'
    else 'Scalene'
end from triangles;

///////////////////////////////////////////////////

TASK 5: Employee Salaries

select name from employee where salary>2000 and months < 10 order by employee_id asc;

///////////////////////////////////////////////////

TASK 6: Weather Observation Station 11

select distinct city from station where left(city,1) not in ('A', 'E', 'I', 'O', 'U') or right(city,1) not in ('a','e','i','o','u');

///////////////////////////////////////////////////

TASK 7: Weather Observation Station 10

select distinct city from station where right(city,1) not in ('a','e','i','o','u');

///////////////////////////////////////////////////

TASK 8: Weather Observation Station 9

select distinct city from station where left(city,1) not in ('A','E','I','O','U');

///////////////////////////////////////////////////

TASK 9: Weather Observation Station 8

select distinct city from station where left(city,1) in ('A', 'E', 'I', 'O', 'U') and right(city,1) in ('a','e','i','o','u');

///////////////////////////////////////////////////

TASK 10: Weather Observation Station 7

select distinct city from station where right(city,1) in ('a','e','i','o','u');

///////////////////////////////////////////////////

TASK 11: Weather Observation Station 6

select distinct city from station where left(city,1) in ('A','E','I','O','U');

///////////////////////////////////////////////////

TASK 12: Weather Observation Station 5

select city,length(CITY) from station order by length(city) desc,city asc limit 1;
select city,length(CITY) from station order by length(city) asc,city asc limit 1;

///////////////////////////////////////////////////
