select concat(name,'(',left(occupation,1),')') as pain from occupations union all
select concat('There are a total of ',count(occupation),' ',lower(occupation),'s.') from occupations group by occupation order by pain;