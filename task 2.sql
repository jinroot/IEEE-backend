
///////////////////////////////////////////////////

TASK 1

select * from city;

///////////////////////////////////////////////////

TASK 2

select * from city where population > 100000 and CountryCode = 'USA';

///////////////////////////////////////////////////

TASK 3

select * from city where countrycode = 'JPN';

///////////////////////////////////////////////////

TASK 4

select name from city where countrycode = 'JPN';

///////////////////////////////////////////////////

TASK 5

select name from employee order by name asc;

///////////////////////////////////////////////////

TASK 6

select name from students where marks > 75 order by right(name,3) asc, id asc;

///////////////////////////////////////////////////

TASK 7

select round(sum(lat_n),2), round(sum(long_w),2) from STATION;

///////////////////////////////////////////////////

TASK 8

 select distinct city from station where left(city,1) not in ('A', 'E', 'I', 'O', 'U') and right(city,1) not in ('A','E','I','O','U')

///////////////////////////////////////////////////
