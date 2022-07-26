Python 3.10.2 (tags/v3.10.2:a58ebcc, Jan 17 2022, 14:12:15) [MSC v.1929 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.

import mysql.connector

#connect with MySQL DB
mydb = mysql.connector.connect
mydb = mysql.connector.connect(host='localhost',user='root',password='')
mycursor = mydb.cursor()

# create database projectDB2
mycursor.execute("create database projectDB2")

mydb.commit()

# create the table employee
mycursor.execute("""create table projectDB2.employee
(FNAME VARCHAR(25) NOT NULL, 
MINIT CHAR(5), 
LNAME varchar(15) NOT NULL
, SSN char(9) NOT NULL PRIMARY KEY,
BDATE DATE,
ADDRESS VARCHAR(30),
SEX VARCHAR(2),
SALARY decimal (10,2),
SUPER_SSN CHAR(11),
DNO INT NOT NULL)""")

mydb.commit()

# create the table admin
mycursor.execute("""create table projectDB2.admin 
(UserName varchar(10) NOT NULL PRIMARY KEY,
password varchar(30) NOT NULL)""")

mydb.commit()
