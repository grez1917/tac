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

    <div id='round1Hijau'>
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
            <h2>Jika perusahaan memiliki aset dengan cost sebesar $ 20.000. Aset tersebut didepreasiasi dengan metode garis lurus dengan tarif 10% dengan nilai sisa $ 5.000, maka jumlah depresiasi per tahun sebesar?</h2>
            
            <button id='benarSoalHijau1' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau1' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau1' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>$ 1500</h2>
        </div>

        <div id='soalHijau2' class="x_content" align="justify">
            <h2>Daftar transaksi persediaan barang dagang PT Aldo selama bulan Januari</h2></br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Transaksi</th>
                        <th>Jumlah Unit</th>
                        <th>Biaya/unit</th>
                        <th>Jumlah Biaya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1 Jan</th>
                        <td>Persediaan awal</td>
                        <td>5</td>
                        <td>Rp 40</td>
                        <td>Rp 200</td>
                    </tr>
                    <tr>
                        <th scope="row">3 Jan</th>
                        <td>Pembelian</td>
                        <td>3</td>
                        <td>Rp 45</td>
                        <td>RP 135</td>
                    </tr>
                    <tr>
                        <th scope="row">5 Jan</th>
                        <td>Menjual 4 unit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <h2>Hitunglah biaya persediaan dan total persediaan akhir per 31 Januari dengan menggunakan sistem persediaan perpetual dengan metode FIFO!</h2>
            <button id='benarSoalHijau2' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau2' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau2' class="x_content">
            <h2>Jawaban:</h2></br>
            Biaya Penjualan : Rp 160 </br>
            Persediaan Akhir : Rp 175
        </div>

        <div id='soalHijau3' class="x_content" align="justify">
            <h2>Generally Accepted Accounting Principles (GAAP) allow some debt and equity securities to be valued in the accounting records and financial statements at their fair market values. In contrast, GAAP requires tangible assets such as property, plant, and equipment to be valued and reported at their net book values (cost less accumulated depreciation). For purpose of valuing and reporting , debt and equity securities are classified as ... , ... , and ...</h2>
            <button id='benarSoalHijau3' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau3' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Trading securities, Available for sale securities, and Held to maturity securities</h2>
        </div>

        <div id='soalHijau4' class="x_content" align="justify">
            <h2>Aikman (beginning capital, $60,000) and Rory (beginning capital, $90,000) are partners. During 2012, the partnership earned net income of $70,000, and Aikman made drawings of $18,000 while Rory made drawings of $24,000, Assume the partnership income-sharing agreement calls for income to be divided with a salary of $40,000 to Aikman and $35,000 to Rory, interest of 10% on beginning capital, and the remainder divided 50%–50%. compute the partners’ ending capital balances under this assumption!</h2>
            <button id='benarSoalHijau4' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau4' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau4' class="x_content">
            <h2>Jawaban:</h2></br>
            Aikman = 40,000 + 6000 - 50%(20,000) = 36,000</br>
            Rory = 35,000+9000- 50%(20,000) = 34,000
            <h2>Ending balance</h2>
            Aikwan = 60,000 -18,000+36,000 = 78,000</br>
            Rory = 90,000-24,000+34,000= 100,000
        </div>

        <div id='soalHijau5' class="x_content" align="justify">
            <h2>Jika diketahui pendapatan nasional sebesar Rp 6 Triliyun, pajak sebesar Rp 2 Triliyun, tabungan private sebesar Rp 0,2 Triliyun dan tabungan publik sebesar Rp 0,1 Triliyun. Hitunglah berapa konsumsi, pengeluaran pemerintah, dan tabungan nasional!</h2>
            <button id='benarSoalHijau5' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau5' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau5' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>•   Private saving = Y – T – C</h2>
                    0,2 = 6 – 2 – C</br>
                    C (konsumsi)    = 3,8</br>
            <h2>•   Public saving = T – G</h2>
                    0,1 = 2 – G</br>
                    G (pengeluaran pemerintah)  = 2 – 0,1 = 1,9</br>
            <h2>•   National saving (tabungan nasional)= public saving + private saving</h2>
                    = 0,2 + 0,1</br>
                    = 0,3

        </div>

        <div id='soalHijau6' class="x_content" align="justify">
            <h2>Diketahui fungsi permintaan : P = 2500 – Q, bila terjadi Point Elasticity (Ep) adalah unitary elastis hal tersebut akan terjadi pada tingkat harga?</h2>
            <button id='benarSoalHijau6' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau6' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau6' class="x_content">
            <h2>Jawaban:</h2></br>
                E= dQ/dP  x  P1/Q1 (unitary elastis = E = 1)</br>
                P=Q</br>
                P+Q = 2500</br>
                P = 1250</br>
        </div>

        <div id='soalHijau7' class="x_content" align="justify">
            <h2>Airlangga Utomo bekerja pada PT Aksi Pratama dengan memperoleh gaji Rp 2.000.000 setiap bulannya. Airlangga Utomo telah menikah dan memiliki 2 orang anak. Iuran pensiun yang dibayar oleh Airlangga Utomo sebesar Rp 30.000 setiap bulannya. Perusahaan menggenakan biaya jabatan sebesar 5% dari setiap bulan. Dimana Airlangga Utomo melaporkan PPh pasal 21 setiap bulannya?</h2>
            <button id='benarSoalHijau7' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau7' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau7' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Melaporkan PPh pasal 21 setiap bulannya di KPP (Kantor Pelayanan Pajak) yang telah ditentukan oleh PT Aksi Pratama</h2>
        </div>

        <div id='soalHijau8' class="x_content" align="justify">
            <h2>PT Samanindo  tanggal 20 Maret 2015 memberikan hadiah kepada PT Abadi berupa mobil senilai Rp 200.000.000 atas kontribusinya sebagai distributor berprestasi. Keduanya memiliki NPWP. PPh yang dikenakan atas transaksi tersebut adalah sebesar?</h2>
            <button id='benarSoalHijau8' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau8' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>PPh 23 = 15% x Rp 200.000.000 = Rp 30.000.000</h2>
        </div>

        <div id='soalHijau9' class="x_content" align="justify">
            <h2>Direktur utama PT TAC membuat keputusan untuk melakukan leasing (sewa guna) tanpa hak opsi terhadap 10 mobil box untuk kepentingan operasional perusahaan. Yang menjadi dasar keputusan tersebut adalah perusahaan tidak memiliki kas yang cukup untuk membeli 10 mobil box secara langsung, sehingga sewa secara leasing dianggap sebagai pilihan yang tepat. Mobil box tersebut nantinya akan digunakan untuk pengiriman barang dagang setiap harinya.</h2></br>
            <h2>Sebagai akuntan PT TAC, apakah status 10 mobil box yang disewa dicatat sebagai Aset Tetap perusahaan atau tidak?</h2>
            <button id='benarSoalHijau9' type="submit" class="btn btn-success">Benar</button>
            <button id='salahSoalHijau9' type="submit" class="btn btn-primary">Salah</button>
            <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanHijau9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Bukan Aset Tetap PT TAC, </h2>karena hanya disewa dan digunakan namun tidak dimiliki.
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
            $('#round1Hijau').hide();
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
            $('#hijau2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau1').click(function(){
            $('#soalHijau1').hide();
            $('#jawabanHijau1').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalHijau1').hide();
            $('#jawabanHijau1').hide();
            $('#round1Hijau').show();
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#hijau2').click(function(){
            alert('goJek');
            $('#round1Hijau').hide();
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
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau2').click(function(){
            $('#soalHijau2').hide();
            $('#jawabanHijau2').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalHijau2').hide();
            $('#jawabanHijau2').hide();
            $('#round1Hijau').show();
        });
    });

// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#hijau3').click(function(){
            alert('goJek');
            $('#round1Hijau').hide();
            $('#soalHijau3').show();
            soal3Clck++;
            if(soal3Clck == 2){
            $('#hijau3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#hijau3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
           }               
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau3').click(function(){
            $('#jawabanHijau3').show();
            $('#hijau3').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau3').click(function(){
            $('#soalHijau3').hide();
            $('#jawabanHijau3').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalHijau3').hide();
            $('#jawabanHijau3').hide();
            $('#round1Hijau').show();
        });
    });

// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#hijau4').click(function(){
            alert('goJek');
            $('#round1Hijau').hide();
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
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau4').click(function(){
            $('#soalHijau4').hide();
            $('#jawabanHijau4').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalHijau4').hide();
            $('#jawabanHijau4').hide();
            $('#round1Hijau').show();
        });
    });

// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#hijau5').click(function(){
            alert('goJek');
            $('#round1Hijau').hide();
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
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau5').click(function(){
            $('#soalHijau5').hide();
            $('#jawabanHijau5').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalHijau5').hide();
            $('#jawabanHijau5').hide();
            $('#round1Hijau').show();
        });
    });

// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#hijau6').click(function(){
            alert('goJek');
            $('#round1Hijau').hide();
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
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau6').click(function(){
            $('#soalHijau6').hide();
            $('#jawabanHijau6').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalHijau6').hide();
            $('#jawabanHijau6').hide();
            $('#round1Hijau').show();
        });
    });

// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#hijau7').click(function(){
            alert('goJek');
            $('#round1Hijau').hide();
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
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
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
            $('#round1Hijau').hide();
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
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau8').click(function(){
            $('#soalHijau8').hide();
            $('#jawabanHijau8').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalHijau8').hide();
            $('#jawabanHijau8').hide();
            $('#round1Hijau').show();
        });
    });

// soal no 9
    var soal9Clck = 0;
    $(document).ready(function(){
        $('#hijau9').click(function(){
            alert('goJek');
            $('#round1Hijau').hide();
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
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalHijau9').click(function(){
            $('#soalHijau9').hide();
            $('#jawabanHijau9').hide();
            $('#round1Hijau').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalHijau9').hide();
            $('#jawabanHijau9').hide();
            $('#round1Hijau').show();
        });
    });
// post method
    $('#document').ready(function(){
        $('#scoreHijau').click(function(){
            $('#jam').hide();
            $('#round1Hijau').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreHijau').text();
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
            
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#jam').show();
            $('#round1Hijau').show();
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