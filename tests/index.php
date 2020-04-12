<?php
include ('../vendor/autoload.php');
include_once('Tests_QSql.php');
use thipages\quick\tests\QTests;
$output=QTests::getOutput(
    [Tests_QSql::class]
);
echo($output);