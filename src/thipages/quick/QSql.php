<?php

namespace thipages\quick;
class QSql {
    public static function insert($tableName, $keysOrkeyValues,$values=null) {
        if (is_null($values)) {
            return join(" ",[
                "INSERT INTO $tableName (",
                join(',',array_keys($keysOrkeyValues)),
                ") VALUES (",
                join(',',array_map(function($v){return "'$v'";},array_values($keysOrkeyValues))),
                ");"
            ]);
        }
        return join(" ",[
            "INSERT INTO $tableName (",
            join(',',array_values($keysOrkeyValues)),
            ") VALUES",
            join(',',array_map(function($v){return "(".join(',',array_map(function($v){return "'$v'";},$v)).")";},$values))
        ]).";";
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