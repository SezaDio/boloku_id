	<!-- script tags ============================================================= -->
        <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.min.js?ver=b1.0'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js?ver=b1.0'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/js/jquery-ui.min.js?ver=b1.0'); ?>"></script>
       
        <!-- Sparkline -->
        <script src="<?php echo base_url('asset/js/sparkline/jquery.sparkline.min.js?ver=b1.0'); ?>" type="text/javascript"></script>
        
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('asset/js/app.js?ver=b1.0'); ?>" type="text/javascript"></script>
        
        <!-- daterangepicker -->
        <script src="<?php echo base_url('asset/js/daterangepicker/daterangepicker.js?ver=b1.0'); ?>" type="text/javascript"></script>

        <!-- datepicker -->
        <script src="<?php echo base_url('asset/js/datepicker/bootstrap-datepicker.js?ver=b1.0'); ?>" type="text/javascript"></script>
       
        <!-- DataTables --> 
        <script src="<?php echo base_url('asset/js/jquery.dataTables.js?ver=b1.0'); ?>" type="text/javascript"></script>
        <script>
            $(document).ready( function () {
                $('#dataTables-list').DataTable({
                    "columnDefs":[
                        {"orderable":false, "targets":4}
                    ]
                });
                
                $('#dataTables-list-sm').DataTable({
                    "columnDefs":[
                        {"orderable":false, "targets":4}
                    ]
                });
                $('#dataTables-list-youthers').DataTable({
                    "columnDefs":[
                        {"orderable":false, "targets":4}
                    ]
                });
                $('#dataTables-list-rekomendasi').DataTable({
                    "columnDefs":[
                        {"orderable":false, "targets":4}
                    ]
                });
                $('#dataTables-list-komunitas').DataTable({
                    "columnDefs":[
                        {"orderable":false, "targets":4}
                    ]
                });
                $('#dataTables-list-comming').DataTable({
                    "columnDefs":[
                        {"orderable":false, "targets":4}
                    ]
                });
                $('#dataTables-list-youth').DataTable({
                    "columnDefs":[
                        {"orderable":false, "targets":4}
                    ]
                });
                
                CKEDITOR.replace('editor_wow');
                $(".textarea").wysihtml5();

                // Script untuk onchange ganti gambar
                $(".ganti_gambar").hide();
                $("#ganti").click(function(){
                    $(".ganti_gambar").toggle();
                });

                //Date range picker
                $('#reservation').daterangepicker({format: 'YYYY-MM-DD'},function(start, end) {
                    $('#tgl_mulai').val(start.format('YYYY-MM-DD'));
                    $('#tgl_selesai').val(end.format('YYYY-MM-DD'));
                });
            } );
        </script>

        <!-- Ajax -->
        <script src="<?php echo base_url('asset/js/ajax.js?ver=b1.0'); ?>" type="text/javascript"></script>

        <!-- CK Editor -->
        <script src="<?php echo base_url('asset/js/ckeditor.js?ver=b1.0'); ?>" type="text/javascript"></script>

        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('asset/js/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js?ver=b1.0'); ?>" type="text/javascript"></script>

        <!-- Morris.js charts -->
        <script src="<?php echo base_url('asset/js/morris/morris.min.js?ver=b1.0'); ?>" type="text/javascript"></script>

	</body>
</html>