
FROM debian:latest

RUN apt-get update
RUN apt-get install -y mysql-server

# Setup db
RUN mkdir /mysql
COPY db.sql /mysql/db.sql