<?php

$api_url = 'https://imdb-api.com/en/API/SearchMovie/k_z3f63609/inception 2010';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All movie data exists in 'data' object
$movie_data = $response_data->results;

// Cut long data into small & select only first 10 records
$movie_data = array_slice($movie_data, 0, 9);

// Print data if need to debug
//print_r($movie_data);

// Traverse array and display movie data
foreach ($movie_data as $movie) {
	echo "id: ".$movie->id;
	echo "<br />";
	echo "resultType: ".$movie->resultType;
	echo "<br /> <br />";
    echo "image: ".$movie->image;
	echo "<br /> <br />";
    echo "title: ".$movie->title;
	echo "<br /> <br />";
    echo "description: ".$movie->description;
	echo "<br /> <br />";
}
// instance-side method to render a User object to HTML
 function toHtml($movie) {
    echo "<tr>"
        . "<td>". $this->title . "</td>"
        . "<td>". $this->description . "</td>"
         ."</tr>";
}

// class-side method to render an array of users as an HTML table
 function showUsersAsTable($movie_data) {
    echo '<table><thead>
            <tr><th>Id</th><th>Nom</th><th>Email</th></tr></thead><tbody>';
    foreach($movie_data as $u) {
        $u->toHtml();
        // print_r($u);
    }
    echo '</tbody></table>';
}

?>