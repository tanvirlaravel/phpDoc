<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">


<?php require_once __DIR__ . "/sidebar.php"; ?>


<div class="col-md-9">

	<h3 class="text-center display-4">Variable Lifecycle</h3>

    <p>
    Before a variable is used, it has no existence. It is unset. It is possible to check if a variable doesn't exist by using <code>isset()</code>. This returns true provided the variable exists and isn't set to null. With the exception of null, the value a variable holds plays no part in determining whether a variable is set.</p>

    <p>Setting an existing variable to null is a way of unsetting a variable. Another way is variables may be destroyed by using the <code>unset()</code> construct.</p>

    <pre class="text-warning bg-dark py-2">
        print isset($a); // $a is not set. Prints false. (Or more accurately prints ''.)
        $b = 0; // isset($b) returns true (or more accurately '1')
        $c = array(); // isset($c) returns true
        $b = null; // Now isset($b) returns false;
        unset($c); // Now isset($c) returns false;
</pre>

<p><code>is_null()</code> is an equivalent test to checking that <code>isset()</code> is false.</p>
<p>The first time that a variable is used in a scope, it's automatically created. After this isset is true. At the point at which it is created it also receives a type according to the context</p>
<pre class="text-warning bg-dark py-2">
        $a_bool = true;   // a boolean
        $a_str = 'foo';    // a string
</pre>
<p>If it is used without having been given a value then it is uninitalized and it receives the default value for the type. The default values are the _empty_ values. E.g  Booleans default to FALSE, integers and floats default to zero, strings to the empty string '', arrays to the empty array.</p>

<h3>A variable can be tested for emptiness using <code>empty()</code>;</h3>
<pre class="text-warning bg-dark py-2">
        $a = 0; //This isset, but is empty
</pre>

<h3>Unset variables are also empty.</h3>
<pre class="text-warning bg-dark py-2">
        empty($vessel); // returns true. Also $vessel is unset.
</pre>

<h3>Everything above applies to array elements too.</h3>
<pre class="text-warning bg-dark py-2">
        $item = array();
        //Now isset($item) returns true. But isset($item['unicorn']) is false.
        //empty($item) is true, and so is empty($item['unicorn']

        $item['unicorn'] = '';
        //Now isset($item['unicorn']) is true. And empty($item) is false.
        //But empty($item['unicorn']) is still true;

        $item['unicorn'] = 'Pink unicorn';
        //isset($item['unicorn']) is still true. And empty($item) is still false.
        //But now empty($item['unicorn']) is false;
</pre>
<p>
For arrays, this is important because accessing a non-existent array item can trigger errors; you may want to test arrays and array items for existence with isset before using them.</p>






</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>