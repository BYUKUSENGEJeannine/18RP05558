18RP08127 : MUSHIMIYIMANA Claudine
18RP05558 : BYUKUSENGE Jeannine


PROJECT NAME : UMUGANDA MANAGEMENT SYSTEM
==========================================
Our project is developped using laravel 8 which is the most popular php framework.
deals of our project is how users called mudugudu make the attendance of people who attends umuganda using system 
where citizen can make umuganda in location which is difference for where he/she  is registered and be updated in system, 
then leaders of where he/she is registered they will see in the system so that person done umuganda on specified date.
(umuturage nakorera umuganda aho atiyandikishije, aho yawukoreye bakamukorera update muri system ko yakoze umuganda kuriyo tariki, 
aho atuye bazabibona ko yakoze umuganda).

Our project is their to solve the following problems:
-The penalities taken for people who did umuganda in the place which they didn't regisetered for 
  and they doesn't be known from where they are registered, that they did umuganda. 

-loss of data for people who attend umuganda which is based on papers while it is needed.
- long time taken for making attendance based on papers.


prerequisites for installing laravel 8
=========================================
for installing laravel 8 you must be having composer in your computer also you must have the active internet connection 
and some knowledgde abourt programming.


procedures
==========
1.download it on github
2.extract project
3.type this command to download composer: composer create-project laravel/laravel {directory} 4.2 --prefer-dist
 and then, install composer as well
4.open project folder in editor(visual studio code)
5.we need to create database and import it
6.on .env file there are database name(umuganda) and username for mysql as well as we use.

controller
==========
citizenController.php
umuganda_controller.php
UsersController.php

model
======
user.php
umuganda_table.php
citizens.php
attendance_table.php

view
=====
citizens(directory):
home.blade.php
index.blade.php
create.blade.php
edit.blade.php
show.blade.php
login.blade.php

Layouts
=======

App.blade.php
menu.blade.php
register1.blade.php
select.blade.php
index.blade.php
userform.blade.php

route
=====
web.php


our project has only two users
1.mudugudu user
===============
mudugudu has to perform this action:

-to make umuganda attendance
-view people attended umuganda 
-view list of all citizens
-to send umuganda report to admin
-to make same changes when it is needed like update only

2.amdnin
========
-view people attended umuganda 
-view list of all citizens
-to make same changes when it is needed like update,delete and view
-to create mudugudu user

 models
 =======
models is part of this projec becouse it contain structure of databases
so it will needed when we want to select,insert,delete some records in this
project.


authors
=======
this mini project is being built by MUSHIMIYIMANA Claudine and BYUKUSENGE Jeannine


to run this system
==================
for admin user
==============
-or use (coco@gmail.com as username and 1234567890 as password)
for mudugudu user
=================
use his/her account created by admin to login then, make attendence other change according to his/her permission


Note: Our system is still under construction.




============================== Thank you!!!! ==========================

