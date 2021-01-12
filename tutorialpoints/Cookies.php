<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Cookies</h3>
    <hr>

    <p>Cookies are text files stored on the client computer and they are kept of use tracking purpose.</p>
    <p>There are three steps involved in identifying returning users −</p>
    <ol>
        <li>Server script sends a set of cookies to the browser. For example name, age, or identification number etc.</li>
        <li>Browser stores this information on local machine for future use.</li>
        <li>When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.</li>
    </ol>

    <hr>
    <h3>HTTP headers</h3>
    <p>HTTP headers let the client and the server pass additional information with an HTTP request or response. An HTTP header consists of its case-insensitive name followed by a colon (:), then by its value</p>
		
   <hr>
   <h3>The Anatomy of a Cookie</h3>
   <p>Cookies are usually set in an HTTP header</p>
   <pre class="py-2 bg-dark text-warning">
        HTTP/1.1 200 OK
        Date: Fri, 04 Feb 2000 21:03:38 GMT
        Server: Apache/1.3.9 (UNIX) PHP/4.0b3
        Set-Cookie: name=xyz; expires=Friday, 04-Feb-07 22:03:38 GMT; 
                        path=/; domain=tutorialspoint.com
        Connection: close
        Content-Type: text/html
   </pre>
   <p>The name and value will be URL encoded. The expires field is an instruction to the browser to "forget" the cookie after the given time and date.</p>
   <p>If the browser is configured to store cookies, it will then keep this information until the expiry date. If the user points the browser at any page that matches the path and domain of the cookie, it will resend the cookie to the server.The browser's headers might look something like this −</p>
   <pre class="py-2 bg-dark text-warning">
        GET / HTTP/1.0
        Connection: Keep-Alive
        User-Agent: Mozilla/4.6 (X11; I; Linux 2.2.6-15apmac ppc)
        Host: zink.demon.co.uk:1126
        Accept: image/gif, */*
        Accept-Encoding: gzip
        Accept-Language: en
        Accept-Charset: iso-8859-1,*,utf-8
        Cookie: name=xyz
   </pre>

   <p>A PHP script will then have access to the cookie in the environmental variables $_COOKIE or $HTTP_COOKIE_VARS[] which holds all cookie names and values.</p>

   <hr>
   <h3>Setting Cookies with PHP</h3>
   <h3>Accessing Cookies with PHP</h3>
   <h3>Deleting Cookie with PHP</h3>
   <code>setcookie( "name", "", time()- 60, "/","", 0);</code>    
	

</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>