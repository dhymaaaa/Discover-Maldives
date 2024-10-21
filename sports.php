<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Sports</title>
</head>

<body>
  <?php include('layout/nav.php'); ?>
  <main>
    <section id="home">
      <h2>Welcome to Maldivian Culture</h2>
      <p>Explore the rich heritage and vibrant traditions of the Maldives.</p>
    </section>
    <section id="history">
      <h2>History</h2>
      <p>
        Learn about the fascinating history of the Maldives, from ancient
        times to the modern day.
      </p>
    </section>
    <section id="food">
      <h2>Food and Cuisine</h2>
      <p>
        Discover the unique flavors and traditional dishes of Maldivian
        cuisine.
      </p>
    </section>
    <section id="arts">
      <h2>Arts and Crafts</h2>
      <p>
        Explore the intricate arts and crafts of the Maldives, including
        lacquer work and mat weaving.
      </p>
    </section>
    <section id="music">
      <h2>Music and Dance</h2>
      <p>
        Experience the traditional music and dance of the Maldives, including
        boduberu and other performances.
      </p>
    </section>
    <section id="festivals">
      <h2>Festivals</h2>
      <p>
        Join in the celebration of Maldivian festivals and cultural events.
      </p>
    </section>
    <section id="feedback">
      <h2>Feedback</h2>
      <form id="feedbackForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </section>
  </main>
  <?php include('layout/footer.php'); ?>
  <script src="script.js"></script>
</body>

</html>