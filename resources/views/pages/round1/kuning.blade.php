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
        <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
            <div class="left"></div>
            <div class="right">
                <div id="clock1" style="margin:2em;"></div>
            </div>
        </div>                   

    <div id='round1Kuning'>
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
            <h2>On April 15, Hass Corporation a wholesaler of hydraulic lifts acquired land in exchange for 17,500 shares of $20 par common stock with a current market price of $30. So the value of the common stock is?</h2>
            
            <button id='benarSoalKuning1' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning1' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning1' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>$ 350,000</h2>
        </div>

        <div id='soalKuning2' class="x_content" align="justify">
            <h2>Apabila perkiraan “Perlengkapan” sebelum penyesuaian pada akhir suatu periode menyebutkan adanya saldo sebesar Rp. 150.000, sedangkan pada saat itu persediaan perlengkapan masih ada seharga Rp. 30.000, maka ayat jurnal penyesuaiannya adalah?</h2>

            <button id='benarSoalKuning2' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning2' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>        
        <div id='jawabanKuning2' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2> Beban perlengkapan     Rp 120.000 </h2></br>
            <h2> Beban perlengkapan     Rp 120.000 </h2>
        </div>

        <div id='soalKuning3' class="x_content" align="justify">
            <h2>Tujuan dari cost accounting system adalah mengakumulasi product cost. Product cost information digunakan manajer untuk menentukan harga jual produk, mengontrol operasi, dan mengembangkan laporan keuangan. Ada dua tipe cost accounting system yaitu job order cost system dan process cost system. Bagaimana cara manajer mendapatkan nilai COGM (Cost Of Goods Manufactured) ?</h2>

            <button id='benarSoalKuning3' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning3' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2> COGM = Barang dalam proses awal + Biaya Bahan Baku + Biaya Tenaga Kerja Langsung + Biaya Overhead – Barang dalam proses akhir</h2></br>
        </div>

        <div id='soalKuning4' class="x_content" align="justify">
            <h2>Percy Jackson Corporation has outstanding at December 31, 2015, 50,000 shares of $20 par value, cumulative, 8% preferred stock and 200,000 shares of $5 par value common stock. All shares were outstanding the entire year. During 2015, Percy Jackson earned total revenues of $2,000,000 and incurred total expenses (except income taxes) of $1,200,000. Percy Jackson’s income tax rate is 30%.Compute Percy Jackson’s 2015 earnings per share!</h2>

            <button id='benarSoalKuning4' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning4' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning4' class="x_content">
            <h2>Jawaban:</h2></br>
            Net Income = $2,000,000-$1,200,000 = $800,000</br>
                        $800,000-30%(800,000) = 560,000</br>
            Preferred dividend = 50,000 x $20 x 8% = $80,000</br>
            Average common stock outstanding = 200,000 share</br>
            Earnings per share = (560,000 - 80,000)/200,000 = <h2>$2.40</h2>
        </div>

        <div id='soalKuning5' class="x_content" align="justify">
            <h2>Anggaplah real GDP suatu negara adalah $200 milyar dan jumlah penduduknya sebanyak 50 juta. Jika baik real GDP maupun jumlah penduduk meningkat 10%, maka setelah perubahan tersebut per kapita real output sebesar?</h2>

            <button id='benarSoalKuning5' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning5' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning5' class="x_content">
            <h2>Jawaban:</h2></br>
                GDP = 200 Milyar x 10% = 20 Milyar</br>
                Penduduk = 50 juta x 10% = 5 juta</br>

            Per kapita real output =  (200 milyar + 20 milyar)/(50 juta + 5 juta) = <b2>$4000</b2>
        </div>

        <div id='soalKuning6' class="x_content" align="justify">
            <h2>Bila persamaan Q1 = -20 + 0,5 P berubah menjadi Q2 = -25 + 0,5P, ini berarti kurva bergeser ke ?</h2>

            <button id='benarSoalKuning6' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning6' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning6' class="x_content">
            <h2>Jawaban:</h2></br>
            Kurva <b>penawaran</b> bergeser ke <b>kiri</b>
        </div>

        <div id='soalKuning7' class="x_content" align="justify">
            <h2>Fungsi pajak sebagai sumber dana bagi pemerintah untuk membiayai pengeluaran negara adalah ?</h2>

            <button id='benarSoalKuning7' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning7' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning7' class="x_content">
            <h2>Jawaban:</h2></br>
            <b>Fungsi budgetair</b>
        </div>

        <div id='soalKuning8' class="x_content" align="justify">
            <h2>Penjualan WP OP Pak Amir tahun 2013 : 4.000.000.000,</br> 
                HPP : 2.760.000.000</br>
                Biaya umum dan administrasi : 987.000.000</br></br>
                Pak Amir menikah pada tanggal 20 Februari 2012, dan istrinya bekerja sebagai karyawan swasta, melahirkan putri kembar yaitu Ani dan Ana pada tanggal 12 Juli 2013. Pak Amir juga menanggung ayahnya yang mendapat uang pensiun bulanan. Berapa PPh terutang tahun 2013 ?
            </h2>
  
            <button id='benarSoalKuning8' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning8' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning8' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Penjualan </th>
                        <td>4.000.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">HPP</th>
                        <td>(2.760.000.000)</td>
                    </tr>
                    <tr>
                        <th scope="row">Biaya umum </th>
                        <td><u>(987.000.000)</u></td>
                    </tr>
                    <tr>
                        <th scope="row">Laba </th>
                        <td>253.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">PTKP </th>
                        <td><u>(26.325.000)</u></td>
                    </tr>
                    <tr>
                        <th scope="row">PKP </th>
                        <td>226.675.000</td>
                    </tr>
                    <tr>
                        <th scope="row">PPH terutang = </th>
                        <td></td>
                    </tr>    
                    <tr>
                        <th scope="row">5% x 50.000.000</th>
                        <td>2.500.000</td>
                    </tr>   
                    <tr>
                        <th scope="row">15% x 176.675.000</th>
                        <td><u>26.501.250</u></td>
                    </tr>                                                                                
                    <tr>
                        <th scope="row"></th>
                        <td><b>29.001.250</b></td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div id='soalKuning9' class="x_content" align="justify">
            <h2>Terdapat tiga kondisi dalam penerbitan obligasi salah satunya yaitu apabila market rate lebih besar daripada contract rate maka obligasi diterbitkan dalam keadaan ?</h2>

            <button id='benarSoalKuning9' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalKuning9' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanKuning9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>diskon</h2>
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
            $('#round1Kuning').hide();
            $('#soalKuning1').show();
            soal1Clck++;
            if(soal1Clck == 2){
                $('#kuning1').css('background-color','#ecf0f1');
           } 
           else if (soal1Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning1').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning1').click(function(){
            $('#soalKuning1').hide();
            $('#jawabanKuning1').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalKuning1').hide();
            $('#jawabanKuning1').hide();
            $('#round1Kuning').show();
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#kuning2').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning2').show();
            soal2Clck++;
            if(soal2Clck == 2){
                $('#kuning2').css('background-color','#ecf0f1');                  
           }   
           else if (soal2Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning2').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning2').click(function(){
            $('#soalKuning2').hide();
            $('#jawabanKuning2').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalKuning2').hide();
            $('#jawabanKuning2').hide();
            $('#round1Kuning').show();
        });
    });


// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#kuning3').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning3').show();
            soal3Clck++;
            if(soal3Clck == 2){
                $('#kuning3').css('background-color','#ecf0f1');                
           } 
           else if (soal3Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning3').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning3').click(function(){
            $('#soalKuning3').hide();
            $('#jawabanKuning3').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalKuning3').hide();
            $('#jawabanKuning3').hide();
            $('#round1Kuning').show();
        });
    });


// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#kuning4').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning4').show();
            soal4Clck++;
            if(soal4Clck == 2){
                $('#kuning4').css('background-color','#ecf0f1');
           }         
           else if (soal4Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning4').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning4').click(function(){
            $('#soalKuning4').hide();
            $('#jawabanKuning4').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalKuning4').hide();
            $('#jawabanKuning4').hide();
            $('#round1Kuning').show();
        });
    });

// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#kuning5').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning5').show();
            soal5Clck++;
            if(soal5Clck == 2){
                $('#kuning5').css('background-color','#ecf0f1');
           }              
           else if (soal5Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning5').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning5').click(function(){
            $('#soalKuning5').hide();
            $('#jawabanKuning5').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalKuning5').hide();
            $('#jawabanKuning5').hide();
            $('#round1Kuning').show();
        });
    });


// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#kuning6').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning6').show();
            soal6Clck++;
            if(soal6Clck == 2){
                $('#kuning6').css('background-color','#ecf0f1');
           }              
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning6').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning6').click(function(){
            $('#soalKuning6').hide();
            $('#jawabanKuning6').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalKuning6').hide();
            $('#jawabanKuning6').hide();
            $('#round1Kuning').show();
        });
    });


// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#kuning7').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning7').show();
            soal7Clck++;
            if(soal7Clck == 2){
                $('#kuning7').css('background-color','#ecf0f1');
           }       
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning6').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning7').click(function(){
            $('#soalKuning7').hide();
            $('#jawabanKuning7').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalKuning7').hide();
            $('#jawabanKuning7').hide();
            $('#round1Kuning').show();
        });
    });


// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#kuning8').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning8').show();
            soal8Clck++;
            if(soal8Clck == 2){
                $('#kuning8').css('background-color','#ecf0f1');
           }              
           else if (soal8Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning8').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning8').click(function(){
            $('#soalKuning8').hide();
            $('#jawabanKuning8').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalKuning8').hide();
            $('#jawabanKuning8').hide();
            $('#round1Kuning').show();
        });
    });

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#kuning9').click(function(){
            alert('goJek');
            $('#round1Kuning').hide();
            $('#soalKuning9').show();
            soal9Clck++;
            if(soal9Clck == 2){
                $('#kuning9').css('background-color','#ecf0f1');
           }             
           else if (soal9Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalKuning9').remove();
                $('#round1Kuning').show(); 
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
            // alert(scoreBoard);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalKuning9').click(function(){
            $('#soalKuning9').hide();
            $('#jawabanKuning9').hide();
            $('#round1Kuning').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalKuning9').hide();
            $('#jawabanKuning9').hide();
            $('#round1Kuning').show();
        });
    });

// post method
    $('#document').ready(function(){
        $('#scoreKuning').click(function(){
            $('#jam').hide();
            $('#round1Kuning').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreKuning').text();
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
            
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
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
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#jam').show();
            $('#round1Kuning').show();
            $('#simpanScore').hide();
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