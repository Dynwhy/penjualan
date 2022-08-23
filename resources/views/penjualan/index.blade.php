@extends('layout.app')

@section('title')
 Penjualan
@endsection 

@section('Content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Penjualan</h5>

            <button type="buttom" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target=#ModalTambah><i class="fa fa-plus"></i></button>
        </div>
    </div>

    <div class="card-body">
    <table class="table table-striped">
     <thead>
        <tr>
            <th>No.</th>
            <th>Barang_id</th>
            <th>Pembeli_id</th>
            <th>Jumblah</th>
            <th>Harga_Jual</th>
            <th>Aksi</th>
        </tr>
     </thead>
<tbody>
     <tr>
        <td>1.</td>
        <td>1</td>
        <td>192</td>
        <td>10</td>
        <td>50.000</td>
        <td>
            <a href="#" class="btn btn-warning btn-bg"><i class="fa-solid fa-edit"></i></a>
            |
            <a href="#" class="btn btn-danger btn-bg"><i class="fa-solid fa-trash"></i></a>
        </td>
     </tr>
</tbody>
</table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ModalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
@endsection 