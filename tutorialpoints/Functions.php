<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Functions</h3>
    <hr>

    <p>A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value.</p>
		
   <hr>
   <h3>Passing Arguments by Reference</h3>
   <p>It is possible to pass arguments to functions by reference. This means that a reference to the variable is manipulated by the function rather than a copy of the variable's value.</p>

   <p>Any changes made to an argument in these cases will change the value of the original variable. You can pass an argument by reference by adding an ampersand to the variable name in either the function call or the function definition.</p>
   <pre class="py-2 bg-dark text-warning">
        function addSix(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         addFive( $orignum );

         echo "Original Value is $orignum";     // Original Value is 16 
   </pre>

   <hr>
   <h3>Dynamic Function Calls</h3>
   <pre class="py-2 bg-dark text-warning">
        function sayHello() {
            echo "Hello";
         }
         
         $function_holder = "sayHello";
         $function_holder();
   </pre>
    
	

</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>