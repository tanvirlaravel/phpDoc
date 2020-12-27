<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col-md-9">

	<h3 class="text-center display-4">Variables From External Sources </h3>

    <h3>HTML Forms (GET and POST) </h3>
    <p>When a form is submitted to a PHP script, the information from that form is automatically made available to the script. </p>
    <p>In <code>POST methods</code> There are only two ways to access data from your HTML forms.</p>
    <pre class="text-warning bg-dark py-2">
        echo $_POST['username'];
        echo $_REQUEST['username'];
</pre>

<p class="text-dark bg-info px-5 py-1">
Dots and spaces in variable names are converted to underscores. For example &lt;input name="a.b" /&gt; becomes $_REQUEST["a_b"].</p>

<h3>HTTP Cookies</h3>
<p>Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. </p>
<ul class="list-group">
   <li><code> setcookie()</code></li>
   <li><code> $_COOKIE</code></li>
   <li><code> $_REQUEST</code></li>
</ul>

 </div>

 <?php require_once __DIR__ . "/sidebar.php"; ?>


</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>