FROM ubuntu:latest
MAINTAINER HE201408@students.ephec.be

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get install -y postfix
RUN apt-get install -y dovecot-common dovecot-imapd dovecot-pop3d
#RUN apt-get install -y squirrelmail

EXPOSE 25
#pop3
EXPOSE 143
EXPOSE 587
EXPOSE 993
#EXPOSE 110
#smtp
#EXPOSE 465

ADD postfix/master.cf /etc/postfix/master.cf
ADD postfix/main.cf /etc/postfix/main.cf
ADD postfix/aliases /etc/aliases
#ADD squirrelmail/apache.conf /etc/squirrelmail/apache.conf
ADD dovecot/dovecot.conf /etc/dovecot/dovecot.conf
#CMD ["invoke-rc.d postfix start"]
#CMD ["invoke-rc.d dovecot start"]
#CMD ["service postfix start"]
#CMD ["service dovecot start"]
ADD start.sh /start.sh
RUN chmod -R 777 /start.sh
ENTRYPOINT ["/start.sh"]