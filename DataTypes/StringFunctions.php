<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col-md-9">

	<h3 class="text-center display-4 text-info mb-5">String Functions</h3>
    <p>In PHP a string is just an array of characters</p>  

    <h5>a haystack to be searched and a needle to be found</h5>

   

    <hr>
    <h3>Most Popular PHP String Functions</h3>
    <h4>1. substr()</h4>
    <p>It can be useful when you need to get at parts of fixed format strings.</p>
    <img src="img/substr.png" class="img-fluid" alt="">
    <img src="img/substr1.png" class="img-fluid" alt="">
    <img src="img/substr3.png" class="img-fluid" alt="">

    <hr>
    <h3>2. strlen()</h3>

    <hr>
    <h3>3. str_replace()</h3>
    <p>Find and replace</p>
    <img src="img/str_replace.png" class="img-fluid" alt="">
    <img src="img/str_replace1.png" class="img-fluid" alt="">

    <hr>
    <h3>4. trim()</h3>
    <p>The <code>trim()</code> function strips whitespace from the start and end of a string and returns the resulting string. The characters it strips by default are newlines and carriage returns (n and r), horizontal and vertical tabs (t and x0B), end-of-string characters (), and spaces. You can also pass it a second parameter containing a list of characters to strip instead of this default list. Depending on your particular purpose, you might like to use the <code>ltrim()</code> or <code>rtrim()</code> functions instead which perform the same operation, but you choose which side of the string to affect.</p>
    <img src="img/trim.png" class="img-fluid" alt="">

    <hr>
    <h3>5. strpos()</h3>
    <p>strpos — Find the position of the first occurrence of a substring in a string</p>
    <p><a href="https://www.php.net/manual/en/function.strpos.php" target="_blank">php.net</a></p>

    <hr>
    <h3>6. strstr()</h3>
    <p>This function can be used to find a string inside a string, including finding a string containing only a single character.</p>
    <p>The integer returned is the position of the first occurrence of the needle within the haystack. The first character is in position 0 just like arrays.</p>
    <img src="img/strstr.png" class="img-fluid" alt="">

    <hr>
    <h3>7. strtolower()</h3>

    <hr>
    <h3>8. strtoupper()</h3>

    <hr>
    <h3>9. is_string()</h3>
    <p>is_string() is used to check if a value is a string.</p>
    <p><code>is_string ( 7 )</code></p>
    <p><code>is_string ( "Lucky Number 7" )</code></p>

    <hr>
    <h3>10. str_word_count()</h3>

    <hr>
    <h3>11. strrev()</h3>
   
   

</div>


<?php require_once __DIR__ . "/sidebar.php"; ?>

</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>