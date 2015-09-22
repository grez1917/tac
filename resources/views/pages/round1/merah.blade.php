@extends('layouts.full')
@section('content')
<section>
                <!-- top tiles -->
                <div class="row tile_count" align="center">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                            <div class="count"><font color="#c0392b">2500</font></div>
                            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                        </div>
                    </div>
                    
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                            <div class="count"><font color="#2980b9">2,500</font></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                            <div class="count"><font color="#2ecc71">2500</font> </div>
                            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                            <div class="count"><font color="#f1c40f">2135</font></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                            <div class="count"><font color="#7f8c8d">7,135</font></div>
                            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->

    <div id='round1Merah'>
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
        	<h2>Hitunglah nilai yang harus dibayarkan bagi pembeli untuk faktur dibawah ini:</h2></br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Persediaan</th>
                        <th>Ongkir</th>
                        <th>Freight terms</th>
                        <th>Retur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">120.000</th>
                        <td>5.000</td>
                        <td>FOB Shipping point</td>
                        <td>15.000</td>
                    </tr>
                </tbody>
            </table>
                <button id='benarSoalMerah1' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah1' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah1' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Harga Beli Persediaan</th>
                        <td>120.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Biaya Pengiriman</th>
                        <td>5.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Retur Barang</th>
                        <td>15.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Nilai yang harus dibayar</th>
                        <th>110.000</th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soalMerah2' class="x_content" align="justify">
            <h2>1.  Sneijder Co. complete the following selected transaction during March 2015, note: the currency use in US Dollars Mar. 1 The cash sales for the day, according the cash register records totaled $5.400. The actual cash received from cash sales was  $5.700 <b>Make the journal that transaction !</b></h2></br>
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
                        <th scope="row">Cash</th>
                        <td>$ 5.700</td>
                    </tr>
                    <tr>
                        <th scope="row">Cash Short & over</th>
                        <td>$ 300</td>
                    </tr>
                    <tr>
                        <th scope="row">Sales</th>
                        <td>$ 5.400</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soalMerah3' class="x_content" align="justify">
            <h2>Dalam membuat laporan arus kas ada tiga aktivitas yang harus diperhatikan yaitu aktivitas operasi, aktivitas investasi, dan aktivitas pembiayaan. Hal penting lainnya yang harus dipahami dalam membuat laporan arus kas adalah posisi akun, apakah akun tersebut berfungsi menambah nilai kas suatu perusahaan ataupun mengurangi nilai kas suatu perusahaan. Dari ketiga aktivitas tersebut, ada dua metode penghitungan untuk aktivitas operasi yaitu metode langsung dan metode tidak langsung. Dalam metode tidak langsung, pembayaran kas kepada pemasok apabila terjadi kenaikan persediaan maka kas yang dibayarkan kepada pemasok akan semakin?</h2>
                <button id='benarSoalMerah3' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah3' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>TINGGI / NAIK</h2>
        </div>

        <div id='soalMerah4' class="x_content" align="justify">
            <h2>Jika diketahui jumlah penjualan adalah $ 10.000 dengan variable cost sebesar $ 4.000 dan fixed cost sebesar $ 2.000, maka nilai dari contribution margin (total costnya) adalah?</h2>
                <button id='benarSoalMerah4' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah4' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>$ 6.000</h2>
        </div>

        <div id='soalMerah5' class="x_content" align="justify">
            <h2>Dibawah ini adalah komponen pendapatan nasional:</h2>
            <table>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">- Consumption expenditure = 6.400 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Government expenditure = 2.200 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Investment expenditure = 1.200 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Export = 700 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Import = 600 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Depreciation = 250 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Indirect cost = 200 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Personal tax = 20% personal income</th>
                        </tr>
                        <tr>
                            <th scope="row">- Corporate profit tax = 225 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Undistributed corporate profit = 150 milyar</th>
                        </tr>
                        <tr>
                            <th scope="row">- Government transfer payment = 75 milyar</th>
                        </tr>
                    </tbody>
                </table>
              <h2>Dari data tersebut, maka jumlah GDP (Gross Domestic Product) sebesar?</h2>
                <button id='benarSoalMerah5' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah5' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah5' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">GDP</th>
                        <td>= [ consumption expend. + government expend. +  invest expend. + (export-import)]</br>
                            = [6400 + 2200 + 1200 + (700-600)]</br>
                            = 9.900
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div id='soalMerah6' class="x_content" align="justify">
            <h2>Pada konser Iwan Fals dalam rangka penggalangan dana untuk korban Gempa Padang, harga tiket Rp 15.000 dan dihadiri 25.000 penggemar. Dengan konser serupa, panitia menetapkan harga tiket sebesar Rp 17.000 dan dihadiri 24.000 pengemar. Elastisitas harga permintaan konser Iwan Fals adalah sebesar?</h2>
                <button id='benarSoalMerah6' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah6' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah6' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>E=ΔQ/ΔP  x  P1/Q1 = -0,3</h2>
        </div>

        <div id='soalMerah7' class="x_content" align="justify">
            <h2>Suatu sistem pemungutan yang memberi wewenang kepada petugas pajak untuk menentukan besarnya  pajak yang terutang oleh Wajib Pajak disebut?</h2>
                <button id='benarSoalMerah7' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah7' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah7' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Official Assessment System</h2>
        </div>

        <div id='soalMerah8' class="x_content" align="justify">
            <h2>PT Ferara Indonesia sebagai distributor resmi mobil Ferara di Indonesia dan Agen Tunggal Pemegang Merk menjual mobil ferara 4.000cc kepada Pak Yudi dibuktikan dengan faktur penjualan senilai Rp 7 milyar tanggal 26 Mei 2015. Keduanya memiliki NPWP. PPh yang dikenakan atas transaksi tersebut adalah sebesar?</h2>
                <button id='benarSoalMerah8' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah8' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>PPh 22 = (5% x Rp 7.000.000.000) + (0,45% x Rp 7.000.000.000) = Rp 381.500.000</h2>
        </div>

         <div id='soalMerah9' class="x_content" align="justify">
            <h2>PT TAC pada bulan Desember 2015 membutuhkan laporan keuangan untuk mencatat informasi keuangan yang dimiliki perusahaan pada periode tahun 2015. Anda sebagai bagian Akuntansi ditugaskan untuk menyusun laporan neraca (Laporan Posisi Keuangan) PT TAC yang terdiri dari beberapa akun berikut:</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">paten</th>
                            <th>saham Biasa</th>
                        </tr>
                        <tr>
                            <th scope="row">beban pemasaran</th>
                            <th>kas dan Setara Kas</th>
                        </tr>
                        <tr>
                            <th scope="row">tanah</th>
                            <th>akumulasi Penyusutan</th>
                        </tr>
                        <tr>
                            <th scope="row">kepentingan Non-Pengendali</th>
                            <th>saham Preferen</th>
                        </tr>
                        <tr>
                            <th scope="row">hutang Obligasi</th>
                            <th>Asasuransi Dibayar di Muka</th>
                        </tr>
                        <tr>
                            <th scope="row">akumulasi Laba Komprehensif</th>
                            <th>peralatan Pabrik</th>
                        </tr>
                        <tr>
                            <th scope="row">hutang Gaji</th>
                            <th>pendapatan</th>
                        </tr>
                        <tr>
                            <th scope="row">deposito – 6 bulan</th>
                            <th> hutang Dagang</th>
                        </tr>
                    </tbody>
                </table>
        <h2>Susunlah akun-akun yang merupakan asset dari yang paling likuid sampai yang paling tidak likuid</h2>
                <button id='benarSoalMerah9' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoalMerah9' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawabanMerah9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>- Kas dan setara kas</br>
                - Asuransi dibayar dimuka</br>
                - Deposito – 6 bulan</br>
                - Paten</br>
                - Peralatan pabrik</br>
                - Akumulasi penyusutan</br>
                - tanah</br>
            </h2>
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

//soal no1
	$(document).ready(function(){
		$('#merah1').click(function(){
			alert('goJek');
			$('#round1Merah').hide();
			$('#soalMerah1').show();
		});
	});

    $('#document').ready(function(){
        $('#benarSoalMerah1').click(function(){
            $('#jawabanMerah1').show();
            $('#merah1').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah1').click(function(){
            $('#soalMerah1').hide();
            $('#jawabanMerah1').hide();
            $('#round1Merah').show();
        });
    });

	$('#document').ready(function(){
		$('#pilihKembali1').click(function(){
			$('#soalMerah1').hide();
            $('#jawabanMerah1').hide();
			$('#round1Merah').show();
		});
	});

//soal no 2

    $(document).ready(function(){
        $('#merah2').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah2').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah2').click(function(){
            $('#jawabanMerah2').show();
            $('#merah2').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah2').click(function(){
            $('#soalMerah2').hide();
            $('#jawabanMerah2').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalMerah2').hide();
            $('#jawabanMerah2').hide();
            $('#round1Merah').show();
        });
    });

//soal no3
    $(document).ready(function(){
        $('#merah3').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah3').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah3').click(function(){
            $('#jawabanMerah3').show();
            $('#merah3').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah3').click(function(){
            $('#soalMerah3').hide();
            $('#jawabanMerah3').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalMerah3').hide();
            $('#jawabanMerah3').hide();
            $('#round1Merah').show();
        });
    });
//soal no 4
    $(document).ready(function(){
        $('#merah4').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah4').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah4').click(function(){
            $('#jawabanMerah4').show();
            $('#merah4').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah4').click(function(){
            $('#soalMerah4').hide();
            $('#jawabanMerah4').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalMerah4').hide();
            $('#jawabanMerah4').hide();
            $('#round1Merah').show();
        });
    });

//soal no 5
    $(document).ready(function(){
        $('#merah5').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah5').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah5').click(function(){
            $('#jawabanMerah5').show();
            $('#merah5').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah5').click(function(){
            $('#soalMerah5').hide();
            $('#jawabanMerah5').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalMerah5').hide();
            $('#jawabanMerah5').hide();
            $('#round1Merah').show();
        });
    });
//soal no 6
    $(document).ready(function(){
        $('#merah6').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah6').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah6').click(function(){
            $('#jawabanMerah6').show();
            $('#merah6').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah6').click(function(){
            $('#soalMerah6').hide();
            $('#jawabanMerah6').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalMerah6').hide();
            $('#jawabanMerah6').hide();
            $('#round1Merah').show();
        });
    });

//Soal no 7
    $(document).ready(function(){
        $('#merah7').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah7').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah7').click(function(){
            $('#jawabanMerah7').show();
            $('#merah7').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah7').click(function(){
            $('#soalMerah7').hide();
            $('#jawabanMerah7').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalMerah7').hide();
            $('#jawabanMerah7').hide();
            $('#round1Merah').show();
        });
    });
//soal no 8
    $(document).ready(function(){
        $('#merah8').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah8').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah8').click(function(){
            $('#jawabanMerah8').show();
            $('#merah8').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah8').click(function(){
            $('#soalMerah8').hide();
            $('#jawabanMerah8').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalMerah8').hide();
            $('#jawabanMerah8').hide();
            $('#round1Merah').show();
        });
    });

// soal no 9
    $(document).ready(function(){
        $('#merah9').click(function(){
            alert('goJek');
            $('#round1Merah').hide();
            $('#soalMerah9').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalMerah9').click(function(){
            $('#jawabanMerah9').show();
            $('#merah9').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalMerah9').click(function(){
            $('#soalMerah9').hide();
            $('#jawabanMerah9').hide();
            $('#round1Merah').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalMerah9').hide();
            $('#jawabanMerah9').hide();
            $('#round1Merah').show();
        });
    });
</script>
@stop

@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop