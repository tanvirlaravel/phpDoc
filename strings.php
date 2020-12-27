<?php include_once 'inc/header.php' ?>
<?php include_once 'inc/nav.php' ?>

<h2 class="my-4 text-info text-center">String</h2>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item m-1" role="presentation">
        <a class="nav-link active bg-primary text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ceil()</a>
    </li>
    <li class="nav-item m-1" role="presentation">
        <a class="nav-link bg-secondary text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">count()</a>
    </li>
    <li class="nav-item m-1" role="presentation">
        <a class="nav-link text-white bg-success" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact">array_combine()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-warning text-white" id="pills-contact-tab" data-toggle="pill" href="#array_merge">array_merge()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-danger" id="pills-contact-tab" data-toggle="pill" href="#array_count_values">array_count_values()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-info text-white" id="pills-contact-tab" data-toggle="pill" href="#array_diff">array_diff()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-warning" id="pills-contact-tab" data-toggle="pill" href="#array_diff_assoc">array_diff_assoc()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-info text-white" id="pills-contact-tab" data-toggle="pill" href="#array_diff_key">array_diff_key()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-danger text-white" id="pills-contact-tab" data-toggle="pill" href="#array_intersect">array_intersect()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-dark text-white" id="pills-contact-tab" data-toggle="pill" href="#array_intersect_assoc">array_intersect_assoc()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-primary text-white" id="pills-contact-tab" data-toggle="pill" href="#array_intersect_key">array_intersect_key()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#array_key_exists">array_key_exists()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-dark" id="pills-contact-tab" data-toggle="pill" href="#array_keys">array_keys()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#array_map">array_map()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-warning text-white" id="pills-contact-tab" data-toggle="pill" href="#array_multisort">array_multisort()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-info text-white" id="pills-contact-tab" data-toggle="pill" href="#array_pad">array_pad()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-danger" id="pills-contact-tab" data-toggle="pill" href="#array_pop">array_pop()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#array_push">array_push()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-warning text-white" id="pills-contact-tab" data-toggle="pill" href="#array_product">array_product()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-info text-white" id="pills-contact-tab" data-toggle="pill" href="#array_replace">array_replace()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-danger" id="pills-contact-tab" data-toggle="pill" href="#array_search">array_search()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-secondary text-white" id="pills-contact-tab" data-toggle="pill" href="#array_shift">array_shift()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#array_sum">array_sum()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-dark text-white" id="pills-contact-tab" data-toggle="pill" href="#array_slice">array_slice()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link text-white bg-info" id="pills-contact-tab" data-toggle="pill" href="#array_unique">array_unique()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#array_unshift">array_unshift()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-dark text-white" id="pills-contact-tab" data-toggle="pill" href="#array_values">array_values()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#array_walk">array_walk()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-warning text-white" id="pills-contact-tab" data-toggle="pill" href="#contact">array_combine()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-info text-white" id="pills-contact-tab" data-toggle="pill" href="#contact">array_combine()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-danger text-white" id="pills-contact-tab" data-toggle="pill" href="#contact">array_combine()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#contact">array_combine()</a>
    </li>
    <li class="nav-item m-1">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#contact">array_combine()</a>
    </li>
    <li class="nav-item m-2">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">array_combine()</a>
    </li>
    <li class="nav-item m-2">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">array_combine()</a>
    </li>
    <li class="nav-item m-2">
        <a class="nav-link bg-success text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">array_combine()</a>
    </li>
    <li class="nav-item m-2">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact">array_combine()</a>
    </li>

</ul>
<div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <img src="img/string/ceil.png" class="img-fluid">
        <img src="img/string/ceil2.png" class="img-fluid">
        <img src="img/string/ceil3.png" class="img-fluid">
        <img src="img/string/ceil4.png" class="img-fluid">
        <img src="img/string/ceil5.png" class="img-fluid">
    </div>
    <div class="tab-pane fade" id="pills-profile">
        <img src="img/string/count.png" class="img-fluid" alt="">
        <img src="img/string/count2.png" class="img-fluid" alt="">
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <img src="img/array/array_combine.png" alt="">
        <img src="img/array/array_combine2.png" alt="">
    </div>
    <div class="tab-pane fade" id="array_merge">
        <img src="img/array/array_merge.png">
        <img src="img/array/array_merge2.png">
    </div>
    <div class="tab-pane fade" id="array_count_values">
        <img src="img/array/array_count_values.png">
        <img src="img/array/array_count_values2.png">
    </div>
    <div class="tab-pane fade" id="array_diff">
        <img src="img/array/array_diff.png">
        <img src="img/array/array_diff2.png">
        <img src="img/array/array_diff3.png">
    </div>
    <div class="tab-pane fade" id="array_diff_assoc">
        <img src="img/array/array_diff_assoc.png">
        <img src="img/array/array_diff_assoc2.png">
        <img src="img/array/array_diff_assoc3.png">
        <img src="img/array/array_diff_assoc4.png">
    </div>
    <div class="tab-pane fade" id="array_diff_key">
        <img src="img/array/array_diff_key.png">
        <img src="img/array/array_diff_key2.png">
    </div>
    <div class="tab-pane fade" id="array_intersect">
        <img src="img/array/array_intersect.png">
        <img src="img/array/array_intersect2.png">
        <img src="img/array/array_intersect3.png">
    </div>
    <div class="tab-pane fade" id="array_intersect_assoc">
        <a href="https://www.tutorialspoint.com/array-intersect-assoc-function-in-php">later</a>
    </div>
    <div class="tab-pane fade" id="array_intersect_key">
        <img src="img/array/array_intersect_key.png">
        <img src="img/array/array_intersect_key2.png">
    </div>
    <div class="tab-pane fade" id="array_key_exists">
        <img src="img/array/array_key_exists.png">
        <img src="img/array/array_key_exists2.png">
    </div>
    <div class="tab-pane fade" id="array_keys">
        <img src="img/array/array_keys.png">
    </div>
    <div class="tab-pane fade" id="array_map">
        <img src="img/array/array_map.png">
        <img src="img/array/array_map2.png">
        <img src="img/array/array_map3.png">
        <img src="img/array/array_map4.png">
        <img src="img/array/array_map5.png">
    </div>
    <div class="tab-pane fade" id="array_multisort">
        <img src="img/array/array_multisort.png">
        <img class="img-fluid" src="img/array/array_multisort2.png">
    </div>
    <div class="tab-pane fade" id="array_pad">
        <img class="img-fluid" src="img/array/array_pad.png">
        <img class="img-fluid" src="img/array/array_pad2.png">
    </div>
    <div class="tab-pane fade" id="array_pop">
        <img class="img-fluid" src="img/array/array_pop.png">
        <img class="img-fluid" src="img/array/array_pop2.png">
    </div>
    <div class="tab-pane fade" id="array_push">
        <img class="img-fluid" src="img/array/array_push.png">
        <img class="img-fluid" src="img/array/array_push2.png">
    </div>
    <div class="tab-pane fade" id="array_product">
        <img class="img-fluid" src="img/array/array_product.png">
        <img class="img-fluid" src="img/array/array_product2.png">
    </div>
    <div class="tab-pane fade" id="array_replace">
        <img class="img-fluid" src="img/array/array_replace.png">
        <img class="img-fluid" src="img/array/array_replace2.png">
        <img class="img-fluid" src="img/array/array_replace3.png">
        <img class="img-fluid" src="img/array/array_replace4.png">
        <img class="img-fluid" src="img/array/array_replace5.png">
        <img class="img-fluid" src="img/array/array_replace6.png">
        <img class="img-fluid" src="img/array/array_replace7.png">
    </div>
    <div class="tab-pane fade" id="array_reverse">
        <img class="img-fluid" src="img/array/array_reverse.png">
        <img class="img-fluid" src="img/array/array_reverse2.png">
    </div>
    <div class="tab-pane fade" id="array_search">
        <img class="img-fluid" src="img/array/array_search.png">
        <img class="img-fluid" src="img/array/array_search2.png">
        <img class="img-fluid" src="img/array/array_search3.png">
        <img class="img-fluid" src="img/array/array_search4.png">
    </div>
    <div class="tab-pane fade" id="array_shift">
        <img class="img-fluid" src="img/array/array_shift.png">
        <img class="img-fluid" src="img/array/array_shift2.png">
    </div>
    <div class="tab-pane fade" id="array_slice">
        <img class="img-fluid" src="img/array/array_slice.png">
        <img class="img-fluid" src="img/array/array_slice2.png">
        <img class="img-fluid" src="img/array/array_slice3.png">
        <img class="img-fluid" src="img/array/array_slice4.png">
    </div>
    <div class="tab-pane fade" id="array_sum">
        <img class="img-fluid" src="img/array/array_sum.png">
        <img class="img-fluid" src="img/array/array_sum2.png">
        <img class="img-fluid" src="img/array/array_sum3.png">
    </div>
    <div class="tab-pane fade" id="array_unique">
        <img class="img-fluid" src="img/array/array_unique.png">
        <img class="img-fluid" src="img/array/array_unique2.png">
    </div>
    <div class="tab-pane fade" id="array_unshift">
        <img class="img-fluid" src="img/array/array_unshift.png">
        <img class="img-fluid" src="img/array/array_unshift2.png">
        <img class="img-fluid" src="img/array/array_unshift3.png">
        <img class="img-fluid" src="img/array/array_unshift4.png">
    </div>
    <div class="tab-pane fade" id="array_values">
        <img class="img-fluid" src="img/array/array_values.png">
        <img class="img-fluid" src="img/array/array_values2.png">
        <img class="img-fluid" src="img/array/array_values3.png">
    </div>
    <div class="tab-pane fade" id="array_walk">
        <img class="img-fluid" src="img/array/array_walk.png">
        <img class="img-fluid" src="img/array/array_walk2.png">
        <img class="img-fluid" src="img/array/array_walk3.png">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>
    <div class="tab-pane fade" id="ontact">
        <img src="img/array">
    </div>

</div>




<?php include_once 'inc/footer.php' ?>
