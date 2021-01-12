<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Varible</h3>

	<p>The main way to store information in the middle of a PHP program is by using a variable.</p>

	<ul>
        <li>The value of a variable is the value of its most recent assignment</li>
    </ul>

	<hr>
	<h3>Constants </h3>
	<p>A constant is a name or an identifier for a simple value</p>
	<p>A constant value cannot change during the execution of the script.</p>
	<p>Constants may be defined and accessed anywhere without regard to variable scoping rules.</p>
	<p>Once the Constants have been set, may not be redefined or undefined.</p>

	<hr>
	<h3>PHP Magic constants</h3>
	<p>PHP provides a large number of predefined constants to any script which it runs.</p>
	<ul>
		<li><strong>__LINE__</strong> The current line number of the file.</li>
		<li><strong>__FILE__</strong> The full path and filename of the file. If used inside an include,the name of the included file is returned. Since PHP 4.0.2, __FILE__ always contains an absolute path whereas in older versions it contained relative path under some circumstances.</li>
		<li><strong>__FUNCTION__</strong> The function name</li>
		<li><strong>__CLASS__</strong> The class name</li>
		<li><strong>__METHOD__</strong> The class method name</li>
		
	</ul>

</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>