<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
      <meta
      charset="UTF-8"
    />
    <title>Responsive Registration Form | CodingLab</title>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <a class="nav-link active" aria-current="page" href="espace_admin.php"
                  >page principale</a
                >
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
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
      
      <div class="row"> 
        <div style="width:50%" class="col-md-6" > 
            <h2>classe:</h2>
            <select class="form-select" aria-label="Default select example" >
                <option selected="">---</option>
                <option value="1">gi1</option>
                <option value="2">gi2</option>
                <option value="3">gi3</option>
              </select>
          </div>
         
          <div style="width:50%" class="col-md-6"> 
            <h2>semaine:</h2>
            <input   class="form-select" type="week" name="week" id="camp-week"
                   min="2022-W18" max="2023-W26" required>
          </div> 
         </div>
         <?php  $module='<select class="form-select" aria-label="Default select example" >
                <option selected="">---</option>
                <option value="1">gi1</option>
                <option value="2">gi2</option>
                <option value="3">gi3</option>
              </select> ';?>
  
         <br><br>
         <table class="table">
            <thead>
              <tr>
                
                <th scope="col">seance/jour</th>
                <th scope="col">lundi</th>
                <th scope="col">mardi</th>
                <th scope="col">mercredi</th>
                <th scope="col">jeudi</th>
                <th scope="col">vendredi</th>
                <th scope="col">samedi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
               <th> 8-10</th>
               <?php
                $i=0;
               while($i<6){
                echo "<td>";
                echo $module;
                echo $module;
                echo "</td>";
                $i++;
               }?>
              </tr>
              <tr>
              <th> 10-12</th>
               <?php
                $i=0;
               while($i<6){
                echo "<td>";
                echo $module;
                 echo $module;
                echo "</td>";
                $i++;
               }?>
              </tr>
              <tr>
              <th>14-16</th>
               <?php
                $i=0;
               while($i<6){
                echo "<td>";
                echo $module;
                echo $module;
                echo "</td>";
                $i++;
               }?>
              </tr>
               <tr>
               <th>16-18</th>
               <?php
                $i=0;
               while($i<6){
                echo "<td>";
                echo $module;
                echo $module;
                echo "</td>";
                $i++;
               }?>

              </tr>

            </tbody>
          </table>
      