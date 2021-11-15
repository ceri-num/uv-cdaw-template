<?php
$requestsDone = 0;
$maxRequests = 2;

while ($requestsDone < $maxRequests) {
        $requestsDone++;

    echo "Request number: ".$requestsDone."<br>";

    $response = file_get_contents("https://api.themoviedb.org/3/movie/".mt_rand(500,996)."?api_key=522xxxxxxxxxxxxxxxxxxxxx");
    $response = json_decode($response);
    print_r ($response);
    echo "<br><br><br>";
}
?>