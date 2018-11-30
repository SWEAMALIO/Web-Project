<?php
include ('database.php');
$table1=("create table courses (c_id int auto_increment not null primary key ,
		       		c_name varchar(50) not null ,
                      		c_hours varchar(20));");
$db->MyExec($table1);

$table2=("create table tas (ta_id int auto_increment not null primary key,
			    ta_name varchar(50),
                  	    ta_phone int,
                  	    ta_email varchar(100),
                  	    ta_cID int not null references courses(c_id));");
$db->MyExec($table2);
?>
