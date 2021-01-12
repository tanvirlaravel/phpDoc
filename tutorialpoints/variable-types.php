<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4 ">Variable Types</h3>
	<hr>

	<p>PHP has a total of eight data types which we use to construct our variables −</p>

	

	  <ul>
	  	<li><strong>Integers </strong>− are whole numbers, without a decimal point, like 4195.</li>
	  	<li><strong>Doubles </strong>− are floating-point numbers, like 3.14159 or 49.1.</li>
	  	<li><strong>Booleans </strong>− have only two possible values either true or false.</li>
	  	<li><strong>NULL </strong>− is a special type that only has one value: NULL.</li>
	  	<li><strong>Strings </strong>− are sequences of characters, like 'PHP supports string operations.'</li>
	  	<li><strong>Arrays </strong>− are named and indexed collections of other values.</li>
	  	<li><strong>Objects </strong>− are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.</li>
	  	<li><strong>Resources </strong> − are special variables that hold references to resources external to PHP (such as database connections).</li>
	  
	  </ul>

	<hr>
	<h2>Integers</h2>
	<p>They are whole numbers, without a decimal point, like 4195. positive and negative</p>
	<code>$int_var = -12345 + 12345;</code>
	<p>Integer can be in decimal (base 10), octal (base 8), and hexadecimal (base 16) format. Decimal format is the default</p>

	<hr>
	<h2>Doubles</h2>
	<p>They like 3.14159 or 49.1.</p>
	<code>$many = 2.2888800;</code>

	<hr>
	<h2>Boolean</h2>
	<p>Theose come out <code>false</code></p>
	<ul>
		<li>0</li>
		<li>"", or "0"</li>
		<li>NULL</li>
		<li>array, it is false if it contains no other values, For an object, containing a value means having a member variable that has been assigned a value</li>
		<li>Valid resources are true (although some functions that return resources when they are successful will return FALSE when unsuccessful).</li>
		<li>Don't use double as Booleans.</li>
	</ul>

	<hr>
	<h2>NULL</h2>
	<p>NULL is a special type that only has one value: NULL</p>
	<ul>
		<li>It evaluates to FALSE in a Boolean context.</li>
		<li>It returns FALSE when tested with IsSet() function.</li>
	</ul>
	

	<hr>
	<h2>Strings</h2>
	<code>$string_0 = ""; // a string with zero characters</code>
	<p>Singly quoted strings are treated almost literally, whereas doubly quoted strings replace variables with their values as well as specially interpreting certain character sequences.</p>

	<pre class="bg-dark text-warning py-2">
	$variable = "name";
   	$literally = 'My $variable will not print!';
   
   	print($literally);	//  My $variable will not print!   	
   
   	$literally = "My $variable will print!";
   	print($literally);   // My name will print
	</pre>

	<h4>The escape-sequence replacements are −</h4>
	<ul>
		<li>\n is replaced by the newline character</li>
		<li>\r is replaced by the carriage-return character</li>
		<li>\t is replaced by the tab character</li>
		<li>\$ is replaced by the dollar sign itself ($)</li>
		<li>\" is replaced by a single double-quote (")</li>
		<li>\\ is replaced by a single backslash (\)</li>
	</ul>

	<h4>Here Document</h4>

</div>




</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>