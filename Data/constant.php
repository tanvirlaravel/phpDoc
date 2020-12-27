<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">



<div class="col-md-9">

	<h3 class="text-center display-4">Constant</h3>

    <p>Constants are like variables except that once they are defined they cannot be changed or undefined.</p>
    <p>A constant is an identifier (name) for a simple value. The value cannot be changed during the script.</p>
    <p>the scope of a constant is global</p>
    <p>Constants are automatically global and can be used across the entire script.</p>

    <pre class="text-warning bg-dark py-2">
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
</pre>



<h3>Constant Arrays</h3>
<pre class="text-warning bg-dark py-2">
        define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
        ]);
        echo cars[0];
</pre>

<h3>Magic constants</h3>
<p>PHP provides a large number of predefined constants to any script which it runs.</p>
<p>There are nine magical constants that change depending on where they are used. </p>

<ul class="list-group">
    <li><strong>__LINE__</strong> The current line number of the file.</li>
    <li><strong>__FILE__</strong> The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.</li>
    <li><strong>__DIR__</strong>The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.</li>
    <li><strong>__FUNCTION__</strong> The function name, or {closure} for anonymous functions.</li>
    <li><strong>__CLASS__</strong> The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.</li>
    <li><strong>__TRAIT__</strong> The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar)</li>
    <li><strong>__METHOD__</strong> The class method name.</li>
    <li><strong>__NAMESPACE__</strong> The name of the current namespace. </li>
    <li><strong>ClassName::class</strong> The fully qualified class name.</li>
</ul>



</div>

<?php require_once __DIR__ . "/sidebar.php"; ?>

</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>