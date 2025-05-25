<?php wp_footer(); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/custom.js" type="text/javascript"></script>
<script>
  AOS.init();
</script>
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6Lfy-EgrAAAAAAl19WcXQ3woyz913c_Zz43--sgc', {action: 'LOGIN'});
    });
  }
</script>
</body>
</html>