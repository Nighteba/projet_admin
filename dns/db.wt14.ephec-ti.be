$TTL 38400
wt14.ephec-ti.be.       IN      SOA     ns1.wt14.ephec-ti.be. HE201408@students.ephec.be. (
                        340000
                        15000
                        10000
                        500000
                        40000 )

wt14.ephec-ti.be.       IN      NS      ns1.wt14.ephec-ti.be.

ns1.wt14.ephec-ti.be.   IN      A       79.137.38.245
www.wt14.ephec-ti.be.   IN      A       79.137.38.245
b2b.wt14.ephec-ti.be.   IN      A       79.137.38.245
intranet.wt14.ephec-ti.be.      IN      A       79.137.38.245
mail.wt14.ephec-ti.be.   IN     MX  5   mail.wt14.ephec-ti.be.
mail.wt14.ephec-ti.be.  IN      A       79.137.38.245
voip                    IN      A       79.137.38.245

_sip._udp               IN      SRV 0 0 5060 voip