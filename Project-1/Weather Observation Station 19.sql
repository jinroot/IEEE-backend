select round(sqrt(power(min(LONG_W) - max(LONG_W),2) + power(min(LAT_N) - max(LAT_N),2)),4) from station;
