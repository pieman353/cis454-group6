# cis454-group6
Group 6 CIS454 project

several coding standards our team need to follow in the future (Ver. 1)

1. use camel name standard ("front page" may name as "FrontPage")
2. if possible, comment in files you build with author name (format would be: //author name: Shukai)
3. create files into folders that they belong to (php files into php folder, js files into javascript folder)
4. codes may need to be readable and variables may create with specific meaning (do not use "a","ss" as variable name) 
5. about aesthetics, background images and UI interface need to be improved: more suitable images and better design ideas are encouraged to upload after get everyone's approval in team chat:)

new:
6. download a web server, such as wampserver in windows, XAMPP in mac, enter in localhost/phpmyadmin
username is root and no password to check database information
7. index1.php is the mainpage for customer, add front end work on that page (several pics have already been added there)
this file may be updated later

HOW TO USE XAMPP:
1. Go to apachefriends.org and pick the download for your operating system.
2. Once the installer has finished, launch the control panel.
3. Next to the Apache module, click "Start".
4. Find the directory XAMPP was installed in (default C:\XAMPP on Windows)
5. Move the entire website directory into the htdocs folder.
6. Browse the website by replacing the URL so that you are browsing under
localhost; for instance, access "zhuce.php" by entering 
"localhost/cis454-group6/php/zhuce.php".

HOW TO USE MYSQL:
1. Go to mysql.com/downloads and click on community downloads.
2. Select MySQL Community Server.
3. In the installer, install ALL components (if prompted for a password, make it root - be sure to use this password later when accessing the DB)
4. After the installation, open the MySQL Workbench.
5. In the menu bar, navigate to Database -> Connect to Database... and use the default options.
6. Under the menu bar, in the row of graphical buttons, click the fourth from the left (Create a new schema in the connected server)
7. Consult connect.php and name the database accordingly (for instance, the sign-up server is called signup)
8. Click apply
9. In the left hand window labelled Schemas, under the new signup database, right-click tables and select "Create table"
10. Name it according to connect.php (in this instance, "acc")
11. Where it says Column Name and Datatype, add the required columns (here, "username", "password", "firstname", "lastname") with data type as VARCHART(45)
12. Click apply.
13. Modify the php source files if needed to set your database's username and password correctly and run the website under XAMPP. The database should be updated on sign-up attempts.


