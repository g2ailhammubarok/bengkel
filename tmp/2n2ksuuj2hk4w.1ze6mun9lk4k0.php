<script>

$(document).ready(function(){
  var table = $('#user_table').DataTable({
	"scrollX": false,
	"ordering": false,
	"scrollCollapse": true,
	"processing": true,
	"serverSide": true,
	"lengthChange": false,
	"searching": true,
	"ajax": {
	  "url": "<?= ($BASE.'/user/data') ?>",
	  "type": "POST"
	},
	"columns": [
	  { data: 0 }, { data: 1 }, { data: 2 }, { data: 3 },
	  {
		"render": function (data, type, full){
		  return '<a href="../../ui/assets/img/user/' + full[2] + '" class="badge badge-success p-1" title="Lihat Produk" target="_blank"><i class="fa fa-image"></i></a>&nbsp;<a href="<?= ($BASE."/user/update/' + data + '") ?>" class="badge badge-info p-1" title="Perbarui Data"><i class="fa fa-pen"></i></a>';
		}
	  }
	]
  });
	
  $('#user_search').on('keyup', function(){
	table.search(this.value).draw();
  });
});
</script>