# quicksql
Quick sql builder

### Installation
**composer** require thipages\quicksql OR use the single php file **quicksql.php**

### Usage of QSql class
#### Through the following static methods (more to come)
```php
    insert  ($tableName, $keyValues)
    update  ($tableName, $keyValues, $where)
```

#### Examples
```php
 QSql::insert("aTable",['field1'=>1]);
 /* INSERT INTO aTable ( field1 ) VALUES ( '1' ); */

 QSql::update("aTable",['field1'=>1,'field2'=>2],"id=1");
 /* UPDATE aTable SET field1='1',field2='2' WHERE id=1; */
```

