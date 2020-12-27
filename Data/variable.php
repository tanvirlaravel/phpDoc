<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col-md-9">

	<h3 class="text-center display-4">Variable</h3>


    <h3>Variables : </h3>
    <p>Variables are "containers" for storing information.</p>
    <p>Variables are used to store data, like string of text, numbers, etc. Variable values can change over the course of a script. Here're some important things to know about variables:</p>
    <p>The assignment operator (=) used to assign value to a variable.</p>
    <pre class="text-warning bg-dark py-2">
            $txt = "Hello World!";
            $number = 10;
    </pre>

    <p> when you assign an expression to a variable, the entire value of the original expression is copied into the destination variable. This means, for instance, that after assigning one variable's value to another, changing one of those variables will have no effect on the other.</p>

    <p>PHP also offers another way to assign values to variables: assign by reference. This means that the new variable simply references (in other words, "becomes an alias for" or "points to") the original variable. Changes to the new variable affect the original, and vice versa. </p>

    <pre class="text-warning bg-dark py-2">
                $foo = 'Bob';                   // Assign the value 'Bob' to $foo
                $bar = &$foo;                   // Reference $foo via $bar.
                $bar = "My name is $bar";       // Alter $bar...
                echo $bar;                      // "My name is Bob"
                echo $foo;                      // $foo is altered too. "My name is Bob"
    </pre>

    <p><strong>default value</strong> </p>
    <ul>
        <li>booleans default to false</li>
        <li>integers and floats default to zero</li>
        <li>strings (e.g. used in echo) are set as an empty string</li>
        <li>arrays become to an empty array.</li>
    </ul> 


    <p>In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.</p>	

</div>
<?php require_once __DIR__ . "/sidebar.php"; ?>
</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>