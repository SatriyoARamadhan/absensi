@extends('layouts.layout')

@section('content')
	<div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Tambah Data Siswa</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            
                            <!-- Membuat Fungsi JS -->
								<script type="text/javascript">
								function Angkasaja(evt) {
								var charCode = (evt.which) ? evt.which : event.keyCode
								if (charCode > 31 && (charCode < 48 || charCode > 57))
								return false;
								return true;
								}
								</script>

                            <!--  -->
                            <form action="{{ route('siswa.store') }}" method="post">
                              @csrf
              							<div class="form-group"><label class="col-sm-2 control-label text-right"><b>NIS</b></label>
                              <div class="col-sm-10"><input type="text" onkeypress="return Angkasaja(event)" maxlength="8" minlength="8" class="form-control" name="nis"><br></div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label text-right"><b>Nama</b></label>
                              <div class="col-sm-10"><input type="text" class="form-control" name="nama"><br></div>
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 control-label text-right"><b>Email</b></label>
                              <div class="col-sm-10"><input type="email" class="form-control" name="email"><br></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right"><b>JK</b></label>
                              <div class="col-sm-10">
									
                        				<div class="form-animate-radio">
                          				<label class="radio">
                            				<input value="Laki-Laki" type="radio" name="jk"/>
                            				<span class="outer">
                              				<span class="inner"></span></span> Laki-Laki
                            				</label>
                            			<label class="radio">	
                            				<input value="Perempuan" type="radio" name="jk"/>
                            				<span class="outer">
                              				<span class="inner"></span></span> Perempuan
                            				</label>
                          				</div>

                              </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right"><b>Rombel</b></label>
                              <div class="col-sm-10">

                              <select name="rombel" id="">
                                <!-- RPL -->
                                <option value="RPL X-1">RPL X-1</option>
                                <option value="RPL X-2">RPL X-2</option>
                                <option value="RPL X-3">RPL X-3</option>
                                <option value="RPL X-4">RPL X-4</option>
                                <option value="RPL XI-1">RPL XI-1</option>
                                <option value="RPL XI-2">RPL XI-2</option>
                                <option value="RPL XI-3">RPL XI-3</option>
                                <option value="RPL XI-4">RPL XI-4</option>
                                <option value="RPL XII-1">RPL XII-1</option>
                                <option value="RPL XII-2">RPL XII-2</option>
                                <option value="RPL XII-3">RPL XII-3</option>
                                <option value="RPL XII-4">RPL XII-4</option>
                                <!-- TKJ -->
                                <option value="TKJ X-1">TKJ X-1</option>
                                <option value="TKJ X-2">TKJ X-2</option>
                                <option value="TKJ X-3">TKJ X-3</option>
                                <option value="TKJ X-4">TKJ X-4</option>
                                <option value="TKJ XI-1">TKJ XI-1</option>
                                <option value="TKJ XI-2">TKJ XI-2</option>
                                <option value="TKJ XI-3">TKJ XI-3</option>
                                <option value="TKJ XI-4">TKJ XI-4</option>
                                <option value="TKJ XII-1">TKJ XII-1</option>
                                <option value="TKJ XII-2">TKJ XII-2</option>
                                <option value="TKJ XII-3">TKJ XII-3</option>
                                <option value="TKJ XII-4">TKJ XII-4</option>
                              </select><br><br>
                              </div>
                            </div>
                            
                            <div class="form-group"><label class="col-sm-2 control-label text-right"><b>Rayon</b></label>
                              <div class="col-sm-10">
                                   <select name="rayon" id=""> 
                                    <!-- Cicurug-->
                                    <option value="CIC 1">CIC 1</option>
                                    <option value="CIC 2">CIC 2</option>
                                    <option value="CIC 3">CIC 3</option>
                                    <option value="CIC 4">CIC 4</option>
                                    <option value="CIC 5">CIC 5</option>
                                    <option value="CIC 6">CIC 6</option>
                                    <option value="CIC 7">CIC 7</option>
                                   </select> 
                                <br></div>
                            </div>

                            <div class="col-md-12" style="text-align: right;">             		
								<!--
								<button class="btn-flip btn btn-raised btn-danger">
                                <div class="flip">
                                  <div class="side">
                                    <b>Kembali</b>
                                  </div>
                                  <div class="side back">
                                    Akan Kembali ?
                                  </div>
                                </div>
                              </button>
                -->

                              
								&nbsp&nbsp&nbsp&nbsp
                              
                              <button class="btn-flip btn btn-raised btn-success ripple-infinite" type="submit">
                                <div class="flip">
                                  <div class="side">
                                    <b>Simpan</b>
                                  </div>
                                  <div class="side back">
                                    Sudah Benar ?
                                  </div>
                                </div>
                              </button>
                              </form>

                          </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
@endsection