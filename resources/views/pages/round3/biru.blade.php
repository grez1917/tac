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

// soal no 1
    $(document).ready(function(){
        $('#biru1').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru1').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru1').click(function(){
            $('#jawabanBiru1').show();
            $('#biru1').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round3Biru').show();
        });
    });

// soal no 2
    $(document).ready(function(){
        $('#biru2').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru2').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru2').click(function(){
            $('#jawabanBiru2').show();
            $('#biru2').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round3Biru').show();
        });
    });

// soal no 3
    $(document).ready(function(){
        $('#biru3').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru3').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru3').click(function(){
            $('#jawabanBiru3').show();
            $('#biru3').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round3Biru').show();
        });
    });

// soal no 4
    $(document).ready(function(){
        $('#biru4').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru4').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru4').click(function(){
            $('#jawabanBiru4').show();
            $('#biru4').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round3Biru').show();
        });
    });

// soal no 5
    $(document).ready(function(){
        $('#biru5').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru5').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru5').click(function(){
            $('#jawabanBiru5').show();
            $('#biru5').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round3Biru').show();
        });
    });

// soal no 6
    $(document).ready(function(){
        $('#biru6').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru6').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru6').click(function(){
            $('#jawabanBiru6').show();
            $('#biru6').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round3Biru').show();
        });
    });

// soal no 7
    $(document).ready(function(){
        $('#biru7').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru7').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru7').click(function(){
            $('#jawabanBiru7').show();
            $('#biru7').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round3Biru').show();
        });
    });

// soal no 8
    $(document).ready(function(){
        $('#biru8').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru8').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru8').click(function(){
            $('#jawabanBiru8').show();
            $('#biru8').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round3Biru').show();
        });
    });
// soal no 9
    $(document).ready(function(){
        $('#biru9').click(function(){
            alert('goJek');
            $('#round3Biru').hide();
            $('#soalBiru9').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru9').click(function(){
            $('#jawabanBiru9').show();
            $('#biru9').css('background-color','#ecf0f1');
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round3Biru').show();
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round3Biru').show();
        });
    });
</script>
</section>
@stop

@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop