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

<!-- jam/counter -->
        <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
            <div class="left"></div>
            <div class="right">
                <div id="clock1" style="margin:2em;"></div>
                <div id="clock2" style="margin:2em;"></div>
                <div id="clock3" style="margin:2em;"></div>
                <div id="clock4" style="margin:2em;"></div>  
                <div id="clock5" style="margin:2em;"></div>  
                <div id="clock6" style="margin:2em;"></div>  
                <div id="clock7" style="margin:2em;"></div>  
                <div id="clock8" style="margin:2em;"></div>  
                <div id="clock9" style="margin:2em;"></div>                                                                                                                                                                                     
            </div>
        </div>    
        
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
                <button id='lempar1' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter1' type="submit" class="btn btn-success">Counter</button> 
                
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
                <button id='lempar2' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter2' type="submit" class="btn btn-success">Counter</button> 
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
                <button id='lempar3' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter3' type="submit" class="btn btn-success">Counter</button> 
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
                <button id='lempar4' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter4' type="submit" class="btn btn-success">Counter</button>                
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
                <button id='lempar5' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter5' type="submit" class="btn btn-success">Counter</button> 
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
                <button id='lempar6' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter6' type="submit" class="btn btn-success">Counter</button> 
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
                <button id='lempar7' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter7' type="submit" class="btn btn-success">Counter</button> 
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
                <button id='lempar8' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter8' type="submit" class="btn btn-success">Counter</button> 
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
                <button id='lempar9' type="submit" class="btn btn-primary">Lempar Soal</button>
                <button id='counter9' type="submit" class="btn btn-success">Counter</button> 
        </div>
        <div id='jawabanBiru9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Impairment Loss</h2></br>
        </div>

<div id='simpanScore'>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bonus poin</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="Default Input" id='bonus'>
            </div>
            <button type="submit" class="btn btn-primary" id='btnBonus'>Bonus.. </button>
            <button type="submit" class="btn btn-success" id='btnMinPoin'>- point </button>
            <button type="submit" class="btn btn-primary" id='btnPoinKembali'>kembali</button>
        </div>
            <form method="post" >
                <div id='scoreTotal'></div> 
                <input name='idMerah' id='idMerah' value="1"></input>
                <div id='scoreTotalMerah'></div>

                <input name='idBiru' id='idBiru' value="2"></input>
                <div id='scoreTotalBiru'></div>        

                <input name='idHijau' id='idHijau' value="3"></input>
                <div id='scoreTotalHijau'></div>       

                <input name='idKuning' id='idKuning' value="4"></input>
                <div id='scoreTotalKuning'></div>    

                <input name='idAbuabu' id='idAbuabu' value="5"></input>
                <div id='scoreTotalAbuabu'></div>
                {!! csrf_field() !!}                                                                       
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <div id='formScoreLempar'>
        <select id="kotakNo" class="form-control" required>
                <option value="biru1">Kotak 1 </option>
                <option value="biru2">Kotak 2</option>
                <option value="biru3">Kotak 3</option>
                <option value="biru4">Kotak 4</option>
                <option value="biru5">Kotak 5</option>
                <option value="biru6">Kotak 6</option>
                <option value="biru7">Kotak 7</option>
                <option value="biru8">Kotak 8</option>
                <option value="biru9">Kotak 9</option>                                                                                     
        </select>
        <select id="warnaId" class="form-control" required>
                <option value="#c0392b">Merah</option>        
                <option value="#2ecc71">Hijau</option>
                <option value="#f1c40f">Kuning</option>
                <option value="#7f8c8d">Abu - Abu</option>
        </select>

        <button type="submit" class="btn btn-primary" id='btnPointLempar'>Benar</button></form>
        <button type="submit" class="btn btn-success" id='btnPointLemparSalah'>Salah</button></form>
        <button type="submit" class="btn btn-primary" id='btnKembaliPointLempar'>Kembali</button></form>
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
    $('#clock1').hide(); 
    $('#clock2').hide();
    $('#clock3').hide();         
    $('#clock4').hide(); 
    $('#clock5').hide();
    $('#clock6').hide(); 
    $('#clock7').hide(); 
    $('#clock8').hide();
    $('#clock9').hide(); 

    $('#idMerah').hide(); 
    $('#idBiru').hide();   
    $('#idHijau').hide();        
    $('#idKuning').hide();   
    $('#idAbuabu').hide();

    $('#scoreTotalMerah').hide(); 
    $('#scoreTotalBiru').hide();   
    $('#scoreTotalHijau').hide();        
    $('#scoreTotalKuning').hide();   
    $('#scoreTotalAbuabu').hide();    
    
    $('#formScoreLempar').hide();  

// soal no 1
    var soal1Clck = 0;
    $(document).ready(function(){
        $('#biru1').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Biru').hide();
            $('#soalBiru1').show();

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
                $('#biru1').css('background-color','#ecf0f1');
           }  
           else if (soal1Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock1').hide();
                $('#soalBiru1').remove();
                $('#round3Biru').show(); 
           }                         
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru1').click(function(){
            $('#jawabanBiru1').show();
            $('#biru1').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru1').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali1').click(function(){
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round3Biru').show();
            $('#clock1').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter1').click(function(){
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
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar1').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru1').hide();
            $('#jawabanBiru1').hide();
            $('#round3Biru').hide();
             $('#clock1').hide();
        });
    });

// soal no 2
    var soal2Clck = 0;
    $(document).ready(function(){
        $('#biru2').click(function(){
            alert('PENGANTAR AKUNTANSI 1');
            $('#round3Biru').hide();
            $('#soalBiru2').show();

           var clock;
            $('#clock2').show();
            clock = $('#clock2').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);              
            soal2Clck++;
            if(soal2Clck == 2){
                $('#biru2').css('background-color','#ecf0f1');
           }
           else if (soal2Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock2').hide();
                $('#soalBiru2').remove();
                $('#round3Biru').show(); 
           }                            
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru2').click(function(){
            $('#jawabanBiru2').show();
            $('#biru2').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru2').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock2').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round3Biru').show();
            $('#clock2').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali2').click(function(){
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round3Biru').show();
            $('#clock2').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter2').click(function(){
            var clock;
            $('#clock2').show();
            clock = $('#clock2').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar2').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru2').hide();
            $('#jawabanBiru2').hide();
            $('#round3Biru').hide();
             $('#clock2').hide();
        });
    });

// soal no 3
    var soal3Clck = 0;
    $(document).ready(function(){
        $('#biru3').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Biru').hide();
            $('#soalBiru3').show();

           var clock;
            $('#clock3').show();
            clock = $('#clock3').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);              
            soal3Clck++;
            if(soal3Clck == 2){
                $('#biru3').css('background-color','#ecf0f1');
           }         
           else if (soal3Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock3').hide();
                $('#soalBiru3').remove();
                $('#round3Biru').show(); 
           }                   
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru3').click(function(){
            $('#jawabanBiru3').show();
            $('#biru3').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru3').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock3').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round3Biru').show();
            $('#clock3').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali3').click(function(){
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round3Biru').show();
            $('#clock3').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter3').click(function(){
            var clock;
            $('#clock3').show();
            clock = $('#clock3').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });
    
    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar1').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru3').hide();
            $('#jawabanBiru3').hide();
            $('#round3Biru').hide();
             $('#clock3').hide();
        });
    });

// soal no 4
    var soal4Clck = 0;
    $(document).ready(function(){
        $('#biru4').click(function(){
            alert('PENGANTAR AKUNTANSI 2');
            $('#round3Biru').hide();
            $('#soalBiru4').show();

           var clock;
            $('#clock4').show();
            clock = $('#clock4').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);              
            soal4Clck++;
            if(soal4Clck == 2){
                $('#biru4').css('background-color','#ecf0f1');
           }     
           else if (soal4Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock4').hide();
                $('#soalBiru4').remove();
                $('#round3Biru').show(); 
           }                       
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru4').click(function(){
            $('#jawabanBiru4').show();
            $('#biru4').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru4').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2480b4" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock4').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round3Biru').show();
            $('#clock4').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali4').click(function(){
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round3Biru').show();
            $('#clock4').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter4').click(function(){
            var clock;
            $('#clock4').show();
            clock = $('#clock4').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar4').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru4').hide();
            $('#jawabanBiru4').hide();
            $('#round3Biru').hide();
             $('#clock4').hide();
        });
    });

// soal no 5
    var soal5Clck = 0;
    $(document).ready(function(){
        $('#biru5').click(function(){
            alert('EKONOMI MAKRO');
            $('#round3Biru').hide();
            $('#soalBiru5').show();

           var clock;
            $('#clock5').show();
            clock = $('#clock5').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);              
            soal5Clck++;
            if(soal5Clck == 2){
                $('#biru5').css('background-color','#ecf0f1');
           }         
           else if (soal5Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock5').hide();
                $('#soalBiru5').remove();
                $('#round3Biru').show(); 
           }                   
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru5').click(function(){
            $('#jawabanBiru5').show();
            $('#biru5').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru5').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2580b5" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock5').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round3Biru').show();
            $('#clock5').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali5').click(function(){
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round3Biru').show();
            $('#clock5').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter5').click(function(){
            var clock;
            $('#clock5').show();
            clock = $('#clock5').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar5').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru5').hide();
            $('#jawabanBiru5').hide();
            $('#round3Biru').hide();
             $('#clock5').hide();
        });
    });

// soal no 6
    var soal6Clck = 0;
    $(document).ready(function(){
        $('#biru6').click(function(){
            alert('EKONOMI MIKRO');
            $('#round3Biru').hide();
            $('#soalBiru6').show();

           var clock;
            $('#clock6').show();
            clock = $('#clock6').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);              
            soal6Clck++;
            if(soal6Clck == 2){
                $('#biru6').css('background-color','#ecf0f1');
           }               
           else if (soal6Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock6').hide();
                $('#soalBiru6').remove();
                $('#round3Biru').show(); 
           }             
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru6').click(function(){
            $('#jawabanBiru6').show();
            $('#biru6').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru6').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2680b6" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock6').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round3Biru').show();
            $('#clock6').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali6').click(function(){
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round3Biru').show();
            $('#clock6').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter6').click(function(){
            var clock;
            $('#clock6').show();
            clock = $('#clock6').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar6').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru6').hide();
            $('#jawabanBiru6').hide();
            $('#round3Biru').hide();
             $('#clock6').hide();
        });
    });

// soal no 7
    var soal7Clck = 0;
    $(document).ready(function(){
        $('#biru7').click(function(){
            alert('PERPAJAKAN');
            $('#round3Biru').hide();
            $('#soalBiru7').show();

           var clock;
            $('#clock7').show();
            clock = $('#clock7').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);              
            soal7Clck++;
            if(soal7Clck == 2){
                $('#biru7').css('background-color','#ecf0f1');
            }
           else if (soal7Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock7').hide();
                $('#soalBiru7').remove();
                $('#round3Biru').show(); 
           }                                
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru7').click(function(){
            $('#jawabanBiru7').show();
            $('#biru7').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru7').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2780b7" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock7').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round3Biru').show();
            $('#clock7').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali7').click(function(){
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round3Biru').show();
            $('#clock7').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter7').click(function(){
            var clock;
            $('#clock7').show();
            clock = $('#clock7').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(10);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar7').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru7').hide();
            $('#jawabanBiru7').hide();
            $('#round3Biru').hide();
             $('#clock7').hide();
        });
    });

// soal no 8
    var soal8Clck = 0;
    $(document).ready(function(){
        $('#biru8').click(function(){
            alert('PERPAJAKAN');
            $('#round3Biru').hide();
            $('#soalBiru8').show();

           var clock;
            $('#clock8').show();
            clock = $('#clock8').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);              
            soal8Clck++;
            if(soal8Clck == 2){
                $('#biru8').css('background-color','#ecf0f1');
           }      
           else if (soal8Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock8').hide();
                $('#soalBiru8').remove();
                $('#round3Biru').show(); 
           }                      
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru8').click(function(){
            $('#jawabanBiru8').show();
            $('#biru8').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru8').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2880b8" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock8').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round3Biru').show();
            $('#clock8').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali8').click(function(){
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round3Biru').show();
            $('#clock8').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter8').click(function(){
            var clock;
            $('#clock 8').show();
            clock = $('#clock 8').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar8').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru8').hide();
            $('#jawabanBiru8').hide();
            $('#round3Biru').hide();
             $('#clock 8').hide();
        });
    });
    
// soal no 9
    var soal9Clck =0;
    $(document).ready(function(){
        $('#biru9').click(function(){
            alert('TEORI AKUNTANSI');
            $('#round3Biru').hide();
            $('#soalBiru9').show();

           var clock;
            $('#clock9').show();
            clock = $('#clock9').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);              
            soal9Clck++;
            if(soal9Clck == 2){
                $('#biru9').css('background-color','#ecf0f1');
           }              
           else if (soal9Clck >= 3)  {
            // alert(soal1Clck);
                $('#clock9').hide();
                $('#soalBiru9').remove();
                $('#round3Biru').show(); 
           }              
        });
    });

    $('#document').ready(function(){
        $('#benarSoalBiru9').click(function(){
            $('#jawabanBiru9').show();
            $('#biru9').html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#biru9').css('background-color','#ecf0f1');
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#clock9').hide();             
        });
    });

    $('#document').ready(function(){
        $('#salahSoalBiru9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round3Biru').show();
            $('#clock9').hide();             
        });
    });

    $('#document').ready(function(){
        $('#pilihKembali9').click(function(){
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round3Biru').show();
            $('#clock9').hide();             
        });
    });
    
    $('#document').ready(function(){
        $('#counter9').click(function(){
            var clock;
            $('#clock9').show();
            clock = $('#clock9').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: true,
                callbacks: {
                }
            });
                    
            clock.setTime(5);
            clock.setCountdown(true);               
            soal1Clck++;    
        });
    });

    $('#document').ready(function(){// tampilkan panel tambah poin soal lempar
        $('#lempar9').click(function(){
            $('#formScoreLempar').show();
            $('#soalBiru9').hide();
            $('#jawabanBiru9').hide();
            $('#round3Biru').hide();
             $('#clock9').hide();
        });
    });

// post method
    $('#document').ready(function(){
        $('#scoreBiru').click(function(){
            $('#jam').hide();
            $('#round3Biru').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard);
            $('#scoreTotal').hide();
            // $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
            // untuk memastikan untuk tidak salah update
                // Merah
                var scoreBoard1 = $('#scoreMerah').text();
                scoreBoard1 = parseInt(scoreBoard1);
                // alert(scoreBoard1);
                $('#scoreMerah').html('<font color="#c0392b" id="scoreBoardMerah" val="'+scoreBoard1+'">'+scoreBoard1+'</font>');
                $('#scoreTotalMerah').html('<input name="score1" value='+scoreBoard1+'>');

                //Biru 
                var scoreBoard2 = $('#scoreBiru').text();                    
                scoreBoard2 = parseInt(scoreBoard2);
                // alert(kotak2Benar);
                $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard2+'">'+scoreBoard2+'</font>');
                $('#scoreTotalBiru').html('<input name="score2" value='+scoreBoard2+'>');

                // Hijau
                var scoreBoard3 = $('#scoreHijau').text();
                scoreBoard3 = parseInt(scoreBoard3);
                // alert(kotak2Benar);
                $('#scoreHijau').html('<font color="#2ecc71" id="scoreBoardHijau" val="'+scoreBoard3+'">'+scoreBoard3+'</font>');
                $('#scoreTotalHijau').html('<input name="score3" value='+scoreBoard3+'>');    

                // Kuning 
                var scoreBoard4 = $('#scoreKuning').text();
                scoreBoard4 = parseInt(scoreBoard4);
                // alert(kotak2Benar);
                $('#scoreKuning').html('<font color="#f1c40f" id="scoreBoardKuning" val="'+scoreBoard4+'">'+scoreBoard4+'</font>');
                $('#scoreTotalKuning').html('<input name="score4" value='+scoreBoard4+'>');

                // Abuabu
                var scoreBoard5 = $('#scoreAbuabu').text();
                scoreBoard5 = parseInt(scoreBoard5);
                // alert(scoreBoard5);
                $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoard5+'">'+scoreBoard5+'</font>');
                $('#scoreTotalAbuabu').html('<input name="score5" value='+scoreBoard5+'>');             
        });
    });

// tambah poin(bonus)
     $('#document').ready(function(){
        $('#btnBonus').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBoardBiru').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round3Biru').show();
        });
    });

// tombol kembali(dari tambah point soal yang dilempar)
    $('#document').ready(function(){
        $('#btnKembaliPointLempar').click(function(){
            $('#round3Biru').show();
            $('#formScoreLempar').hide();
        });
    });
    
// worstcase jika salah dan soal hanya dibuka hanya 1 kali btnPointLemparSalah
    $('#document').ready(function(){
        $('#btnPointLemparSalah').click(function(){
            var kotak = $('#kotakNo').val();
            var no = kotak.substr(5,6);
            // alert(no);
            $('#soalBiru'+no).remove();
            $('#round3Biru').show(); 
            $('#'+kotak).css('background-color','#ecf0f1');
            $('#formScoreLempar').hide();            
        });
    });

// Tambah point soal yang dilempar
    $(document).ready(function(){
        $('#btnPointLempar').click(function(){
            var warna = $('#warnaId').val();
            var kotak = $('#kotakNo').val();
            $('#'+kotak).html('<img src="../assets/file/images/IMG_TAC.jpg" alt="" />');
            $('#'+kotak).css('background-color','#ecf0f1');

            // alert(warna);
                if ( warna == '#c0392b'){
                    var scoreBoard = $('#scoreMerah').text();
                    var scoreBoardbiru = $('#scoreBiru').text();                    
                    scoreBoardbiru = parseInt(scoreBoardbiru)+20;
                    // alert(scoreBoardbiru);
                    $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoardbiru+'">'+scoreBoardbiru+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoardbiru+'>');                       
                    $('#'+kotak).css('background-color', warna);

                    scoreBoard = parseInt(scoreBoard)+10;
                    // alert(scoreBoard);
                    $('#scoreMerah').html('<font color="#c0392b" id="scoreBoardMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalMerah').html('<input name="score1" id="score1" value='+scoreBoard+'>');                    
                    $('#'+kotak).css('background-color', warna);
                }
                // biru
                else if( warna == '#2980b9'){

                    var scoreBoardbiru = $('#scoreBiru').text();                    
                    scoreBoardbiru = parseInt(scoreBoardbiru)+10;
                    // alert(scoreBoardbiru);
                    $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoardbiru+'">'+scoreBoardbiru+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoardbiru+'>');                       
                    $('#'+kotak).css('background-color', warna); 

                }
                // hijau
                else if ( warna == '#2ecc71'){
                    var scoreBoardbiru = $('#scoreBiru').text();                    
                    scoreBoardbiru = parseInt(scoreBoardbiru)+20;
                    // alert(scoreBoardbiru);
                    $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoardbiru+'">'+scoreBoardbiru+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoardbiru+'>');                       
                    $('#'+kotak).css('background-color', warna);

                    var scoreBoardhijau = $('#scoreHijau').text();
                    scoreBoardhijau = parseInt(scoreBoardhijau)+10;
                    // alert(kotak2Benar);
                    $('#scoreHijau').html('<font color="#2ecc71" id="scoreBoardHijau" val="'+scoreBoardhijau+'">'+scoreBoardhijau+'</font>');
                    $('#scoreTotalHijau').html('<input name="score3" id="score3" value='+scoreBoardhijau+'>');                       
                    $('#'+kotak).css('background-color', warna);                  
                }
                // kuning
                else if ( warna == '#f1c40f'){
                    var scoreBoardbiru = $('#scoreBiru').text();                    
                    scoreBoardbiru = parseInt(scoreBoardbiru)+20;
                    // alert(scoreBoardbiru);
                    $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoardbiru+'">'+scoreBoardbiru+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoardbiru+'>');                       
                    $('#'+kotak).css('background-color', warna);

                    var scoreBoardkuning = $('#scoreKuning').text();
                    scoreBoardkuning = parseInt(scoreBoardkuning)+10;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#f1c40f" id="scoreBoardKuning" val="'+scoreBoardkuning+'">'+scoreBoardkuning+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoardkuning+'>');                       
                    $('#'+kotak).css('background-color', warna);
                }
                // abuabu
                else{
                    var scoreBoardbiru = $('#scoreBiru').text();                    
                    scoreBoardbiru = parseInt(scoreBoardbiru)+20;
                    // alert(scoreBoardbiru);
                    $('#scoreBiru').html('<font color="#2980b9" id="scoreBoardBiru" val="'+scoreBoardbiru+'">'+scoreBoardbiru+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoardbiru+'>');                       
                    $('#'+kotak).css('background-color', warna);

                    // alert('kucing');
                    var scoreBoardabuabu = $('#scoreAbuabu').text();
                    scoreBoardabuabu = parseInt(scoreBoardabuabu)+10;
                    // alert(scoreBoardabuabu);
                    $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreBoardAbuabu" val="'+scoreBoardabuabu+'">'+scoreBoardabuabu+'</font>');
                    $('#scoreTotalAbuabu').html('<input name="score5" id="score5" value='+scoreBoardabuabu+'>');                       
                    $('#'+kotak).css('background-color', warna);                    
                }            
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