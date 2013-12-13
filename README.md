vhostalias-patch
================

TKLPAtch enabling vhos_alias type virtual on [TurnkeyLinux LAMP 12](http://www.turnkeylinux.org/lampstack)

New website is automaticaly initialized by creating directory in /data/web/vhost widh domain name.

Error script support automatic redirect to domain with www.* and show link to go to homepage of domain if document not found.

Access log are autmaticaly splited by domain in /var/log/vlogger/<domain> with central log in 

NOTE: Some .htacces rewrite need link to /data in domain root dir.

---

Not used any more. 
Now I use ansible https://github.com/ansible/ansible for configuration. 
-- Michael Heca
