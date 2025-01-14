<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}
echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- CSS only -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <!-- JavaScript Bundle with Popper -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3'
        crossorigin='anonymous'></script>
    <title>Document</title>
</head>

<body>
    <nav class='navbar navbar-expand-lg bg-dark navbar-dark'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='../genral/index.php'>SMART</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'
                aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='../genral/contact.php'>Contact Us</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../genral/about.php'>About</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='../genral/notice.php'>Notice</a>
                    </li>";
                    if(!$loggedin){
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='../genral/join.php'>Join</a>
                    </li>";
                    }   
                    if($loggedin){
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='../genral/logout.php'>Logout</a>
                    </li>";
                }
                echo "</ul>
            </div>
        </div>
    </nav>
</body>

</html>";

?>