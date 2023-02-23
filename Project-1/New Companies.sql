select c.company_code, c.founder , count(distinct le.lead_manager_code), count(distinct le.senior_manager_code), count(distinct le.manager_code), count(distinct le.employee_code)
from company c inner join employee le on
c.company_code=le.company_code
group by c.company_code,c.founder
order by c.company_code;
