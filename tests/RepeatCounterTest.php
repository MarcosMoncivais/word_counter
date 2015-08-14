<?php
  require_once "src/RepeatCounter.php";
  
  class RepeatCounterTest extends PHPUnit_Framework_TestCase
  {
  
    function test_countRepeats_onelettertrue()
    {
      //Arrange
      $test_RepeatCounter = new RepeatCounter;
      $input1 = "a";
      $input2 = "a";
     
      //Act
      $result = $test_RepeatCounter->countRepeats($input1, $input2);
     
      //Assert
      $this->assertEquals(true, $result);
    }
    
    function test_countRepeats_oneletterfalse()
    {
      //Arrange
      $test_RepeatCounter = new RepeatCounter;
      $input1 = "a";
      $input2 = "b";
    
      //Act
      $result = $test_RepeatCounter->countRepeats($input1, $input2);
    
      //Assert
      $this->assertEquals(false, $result);
    }
    
    function test_countRepeats_twoletters()
    {
    
      //Arrange
      $test_RepeatCounter = new RepeatCounter;
      $input1 = "hi";
      $input2 = "hi";
    
      //Act
      $result = $test_RepeatCounter->countRepeats($input1, $input2);
    
      //Assert
      $this->assertEquals(true, $result);
    }
    
    function test_countRepeats_wordspacetwocount()
    {
    
      //Arrange
      $test_RepeatCounter = new RepeatCounter;
      $input1 = "raiders";
      $input2 = "oakland raiders";
    
      //Act
      $result = $test_RepeatCounter->countRepeats($input1, $input2);
    
      //Assert
      $this->assertEquals(2, $result);
    }
    
    function test_countRepeats_wordspaceonecount()
    {
      //Arrange
      $test_RepeatCounter = new RepeatCounter;
      $input1 = "raiders";
      $input2 = "oakland raiders rock"; 

      //Act
      $result = $test_RepeatCounter->countRepeats($input1, $input2);
      
      //Assert
      $this->assertEquals(1, $result);
    }
    
    }
  
    
  
?>