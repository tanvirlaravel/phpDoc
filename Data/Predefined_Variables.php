<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">



<div class="col-md-9">

	<h3 class="text-center display-4">Predefined Variables</h3>

    <p>
    PHP provides a large number of predefined variables to any script which it runs. Many of these variables, however, cannot be fully documented as they are dependent upon which server is running, the version and setup of the server, and other factors.</p>

    <p>PHP also provides an additional set of predefined arrays containing variables from the web server (if applicable), the environment, and user input. These arrays are rather special in that they are automatically global - i.e., automatically available in every scope. For this reason, they are often known as "superglobals". (There is no mechanism in PHP for user-defined superglobals.)</p>

    <ul class="list-group">
        <li><strong>Superglobals</strong>— Superglobals are built-in variables that are always available in all scopes</li>
        <li><strong>$GLOBALS</strong>References all variables available in global scope</li>
        <li><strong>$_SERVER </strong>— Server and execution environment information</li>
        <li><strong>$_GET </strong>— HTTP GET variables</li>
        <li><strong>$_POST</strong>— HTTP POST variables</li>
        <li><strong>$_FILES </strong>— HTTP File Upload variables</li>
        <li><strong>$_REQUEST </strong>— HTTP Request variables</li>
        <li><strong>$_SESSION </strong>— Session variables</li>
        <li><strong>$_ENV </strong>— Environment variables</li>
        <li><strong>$_COOKIE </strong> — HTTP Cookies</li>
        <li><strong>$php_errormsg </strong> — The previous error message</li>
        <li><strong>$http_response_header </strong> — HTTP response headers</li>
        <li><strong>$argc </strong>— The number of arguments passed to script</li>
        <li><strong>$argv </strong>— Array of arguments passed to script</li>
    </ul>

    <p><a href="https://www.php.net/manual/en/reserved.variables.php" class="text-danger" target="_blank">Link</a></p>

</div>

<?php require_once __DIR__ . "/sidebar.php"; ?>
</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>