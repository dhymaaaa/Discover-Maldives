<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maldivian Culture</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body class="home">
  <div id="main_header" class="main_img">
    <?php include('layout/nav.php'); ?>
    <section>
      <h1>Explore Maldives: A Cultural Paradise</h1>
    </section>
  </div>
  <main>
    <section>
      <h2>In the Spotlight</h2>
      <div class="spotlight">
        <a href="./nakaiy.php">
          <div class="card">
            <img class="spotlight_image" src="images/monsoon.jpg" alt="">
            <div class="container">
              <h4><b>The Allurement of the Southwest Monsoon (Hulhangu)</b></h4>
              <p>Discover the unique weather patterns and the vibrant marine life during the monsoon season in the Maldives.</p>
            </div>
          </div>
        </a>
        <a href="./food_and_cuisine.php">
          <div class="card">
            <img class="spotlight_image" src="images/food/Garudiya.jpg" alt="">
            <div class="container">
              <h4><b>A Taste of Garudhiya</b></h4>
              <p>Learn about Garudhiya, a traditional Maldivian fish soup, its ingredients, and preparation. Try out the recipe yourself!</p>
            </div>
          </div>
        </a>
        <a href="./craftsmanship.php">
          <div class="card">
            <img class="spotlight_image" src="images/crafts/boat.jpg" alt="">
            <div class="container">
              <h4><b>The Art of Dhoni Building</b></h4>
              <p>The construction of a Dhoni, a traditional Maldivian boat, showcases centuries-old craftsmanship using coconut timber, symbolizing the islanders' profound connection to the sea.</p>
            </div>
          </div>
        </a>
        <a href="./music_and_dance.php">
          <div class="card">
            <img class="spotlight_image" src="images/drums.jpg" alt="">
            <div class="container">
              <h4><b>The Grace of Bodu Beru</b></h4>
              <p>Bodu Beru, a traditional Maldivian dance and drumming performance, captivates with its rhythmic beats and graceful movements, embodying the cultural spirit of the islands.</p>
            </div>
          </div>
        </a>
      </div>
    </section>
    <section>
      <h2>Feedback Form</h2>
      <form id="feedback" action="store.php" method="POST">
        <div>
          <label for="name">Name</label>
          <div class="two_line">
            <input type="text" name="fname" placeholder="First" required />
            <input type="text" name="lname" placeholder="Last" required />
          </div>
        </div>
        <div>
          <label>Please provide the rating for the quality of the website.</label>
          <input type="radio" id="excellent" name="rating" value="excellent" required />
          <label for="excellent">Excellent</label>
          <input type="radio" id="very_good" name="rating" value="very_good" required />
          <label for="very_good">Very Good</label>
          <input type="radio" id="good" name="rating" value="good" required />
          <label for="good">Good</label>
          <input type="radio" id="average" name="rating" value="average" required />
          <label for="average">Average</label>
          <input type="radio" id="poor" name="rating" value="poor" required />
          <label for="poor">Poor</label>
        </div>
        <div>
          <label for="concern">Do you have any suggestions on how we can further improve our services?</label>
          <textarea value="concern" name="concern" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </section>
  </main>
  <?php include('layout/footer.php'); ?>
  <script src="script.js"></script>
</body>

</html>