### File Details

- **Data_base/Dockerfile**: Defines the Docker image for the MySQL server. Environment variables for database configuration are specified, and an initialization script is copied to create the database and the table.

- **Data_base/init.sql**: Contains the SQL instructions to create the database `mydb` and the table `test_table`.

- **Web_server/Dockerfile**: Defines the Docker image for the Apache web server with PHP. It enables the MySQL extension for PHP and copies the necessary HTML and PHP files into the web directory.

- **Web_server/db_test.php**: PHP script to test the database connection and perform basic operations (insertion and selection of data).

- **Web_server/index.html**: A simple homepage that displays a message and a link to test the database connection.

- **docker-compose.yml**: Docker Compose configuration file that defines the `webserver` and `database` services, links them to a network, and exposes the necessary ports.

### Instructions to Run the Project

1. **Install Docker**:
   - Ensure that Docker and Docker Compose are installed on your machine. You can download Docker [here](https://www.docker.com/products/docker-desktop).

2. **Build and Start the Containers**:
   - Open a terminal in the project directory.
   - Run the following command to build and start the containers:
     ```bash
     docker-compose up --build
     ```

3. **Access the Web Server**:
   - Open a web browser and go to `http://localhost:8080` to see the homepage.

4. **Test the Database Connection**:
   - Click on the "Test DB Connection" link on the homepage to run the PHP script that tests the database connection.
