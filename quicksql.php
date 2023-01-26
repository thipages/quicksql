<?php
class QSql {
    public static function insert($tableName, $keyValues,$values=null) {
        if (is_null($values)) {
            return join(" ",[
                "INSERT INTO $tableName (",
                join(',',array_keys($keyValues)),
                ") VALUES (",
                join(',',array_map(function($v){return "'$v'";},array_values($keyValues))),
                ");"
            ]);
        }
        return join(" ",[
            "INSERT INTO $tableName (",
            join(',',array_values($keyValues)),
            ") VALUES ",
            join(',',array_map(function($v){return "(".join(',',array_map(function($v){return "'$v'";},$v)).")";},$values)),
            ";"
        ]);
    }
    public static function update($tableName, $keyValues,$where) {
        $set=[];
        foreach ($keyValues as $key=>$value) $set[]="$key='$value'";
        return join(" ",[
            "UPDATE $tableName SET",
            join(",",$set),
            "WHERE ".$where.";"
        ]);
    }
    public static function delete($tableName,$where) {
        return "DELETE FROM $tableName WHERE $where;";
    }
}