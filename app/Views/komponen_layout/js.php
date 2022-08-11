</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url() ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?= base_url() ?>/bootstrap/js/popper.min.js"></script>
<script src="<?= base_url() ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>/assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="<?= base_url() ?>/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url() ?>/plugins/highlight/highlight.pack.js"></script>

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="<?= base_url() ?>/plugins/select2/select2.min.js"></script>
<script src="<?= base_url() ?>/assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script>
    var ss = $(".basic").select2({
        tags: true,
    });
</script>

<script>
    $(document).ready(function() {
        $('#sekolah').change(function() {
            var id_sekolah = $('#sekolah').val();

            var action = 'jurusan_smk';

            if (id_sekolah != '') {
                $.ajax({
                    url: "<?php echo base_url('Home_Pertama/action'); ?>",
                    method: "POST",
                    data: {
                        id_sekolah: id_sekolah,
                        action: action
                    },
                    dataType: "JSON",
                    success: function(data) {
                        var html = '<option value="">Pilih Jurusan</option>';

                        for (count = 0; count < data.length; count++) {
                            html += '<option value="' + data[count].id_jurusan + '">' + data[count].jurusan + '</option>';
                        }
                        $('#jurusan').html(html);
                    }
                });
            } else {
                $('#jurusan').val('');
            }
        });
    });
</script>

</body>

</html>