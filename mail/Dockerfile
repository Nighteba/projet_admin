FROM ubuntu:latest
MAINTAINER HE201408@students.ephec.be

RUN apt-get update
RUN apt-get install -y postfix
#install Sasl component
RUN apt-get install sasl2-bin
#security : authentification
RUN apt-get install -y cyrus-imapd-2.4

ADD postfix/main.cf /etc/postfix/main.cf
ADD sasl/smtpd.conf /etc/sasl2/smtpd.conf
RUN chmod -R 777 /etc/postfix
RUN chmod -R 777 /etc/sasl2