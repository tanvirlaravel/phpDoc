<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Numbers</h3>
    <h3>Integers, Floats, and Number Strings</h3>

	
    <hr>
    <h3>PHP Integers</h3>
    <p>An integer is a number without any decimal part.</p>
    <p>2, 256, -256, 10358, -179567 are all integers. While 7.56, 10.0, 150.67 are floats.</p>
    <p>So, an integer data type is a non-decimal number between -2147483648 and 2147483647. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.</p>
    <p>Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).</p>
    <ol>
        <li>An integer must not have a decimal point</li>
        <li>An integer can be either positive or negative</li>
    </ol>

    <p>PHP has the following functions to check if the type of a variable is integer:</p>
    <ol>
        <li>is_int()</li>
        <li>is_integer() - alias of is_int()</li>
        <li>is_long() - alias of is_int()</li>
    </ol>

    <hr>
    <h3>PHP Floats</h3>
    <p>A float is a number with a decimal point or a number in exponential form.</p>
    <p>2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.</p>
    <p>PHP has the following functions to check if the type of a variable is float:</p>
    <ol>
        <li>is_float()</li>
        <li>is_double() - alias of is_float()</li>
    </ol>

    <hr>
    <h3>PHP Infinity</h3>
    <p>A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.</p>
    <ol>
        <li>is_finite()</li>
        <li>is_infinite()</li>
    </ol>

    <hr>
    <h3>PHP NaN</h3>
    <p>NaN stands for Not a Number.</p>
    <p>NaN is used for impossible mathematical operations.</p>
    <p><code>is_nan()</code></p>

    <p><code>is_numeric()</code> The function returns true if the variable is a number or a numeric string, false otherwise.</p>

    <hr>
    <h3>PHP Casting Strings and Floats to Integers</h3>
    <p>The (int), (integer), or intval() function are often used to convert a value to an integer.</p>
    


</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>