<?php
  
  class RepeatCounter
  
  {
    function countRepeats($input1, $input2)
    {
  
      $count = array();
  
      $split_input2 = array();
  
      $low_input1 = strtolower($input1);
  
      $low_input2 = strtolower($input2);
    
      $instance = 0; 
  
      foreach ($split_input2 as $word) {
        if ($word == $low_input1) {
          ++$instance;
          array_push($count, $instance);
          $instance = 0;
        }
  
        $final_count = array_sum($count);
  
      }
  
      return $final_count;
  
    }
  
  }

?>