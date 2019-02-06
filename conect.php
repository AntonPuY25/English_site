
<link href ="Style/style.css" rel="stylesheet" type ="text/css"/>
    <script type="text/javascript" src="Style/jquery-3.2.1.min.js"></script>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
                    <script src ="Style/main.js" defer></script>

<?php
$de_host='localhost';
$de_user='root';
$de_puss="";
$de_name='english';
$de_port='3307';
$de_con=mysqli_connect($de_host,
    $de_user,
    $de_puss,
    $de_name,
    $de_port);
if(!$de_con){
    exit('error');
}

function mysql_function($query)
{
    global $de_con;
    $adr = mysqli_query($de_con, $query);
    if (!$adr) {

        exit('error query');
    }
    return mysqli_fetch_array($adr);
}
    ?>