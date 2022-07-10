### Quickstart

+ SQL setup for `.env`:

```sql
-- mySQL server setup
CREATE USER IF NOT EXISTS 'hierarchy'@'127.0.0.1' IDENTIFIED BY 'hierarchy';
CREATE DATABASE IF NOT EXISTS hierarchy;
GRANT ALL ON hierarchy.* TO 'hierarchy'@'127.0.0.1' WITH GRANT OPTION;
```

+ Database configuration in `.env`:
```
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hierarchy
DB_USERNAME=hierarchy
DB_PASSWORD=hierarchy
...
```
