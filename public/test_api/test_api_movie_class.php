<?php
require_once("initMovie.php");
require_once("parseData.php");
	class Movie
	{
		public $id;
        public $title;
        public $image;
        public $description;



		public static function getAllMovies() {
			global $movie;	// we will improve this later
			$request = $movie->prepare("select * from movies");
			if (!$request) {
				var_dump(debug_backtrace());
				die('Error while doing request ' . $sqlRequest);
			}
			// $request->setFetchMode(movie::FETCH_CLASS,'Movie');
			$request->setFetchMode(movie::FETCH_CLASS,get_called_class());
			$request->execute();
			$allMovies = $request->fetchAll();

			return $allMovies;
		}

		// instance-side method to render a Movie object to HTML
		public function toHtml() {
			echo "<tr>"
				. "<td>". $this->id . "</td>"
				. "<td>". $this->title . "</td>"
				. "<td>" . $this->image . "</td>"
                . "<td>". $this->description . "</td></tr>";
		}

		// class-side method to render an array of Movies as an HTML table
		public static function showMoviesAsTable($Movies) {
			echo '<table><thead>
					<tr><th>Id</th><th>Title</th><th>Image</th><th>description</th></tr></thead><tbody>';
			foreach($Movies as $u) {
				$u->toHtml();
				// print_r($u);
			}
			echo '</tbody></table>';
		}

		public static function showAllMoviesAsTable() {
			static::showMoviesAsTable(static::getAllMovies());
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style>
		table {
			border-top: 1px solid black;
			border-bottom: 1px solid black;
		}

		td {
			text-align: center;
			padding-left: 2em;
			padding-right: 2em;
		}
		</style>
	</head>
	<body>
		<h1>Movies</h1>
		<?php
			Movie::showAllMoviesAsTable();
		?>
	</body>
</html>

