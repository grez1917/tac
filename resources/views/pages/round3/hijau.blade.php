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

<!-- box -->
    <div id='round3Hijau'>
    <table align="center" class="test">
    	<tr bgcolor="#2ecc71">
    		<td width="175" height="175" align="center" id="hijau1" >
    			<font color="#ecf0f1" size="24"><b>1</b></font>
    		</td>
            <td width="175" height="175" align="center" id="hijau2" >
                <font color="#ecf0f1" size="24"><b>2</b></font>
            </td>
            <td width="175" height="175" align="center" id="hijau3" >
                <font color="#ecf0f1" size="24"><b>3</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#2ecc71">
    		<td width="175" height="175" align="center" id="hijau4" >
    			<font color="#ecf0f1" size="24"><b>4</b></font>
    		</td>
            <td width="175" height="175" align="center" id="hijau5" >
                <font color="#ecf0f1" size="24"><b>5</b></font>
            </td>
            <td width="175" height="175" align="center" id="hijau6" >
                <font color="#ecf0f1" size="24"><b>6</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#2ecc71">
    		<td width="175" height="175" align="center" id="hijau7" >
    			<font color="#ecf0f1" size="24"><b>7</b></font>
    		</td>
            <td width="175" height="175" align="center" id="hijau8" >
                <font color="#ecf0f1" size="24"><b>8</b></font>
            </td>
            <td width="175" height="175" align="center" id="hijau9" >
                <font color="#ecf0f1" size="24"><b>9</b></font>
            </td>
    	</tr>
    </table>
    </div>

<div class="col-md-7 col-sm-7 col-xs-12">
    <div class="x_panel">
        <div id='soalHijau1' class="x_content" align="justify">
            <h2>Pada tanggal 15 November PT CBA menerima wesel tagih 90 hari, bunga 15% dari PT DFE untuk transaksi pada tanggal 16 Agustus sebesar Rp 2.000.000. Hitunglah jumlah kas yang diterima oleh PT CBA.</h2>

            <button id='benarSoalHijau1' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau1' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau1' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Wesel Tagih PT DFE</td>
                        <td> Rp 2.000.000</td>
                    </tr>
                    <tr>
                        <td>Pendapatan Bunga</br>
                        ((90/360) X 15% X Rp 2.000.000)
                        </td>
                        <td><u>(75.000)</u></td>
                    </tr>
                    <tr>
                        <td>Total penerimaan</td>
                        <td><b>Rp 1.925.000</b></td>
                    </tr>                                                                              
                </tbody>
            </table>
        </div>

        <div id='soalHijau2' class="x_content" align="justify">
            <h2>Classify the following items as prepaid expense, unearned revenue, accrued revenue, or accrued expense </h2></br>
            <h2>
                1.  A three-year premium paid on a fire insurance policy </br>
                2.  Fees earned but not yet received </br>
                3.  Fees received but not yet earned </br>
            </h2>
            <button id='benarSoalHijau2' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau2' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau2' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>
                1.  Prepaid expense </br>
                2.  Accrued revenue </br>
                3.  Unearned revenue </br>
            </h2>
        </div>

        <div id='soalHijau3' class="x_content" align="justify">
            <h2>The market price of News Corporation was $ 15.50 on February 12, 2015. During the preceding year, News Corporation had paid dividends of $ 0.12 per share. Thus, the dividend yield of News Corporation’s common stock is ...</h2>

            <button id='benarSoalHijau3' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau3' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>($ 0,12 / $ 15,50) = 0,77%</h2>
        </div>

        <div id='soalHijau4' class="x_content" align="justify">
            <h2>A feature of preferred stock entitling the stockholder to receive current and unpaid prior-year dividends before common stockholders receive dividends is called …</h2>

            <button id='benarSoalHijau4' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau4' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Cumulative dividend</h2>
        </div>

        <div id='soalHijau5' class="x_content" align="justify">
            <h2>Diketahui:</h2>
                PDB Nominal Th 2012 = 3.950.893</br>
                PDB Nominal Th 2013 = 4.951.357</br>
                PDB Deflator Th 2013  = 237,78</br>
                PDB Rill Th 2012      = 1.964.327</br>
            <h2>Dari data tersebut, maka tingkat inflasi tahun 2013 sebesar …..%</h2>

            <button id='benarSoalHijau5' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau5' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau5' class="x_content">
            <h2>Jawaban:</h2></br>
                <h2>PDB Deflator 2012 = (3.950.893 / 1.964.327) X 100 = 201,13</h2>
                <h2>Tingkat Inflasi 2013 = ((237,78 - 201,13) / 201,13) X 100% = 18,22%</h2>
        </div>

        <div id='soalHijau6' class="x_content" align="justify">
            <h2>Kurva yang menunjukkan tradeoff jangka pendek antara inflasi dengan pengangguran adalah....</h2>

            <button id='benarSoalHijau6' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau6' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau6' class="x_content">
            <h2>Jawaban:</h2></br>
                <h2>Kurva phillips</h2>
        </div>

        <div id='soalHijau7' class="x_content" align="justify">
            <h2>Wajib Pajak Dono (K/I/0) yang memperoleh penghasilan neto setahun dari praktek dokter sebesar Rp100.000.000,-  dan mempunyai seorang isteri yang berprofesi sebagai arsitek dengan penghasilan neto sebesar Rp.150.000.000,-, pengenaan pajaknya dihitung berdasarkan jumlah penghasilan neto 2013 sebesar Rp250.000.000,00 (100.000.000 + 150.000.000). Samsul tidak mempunyai anak maka pajak yang terutang atas jumlah penghasilan tersebut adalah sebesar…..</h2>

            <button id='benarSoalHijau7' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau7' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau7' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Penghasilan Neto</td>
                        <td>= Rp 250.000.000,.</td>
                    </tr>
                    <tr>
                        <td>PTKP (K/I/0)</td>
                        <td>=<u>Rp 50.625.000</u></td>
                    </tr>
                    <tr>
                        <td>Penghasilan Kena Pajak</td>
                        <td>= Rp199.375.000</td>
                    </tr>
                    <tr>
                        <td>PPh Terutang(5% x 50.000.000)+( 15 % x   149.375.000) </td>
                        <td>=<b>Rp 24.906.250</b></td>
                    </tr>                                                                                                   
                </tbody>
            </table>
        </div>

        <div id='soalHijau8' class="x_content" align="justify">
            <h2>Berapakah tarif pajak penghasilan atas Revaluasi aktiva tetap dan apakah sifatnya?</h2>

            <button id='benarSoalHijau8' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau8' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>10%, bersifat final</h2>
        </div>

        <div id='soalHijau9' class="x_content" align="justify">
            <h2>PT TAC membeli 30% saham milik PT ABC senilai Rp 5 Miliar, dalam Neraca atau Laporan Posisi Keuangan PT TAC akan mencatat nilai Rp 5 Miliar tersebut dalam akun?</h2>
            
            <button id='benarSoalHijau9' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau9' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Investasi – dalam PT ABC (Debit)</h2>
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
    $('#soalHijau1').hide();
    $('#jawabanHijau1').hide();
    $('#soalHijau2').hide();
    $('#jawabanHijau2').hide();
    $('#soalHijau3').hide();
    $('#jawabanHijau3').hide();
    $('#soalHijau4').hide();
    $('#jawabanHijau4').hide();
    $('#soalHijau5').hide();
    $('#jawabanHijau5').hide();
    $('#soalHijau6').hide();
    $('#jawabanHijau6').hide();
    $('#soalHijau7').hide();
    $('#jawabanHijau7').hide();
    $('#soalHijau8').hide();
    $('#jawabanHijau8').hide();
    $('#soalHijau9').hide();
    $('#jawabanHijau9').hide();
    $('#simpanScore').hide();      

// soal no 1
    var soal1Clck = 0;
    $(document).ready(function(){
        $('#hijau1').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau1').show();
            soal1Clck++;
            if(soal1Clck == 2){
                $('#hijau1').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau1').click(function(){
            $('#jawabanHijau1').show();
            $('#hijau1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau1').click(function(){
            $('#soalHijau1').hide();
            $('#jawabanHijau1').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalHijau1').hide();
            $('#jawabanHijau1').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#hijau2').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau2').show();
            soal2Clck++;
            if(soal2Clck == 2){
                $('#hijau2').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau2').click(function(){
            $('#jawabanHijau2').show();
            $('#hijau2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau2').click(function(){
            $('#soalHijau2').hide();
            $('#jawabanHijau2').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalHijau2').hide();
            $('#jawabanHijau2').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#hijau3').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau3').show();
            soal3Clck++;
            if(soal3Clck == 2){
                $('#hijau3').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau3').click(function(){
            $('#jawabanHijau3').show();
            $('#hijau3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau3').click(function(){
            $('#soalHijau3').hide();
            $('#jawabanHijau3').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalHijau3').hide();
            $('#jawabanHijau3').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#hijau4').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau4').show();
            soal4Clck++;
            if(soal4Clck == 2){
                $('#hijau4').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau4').click(function(){
            $('#jawabanHijau4').show();
            $('#hijau4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau4').click(function(){
            $('#soalHijau4').hide();
            $('#jawabanHijau4').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalHijau4').hide();
            $('#jawabanHijau4').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#hijau5').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau5').show();
            soal5Clck++;
            if(soal5Clck == 2){
                $('#hijau5').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau5').click(function(){
            $('#jawabanHijau5').show();
            $('#hijau5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau5').click(function(){
            $('#soalHijau5').hide();
            $('#jawabanHijau5').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalHijau5').hide();
            $('#jawabanHijau5').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#hijau6').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau6').show();
            soal6Clck++;
            if(soal6Clck == 2){
                $('#hijau6').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau6').click(function(){
            $('#jawabanHijau6').show();
            $('#hijau6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau6').click(function(){
            $('#soalHijau6').hide();
            $('#jawabanHijau6').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalHijau6').hide();
            $('#jawabanHijau6').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#hijau7').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau7').show();
            soal7Clck++;
            if(soal7Clck == 2){
                $('#hijau7').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau7').click(function(){
            $('#jawabanHijau7').show();
            $('#hijau7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau7').click(function(){
            $('#soalHijau7').hide();
            $('#jawabanHijau7').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalHijau7').hide();
            $('#jawabanHijau7').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#hijau8').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau8').show();
            soal8Clck++;
            if(soal8Clck == 2){
                $('#hijau8').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau8').click(function(){
            $('#jawabanHijau8').show();
            $('#hijau8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau8').click(function(){
            $('#soalHijau8').hide();
            $('#jawabanHijau8').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalHijau8').hide();
            $('#jawabanHijau8').hide();
            $('#round3Hijau').show();
        });
    });

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#hijau9').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau9').show();
            soal9Clck++;
            if(soal9Clck == 2){
                $('#hijau9').css('background-color','#ecf0f1');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau9').click(function(){
            $('#jawabanHijau9').show();
            $('#hijau9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau9').click(function(){
            $('#soalHijau9').hide();
            $('#jawabanHijau9').hide();
            $('#round3Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalHijau9').hide();
            $('#jawabanHijau9').hide();
            $('#round3Hijau').show();
        });
    });

// post method
    $('#document').ready(function(){
        $('#scoreHijau').click(function(){
            $('#jam').hide();
            $('#round3Hijau').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreBoardHijau').text();
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
            
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#score').html('<font color="#c0392b" id="scoreBoardHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round3Hijau').show();
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