<?php
require "../config/db.php";
require __DIR__ . "/vendor/autoload.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

//database query


$id = $_GET['id'];

//display list of projects 
$pro = $con->query("SELECT * FROM project WHERE id='$id'");
$pro->execute();

$projects = $pro->fetch(PDO::FETCH_OBJ);


// instantiate and use the dompdf class
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'Portrait');

// Render the HTML as PDF
$html = file_get_contents("slip.html");
$html = str_replace(["{{name}}", "{{email}}", "{{phone}}", "{{location}}",
                    "{{site_name}}", "{{site_url}}", "{{expires}}", "{{created}}",
                    "{{site_pass}}", "{{site_username}}", "{{site_email}}", "{{status}}"],
                    [$projects->name, $projects->email, $projects->Phone, $projects->location, $projects->site_name, $projects->site_url, $projects->expires,
                    $projects->created, $projects->site_pass, $projects->site_username, $projects->site_email, $projects->status], $html);

$dompdf->loadHtml($html);
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("SlipP", ["Attachment" => 0]);
?>