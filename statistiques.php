<?php 
session_start();
if(isset($_SESSION['user']))
{

 ?>
<!DOCTYPE html>
<html>

<head>
<?php include_once("/template/head.php") ?>
</head>

<body>

<?php include_once("/template/header.php") ?>



<div class="control-panel-container">

<?php include_once("/template/menu.php") ?>



</div>

<div class="form-data-container">

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Statistiques</h3>
<?php 
include_once("/php-wrapper-master/src/fusioncharts.php"); 
   $hostdb = "localhost";  // MySQl host
   $userdb = "root";  // MySQL username
   $passdb = "bordeaux17";  // MySQL password
   $namedb = "centreformation";  // MySQL database name

   // Establish a connection to the database
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

   /*Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect */
   if ($dbhandle->connect_error) {
    exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
   

        // Form the SQL query that returns the top 10 most populous countries
        $strQuery = "SELECT f.nom_for,count(*) FROM etudiant e,formation f where e.idF=f.nom_for GROUP BY f.nom_for order by COUNT(*) desc

";

        // Execute the query, or else return the error message.
        $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

        // If the query returns a valid response, prepare the JSON string
        if ($result) {
            // The `$arrData` array holds the chart attributes and data
            $arrData = array(
                "chart" => array(
                  "caption" => "Top Best Formation",
                  "showValues" => "0",
                  "theme" => "zune"
                )
            );

            $arrData["data"] = array();

    // Push the data into the array
            while($row = mysqli_fetch_array($result)) {
            array_push($arrData["data"], array(
                "label" => $row["nom_for"],
                "value" => $row["count(*)"]
                )
            );
            }

            /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */

            $jsonEncodedData = json_encode($arrData);

    /*Create an object for the column chart using the FusionCharts PHP class constructor. Syntax for the constructor is ` FusionCharts("type of chart", "unique chart id", width of the chart, height of the chart, "div id to render the chart", "data format", "data source")`. Because we are using JSON data to render the chart, the data format will be `json`. The variable `$jsonEncodeData` holds all the JSON data for the chart, and will be passed as the value for the data source parameter of the constructor.*/

            $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "json", $jsonEncodedData);

            // Render the chart
            $columnChart->render();

            // Close the database connection
            $dbhandle->close();
        }

    ?>


        
  <div id="chart-1"><!-- Fusion Charts will render here--></div>

    
          


</div>

<?php include_once("/template/footer.php") ?>


</body>

</html>
<?php }
else{
    header("Location:login.php");
}

 ?>