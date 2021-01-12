<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Session</h3>
    <hr>

    <p>An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.</p>
    <p>A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.</p>
    <p>The location of the temporary file is determined by a setting in the php.ini file called session.save_path. Before using any session variable make sure you have setup this path.</p>
   <p>When a session is started following things happen −</p>
   <ul>
        <li>PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as 3c7foj34c3jj973hjkop2fc937e3443.</li>
        <li>A cookie called PHPSESSID is automatically sent to the user's computer to store unique session identification string.</li>
        <li>A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.</li>
   </ul>

   <p>When a PHP script wants to retrieve the value from a session variable, PHP automatically gets the unique session identifier string from the PHPSESSID cookie and then looks in its temporary directory for the file bearing that name and a validation can be done by comparing both values.</p>
   <p>A session ends when the user loses the browser or after leaving the site, the server will terminate the session after a predetermined period of time, commonly 30 minutes duration</p>

    <hr>
    <h3>Starting a PHP Session</h3>
    <p>A PHP session is easily started by making a call to the session_start() function.This function first checks if a session is already started and if none is started then it starts one</p>
    <p>Session variables are stored in associative array called $_SESSION[]. These variables can be accessed during lifetime of a session.</p>


		
   <hr>
   <h3>Destroying a PHP Session</h3>
   <p>A PHP session can be destroyed by session_destroy() function. This function does not need any argument and a single call can destroy all the session variables. If you want to destroy a single session variable then you can use unset() function to unset a session variable.</p>
   <code>unset($_SESSION['counter']);</code>

   <hr>
   <h3>Turning on Auto Session</h3>
   <p>You don't need to call start_session() function to start a session when a user visits your site if you can set session.auto_start variable to 1 in php.ini file.</p>

   <hr>
   <h3>Sessions without cookies</h3>
   <p>Google search</p>
    
	

</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>