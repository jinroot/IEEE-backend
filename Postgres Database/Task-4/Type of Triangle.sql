select case 
    when a>=(b+c) or b>=(a+c) or c>=(a+b) then 'Not A Triangle'
    when a=b and b=c then 'Equilateral'
    when a=b or b=c or a=c then 'Isosceles'
    else 'Scalene'
end from triangles;
