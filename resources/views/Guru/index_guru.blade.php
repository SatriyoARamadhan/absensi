@extends('layouts.layout')

@section('content')


  <!-- start: Content -->
    
      <div>
              <div>
                <div >
                  <div class="panel">                    
                    <div class="panel-body">

                    @if(session('pesan'))
                      <div class="alert alert-primary alert-dismissible fade show" role="alert">
                       {{ session('pesan') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif

                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    
                      <div class="col-md-6">
                        <a type="button" class="btn btn-round btn-primary"  href="{{ route('guru.create') }}">Tambah Data Guru</a>
                      </div>
              <a style="text-align: right">

                          

                          <div class="search col-md-3"> 
                            <div align="right">
                              <div class="form-animate-text">
                                  <input type="text" class="form-text" placeholder="Cari Data" required>
                                  <label class="label-search co ">     </label>
                              </div>
                            </div>  
                          </div>
              </a>

                      <thead style="text-align: center;">
                        <tr>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Mapel</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($guru as $g)
                        <tr>
                          <td>{{$g->nip}}</td>
                          <td>{{$g->nama}}</td>
                          <td>{{$g->mapel}}</td>
                          <td>
                            <div class="btn-group">
                              <a class="btn btn-round btn-warning" href="{{ route('guru.edit', $g->id) }}">
                                  Edit
                                </a>
                              </div>
                              <div class="btn-group">
                              <form action="{{ route('guru.destroy',$g->id) }}" method="post">
                                @csrf
                                @method('delete')
                            
                                <button class="btn btn-round btn-danger">
                                Hapus
                                </button>
                              </form>

                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>

    <!-- end: content -->


@endsection