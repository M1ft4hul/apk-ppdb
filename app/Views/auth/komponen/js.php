<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url() ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?= base_url() ?>/bootstrap/js/popper.min.js"></script>
<script src="<?= base_url() ?>/bootstrap/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>/plugins/flatpickr/custom-flatpickr.js"></script>
<script src="<?= base_url() ?>/plugins/flatpickr/flatpickr.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url() ?>/assets/js/authentication/form-1.js"></script>
<script>
    var loaderElement = document.querySelector('#load_screen');
    setTimeout(function() {
        loaderElement.style.display = "none";
    }, 3000);
</script>

<script>
    var f1 = flatpickr(document.getElementById('basicFlatpickr'));
</script>
</body>


</html>