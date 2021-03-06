<?php

class SupplierController extends Controller {

	public function index(){
		$this->f3->set('page_title','Data Supplier');
		$this->f3->set('header','header/header.html');
        $this->f3->set('view','supplier/index.html');
	}
	
	public function data(){
		$draw = intval($this->f3->get('REQUEST.draw'));
		$length = intval($this->f3->get('REQUEST.length'));
		$offset = intval($this->f3->get('REQUEST.start'));
		$search = $_REQUEST['search']['value'] ? $_REQUEST['search']['value'] : '%';
		
		$supplier = new Supplier($this->db);
		die($supplier->data($draw, $length, $offset, $search));
	}
	
	public function create(){
		$supplier = new Supplier($this->db);
		$supplier->add();
			
		\Flash::instance()->addMessage('Berhasil menambah data "'.$this->f3->get('POST.supplier_code').'"', 'success');
		$this->f3->reroute('/supplier');
	}
	
	public function update(){
		$supplier = new Supplier($this->db);
		$supplier->edit($this->f3->get('POST.supplier_id'));			
			
		\Flash::instance()->addMessage('Berhasil memperbarui data "'.$this->f3->get('POST.supplier_code').'"', 'success');
		$this->f3->reroute('/supplier');
	}
}