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

        <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
            <div class="left"></div>
            <div class="right">
                <div id="clock1" style="margin:2em;"></div>
            </div>
        </div>     

    <div id='round1Abuabu'>
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
            <h2>Jika diketahui rugi PT X adalah Rp. 20.000.000. maka jurnal untuk mencatat rugi tersebut adalah?</h2>

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
                        <th scope="row">Modal PT X </th>
                        <td>Rp. 20.000.000,-</td>
                    </tr>
                    <tr>
                        <th scope="row">Ikhtisar rugi laba</th>
                        <td>Rp. 20.000.000,-</td>
                    </tr>
                    <tr>
                </tbody>
            </table>
        </div>

        <div id='soalAbuabu2' class="x_content" align="justify">
            Buatlah jurnal untuk transaksi berikut!</br>
            <h2>8 September Menghapus piutang dari PT Doremi sebesar Rp 1.000.000 yang dianggap tak tertagih</h2>

            <button id='benarSoalAbuabu2' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu2' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu2' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><b>8 september </b></td>
                        <td>Allowance for doubtful Accounts </td>
                        <td>1.000.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Accounts Receivable – PT Doremi  </td>
                        <td>1.000.000</td>
                    </tr>
                    <tr>
                </tbody>
            </table>
        </div>

        <div id='soalAbuabu3' class="x_content" align="justify">
            <h2>Managerial accounting information is designed to meet the specific needs of a company’s management. In most companies, departments or similar organizational units are assigned responsibilities for specific functions or activities. The operating structure of a company can be shown in an organization chart. The department in a company can be viewed as a line department or staff department. As a staff department, managerial accounting supports management and the management process. The management process has the following five basic phases, there are ... , ... , ... , ... , and ...</h2>

            <button id='benarSoalAbuabu3' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu3' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu3' class="x_content">
            <h2>Jawaban:</h2></br>
            <b>Planning, Directing, Controlling, Improving, and Decision making</b>
        </div>

        <div id='soalAbuabu4' class="x_content" align="justify">
            <h2>On January 1, 2015, Zeus Possedon corporation issues for cash $100,000 of 12%, five-year bonds; interest payable semiannually. The market rate of interest is 13%. Prepare the journal entry to record the issuance of the bonds.</h2>

            <button id='benarSoalAbuabu4' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu4' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu4' class="x_content">
            <h2>Jawaban:</h2></br>

        </div>


        <div id='soalAbuabu5' class="x_content" align="justify">
            <h2>The New York Times harganya $0,15 di tahun 1970. Upah rata-rata dalam bidang industri adalah $3,36 per jam di tahun 1970. Dalam kasus diatas, berapa menit yang harus dihabiskan oleh seorang untuk bekerja agar mendapat uang yang cukup untuk membeli surat kabar ?</h2>

            <button id='benarSoalAbuabu5' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu5' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu5' class="x_content">
            <h2>Jawaban:</h2></br>

        </div>


        <div id='soalAbuabu6' class="x_content" align="justify">
            <h2>Jika TC = 5Q² + 25Q + 180, berapa optimum output ?</h2>

            <button id='benarSoalAbuabu6' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu6' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu6' class="x_content">
            <h2>Jawaban:</h2></br>
            AC = MC</br>
            (5Q² + 25Q + 180)/ Q = 10Q + 25</br>
            5Q² + 25Q + 180 = 10Q² + 25Q</br>
            5Q² = 180</br>
            Q² = 36</br>
            Q = 6 <b>(optimum output)</b>
        </div>

        <div id='soalAbuabu7' class="x_content" align="justify">
            <h2>Besarnya tarif Bea Meterai untuk cek dan bilyet giro dengan nilai nominal berapapun yang tertulis adalah Rp 3.000,- merupakan implementasi pengenaan tarif pajak ?</h2>

            <button id='benarSoalAbuabu7' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu7' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu7' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Tarif Tetap</h2>
        </div>

        <div id='soalAbuabu8' class="x_content" align="justify">
            <h2>Bank Hena membayar uang sewa bangunan selama setahun senilai Rp 200.000.000 kepada Pak Budi yang tidak memiliki NPWP pada tanggal 20 Maret 2015. PPh yang dikenakan atas transaksi tersebut adalah sebesar ?</h2>

            <button id='benarSoalAbuabu8' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu8' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanAbuabu8' class="x_content">
            <h2>Jawaban:</h2></br>
            PPh4(2) = 10% x Rp 200.000.000 = <b>Rp 20.000.000</b>
        </div>

        <div id='soalAbuabu9' class="x_content" align="justify">
            <h2>Suatu dokumen yang mencerminkan janji seseorang/ perusahaan untuk membayar sejumlah uang kepada pihak tertentu dinamakan ?</h2>

            <button id='benarSoalAbuabu9' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalAbuabu9' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
            <div id='jawabanAbuabu9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>wesel bayar</h2>
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

// soal no 1
      var soal1Clck = 0;
    $(document).ready(function(){
        $('#abuabu1').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu1').show();
            soal1Clck++;
            if(soal1Clck == 2){
                $('#abuabu1').css('background-color','#ecf0f1');
           }            
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu1').click(function(){
            $('#jawabanAbuabu1').show();
            $('#abuabu1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu1').click(function(){
            $('#soalAbuabu1').hide();
            $('#jawabanAbuabu1').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalAbuabu1').hide();
            $('#jawabanAbuabu1').hide();
            $('#round1Abuabu').show();
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#abuabu2').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu2').show();
            soal2Clck++;
            if(soal2Clck == 2){
                $('#abuabu2').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu2').click(function(){
            $('#jawabanAbuabu2').show();
            $('#abuabu2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu2').click(function(){
            $('#soalAbuabu2').hide();
            $('#jawabanAbuabu2').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalAbuabu2').hide();
            $('#jawabanAbuabu2').hide();
            $('#round1Abuabu').show();
        });
    });

// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#abuabu3').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu3').show();
            soal3Clck++;
            if(soal3Clck == 2){
                $('#abuabu3').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu3').click(function(){
            $('#jawabanAbuabu3').show();
            $('#abuabu3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu3').click(function(){
            $('#soalAbuabu3').hide();
            $('#jawabanAbuabu3').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalAbuabu3').hide();
            $('#jawabanAbuabu3').hide();
            $('#round1Abuabu').show();
        });
    });


// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#abuabu4').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu4').show();
            soal4Clck++;
            if(soal4Clck == 2){
                $('#abuabu4').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu4').click(function(){
            $('#jawabanAbuabu4').show();
            $('#abuabu4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu4').click(function(){
            $('#soalAbuabu4').hide();
            $('#jawabanAbuabu4').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalAbuabu4').hide();
            $('#jawabanAbuabu4').hide();
            $('#round1Abuabu').show();
        });
    });


// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#abuabu5').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu5').show();
            soal5Clck++;
            if(soal5Clck == 2){
                $('#abuabu5').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu5').click(function(){
            $('#jawabanAbuabu5').show();
            $('#abuabu5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu5').click(function(){
            $('#soalAbuabu5').hide();
            $('#jawabanAbuabu5').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalAbuabu5').hide();
            $('#jawabanAbuabu5').hide();
            $('#round1Abuabu').show();
        });
    });

// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#abuabu6').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu6').show();
            soal6Clck++;
            if(soal6Clck == 2){
                $('#abuabu6').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu6').click(function(){
            $('#jawabanAbuabu6').show();
            $('#abuabu6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu6').click(function(){
            $('#soalAbuabu6').hide();
            $('#jawabanAbuabu6').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalAbuabu6').hide();
            $('#jawabanAbuabu6').hide();
            $('#round1Abuabu').show();
        });
    });


// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#abuabu7').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu7').show();
            soal7Clck++;
            if(soal7Clck == 2){
                $('#abuabu7').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu7').click(function(){
            $('#jawabanAbuabu7').show();
            $('#abuabu7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu7').click(function(){
            $('#soalAbuabu7').hide();
            $('#jawabanAbuabu7').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalAbuabu7').hide();
            $('#jawabanAbuabu7').hide();
            $('#round1Abuabu').show();
        });
    });

// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#abuabu8').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu8').show();
            soal8Clck++;
            if(soal8Clck == 2){
                $('abuabu8').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu8').click(function(){
            $('#jawabanAbuabu8').show();
            $('abuabu8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('abuabu8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu8').click(function(){
            $('#soalAbuabu8').hide();
            $('#jawabanAbuabu8').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalAbuabu8').hide();
            $('#jawabanAbuabu8').hide();
            $('#round1Abuabu').show();
        });
    });

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#abuabu9').click(function(){
            alert('goJek');
            $('#round1Abuabu').hide();
            $('#soalAbuabu9').show();
            soal9Clck++;
            if(soal9Clck == 2){
                $('#abuabu9').css('background-color','#ecf0f1');
           }     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalAbuabu9').click(function(){
            $('#jawabanAbuabu9').show();
            $('#abuabu9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#abuabu9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalAbuabu9').click(function(){
            $('#soalAbuabu9').hide();
            $('#jawabanAbuabu9').hide();
            $('#round1Abuabu').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#simpanScore').hide();
            $('#jawabanAbuabu9').hide();
            $('#round1Abuabu').show();
        });
    });

// post method
    $('#document').ready(function(){
        $('#scoreAbuabu').click(function(){
            $('#jam').hide();
            $('#round1Abuabu').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreAbuabu').text();
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
            
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round1Abuabu').show();
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