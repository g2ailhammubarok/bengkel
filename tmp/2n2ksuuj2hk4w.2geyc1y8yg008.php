<div class="card card-primary card-outline">
  <form action="<?= ($BASE.'/user/create') ?>" method="POST" enctype="multipart/form-data">
    <div class="card-body">
	  <div class="row">
		<div class="col-md-3">		  
		  <div class="form-group">
			<div class="card">
			  <div class="card-body box-profile">
				<div class="text-center">
				  <img id="preview_image" class="profile-user-img img-fluid" src="../../ui/assets/img/img.png" width="200">
				</div>
			  </div>
			</div>
		  </div>
	    </div>
		
		<div class="col-md-9">
		  <div class="form-group row">
			<label class="col-md-3 col-form-label">Fullname</label>
			<div class="col-md-9">
			  <input name="user_fullname" class="form-control form-control-sm">
			</div>
		  </div>
		  <div class="form-group row">
			<label class="col-md-3 col-form-label">Username</label>
			<div class="col-md-9">
			  <input name="user_name" class="form-control form-control-sm">
			</div>
		  </div>
		  <div class="form-group row">
			<label class="col-md-3 col-form-label">Level</label>
			<div class="col-md-9">
			  <select name="user_level" class="form-control">
				<option disabled selected>Pilih Level</option>
				<?php foreach (($data_level?:[]) as $level): ?>
				  <option value="<?= ($level['level_id']) ?>"><?= ($level['level_name']) ?></option>
				<?php endforeach; ?>
			  </select>
			</div>
		  </div>
		  <div class="form-group row">
			<label class="col-md-3 col-form-label">Upload Foto</label>
			<div class="col-md-9">
			  <input type="file" name="user_image" class="form-control form-control-sm" onchange="return previewImage(this)">
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="card-footer bg-whitesmoke">
	  <button type="submit" name="create" class="btn btn-primary btn-sm btn-form"><b>Simpan</b></button>
	  <a href="../../user" class="btn btn-danger btn-sm btn-form"><b>Kembali</b></a>
	</div>
  </form>
</div>