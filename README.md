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

DATABASE INFORMATION:

Current databases:

    host: signin.c3bf4omfm2fy.us-east-2.rds.amazonaws.com
    
    / For storing product information (name, quantity, description)
    Database name: prod
    Database host: prod.c3bf4omfm2fy.us-east-2.rds.amazonaws.com
    Table(s):      products
    Columns:       prodname (VARCHAR(80), prodquant (INT), proddesc (VARCHAR(400)), price (FLOAT)
    Username:      root
    Password:      rootroot

    / For storing user information
    Database name: signin
    Database host: signin.c3bf4omfm2fy.us-east-2.rds.amazonaws.com
    Table(s):      acc
    Columns:       username, password, firstname, lastname
    Username:      root
    Password:      root

    / For storing user shopping cart
    Database name: cart
    Database host: cart.c3bf4omfm2fy.us-east-2.rds.amazonaws.com
    Tables:        (add table for each user?)
    Columns:       (same as products)
    Username:      root
    Password:      rootroot
    

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
5. On the welcome page, click the plus sign next to MySQL Connections.
6. Use the hostname, username, and password specified above.
7. You are now connected to the AWS database!


