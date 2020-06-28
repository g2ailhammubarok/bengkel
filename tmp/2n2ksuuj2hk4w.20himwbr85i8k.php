      </section>
	</div>
  </div>
	
  <!-- jQuery -->
  <script src="../../ui/assets/plugins/jquery/jquery.min.js"></script>
  <script src="../../ui/assets/js/popper.min.js"></script>
  <script src="../../ui/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../ui/assets/js/jquery.nicescroll.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
  <!-- DataTables -->
  <script src="../../ui/assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="../../ui/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- Js Application -->
  <script src="../../ui/assets/js/stisla.js"></script>
  <script src="../../ui/assets/js/scripts.js"></script>
  <script src="../../ui/assets/js/custom.js"></script>
  <!-- Chart Js -->
  <script src="../../ui/assets/plugins/chart.js/Chart.min.js"></script>
  
  <!-- Datatable Data -->
  <?php echo $this->render('datatables/user.html',NULL,get_defined_vars(),0); ?>
  <?php echo $this->render('datatables/model.html',NULL,get_defined_vars(),0); ?>
  <?php echo $this->render('datatables/customer.html',NULL,get_defined_vars(),0); ?>
  <?php echo $this->render('datatables/item.html',NULL,get_defined_vars(),0); ?>
  
  <?php echo $this->render('home/chart.html',NULL,get_defined_vars(),0); ?>
  
  <script>
	/* ============================================================== */
	/* Autocomplete input off										= */
	/* ============================================================== */
	
	<!-- $('input').prop('autocomplete','off'); -->
  		
	/* ============================================================== */
	/* Fungsi input hanya nomer										= */
	/* ============================================================== */
	
	$('.number-only').keypress(function(event){
	  var charCode = (event.which) ? event.which : event.keyCode
	  if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
		return false;
	  return true;
	});
	
	/* ============================================================== */
	/* Mencegah enter menyimpan data / submit form					= */
	/* ============================================================== */
	
	$('#main').keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
	
	/* ============================================================== */
	/* Simpel DataTable												= */
	/* ============================================================== */
	
    var table = $('#simple_table').DataTable({
	  "lengthChange": false
	});
	
	$('#searching').on('keyup', function(){
	  table.search(this.value).draw();
    });
	
	/* ============================================================== */
	/* Menangkap data dari modal									= */
	/* ============================================================== */
	
	/* Unit */
	$('#update_unit').on('show.bs.modal', function(event){
	  var button = $(event.relatedTarget);
	  var id_satuan = button.data('id_satuan');
	  var nama_satuan = button.data('nama_satuan');
	  var kode_satuan = button.data('kode_satuan');
	  
	  var modal = $(this);
	  modal.find('.modal-title').text('Update Data : ' + nama_satuan);
	  modal.find('.modal-body input[name=id_satuan]').val(id_satuan);
	  modal.find('.modal-body input[name=nama_satuan]').val(nama_satuan);
	  modal.find('.modal-body input[name=kode_satuan]').val(kode_satuan);
	});
	
	/* ============================================================== */
	/* Fungsi preview image											= */
	/* ============================================================== */
	
	function previewImage(input){
      if(input.files && input.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
          $('#preview_image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
	
	/* ============================================================== */
	/* Fungsi Notifikasi											= */
	/* ============================================================== */
	
	function showNotification(){
	  if(window.Notification && Notification.permission !== "denied") {
	    Notification.requestPermission(function(status) {  // status is "granted", if accepted by user
		  var n = new Notification('JAMBUL | Belanja Mbulanan', { 
		    body: 'Hai Admin, Ada Pesanan Baru.\nKlik Link Berikut : \nhttp://jblapp.hi-skripsi.xyz',
		    icon: '../../ui/assets/img/AdminLTELogo.png' 
		  });
		  
		  var m = new Notification('JAMBUL | Belanja Mbulanan', { 
		    body: 'Hai Admin, Ada Pesanan Baru.\nKlik Link Berikut : \nhttp://jblapp.hi-skripsi.xyz',
		    icon: '../../ui/assets/img/AdminLTELogo.png' 
		  });
	    });
	  }
	}
  </script>
</body>
</html>