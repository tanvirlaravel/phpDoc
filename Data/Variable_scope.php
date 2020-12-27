<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">


<div class="col-md-9">

	<h3 class="text-center display-4">Variable scope</h3>

    <h3>Defination</h3>

    <p>The scope of a variable is the part of the script where the variable can be referenced/used.</p>
    <p>Scope can be defined as the range of availability a variable has to the program in which it is declared.</p>

    <p>PHP has three different variable scopes:</p>

    <ul class="list-group">
        <li>local</li>
        <li>global</li>
        <li>static</li>
        <li>Function parameters</li>
    </ul>
    <br>

    <h3>Global and Local Scope</h3>
    <p>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function</p>
    <pre class="text-warning bg-dark py-2">
        $x = 5; // global scope

        function myTest() {
            // using x inside this function will generate an error
            echo "Variable x inside function is: $x";
        }
        myTest();

        echo "Variable x outside function is: $x";
</pre>

    <p>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</p>
    <pre class="text-warning bg-dark py-2">
       function myTest() {
            $x = 5; // local scope
            echo "Variable x inside function is: $x";
        }
        myTest();

        // using x outside the function will generate an error
        echo "Variable x outside function is: $x";
</pre>

<hr>
    <p>
    The scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope. This single scope spans included and required files as well.</p>
    <pre class="text-warning bg-dark py-2">
        $a = 1;
        include 'b.inc';
</pre>
<hr>
<h3>PHP The global Keyword</h3>
<p>By declaring $a and $b global within the function, all references to either variable will refer to the global version.</p>
<p>The $GLOBALS array is an associative array with the name of the global variable being the key and the contents of that variable being the value of the array element.</p>
<pre class="text-warning bg-dark py-2">
        $x = 5;
        $y = 10;

        function myTest() {
        global $x, $y;
        $y = $x + $y;
        }

        myTest();
        echo $y; // outputs 15

        $a = 1;
        $b = 2;

        function Sum()
        {
            $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
        } 
</pre>

<hr>

<h3>PHP The static Keyword</h3>
<p>A static variable exists only in a local function scope, but it does not lose its value when program execution leaves this scope</p>
<pre class="text-warning bg-dark py-2">
        function myTest() {
        static $x = 0;
        echo $x;
        $x++;
        }

        myTest();       // $x = 0
        myTest();       // $x = 1
        myTest();       // $x = 2
</pre>
<p>Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.</p>
<p>The variable is still local to the function.</p>

<h3>Function parameters</h3>
<p>function is a small unit of program which can take some input in the form of parameters and does some processing and may return a some value.</p>
<p>Function parameters are declared after the function name and inside parentheses</p>

<pre class="text-warning bg-dark py-2">
    function multiply ($value) {
        $value = $value * 10;
        return $value;
    }
   
   $retval = multiply (10);
</pre>

</div>

<?php require_once __DIR__ . "/sidebar.php"; ?>

</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>