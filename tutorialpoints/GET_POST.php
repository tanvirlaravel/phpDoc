<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">GET & POST</h3>
    <hr>

		
    <p>There are two ways the browser client can send information to the web server.</p>
    <ul>
        <li>The GET Method</li>
        <li>The POST Method</li>
    </ul>

    <p>Before the browser sends the information, it encodes it using a scheme called URL encoding. In this scheme, name/value pairs are joined with equal signs and different pairs are separated by the ampersand.</p>
    <code>http://www.test.com/index.htm?name1=value1&name2=value2</code>

    <hr>
    <h3>The GET Method</h3>
    <p>The GET method sends the encoded user information appended to the page request.</p>
    <p>The data sent by GET method can be accessed using QUERY_STRING environment variable.</p>
    <p>The PHP provides $_GET associative array to access all the sent information using GET method.</p>

    <hr>
    <h3>The POST Method</h3>
    <p>The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called QUERY_STRING.</p>
    <p>The POST method can be used to send ASCII as well as binary data.</p>
    <p>The data sent by POST method goes through HTTP header so security depends on HTTP protocol. By using Secure HTTP you can make sure that your information is secure.</p>
    <p>The PHP provides $_POST associative array to access all the sent information using POST method.</p>

    <hr>
    <h3>The $_REQUEST variable</h3>
    <p>The PHP $_REQUEST variable contains the contents of both $_GET, $_POST, and $_COOKIE.</p>
 
    
	

</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>