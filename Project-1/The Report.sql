select if(g.grade<8,NULL,s.name), g.grade, s.marks from students s
join grades g on s.marks
between g.Min_Mark AND g.Max_Mark
order by g.grade desc,s.name asc, s.marks asc;
