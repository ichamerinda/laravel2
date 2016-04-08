@extends('includes.cs_header')
@section('content')

<section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Data Pribadi Donatur</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>

        <div class="content-body">   
            <div class="row">
                <form id="general_validate" action="javascript:;" novalidate="novalidate">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="form-label" for="field-1">Id Donatur</label>
                            <div class="controls">
                                 <input type="text" placeholder="id_donatur" class="form-control" name="id_anak" id="txtPhone">
                            </div>
                        </div>

                
                        <div class="form-group">
                            <label class="form-label" for="field-1">Nama Donatur</label>
                             <div class="controls">
                                <input type="text" placeholder="nama_donatur" class="form-control" name="nama_anak" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Alamat Donatur</label>
                            <div class="controls">
                                <input type="text" placeholder="alamat_donatur" class="form-control" name="gender_anak" id="txtPhone">
                            </div>
                        </div>
                    </div>
     
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="form-label" for="field-1">Instansi</label>
                            <div class="controls">
                                <input type="text" placeholder="instansi" class="form-control" name="tmpt_lahir" id="txtPhone">
                            </div>
                        </div> 

                         <div class="form-group">
                            <label class="form-label" for="field-1">No Telepon</label>
                            <div class="controls">
                                <input type="text" placeholder="no_tlp" class="form-control" name="tgl_lahir" id="txtPhone">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="form-label" for="field-1">Donasi</label>
                            <div class="controls">
                                <input type="text" placeholder="donasi" class="form-control" name="alamat_anak" id="txtPhone">
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <!-- oo -->

            <div class="row">
                <form id="general_validate" action="javascript:;" novalidate="novalidate">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div div class="form-group">
                            <label class="form-label" for="field-1">Apakah memiliki rekomendasi anak asuh </label>
                                <ul class="list-unstyled">
                                    <li>
                                        <button type="submit" class="btn btn-success" id="tdk_rekom">Tidak Punya Rekomendasi</button>                        
                                        <button type="submit" class="btn btn-success" id="rekom">Punya Rekomendasi</button>
                                    </li>
                                </ul>
                        </div>
        
                    </div>
                </form>
            </div>

            <div id = "collapse_tdk_rekom">
            <div class="row">
                <form id="general_validate" action="javascript:;" novalidate="novalidate">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="form-label" for="field-1">Tingkatan Sekolah</label>
                            <div class="controls">
                               <select class="form-control" name="tingkatan">
                                    <option value="sd">SD / MI sederajat </option>
                                    <option value="smp">SMP / MTS sederajat</option>
                                    <option value="sma">SMA / SMK / MAN sederajat</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Nama Anak Asuh</label>
                            <div class="controls">
                                <input type="text" placeholder="donasi" class="form-control" name="alamat_anak" id="txtPhone">
                            </div>
                        </div>
        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="pull-right ">
                            <button type="submit" class="btn btn-success" id="back">Back</button>
                            <button type="submit" class="btn btn-success" >Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            </div>
            <!-- rekomen -->
        
        <div id="collapse_rekom">
        <div class="content-body">   
            <div class="row">
                <form id="general_validate" action="javascript:;" novalidate="novalidate">
                    <h4>DATA DIRI ANAK ASUH</h4>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="form-label" for="field-1">Id Anak Asuh</label>
                            <div class="controls">
                                 <input type="text" placeholder="id anak asuh" class="form-control" name="id_anak" id="txtPhone">
                            </div>
                        </div>

                
                         <div class="form-group">
                            <label class="form-label" for="field-1">Nama Anak Asuh</label>
                             <div class="controls">
                                <input type="text" placeholder="nama anak asuh" class="form-control" name="nama_anak" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Jenis Kelamin</label>
                            <div class="controls">
                                <input type="text" placeholder="jenis kelamin" class="form-control" name="gender_anak" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Tempat lahir</label>
                            <div class="controls">
                                <input type="text" placeholder="tempat" class="form-control" name="tmpt_lahir" id="txtPhone">
                            </div>
                        </div> 

                         <div class="form-group">
                            <label class="form-label" for="field-1">Tanggal lahir</label>
                            <div class="controls">
                                <input type="text" placeholder="tempat" class="form-control" name="tgl_lahir" id="txtPhone">
                            </div>
                        </div> 

                        <br><h4>IDENTITAS ORANG TUA </h4>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Nama Ayah</label>
                            <div class="controls">
                                <input type="text" placeholder="Nama Ayah" class="form-control" name="nama_ayah" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Nama Ibu</label>
                            <div class="controls">
                                <input type="text" placeholder="Nama Ibu" class="form-control" name="nama_ibu" id="txtPhone">
                            </div>
                        </div>
                    </div>
     
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                            <label class="form-label" for="field-1">Anak ke - </label>
                            <div class="controls">
                                <input type="text" placeholder="Anak ke" class="form-control" name="urutan_anak" id="txtPhone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="field-1">Jumlah Saudara</label>
                            <div class="controls">
                                <input type="text" placeholder="Jumlah Saudara" class="form-control" name="jml_saudara" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Alamat Anak</label>
                            <div class="controls">
                                <input type="text" placeholder="Alamat anak" class="form-control" name="alamat_anak" id="txtPhone">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="form-label" for="field-1">Nama Kecamatan</label>
                            <div class="controls">
                               <select class="form-control" name="id_role">
                                    <option value="1">Bandar Kedungmulyo</option>
                                    <option value="2">Bareng</option>
                                    <option value="3">Diwek</option>
                                    <option value="4">Gudo</option>
                                    <option value="1">Jogoroto</option>
                                    <option value="2">Jombang</option>
                                    <option value="3">Kabuh</option>
                                    <option value="4">Kesamben</option>
                                    <option value="1">Kudu</option>
                                    <option value="2">Megaluh</option>
                                    <option value="3">Mojoagung</option>
                                    <option value="4">Mojowarno</option>
                                    <option value="1">Ngoro</option>
                                    <option value="2">Ngusikan</option>
                                    <option value="3">Perak</option>
                                    <option value="4">Peterongan</option>
                                    <option value="1">Plandaan</option>
                                    <option value="2">Ploso</option>
                                    <option value="3">Sumobito</option>
                                    <option value="4">Tembelang</option>
                                    <option value="1">Wonosalam</option>
                                </select>
                            </div>
                        </div> 

                        <br><br><h4></h4><br><br><br><br>
                        <div class="form-group">
                            <label class="form-label" for="field-1">Pekerjaan Ayah</label>
                            <div class="controls">
                                <input type="text" placeholder="pekerjaan ayah" class="form-control" name="pekerjaan_ayah" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Pekerjaan Ibu</label>
                            <div class="controls">
                                <input type="text" placeholder="pekerjaan ibu" class="form-control" name="pekerjaan_ibu" id="txtPhone">
                            </div>
                        </div>     
                    </div>

                    
                </form>
         
                <form id="general_validate" action="javascript:;" novalidate="novalidate">
                    <h4>PENDIDIKAN</h4>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                         <div class="form-group">
                            <label class="form-label" for="field-1">Nama Sekolah</label>
                            <div class="controls">
                                <input type="text" placeholder="Nama Sekolah" class="form-control" name="nama_sekolah" id="txtPhone">
                            </div>
                         </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Alamat Sekolah</label>
                            <div class="controls">
                                <input type="text" placeholder="Alamat Sekolah" class="form-control" name="alamat_sekolah" id="txtPhone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Kelas</label>
                            <div class="controls">
                                <input type="text" placeholder="Kelas" class="form-control" name="kelas" id="txtPhone">
                            </div>
                        </div>


                        <br><h4>KEAGAMAAN</h4>
                        <div div class="form-group">
                            <label class="form-label" for="field-1">Rutinitas Sholat setiap hari :</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input tabindex="3" name="sholat" type="radio" id="rutin" class="skin-square-red" >
                                        <label class="icheck-label form-label" for="square-checkbox-1">Rutin </label>
                                    </li>
                            
                                    <li>
                                        <input tabindex="3" name="sholat" type="radio" id="kadang" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-6">Kadang</label>
                                    </li>
                               
                                   <li>
                                       <input tabindex="3" name="sholat" type="radio" id="tdk_pernah" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-6">Tidak Pernah</label>
                                    </li>
                                 </ul>
                        </div>
             
                        <div div class="form-group">
                            <label class="form-label" for="field-1">Rutinitas Sholat setiap hari :</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input tabindex="5" name="ngaji" type="radio" id="aktif" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-1">Aktif </label>
                                    </li>
                            
                                    <li>
                                        <input tabindex="5" name="ngaji" type="radio" id="tdk_aktif" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-6">Tidak Aktif</label>
                                    </li>
                                </ul>
                        </div>

                        <div div class="form-group">
                            <label class="form-label" for="field-1">Kemampuan Baca Al -Quran :</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input tabindex="5" type="radio" id="baik" class="skin-square-red" >
                                        <label class="icheck-label form-label" for="square-checkbox-1">Baik </label>
                                    </li>
                                    <li>
                                        <input tabindex="5" type="radio" id="terbata" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-6">Terbata - bata</label>
                                    </li>

                                    <li>
                                        <input tabindex="5" type="radio" id="iqra" class="skin-square-red" >
                                        <label class="icheck-label form-label" for="square-checkbox-6">Masih Iqra</label>
                                    </li>
                                </ul>
                        </div>

                    </div>

     
                    <div class="col-md-6 col-sm-6 col-xs-6">
                         <div class="form-group">
                            <label class="form-label" for="field-1">Tingkatan Sekolah</label>
                            <div class="controls">
                               <select class="form-control" name="tingkatan">
                                    <option value="sd">SD / MI sederajat</option>
                                    <option value="smp">SMP / MTS sederajat</option>
                                    <option value="sma">SMA / SMK / MAN sederajat </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="field-1">Nilai Rata-rata raport semester sebelumnya</label>
                            <div class="controls">
                                <input type="text" placeholder="semester sebelumnya" class="form-control" name="rapot1" id="txtPhone">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="form-label" for="field-1">Nilai Rata-rata raport semester saat ini</label>
                            <div class="controls">
                                <input type="text" placeholder="semester sekarang" class="form-control" name="rapot2" id="txtPhone">
                            </div>
                        </div

                        

                        <br><br><h4>KEAGAMAAN</h4>
                        <div div class="form-group">
                            <label class="form-label" for="field-1">Kondisi Rumah:</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input tabindex="5" type="radio" id="lantai" name="kondisi_rmh" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-1">Lantai</label>
                                    </li>
                                    <li>
                                        <input tabindex="5" type="radio" id="plester" name="kondisi_rmh" class="skin-square-red" >
                                        <label class="icheck-label form-label" for="square-checkbox-6">Plester</label>
                                    </li>
                                    <li>
                                        <input tabindex="5" type="radio" id="tanah" name="kondisi_rmh" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-6">Tanah</label>
                                    </li>
                                </ul>
                        </div>
                   
                        <div div class="form-group">
                            <label class="form-label" for="field-1">Status Rumah :</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input type="radio" tabindex="5"  name="rumah" class="skin-square-red" value="1" id="rumah_sendiri" >Rumah Sendiri
                                    </li>
                            
                                    <li>
                                        <input type="radio" tabindex="5" type="radio" name="rumah" class="skin-square-red" value="2" id="kontrak"> Kontrak
                                    </li>
                                    <li>
                                        <input tabindex="5" type="radio" name="rumah" class="skin-square-red" value="3" id="rumah_saudara">Rumah Saudara
                                        </li>
                                 </ul>
                        </div>
                    
                        <div class="form-group">
                            <label class="form-label" for="field-1">Status Keluarga :</label>
                                <ul class="list-unstyled">
                                    <li>
                                        <input tabindex="5" type="radio" id="yatim" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-1">Yatim</label>
                                    </li>
                                    <li>
                                        <input tabindex="5" type="radio" id="fakir" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-6">Membutuhkan/fakir</label>
                                    </li>
                                    <li>
                                        <input tabindex="5" type="radio" id="miskin" class="skin-square-red">
                                        <label class="icheck-label form-label" for="square-checkbox-6">Tdk Mampu/Miskin</label>
                                    </li>
                                 </ul>
                        </div>
                    </div>
                       

                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="pull-right ">
                            <button type="submit" class="btn btn-success" id="back">Back</button>
            
                            <button type="submit" class="btn btn-success" >Submit</button>
                        </div>
                    </div>
                </form>
            </div>
             </div>
         </div>
            <!-- end rekomen -->
      
        </section>
    </div>
</section>

<script type="text/javascript">
    $($('ul.wraplist li')[1]).addClass('open');
</script>
@endsection

