<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-legal text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">
                    Didesain Oleh : <strong><span>Dinas Komunikasi dan Informatika Kab. Purbalingga</span></strong>
                </div>
                <div class="credits">
                    Designed by :
                </div>
                <div class="credits">
                    - V01.2022 <a href="https://uad.ac.id/id/profile-uad/">Cah Magang UAD</a>
                </div>
                <div class="credits">
                    - V02.2023 <a href="https://unsoed.ac.id/id">UNSOED</a>
                </div>
                <div class="credits">
                    - V03.2024 <a href="https://unsoed.ac.id/id">UNSOED</a>
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href="https://twitter.com/dinkominfopbg?t=naX5S4CA1R8X9P-WXlZ8zg&s=09" class="twitter"><i
                        class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/dinkominfopbg/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/dinkominfopbg/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>



<!-- Memuat file JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/vendor/aos/aos.js"></script>
<script src="<?=base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?=base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?=base_url()?>assets/vendor/php-email-form/validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajax/1.2.3/jquery.ajax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- Template Main JS File -->
<script src="<?=base_url()?>assets/js/main.js"></script>

<script>
(function() {
    const form = document.querySelector('#formvalid');
    const checkboxes = form.querySelectorAll('input[type=checkbox]');
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked() ? 'Centang salah satu kotak ini jika Anda ingin melanjutkan' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();
</script>

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 3000)
</script>

</body>

</html>