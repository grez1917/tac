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

<!-- jam /counter -->
        <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
            <div class="left"></div>
            <div class="right">
                <div id="clock1" style="margin:2em;"></div>
            </div>
        </div>   
        
    <div id='round3Biru'>
    <table align="center" class="test">
    	<tr bgcolor="#2980b9">
    		<td width="175" height="175" align="center" id="biru1" >
    			<font color="#ecf0f1" size="24"><b>1</b></font>
    		</td>
            <td width="175" height="175" align="center" id="biru2" >
                <font color="#ecf0f1" size="24"><b>2</b></font>
            </td>
            <td width="175" height="175" align="center" id="biru3" >
                <font color="#ecf0f1" size="24"><b>3</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#2980b9">
    		<td width="175" height="175" align="center" id="biru4" >
    			<font color="#ecf0f1" size="24"><b>4</b></font>
    		</td>
            <td width="175" height="175" align="center" id="biru5" >
                <font color="#ecf0f1" size="24"><b>5</b></font>
            </td>
            <td width="175" height="175" align="center" id="biru6" >
                <font color="#ecf0f1" size="24"><b>6</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#2980b9">
    		<td width="175" height="175" align="center" id="biru7" >
    			<font color="#ecf0f1" size="24"><b>7</b></font>
    		</td>
            <td width="175" height="175" align="center" id="biru8" >
                <font color="#ecf0f1" size="24"><b>8</b></font>
            </td>
            <td width="175" height="175" align="center" id="biru9" >
                <font color="#ecf0f1" size="24"><b>9</b></font>
            </td>
    	</tr>
    </table>
    </div>

<div class="col-md-7 col-sm-7 col-xs-12">
    <div class="x_panel">
        <div id='soalBiru1' class="x_content" align="justify">
                Pada tanggal 5 Januari, PT ABC membeli barang secara kredit senilai Rp 10.000.000 dengan syarat 2/10, n/30</br>
                Pada tanggal 7 Januari, PT ABC melakukan retur pembelian pada tanggal 5 Januari senilai Rp 3.000.000.</br>
                Pada tanggal 10 Januari, PT ABC melunasi pembelian tanggal 5 Januari yang telah dikurangkan dengan retur.</br>
            <h2>Hitunglah jumlah kas yang harus dibayarkan oleh PT ABC pada tanggal 10 Januari</h2>
                <button id='benarSoalBiru1' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru1' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru1' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Pembelian Kredit</th>
                        <td>Rp 10.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Retur </th>
                        <td>3.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Diskon pembelian (2% x 7.000.000)</th>
                        <td><u>         140.000</u></td>
                    </tr>
                    <tr>
                        <th scope="row">Total kas yang dibayarkan</th>
                        <td><b>Rp 6.860.000</b></td>
                    </tr>                                                          
                </tbody>
            </table>
        </div>

        <div id='soalBiru2' class="x_content" align="justify">
        <h2>Klasifikasikan akun dibawah ini termasuk aset, kewajiban, atau modal.</h2>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">a.  Utang usaha </th>
                    </tr>
                    <tr>
                        <th scope="row">b.  Utang pajak </th>
                    </tr>
                    <tr>
                        <th scope="row">c.  Pendapatan sewa </th>
                    </tr>
                    <tr>
                        <th scope="row">d.  Kas </th>
                    </tr>                                                               
                </tbody>
            </table>
                <button id='benarSoalBiru2' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru2' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru2' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">a.  Kewajiban </th>
                    </tr>
                    <tr>
                        <th scope="row">b.  Kewajiban</th>
                    </tr>
                    <tr>
                        <th scope="row">c.  Modal </th>
                    </tr>
                    <tr>
                        <th scope="row">d.  Aset </th>
                    </tr>                                                               
                </tbody>
            </table>
        </div>

        <div id='soalBiru3' class="x_content" align="justify">
            <h2>Laba bersih = Rp. 138,000</h2>
                <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <th scope="row">31 Desember 2013</th>
                        <th scope="row">31 Desember 2012</th>                                                
                    </tr>
                    <tr>
                        <th scope="row">piutang</th>
                        <td>22,500</td>
                        <td>27,000</td>
                    </tr>
                    <tr>
                        <th scope="row">persediaan Barang Dagang</th>
                        <td>15,000</td>
                        <td>12,900</td>
                    </tr>
                    <tr>
                        <th scope="row">hutang Dagang</th>
                        <td>13,500</td>
                        <td>11,850</td>
                    </tr> 
                    <tr>
                        <th scope="row">hutang Dividen</th>
                        <td>41,250</td>
                        <td>44,250</td>
                    </tr>                                                                                
                </tbody>
            </table>
            <h2>Berapa nilai arus kas dari aktivitas operasi ?</h2>
                <button id='benarSoalBiru3' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru3' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>138,000 + (27,000-22,500) + (13,500-11,850) – (15,000-12,900) = 142,050</h2>
        </div>

        <div id='soalBiru4' class="x_content" align="justify">
            <h2>..................Is an event that ends both the legal and economic life of a partnership</h2>
                <button id='benarSoalBiru4' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru4' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>        
        </div>
        <div id='jawabanBiru4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Partnership liquidation</h2></br>
        </div>

        <div id='soalBiru5' class="x_content" align="justify">
            <h2>Diketahui data sebagai berikut:</h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Reserves                               500 <br>
                            Loans                                9.500
                        </td>
                        <td>eposits                           10.000</br>
                        </td>
                    </tr>
                    <tr>
                        <td>Total assets                10.000</td>
                        <td>Total liabilities          10.000</td>
                    </tr>                                                                              
                </tbody>
            </table>
            <h2>Tentukan besarnya koefisien pengganda uang!</h2>
            
                <button id='benarSoalBiru5' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru5' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru5' class="x_content">
            <h2>Jawaban:</h2></br>
            Koefisien pengganda uang = 1/RR</br>
            *RR = reserve / deposit</br>
            <b>1/RR = 1 / (500/10.000) = 20</b>
        </div>

        <div id='soalBiru6' class="x_content" align="justify">
            <h2>Struktur dimana hanya terdapat sedikit penjual, masing-masing menjual barang yang sama atau identik dengan yang lain disebut....</h2>
                <button id='benarSoalBiru6' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru6' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru6' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Oligopol</h2></br>
        </div>

        <div id='soalBiru7' class="x_content" align="justify">
            <h2>Pajak Penghasilan dalam tahun berjalan kurang dibayar. Pajak penghasilan Pasal 25 tahun 2010 setiap bulan sebesar Rp 100.000.000,-; jatuh tempo tiap tanggal 15. Pajak Penghasilan Pasal 25 bulan Juni 2008 dibayar tepat waktu sebesar Rp 40.000.000,-. Atas kekurangan PPh 25 tersebut diterbitkan STP pada September 2010, jumlah yang harus dibayar.....</h2>
                <button id='benarSoalBiru7' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru7' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru7' class="x_content">
            <h2>Jawaban:</h2></br>
             <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Kekurangan bayar PPh 25 bulan Juni 2008</th>
                        <td>= Rp 60.000.000,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Bunga   ( 3 x 2% x Rp 60.000.000,.) </th>
                        <td><u>= Rp   3.600.000,-</u></td>
                    </tr>
                    <tr>
                        <th scope="row">Jumlah yang harus dibayar   </th>
                        <td>= Rp 63.600.000,-</td>
                    </tr>                                                                                
                </tbody>
            </table>
        </div>

        <div id='soalBiru8' class="x_content" align="justify">
            <h2>Berapakah pajak yang harus dibayar atas transaksi pembayaran dividen ke PT.A dengan kepemilikan 30% sejumlah 100.000.000</h2>
                <button id='benarSoalBiru8' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru8' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2><b>0</b>, karena bukan merupakan obyek pajak</h2></br>
        </div>

        <div id='soalBiru9' class="x_content" align="justify">
            <h2>Aset tetap yang tidak berwujud dibedakan menjadi 2 kategori: a. Dapat disusutkan b. Tidak dapat disusutkan. Jika tidak dapat disusutkan, apa istilah akuntansi untuk mencatat penurunan nilai manfaat aset tersebut?</h2>
                <button id='benarSoalBiru9' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru9' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Impairment Loss</h2></br>
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
</style>

<script type="text/javascript">
	$('#soalBiru1').hide();
    $('#jawabanBiru1').hide();
    $('#soalBiru2').hide();
    $('#jawabanBiru2').hide();
    $('#soalBiru3').hide();
    $('#jawabanBiru3').hide();
    $('#soalBiru4').hide();
    $('#jawabanBiru4').hide();
    $('#soalBiru5').hide();
    $('#jawabanBiru5').hide();
    $('#soalBiru6').hide();
    $('#jawabanBiru6').hide();
    $('#soalBiru7').hide();
    $('#jawabanBiru7').hide();
    $('#soalBiru8').hide();
    $('#jawabanBiru8').hide();
    $('#soalBiru9').hide();
    $('#jawabanBiru9').hide();
    $('#simpanScore').hide();      
    $('#clock1').hide(); 

// soal no 1
    var soal1Clck = 0;
    $(document).ready(function(){
        $('#biru1').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Biru').hide();
            $('#soalBiru1').show();

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
                $('#biru1').css('background-color','#ecf0f1');
           }  
           else if (soal1Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru1').remove();
                $('#round3Biru').show(); 
           }                         
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru1').click(function(){
            $('#jawabanBiru1').show();
            $('#biru1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#biru2').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Biru').hide();
            $('#soalBiru2').show();

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
            soal2Clck++;
            if(soal2Clck == 2){
                $('#biru2').css('background-color','#ecf0f1');
           }
           else if (soal2Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru2').remove();
                $('#round3Biru').show(); 
           }                            
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru2').click(function(){
            $('#jawabanBiru2').show();
            $('#biru2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#biru3').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Biru').hide();
            $('#soalBiru3').show();

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
            soal3Clck++;
            if(soal3Clck == 2){
                $('#biru3').css('background-color','#ecf0f1');
           }         
           else if (soal3Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru3').remove();
                $('#round3Biru').show(); 
           }                   
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru3').click(function(){
            $('#jawabanBiru3').show();
            $('#biru3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#biru4').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Biru').hide();
            $('#soalBiru4').show();

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
            soal4Clck++;
            if(soal4Clck == 2){
                $('#biru4').css('background-color','#ecf0f1');
           }     
           else if (soal4Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru4').remove();
                $('#round3Biru').show(); 
           }                       
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru4').click(function(){
            $('#jawabanBiru4').show();
            $('#biru4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#biru5').click(function(){
            alert('EKONOMI MAKRO');
            $('#round3Biru').hide();
            $('#soalBiru5').show();

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
            soal5Clck++;
            if(soal5Clck == 2){
                $('#biru5').css('background-color','#ecf0f1');
           }         
           else if (soal5Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru5').remove();
                $('#round3Biru').show(); 
           }                   
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru5').click(function(){
            $('#jawabanBiru5').show();
            $('#biru5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#biru6').click(function(){
            alert('EKONOMI MIKRO');
            $('#round3Biru').hide();
            $('#soalBiru6').show();

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
            soal6Clck++;
            if(soal6Clck == 2){
                $('#biru6').css('background-color','#ecf0f1');
           }               
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru6').remove();
                $('#round3Biru').show(); 
           }             
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru6').click(function(){
            $('#jawabanBiru6').show();
            $('#biru6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#biru7').click(function(){
            alert('PERPAJAKAN');
            $('#round3Biru').hide();
            $('#soalBiru7').show();

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
            soal7Clck++;
            if(soal7Clck == 2){
                $('#biru7').css('background-color','#ecf0f1');
            }
           else if (soal7Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru7').remove();
                $('#round3Biru').show(); 
           }                                
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru7').click(function(){
            $('#jawabanBiru7').show();
            $('#biru7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#biru8').click(function(){
            alert('PERPAJAKAN');
            $('#round3Biru').hide();
            $('#soalBiru8').show();

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
            soal8Clck++;
            if(soal8Clck == 2){
                $('#biru8').css('background-color','#ecf0f1');
           }      
           else if (soal8Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru8').remove();
                $('#round3Biru').show(); 
           }                      
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru8').click(function(){
            $('#jawabanBiru8').show();
            $('#biru8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });
// soal no 9
    var soal9Clck =0;
    $(document).ready(function(){
        $('#biru9').click(function(){
            alert('TEORI AKUNTANSI');
            $('#round3Biru').hide();
            $('#soalBiru9').show();

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
                $('#biru9').css('background-color','#ecf0f1');
           }              
           else if (soal9Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru9').remove();
                $('#round3Biru').show(); 
           }              
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru9').click(function(){
            $('#jawabanBiru9').show();
            $('#biru9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

// post method
    $('#document').ready(function(){
        $('#scoreBiru').click(function(){
            $('#jam').hide();
            $('#round3Biru').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard);
            $('#scoreTotal').hide();
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
        });
    });

// tambah poin(bonus)
     $('#document').ready(function(){
        $('#btnBonus').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round3Biru').show();
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