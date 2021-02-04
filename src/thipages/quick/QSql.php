<?php

namespace thipages\quick;
class QSql {
    // todo : add a third argument for batch insert with commun def
    public static function insert ($tableName, $keyValues) {
        return join(" ",[
            "INSERT INTO $tableName (",
            join(',',array_keys($keyValues)),
            ") VALUES (",
            join(',',array_map(function($v){return "'$v'";},array_values($keyValues))),
            ");"
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