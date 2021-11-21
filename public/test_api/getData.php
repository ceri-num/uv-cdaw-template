<?php

$api_url = 'https://imdb-api.com/en/API/SearchMovie/k_z3f63609/inception 2010';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);


print $json_data;
// All movie data exists in 'data' object
$movie_data = $response_data->results;




echo "-----------------------------------";


foreach ($movie_data as $movie) {
echo "<strong>id</strong> :" . $movie->id;

echo "          <strong>titre</strong> :".$movie->title;  
   echo "<br>";
}

?>







