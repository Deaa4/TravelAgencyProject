# Tours and Travel Simple PHP Page
Simple PHP page using MySQL database 

This project was introduced and created in Third year B.E-BINF as one of our first PHP project. It is meant for absolute beginners who are new to PHP and MySQL. We've intentionally kept it the most minimal possible while introducing some separation of concerns. 

## Features

* PHP variables
* PHP arrays
* PHP functions
* Database
* Mobile friendly
* Pretty links (/about) with fallback to query string (?page=about)
* Basic example of separation of concerns (functionality, content, template)


## Installation

To run this project  you have [Xampp] installed on your machine.

2. Setup database connectivity.

3. Run Xampp Control Panel and start the following (Apache and MySQL)

Application will be running at ```http://localhost/tours-and-travel/```

### Setup

```
	$cn=mysqli_connect("localhost","database_user","database_pwd","database_name");
```
## Database

Go to PHPMyadmin ```http://localhost/phpmyadmin/```

1. Create a new database name "tourstravel"

2. * Import the database files located at database/travelblog.sql

