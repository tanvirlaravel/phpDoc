<?php include_once 'inc/header.php' ?>
<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">String</h2>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item m-1" role="presentation">
        <a class="nav-link active bg-primary text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Diagram</a>
    </li>
    <li class="nav-item m-1" role="presentation">
        <a class="nav-link bg-secondary text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Numeric</a>
    </li>
    <li class="nav-item m-1" role="presentation">
        <a class="nav-link text-white bg-success" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact">Date & Time</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-warning text-white" id="pills-contact-tab" data-toggle="pill" href="#array_merge">Character strings</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-danger" id="pills-contact-tab" data-toggle="pill" href="#array_count_values">Unicode character string </a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-info text-white" id="pills-contact-tab" data-toggle="pill" href="#array_diff">Binary string</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-warning" id="pills-contact-tab" data-toggle="pill" href="#array_diff_assoc">Other data types</a>
    </li>


</ul>
<div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <a href="https://www.sqlservertutorial.net/sql-server-basics/sql-server-data-types/" class="btn btn-sm btn-info">Website</a>
        <br>

        <img src="img/SQL-Server-Data-Types.png" alt="">

        <p>SQL Server support standard SQL integer types including BIGINT, INT, SMALLINT, and TINYINT. The following table illustrates the range and storage of each integer type:</p>

        <p class="lead bg-warning px-2">
            Notice that SQL Server will remove ntext, text, and image data types in its future version. Therefore, you should avoid using these data types and use nvarchar(max), varchar(max), and varbinary(max) data types instead.
        </p>

    </div>
    <div class="tab-pane fade" id="pills-profile">
        <h3>Exact numeric data types</h3>
        <p>Exact numeric data types store exact numbers such as integer, decimal, or monetary amount.</p>
        <ul>
            <li>The bit store one of three values 0, 1, and NULL</li>
            <li>The int, bigint, smallint, and tinyint data types store integer data.</li>
            <li>The decimal and numeric data types store numbers that have fixed precision and scale. Note that decimal and numeric are synonyms.</li>
            <li>The money and smallmoney data type store currency values.</li>
        </ul>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Data type</th>
                    <th scope="col">Lower limit</th>
                    <th scope="col">Upper limit</th>
                    <th scope="col">Memory</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>bigint</td>
                    <td>−2^63 (−9,223,372, 036,854,775,808)</td>
                    <td>2^63−1 (−9,223,372, 036,854,775,807)</td>
                    <td>8 Bytes</td>
                </tr>
                <tr>

                    <td>int</td>
                    <td>−2^31 (−2,147, 483,648)</td>
                    <td>2^31−1 (−2,147, 483,647)</td>
                    <td>4 Bytes</td>
                </tr>
                <tr>

                    <td>smallint</td>
                    <td>−2^15 (−32,767)</td>
                    <td>2^15 (−32,768)</td>
                    <td>2 Bytes</td>
                </tr>
                <tr>

                    <td>tinyint</td>
                    <td>0 </td>
                    <td> 255</td>
                    <td>1 Bytes</td>
                </tr>
                <tr>
                    <td>bit</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1 byte/8bit column</td>
                </tr>
                <tr>
                    <td>decimal</td>
                    <td>−10^38+1</td>
                    <td>10^381−1</td>
                    <td>5 to 17 bytes</td>
                </tr>
                <tr>
                    <td>numeric</td>
                    <td>−10^38+1</td>
                    <td>10^381−1</td>
                    <td>5 to 17 bytes</td>
                </tr>
                <tr>
                    <td>money</td>
                    <td>−922,337, 203, 685,477.5808</td>
                    <td>+922,337, 203, 685,477.5807</td>
                    <td>8 bytes</td>
                </tr>
                <tr>
                    <td>smallmoney</td>
                    <td>−214,478.3648</td>
                    <td>+214,478.3647</td>
                    <td>4 bytes</td>
                </tr>
            </tbody>
        </table>

        <p class="lead">
            It is a good practice to use the smallest integer data type that can reliably contain all possible values. For example, to store the number of children in a family, TINYINT is sufficient because nowadays no one could have more than 255 children. However, TINYINT is would not be sufficient for storing the stories of a building because a building can have more than 255 stories.
        </p>

        <p>The approximate numeric data type stores floating point numeric data. They are often used in scientific calculations.</p>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Data Type</th>
                    <th scope="col">Lower limit</th>
                    <th scope="col">Upper limit</th>
                    <th scope="col">Memory</th>
                    <th scope="col">Precision</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>float(n)</td>
                    <td>−1.79E+308</td>
                    <td>1.79E+308</td>
                    <td>Depends on the value of n</td>
                    <td>7 Digit</td>
                </tr>
                <tr>

                    <td>real</td>
                    <td>−3.40E+38</td>
                    <td>3.40E+38</td>
                    <td>4 bytes</td>
                    <td>15 Digit</td>
                </tr>


            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <h3>Date & Time data types</h3>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Data Type</th>
                    <th scope="col">Storage size</th>
                    <th scope="col">Accuracy</th>
                    <th scope="col">Lower Range</th>
                    <th scope="col">Upper Range</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>datetime</td>
                    <td>8 bytes</td>
                    <td>Rounded to increments of .000, .003, .007</td>
                    <td>1753-01-01</td>
                    <td>9999-12-31</td>
                </tr>
                <tr>
                    <td>smalldatetime</td>
                    <td>4 bytes, fixed</td>
                    <td>1 minute</td>
                    <td>1900-01-01</td>
                    <td>2079-06-06</td>
                </tr>
                <tr>
                    <td>date</td>
                    <td>3 bytes, fixed</td>
                    <td>1 day</td>
                    <td>0001-01-01</td>
                    <td>9999-12-31</td>
                </tr>
                <tr>
                    <td>time</td>
                    <td>5 bytes</td>
                    <td>100 nanoseconds</td>
                    <td>00:00:00.0000000</td>
                    <td>23:59:59.9999999</td>
                </tr>
                <tr>
                    <td>datetimeoffset</td>
                    <td>10 bytes</td>
                    <td>100 nanoseconds</td>
                    <td>0001-01-01</td>
                    <td>9999-12-31</td>
                </tr>
                <tr>
                    <td>datetime2</td>
                    <td>6 bytes</td>
                    <td>100 nanoseconds</td>
                    <td>0001-01-01</td>
                    <td>9999-12-31</td>
                </tr>

            </tbody>
        </table>
        <p class="lead">If you develop a new application, you should use the time, date, datetime2 and datetimeoffset data types. Because these types align with the SQL Standard and more portable. In addition, the time, datetime2 and datetimeoffset have more seconds precision and datetimeoffset supports time zone.</p>

    </div>
    <div class="tab-pane fade" id="array_merge">
        <h3>Character strings data types</h3>
        <p>Character strings data types allow you to store either fixed-length (char) or variable-length data (varchar). The text data type can store non-Unicode data in the code page of the server.</p>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Data Type</th>
                    <th scope="col">Lower limit</th>
                    <th scope="col">Upper limit</th>
                    <th scope="col">Memory</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>char</td>
                    <td>0 chars</td>
                    <td>8000 chars</td>
                    <td>n bytes</td>
                </tr>
                <tr>
                    <td>varchar</td>
                    <td>0 chars</td>
                    <td>8000 chars</td>
                    <td>n bytes + 2 bytes</td>
                </tr>
                <tr>
                    <td>varchar (max)</td>
                    <td>0 chars</td>
                    <td>2^31 chars</td>
                    <td>n bytes + 2 bytes</td>
                </tr>
                <tr>
                    <td>text</td>
                    <td>0 chars</td>
                    <td>2,147,483,647 chars</td>
                    <td>n bytes + 4 bytes</td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="array_count_values">
        <h3>Unicode character string data types</h3>
        <p>Unicode character string data types store either fixed-length (nchar) or variable-length (nvarchar) Unicode character data.</p>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Data Type</th>
                    <th scope="col">Lower limit</th>
                    <th scope="col">Upper limit</th>
                    <th scope="col">Memory</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>nchar</td>
                    <td>0 chars</td>
                    <td>4000 chars</td>
                    <td>2 times n bytes</td>
                </tr>
                <tr>
                    <td>nvarchar</td>
                    <td>0 chars</td>
                    <td>4000 chars</td>
                    <td>2 times n bytes + 2 bytes</td>
                </tr>
                <tr>
                    <td>ntext</td>
                    <td>0 chars</td>
                    <td>1,073,741,823 char</td>
                    <td>2 times the string length</td>
                </tr>

            </tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="array_diff">
        <h3>Binary string data types</h3>
        <p>The binary data types stores fixed and variable length binary data.</p>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Data Type</th>
                    <th scope="col">Lower limit</th>
                    <th scope="col">Upper limit</th>
                    <th scope="col">Memory</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>binary</td>
                    <td>0 chars</td>
                    <td>8000 bytes</td>
                    <td>n bytes</td>
                </tr>

                <tr>
                    <td>varbinary</td>
                    <td>0 bytes</td>
                    <td>8000 bytes</td>
                    <td>The actual length of data entered + 2 bytes</td>
                </tr>

                <tr>
                    <td>image</td>
                    <td>0 bytes</td>
                    <td>2,147,483,647 bytes</td>
                    <td></td>
                </tr>

            </tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="array_diff_assoc">
        <h3>Other data types</h3>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Data Type</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>cursor</td>
                    <td>for variables or stored procedure OUTPUT parameter that contains a reference to a cursor</td>
                </tr>

                <tr>
                    <td>rowversion</td>
                    <td>expose automatically generated, unique binary numbers within a database.</td>
                </tr>

                <tr>
                    <td>hierarchyid</td>
                    <td>represent a tree position in a tree hierarchy</td>
                </tr>
                <tr>
                    <td>uniqueidentifier</td>
                    <td>16-byte GUID</td>
                </tr>
                <tr>
                    <td>sql_variant</td>
                    <td>store values of other data types</td>
                </tr>
                <tr>
                    <td>XML</td>
                    <td>store XML data in a column, or a variable of XML type</td>
                </tr>
                <tr>
                    <td>Spatial Geometry type</td>
                    <td>represent data in a flat coordinate system.</td>
                </tr>
                <tr>
                    <td>Spatial Geography type</td>
                    <td>store ellipsoidal (round-earth) data, such as GPS latitude and longitude coordinates.</td>
                </tr>
                <tr>
                    <td>table</td>
                    <td>store a result set temporarily for processing at a later time</td>
                </tr>



            </tbody>
        </table>

    </div>



</div>




<?php include_once 'inc/footer.php' ?>
