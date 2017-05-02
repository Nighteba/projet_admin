#!/bin/bash

#newaliases
service postfix start
tail -f /var/log/mail.log