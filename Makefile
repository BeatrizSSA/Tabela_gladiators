dump:
	mysqldump -u root -p -d my_app > db.dump

restore:
	mysql -u root -p -D my_app < db.dump
