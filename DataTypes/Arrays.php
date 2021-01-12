<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col-md-2">
   <div class="sticky-top">
    <p class="text-info mb-1">Add to array</p>

    <ol class="list-group ">
        <li><a href="#array_combine">array_combine()</a></li>
        <li><a href="#array_merge">array_merge()</a></li>
        <li> <a href="#array_push">array_push()</a></li>        
        <li> <a href="#array_pad">array_pad()</a></li>
    </ol>

    <p class="text-info mb-1 mt-3">Remove from array</p>
    <ol class="list-group">
        <li> <a  href="#array_pop">array_pop()</a></li>
        <li> <a href="#array_shift">array_shift()</a></li>
        <li > <a href="#array_slice">array_slice()</a></li>
    </ol>

    <p class="text-info mb-1 mt-3">Diff</p>
    <ol class="list-group">
        <li><a href="#array_diff">array_diff()</a></li>
       <li><a href="#array_diff_assoc">array_diff_assoc()</a></li>
       <li><a href="#array_diff_key">array_diff_key()</a></li>
    </ol>

    <p class="text-info mb-1 mt-3">array_intersect</p>
    <ol class="list-group">
    <li><a href="#array_intersect">array_intersect()</a></li>
       <li><a href="#array_intersect_assoc">array_intersect_assoc()</a></li>
       <li><a href="#array_intersect_key">array_intersect_key()</a></li>
    </ol>

    </div>

</div>

<div class="col-md-8">

	<h3 class="text-center display-4 text-info mb-5">Arrays</h3>
    <p>An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.</p>

   

    <hr>
    <div id="array_change_key_case">
        <img src="img/array/array_change_key_case.png" alt="" class="img-fluid">
        <img src="img/array/array_change_key_case1.png" alt="" class="img-fluid">
        <img src="img/array/array_change_key_case2.png" alt="" class="img-fluid">
    </div>

    <hr>
    <div id="array_column">
        <img src="img/array/array_column.png" alt="" class="img-fluid">
        <img src="img/array/array_column2.png" alt="" class="img-fluid">
        <img src="img/array/array_column3.png" alt="" class="img-fluid">
        <img src="img/array/array_column4.png" alt="" class="img-fluid">
        <img src="img/array/array_column5.png" alt="" class="img-fluid">
    </div>
    <hr>

    <div id="array_combine">
     <img src="img/array/array_combine.png" alt="" class="img-fluid">
        <img src="img/array/array_combine2.png" alt="" class="img-fluid">
    </div>
    <hr>

    <div id="array_merge">
        <img src="img/array/array_merge.png" class="img-fluid">
        <img src="img/array/array_merge2.png" class="img-fluid">
    </div>
    <hr>

    <div id="array_count_values">
        <img src="img/array/array_count_values.png" class="img-fluid">
        <img src="img/array/array_count_values2.png" class="img-fluid">
    </div>
    <hr>


    <div id="array_diff">
    <img src="img/array/array_diff.png" class="img-fluid">
        <img src="img/array/array_diff2.png" class="img-fluid">
        <img src="img/array/array_diff3.png" class="img-fluid">
    </div>
    <hr>

    <div id="array_diff_assoc">
    <img src="img/array/array_diff_assoc.png" class="img-fluid">
        <img src="img/array/array_diff_assoc2.png" class="img-fluid">
        <img src="img/array/array_diff_assoc3.png" class="img-fluid">
        <img src="img/array/array_diff_assoc4.png" class="img-fluid">
    </div>
    <hr>

    <div id="array_diff_key">
    <img src="img/array/array_diff_key.png" class="img-fluid">
        <img src="img/array/array_diff_key2.png" class="img-fluid">
    </div>
    <hr>

    <div id="array_intersect">
    <img src="img/array/array_intersect.png" class="img-fluid">
        <img src="img/array/array_intersect2.png" class="img-fluid">
        <img src="img/array/array_intersect3.png" class="img-fluid">
    </div>
    <hr>

    <div id="array_intersect_assoc">
    <a href="https://www.tutorialspoint.com/array-intersect-assoc-function-in-php">later</a>
    </div>
    <hr>

    <div id="array_intersect_key">
    <img src="img/array/array_intersect_key.png" class="img-fluid">
        <img src="img/array/array_intersect_key2.png" class="img-fluid">
    </div>
    <hr>

    <div id="array_key_exists">
    <img src="img/array/array_key_exists.png" class="img-fluid">
        <img src="img/array/array_key_exists2.png" class="img-fluid">
    </div>
    <hr>

    <!---------> 
    <div id="array_keys">
        <img src="img/array/array_keys.png" class="img-fluid">
    </div>
    <div id="array_map">
        <img src="img/array/array_map.png" class="img-fluid">
        <img src="img/array/array_map2.png" class="img-fluid">
        <img src="img/array/array_map3.png" class="img-fluid">
        <img src="img/array/array_map4.png" class="img-fluid">
        <img src="img/array/array_map5.png" class="img-fluid">
    </div>
    <div id="array_multisort">
        <img src="img/array/array_multisort.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_multisort2.png" class="img-fluid">
    </div>
    <div id="array_pad">
        <img class="img-fluid" src="img/array/array_pad.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_pad2.png" class="img-fluid">
    </div>
    <div id="array_pop">
        <img class="img-fluid" src="img/array/array_pop.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_pop2.png" class="img-fluid">
    </div>
    <div id="array_push">
        <img class="img-fluid" src="img/array/array_push.png class="img-fluid"">
        <img class="img-fluid" src="img/array/array_push2.png" class="img-fluid">
    </div>
    <div id="array_product">
        <img class="img-fluid" src="img/array/array_product.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_product2.png" class="img-fluid">
    </div>
    <div id="array_replace">
        <img class="img-fluid" src="img/array/array_replace.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_replace2.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_replace3.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_replace4.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_replace5.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_replace6.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_replace7.png" class="img-fluid">
    </div>
    <div id="array_reverse">
        <img class="img-fluid" src="img/array/array_reverse.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_reverse2.png" class="img-fluid">
    </div>
    <div id="array_search">
        <img class="img-fluid" src="img/array/array_search.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_search2.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_search3.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_search4.png" class="img-fluid">
    </div>
    <div id="array_shift">
        <img class="img-fluid" src="img/array/array_shift.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_shift2.png" class="img-fluid">
    </div>
    <div id="array_slice">
        <img class="img-fluid" src="img/array/array_slice.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_slice2.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_slice3.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_slice4.png" class="img-fluid">
    </div>
    <div id="array_sum">
        <img class="img-fluid" src="img/array/array_sum.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_sum2.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_sum3.png" class="img-fluid">
    </div>
    <div id="array_unique">
        <img class="img-fluid" src="img/array/array_unique.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_unique2.png" class="img-fluid">
    </div>
    <div id="array_unshift">
        <img class="img-fluid" src="img/array/array_unshift.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_unshift2.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_unshift3.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_unshift4.png" class="img-fluid">
    </div>
    <div id="array_values">
        <img class="img-fluid" src="img/array/array_values.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_values2.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_values3.png" class="img-fluid">
    </div>
    <div id="array_walk">
        <img class="img-fluid" src="img/array/array_walk.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_walk2.png" class="img-fluid">
        <img class="img-fluid" src="img/array/array_walk3.png" class="img-fluid">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>
    <div id="ontact">
        <img src="img/array">
    </div>

    
   
   

</div>


<div class="col-md-2">
<div class="sticky-top">


    <ol class="list-group">

       <li><a href="#array_change_key_case">array_change_key_case()</a></li>
       <li><a href="#array_column">array_column()</a></li>
       
       <li><a href="#array_count_values">array_count_values()</a></li>
       
       
       <li><a href="#array_key_exists">array_key_exists()</a></li>



       <li> <a href="#array_keys">array_keys()</a>    </li>
    <li ><a href="#array_map">array_map()</a>    </li>
    <li >  <a  href="#array_multisort">array_multisort()</a>    </li>
    
    <li > <a  href="#array_product">array_product()</a>    </li>
    <li > <a href="#array_replace">array_replace()</a>   </li>
    <li > <a  href="#array_search">array_search()</a>    </li>
    
    <li > <a href="#array_sum">array_sum()</a>    </li>
    
    <li ><a href="#array_unique">array_unique()</a></li>
    <li > <a href="#array_unshift">array_unshift()</a>
    </li>
    <li > <a href="#array_values">array_values()</a>
    </li>
    <li > <a  href="#array_walk">array_walk()</a>
    </li>
    <li > <a  href="#contact">array_combine()</a>
    </li>
    <li> <a href="#contact">array_combine()</a>
    </li>
    <li><a href="#contact">array_combine()</a>
    </li>
    <li><a  href="#contact">array_combine()</a>
    </li>
    <li><a href="#contact">array_combine()</a>
    </li>
    <li><a  href="#pills-contact">array_combine()</a>
    </li>
    <li><a href="#pills-contact">array_combine()</a>
    </li>
    <li><a  href="#pills-contact">array_combine()</a>
    </li>
    <li><a href="#pills-contact">array_combine()</a>
    </li>
    </ol>
    </div>

</div>
</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>