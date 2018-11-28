<?php
if (!defined('IN_FINECMS')) exit();
return array (
  'types' => 
  array (
    'id' => 'mediumint unsigned',
    'catid' => 'smallint',
    'posid' => 'smallint unsigned',
    'contentid' => 'mediumint',
    'thumb' => 'varchar',
    'title' => 'varchar',
    'description' => 'text',
    'url' => 'varchar',
    'listorder' => 'mediumint',
  ),
  'fields' => 
  array (
    0 => 'id',
    1 => 'catid',
    2 => 'posid',
    3 => 'contentid',
    4 => 'thumb',
    5 => 'title',
    6 => 'description',
    7 => 'url',
    8 => 'listorder',
  ),
  'primary_key' => 'id',
);