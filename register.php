<?php
if(isset($_GET['afiliator'])) {
    $afi = $_GET['afiliator'];
}else{
    $afi = 'No_Affiliator';
}
?>
<html>
    <body>
        <h1>The affiliator is <?= $afi; ?></h1>
    </body>
</html>