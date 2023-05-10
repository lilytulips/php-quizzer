# php-quizzer
A simple quizzer web app, to test people's knowledge on PHP language.

This **PHP Quizzer** built to give a special function for superuser like admin to manage the database, through the interface built in `add.php`. The admin could add new question(s) and its answers onto the main page.

Just like any other repositories, here I include a guide to access the project locally.

**INSTRUCTIONS**

1. **Install XAMPP**: Download and install XAMPP from the official website (https://www.apachefriends.org/index.html). Make sure to install the version of XAMPP that matches the requirements of the project which are PHP, MySQL, phpMyAdmin an Apache.

2. **Clone the repository**: Go to the GitHub repository where the source codes of the project are located, and clone the repository to your local machine using Git. You can use the following command in your terminal:

   ```
   git clone <https://github.com/lilytulips/php-quizzer.git>
   ```
   
   Alternatively, you can _download_ the code from `<Code>` button above.

3. **Move the project files**: Once you have cloned the repository, move the project files to the `htdocs` folder of XAMPP. This folder is typically located in the `C:\xampp` directory on Windows and `/Applications/XAMPP/htdocs` directory on Mac, the project files should be stored under a folder named `quizzer`.

4. **Start XAMPP**: Start the XAMPP control panel and start the Apache and MySQL services.

5. **Create a database**: Create a database for the project in phpMyAdmin, which can be accessed by going to `http://localhost/phpmyadmin` in your web browser.

6. **Import the database**: Import the project database from the SQL file provided in the project files. You can do this by selecting the database in phpMyAdmin, clicking on the "Import" tab, and selecting the SQL file, which is `quizzer.sql`.

7. **Configure the project**: Configure the project by updating the database connection settings in the project files. Typically, these settings can be found in a file called `config.php` or `database.php`.

8. **Run the project**: Open your web browser and go to `http://localhost/quizzer` to run the project.

Also, do note that there is a special function to add new question and answer, kindly run `http://localhost/quizzer/add.php` to access the page. The added questions would automatically updated into the database.

That's it! You should now be able to run the project locally using XAMPP.
  
 If you face any difficulty in setting up or running the file, do contact me at raihanaisyah11@gmail.com, I am happy to assist!
