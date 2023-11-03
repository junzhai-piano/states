<!DOCTYPE html>
<html lang="en">

<head>
    <title>States</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      </button>
      <a href="index.php" class="navbar-brand" href="#">States</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="sitebuilder.php">Build Sites</a></li>
      </ul>

    </div>
  </div>
</nav>

<div class="container"><div class="row"><div class="col-mid-12">

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered"><tr>
            <?php

            $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

            $counter=1;
            foreach ($states as $state) {
                $stateunderscore = preg_replace('/\s+/', '_', $state);
                $stateunderscorelowercase = strtolower($stateunderscore);

                echo '<td class="text-center"><img src="https://jaxcode.com/stateflags/' . $stateunderscore . '.svg.png" class="img-responsive"><br><a href="pages/' . $stateunderscorelowercase . '.html">' . $state . '</a></td>';

                if($counter==5){
                    echo '<tr></tr>';
                    $counter=0;
                }
                $counter++;
            }
            ?>
            </tr>
        </table>
    </div>
        </div></div></div>
</body>

</html>