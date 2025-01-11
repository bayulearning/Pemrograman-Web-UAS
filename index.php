<?php require "includes/pageHeader.php" ?> 
<html>
    <body>
<header> 
    <h1 class="text-center p-3" style="color:white">Daftar Kuliner Tradisional</h1> 
</header> 

<?php require "includes/navbar.php" ?> 

<div class="content container mt-4 mb-5"> 
    <?php require "includes/konten.php" ?> 
</div> 

<footer class="footerimg" alt="bimg"> 
<div class="text-bg-dark text-center p-2"> Pemrograman Web 1 @ <?= date("Y") ?> 
    </div> 
</footer> 
<?php require "includes/pageFooter.php" ?>
  <script>
// Inisialisasi ScrollReveal
ScrollReveal().reveal('.header__image', {
  delay: 1200,
  duration: 1000,
  easing: 'ease-out',
  origin: 'bottom', // Animasi muncul dari bawah
  distance: '50px', // Jarak pergerakan animasi
  beforeReveal: function (el) {
    // Menambahkan kelas 'revealed' saat elemen terlihat
    el.classList.add('revealed');
  }
});

        ScrollReveal().reveal('.header__image .header__img', {
      delay: 1200,
      duration: 1000, // menambahkan durasi untuk efek transisi
      easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
    });
    // Inisialisasi ScrollReveal dan atur transisi gerak
    ScrollReveal().reveal('.header__content .section__description', {
      delay: 500,
      duration: 1000, // menambahkan durasi untuk efek transisi
      easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
    });
        ScrollReveal().reveal('.card', {
      delay: 500,
      duration: 1000, // menambahkan durasi untuk efek transisi
      easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
    });
    ScrollReveal().reveal(".portfolio__card", {
  duration: 1000,
  interval: 500,
   easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
});
ScrollReveal().reveal(".service__card", {
  duration: 1000,
  interval: 500,
     easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
});
ScrollReveal().reveal(".section__header", {
  duration: 1000,
  interval: 500,
     easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
});
ScrollReveal().reveal(".section__description", {
  duration: 1000,
  interval: 500,
     easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
});
ScrollReveal().reveal(".contact__socials", {
  duration: 1000,
  interval: 500,
     easing: 'ease-out', // animasi transisi
      origin: 'bottom', // animasi muncul dari bawah
      distance: '50px', // jarak pergerakan animasi
});
  </script>
</body>
</html>