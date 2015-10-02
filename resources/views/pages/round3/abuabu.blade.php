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
    <div id='round3Abuabu'>
    <table align="center" class="test">
    	<tr bgcolor="#7f8c8d">
    		<td width="175" height="175" align="center" id="abuabu1" >
    			<font color="#f39c12" size="24"><b>1</b></font>
    		</td>
            <td width="175" height="175" align="center" id="abuabu2" >
                <font color="#f39c12" size="24"><b>2</b></font>
            </td>
            <td width="175" height="175" align="center" id="abuabu3" >
                <font color="#f39c12" size="24"><b>3</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#7f8c8d">
    		<td width="175" height="175" align="center" id="abuabu4" >
    			<font color="#f39c12" size="24"><b>4</b></font>
    		</td>
            <td width="175" height="175" align="center" id="abuabu5" >
                <font color="#f39c12" size="24"><b>5</b></font>
            </td>
            <td width="175" height="175" align="center" id="abuabu6" >
                <font color="#f39c12" size="24"><b>6</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#7f8c8d">
    		<td width="175" height="175" align="center" id="abuabu7" >
    			<font color="#f39c12" size="24"><b>7</b></font>
    		</td>
            <td width="175" height="175" align="center" id="abuabu8" >
                <font color="#f39c12" size="24"><b>8</b></font>
            </td>
            <td width="175" height="175" align="center" id="abuabu9" >
                <font color="#f39c12" size="24"><b>9</b></font>
            </td>
    	</tr>
    </table>
    </div>

<div class="col-md-7 col-sm-7 col-xs-12">
    <div class="x_panel">
        <div id='soalAbuabu1' class="x_content" align="justify">
            <h2>Diketahui beban persediaan sebesar Rp 10.000, beban lain-lain sebesar Rp 15.000,  biaya untuk membeli supplies sebesar Rp20.000, dan sisa petty cash sebesar Rp 50.000.</br></h2>
            <h2>Ketika melakukan jurnal untuk transaksi tersebut, berapakah jumlah untuk pencatatan akun <i>cash short and over?</i></h2>

            <button id='benarSoalAbuabu1' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu1' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu1' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Beban persediaan</th>
                        <td>Rp 10.000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Beban lain-lain</th>
                        <td>Rp 15.000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Supplies</th>
                        <td><u>Rp 20.000 (+)</u></td>
                        <td>Rp 45.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Petty Cash</th>
                        <td></td>
                        <td><u>Rp 50.000 (-)</u></td>
                    </tr>
                    <tr>
                        <th scope="row">Cash Short and Over</th>
                        <td></td>
                        <td><b>Rp 5.000</b></td>
                    </tr>                    
                </tbody>
            </table>
        </div>

        <div id='soalAbuabu2' class="x_content" align="justify">
            <h2>Syarat penjualan dimana biaya kirim yang dibayar pembeli dan barang menjadi tanggung jawab pembeli sejak barang keluar dari gudang penjual adalah pengertian dari ......</h2>

            <button id='benarSoalAbuabu2' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu2' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu2' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>FOB Shipping Point </h2>
        </div>

        <div id='soalAbuabu3' class="x_content" align="justify">
            <h2>Swain Company has the following information for January :</h2>
                <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Work in process inventory, January 31 </td>
                        <td>53,000</td>
                    </tr>
                    <tr>
                        <td>Cost of direct materials used in production  </td>
                        <td>12,000</td>
                    </tr>
                    <tr>
                        <td>Finished goods inventory, January 31  </td>
                        <td>24,000</td>
                    </tr>
                    <tr>
                        <td>Direct labour</td>
                        <td>31,000</td>
                    </tr>
                    <tr>
                        <td>Work in process inventory, January 1</td>
                        <td>50,000</td>
                    </tr>
                    <tr>
                        <td>Factory overhead  </td>
                        <td>20,000</td>
                    </tr>
                    <tr>
                        <td>Finished goods inventory, January 1</td>
                        <td>21,000</td>
                    </tr> 
                </tbody>
            </table>
            <h2>Determine the cost of goods manufactured!</h2>
            <button id='benarSoalAbuabu3' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu3' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>$ 60,000</h2>
        </div>

        <div id='soalAbuabu4' class="x_content" align="justify">
            <h2>The difference between the selling price and the face value of a bond, when the bond is sold for more than its face value is called …</h2>

            <button id='benarSoalAbuabu4' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu4' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>premium</h2>
        </div>


        <div id='soalAbuabu5' class="x_content" align="justify">
            <h2>Berdasarkan data statistik tahun 2008, diketahui jumlah penduduk Indonesia yang berusia 15 tahun ke atas sebanyak 165.565.992 orang. Dari jumlah tersebut, tercatat sebanyak 102.049.857 orang yang bekerja dan 9.427.590 orang menganggur.</h2>
            <h2>Dari data tersebut, maka hitung tingkat partisipasi angkatan kerja (dalam %)!</h2>

            <button id='benarSoalAbuabu5' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu5' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu5' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Angkatan kerja = 102.049.857 + 9.427.590 = 111.477.447 </br>
                Tingkat partisipasi angkatan kerja = (111.477.447 / 165.565.992 ) X 100% = 67,328%

            </h2>
        </div>


        <div id='soalAbuabu6' class="x_content" align="justify">
            <h2>Pertumbuhan ekonomi Indonesia dalam 5 tahun terakhir (2002-2007), masing masing : 5,85% ;6,0% ; 5,9% ; dan 6,3%. Deskripsi tersebut tergolong sebagai pernyataan...</h2>

            <button id='benarSoalAbuabu6' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu6' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu6' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Positif (fakta)</h2>
        </div>

        <div id='soalAbuabu7' class="x_content" align="justify">
            <h2>Angsuran masa Pajak Penghasilan Pasal 25 PT Adikarya tahun 2012 sejumlah Rp 10.000.000,. per bulan. Angsuran masa Mei tahun 2012 dibayar tanggal 18 Juni 2012 dan dilaporkan tanggal 19 Juni 2012. Apabila pada tanggal 15 Juli 2012 diterbitkan Surat Tagihan Pajak, sanksi bunga yang harus dibayar sebesar.....</h2>

            <button id='benarSoalAbuabu7' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu7' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu7' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Jawab:   1 x 2% x Rp 10.000.000,. = Rp 200.000,.</h2>
        </div>

        <div id='soalAbuabu8' class="x_content" align="justify">
            <h2>Sebutkan 4 kewajiban PKP!</h2>

            <button id='benarSoalAbuabu8' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu8' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>
                Kewajiban PKP :</br>
                    •   Melaporkan usahanya untuk dikukuhkan sebagai PKP;</br>
                    •   Memungut PPN yang terutang;</br>
                    •   Menyetor PPN yang terutang;</br>
                    •   Melaporkan PPN yang terutang.</br>
            </h2>
        </div>

        <div id='soalAbuabu9' class="x_content" align="justify">
            <h2>suatu prosedur pengendalian terhadap kas di bank dengan membandingkan catatan kas perusahaan secara priodik dengan catatan bank di sebut......</h2>

            <button id='benarSoalAbuabu9' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu9' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>rekonsilisasi bank</h2>
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
	$('#soalAbuabu1').hide();
    $('#jawabanAbuabu1').hide();
    $('#soalAbuabu2').hide();
    $('#jawabanAbuabu2').hide();
    $('#soalAbuabu3').hide();
    $('#jawabanAbuabu3').hide();
    $('#soalAbuabu4').hide();
    $('#jawabanAbuabu4').hide();
    $('#soalAbuabu5').hide();
    $('#jawabanAbuabu5').hide();
    $('#soalAbuabu6').hide();
    $('#jawabanAbuabu6').hide();
    $('#soalAbuabu7').hide();
    $('#jawabanAbuabu7').hide();
    $('#soalAbuabu8').hide();
    $('#jawabanAbuabu8').hide();
    $('#soalAbuabu9').hide();
    $('#jawabanAbuabu9').hide();
    $('#simpanScore').hide();     
    $('#clock1').hide();      

// soal no 1
    var soal1Clck = 0;
    $(document).ready(function(){
        $('#abuabu1').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Abuabu').hide();
            $('#soalAbuabu1').show();

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
                $('#abuabu1').css('background-color','#ecf0f1');
           }
           else if (soal1Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu1').remove();
                $('#round3Abuabu').show(); 
           }                           
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu1').click(function(){
            $('#jawabanAbuabu1').show();
            $('#abuabu1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu1').click(function(){
            $('#soalAbuabu1').hide();
            $('#jawabanAbuabu1').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalAbuabu1').hide();
            $('#jawabanAbuabu1').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#abuabu2').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Abuabu').hide();
            $('#soalAbuabu2').show();

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
                $('#abuabu2').css('background-color','#ecf0f1');
           }      
           else if (soal2Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu2').remove();
                $('#round3Abuabu').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu2').click(function(){
            $('#jawabanAbuabu2').show();
            $('#abuabu2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu2').click(function(){
            $('#soalAbuabu2').hide();
            $('#jawabanAbuabu2').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalAbuabu2').hide();
            $('#jawabanAbuabu2').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#abuabu3').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Abuabu').hide();
            $('#soalAbuabu3').show();

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
                $('#abuabu3').css('background-color','#ecf0f1');
           }      
           else if (soal3Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu3').remove();
                $('#round3Abuabu').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu3').click(function(){
            $('#jawabanAbuabu3').show();
            $('#abuabu3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu3').click(function(){
            $('#soalAbuabu3').hide();
            $('#jawabanAbuabu3').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalAbuabu3').hide();
            $('#jawabanAbuabu3').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();             
        });       
    });


// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#abuabu4').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Abuabu').hide();
            $('#soalAbuabu4').show();

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
                $('#abuabu4').css('background-color','#ecf0f1');
           }      
           else if (soal1Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock4').hide();
                $('#soalAbuabu4').remove();
                $('#round3Abuabu').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu4').click(function(){
            $('#jawabanAbuabu4').show();
            $('#abuabu4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu4').click(function(){
            $('#soalAbuabu4').hide();
            $('#jawabanAbuabu4').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalAbuabu4').hide();
            $('#jawabanAbuabu4').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });


// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#abuabu5').click(function(){
            alert('EKONOMI MAKRO');
            $('#round3Abuabu').hide();
            $('#soalAbuabu5').show();

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
                $('#abuabu5').css('background-color','#ecf0f1');
           }   
           else if (soal5Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu5').remove();
                $('#round3Abuabu').show(); 
           }                        
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu5').click(function(){
            $('#jawabanAbuabu5').show();
            $('#abuabu5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu5').click(function(){
            $('#soalAbuabu5').hide();
            $('#jawabanAbuabu5').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalAbuabu5').hide();
            $('#jawabanAbuabu5').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#abuabu6').click(function(){
            alert('EKONOMI MIKRO');
            $('#round3Abuabu').hide();
            $('#soalAbuabu6').show();

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
                $('#abuabu6').css('background-color','#ecf0f1');
           }      
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu6').remove();
                $('#round3Abuabu').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu6').click(function(){
            $('#jawabanAbuabu6').show();
            $('#abuabu6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu6').click(function(){
            $('#soalAbuabu6').hide();
            $('#jawabanAbuabu6').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalAbuabu6').hide();
            $('#jawabanAbuabu6').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });


// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#abuabu7').click(function(){
            alert('PERPAJAKAN');
            $('#round3Abuabu').hide();
            $('#soalAbuabu7').show();

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
                $('#abuabu7').css('background-color','#ecf0f1');
           }      
           else if (soal7Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu7').remove();
                $('#round3Abuabu').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu7').click(function(){
            $('#jawabanAbuabu7').show();
            $('#abuabu7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu7').click(function(){
            $('#soalAbuabu7').hide();
            $('#jawabanAbuabu7').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalAbuabu7').hide();
            $('#jawabanAbuabu7').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#abuabu8').click(function(){
            alert('PERPAJAKAN');
            $('#round3Abuabu').hide();
            $('#soalAbuabu8').show();

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
                $('#abuabu8').css('background-color','#ecf0f1');
           }      
           else if (soal8Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu8').remove();
                $('#round3Abuabu').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu8').click(function(){
            $('#jawabanAbuabu8').show();
            $('#abuabu8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu8').click(function(){
            $('#soalAbuabu8').hide();
            $('#jawabanAbuabu8').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalAbuabu8').hide();
            $('#jawabanAbuabu8').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#abuabu9').click(function(){
            alert('TEORI AKUNTANSI');
            $('#round3Abuabu').hide();
            $('#soalAbuabu9').show();

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
                $('#abuabu9').css('background-color','#ecf0f1');
           }         
           else if (soal9Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalAbuabu9').remove();
                $('#round3Abuabu').show(); 
           }                  
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu9').click(function(){
            $('#jawabanAbuabu9').show();
            $('#abuabu9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu9').click(function(){
            $('#soalAbuabu9').hide();
            $('#jawabanAbuabu9').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalAbuabu9').hide();
            $('#jawabanAbuabu9').hide();
            $('#round3Abuabu').show();
            $('#clock1').hide();            
        });
    });

// post method
    $('#document').ready(function(){
        $('#scoreAbuabu').click(function(){
            $('#jam').hide();
            $('#round3Abuabu').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreBoardAbuabu').text();
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
            
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBoardAbuabu').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round3Abuabu').show();
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