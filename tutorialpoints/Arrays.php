<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Arrays</h3>
    <hr>


	<h3>Numeric array</h3>
    <p>An array with a numeric index. Values are stored and accessed in linear fashion.</p>
    <pre class="py-2 bg-dark text-warning">
        /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
                           
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
    </pre>

    <hr>
    <h3>Associative array</h3>
    <p>An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.</p>
    <pre class="py-2 bg-dark text-warning">
        $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
    </pre>

    <hr>
    <h3>Multidimensional array</h3>
    <p>An array containing one or more arrays and values are accessed using multiple indices</p>
    <pre class="py-2 bg-dark text-warning">
    $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
    </pre>
	

</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>