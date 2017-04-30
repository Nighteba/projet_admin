FROM ubuntu:latest
MAINTAINER HE201408@students.ephec.be

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y asterisk

EXPOSE 5060/udp 5060/tcp

ADD users.conf /etc/asterisk/users.conf
ADD sip.conf /etc/asterisk/sip.conf
ADD extentions.conf /etc/asterisk/extentions.conf
ADD voicemail.conf /etc/asterisk/voicemail.conf
Run chmod -R 777 /etc/asterisk

ADD start.sh /start.sh
RUN chmod 755 /start.sh

#CMD ["/start.sh"]

#CMD ["/usr/sbin/asterisk", "-D", "FOREGROUND"]]
ENTRYPOINT ["/start.sh"]