<?php
$module_name = 'test_New_Module_1';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'description',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'final_date',
            'label' => 'LBL_FINAL_DATE',
          ),
          1 => 
          array (
            'name' => 'booking_date',
            'label' => 'LBL_BOOKING_DATE',
          ),
        ),
      ),
    ),
  ),
);
?>
