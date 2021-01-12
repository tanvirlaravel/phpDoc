<?php require_once __DIR__ . "/../inc/header.php"; ?>

<div class="row">

<div class="col">

	<h3 class="text-center display-4">Object Oriented Programming in PHP</h3>
    <hr>

    <p>We can imagine our universe made of different objects like sun, earth, moon etc. Similarly we can imagine our car made of different objects like wheel, steering, gear etc.</p>
    <p>Same way there is object oriented programming concepts which assume everything as an object and <code>implement a software using different objects.</code></p>
   

    <hr>
    <h3>Object Oriented Concepts</h3>

    <ol>
        <li><strong>Class </strong> − This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.</li>
        <li><strong>Object </strong>− An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.

</li>
        <li><strong>Member Variable</strong>− These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.</li>
        <li><strong>Member function</strong> − These are the function defined inside a class and are used to access object data.</li>
        <li><strong>Polymorphism </strong>− This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it take different number of arguments and can do different task.</li>
        <li><strong>Overloading </strong>− a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.</li>
        <li><strong>Data Abstraction</strong>− Any representation of data in which the implementation details are hidden (abstracted).</li>
        <li><strong>Encapsulation </strong>− refers to a concept where we encapsulate all the data and member functions together to form an object.</li>
        <li><strong>Constructor </strong>− refers to a special type of function which will be called automatically whenever there is an object formation from a class.</li>
        <li><strong>Destructor </strong> − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.</li>
    </ol>   

    <p>Variable may also have an initial assignment to a constant value.</p>
	<p>Function definitions look much like standalone PHP functions but are local to the class and will be used to set and access object data.</p>

    <hr>
    <pre class="bg-dark py-2 text-warning">
    $physics = new Books;
    $maths = new Books;
    $chemistry = new Books;
    </pre>
    <p>Here we have created three objects and these objects are independent of each other and they will have their existence separately</p>

    <hr>
    <h3>Calling Member Functions</h3>
    <p>After creating your objects, you will be able to call member functions related to that object. One member function will be able to process member variable of related object only.</p>

    <hr>
    <h3>Destructor</h3>
    <p>You can release all the resources with-in a destructor.</p>

    <hr>
    <h3>Interfaces</h3>
    <p>Interfaces are defined to provide a common function names to the implementers. Different implementors can implement those interfaces according to their requirements. You can say, interfaces are skeletons which are implemented by developers.</p>

    <hr>
    <h3>Abstract Classes</h3>
    <p>An abstract class is one that cannot be instantiated, only inherited. </p>

</div>





</div>

<?php require_once __DIR__ . "/../inc/footer.php"; ?>