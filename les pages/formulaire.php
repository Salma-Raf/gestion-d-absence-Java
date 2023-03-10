 <!DOCTYPE html>

 <html lang="en" dir="ltr">

 <head>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
         integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
         integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"
         <meta charset="UTF-8" />
     <title>Responsive Registration Form | CodingLab</title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="style.css">
 </head>

 <body>
     <div class="container">
     <br />
     <h2 style="display: inline">gestion des absences</h2>
     <button type="button" class="btn btn-info" style="float: right">
         logout
     </button>
     <br /><br />

     <nav class="navbar navbar-expand-lg bg-light">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">G-ABS</a>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="espace_admin.php">page principale</a>
                     </li>

                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Dropdown
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="formulaire.php">creation compte</a></li>
                             <li>
                                 <a class="dropdown-item" href="#">voir statistique</a>
                             </li>

                             <li>
                                 <a class="dropdown-item" href="planning.php">planning</a>
                             </li>
                         </ul>
                     </li>


                     </form>
             </div>
         </div>
     </nav>
     <br>
     <div class="containerr container">
         <div class="title">Registration</div>
         <div class="content">
             <form action="#">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Full Name</span>
                         <input type="text" placeholder="Enter your name" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Username</span>
                         <input type="text" placeholder="Enter your username" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Email</span>
                         <input type="text" placeholder="Enter your email" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Phone Number</span>
                         <input type="text" placeholder="Enter your number" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Password</span>
                         <input type="text" placeholder="Enter your password" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Confirm Password</span>
                         <input type="text" placeholder="Confirm your password" required>
                     </div>
                 </div>
                 <div class="gender-details">
                     <input type="radio" name="gender" id="dot-1">
                     <input type="radio" name="gender" id="dot-2">
                     <input type="radio" name="gender" id="dot-3">
                     <span class="gender-title">Gender</span>
                     <div class="category">
                         <label for="dot-1">
                             <span class="dot one"></span>
                             <span class="gender">Male</span>
                         </label>
                         <label for="dot-2">
                             <span class="dot two"></span>
                             <span class="gender">Female</span>
                         </label>
                         <label for="dot-3">
                             <span class="dot three"></span>
                             <span class="gender">Prefer not to say</span>
                         </label>
                     </div>
                 </div>
                 <div class="button">
                     <input type="submit" value="Register">
                 </div>
             </form>
         </div>
     </div>
 </body>