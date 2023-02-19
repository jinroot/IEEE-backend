select city,length(CITY) from station ORDER BY length(city) DESC, city asc limit 1;
select city,length(CITY) from station ORDER BY length(city) asc, city asc limit 1;