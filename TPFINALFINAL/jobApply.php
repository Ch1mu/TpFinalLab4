<?php
if($_POST)
{
if($_SESSION["job"] == 0){
    $_SESSION["job"] = $jobID;
}
else{
    echo '<script language="javascript">alert("Ya te has postulado a un trabajo anteriormente");';
    echo "window.location = 'Views/Jobs.php'; </script>";
}
}

?>