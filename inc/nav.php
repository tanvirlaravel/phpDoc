<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-info mb-2 py-3">

   <div class="container-fluid">

    <a class="navbar-brand text-success" href="<?= $path ?>">Php Doc's</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link" href="<?= $path ?>/Data/data.php"> Data</a>                
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="<?= $path ?>/Data_Types/data_types.php">Data Types</a>                
            </li>          



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Functions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?= $path ?>/functions/user-defined.php">User-defined functions</a>
                    <a class="dropdown-item" href="<?= $path ?>/functions/arguments.php">Function arguments</a>
                    <a class="dropdown-item" href="<?= $path ?>/functions/returning-values.php">Returning values</a>
                    <a class="dropdown-item" href="<?= $path ?>/functions/variable-functions.php">Variable functions </a>
                    <a class="dropdown-item" href="<?= $path ?>/functions/internal.php">Internal (built-in) functions</a>
                    <a class="dropdown-item" href="<?= $path ?>/functions/anonymous.php">Anonymous functions</a>
                </div>
            </li>
        

        </ul>
 
    </div>

    </div>
</nav>


<div class="container">
    <div class="row">

        <div class="col-md-12">
