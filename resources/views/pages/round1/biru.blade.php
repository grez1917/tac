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

    <div id='round1Biru'>
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
            <h2>Tn.Doni dan Nn. Ani adalah pemilik dari CV. Makmur. Pada 1 Agustus 2014 diketahui bahwa Tn.Doni, melakukan tambahan modal berupa uang kas sebesar Rp 5.500.000 dan komputer senilai Rp 4.000.000. Pada akhir bulan Agustus 2014, diketahui bahwa modal Tn.Doni yang tercatat sebelum prive sebesar Rp 1.000.000 pada tanggal 10 Agustus 2014 adalah Rp 10.000.000. Maka hitunglah nilai modal Tn. Doni pada tanggal 31 Juli 2014. </h2>
                <button id='benarSoalBiru1' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru1' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru1' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Rp 500.000</h2>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Modal akhir</th>
                        <td>= Modal awal + tambahan investasi – Prive </td>
                    </tr>
                    <tr>
                        <th scope="row">10.000.000</th>
                        <td>= Modal awal + (5.500.000 + 4.000.000) - 0</td>
                    </tr>
                    <tr>
                        <th scope="row">Sales</th>
                        <td>= 10.000.000 – 9.500.000 = 500.000 </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soalBiru2' class="x_content" align="justify">
            <h2>Buatlah jurnal transaksi dibawah ini secara periodik dan perpetual!</br>
                1 Jan   Membeli barang secara kredit senilai Rp10.000.000 dengan syarat 2/10, n/30
            </h2>
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
                        <th scope="row">Periodik    1 Jan</th>
                        <td>Pembelian</td>
                        <td>10.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Hutang Usaha</td>
                        <td>10.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Perpetual    1 Jan</th>
                        <td>Persediaan</td>
                        <td>10.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Hutang Usaha</td>
                        <td>10.000.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soalBiru3' class="x_content" align="justify">
            <h2>Ada dua metode dalam  menganalisis laporan keuangan yaitu analisis horizontal dan analisis vertikal. Analisis horizontal merupakan suatu teknik untuk mengevaluasi serangkaian data laporan keuangan selama periode tertentu dan melakukan penelitian dalam laporan keuangan komparatif. Sedangkan analisis vertikal merupakan teknik yang digunakan untuk mengevaluasi data laporan keuangan yang menggambarkan setiap pos dalam laporan keuangan dari segi persentase dan jumlah rupiah. Analisis Horizontal disebut juga analisis?</h2>
                <button id='benarSoalBiru3' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru3' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Tren / Trend analysis</h2>
        </div>

        <div id='soalBiru4' class="x_content" align="justify">
            <h2>Tuan Airlangga dan Tuan Dharmawangsa mendirikan suatu persekutuan baru. Tuan Airlangga memberikan kontribusi berupa uang tunai sebesar $8,000 dan sebuah truk yang memiliki harga perolehan $35,000 dengan akumulasi penyusutan sebesar $15,000. Fair value truk sebesar $16,000. Sedangkan tuan Dharmawangsa membangun sebuah gudang sebagai wujud kontribusinya. Biaya konstruksi gudang tersebut adalah sebesar $45,000 dan gudang itu memiliki fair value sebesar $55,000. Jadi berapakah total modal yang dicatat dalam jurnal pendirian persekutuan?</h2>
                <button id='benarSoalBiru4' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru4' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>        
        </div>
        <div id='jawabanBiru4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>79.000</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Tuan Airlangga </th>
                        <td>= 8.000 + 16.000 = 24.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Tuan Dharmawangsa </th>
                        <td>= 55.000</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>Total 79.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soalBiru5' class="x_content" align="justify">
            <h2>Anggaplah bahwa warga Mexico menghabiskan semua pendapatan mereka untuk membeli brokoli, kentang, dan wortel. Pada tahun 2008 mereka membeli 100 brokoli seharga $200, 50 kentang seharga $75, dan 500 wortel seharga $50. Pada tahun 2009 mereka membeli 75 brokoli seharga $225, 80 kentang seharga $120, dan 500 wortel seharga $100.</br>
                Jika tahun pokoknya adalah 2008, maka berapakah Indeks Harga Konsumen (IHK) pada kedua tahun tersebut? 
            </h2>
                <button id='benarSoalBiru5' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru5' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru5' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>Harga setiap barang pada tiap-tiap tahun:</td>
                    </tr>
                    <tr>
                        <td>2008 [1 brokoli = $200/100 = $2]; [1 kentang = $75/50 = $1,5]; [1 wortel = $50/500 = $0,1] 2009 [1 brokoli = $225/75 = $3]; [1 kentang = $120/80 = $1,5]; [1 wortel = $100/500 = $0,2]</br></td>
                    </tr>
                    <tr>
                        <td>Harga keseluruhan isi keranjang tiap tahun:</td>
                    </tr>
                    <tr>
                        <td>2008 = $2 + $1,5 + $0,1 = $3,6</br>
                            2009 = $3 + $1,5 + $0,2 = $4,7</td>
                    </tr>
                    <tr>
                        <td>Jadi, perhitungan IHK 2008-2009 dan laju inflasi 2009 sbg berikut:</td>
                    </tr>
                    <tr>
                        <td>HK 2008 = ($3,6/$3,6) X 100 = 100</br>
                            IHK 2008 = ($4,7/$3,6) X 100 = 130</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soalBiru6' class="x_content" align="justify">
            <h2>Barang X dan barang Y mempunyai hubungan substitusi, bila harga barang X per unit naik dari Rp 1000 menjadi Rp 1500 maka jumlah barang Y yang diminta naik dari 1000 unit menjadi 1500 unit, maka besarnya cross elasticity?</h2>
                <button id='benarSoalBiru6' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru6' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru6' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>E=ΔQ/ΔP  x  P1/Q1 = +1</h2></br>
        </div>

        <div id='soalBiru7' class="x_content" align="justify">
            <h2>Bapak Satria adalah wajib pajak orang pribadi. Untuk tahun 2011 telah terhutang PPh sebesar Rp.5.000.000,00. Selama tahun tersebut, Bapak Satria telah membayar PPh terhutang sejumlah Rp.2.000.000,00. Bapak Satria baru membayar PPh kurang bayar pada tanggal 5 Juli 2010, sekaligus menyampaikan Surat Pemberitahuan Tahunan pajak. Kapan batas waktu maksimal untuk penyampaian surat pemberitahuan?</h2>
                <button id='benarSoalBiru7' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru7' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru7' class="x_content">
            <h2>Jawaban:</h2></br>
            Batas waktu maksimal untuk Surat Pemberitahuan Pajak orang pribadi,
            <h2>paling lama 3(tiga) bulan setelah akhir tahun pajak</h2></br>
        </div>

        <div id='soalBiru8' class="x_content" align="justify">
            <h2>Tanggal 17 Februari 2011 membeli bahan olahan karet dari Tuan Eko, yang ber-NPWP (membeli hasil karet dari petani karet) senilai Rp. 100 juta. Berapakah PPh Pasal 22 yang harus dipungut oleh PT Rubber?</h2>
                <button id='benarSoalBiru8' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru8' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>0,25% x Rp. 100 juta = Rp. 250.000,-</h2></br>
        </div>

        <div id='soalBiru9' class="x_content" align="justify">
            <h2>PT TAC sebagai perusahaan yang bergerak dalambidang jasa logistik memiliki 2 aset dengan spesifikasi dan informasi sebagai berikut:</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Spesifikasi</th>
                        <th>Spidol Boardmarker</th>
                        <th>Meja dan Kursi Pegawai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sifat akun</td>
                        <td>?</td>
                        <td>?</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Kuantitas</td>
                        <td>50 buah</td>
                        <td>10 buah</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Harga Total</td>
                        <td>Rp 150.000</td>
                        <td>Rp 50.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Fungsi</td>
                        <td>Administratif</td>
                        <td>Administratif</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Masa manfaat</td>
                        <td>Persediaan Spidol untuk 2 tahun</td>
                        <td>5 tahun</td>
                    </tr>
                </tbody>
            </table>
            <h2>Sebagai akuntan PT TAC Anda diminta untuk menjelaskan kepada Direktur Keuangan, manakah antara Spidol Boardmarker dan Meja & Kursi Pegawai yang tergolong aset tetap?</h2>
                <button id='benarSoalBiru9' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalBiru9' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanBiru9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Meja dan Kursi Pegawai</h2></br>
            Meja & Kursi Pegawai termasuk aset tetap karena memenuhi 3 kriteria yang sesuai PSAK 16 tentang Aset Tetap. Spidol Boardmarker tidak memenuhi kriteria signifikan karena jumlah dan harga totalnya relatif kecil dibanding aset lainnya. Serta masa manfaat 1 Spidol Boardmarker yang kemungkinan tidak lebih dari 1 tahun. Oleh karena itu, Spidol Boardmarker lebih tepat digolongkan sebagai Persediaan Habis Pakai.
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

// soal no 1
      var soal1Clck = 0;
    $(document).ready(function(){
        $('#biru1').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru1').show();
            soal1Clck++;
            if(soal1Clck == 2){
                $('#biru1').css('background-color','#ecf0f1');
           }              
           else if (soal1Clck == 3)  {
            // alert(soal1Clck);
                $('#soalBiru1').remove();
                $('#round1Biru').show(); 
           }             
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru1').click(function(){
            $('#jawabanBiru1').show();
            $('#biru1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round1Biru').show();
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#biru2').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru2').show();
            soal2Clck++;
            if(soal2Clck == 2){
                $('#biru2').css('background-color','#ecf0f1');
           }            
           else if (soal2Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru2').remove();
                $('#round1Biru').show(); 
           }             
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru2').click(function(){
            $('#jawabanBiru2').show();
            $('#biru2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round1Biru').show();
        });
    });

// soal no 3
      var soal3Clck = 0;
    $(document).ready(function(){
        $('#biru3').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru3').show();
            soal3Clck++;
            if(soal3Clck == 2){
                $('#biru3').css('background-color','#ecf0f1');
           }            
           else if (soal3Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru3').remove();
                $('#round1Biru').show(); 
           }             
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru3').click(function(){
            $('#jawabanBiru3').show();
            $('#biru3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round1Biru').show();
        });
    });

// soal no 4
      var soal4Clck = 0;
    $(document).ready(function(){
        $('#biru4').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru4').show();
            soal4Clck++;
            if(soal4Clck == 2){
                $('#biru4').css('background-color','#ecf0f1');
           }            
           else if (soal4Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru4').remove();
                $('#round1Biru').show(); 
           }             
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru4').click(function(){
            $('#jawabanBiru4').show();
            $('#biru4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round1Biru').show();
        });
    });

// soal no 5
      var soal5Clck = 0;
    $(document).ready(function(){
        $('#biru5').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru5').show();
            soal5Clck++;
            if(soal5Clck == 2){
                $('#biru5').css('background-color','#ecf0f1');
           }            
           else if (soal5Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru5').remove();
                $('#round1Biru').show(); 
           }              
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru5').click(function(){
            $('#jawabanBiru5').show();
            $('#biru5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round1Biru').show();
        });
    });

// soal no 6
      var soal6Clck = 0;
    $(document).ready(function(){
        $('#biru6').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru6').show();
            soal6Clck++;
            if(soal6Clck == 2){
                $('#biru6').css('background-color','#ecf0f1');
           }            
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru6').remove();
                $('#round1Biru').show(); 
           }              
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru6').click(function(){
            $('#jawabanBiru6').show();
            $('#biru6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round1Biru').show();
        });
    });

// soal no 7
      var soal7Clck = 0;
    $(document).ready(function(){
        $('#biru7').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru7').show();
            soal7Clck++;
            if(soal7Clck == 2){
                $('#biru7').css('background-color','#ecf0f1');
           }            
           else if (soal7Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru7').remove();
                $('#round1Biru').show(); 
           }              
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru7').click(function(){
            $('#jawabanBiru7').show();
            $('#biru7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round1Biru').show();
        });
    });

// soal no 8
      var soal8Clck = 0;
    $(document).ready(function(){
        $('#biru8').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru8').show();
            soal8Clck++;
            if(soal8Clck == 2){
                $('#biru8').css('background-color','#ecf0f1');
           }     
           else if (soal8Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru8').remove();
                $('#round1Biru').show(); 
           }                     
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru8').click(function(){
            $('#jawabanBiru8').show();
            $('#biru8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round1Biru').show();
        });
    });
// soal no 9
      var soal9Clck = 0;
    $(document).ready(function(){
        $('#biru9').click(function(){
            // alert('goJek');
            $('#round1Biru').hide();
            $('#soalBiru9').show();
            soal9Clck++;
            if(soal9Clck == 2){
                $('#biru9').css('background-color','#ecf0f1');
           }            
           else if (soal9Clck >= 3)  {
            // alert(soal1Clck);
                $('#soalBiru9').remove();
                $('#round1Biru').show(); 
           }              
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru9').click(function(){
            $('#jawabanBiru9').show();
            $('#biru9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(scoreBoard);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round1Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round1Biru').show();
        });
    });

// post method
    $('#document').ready(function(){
        $('#scoreBiru').click(function(){
            $('#jam').hide();
            $('#round1Biru').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreBiru').text();
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
            
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#jam').show();
            $('#round1Biru').show();
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