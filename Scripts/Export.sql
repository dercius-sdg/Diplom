use mydb;
load data infile 'C:/temp/Registration.txt'
replace
into table registration
character set cp1251
fields terminated by ';'
enclosed by '\''
lines terminated by '\n';
