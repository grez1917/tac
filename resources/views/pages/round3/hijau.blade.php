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

// soal no 1
    $(document).ready(function(){
        $('#hijau1').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau1').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau1').click(function(){
            $('#jawabanHijau1').show();
            $('#hijau1').css('background-color','#ecf0f1');
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
    $(document).ready(function(){
        $('#hijau2').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau2').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau2').click(function(){
            $('#jawabanHijau2').show();
            $('#hijau2').css('background-color','#ecf0f1');
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
    $(document).ready(function(){
        $('#hijau3').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau3').show();
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
    $(document).ready(function(){
        $('#hijau4').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau4').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau4').click(function(){
            $('#jawabanHijau4').show();
            $('#hijau4').css('background-color','#ecf0f1');
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
    $(document).ready(function(){
        $('#hijau5').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau5').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau5').click(function(){
            $('#jawabanHijau5').show();
            $('#hijau5').css('background-color','#ecf0f1');
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
    $(document).ready(function(){
        $('#hijau6').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau6').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau6').click(function(){
            $('#jawabanHijau6').show();
            $('#hijau6').css('background-color','#ecf0f1');
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
    $(document).ready(function(){
        $('#hijau7').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau7').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau7').click(function(){
            $('#jawabanHijau7').show();
            $('#hijau7').css('background-color','#ecf0f1');
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
    $(document).ready(function(){
        $('#hijau8').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau8').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau8').click(function(){
            $('#jawabanHijau8').show();
            $('#hijau8').css('background-color','#ecf0f1');
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
    $(document).ready(function(){
        $('#hijau9').click(function(){
            alert('goJek');
            $('#round3Hijau').hide();
            $('#soalHijau9').show();
        });
    });

    $('#document').ready(function(){
        $('#benarSoalHijau9').click(function(){
            $('#jawabanHijau9').show();
            $('#hijau9').css('background-color','#ecf0f1');
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
</script>
</section>
@stop

@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop