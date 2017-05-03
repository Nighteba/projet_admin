#!/bin/bash

#newaliases
#service postfix start
/etc/init.d/postfix start
tail -f /var/log/mail.log
