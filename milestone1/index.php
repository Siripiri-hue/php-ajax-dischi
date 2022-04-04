<?php

// include "./vars/vars.php";
include __DIR__ . '/partials/vars.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Discs collection</title>
</head>
<body>
    <header>
        <figure>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 167.5 167.5" class="spotify-logo"><title>Spotify</title><path d="M83.7 0C37.5 0 0 37.5 0 83.7c0 46.3 37.5 83.7 83.7 83.7 46.3 0 83.7-37.5 83.7-83.7S130 0 83.7 0zM122 120.8c-1.4 2.5-4.6 3.2-7 1.7-19.8-12-44.5-14.7-73.7-8-2.8.5-5.6-1.2-6.2-4-.2-2.8 1.5-5.6 4-6.2 32-7.3 59.6-4.2 81.6 9.3 2.6 1.5 3.4 4.7 1.8 7.2zM132.5 98c-2 3-6 4-9 2.2-22.5-14-56.8-18-83.4-9.8-3.2 1-7-1-8-4.3s1-7 4.6-8c30.4-9 68.2-4.5 94 11 3 2 4 6 2 9zm1-23.8c-27-16-71.6-17.5-97.4-9.7-4 1.3-8.2-1-9.5-5.2-1.3-4 1-8.5 5.2-9.8 29.6-9 78.8-7.2 109.8 11.2 3.7 2.2 5 7 2.7 10.7-2 3.8-7 5-10.6 2.8z"/></svg>
        </figure>

        <div id="genre-select">
            <label for="cars">Choose a genre: </label>
            <select name="genres" id="genres"">
                <option value="">Tutti i generi</option>
                <option value="rock">Rock</option>
                <option value="jazz">Jazz</option>
                <option value="pop">Pop</option>
                <option value="metal">Metal</option>
            </select>
        </div>
    </header>

    <main>
        <section id="grid">
          <?php
            foreach($discs as $disc):
          ?>
          <div class="card">
            <figure class="poster">
              <img src="<?php echo $disc['poster'] ?>">
            </figure>

            <div class="info">
              <p class="title"><?php echo $disc['title'] ?></p>
              <p class="author"><?php echo $disc['author'] ?></p>
              <p class="year"><?php echo $disc['year'] ?></p>
              </div>
            </div>
            <?php
              endforeach;
            ?>
        </section>
    </main>
</body>
</html>