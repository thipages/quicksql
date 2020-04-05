<?php
include ('../vendor/autoload.php');
include_once('./../src/thipages/quick/QSql.php');
include_once('GenericTable.php');
include_once('Tests_QSql.php');
include_once('Tests.php');

$output=Tests::getOutput(
    [Tests_QSql::class]
);
echo($output);