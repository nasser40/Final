# Welcome To The Final Demo 

This page is about the Final project for course CSC583.

# Non-functional Requirements

### Evaluation

Technology | MEAN | PHP | VUE 
--- | --- | --- | --- | 
Skills | 3.8 | 5.0 | 3.8 
Features | 4.4 | 4.8 | 4.0 
Self-confidence | 4.5 | 3.3 | 3.0 
Usability | 4.3 | 5.0 | 3.0 
Support | 4.5 | 5.0 | 4.0 
Security | 4.0 | 3.5 | 3.8 
Complexity | 3.6 | 4.0 | 4.8 
Average | 4.1 | 4.5 | 3.7 

#### Framework Evaluation

It can be clearly seen that PHP is the best choice for this final project. PHP is much easier and more convienient to delever a product in less than 5 days. I have more experience with it than all of other web-development tools. It would be more fun to do the project with MEAN or VUE, but they are more risky duerin the installation and developing phases.
 

# Installation instructions

### Tools 

-Webbrowser supporting php7, HTML5.

-XAMPP.

NOTEPAD++.

### Setting Up

First: Download XAMPP from here :[XAMPP](https://www.apachefriends.org/index.html) ,and NOTEPAD++ from here: [NOTEPAD++](https://notepad-plus-plus.org/)

Second: Clone this repository, and move the PHP pages to the following location in your computer:

C:\xampp\htdocs 

This file location includes all the developed web pages.

Third: Right click on any page and open it with your web browser. 

Forth: Change the URL From

file:///C:/xampp/htdocs/(your page name).php

TO 

localhost/(you page name).php



# Architecture Discussion

 We use (PHP) and (MYSQL) for the backend side, (HTML) with (CSS) for the frontend side, and (Apache) for the server work. The server (Apache) recieve the sending file from the browser, then make a process to distinguish the PHP file from the HTML file. After extrcting the pure PHP file, it will connect to the database (MySql) to retrieve the information. After getting the the wanted data, Apache (the server) will combine the separated files again and send them to the browser. The obtained data will be showen to the user through the web browser.
