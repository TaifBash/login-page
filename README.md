# login-page
used:
 - Python
 - php
 - HTML
 - SQL 
 - WAMPSERVER -2

Step1: Make by Python connection with MySQL to create database "projectDB2" and two tables "employee" and "admin".
employee teble has information of all employee work in compane 
admin table has user name and password of users has acsess use
![image](https://user-images.githubusercontent.com/107805330/180975242-e56ef46d-4744-4660-8395-9e6a8d7b3561.png)
![image](https://user-images.githubusercontent.com/107805330/180977577-c8bd4a60-a09b-462b-9881-34394eebd967.png)

Step2: import dataset CSV file on tables from MySQL.
admin table:
![image](https://user-images.githubusercontent.com/107805330/180977737-dce12eef-0b1a-45b8-8b75-00f58429b278.png)
employee table:
![image](https://user-images.githubusercontent.com/107805330/180977904-85f0a6d3-2230-49f4-b5ed-33f3ce501a32.png)

Step3: Make by php connection with MySQL by queres and make two web pages by HTML becouse The php programme interacts with HTML.
firest page "Login":
![image](https://user-images.githubusercontent.com/107805330/180981237-24a1bc65-3ac4-4eaa-9169-7c22a3553fad.png)

second page: "Serch": 
![image](https://user-images.githubusercontent.com/107805330/180981316-e109ab7b-b556-40b5-a20c-1667b1959ecd.png)


Step3: add two php file in "www" file on wamp server file 
![image](https://user-images.githubusercontent.com/107805330/180982375-d9c7e9e5-0368-4360-a8b2-3561e040b527.png)

then write on broser by first page "localhost/login.php" to open
Note: Don't forget RUN wamp server befor this step

[ Starte program ] 
Starte program with login page 
![image](https://user-images.githubusercontent.com/107805330/180984002-2d3e7386-8dd1-41b3-b69e-75b3949d9d8e.png)
If user NOT enters the login data information corectle as same as on admin table on database (on MySQL), will display massege "Information is NOT correct (paswoors or User Name)".
![image](https://user-images.githubusercontent.com/107805330/180985086-9e680576-5df8-4a92-972c-259b97d1eb54.png)

and if forget written in the field will get massege "Please fill in the field"
![image](https://user-images.githubusercontent.com/107805330/180985802-f99d4129-4998-4864-978a-d703ef3d7d43.png)

yet, user enters the login data information corectle as same as on admin table (on MySQL) will go to next page is search page "localhost/search.php",
![image](https://user-images.githubusercontent.com/107805330/180986679-5157a279-2c20-49ca-aa49-f34b8e701f95.png)

On the serch page, the user enters the employee SSN. If user NOT enters employee's SSN corectle as same as on employee table on databse (on MySQL), will display massege "The SSN is NOT exixte in DB".
![image](https://user-images.githubusercontent.com/107805330/180988325-d2e51e2c-4d94-46b8-adc7-ffd6f8ad8fd0.png)

if user enters employee's SSN corectle as same as on employee table, will display all information of emplyee user choois SSN
![image](https://user-images.githubusercontent.com/107805330/180988593-6cac5737-e4cb-4e27-80d8-09a3b91d5658.png)



 




