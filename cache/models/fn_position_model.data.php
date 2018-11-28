<?php
if (!defined('IN_FINECMS')) exit();
return array (
  'types' => 
  array (
    'posid' => 'smallint unsigned',
    'site' => 'tinyint',
    'catid' => 'smallint unsigned',
    'name' => 'char',
    'maxnum' => 'smallint',
  ),
  'fields' => 
  array (
    0 => 'posid',
    1 => 'site',
    2 => 'catid',
    3 => 'name',
    4 => 'maxnum',
  ),
  'primary_key' => 'posid',
);