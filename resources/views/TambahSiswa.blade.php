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
							<div class="form-group"><label class="col-sm-2 control-label text-right"><b>NIS</b></label>
                              <div class="col-sm-10"><input type="text" onkeypress="return Angkasaja(event)" maxlength="8" minlength="8" class="form-control"><br></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right"><b>Nama</b></label>
                              <div class="col-sm-10"><input type="text" class="form-control"><br></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right"><b>JK</b></label>
                              <div class="col-sm-10">
									
                        				<div class="form-animate-radio">
                          				<label class="radio">
                            				<input id="radio1" type="radio" name="radios"/>
                            				<span class="outer">
                              				<span class="inner"></span></span> Laki-Laki
                            				</label>
                            			<label class="radio">	
                            				<input id="radio1" type="radio" name="radios"/>
                            				<span class="outer">
                              				<span class="inner"></span></span> Perempuan
                            				</label>
                          				</div>

                              </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right"><b>Rombel</b></label>
                              <div class="col-sm-10"><input type="text" class="form-control"><br></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right"><b>Rayon</b></label>
                              <div class="col-sm-10"><input type="text" class="form-control"><br></div>
                            </div>

                            <div class="col-md-12" style="text-align: right;">             		
								
								<button class="btn-flip btn btn-raised btn-danger">
                                <div class="flip">
                                  <div class="side">
                                    <b>Hapus</b>
                                  </div>
                                  <div class="side back">
                                    Data Akan Di Hapus ?
                                  </div>
                                </div>
                              </button>
								&nbsp&nbsp&nbsp&nbsp
                              <button class="btn-flip btn btn-raised btn-success ripple-infinite">
                                <div class="flip">
                                  <div class="side">
                                    <b>Simpan</b>
                                  </div>
                                  <div class="side back">
                                    Sudah Benar ?
                                  </div>
                                </div>
                              </button>

                          </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
@endsection