<!DOCTYPE html>
<html>
<head>
  <title>Question 1</title>
</head>
<body>
<! –– html form to enter phone number ––>
<h1>Question 1</h1>
<form action="question_1.php" method="post">
Product Price:<input type="text" name="price"><br>
Percentage Increase <input type="text" name="percentage"><br>
Select category<select name="category">
  <option value="line">line</option>
  <option value="truck">truck</option>
</select><br>
<input type="submit" name="submit" value="submit">
</form>
<br>







<?php

interface iIncrease_price // creating Interface to increase Price
{
    public function increaseProductFee($percentage_increase,$product_price);
  
} 
//creating a class call Line and implement an interface call 'iIncrease_price'
   class Line implements iIncrease_price { 

// this funtion calculate and increase price product
   	 public function increaseProductFee($percentage_increase,$product_price)
    {
      $percentage_get = $percentage_increase/100; 
      $percetage_price =  $percentage_get * $product_price;
      $get_final_price =  $percetage_price + $product_price;
     return  $get_final_price;

    }
  
      /* Member variables */
      var $Pricefee; 
   
        
      /* Member functions */
      function setServiceFee($fee){ 
         $this->Pricefee = $fee; 
      } 
        
      function getServiceFee(){ 
        return $this->Pricefee; 
      } 
        
  
    
   } 

//creating a class call Truck and implement an interface call 'iIncrease_price'
    class Truck implements iIncrease_price { 

// this funtion calculate and increase price product
   	 public function increaseProductFee($percentage_increase,$product_price)
    {
      $percentage_get = $percentage_increase/100; 
      $percetage_price =  $percentage_get * $product_price;
      $get_final_price =  $percetage_price + $product_price;
     return  $get_final_price;

    }
  
      /* Member variables */
      var $Pricefee; 
   
        
      /* Member functions */
      function setServiceFee($fee){ 
         $this->Pricefee = $fee; 
      } 
        
      function getServiceFee(){ 
        return $this->Pricefee; 
      } 
        
  
    
   } 

   if(isset($_POST['submit']))
   {
     $get_category = $_POST['category'];
     $get_price = $_POST['price'];
     $get_percentage = $_POST['percentage'];
     if($get_category != '' &&  $get_price != '' &&  $get_percentage != '') //checking if the input field is are not empty
     {
     if($get_category == 'line') //checking if category is selected
     {
     	echo "category selected is <b>$get_category</b><br>" ;
         $Line_object = new Line;    //Creating New object (Line) using "new" operator  
         $Line_object->setServiceFee($get_price);  // Setting prices for the object
        echo 'Product Price '.$Line_object->getServiceFee().'<br>';    // Calling Member Functions getServiceFee
        echo 'Percentage '.$get_percentage.'% <br>';
        echo 'Price increase to ' .$Line_object->increaseProductFee($get_percentage, $get_price).'<br>';
     }

     elseif ($get_category == 'truck') {
     	echo "category selected is <b>$get_category</b><br>" ;
         $truck_object = new Truck;    //Creating New object (truck) using "new" operator  
        $truck_object->setServiceFee($get_price);  // Setting prices for the object
        echo 'Product Price '.$truck_object->getServiceFee().'<br>';    // Calling Member Functions getServiceFee
        echo 'Percentage '.$get_percentage.'% <br>';
        echo 'Price increase to ' .$truck_object->increaseProductFee($get_percentage, $get_price).'<br>';
     }
 }
 else
 {
 	echo "<font color='red'> <p>Please fill all input field</p></font>"; // displaying error message if input field  are empty
 }
 
   }
  
  

?> 
<a href="question_3.php">select here to access question 3</a>
</body>
</html>