<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>Darwin Art Company</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light warning-color lighten-5">
        <div class = "container">
               <span class = "text-uppercase fw-lighter ms-2">Darwin Art Company</span>
            </a>
<!-- need to put logo -->


            <div class = "order-lg-2 nav-btns">
                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-shopping-cart"></i>
                </button>

                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-heart"></i>
                </button>

                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-search"></i>
                </button>

            </div>
           
            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "/">Home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "/sales">Sales</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "/login">Login</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "/aboutUs">About Us</a>
                    </li>
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark" href = "/themes">Themes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->




    



<div id='content'>
<?php
  if(!empty($flash)){
    echo "<p class='flash'>{$flash}</p>";
  }
  if(!empty($error)){
    echo "<p class='flash'>{$error}</p>";	
  }
  require $content;
?>
</div> <!-- end content -->

</div> <!-- end main -->

</body>
</html>