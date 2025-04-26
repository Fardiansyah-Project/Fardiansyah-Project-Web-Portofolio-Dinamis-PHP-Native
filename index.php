<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-6" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portofolio</title>
    <link href="src/output.css" rel="stylesheet" />
    <script>
      document.documentElement.classList.toggle(
        'dark',
        localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
      )
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <?php include 'src/connetion/connection.php' ?>
    <?php
      $query = "SELECT * FROM post";
      $result = mysqli_query($connect, $query);
      $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
     ?>
    <!-- Header -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <!-- Logo -->
          <div class="px-4">
            <a href="#home" class="font-bold text-lg text-primary block py-6">Fardiansyah</a>
          </div>
          <!-- Hamburger Menu -->
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-menu transition duration-300 ease-in-out origin-top-left"></span>
              <span class="hamburger-menu transition duration-300 ease-in-out"></span>
              <span class="hamburger-menu transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>
            <!-- Navbar -->
            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:dark:bg-transparent lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-slate-600">
              <ul class="block lg:flex">
                <li class="group"><a href="#home" class="text-base text-dark py-1 mx-6 flex group-hover:text-primary dark:text-slate-100 <?= (basename($_SERVER['REQUEST_URI']) == 'home') ? 'text-primary': " " ?>">Home</a></li>
                <li class="group"><a href="#about" class="text-base text-dark py-1 mx-6 flex group-hover:text-primary dark:text-slate-100">About</a></li>
                <li class="group"><a href="#gallery" class="text-base text-dark py-1 mx-6 flex group-hover:text-primary dark:text-slate-100">Gallery</a></li>
                <li class="group"><a href="#skills" class="text-base text-dark py-1 mx-6 flex group-hover:text-primary dark:text-slate-100">Skills</a></li>
                <li class="group"><a href="#contact" class="text-base text-dark py-1 mx-6 flex group-hover:text-primary dark:text-slate-100">Contact</a></li>
                <li class="flex items-center pl-7 mt-3 lg:mt-0">
                  <div class="flex items-center">
                    <img src="img/svg/sun.svg" alt="" class="mr-2">
                    <input type="checkbox" class="hidden" id="dark_togle">
                    <label for="dark_togle">
                      <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                      </div>
                    </label>
                    <img src="img/svg/moon.svg" alt="" class="ml-2">
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- Hero Section -->
    <section id="home" class="group pt-36 dark:bg-dark">
      <?php 
        $sql = "SELECT * FROM hero";
        $result = mysqli_query($connect, $sql);
        $data = mysqli_fetch_assoc($result);
      ?>
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2 transition duration-500 ease-in-out delay-100 opacity-100 scale-100" id="animation1">
            <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Hi 🙌, My name is
              <?php if($data) : ?>
                <span class="block font-bold text-dark text-4xl lg:text-5xl dark:text-white"><?=  htmlspecialchars($data['name']); ?></span>
              <?php else : ?>
                <span class="block font-bold text-dark text-4xl lg:text-5xl dark:text-white mb-3 ">User213</span>
              <?php endif ?>
            </h1>
            <?php if($data): ?>
              <h2 class="font-medium text-slate-600 text-lg mb-5 lg:text-2xl dark:text-slate-400"><?=  htmlspecialchars($data['role']); ?></h2>
            <?php endif ?>
            <p class="font-medium text-secondary mb-10 leading-relaxed dark:text-slate-400">Keep learning until learning becomes your <span class="text-dark font-bold dark:text-slate-100">hobby</span></p>
            <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-6 rounded-full hover:shadow-xl hover:bg-cyan-600 transition duration-200 ease-in-out">Contact Me</a>
          </div>   
          <div class="w-full mb-20 self-end px-4 lg:w-1/2 transition duration-300 ease-in-out delay-300 opacity-100 scale-100" id="animation2">
            <div class="relative mt-10 lg:mt-10 sm:mx-12 lg:right-0 rounded-xl h-100 w-100 lg:h-50 lg:w-50">
              <?php 
              if($data && $data['img']) {
                echo "<img src='data:image/jpeg;base64," . base64_encode($data['img']) . "' alt='Image' class='max-w-full w-2/3 mx-auto mb-4 bg-primary rounded-full'>";
              } else {
                echo "<img src='img/default-profile.jpg' alt='Image' class='max-w-full w-2/3 mx-auto mb-4 bg-primary rounded-full'>";
              }
              ?>
              <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-100">
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- About Section -->
    <section id="about" class="group pt-36 pb-32 dark:bg-slate-800">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2" data-aos="fade-right" data-aos-delay="300">
            <h4 class="font-bold uppercase text-primary mb-3">About Me</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 max-w-md lg:text-4xl dark:text-slate-100">Building a website using frameworks</h2>
            <p class="text-base font-medium text-secondary max-w-xl lg:text-lg dark:text-slate-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem asperiores alias fugit dolores, officiis quia voluptatum.</p>
          </div>
          <div class="w-full px-4 lg:w-1/2" data-aos="fade-right" data-aos-delay="100">
            <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-slate-100">Follow Me</h3>
            <p class="font-medium text-base text-secondary mb-6 lg:text-lg dark:text-slate-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum dignissimos ipsam illo ex vitae laboriosam maxime, voluptatum reprehenderit!</p>
            <div class="flex items-center">
              <!-- logo instagram -->
              <a href="https://www.instagram.com/_f4rdyyh/" target="_blank" class="w-9 h-9 mr-3 rounded-xl flex justify-center items-center text-slate-600 border border-slate-300 dark:border-dark dark:text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" widht="20" height="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path
                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 6.718.0076 6.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 6 12.0077"
                  />
                </svg>
              </a>
              <!-- logo facebook -->
              <a
                href="https://www.facebook.com/ardi.fardiansyah.169/"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-xl flex justify-center items-center text-slate-600 border border-slate-300 dark:border-dark dark:text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" widht="23" height="23" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Facebook</title>
                  <path
                    d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 6.68 0 0 1 1.141.195v3.325a8.623 6.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"
                  />
                </svg>
              </a>
              <!-- logo github -->
              <a href="https://github.com/Fardiansyah-Project" target="_blank" class="w-9 h-9 mr-3 rounded-xl flex justify-center items-center text-slate-600 border border-slate-300 dark:border-dark dark:text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" height="24" widht="24" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>GitHub</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.6 6.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Gallery -->
    <section id="gallery" class="pt-36 pb-16 bg-slate-100 dark:bg-dark">
      <div class="container">
        <div class="w-full px-4" data-aos="zoom-in">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg uppercase text-primary mb-2 lg:text-2xl">Gallery</h4>
            <h2 class="font-bold text-3xl text-dark dark:text-slate-100 mb-4 sm:text-4xl lg:text-5xl dark:text-slate-100">Project Inside</h2>
            <p class="font-medium text-md text-secondary md:text-lg dark:text-slate-400">Disini adalah kumpulan dokumentasi projek-projek yang telah saya bangun</p>
          </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center lg:w-10/12 lg:mx-auto">
          <?php if (count($posts) > 0): ?>
            <?php foreach ($posts as $post): ?>
              <div class="mb-12 p-4 md:w-1/2" data-aos="zoom-in-down" data-aos-duration="500" data-aos-delay="100">
                <div class="rounded-md shadow-md overflow-hidden">
                  <img src="data:image/jpeg;base64,<?= base64_encode($post['img']) ?>" alt="My Portofolio" />
                </div>
                <h3 class="font-semibold text-xl text-dark dark:text-slate-100 mt-5 mb-3"><?= htmlspecialchars($post['title']); ?></h3>
                <p class="font-medium text-base text-secondary dark:text-slate-400"><?= htmlspecialchars($post['desc']); ?></p>
              </div> 
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <!--End Gallery -->

    <!-- Skills -->
    <section id="skills" class="pt-36 pb-32 bg-slate-700 dark:bg-slate-500">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16" data-aos="fade-up"  data-aos-duration="900" data-aos-delay="100">
            <h4 class="font-semibold text-lg uppercase text-primary mb-2 uppercase lg:text-2xl">Skills</h4>
            <h2 class="font-bold text-3xl text-white mb-4 sm:text-4xl lg:text-5xl">Programing Language</h2>
            <p class="font-medium text-md text-secondary md:text-lg dark:text-slate-800">Ini adalah list bahasa pemgrograman yang telah saya pelajari</p>
          </div>
        </div>
        <div class="w-full px-3">
          <div class="flex flex-wrap items-center justify-center" data-aos="fade-up"  data-aos-duration="900" data-aos-delay="150">
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-70 transition duration-200 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-6">
              <img src="img/svg/Python.svg.png" width="70"alt="Python Language">
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-70 transition duration-200 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-6" >
              <img src="img/svg/c++.svg.png" width="70"alt="C++ Language">
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-70 transition duration-200 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-6" >
              <img src="img/svg/js.svg.png" width="70"alt="Javascript Language">
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-70 transition duration-200 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-6" >
              <img src="img/svg/php.svg.png" width="70"alt="Php Language">
            </a>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- End Skill -->

    <!-- Contact -->
     <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16" data-aos="fade-down"  data-aos-duration="1000" data-aos-delay="100">
            <h4 class="font-semibold text-lg uppercase text-primary mb-2 uppercase lg:text-2xl uppercase">Contact</h4>
            <h2 class="font-bold text-3xl text-dark mb-4 sm:text-4xl lg:text-5xl dark:text-slate-100">Contact Us</h2>
            <p class="font-medium text-md text-secondary md:text-lg dark:text-slate-400">Hubungi saya dengan mengisi form dibawah ini</p>
          </div>
        </div>

        <div class="w-full lg:w-2/3 lg:mx-auto">
          <div class="w-full px-4 mb-6" data-aos="fade-down"  data-aos-duration="300" data-aos-delay="150" data-aos-easing="ease-in-sine">
            <label for="name" class="text-base font-bold text-primary">Name</label>
            <input type="text" name="name-text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 border-primary" >
          </div>
          <div class="w-full px-4 mb-6" data-aos="fade-down"  data-aos-duration="300" data-aos-delay="150" data-aos-easing="ease-in-sine">
            <label for="email" class="text-base font-bold text-primary">Email</label>
            <input type="email" name="email-input" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 border-primary" >
          </div>
          <div class="w-full px-4 mb-6" data-aos="fade-down"  data-aos-duration="300" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <label for="text-area" class="text-base font-bold text-primary">Message</label>
            <textarea type="email" name="text-input" id="text-area" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 border-primary h-32" ></textarea>
          </div>
          <div class="w-full px-4" data-aos="fade-down"  data-aos-duration="300" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <button class="text-base font-semibold text-white bg-primary py-3 px-6 rounded-full w-full  hover:bg-cyan-700 hover:shadow-lg transition duration-200">Submit</button>
          </div>
        </div>
      </div>
     </section>
     <!-- End Contact -->

     <!-- Footer -->
      <footer class="bg-dark pt-24 pb-12">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2">
              <h3 class="font-bold text-2xl mb-2">Addrees</h3>
              <p>fardiansyahadhiguna@gmail.com</p>
              <p>Jl. Malontara Blok.A</p>
              <p>Palu, Sulawesi Tengah</p>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/2">
              <h3 class="font-semibold text-xl text-white mb-5">Linked</h3>
              <ul class="text-slate-300">
                <li>
                  <a href="" class="inline-block text-base hover:text-primary mb-3">Home</a>
                </li>
                <li>
                  <a href="" class="inline-block text-base hover:text-primary mb-3">About</a>
                </li>
                <li>
                  <a href="" class="inline-block text-base hover:text-primary mb-3">Gallery</a>
                </li>
                <li>
                  <a href="" class="inline-block text-base hover:text-primary mb-3">Skills</a>
                </li>
                <li>
                  <a href="" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full pt-10 border-t border-slate-700">
            <div class="flex items-center justify-center mb-5">
              <!-- logo instagram -->
              <a href="https://www.instagram.com/_f4rdyyh/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-600 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" widht="20" height="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path
                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 6.718.0076 6.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 6 12.0077"
                  />
                </svg>
              </a>
              <!-- logo facebook -->
              <a
                href="https://www.facebook.com/ardi.fardiansyah.169/"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-600 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" widht="23" height="24" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Facebook</title>
                  <path
                    d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 6.68 0 0 1 1.141.195v3.325a8.623 6.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"
                  />
                </svg>
              </a>
              <!-- logo github -->
              <a href="https://github.com/Fardiansyah-Project" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-600 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                <svg role="img" height="24" widht="24" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>GitHub</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.6 6.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
            </div>
            <p class="font-medium text-xs text-slate-500 text-center">Create by <a href="https://www.instagram.com/_f4rdyyh/" target="_blank" class="font-bold text-primary">Fardiansyah</a>, using <a href="https:/tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind Css</a> with <span class="text-red-500">❤</span></p>
          </div>
        </div>
      </footer>
      <!-- End Footer -->
      <!-- Back to Top -->
      <a href="#home" id="back_button" class="fixed bottom-4 right-4 z-[9999] h-10 w-10 bg-primary hidden justify-center items-center rounded-full hover:animate-pulse ">
        <img src="img/svg/chevrons-up.svg" alt="">
      </a>

    <script src="src/js/script.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
