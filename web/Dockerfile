
FROM debian:latest

RUN apt-get update
RUN apt-get install -y php-cli
RUN apt-get install -y lighttpd

# Set up website
RUN rm /var/www/html/index.lighttpd.html
COPY index.php /var/www/html/index.php