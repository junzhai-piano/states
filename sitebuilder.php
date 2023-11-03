
<form action="sitebuilder.php" method="POST">
    <button type="submit" name="makesite">Generate States Website</button>
</form>
<a href="index.php">Home</a>
<?php

    if(isset($_POST['makesite'])){
        echo 'Site completed';
    }
    $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
            

    foreach ($states as $state) {
    //build all pages
    $stateunderscore = preg_replace('/\s+/', '_', $state);
    $stateunderscorelowercase = strtolower($stateunderscore);

    $myfile = fopen("pages/".$stateunderscorelowercase.".html", "w") or die("Unable to open file!");

    $txt = <<<EOT
    <!DOCTYPE html>
    <html>
    <head>
        <title>$state</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body style="margin-left: 40px;"> 
        <h1>$state</h1>
        <img src="https://jaxcode.com/stateflags/$stateunderscore.svg.png" class="img-responsive"><br><br>
        <iframe src="https://en.wikipedia.org/wiki/$stateunderscore" title="$state" width="900" height="600" ></iframe>
    </body>
    </html>
    EOT;
    fwrite($myfile, $txt);
    fclose($myfile);
    }
?>
