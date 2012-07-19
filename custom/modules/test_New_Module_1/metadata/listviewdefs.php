<?php
$module_name = 'test_New_Module_1';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FINAL_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FINAL_DATE',
    'width' => '33%',
    'default' => true,
  ),
  'BOOKING_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_BOOKING_DATE',
    'width' => '35%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
