<div class="">
    <?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
      <div class="alert alert-<?= ($msg['status']) ?> alert-dismissible show fade">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-info-circle"></i>&nbsp;&nbsp;<?= ($this->esc($msg['text']))."
" ?>
      </div>
    <?php endforeach; ?>
  
    <div class="row mb-1">
      <div class="col-md-8">
        <a href="../../model/create" class="btn btn-success btn-sm">Tambah Model</a>
      </div>
      <div class="col-md-4 pull-right">
        <div class="input-group">
          <input id="model_search" class="form-control form-control-sm" placeholder="Cari Data ...">
          <span class="input-group-append">
            <a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></a>
          </span>
        </div>
      </div>
    </div>
    
    <table id="model_table" class="table table-striped" style="width:100%">
      <thead class="bg-app">
        <tr>
          <th>Kode Model</th>
          <th>Deskripsi</th>
          <th>Pilihan</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>