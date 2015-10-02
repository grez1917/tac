@extends('layouts.full')
@section('content')
<section>
                <!-- top tiles -->
                <div class="row tile_count" align="center">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($merah as $item){{ $item->name }}</span>
                            <div class="count" id='score'><font color="#c0392b" id='scoreMerah' val='0'>  {{ $item->score }}@endforeach</font></div>
                            <span class="count_bottom"><i class="green"></i></span>
                        </div>
                    </div>
                    
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i>@foreach ($biru as $item) {{ $item->name }}</span>
                            <div class="count"><font color="#2980b9"> {{ $item->score }} @endforeach</font></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($hijau as $item) {{ $item->name }}</span>
                            <div class="count"><font color="#2ecc71">{{ $item->score }} @endforeach</font> </div>
                            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($kuning as $item) {{ $item->name }}</span>
                            <div class="count"><font color="#f1c40f">{{ $item->score }} @endforeach</font></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> @foreach ($abuabu as $item) {{ $item->name }}</span>
                            <div class="count"><font color="#7f8c8d"> {{ $item->score }} @endforeach</font></div>
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

    <div id='round3Merah'>
    <table align="center" class="test">
    	<tr bgcolor="#c0392b">
    		<td width="175" height="175" align="center" id="merah1" >
    			<font color="#ecf0f1" size="24"><b>1</b></font>
    		</td>
            <td width="175" height="175" align="center" id="merah2" >
                <font color="#ecf0f1" size="24"><b>2</b></font>
            </td>
            <td width="175" height="175" align="center" id="merah3" >
                <font color="#ecf0f1" size="24"><b>3</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#c0392b">
    		<td width="175" height="175" align="center" id="merah4" >
    			<font color="#ecf0f1" size="24"><b>4</b></font>
    		</td>
            <td width="175" height="175" align="center" id="merah5" >
                <font color="#ecf0f1" size="24"><b>5</b></font>
            </td>
            <td width="175" height="175" align="center" id="merah6" >
                <font color="#ecf0f1" size="24"><b>6</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#c0392b">
    		<td width="175" height="175" align="center" id="merah7" >
    			<font color="#ecf0f1" size="24"><b>7</b></font>
    		</td>
            <td width="175" height="175" align="center" id="merah8" >
                <font color="#ecf0f1" size="24"><b>8</b></font>
            </td>
            <td width="175" height="175" align="center" id="merah9" >
                <font color="#ecf0f1" size="24"><b>9</b></font>
            </td>
    	</tr>
    </table>
    </div>

<div class="col-md-7 col-sm-7 col-xs-12">
    <div class="x_panel">
        <div id='soalMerah1' class="x_content">
        	<h2>Berikut ini adalah transaksi pembelian yang dilakukan oleh Milito Company:</h2></br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Transaksi</th>
                        <th>Unit</th>
                        <th>Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">2 Feb</th>
                        <td>Pembelian</td>
                        <td>1</td>
                        <td>Rp 19.000</td>
                    </tr>
                    <tr>
                        <th scope="row">5 Feb</th>
                        <td>Pembelian</td>
                        <td>1</td>
                        <td>Rp 12.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td></td>
                        <td>2</td>
                        <td>Rp 31.000</td>
                    </tr>                                        
                </tbody>
            </table>
            Diasumsikan 1 unit terjual pada tanggal 17 Februari senilai Rp 30.000
            Hitunglah laba kotor bulan Februari dengan menggunakan metode biaya rata-rata!</br>

                <button id='benarSoalMerah1' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah1' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah1' class="x_content">
            <h2>Jawaban:</h2></br>
                Biaya rata-rata per unit : 31.000 : 2 = 15.500 </br>
                Laba Kotor : Rp 30.000 – Rp 15.500 = <b>Rp 14.500 </b></br>
        </div>

        <div id='soalMerah2' class="x_content" align="justify">
        <h2>Indicate its normal balance, wheter it is likely to have debit balance, or credit balance </h2>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">A.  Account receivable</th>
                        <td>..........</td>
                    </tr>
                    <tr>
                        <th scope="row">B.  Malissa, drawing</th>
                        <td>..........</td>
                    </tr>
                    <tr>
                        <th scope="row">C.  Miscellaneous expense </th>
                        <td>..........</td>
                    </tr>
                    <tr>
                        <th scope="row">D.  Malissa, Capital  </th>
                        <td>..........</td>
                    </tr>                                                               
                </tbody>
            </table>
                <button id='benarSoalMerah2' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah2' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah2' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">A.  Debit</th>
                    </tr>
                    <tr>
                        <th scope="row">B.  Debit</th>
                    </tr>
                    <tr>
                        <th scope="row">C.  Debit</th>
                    </tr>
                    <tr>
                        <th scope="row">D.  Kredit</th>
                    </tr>                                                               
                </tbody>
            </table>
        </div>
    
        <div id='soalMerah3' class="x_content" align="justify">
            <h2>A company reports the following :</h2>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Fixed assets (net)</th>
                        <td>$ 1,000,000</td>
                    </tr>
                    <tr>
                        <th scope="row">Income before income tax</th>
                        <td>$ 4,000,000</td>
                    </tr>
                    <tr>
                        <th scope="row">Long term liabilities</th>
                        <td> $ 625,000</td>
                    </tr>
                    <tr>
                        <th scope="row">Total liabilities</th>
                        <td>$ 840,000</td>
                    </tr>               
                    <tr>
                        <th>Interest expense</th>
                        <td>$ 500,000</td>
                    </tr>           
                    <tr>
                        <th>Total Stockholders equity</th>
                        <td>$ 600,000</td>
                    </tr>                                     
                </tbody>
            </table>
            <h2>Determine the number of times interest charges are earned!</h2>
                <button id='benarSoalMerah3' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah3' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah3' class="x_content">
            <h2>Jawaban:</h2></br>
            (4,000,000 + 500,000) / 500,000 = <b>9</b>
        </div>

        <div id='soalMerah4' class="x_content" align="justify">
            <h2>A potential liability that may be-come an actual liability in the future is called ….
                <button id='benarSoalMerah4' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah4' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Contingent liability</h2>
        </div>

        <div id='soalMerah5' class="x_content" align="justify">
            <h2>Diketahui:</h2>
                C = 400 + 0,8Yd</br>
                T = 275 + 0,15Y</br>
                G = 300</br>
                I = 200</br>
            <h2>Maka, pendapatan nasional ekulibrium sebesar?</h2>
                <button id='benarSoalMerah5' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah5' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah5' class="x_content">
            <h2>Jawaban:</h2></br>
                Y* = C + I + G</br>
                Y   = 400 + 0,8Yd + 200 + 300</br>
                Y   = 400 + 0,8[Y-(275 + 0,15 Y)] +200+300</br>
                Y   = 900 + 0,8(Y – 275 – 0,15 Y)</br>
                Y   = 900 + 0,8Y – 220 – 0,12Y</br>
                0,68Y = 680</br>
                <b>Y   = 1000</b>
        </div>


        <div id='soalMerah6' class="x_content" align="justify">
            <h2>Apabila harga barang X turun, jumlah Y yang diminta naik maka barang X dan barang Y adalah barang...</h2>
                <button id='benarSoalMerah6' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah6' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah6' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Komplementer</h2>
        </div>

        <div id='soalMerah7' class="x_content" align="justify">
            <h2>Terhadap wajib pajak diterbitkan Surat Ketetapan Pajak Kurang Bayar (SKPKB) sebesar Rp 750.000.000,-; sedangkan jumlah yang disetujui Wajib Pajak pada saat pembahasan akhir hasil pemeriksaan sebesar Rp 200.000.000. Wajib Pajak membayar Rp 500.000.000,- kemudian mengajukan keberatan. SK Keberatan menjadi Rp 600.000.000,-. Berapa jumlah yang harus dibayar/diterima wajib pajak jika tidak mengajukan banding?</h2>
                <button id='benarSoalMerah7' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah7' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah7' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Pajak Kurang Dibayar (Rp 600.000.000 – Rp 500.000.000) </th>
                        <td>= Rp 100.000.000,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Sanksi Denda (50 % x Rp 100.000.000) </th>
                        <td><u>= Rp   50.000.000,-</u>(+)</td>
                    </tr>
                    <tr>
                        <th scope="row">Yang harus dilunasi apabila tidak mengajukan banding </th>
                        <td>= Rp 150.000.000,-</td>
                    </tr>                                    
                </tbody>
            </table>
        </div>

        <div id='soalMerah8' class="x_content" align="justify">
            <h2>Asas pemungutan pajak yang didasarkan pada Wajib Pajak dimana bertempat tinggal disebut......</h2>
                <button id='benarSoalMerah8' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah8' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Asas Domisili</h2>
        </div>

         <div id='soalMerah9' class="x_content" align="justify">
            <h2>Akun apa yang digunakan untuk mencatat nilai penyusutan yang sudah dialami suatu aset selama digunakan sejak awal masa manfaatnya?</h2>
                <button id='benarSoalMerah9' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah9' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Akumulasi Penyusutan </h2>
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
	$('#soalMerah1').hide();
    $('#jawabanMerah1').hide();
    $('#soalMerah2').hide();
    $('#jawabanMerah2').hide();
    $('#soalMerah3').hide();
    $('#jawabanMerah3').hide();
    $('#soalMerah4').hide();
    $('#jawabanMerah4').hide();
    $('#soalMerah5').hide();
    $('#jawabanMerah5').hide();
    $('#soalMerah6').hide();
    $('#jawabanMerah6').hide();
    $('#soalMerah7').hide();
    $('#jawabanMerah7').hide();
    $('#soalMerah8').hide();
    $('#jawabanMerah8').hide();
    $('#soalMerah9').hide();
    $('#jawabanMerah9').hide();
    $('#simpanScore').hide();   
    $('#clock1').hide();       

//soal no1
    var soal1Clck = 0;
	$(document).ready(function(){
		$('#merah1').click(function(){
			alert('PENGANTAR AKUNTANSI 1');
			$('#round3Merah').hide();
			$('#soalMerah1').show();

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
                $('#merah1').css('background-color','#ecf0f1');
           }           
           else if (soal1Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah1').remove();
                $('#round3Merah').show(); 
           }              
		});
	});

    $('#document').ready(function(){
        $('#benarSoalMerah1').click(function(){
            $('#jawabanMerah1').show();
            $('#merah1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah1').click(function(){
            $('#soalMerah1').hide();
            $('#jawabanMerah1').hide();
            $('#round3Merah').show();
            $('#clock1').hide();            
        });
    });

	$('#document').ready(function(){
		$('#pilihKembali1').click(function(){
			$('#soalMerah1').hide();
            $('#jawabanMerah1').hide();
			$('#round3Merah').show();
            $('#clock1').hide();
		});
	});

//soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#merah2').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Merah').hide();
            $('#soalMerah2').show();

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
                $('#merah2').css('background-color','#ecf0f1');
           }
           else if (soal2Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah2').remove();
                $('#round3Merah').show(); 
           }                  
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah2').click(function(){
            $('#jawabanMerah2').show();
            $('#merah2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah2').click(function(){
            $('#soalMerah2').hide();
            $('#jawabanMerah2').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalMerah2').hide();
            $('#jawabanMerah2').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

//soal no3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#merah3').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Merah').hide();
            $('#soalMerah3').show();

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
                $('#merah3').css('background-color','#ecf0f1');
           }        
            else if (soal3Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah3').remove();
                $('#round3Merah').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah3').click(function(){
            $('#jawabanMerah3').show();
            $('#merah3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah3').click(function(){
            $('#soalMerah3').hide();
            $('#jawabanMerah3').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalMerah3').hide();
            $('#jawabanMerah3').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });
//soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#merah4').click(function(){
            alert('PENGANTAR  AKUNTANSI 2');
            $('#round3Merah').hide();
            $('#soalMerah4').show();

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
                $('#merah4').css('background-color','#ecf0f1');
           }              
           else if (soal4Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah4').remove();
                $('#round3Merah').show(); 
           }    
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah4').click(function(){
            $('#jawabanMerah4').show();
            $('#merah4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah4').click(function(){
            $('#soalMerah4').hide();
            $('#jawabanMerah4').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalMerah4').hide();
            $('#jawabanMerah4').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

//soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#merah5').click(function(){
            alert('EKONOMI MAKRO');
            $('#round3Merah').hide();
            $('#soalMerah5').show();

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
                $('#merah5').css('background-color','#ecf0f1');
           }     
            else if (soal5Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah5').remove();
                $('#round3Merah').show(); 
           }                        
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah5').click(function(){
            $('#jawabanMerah5').show();
            $('#merah5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah5').click(function(){
            $('#soalMerah5').hide();
            $('#jawabanMerah5').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalMerah5').hide();
            $('#jawabanMerah5').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });
//soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#merah6').click(function(){
            alert('EKONOMI MIKRO');
            $('#round3Merah').hide();
            $('#soalMerah6').show();

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
                $('#merah6').css('background-color','#ecf0f1');
           }               
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah6').remove();
                $('#round3Merah').show(); 
           }   
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah6').click(function(){
            $('#jawabanMerah6').show();
            $('#merah6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah6').click(function(){
            $('#soalMerah6').hide();
            $('#jawabanMerah6').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalMerah6').hide();
            $('#jawabanMerah6').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

//Soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#merah7').click(function(){
            alert('PERPAJAKAN');
            $('#round3Merah').hide();
            $('#soalMerah7').show();

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
                $('#merah7').css('background-color','#ecf0f1');
           }             
           else if (soal7Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah7').remove();
                $('#round3Merah').show(); 
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah7').click(function(){
            $('#jawabanMerah7').show();
            $('#merah7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah7').click(function(){
            $('#soalMerah7').hide();
            $('#jawabanMerah7').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalMerah7').hide();
            $('#jawabanMerah7').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

//soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#merah8').click(function(){
            alert('PERPAJAKAN');
            $('#round3Merah').hide();
            $('#soalMerah8').show();

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
                $('#merah8').css('background-color','#ecf0f1');
           }          
           else if (soal8Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah8').remove();
                $('#round3Merah').show(); 
           }        
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah8').click(function(){
            $('#jawabanMerah8').show();
            $('#merah8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide(); 
                                    $('#clock1').hide(); 
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah8').click(function(){
            $('#soalMerah8').hide();
            $('#jawabanMerah8').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalMerah8').hide();
            $('#jawabanMerah8').hide();
            $('#round3Merah').show();
        });
    });

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#TEORI AKUNTANSI').click(function(){
            alert('goJek');
            $('#round3Merah').hide();
            $('#soalMerah9').show();

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

            soal9Clck++;
            if(soal9Clck == 2){
                $('#merah9').css('background-color','#ecf0f1');
           }               
           else if (soal9Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalMerah9').remove();
                $('#round3Merah').show(); 
           }   
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah9').click(function(){
            $('#jawabanMerah9').show();
            $('#merah9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#merah9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah9').click(function(){
            $('#soalMerah9').hide();
            $('#jawabanMerah9').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalMerah9').hide();
            $('#jawabanMerah9').hide();
            $('#round3Merah').show();
            $('#clock1').hide();             
        });
    });

// post method
    $('#document').ready(function(){
        $('#score').click(function(){
            $('#jam').hide();
            $('#round3Merah').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard);
            $('#scoreTotal').hide();
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
            alert(scoreBoard);
        });
    });

// tambah poin(bonus)
     $('#document').ready(function(){
        $('#btnBonus').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round3Merah').show();
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
@stop

@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop