FROM mysql:5.7

# Set environment variables for database configuration
ENV MYSQL_ROOT_PASSWORD=rootpassword
ENV MYSQL_DATABASE=mydb
ENV MYSQL_USER=user
ENV MYSQL_PASSWORD=password

# Copy the initialization script into the MySQL initialization directory
COPY init.sql /docker-entrypoint-initdb.d/

# List the contents of the directory to verify the presence of the script
RUN ls -l /docker-entrypoint-initdb.d/

# Expose port 3306 for MySQL
EXPOSE 3306

