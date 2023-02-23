select s.name from students s join friends f on s.id = f.id join packages p on f.id = p.id join packages p2 on f.friend_id = p2.id where p.salary < p2.salary order by p2.salary;
select s.name from students s join friends f on s.id = f.id join packages p on f.id = p.id join packages p2 on f.friend_id = p2.id where p.salary < p2.salary order by p2.salary;
