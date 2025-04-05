<?php
function load(string $className)
{
    include_once "Class/$className.php";
}
spl_autoload_register('load');