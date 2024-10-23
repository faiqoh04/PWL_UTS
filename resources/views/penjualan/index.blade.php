@extends('layouts.template') 

@section('content') 
  <div class="card card-outline card-primary"> 
      <div class="card-header"> 
          <h3 class="card-title">Daftar Transaksi Penjualan</h3> 
          <div class="card-tools">
              <button onclick="modalAction('{{ url('/penjualan/import') }}')" class="btn btn-info">Impor Transaksi Penjualan</button>
              <a href="{{ url('/penjualan/export_excel') }}" class="btn btn-primary"><i class="fa fa-file-excel"></i> Ekspor Data Transaksi Penjualan</a>
              <a href="{{ url('/penjualan/export_pdf') }}" class="btn btn-warning"><i class="fa fa-file-pdf"></i> Ekspor Data Transaksi Penjualan</a>
              <button onclick="modalAction('{{url('penjualan/create_ajax')}}')" class="btn btn-success">Tambah Data (Ajax)</button>
          </div>
      </div> 
      <div class="card-body">
          @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          @if (session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
          @endif
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-1 control-label col-form-label">Filter: </label>
                      <div class="col-3">
                          <select class="form-control" id="user_id" name="user_id" required>
                              <option value="">- Semua -</option>
                              @foreach ($user as $item)
                                  <option value="{{ $item->user_id }}">{{ $item->nama }}</option>
                              @endforeach
                          </select>
                          <small class="form-text text-muted">User Pembeli</small>
                      </div>
                  </div>
              </div>
          </div>
          <table class="table table-bordered table-striped table-hover table-sm" id="table_penjualan"> 
              <thead> 
                  <tr>
                      <th>ID</th>
                      <th>Kode Transaksi Penjualan</th>
                      <th>Nama Pembeli</th>
                      <th>Tanggal Transaksi Penjualan</th>
                      <th>User Pembeli</th>
                      <th>Aksi</th>
                  </tr> 
              </thead> 
          </table> 
      </div> 
  </div>
  <!-- Modal -->
  <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" 
      data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection 

@push('css')
<style>
    table.dataTable thead th {
        vertical-align: middle; /* Align vertical to middle */
    }
</style>
@endpush 

@push('js') 
<script>
    function modalAction(url = '') {
        $('#myModal').load(url, function() {
            $('#myModal').modal('show');
        });
    }

    var dataPenjualan;
    $(document).ready(function() { 
        dataPenjualan = $('#table_penjualan').DataTable({ 
            processing: true,
            serverSide: true,      
            ajax: { 
                url: "{{ url('penjualan/list') }}", 
                dataType: "json", 
                type: "POST",
                data: function (d) {
                    d.user_id = $('#user_id').val();
                }
            }, 
            columns: [ 
                { 
                    data: "DT_RowIndex",             
                    className: "text-center",
                    orderable: false, 
                    searchable: false     
                },
                { 
                    data: "penjualan_kode",                
                    className: "",
                    orderable: true,     
                    searchable: true     
                },
                { 
                    data: "pembeli",                
                    className: "",
                    orderable: true,     
                    searchable: true     
                },
                { 
                    data: "penjualan_tanggal",                
                    className: "",
                    orderable: true,     
                    searchable: false
                },
                { 
                    data: "user.nama",                
                    className: "",
                    orderable: true,     
                    searchable: false     
                },
                { 
                    data: "aksi",                
                    className: "text-center",
                    orderable: false,     
                    searchable: false
                }
            ]
        });

        // Trigger reload on filter change
        $('#user_id').on('change', function() {
            dataPenjualan.ajax.reload();
        });
    }); 
</script>
@endpush
