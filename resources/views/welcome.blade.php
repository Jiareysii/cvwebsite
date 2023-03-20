
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo asset('app.css')?>" type="text/css">
    

<body>
  <!-- INIZIO NAVBAR -->

  <nav id="navbar">
    <div class="nav-logo">
      <h2>Mitsuki's</h2>
    </div>
    <ul>
      <li><a href="#welcome-section">About</a></li>
      <li><a href="#projects">Works</a></li>
      <li><a href="#contacts">Contact</a></li>
    </ul>
  </nav>

  <!-- INIZIO HERO -->

  <main>
    <section id="welcome-section">
      <div class="hero-left">
        <h1>Hi! I'm Grace</h1>
        <p>Self-taught Illustration Artist</p>
        <p>- I'm learning Digital Media -</p>
        <button class="btn">Contact Me</button>
      </div>
      <div class="hero-right">
        <div class="square1"></div>
        <div class="square2"></div>
      </div>
    </section>

    <!-- INIZIO PROJECTS -->

    <section id="projects">
      <h2 class="title">These are some of my Illustrations</h2>
      <div class="grid-container">
        <div class="project-tile">
          <a href="https://www.instagram.com/p/CPLO78pJfS4/?utm_source=ig_web_copy_link" target="_blank"><img src="https://img.freepik.com/free-vector/hand-painter-colors-watercolor-stain-texture-background_1017-23842.jpg?w=900&t=st=1679328143~exp=1679328743~hmac=84b2e99841c154e7b04ccecdf5364e0ffd25912b797422430d9f3d7c237ab02b" alt="form-image">
            <p>Watercolor</p>
          </a>
        </div>
        <div class="project-tile">
          <a href="https://www.instagram.com/p/CSZJCwOpnZr/?utm_source=ig_web_copy_link" target="_blank"><img src="https://cf.shopee.co.id/file/e6ab049cfbc1c1de33124a2adc175ee5" alt="form-image">
            <p>Gouache</p>
          </a>
        </div>
        <div class="project-tile">
          <a href="https://www.instagram.com/p/CR0sj3upZ2S/?utm_source=ig_web_copy_link" target="_blank"><img src="https://s32625.pcdn.co/wp-content/uploads/2021/03/6720-SF-RedOxide05-scaled.jpg.optimal.jpg" alt="form-image">
            <p>Acrylic</p>
          </a>
        </div>
        <div class="project-tile">
          <a href="https://www.instagram.com/p/CoGpQ8FpNPY/?utm_source=ig_web_copy_link" target="_blank"><img src="https://www.okuha.com/wp-content/uploads/2023/01/feature-digital-art-types.jpg" alt="form-image">
            <p>Digital Paint</p>
          </a>
        </div>
      </div>
    </section>

    <section id="contacts">
      <h2 class="title">Let's work together!</h2>
      <form class="form-container" action="fakeaddress.com" method="post">
        <label for="name">
          <input type="text" name="name" id="name" placeholder="Name" required>
        </label>
        <label for="email">
          <input type="email" name="email" id="email" placeholder="Email" required>
        </label>
        <textarea name="message" id="message" rows="5" placeholder="Your message"></textarea>
        <label for="coffee">
          <input type="checkbox" id="coffee" name="checkbox"> Bring a coffee!
        </label>
        <button type="submit" class="btn" value="Send">Send</button>
        <div class="icon-wrapper">
          <a id="profile-link" target="_blank" href="https://github.com/Andre-DM"><i class="fa-brands fa-2x fa-github"></i></a>
          <a id="profile-link" target="_blank" href="https://codepen.io/Andre-DM"><i class="fa-brands fa-2x fa-codepen"></i></a>
          <a id="profile-link" target="_blank" href="Shivian#2460"><i class="fa-brands fa-2x fa-discord"></i></a>
        </div>
      </form>
    </section>

  </main>
</body>
</html>
