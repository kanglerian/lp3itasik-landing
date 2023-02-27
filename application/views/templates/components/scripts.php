<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script type="text/javascript" src="https://viewer.diagrams.net/js/viewer-static.min.js"></script>
<script src="<?= base_url() ?>public/js/flowbite.min.js"></script>
<script src="<?= base_url() ?>public/js/owl.carousel.min.js"></script>
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