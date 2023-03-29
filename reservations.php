<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reservation</title>
</head>
<body>
   <!-- Header -->
   <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>W</span>W <span>A</span>gency</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="./index.html" data-after="Home">Home</a></li>
            <li><a href="./index.html" data-after="Service">Top picks</a></li>
            <li><a href="./index.html" data-after="Projects">Destinations</a></li>
            <li><a href="./index.html" data-after="About">About</a></li>
            <li><a href="#" data-after="Contact">Travel now!</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
<section id="form" data-aos="fade-up">
<link rel="stylesheet" href="stilovi.css">
        <div class="form container">
          <h3 class="form__title">Make your reservation!</h3>
          <div class="form__wrapper">
            <form action="save.php" name="booking" method="POST" netlify>
              <div class="form__group">
                <label for="ime">Name</label>
                <input type="text" id="ime" name="ime" required>
              </div>
              <div class="form__group">
                <label for="prezime">Last Name</label>
                <input type="text" id="prezime" name="prezime" required>
              </div>
              <div class="form__group">
                <label for="telefon">Phone Number</label>
                <input type="text" id="telefon" name="telefon" required>
              </div>
              <div class="form__group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form__group">
                <label for="grad">City</label>
                <input type="text" id="grad" name="grad" required>
              </div>
              <div class="form__group form__group__full">
                <label for="notes">Leave a note (if necessary)</label>
                <textarea name="notes" id="notes" rows="4"></textarea>
              </div>
              <button type="submit" class="btn primary-btn">Make your reservation!</button>
            </form>
          </div>
        </div>
      </section>    
</body>
</html>