<?php
if (!defined('IN_FINECMS')) exit();
return array (
  'types' => 
  array (
    'id' => 'int',
    'catid' => 'smallint',
    'content' => 'mediumtext',
    'images' => 'text',
    'xingye' => 'char',
    'renshu' => 'char',
  ),
  'fields' => 
  array (
    0 => 'id',
    1 => 'catid',
    2 => 'content',
    3 => 'images',
    4 => 'xingye',
    5 => 'renshu',
  ),
  'primary_key' => 'id',
);