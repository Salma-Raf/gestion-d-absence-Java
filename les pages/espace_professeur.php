<?php session_start();
 include "securiter.php";?>
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
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
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <br />
        <h2 style="display: inline">gestion des absences</h2>
        <a href="deconnexion.php"> <button type="button" class="btn btn-info" style="float: right">
                logout
            </button></a>
        <br /><br />

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">G-ABS</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">planning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">statistique</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>
        <br>
        <h2> planning </h2>
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
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
                    <th scope="row">8-10</th>
                    <td>java/GI1</td>
                    <td>java/GI2</td>
                    <td>unix/IID</td>
                    <td>unix/IID</td>
                    <td>web/GP2</td>
                    <td>web</td>
                </tr>
                <tr>
                    <th scope="row">10-12</th>
                    <td>anlyse de donne/</td>
                    <td>anlyse de donne/</td>
                    <td>math pour ingenieur/...</td>
                    <td>math pour ingenieur/...</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">14-16</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">16-18</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>


            </tbody>
        </table>
        <br><br><br>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div style="display:inline">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>importe</option>
                        <option value="1"> IMPORTER EXCEL GI1</option>
                        <option value="2">IMPORTER EXCEL GI2</option>
                        <option value="3">UNIX/IID</option>
                    </select>
                </div>
                <button type="button" class="btn btn-info">valider</button>
            </div>
        </div>



</body>

</html>