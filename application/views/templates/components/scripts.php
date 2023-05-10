<script src="<?= base_url() ?>public/js/jquery-3.6.3.min.js"></script>
<script src="<?= base_url() ?>public/js/all.min.js"></script>
<script src="<?= base_url() ?>public/js/lottie-player.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/viewer-static.min.js"></script>
<script src="<?= base_url() ?>public/js/flowbite.min.js"></script>
<script src="<?= base_url() ?>public/js/owl.carousel.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/645affef6a9aad4bc579d9a1/1h01nfg3m';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
<script>
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      center: true,
      items: 3,
      loop: true,
      margin: 20,
      dots: true,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        }
      }
    });
  });
</script>
<script>
  $(document).ready(() => {
    $('#btnAside').click(() => {

      $('#aside').animate({
        width: 'toggle',
        opacity: 'toggle'
      }, "easeinout");
    });
  });
</script>


<script>
  $(document).ready(() => {
    $('#navbarMenu').click(() => {
      let status = $('#navbar-dropdown').attr('data-attribute');
      $('#navbar-dropdown').animate({
        height: "toggle",
        opacity: "toggle"
      }, "easeinout", () => {
        $('#navbar-dropdown').attr('data-attribute', status == '0' ? '1' : '0');
      });
    });
  });
</script>