<?php
use thipages\quick\QSql;
class Tests_QSql {
    public static function dataSet() {
        return [
            [
                QSql::insert("aTable",['field1'=>1]),
                "INSERT INTO aTable ( field1 ) VALUES ( '1' );",
                'insert() with 1 field'
            ],[
                QSql::insert("aTable",['field1'=>1,'field2'=>2]),
                "INSERT INTO aTable ( field1,field2 ) VALUES ( '1','2' );",
                'insert() with 2 fields'
            ],[
                QSql::update("aTable",['field1'=>1,'field2'=>2],"id=1"),
                "UPDATE aTable SET field1='1',field2='2' WHERE id=1;",
                'update() with 2 fields'
            ],[
                QSql::delete("aTable","id=1"),
                'DELETE FROM aTable WHERE id=1;',
                'delete()'
            ]
            
        ];
    }
}





