<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col-md-9">
	<h3 class="text-center display-4">Data Types</h3>

	<p>PHP supports ten primitive types.</p>

	<h3>Four scalar types:</h3>
	<ul class="list-group">
	     <ol>bool</ol>
	     <ol>int</ol>
	     <ol>float (floating-point number, aka double)</ol>
	     <ol>string</ol>
	</ul>

	<p>Some references to the type "double" may remain in the manual. Consider double the same as float; the two names exist only for historic reasons.</p>

	<h3>Four compound types:</h3>
	<ul class="list-group">
	     <ol>array</ol>
	     <ol>object</ol>
	     <ol>callable</ol>
	     <ol>iterable</ol>
	</ul>

	<h3>And finally two special types:</h3>
	<ul class="list-group">
	     <ol>resource</ol>
	     <ol>NULL</ol>
	</ul>

	<p>The type of a variable is not usually set by the programmer; rather, it is decided at runtime by PHP depending on the context in which that variable is used.</p>

	<img src="img/data_type.png" class="img-fluid" alt="">

	<p>To get a human-readable representation of a type for debugging, use the <code>gettype()</code></p>
	<p>To forcibly convert a variable to a certain type, either <code>cast()</code> the variable or use the <code>settype()</code> function on it.</p>
</div>


<?php require_once __DIR__ . "/sidebar.php"; ?>

</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>