</div>
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="<?= base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/ruang-admin.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

<script>
$(document).ready(function() {

    $('#dataTable').DataTable({responsive: true});
        
    //hide
    $('.cus-msg .customer-message').hide();

    //menampilkan 4 data
    $('.cus-msg').children('.customer-message:lt(4)').show();

    //view more
    $('.view-more').click(function() {
        $('.cus-msg').children('.customer-message:hidden:lt(4)').show();
    
    })
})
</script>
</body>

</html>