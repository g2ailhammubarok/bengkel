<div class="card card-primary card-outline">
    <form action="<?= ($BASE.'/item/create') ?>" method="POST" enctype="multipart/form-data">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Item Code</label>
              <div class="col-md-9">
                <input name="item_code" class="form-control form-control-sm">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Item Part No.</label>
              <div class="col-md-9">
                <input name="item_part_no" class="form-control form-control-sm">
              </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Desc</label>
                <div class="col-md-9">
                  <input name="item_desc" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Price</label>
                <div class="col-md-9">
                  <input name="item_price" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Unit</label>
                <div class="col-md-9">
                  <input name="item_unit" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Stamping</label>
                <div class="col-md-9">
                  <input name="item_stamping" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Physical</label>
                <div class="col-md-9">
                  <input name="item_physical" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Similar</label>
                <div class="col-md-9">
                  <input name="item_similar" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Pn</label>
                <div class="col-md-9">
                  <input name="item_pn" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Brand 1</label>
                <div class="col-md-9">
                  <input name="item_brand_1" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Brand 2</label>
                <div class="col-md-9">
                  <input name="item_bradn_2" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Brand 3</label>
                <div class="col-md-9">
                  <input name="item_brand_3" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-3 col-form-label">Item Note</label>
                <div class="col-md-9">
                  <input name="item_note" class="form-control form-control-sm">
                </div>
              </div>

          </div>
        
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Upload Gambar</label>
              <div class="col-md-9">
                <input type="file" name="item_image" class="form-control form-control-sm" onchange="return previewImage(this)">
              </div>
            </div>
            
            <div class="form-group">
              <div class="card">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img id="preview_image" class="profile-user-img img-fluid" alt="Tampilan Foto">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer bg-whitesmoke">
        <button type="submit" name="create" class="btn btn-primary btn-sm btn-form"><b>Simpan</b></button>
        <a href="../../item" class="btn btn-danger btn-sm btn-form"><b>Kembali</b></a>
      </div>
    </form>
  </div>