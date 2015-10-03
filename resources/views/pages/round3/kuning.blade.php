@extends('layouts.full')
@section('content')
<section>
                 <!-- top tiles -->
                <div class="row tile_count" align="center">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($merah as $item){{ $item->name }}</span>
                            <div class="count" id='scoreMerah'><font color="#c0392b" id='scoreBoardMerah' val='0'>  {{ $item->score }}@endforeach</font></div>
                            <span class="count_bottom"><i class="green"></i></span>
                        </div>
                    </div>
                    
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i>@foreach ($biru as $item) {{ $item->name }}</span>
                            <div class="count" id='scoreBiru'><font color="#2980b9" id='scoreBoardBiru'> {{ $item->score }} @endforeach</font></div>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($hijau as $item) {{ $item->name }}</span>
                            <div class="count" id='scoreHijau'><font color="#2ecc71" id='scoreBoardHijau'>{{ $item->score }} @endforeach</font> </div>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($kuning as $item) {{ $item->name }}</span>
                            <div class="count" id="scoreKuning"><font color="#f1c40f" id='scoreBoardKuning'>{{ $item->score }} @endforeach</font></div>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($abuabu as $item) {{ $item->name }}</span>
                            <div class="count" id='scoreAbuabu'><font color="#7f8c8d" id='scoreBoardAbuabu'> {{ $item->score }} @endforeach</font></div>
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->

<!-- jam/counter -->
       <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
            <div class="left"></div>
            <div class="right">
                <div id="clock1" style="margin:2em;"></div>
                <div id="clock2" style="margin:2em;"></div>
                <div id="clock3" style="margin:2em;"></div>
                <div id="clock4" style="margin:2em;"></div>  
                <div id="clock5" style="margin:2em;"></div>  
                <div id="clock6" style="margin:2em;"></div>  
                <div id="clock7" style="margin:2em;"></div>  
                <div id="clock8" style="margin:2em;"></div>  
                <div id="clock9" style="margin:2em;"></div>                                                                                                                                                                                     
            </div>
        </div>     

    <!-- kotak/box -->
    <div id='round3Kuning'>
    <table align="center" class="test">
        <tr bgcolor="#f1c40f">
            <td width="175" height="175" align="center" id="kuning1" >
                <font color="#16a085" size="24"><b>1</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning2" >
                <font color="#16a085" size="24"><b>2</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning3" >
                <font color="#16a085" size="24"><b>3</b></font>
            </td>
        </tr>
        <tr bgcolor="#f1c40f">
            <td width="175" height="175" align="center" id="kuning4" >
                <font color="#16a085" size="24"><b>4</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning5" >
                <font color="#16a085" size="24"><b>5</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning6" >
                <font color="#16a085" size="24"><b>6</b></font>
            </td>
        </tr>
        <tr bgcolor="#f1c40f">
            <td width="175" height="175" align="center" id="kuning7" >
                <font color="#16a085" size="24"><b>7</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning8" >
                <font color="#16a085" size="24"><b>8</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning9" >
                <font color="#16a085" size="24"><b>9</b></font>
            </td>
        </tr>
    </table>
    </div>

<div class="col-md-7 col-sm-7 col-xs-12">
    <div class="x_panel">
        <div id='soalKuning1' class="x_content" align="justify">
            <h2>Berikut ini adalah transaksi pembelian yang dilakukan oleh Airlangga Co.:</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Transaksi</th>
                        <th>Unit</th>
                        <th>Biaya/unit</th>
                        <th>Total Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">5 Jun</th>
                        <td>Pembelian</td>
                        <td>2</td>
                        <td>Rp 2.000</td>
                        <td>Rp 4.000</td>
                    </tr>
                    <tr>
                        <th scope="row">10 Jun</th>
                        <td>Pembelian</td>
                        <td>3</td>
                        <td>Rp 2.500</td>
                        <td>Rp 7.500</td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td></td>
                        <td>2</td>
                        <td></td>
                        <td>Rp 11.500</td>
                    </tr>
                </tbody>
            </table>
            <h2>Diasumsikan 4  unit terjual pada tanggal 14 Juni senilai Rp 20.000/unit</br>
                Hitunglah persediaan akhir bulan Febuari dengan menggunakan metode LIFO!
            </h2>
            <button id='benarSoalKuning1' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning1' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar1' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter1' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning1' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table table-bordered">
                <tr>
                    <th rowspan="2" scope="row">Tanggal</th>
                    <th colspan="3" scope="row">Penjualan</th>
                    <th colspan="3" scope="row">Total</th>
                </tr>
                <tr>
                    <th scope="row">Cost</th>
                    <th scope="row">Unit</th>
                    <th scope="row">Total Cost</th>
                    <th scope="row">Cost</th>
                    <th scope="row">Unit</th>
                    <th scope="row">Total Cost</th>
                </tr>
                <tr>
                    <td>14 Juni</td>
                    <td>Rp 2.500</br>Rp 2.000</td>
                    <td>3</br>1</td>
                    <td>Rp 7.500</br>Rp 2.000</td>
                    <td>Rp 2.000</td>
                    <td>1</td>
                    <td>Rp 2.000</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Rp 2.000</td>
                </tr>
            </table>
            <h2>Jadi jumlah persediaan akhir sebesar <u>Rp 2.000</u></h2>
        </div>

        <div id='soalKuning2' class="x_content" align="justify">
            <h2>Buatlah jurnal diskon penjualan atas penjualan kredit bagi seorang penjual. </h2>

            <button id='benarSoalKuning2' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning2' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar2' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter2' type="submit" class="btn btn-success">Counter</button> 
        </div>        
        <div id='jawabanKuning2' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2> Penjual </h2></br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Kas</th>
                        <td>XXXXXX</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Diskon penjualan</th>
                        <td>XXXXXX</td>
                    </tr>
                    <tr>
                        <td>Piutang usaha</td>
                        <td>XXXXXX</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soalKuning3' class="x_content" align="justify">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kas</th>
                        <th>Bahan  Baku (Dalam rupiah)</th>
                        <th>Tenaga Kerja Pabrik (Dalam rupiah)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>No. 401</th>
                        <td>9,200,000</td>
                        <td>9,250,000</td>
                    </tr>
                    <tr>
                        <th>No. 402</th>
                        <td>11,000,000</td>
                        <td>13,400,000</td>
                    </tr>
                    <tr>
                        <th>No. 403</th>
                        <td>6,400,000</td>
                        <td>5,000,000</td>
                    </tr>
                    <tr>
                        <th>No. 404</th>
                        <td>18,200,000</td>
                        <td>17,400,000</td>
                    </tr>                    
                </tbody>
            </table>
            <h2>Buatlah jurnal untuk mencatat transaksi diatas !</h2>
            
            <button id='benarSoalKuning3' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning3' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar3' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter3' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning3' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                <tbody>
                    <tr>
                        <th>Barang Dalam Proses</th>
                        <td>89,850,000</td>
                    </tr>
                    <tr>
                        <th>Bahan baku</th>
                        <td>44,800,000</td>
                    </tr>
                    <tr>
                        <th>Hutang Gaji</th>
                        <td>45,050,000</td>
                    </tr>                   
                </tbody>
            </table>
        </div>

        <div id='soalKuning4' class="x_content" align="justify">
            <h2>A corporation sometimes reduces the par or stated value of their common stock and issues a proportionate number of additional shares.  This is called a …. </h2>

            <button id='benarSoalKuning4' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning4' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar4' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter4' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>stock split.</h2>
        </div>

        <div id='soalKuning5' class="x_content" align="justify">
            <h2>Tuan Agung membeli sebuah rumah “ANTIK” seharga Rp 800 juta dan menjualnya kembali setahun kemudian dengan harga Rp 1 Milyar. Biaya-biaya yang telah dikeluarkan oleh Tuan Agung meliputi biaya perbaikan rumah sebesar Rp 100 juta dan biaya iklan Rp 50 juta. Berapa rate of return on investment (ROI) pada rumah tersebut?</h2>

            <button id='benarSoalKuning5' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning5' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar5' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter5' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning5' class="x_content">
            <h2>Jawaban:</h2></br>
                <h2>Keuntungan (Rp 1 Milyar – Rp 800 juta) = Rp 200 juta</br>
                    Keuntungan bersih = Rp 200 juta – (biaya Rp 100 juta + Rp 50 juta)</br>
                     = Rp 50 juta</br>
                    ROI = (Rp 50 juta / RP 800 juta) X 100% = 6,25% per tahun
                </h2>
        </div>

        <div id='soalKuning6' class="x_content" align="justify">
            <h2>Jika pada suatu perekonomian keputusan berkonsumsi dan berproduksi ditentukan sendiri oleh masyarakat maka pada perekonomian tersebut berlaku system ekonomi yang disebut....</h2>

            <button id='benarSoalKuning6' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning6' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar6' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter6' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning6' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Ekonomi pasar </h2>
        </div>

        <div id='soalKuning7' class="x_content" align="justify">
            <h2>Tuan Hartono seorang pengusaha perdagangan bahan bangunan dengan nama took Kencana di Purwokerto. Dari took tersebut tuan Hartanto memperoleh penghasilan kotor (bruto) dalam Januari s/d Juni adalah Rp.600.000.000,-. Apabila norma penghasilan neto kode 62440 bertarif 20%, maka penghasilan neto tuan Adit dalam enam bulan (Januari s/d Juni 2013) adalah....</h2>

            <button id='benarSoalKuning7' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning7' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar7' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter7' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning7' class="x_content">
            <h2>Jawaban:</h2></br>
            Penghasilan bruto Rp 600.000.000</br>
            Norma penghasilan neto kode 62440 dengan tarif sebesar  20 %</br>
            Penghasilan neto =  <b>120.000.000,.</b> (600.000.000 x 20 % = 120.000.000)     
        </div>

        <div id='soalKuning8' class="x_content" align="justify">
            <h2>Perusahaan pelayaran dalam negeri dikenai pajak penghasilan pasal .. yang bersifat …</h2>
  
            <button id='benarSoalKuning8' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning8' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar8' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter8' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning8' class="x_content">
            <h2>Jawaban:</h2></br>
                <h2>15, final</h2>
        </div>

        <div id='soalKuning9' class="x_content" align="justify">
            <h2>PT TAC menghasilkan laba bersih Rp 100 juta yang akan dibagikan sebagai dividen tunai kepada investor sebesar Rp 50 juta, sisa laba bersih sebesar Rp 50 juta akan digunakan untuk ekspansi perusahaan tahun depan, maka sisa laba bersih tersebut akan dicatat dalam akun?</h2>
            <button id='benarSoalKuning9' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning9' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
            <button id='lempar9' type="submit" class="btn btn-primary">Lempar Soal</button>
            <button id='counter9' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanKuning9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2><i>Retained Earning</i> / laba ditahan</h2>
        </div>

<div id='simpanScore'>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bonus poin</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="Default Input" id='bonus'>
            </div>
            <button type="submit" class="btn btn-primary" id='btnBonus'>Bonus.. </button>
            <button type="submit" class="btn btn-success" id='btnMinPoin'>- point </button>
            <button type="submit" class="btn btn-primary" id='btnPoinKembali'>kembali</button>
        </div>
            <form method="post" >
                <div id='scoreTotal'></div> 
                <input name='idMerah' id='idMerah' value="1"></input>
                <div id='scoreTotalMerah'></div>

                <input name='idBiru' id='idBiru' value="2"></input>
                <div id='scoreTotalBiru'></div>        

                <input name='idHijau' id='idHijau' value="3"></input>
                <div id='scoreTotalHijau'></div>       

                <input name='idKuning' id='idKuning' value="4"></input>
                <div id='scoreTotalKuning'></div>    

                <input name='idAbuabu' id='idAbuabu' value="5"></input>
                <div id='scoreTotalAbuabu'></div>
                {!! csrf_field() !!}                                                                       
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <div id='formScoreLempar'>
        <select id="kotakNo" class="form-control" required>
                <option value="kuning1">Kotak 1 </option>
                <option value="kuning2">Kotak 2</option>
                <option value="kuning3">Kotak 3</option>
                <option value="kuning4">Kotak 4</option>
                <option value="kuning5">Kotak 5</option>
                <option value="kuning6">Kotak 6</option>
                <option value="kuning7">Kotak 7</option>
                <option value="kuning8">Kotak 8</option>
                <option value="kuning9">Kotak 9</option>                                                                                     
        </select>        
        <select id="warnaId" class="form-control" required>
                <option value="#c0392b">Merah</option>        
                <option value="#2980b9">Biru</option>
                <option value="#2ecc71">Hijau</option>
                <option value="#7f8c8d">Abu - Abu</option>
        </select>

        <button type="submit" class="btn btn-primary" id='btnPointLempar'>Benar</button></form>
        <button type="submit" class="btn btn-success" id='btnPointLemparSalah'>Salah</button></form>
        <button type="submit" class="btn btn-primary" id='btnKembaliPointLempar'>Kembali</button></form>
        </div>        

    </div>
</div>

</section>
<style type="text/css">
    table.test td {
    margin: 12px 12px 12px 12px;
    padding: 12px 12px 12px 12px;
    }
    table.test {
        border-collapse: separate;
        border-spacing: 10px;
        *border-collapse: expression('separate', cellSpacing = '10px');
    }
    span.tab{
    padding: 0 80px; /* Or desired space*/
    }
</style>

<script type="text/javascript">
    $('#soalKuning1').hide();
    $('#jawabanKuning1').hide();
    $('#soalKuning2').hide();
    $('#jawabanKuning2').hide();    
    $('#soalKuning3').hide();
    $('#jawabanKuning3').hide();
    $('#soalKuning4').hide();
    $('#jawabanKuning4').hide();
    $('#soalKuning5').hide();
    $('#jawabanKuning5').hide();
    $('#soalKuning6').hide();
    $('#jawabanKuning6').hide();
    $('#soalKuning7').hide();
    $('#jawabanKuning7').hide();
    $('#soalKuning8').hide();
    $('#jawabanKuning8').hide();
    $('#soalKuning9').hide();
    $('#jawabanKuning9').hide();
    $('#simpanScore').hide();      
    $('#clock1').hide(); 
    $('#clock2').hide();
    $('#clock3').hide();         
    $('#clock4').hide(); 
    $('#clock5').hide();
    $('#clock6').hide(); 
    $('#clock7').hide(); 
    $('#clock8').hide();
    $('#clock9').hide(); 

    $('#idMerah').hide(); 
    $('#idBiru').hide();   
    $('#idHijau').hide();        
    $('#idKuning').hide();   
    $('#idAbuabu').hide();

    $('#scoreTotalMerah').hide(); 
    $('#scoreTotalBiru').hide();   
    $('#scoreTotalHijau').hide();        
    $('#scoreTotalKuning').hide();   
    $('#scoreTotalAbuabu').hide();    
    
    $('#formScoreLempar').hide();  

// soal no 1
    var soal1Clck = 0;
    $(document).ready(function(){
        $('#kuning1').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Kuning').hide();
            $('#soalKuning1').show();

           var clock;
            $('#clock1').show();
            clock = $('#clock1').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);             
            soal1Clck++;
            if(soal1Clck == 2){
                $('#kuning1').css('background-color','#ecf0f1');
           }        
           else if (soal1Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalKuning1').remove();
                $('#round3Kuning').show(); 
           }                    
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning1').click(function(){
            $('#jawabanKuning1').show();
            $('#kuning1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning1').click(function(){
            $('#soalKuning1').hide();
            $('#jawabanKuning1').hide();
            $('#round3Kuning').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalKuning1').hide();
            $('#jawabanKuning1').hide();
            $('#round3Kuning').show();
            $('#clock1').hide();            
        });
    });
    
    
    $('#document').ready(function(){
        $('#counter1').click(function(){
            var clock;
            $('#clock1').show();
            clock = $('#clock1').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar1').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning1').hide();
            $('#jawabanKuning1').hide();
            $('#round1Kuning').hide();
             $('#clock1').hide();
        });
    });
    

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#kuning2').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Kuning').hide();
            $('#soalKuning2').show();

           var clock;
            $('#clock2').show();
            clock = $('#clock2').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);             
            soal2Clck++;
            if(soal2Clck == 2){
                $('#kuning2').css('background-color','#ecf0f1');
            }
           else if (soal2Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock2').hide();
                $('#soalKuning2').remove();
                $('#round3Kuning').show(); 
           }                         
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning2').click(function(){
            $('#jawabanKuning2').show();
            $('#kuning2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock2').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning2').click(function(){
            $('#soalKuning2').hide();
            $('#jawabanKuning2').hide();
            $('#round3Kuning').show();
            $('#clock2').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalKuning2').hide();
            $('#jawabanKuning2').hide();
            $('#round3Kuning').show();
            $('#clock2').hide();            
        });
    });

    $('#document').ready(function(){
        $('#counter2').click(function(){
            var clock;
            $('#clock2').show();
            clock = $('#clock2').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar2').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning2').hide();
            $('#jawabanKuning2').hide();
            $('#round2Kuning').hide();
             $('#clock2').hide();
        });
    });
                    
// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#kuning3').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Kuning').hide();
            $('#soalKuning3').show();

           var clock;
            $('#clock3').show();
            clock = $('#clock3').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);             
            soal3Clck++;
            if(soal3Clck == 2){
                $('#kuning3').css('background-color','#ecf0f1');
           }          
           else if (soal3Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock3').hide();
                $('#soalKuning3').remove();
                $('#round3Kuning').show(); 
           }                    
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning3').click(function(){
            $('#jawabanKuning3').show();
            $('#kuning3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock3').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning3').click(function(){
            $('#soalKuning3').hide();
            $('#jawabanKuning3').hide();
            $('#round3Kuning').show();
            $('#clock3').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalKuning3').hide();
            $('#jawabanKuning3').hide();
            $('#round3Kuning').show();
            $('#clock3').hide();            
        });
    });
    
    $('#document').ready(function(){
        $('#counter3').click(function(){
            var clock;
            $('#clock3').show();
            clock = $('#clock3').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar3').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning3').hide();
            $('#jawabanKuning3').hide();
            $('#round3Kuning').hide();
             $('#clock3').hide();
        });
    });
      

// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#kuning4').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Kuning').hide();
            $('#soalKuning4').show();

           var clock;
            $('#clock4').show();
            clock = $('#clock4').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);             
            soal4Clck++;
            if(soal4Clck == 2){
                $('#kuning4').css('background-color','#ecf0f1');
           }        
           else if (soal4Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock4').hide();
                $('#soalKuning4').remove();
                $('#round3Kuning').show(); 
           }                      
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning4').click(function(){
            $('#jawabanKuning4').show();
            $('#kuning4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock4').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning4').click(function(){
            $('#soalKuning4').hide();
            $('#jawabanKuning4').hide();
            $('#round3Kuning').show();
            $('#clock4').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalKuning4').hide();
            $('#jawabanKuning4').hide();
            $('#round3Kuning').show();
            $('#clock4').hide();            
        });
    });
    
    $('#document').ready(function(){
        $('#counter4').click(function(){
            var clock;
            $('#clock4').show();
            clock = $('#clock4').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar4').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning4').hide();
            $('#jawabanKuning4').hide();
            $('#round4Kuning').hide();
             $('#clock4').hide();
        });
    });
    
    
                 
// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#kuning5').click(function(){
            alert('EKONOMI MAKRO');
            $('#round3Kuning').hide();
            $('#soalKuning5').show();

           var clock;
            $('#clock5').show();
            clock = $('#clock5').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);             
            soal5Clck++;
            if(soal5Clck == 2){
                $('#kuning5').css('background-color','#ecf0f1');
           } 
           else if (soal5Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock5').hide();
                $('#soalKuning5').remove();
                $('#round3Kuning').show(); 
           }                             
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning5').click(function(){
            $('#jawabanKuning5').show();
            $('#kuning5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock5').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning5').click(function(){
            $('#soalKuning5').hide();
            $('#jawabanKuning5').hide();
            $('#round3Kuning').show();
            $('#clock5').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalKuning5').hide();
            $('#jawabanKuning5').hide();
            $('#round3Kuning').show();
            $('#clock5').hide();            
        });
    });
    
    $('#document').ready(function(){
        $('#counter5').click(function(){
            var clock;
            $('#clock5').show();
            clock = $('#clock5').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar5').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning5').hide();
            $('#jawabanKuning5').hide();
            $('#round5Kuning').hide();
             $('#clock5').hide();
        });
    });
    

// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#kuning6').click(function(){
            alert('EKONOMI MIKRO');
            $('#round3Kuning').hide();
            $('#soalKuning6').show();

           var clock;
            $('#clock6').show();
            clock = $('#clock6').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);             
            soal6Clck++;
            if(soal6Clck == 2){
                $('#kuning6').css('background-color','#ecf0f1');
           }          
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalKuning6').remove();
                $('#round3Kuning').show(); 
           }                    
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning6').click(function(){
            $('#jawabanKuning6').show();
            $('#kuning6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock6').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning6').click(function(){
            $('#soalKuning6').hide();
            $('#jawabanKuning6').hide();
            $('#round3Kuning').show();
            $('#clock6').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalKuning6').hide();
            $('#jawabanKuning6').hide();
            $('#round3Kuning').show();
            $('#clock6').hide();            
        });
    });
    
    $('#document').ready(function(){
        $('#counter6').click(function(){
            var clock;
            $('#clock6').show();
            clock = $('#clock6').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar6').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning6').hide();
            $('#jawabanKuning6').hide();
            $('#round6Kuning').hide();
             $('#clock6').hide();
        });
    });
    

// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#kuning7').click(function(){
            alert('PERPAJAKAN');
            $('#round3Kuning').hide();
            $('#soalKuning7').show();

           var clock;
            $('#clock7').show();
            clock = $('#clock7').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);             
            soal7Clck++;
            if(soal7Clck == 2){
                $('#kuning7').css('background-color','#ecf0f1');
           }         
           else if (soal7Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock7').hide();
                $('#soalKuning7').remove();
                $('#round3Kuning').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning7').click(function(){
            $('#jawabanKuning7').show();
            $('#kuning7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock7').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning7').click(function(){
            $('#soalKuning7').hide();
            $('#jawabanKuning7').hide();
            $('#round3Kuning').show();
            $('#clock7').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalKuning7').hide();
            $('#jawabanKuning7').hide();
            $('#round3Kuning').show();
            $('#clock7').hide();            
        });
    });
    
    $('#document').ready(function(){
        $('#counter9').click(function(){
            var clock;
            $('#clock7').show();
            clock = $('#clock7').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar7').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning7').hide();
            $('#jawabanKuning7').hide();
            $('#round7Kuning').hide();
             $('#clock7').hide();
        });
    });
    
    
// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#kuning8').click(function(){
            alert('PERPAJAKAN');
            $('#round3Kuning').hide();
            $('#soalKuning8').show();

           var clock;
            $('#clock8').show();
            clock = $('#clock8').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);             
            soal8Clck++;
            if(soal8Clck == 2){
                $('#kuning8').css('background-color','#ecf0f1');
           }           
           else if (soal8Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock8').hide();
                $('#soalKuning8').remove();
                $('#round3Kuning').show(); 
           }                
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning8').click(function(){
            $('#jawabanKuning8').show();
            $('#kuning8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning8').click(function(){
            $('#soalKuning8').hide();
            $('#jawabanKuning8').hide();
            $('#round3Kuning').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalKuning8').hide();
            $('#jawabanKuning8').hide();
            $('#round3Kuning').show();
            $('#clock1').hide();            
        });
    });
    
    $('#document').ready(function(){
        $('#counter8').click(function(){
            var clock;
            $('#clock8').show();
            clock = $('#clock8').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar8').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning8').hide();
            $('#jawabanKuning8').hide();
            $('#round8Kuning').hide();
             $('#clock8').hide();
        });
    });
    

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#kuning9').click(function(){
            alert('TEORI AKUNTANSI');
            $('#round3Kuning').hide();
            $('#soalKuning9').show();

           var clock;
            $('#clock1').show();
            clock = $('#clock1').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);             
            soal9Clck++;
            if(soal9Clck == 2){
                $('#kuning9').css('background-color','#ecf0f1');
           }               
           else if (soal9Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalKuning9').remove();
                $('#round3Kuning').show(); 
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalKuning9').click(function(){
            $('#jawabanKuning9').show();
            $('#kuning9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#kuning9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning9').click(function(){
            $('#soalKuning9').hide();
            $('#jawabanKuning9').hide();
            $('#round3Kuning').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalKuning9').hide();
            $('#jawabanKuning9').hide();
            $('#round3Kuning').show();
            $('#clock1').hide();            
        });
    });
    
    $('#document').ready(function(){
        $('#counter9').click(function(){
            var clock;
            $('#clock9').show();
            clock = $('#clock9').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar9').click(function(){
            $('#formScoreLempar').show();
            $('#soalKuning9').hide();
            $('#jawabanKuning9').hide();
            $('#round9Kuning').hide();
             $('#clock9').hide();
        });
    });
    
    
                 

// post method
    $('#document').ready(function(){
        $('#scoreKuning').click(function(){
            $('#jam').hide();
            $('#round3Kuning').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard);
            $('#scoreTotal').hide();
            // $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
                var scoreBoard1 = $('#scoreMerah').text();
                scoreBoard1 = parseInt(scoreBoard1);
                // alert(scoreBoard1);
                $('#scoreMerah').html('<font color="#c0392b" id="scoreBoardMerah" val="'+scoreBoard1+'">'+scoreBoard1+'</font>');
                $('#scoreTotalMerah').html('<input name="score1" value='+scoreBoard1+'>');

                //Biru 
                var scoreBoard2 = $('#scoreBiru').text();                    
                scoreBoard2 = parseInt(scoreBoard2);
                // alert(kotak2Benar);
                $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard2+'">'+scoreBoard2+'</font>');
                $('#scoreTotalBiru').html('<input name="score2" value='+scoreBoard2+'>');

                // Hijau
                var scoreBoard3 = $('#scoreHijau').text();
                scoreBoard3 = parseInt(scoreBoard3);
                // alert(kotak2Benar);
                $('#scoreHijau').html('<font color="#2ecc71" id="scoreBoardHijau" val="'+scoreBoard3+'">'+scoreBoard3+'</font>');
                $('#scoreTotalHijau').html('<input name="score3" value='+scoreBoard3+'>');    

                // Kuning 
                var scoreBoard4 = $('#scoreKuning').text();
                scoreBoard4 = parseInt(scoreBoard4);
                // alert(kotak2Benar);
                $('#scoreKuning').html('<font color="#f1c40f" id="scoreBoardKuning" val="'+scoreBoard4+'">'+scoreBoard4+'</font>');
                $('#scoreTotalKuning').html('<input name="score4" value='+scoreBoard4+'>');

                // Abuabu
                var scoreBoard5 = $('#scoreAbuabu').text();
                scoreBoard5 = parseInt(scoreBoard5);
                // alert(scoreBoard5);
                $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard5+'">'+scoreBoard5+'</font>');
                $('#scoreTotalAbuabu').html('<input name="score5" value='+scoreBoard5+'>');               
        });
    });

// tambah poin(bonus)
     $('#document').ready(function(){
        $('#btnBonus').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreBoardKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreBoardKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="scoreKuning" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round3Kuning').show();
        });
    });

// tombol kembali(dari tambah point soal yang dilempar)
    $('#document').ready(function(){
        $('#btnKembaliPointLempar').click(function(){
            $('#round3Kuning').show();
            $('#formScoreLempar').hide();
        });
    });

// worstcase jika salah dan soal hanya dibuka hanya 1 kali btnPointLemparSalah
    $('#document').ready(function(){
        $('#btnPointLemparSalah').click(function(){
            var kotak = $('#kotakNo').val();
            var no = kotak.substr(6,7);
            // alert(no);

            $('#soalKuning'+no).remove();
            $('#round3Kuning').show(); 
            $('#'+kotak).css('background-color','#ecf0f1');
            $('#formScoreLempar').hide();            
        });
    });

// Tambah point soal yang dilempar
    $(document).ready(function(){
        $('#btnPointLempar').click(function(){
            var warna = $('#warnaId').val();
            var kotak = $('#kotakNo').val();
            $('#'+kotak).html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#'+kotak).css('background-color','#f1c40f');

            // alert(warna);
                if ( warna == '#c0392b'){
                    var scoreBoardkuning = $('#scoreKuning').text();
                    scoreBoardkuning = parseInt(scoreBoardkuning)+20;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoardkuning+'">'+scoreBoardkuning+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoardkuning+'>');                       
                    $('#'+kotak).css('background-color', warna);

                    var scoreBoard = $('#scoreMerah').text();
                    scoreBoard = parseInt(scoreBoard)+10;
                    // alert(scoreBoard);
                    $('#scoreMerah').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalMerah').html('<input name="score1" id="score1" value='+scoreBoard+'>');                    
                    $('#'+kotak).css('background-color', warna);
                }
                // biru
                else if( warna == '#2980b9'){
                    var scoreBoardkuning = $('#scoreKuning').text();
                    scoreBoardkuning = parseInt(scoreBoardkuning)+20;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoardkuning+'">'+scoreBoardkuning+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoardkuning+'>');                       
                    $('#'+kotak).css('background-color', warna);
                    
                    // alert(scoreBoardmerah);
                    var scoreBoardbiru = $('#scoreBiru').text();                    
                    scoreBoardbiru = parseInt(scoreBoardbiru)+10;
                    // alert(scoreBoardbiru);
                    $('#scoreBiru').html('<font color="#2980b9" id="scoreBiru" val="'+scoreBoardbiru+'">'+scoreBoardbiru+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoardbiru+'>');                       
                    $('#'+kotak).css('background-color', warna); 

                }
                // hijau
                else if ( warna == '#2ecc71'){
                    var scoreBoardkuning = $('#scoreKuning').text();
                    scoreBoardkuning = parseInt(scoreBoardkuning)+20;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoardkuning+'">'+scoreBoardkuning+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoardkuning+'>');                       
                    $('#'+kotak).css('background-color', warna);    
                                    
                    var scoreBoardhijau = $('#scoreHijau').text();
                    scoreBoardhijau = parseInt(scoreBoardhijau)+10;
                    // alert(kotak2Benar);
                    $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoardhijau+'">'+scoreBoardhijau+'</font>');
                    $('#scoreTotalHijau').html('<input name="score3" id="score3" value='+scoreBoardhijau+'>');                       
                    $('#'+kotak).css('background-color', warna);                  
                }
                // kuning
                else if ( warna == '#f1c40f'){
                    var scoreBoardkuning = $('#scoreKuning').text();
                    scoreBoardkuning = parseInt(scoreBoardkuning)+20;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoardkuning+'">'+scoreBoardkuning+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoardkuning+'>');                       
                    $('#'+kotak).css('background-color', warna);
                }
                // abuabu
                else{
                    var scoreBoardkuning = $('#scoreKuning').text();
                    scoreBoardkuning = parseInt(scoreBoardkuning)+20;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoardkuning+'">'+scoreBoardkuning+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoardkuning+'>');                       
                    $('#'+kotak).css('background-color', warna);

                    // alert('kucing');
                    var scoreBoardabuabu = $('#scoreAbuabu').text();
                    scoreBoardabuabu = parseInt(scoreBoardabuabu)+10;
                    // alert(scoreBoardabuabu);
                    $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoardabuabu+'">'+scoreBoardabuabu+'</font>');
                    $('#scoreTotalAbuabu').html('<input name="score5" id="score5" value='+scoreBoardabuabu+'>');                       
                    $('#'+kotak).css('background-color', warna);                    
                }            
        });
    });

// counter/jam
    var clock;

    $(document).ready(function() {
        var clock;

        clock = $('#clock1').FlipClock({
            clockFace: 'MinuteCounter',
            autoStart: true,
            callbacks: {
            }
        });
                
        clock.setTime(120);
        clock.setCountdown(true);
    });    
</script>
</section>
@stop

@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop