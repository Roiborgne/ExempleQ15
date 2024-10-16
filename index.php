<?php

if(isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";


switch ($case) {
    case "defaut":
        include("src/Vue/Vue_AccueilCaseA.php");
        break;
}
