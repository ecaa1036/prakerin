@extends('template.navbar')
@section('content')
        
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @if (session('pesan'))
                <div class="alert alert-success">
                    {{session('pesan')}}
                </div>       
        @endif
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><a href="monitoring/create"><button class="btn btn-primary">Tambah+</button></a></h6>
                  </div>
                  <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <tr>
                            <th>No</th>
                            <th>Guru</th>
                            <th>Nama Siswa</th>
                            {{-- <th>Kelas</th> --}}
                            <th>Nama Industri</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($monitoring as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->guru->nama_guru}}</td>
                            <td>{{$item->siswa->nama}}</td>
                            {{-- <td>{{$item->kelas->siswa->kelas}}</td> --}}
                            <td>{{$item->industri->nama_industri}}</td>
                            <td>
                                <a href="monitoring/delete/{{$item->id_monitoring}}"><button class="btn btn-danger">Delete</button></a>
                                <a href="monitoring/edit/{{$item->id_monitoring}}"><button class="btn btn-info">Edit</button></a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          <!--Row-->

        </div>
        <!---Container Fluid-->
      </div>

    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('template/js/ruang-admin.min.js')}}"></script>
  <!-- Page level plugins -->
  <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
@endsection
