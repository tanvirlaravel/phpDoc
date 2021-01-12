<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">File Uploading</h3>
    <hr>

    <p>A PHP script can be used with a HTML form to allow users to upload files to the server. Initially files are uploaded into a temporary directory and then relocated to a target destination by a PHP script.</p>
    <p>Information in the phpinfo.php page describes the temporary directory that is used for file uploads as upload_tmp_dir and the maximum permitted size of files that can be uploaded is stated as upload_max_filesize. These parameters are set into PHP configuration file php.ini</p>

    <hr>
    <h3>The process of uploading a file follows these steps −</h3>
    <ul>
        <li>The full path to the selected file appears in the text filed then the user clicks the submit button.</li>
        <li>The selected file is sent to the temporary directory on the server.</li>
        <li>The PHP script that was specified as the form handler in the form's action attribute checks that the file has arrived and then copies the file into an intended directory.</li>
    </ul>
    <p>As usual when writing files it is necessary for both temporary and final locations to have permissions set that enable file writing. If either is set to be read-only then process will fail.</p>
    <p>An uploaded file could be a text file or image file or any document.</p>

    <hr>
    <h3>Creating an upload form</h3>
    <p>The following HTM code below creates an uploader form. This form is having method attribute set to post and enctype attribute is set to multipart/form-data</p>
    <code> &lt;form action="" method="POST" enctype="multipart/form-data"&gt;</code>

    <hr>
    <h3>Creating an upload script</h3>
    <p>There is one global PHP variable called $_FILES. This variable is an associate double dimension array and keeps all the information related to uploaded file.</p>
    <ol>
        <li>$_FILES['file']['tmp_name']</li>
        <li>$_FILES['file']['name'] </li>
        <li>$_FILES['file']['size']</li>
        <li>$_FILES['file']['type']</li>
        <li>$_FILES['file']['error']</li>
    </ol>

    <code>move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);</code>
    
	

</div>



</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>