#!/bin/bash

#newaliases
postfix start
tail -f /var/log/mail.log
service dovecot start
tail -f /var/log/mail.log
