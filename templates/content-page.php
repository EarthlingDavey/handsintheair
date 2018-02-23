<?php

  $module_array = [
    'cta_section'
  ];
  
  $fields = get_fields();

  if (isset($fields["modules"]) && $modules = $fields["modules"]) :
    
    // loop through the rows of data
    foreach ( $modules as $module_number => $module  )	:

      if( in_array ( $module["acf_fc_layout"] , $module_array )):	    
        
        $this_module = $module;

        include get_template_directory() . '/templates/modules/' .$module["acf_fc_layout"] . '.php';

      endif;
      
      $previous_module = $module["acf_fc_layout"];
       
    endforeach;
    
  endif;


?>