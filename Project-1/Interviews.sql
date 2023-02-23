select c.contest_id, c.hacker_id, c.name,sum(total_submissions), sum(total_accepted_submissions), sum(total_views), sum(total_unique_views)
from contests c 
 join Colleges col on
c.contest_id=col.contest_id
 join Challenges cha on 
col.college_id=cha.college_id
left join
(select challenge_id, sum(total_views) as total_views, sum(total_unique_views) as total_unique_views
from view_stats group by challenge_id) vs on cha.challenge_id = vs.challenge_id 
left join
(select challenge_id, sum(total_submissions) as total_submissions, sum(total_accepted_submissions) as total_accepted_submissions from submission_stats group by challenge_id) ss on cha.challenge_id = ss.challenge_id
    
/* sql coding on hackerrank is a god dam nightmare
    more info http://sqlfiddle.com/#!9/6f14b/1872
    should have done 3 medium problems instead :melting_face:
*/
  group by c.contest_id,c.hacker_id, c.name
    having sum(total_submissions)!=0 
    or sum(total_accepted_submissions)!=0
    or sum(total_unique_views)!=0 
    or sum(total_views)!=0
    order by contest_id;


