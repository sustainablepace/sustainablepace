
## CMS ##

liegt auf https://github.com/sustainablepace/sustainablepace
Lizenzschlüssel liegt in Keepass
Lizenzschlüssel liegt in /site/config/keys.php, keys.php ist in .gitignore

Content liegt auf https://github.com/sustainablepace/sustainablepace-content

## Lokal ##

CMS (live)
ist Master von https://github.com/sustainablepace/sustainablepace
liegt in Dropbox unter sustainablepace

CMS (dev)
ist Branch dev von https://github.com/sustainablepace/sustainablepace
liegt in Dropbox unter sustainablepace

Content (live) 
ist Master von https://github.com/sustainablepace/sustainablepace-content
liegt in Dropbox unter sustainablepace-content

Content (dev) 
ist Branch dev von https://github.com/sustainablepace/sustainablepace-content
liegt in Dropbox unter sustainablepace-content-dev

Apache-Konfiguration
Copy /etc/apache/sites-available/000-default.conf to 001-sustainablepace.conf

  ServerName sustainablepace.local
  DocumentRoot /var/www/sustainablepace
  <Directory /var/www/sustainablepace/>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Order allow,deny
    allow from all
  </Directory>

AllowOverride All, damit htaccess Datei verwendet wird
Edit /etc/hosts, add 
127.0.0.1       sustainablepace.local

sudo a2ensite 001-sustainablepace.conf 
sudo ln -s /home/bambang/Dropbox/git/sustainablepace/ /var/www/sustainablepace
sudo a2enmod rewrite
sudo service apache2 restart

## Livesystem ##

CMS (live)
ist Master von https://github.com/sustainablepace/sustainablepace
liegt unter /var/www/virtual/nosweat/html

CMS (dev)
ist Branch dev von https://github.com/sustainablepace/sustainablepace
liegt unter /var/www/virtual/nosweat/dev.sustainablepace.net
Passwortschutz: 
	htpasswd -m -c /var/www/virtual/nosweat/.htpasswd test

  htaccess anpassen

	SetEnvIf HOST "^sustainablepace.net" live_url
	SetEnvIf HOST "^sustainablepace.local" local_url
	Order Deny,Allow

	AuthType Basic
	AuthName "dev access"
	AuthUserFile /home/nosweat/dev.sustainablepace.net/.htpasswd
	Require valid-user

	Deny from all
	Allow from env=live_url
	Allow from env=local_url
	Satisfy any

Content (live) 
ist Master von https://github.com/sustainablepace/sustainablepace-content
liegt unter /var/www/virtual/nosweat/sustainablepace-content
ist mit Dropbox verlinkt (ln -s /var/www/virtual/nosweat/suntrol-content/ ~/Dropbox/git/sustainablepace-content)
(Lokal Dropbox pausieren, auf Uberspace sustainablepace-content löschen, symlink anlegen, lokal Dropbox-Sync reaktivieren)

Content (dev) 
ist Branch dev von https://github.com/sustainablepace/sustainablepace-content
liegt unter /var/www/virtual/nosweat/sustainablepace-content-dev
ist mit Dropbox verlinkt (ln -s /var/www/virtual/nosweat/suntrol-content-dev/ ~/Dropbox/git/sustainablepace-content-dev)
(Lokal Dropbox pausieren, auf Uberspace sustainablepace-content-dev löschen, symlink anlegen, lokal Dropbox-Sync reaktivieren)


## Szenario: Software Update ##

Dev
In sustainablepace lokal auf Branch dev wechseln
Testen lokal unter sustainablepace.local
Committen und pushen, bis fertig

Test
Im Livesystem unter /var/www/virtual/nosweat/dev.sustainablepace.net git pull
Testen unter dev.sustainablepace.net

Live
Mergen in Master
In sustainablepace lokal auf Master wechseln
Testen lokal unter sustainablepace.local
Committen und pushen
Auf Uberspace pullen

## Szenario: Content Update Lokal ##

Dev
In sustainablepace-content-dev auf Branch dev wechseln, lokal arbeiten
Testen lokal unter sustainablepace.local
Committen und pushen, bis fertig

Test
Testen unter dev.sustainablepace.net

Live
In sustainablepace-content: git merge dev
Committen und pushen

## Szenario: Content Update Github ##

Pull-Request akzeptieren
In sustainablepace-content auf Master wechseln, pullen

## Szenario: Content Update Dropbox ##

In sustainablepace-content auf Master wechseln, committen und pushen


## Benutzte Resourcen

* https://www.toptal.com/designers/subtlepatterns/
* https://colourco.de/
* https://www.e-recht24.de/impressum-generator.html
* https://www.iconfinder.com/iconsets/social-flat-rounded-rects
