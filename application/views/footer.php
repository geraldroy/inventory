		<footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </div><!-- /.container -->
        </footer>
    </div><!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
                    Both of these plugins are recommended to enhance the
                    user experience. Slimscroll is required when using the
                    fixed layout. -->
		<!-- DATA TABES SCRIPT -->
		<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
		<!-- page script -->
		<script type="text/javascript">
			$(function () {
				$("#example1").DataTable();
				$("#example2").DataTable();
				/*$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
				"autoWidth": false
				}); */
			});
		</script>
    </body>
</html>
