<script src="Resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="Resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Resources/js/adminlte.js"></script>
<script src="https://kit.fontawesome.com/cdb64ec79b.js" crossorigin="anonymous"></script>
<!-- AdminLTE for demo purposes -->
<script src="Resources/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Resources/js/pages/dashboard2.js"></script>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#output-image').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }

  }
  $("#product-img").change(function() {
    readURL(this);
  });
</script>
<!--END -->
<script>
  $(function() {

    $('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
<script src="Resources/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="Resources/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<!-- <script src="Resources/plugins/chart.js/Chart.min.js"></script> -->
<!-- <script src="Resources/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="Resources/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> -->
<!-- jQuery Mapael -->
<!-- <script src="Resources/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="Resources/plugins/raphael/raphael.min.js"></script> -->
<!-- <script src="Resources/plugins/jszip/jszip.min.js"></script> -->
<!-- <script src="Resources/plugins/datatables-buttons/js/buttons.html5.min.js"></script> -->
<!-- <script src="Resources/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="Resources/plugins/jquery-mapael/maps/usa_states.min.js"></script> -->
<!-- ChartJS -->
<!-- <script src="Resources/plugins/pdfmake/pdfmake.min.js"></script>
<script src="Resources/plugins/pdfmake/vfs_fonts.js"></script> -->
<!-- <script src="Resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->
<!-- <script src="Resources/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="Resources/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
<!-- <script src="Resources/plugins/summernote/summernote-bs4.min.js"></script> -->