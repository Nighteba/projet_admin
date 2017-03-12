APACHE
---------

FROM ubuntu:15.04
MAINTAINER HE201408@students.ephec.be
RUN apt-get update && apt-get upgrade
RUN apt-get install -y apache2

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

EXPOSE 80

ADD www/www.wt14.ephec-ti.be /var/www/www.wt14.ephec-ti.be
ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf
CMD ["apache2ctl", "-D", "FOREGROUND"]]