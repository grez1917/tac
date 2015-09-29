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
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($hijau as $item) {{ $item->name }}</span>
                            <div class="count" id='scoreHijau'><font color="#2ecc71" id='scoreBoardHijau'>{{ $item->score }} @endforeach</font> </div>
                            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($kuning as $item) {{ $item->name }}</span>
                            <div class="count" id="scoreKuning"><font color="#f1c40f" id='scoreBoardKuning'>{{ $item->score }} @endforeach</font></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($abuabu as $item) {{ $item->name }}</span>
                            <div class="count" id='scoreAbuabu'><font color="#7f8c8d" id='scoreBoardAbuabu'> {{ $item->score }} @endforeach</font></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->

<!-- jam/counter -->
        <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
            <div class="left"></div>
            <div class="right">
                <div id="clock1" style="margin:2em;"></div>
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
            <button type="submit" class="btn btn-primary" id='btnMinPoin'>- point </button>
            <button type="submit" class="btn btn-primary" id='btnPoinKembali'>kembali </button>
        </div>
        <form method="post" ><div id='scoreTotal'></div> {!! csrf_field() !!}<button type="submit" class="btn btn-success">Simpan</button></form>
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

// soal no 1
    var soal1Clck = 0;
    $(document).ready(function(){
        $('#kuning1').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning1').show();
            soal1Clck++;
            if(soal1Clck == 2){
                $('#kuning1').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning1').click(function(){
            $('#soalKuning1').hide();
            $('#jawabanKuning1').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalKuning1').hide();
            $('#jawabanKuning1').hide();
            $('#round3Kuning').show();
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#kuning2').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning2').show();
            soal2Clck++;
            if(soal2Clck == 2){
                $('#kuning2').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning2').click(function(){
            $('#soalKuning2').hide();
            $('#jawabanKuning2').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalKuning2').hide();
            $('#jawabanKuning2').hide();
            $('#round3Kuning').show();
        });
    });

// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#kuning3').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning3').show();
            soal3Clck++;
            if(soal3Clck == 2){
                $('#kuning3').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning3').click(function(){
            $('#soalKuning3').hide();
            $('#jawabanKuning3').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalKuning3').hide();
            $('#jawabanKuning3').hide();
            $('#round3Kuning').show();
        });
    });


// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#kuning4').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning4').show();
            soal4Clck++;
            if(soal4Clck == 2){
                $('#kuning4').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning4').click(function(){
            $('#soalKuning4').hide();
            $('#jawabanKuning4').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalKuning4').hide();
            $('#jawabanKuning4').hide();
            $('#round3Kuning').show();
        });
    });

// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#kuning5').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning5').show();
            soal5Clck++;
            if(soal5Clck == 2){
                $('#kuning5').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning5').click(function(){
            $('#soalKuning5').hide();
            $('#jawabanKuning5').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalKuning5').hide();
            $('#jawabanKuning5').hide();
            $('#round3Kuning').show();
        });
    });


// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#kuning6').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning6').show();
            soal6Clck++;
            if(soal6Clck == 2){
                $('#kuning6').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning6').click(function(){
            $('#soalKuning6').hide();
            $('#jawabanKuning6').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalKuning6').hide();
            $('#jawabanKuning6').hide();
            $('#round3Kuning').show();
        });
    });


// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#kuning7').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning7').show();
            soal7Clck++;
            if(soal7Clck == 2){
                $('#kuning7').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning7').click(function(){
            $('#soalKuning7').hide();
            $('#jawabanKuning7').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalKuning7').hide();
            $('#jawabanKuning7').hide();
            $('#round3Kuning').show();
        });
    });


// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#kuning8').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning8').show();
            soal8Clck++;
            if(soal8Clck == 2){
                $('#kuning8').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning8').click(function(){
            $('#soalKuning8').hide();
            $('#jawabanKuning8').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalKuning8').hide();
            $('#jawabanKuning8').hide();
            $('#round3Kuning').show();
        });
    });

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#kuning9').click(function(){
            alert('goJek');
            $('#round3Kuning').hide();
            $('#soalKuning9').show();
            soal9Clck++;
            if(soal9Clck == 2){
                $('#kuning9').css('background-color','#ecf0f1');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning9').click(function(){
            $('#soalKuning9').hide();
            $('#jawabanKuning9').hide();
            $('#round3Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalKuning9').hide();
            $('#jawabanKuning9').hide();
            $('#round3Kuning').show();
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
            // $('#scoreTotal').hide();
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
            alert(scoreBoard);
        });
    });

// tambah poin(bonus)
     $('#document').ready(function(){
        $('#btnBonus').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
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
            $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
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