# quicksql
Quick sql builder

### Installation
**composer** require thipages\quicksql OR use the single php file **quicksql.php**

### Usage of QSql class
#### Through the following static methods (more to come)
```php
    insert  ($tableName, $keyValues)
    insert  ($tableName, $keyValues, $values)
    update  ($tableName, $keyValues, $where)
    delete  ($tableName, $where)
```

#### Examples
```php
 $sql=QSql::insert(
    "aTable",[
    'field1'=>1
 ]);
 /* INSERT INTO aTable ( field1 ) VALUES ( '1' ); */

   $sql=QSql::insert(
      "aTable",[
      'field1',
      'field2'
   ],[
      [1,2],
      [3,4]
   ]);
   /* INSERT INTO aTable ( field1,field2 ) VALUES ( '1','2' ),( '3','4' ); */

 $sql=QSql::update("aTable",[
    'field1'=>1,
    'field2'=>2
 ],"id=1");
 /* UPDATE aTable SET field1='1',field2='2' WHERE id=1; */

 $sql=QSql::delete("aTable","id=1");
 /* DELETE FROM aTable WHERE id=1; */

```

