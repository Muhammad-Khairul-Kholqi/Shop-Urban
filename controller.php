<?php 
$server = mysqli_connect("localhost", "root", "", "db_onlineshop");

function query($query)
{
    global $server;
    $result = mysqli_query($server, $query);
    $all_data = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $all_data[] = $data;
    }
    return $all_data;
}
if($server){
    echo "";
}else{
    echo "TIDAK BERHASIL".'<br>';
}


?>

