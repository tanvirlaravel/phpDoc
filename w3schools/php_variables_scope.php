<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Variables Scope</h3>

	<p>The scope of a variable is the part of the script where the variable can be referenced/used.</p>
   
   <p>The global keyword is used to access a global variable from within a function.</p>
   <pre class="bg-dark text-warning py-2">
    $x = 5;
    $y = 10;

    function myTest() {
        global $x, $y;
        $y = $x + $y;
    }

    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
   </pre>
    


</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>