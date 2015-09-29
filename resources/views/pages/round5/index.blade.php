@extends('layouts.full')

@section('head')
<section>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <title>FancyBox 1.3.4 | Demonstration</title>
    <script type="text/javascript" src="{{ URL::to('assets/gentelella/js/fancybox/jquery.min.js') }}"></script>
    <script>
        !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="{{ URL::to('assets/gentelella/js/fancybox/jquery.mousewheel-3.0.4.pack.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/gentelella/js/fancybox/jquery.fancybox-1.3.4.pack.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/gentelella/css/fancybox/jquery.fancybox-1.3.4.css') }}" media="screen" />
    
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            *   Examples - images
            */

            $("a#example1").fancybox();

            $("a#example2").fancybox({
                'overlayShow'   : false,
                'transitionIn'  : 'elastic',
                'transitionOut' : 'elastic',
                'onComplete': function() { 
                                jQuery("#fancybox-wrap, #fancybox-overlay").delay(5000).fadeOut(); 
                              } 
            });

            $("a#example3").fancybox({
                'transitionIn'  : 'none',
                'transitionOut' : 'none'    
            });

        });
    </script>
</section>
@stop

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

<div class="col-md-7 col-sm-8 col-xs-8">
    <div class="x_panel">
            <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
            <div class="left"></div>
            <div class="right">
                <div id="clock1" style="margin:2em;"></div>
            </div>
        </div>  
    </div>
</div>

<!-- kurangi poin jawaban salah -->
<div class="col-md-7 col-sm-8 col-xs-8" id='formMinPoint'>
    <div class="x_panel">
                <select id="minusWarnaId" class="form-control" required>
                    <option value="#c0392b">Merah</option>
                    <option value="#2980b9">Biru</option>
                    <option value="#2ecc71">Hijau</option>
                    <option value="#f1c40f">Kuning</option>
                    <option value="#7f8c8d">Abu - Abu</option>
                </select>
                <button id='btnMinPoin' class="btn btn-success">Kurangi Point</button>
    </div>
</div>

<!-- tombol ubah warna nilai dan simpan -->
<div class="col-md-7 col-sm-8 col-xs-8" id='tblPanel'>
    <div class="x_panel">
    <!-- jam/counter -->

            <select id="kotakId" class="form-control" required>
                 <option value="merah1">Kotak No. 1</option>
                 <option value="merah2">Kotak No. 2</option>
                 <option value="merah3">Kotak No. 3</option>
                 <option value="merah4">Kotak No. 4</option>
                 <option value="merah5">Kotak No. 5</option>
                 <option value="merah6">Kotak No. 6</option>
                 <option value="merah7">Kotak No. 7</option>
                 <option value="merah8">Kotak No. 8</option>
                 <option value="merah9">Kotak No. 9</option>
                 <option value="merah10">Kotak No. 10</option>
                 <option value="merah11">Kotak No. 11</option>
                 <option value="merah12">Kotak No. 12</option>
                 <option value="merah13">Kotak No. 13</option>
                 <option value="merah14">Kotak No. 14</option>
                 <option value="merah15">Kotak No. 15</option>
                 <option value="merah16">Kotak No. 16</option>
                 <option value="merah17">Kotak No. 17</option>
                 <option value="merah18">Kotak No. 18</option>
                 <option value="merah19">Kotak No. 19</option>
                 <option value="merah20">Kotak No. 20</option>
                 <option value="merah21">Kotak No. 21</option>
                 <option value="merah22">Kotak No. 22</option>
                 <option value="merah23">Kotak No. 23</option>
                 <option value="merah24">Kotak No. 24</option>
                 <option value="merah25">Kotak No. 25</option>
                 <option value="merah26">Kotak No. 26</option>
                 <option value="merah27">Kotak No. 27</option>
                 <option value="merah28">Kotak No. 28</option>
                 <option value="merah29">Kotak No. 29</option>
                 <option value="merah30">Kotak No. 30</option>
                 <option value="merah31">Kotak No. 31</option>
                 <option value="merah32">Kotak No. 32</option>
                 <option value="merah33">Kotak No. 33</option>
                 <option value="merah34">Kotak No. 34</option>
                 <option value="merah35">Kotak No. 35</option>
                 <option value="merah36">Kotak No. 36</option>
                 <option value="merah37">Kotak No. 37</option>
                 <option value="merah38">Kotak No. 38</option>
                 <option value="merah39">Kotak No. 39</option>
                 <option value="merah40">Kotak No. 40</option>
                 <option value="merah41">Kotak No. 41</option>
                 <option value="merah42">Kotak No. 42</option>
                 <option value="merah43">Kotak No. 43</option>
                 <option value="merah44">Kotak No. 44</option>
                 <option value="merah45">Kotak No. 45</option>
                 <option value="merah46">Kotak No. 46</option>
                 <option value="merah47">Kotak No. 47</option>
                 <option value="merah48">Kotak No. 48</option>
                 <option value="merah49">Kotak No. 49</option>
            </select>
            <select id="warnaId" class="form-control" required>
                <option value="#c0392b">Merah</option>
                <option value="#2980b9">Biru</option>
                <option value="#2ecc71">Hijau</option>
                <option value="#f1c40f">Kuning</option>
                <option value="#7f8c8d">Abu - Abu</option>
            </select>
            <button id='pilihWarna' value="1" class="btn btn-success">Rubah Warna</button>

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
</div>


    <div id='round5'>
    <table align="center" class="test">
    	<tr bgcolor="#c0392b">
    		<td width="50" height="50" align="center" id="merah1" >
    			<font color="#ecf0f1" size="18"><b>1</b></font>
    		</td>
            <td width="50" height="50" align="center" id="merah2" >
                <font color="#ecf0f1" size="18"><b>2</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah3" >
                <font color="#ecf0f1" size="18"><b>3</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah4" >
                <a id="example2" href="../resources/assets/images/2_b.jpg"><font color="#ecf0f1" size="18"><b>4</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <font color="#ecf0f1" size="18"><b>5</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>6</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah7" >
                <font color="#ecf0f1" size="18"><b>7</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#c0392b">
    		<td width="50" height="50" align="center" id="merah8" >
    			<font color="#ecf0f1" size="18"><b>8</b></font>
    		</td>
            <td width="50" height="50" align="center" id="merah9" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>9</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah10" >
                <font color="#ecf0f1" size="18"><b>10</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah11" >
                <font color="#ecf0f1" size="18"><b>11</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah12" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>12</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah13" >
                <font color="#ecf0f1" size="18"><b>13</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah14" >
                <font color="#ecf0f1" size="18"><b>14</b></font>
            </td>
    	</tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah15" >
                <font color="#ecf0f1" size="18"><b>15</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah16" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>16</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah17" >
                <font color="#ecf0f1" size="18"><b>17</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah18" >
                <font color="#ecf0f1" size="18"><b>18</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah19" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>19</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah20" >
                <font color="#ecf0f1" size="18"><b>20</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah21" >
                <font color="#ecf0f1" size="18"><b>21</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah22" >
                <font color="#ecf0f1" size="18"><b>22</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah23" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>23</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah24" >
                <font color="#ecf0f1" size="18"><b>24</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah25" >
                <font color="#ecf0f1" size="18"><b>25</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah26" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>26</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah27" >
                <font color="#ecf0f1" size="18"><b>27</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah28" >
                <font color="#ecf0f1" size="18"><b>28</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah29" >
                <font color="#ecf0f1" size="18"><b>29</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah30" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>30</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah31" >
                <font color="#ecf0f1" size="18"><b>31</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah32" >
                <font color="#ecf0f1" size="18"><b>32</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah33" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>33</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah34" >
                <font color="#ecf0f1" size="18"><b>34</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah35" >
                <font color="#ecf0f1" size="18"><b>35</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah36" >
                <font color="#ecf0f1" size="18"><b>36</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah37" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>37</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah38" >
                <font color="#ecf0f1" size="18"><b>38</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah39" >
                <font color="#ecf0f1" size="18"><b>39</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah40" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>40</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah41" >
                <font color="#ecf0f1" size="18"><b>41</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah42" >
                <font color="#ecf0f1" size="18"><b>42</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah43" >
                <font color="#ecf0f1" size="18"><b>43</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah44" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>44</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah45" >
                <font color="#ecf0f1" size="18"><b>45</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah46" >
                <font color="#ecf0f1" size="18"><b>46</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah47" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>47</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah48" >
                <font color="#ecf0f1" size="18"><b>48</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah49" >
                <font color="#ecf0f1" size="18"><b>49</b></font>
            </td>
        </tr>
    </table>
    </div>

<div class="col-md-7 col-sm-7 col-xs-12">
    <div class="x_panel">
        <div id='soal1' class="x_content">
            <h2>Pada tanggal 20 Juli 2015, CV Esa Husada membeli tanah seharga Rp 400.000.000 dan membayar biaya listrik senilai Rp 35.000.000. Jurnal yang sesuai dengan transaksi tersebut adalah </h2>
                <button id='benarSoal1' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal1' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali1' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban1' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Tanah</th>
                        <td>400.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Beban Listrik</th>
                        <td>35.000.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Kas</th>
                        <td>435.000.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soal2' class="x_content">
            <h2>PT TAC akan menerbitkan obligasi senilai Rp 1 Triliun, dalam Neraca atau Laporan Posisi Keuangan PT TAC akan mencatat nilai Rp 1 Triliun tersebut dalam akun?…</h2>
                <button id='benarSoal2' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal2' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali2' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban2' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Bond Payable / Hutang Obligasi</h2>
        </div>

        <div id='soal3' class="x_content">
            <h2>Dalam literatur pajak dikenal beberapa sistem pemungutan pajak antara lain,......, adalah sistem pemungutan pajak dimana wajib pajak menentukan sendiri jumlah pajak yang terutang sesuai dengan ketentuan undang-undang perpajakan. Kemudian ada ....., adalah sistem dimana aparatur perpajakan menentukan sendiri (di luar wajib pajak) jumlah yang terutang. Terakhir,....., yaitu suatu sistem yang penghitungan besarnya pajak yang terutang oleh seorang wajib pajak dilakukan oleh pihak ketiga. </h2>
                <button id='benarSoal3' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal3' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali3' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban3' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Self assessment system, Official assessment system, Witholding system</h2>
        </div>

        <div id='soal4' class="x_content">
            <h2>The company whose stock is purchased is the ... </h2>
                <button id='benarSoal4' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal4' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali4' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban4' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>investee</h2>
        </div>
        
        <div id='soal5' class="x_content">
            <h2>The following schedule presents a comparison of the amortized cost and fair value of the bonds at year-end.         </h2>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> </th>
                        <td>12/31/09</td>
                        <td>12/31/10</td>
                        <td>12/31/11</td>
                        <td>12/31/12</td>
                        <td>12/31/13</td>
                    </tr>
                    <tr>
                        <th scope="row"> Amortized Cost </th>
                        <td>$ 107,093</td>
                        <td>$ 105,447</td>
                        <td>$ 103,719</td>
                        <td>$ 101,905</td>
                        <td>$ 100,000</td>
                    </tr>
                    <tr>
                        <th scope="row"> Fair Value </th>
                        <td>$ 106,500</td>
                        <td>$ 107,500</td>
                        <td>$ 105,650</td>
                        <td>$ 103,000</td>
                        <td>$ 100,000</td>
                    </tr>
                                
                </tbody>
            </table>
            
                <button id='benarSoal5' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal5' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali5' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban5' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Unrealized Holding Gain/Loss        $ 1,095 ($103,000 - $101,905)</h2>
        </div>        

        <div id='soal6' class="x_content">
            <h2>Pada tahun 2013, suatu perusahaan pelayaran dalam negeri memperoleh peredaran bruto sebesar 4.000.000.000, maka atas peredaran bruto tersebut terutang pajak penghasilan … sebesar… yang bersifat …</h2>
                <button id='benarSoal6' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal6' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali6' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban6' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>PPh pasal 15, 1,2% x 4.000.000.000 = 48.000.000, final</h2>
        </div>

        <div id='soal7' class="x_content">
            <h2>Berapa banyak metode akuntansi untuk piutang tak tertagih? Sebutkan!</h2>
                <button id='benarSoal7' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal7' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali7' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban7' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Terdapat dua metode, (1) metode penghapusan langsung piutang tak tertagih (direct write-off method), dan (2) metode penyisihan (allowance method)</h2>
        </div>

        <div id='soal8' class="x_content">
            <h2>Maggie Sharrer Company borrows $88,500 on September1, 2012, from Sandwich State Bank by signing an $88,500, 12%, one-year note. What is the accrued interest at December 31, 2012?</h2>
                <button id='benarSoal8' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal8' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali8' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban8' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>3540 {88500 x (12%/12) x 4}</h2>
        </div>        

        <div id='soal9' class="x_content">
            <h2>Dalam perekonomian terbuka,………ditentukan oleh penawaran dan permintaan dana pinjaman.</h2>
                <button id='benarSoal9' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal9' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali9' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban9' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Real Interest Rate</h2>
        </div>        

        <div id='soal10' class="x_content">
            <h2>1 Oktober 2012, saldo bahan habis pakai (BHP) adalah Rp 900.000. selama Oktober, terjadi pembelian BHP Rp 200.000 dan nilai BHP yang tercatat pada 31 Oktober 2012 sebesar Rp 125.000. Ternyata setelah dilakukan perhitungan fisik, nilai BHP yang seharusnya adalah sebesar Rp 155.000. Maka, berapakah nilai beban bahan habis pakai yang benar pada Oktober 2012? </h2>
                <button id='benarSoal10' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal10' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali10' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban10' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Rp 945.000</h2>
        </div>

        <div id='soal11' class="x_content">
            <h2>TC = 5Q² + 25 Q + 180 </br>
                P = Rp 102 </br>
                Q = 5,5 kg </br>
                Berapa profitnya ? </br>
                </h2>
                <button id='benarSoal11' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal11' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali11' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban11' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>TR = 102 x 5,5 = 561 </br>
                TC = 468,75 </br>
                Profit => π = TR – TC </br>
                π = 92,25 </br>
        </h2>
        </div>

        <div id='soal12' class="x_content">
            <h2>Berikut merupakan mekanisme kerja DJP, STP ( Surat Tagihan Pajak ) adalah produk hukum yang diterbitkan DJP setelah melakukan....., sedangkan setelah melakukan pemeriksaan, produk yang diterbitkan adalah..... </h2>
                <button id='benarSoal12' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal12' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali12' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban12' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Penelitian, dan produk yang diterbitkan adalah Surat Ketetapan Pajak </h2>
        </div>

        <div id='soal13' class="x_content">
            <h2>Outstanding check pada saat rekonsiliasi menambah atau mengurangi saldo kas perusahaan?</h2>
                <button id='benarSoal13' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal13' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali13' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban13' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Tidak berpengaruh</h2>
        </div>        

        <div id='soal14' class="x_content">
            <h2>Apabila ditemukan data baru dan atau data yg semula belum terungkap yang mengakibatkan penambahan jumlah pajak terutang, yang diperoleh dari pemeriksaan, Direktur Jenderal Pajak dapat menerbitkan..... dalam jangka waktu..... tahun sesudah saat  pajak terutang , berakhirnya masa pajak, bagian tahun pajak atau tahun pajak.</h2>
                <button id='benarSoal14' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal14' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali14' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban14' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>SKPKBT dalam jangka waktu 10 tahun </h2>
        </div>        

        <div id='soal15' class="x_content">
            <h2>Sistem di mana biaya angkut ditanggung oleh pembeli ketika barang tersebut keluar dari gudang penjual hingga sampai di gudang pembeli disebut sebagai....</h2>
                <button id='benarSoal15' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal15' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali15' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban15' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>FOB (Free on board) Shipping Point/ FOB titik pengiriman</h2>
        </div>        

        <div id='soal16' class="x_content">
            <h2>Jika diketahui, modal Adam pada 31 Desember 2010 sebesar Rp 80.000.000. Pada 10 Mei 2011, Adam memberikan kas sebesar Rp 50.000.000 sebagai tambahan investasinya. Pada 5 Agustus, Adam juga melakukan penarikan kas sebesar Rp 30.000.000. 31 Desember 2011 diketahui bahwa modal Adam sebesar Rp 155.550.000. Berapakah laba / rugi bersih tahun 2011 ? </h2>
                <button id='benarSoal16' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal16' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali16' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban16' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Laba Rp 55.550.000 </h2>
        </div>        

        <div id='soal17' class="x_content">
            <h2>Airlangga Inc. declared an $80,000 cash dividend. It currently has 3,000 shares of 7%, $100 par value cumulative preferred stock outstanding. It is one year in arrears on its preferred stock. How much cash will Airlangga distribute to common stockholders?</h2>
                <button id='benarSoal17' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal17' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali17' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban17' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Dividend for Preferred Stock = 3000 x $7 =  $21,000 </br>
            21,000 + 21,000 (cumulative) </br>
            80,000-42,000 = 38,000 </br>
        </h2>
        </div>     

        <div id='soal18' class="x_content">
            <h2>FIFO, LIFO, dan average adalah metode pencatatan persediaan. Jika diasumsikan terdapat inflasi, maka nilai persediaan yang paling besar dicatat jika menggunakan metode...</h2>
                <button id='benarSoal18' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal18' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali18' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban18' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>FIFO</h2>
        </div>

        <div id='soal19' class="x_content">
            <h2>Pemerintah memberikan berbagai jaminan sosial, jaminan pendidikan, dan kesehatan bagi masyarakat miskin. Dalam kasus ini pemerintah telah menjalankan fungsi….</h2>
                <button id='benarSoal19' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal19' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali19' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban19' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>fungsi alokasi</h2>
        </div>

        <div id='soal20' class="x_content">
            <h2>Konsep ini menyatakan bahwa perusahaan dianggap sebagai suatu kesatuan atau badan usaha ekonomik yang berdiri sendiri, bertindak atas namanya sendiri, dan kedudukannya terpisah dari pemilik atau pihak lain yang menanamkan dana dalam perusahaan dan kesatuan ekonomik tersebut menjadi pusat perhatian atau sudut pandang akuntansi. Konsep ini disebut…</h2>
                <button id='benarSoal20' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal20' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali20' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban20' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Konsep Kesatuan Akuntansi</h2>
        </div>

        <div id='soal21' class="x_content">
            <h2>Akun yang digunakan untuk mencatat nilai tambah dari selisih antara harga buku saham PT TAC dengan harga pasar saham tersebut adalah?</h2>
                <button id='benarSoal21' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal21' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali21' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban21' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Premi saham / Ordinary shares – Premium / Paid-In Capital</h2>
        </div>

        <div id='soal22' class="x_content">
            <h2><table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Income (Rp)</th>
                        <td>Quantity(Kg)</td>
                        
                        
                    </tr>
                    <tr>
                        <th scope="row">8000</th>
                        <td>5</td>
                        
                    </tr>
                    <tr>
                        <th scope="row">12000</th>
                        <td>10</td>
                    </tr>
                    <tr>
                        <th scope="row">16000</th>
                        <td>15</td>
                    </tr>
                    <tr>
                        <th scope="row">20000</th>
                        <td>18</td>
                    </tr>
                    <tr>
                        <th scope="row">24000</th>
                        <td>20</td>
                    </tr>
                    <tr>
                        <th scope="row">28000</th>
                        <td>19</td>
                    </tr>
                    <tr>
                        <th scope="row">32000</th>
                        <td>18</td>
                    </tr>
                    
               
                </tbody>
            </table> 
            Berdasarkan tabel diatas maka sampai dengan pendapatan berapa Q sebagai barang inferior (bermutu rendah).. </br>
            </h2>
                <button id='benarSoal22' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal22' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali22' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban22' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2> Saat Revenue = 28.000 </br>
            Dikarenakan e <1 </br>
            </h2>
        </div>

        <div id='soal23' class="x_content">
            <h2>Aset tetap yang tidak berwujud dibedakan menjadi 2 kategori: a. Dapat diamortisasi b. Tidak dapat diamortisasi. Jika dapat disusutkan, bagaimana metode untuk mencatat amortisasi manfaat aset tersebut?</h2>
                <button id='benarSoal23' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal23' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali23' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban23' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Straight line dan double declining method</h2>
        </div>

        <div id='soal24' class="x_content">
            <h2>On January 1, Arthemis, Inc. issued $1,000,000 9% bonds for $938,554. The market rate of interest for bonds is 10%. Interest is payable annually on December 31. Arthemis uses the effective interest method of amortizing bond discount. At the end of the first year, determine the unamortized bond discount!</h2>
                <button id='benarSoal24' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal24' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali24' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban24' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>57.591</h2>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Annual Interest</th>
                        <td>Interest to be paid</td>
                        <td>Interest expense to be recorded</td>
                        <td>Discount amortization</td>
                        <td>unarmotized discount</td>
                        <td>bond carrying value</td>
                    </tr>
                    <tr>
                        <th scope="row">Issued</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>61446</td>
                        <td>938554</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>90000</td>
                        <td>93855</td>
                        <td>3855</td>
                        <td>57591</td>
                        <td>942409</td>
                    </tr>
               
                </tbody>
            </table>
        </div>

        <div id='soal25' class="x_content">
            <h2>Nilai impor adalah nilai yang menjadi dasar perhitungan bea masuk terdiri dari..</h2>
                <button id='benarSoal25' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal25' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali25' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban25' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Biaya, Asuransi, Beban Angkut + Pungutan pabean lainnyaBiaya, Asuransi, Beban Angkut + Pungutan pabean lainnya</h2>
        </div>

        <div id='soal26' class="x_content">
            <h2>Crowding out effect terjadi jika deficit anggaran pemerintah menyebabkan penurunan pada ……</h2>
                <button id='benarSoal26' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal26' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali26' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban26' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>investasi privat</h2>
        </div>
        
        <div id='soal27' class="x_content">
            <h2>Dalam mencatat piutang atau utang yang berkaitan dengan supplier/customer dengan jumlah transaksi yang besar dibutuhkan laporan khusus untuk mencatat transaksi tersebut, laporan tersebut adalah?</h2>
                <button id='benarSoal27' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal27' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali27' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban27' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Subsidiary ledger</h2>
        </div>
        
        <div id='soal28' class="x_content">
            <h2>P = 180 </br>
            TC = 10Q² - 160 Q + 640 </br>
            Berapa Q saat profit maksimum? </br>
            </h2>
                <button id='benarSoal28' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal28' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali28' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban28' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Profit maks  MR = MC </br>
                MR = P = AR = 180 </br>
                MC = TC’ = 20Q – 16 </br>
                MR = MC </br>
                180 = 20Q -160 </br>
                340 = 20Q </br>
                Q = 17 unit => profit max </br>
                </h2>
        </div>

        <div id='soal29' class="x_content">
            <h2>Rasio yang digunakan untuk mengukur kemampuan dari modal sendiri untuk menghasilkan keuntungan bagi seluruh pemegang saham disebut...</h2>
                <button id='benarSoal29' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal29' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali29' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban29' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Return on Equity</h2>
        </div>       

        <div id='soal30' class="x_content">
            <h2>Russel Frederiksen adalah pegawai asing yang berada di Indonesia kurang dari 183 hari. Dia berstatus menikah dan mempunyai 2 orang anak. la memperoleh gaji pada bulan Maret 2013 sebesar US$2,500 sebulan. Kurs Menteri Keuangan Rp11.500,00 untuk US$ 1.00 dan Kurs Tengah Bank Indonesia Rp 11.000,00 untuk US$ 1.00 Berapakah PPh Pasal 26 terutang? </h2>
                <button id='benarSoal30' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal30' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali30' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban30' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Penghasilan bruto berupa gaji sebulan adalah: </br>
                US$2,500 x Rp11.500,00 = Rp28.750.000,00 </br>
                PPh Pasal 26 terutang adalah: </br>
                20% x Rp28.750.000,00 = Rp5.750.000,00 </br>
            </h2>
        </div>         

        <div id='soal31' class="x_content">
            <h2>Kondisi permintaan asset financial suatu negara yang menurun dan tiba-tiba, sering disebut……</h2>
                <button id='benarSoal31' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal31' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali31' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban31' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Capital flight</h2>
        </div>

        <div id='soal32' class="x_content">
            <h2>Kekurangan pembayaran PPh berdasarkan SPT Tahunan PPh Pasal 29 untuk OP/Badan, harus dilunasi paling lambat....., penyetoran/ pembayaran pajak setelah tanggal jatuh tempo penyetoran/ pembayaran pajak akan dikenakan sanksi administrasi bunga sebesar...../bulan dihitung dari jatuh tempo pembayaran sampai dengan tanggal pembayaran. </h2>
                <button id='benarSoal32' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal32' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali32' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban32' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Dilunasi paling lambat sebelum SPT Tahunan disampaikan/ diserahkan paling akhir bulan 3 tahun pajak berikutnya jika OP dan akhir bulan 4 tahun pajak berikutnya , bunga sebesar 2%</h2>
        </div>

        <div id='soal33' class="x_content">
            <h2>Dalam perekonomian terbuka, ekspansi pendapatan nasional dapat dilakukan dengan meningkatkan…..</h2>
                <button id='benarSoal33' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal33' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali33' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban33' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>investasi, pengeluaran pemerintah, ekspor</h2>
        </div>

        <div id='soal34' class="x_content">
            <h2>Dalam metode langsung, penerimaan dari pelanggan dapat berupa ... dan ... </h2>
                <button id='benarSoal34' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal34' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali34' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban34' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>kas dari penjualan dan pembayaran piutang</h2>
        </div>

        <div id='soal35' class="x_content">
            <h2>Dana kas khusus yang disiapkan perusahaan untuk membiayai pengeluaran kecil sehari-hari perusahaan karena penulisan cek/transfer via bank dan sejumlah sistem pembayaran lainnya dinilai kurang ekonomis apabila dilakukan sehari-hari untuk transaksi yang nilainya kecil, tidak material, dan berulang-ulang, disebut sebagai....</h2>
                <button id='benarSoal35' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal35' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali35' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban35' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Petty cash fund (dana kas kecil)</h2>
        </div>        

        <div id='soal36' class="x_content">
            <h2>Apabila saldo biaya overhead yang dibebankan lebih besar dari realisasinya , maka saldo penyesuaian harga pokok penjualan akan ... </h2>
                <button id='benarSoal36' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal36' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali36' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban36' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Berkurang</h2>
        </div>

        <div id='soal37' class="x_content">
            <h2>Penilaian prestasi suatu organisasi sektor publik (PSAK 45) difokuskan pada value for money. Pembahasan pokok pada PSAK 45 adalah……</h2>
                <button id='benarSoal37' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal37' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali37' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban37' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Akuntansi Organisasi Nirlaba</h2>
        </div>

        <div id='soal38' class="x_content">
            <h2>Penghasilan kena pajak PT.Abadi tahun 2013 adalah 20.000.000.000 dengan total peredaran bruto 48.000.000.000. Maka berapakah PPh Badan terutang?</h2>
                <button id='benarSoal38' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal38' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali38' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban38' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Penghasilan yang mendapat fasilitas : </br>
                4.800.000.000   x 20.000.000.000 = 2.000.000.000 </br>
                48.000.000.000 </br>
                PPh yang diberikan fasilitas = 50% x 25% x 2.000.000.000 = 250.000.000 </br>
                PPh yang tidak diberikan fasilitas =25% x (20.000.000.000-2.000.000.000) = 4.500.000.000 </br>
                Maka PPh terutang = 4.750.000.000 </br>
            </h2>
        </div>

        <div id='soal39' class="x_content">
            <h2>Bila persamaan Q1 = -25 + 0,5P berubah menjadi Q2 = -20 + 0,5 P ini berarti kurva....bergeser ke....</h2>
                <button id='benarSoal39' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal39' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali39' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban39' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2> Kurva penawaran bergeser ke kanan</h2>
        </div>

        <div id='soal40' class="x_content">
            <h2>Setiap informasi keuangan (financial information) yang dilakukan oleh PT TAC harus dicatat dan dibukukan dalam laporan keuangan, jika terdapat informasi non-keuangan seperti:</h2> </br>
                a.  Obligasi PT TAC yang gagal bayar </br>
                b.  PT TAC membuka 2 pabrik baru. </br>
                c.  PT TAC menerbitkan saham baru (Right Issue) </br>
                Dalam laporan keuangan apa informasi non-keuangan (non-financial information) tersebut dicatat? </br>

                <button id='benarSoal40' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal40' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali40' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban40' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Catatan atas laporan keuangan / CALK / Disclosure</h2>
        </div>

        <div id='soal41' class="x_content">
            <h2>Diketahui fungsi permintaan : P = 2500 – Q, bila terjadi Point Elasticity (Ep) adalah unitary elastis hal tersebut kan terjadi pada tingkat harga...</h2>
                <button id='benarSoal41' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal41' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali41' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban41' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>E= dQ/dP  x  P1/Q1 (unitary elastis = E = 1) </br>
                P=Q </br>
                P+Q = 2500 </br>
                P = 1250 </br>
            </h2>
        </div>

        <div id='soal42' class="x_content">
            <h2>7.  Buatlah jurnal penutup berdasar informasi berikut ini </h2></br>
            Prive Amik 25.000 </br>
            Beban Gaji 280.000 </br>
            Beban Sewa 40.000 </br>
            
                <button id='benarSoal42' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal42' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali42' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban42' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> Ikhtisar Laba Rugi </th>
                        <td>320.000</td>
                        <td> </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Beban Gaji </th>
                        <td> </td>
                        <td>280.000 </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Beban Sewa </th>
                        <td> </td>
                        <td>40.000 </td>
                        
                    </tr>
                    <tr>
                        <th scope="row"> Modal Amik </th>
                        <td>25.000</td>
                        <td> </td>
                        
                    </tr>
                    <tr>
                        <th scope="row"> Prive Amik </th>
                        <td></td>
                        <td>25.000 </td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </div>        

        <div id='soal43' class="x_content">
            <h2>Marhentin Ika, belum menikah, pada tahun 2012 bekerja sebagai pegawai tetap pada Perusahaan PT Mahagoni Gemilang menerima gaji yang dibayar mingguan sebesar Rp 600.000,00. Berapakah PPh Pasal 21 atas gaji minggu pertama bulan Agustus 2013 apabila dalam minggu tersebut hanya menerima penghasilan berupa gaji saja?</h2>
                <button id='benarSoal43' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal43' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali43' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban43' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Gaji        4 x Rp600.000,00 </th>
                        <td>Rp 2.400.000,00</td>
                        
                        
                    </tr>
                    <tr>
                        <th scope="row">Pengurangan:</th>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Biaya Jabatan5% x Rp2.400.000,00</th>
                        <td> </td>
                    </tr>
                    <tr>
                        <th scope="row">Penghasilan neto sebulan </th>
                        <td>Rp 2.280.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">Penghasilan neto setahun 12 x Rp2.280.000,00 </th>
                        <td>Rp 27.360.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">PTKP</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"> Untuk WP Sendiri </th>
                        <td> (Rp 24.300.000,00) </td>
                    </tr>
                    <tr>
                        <th scope="row">Penghasilan Kena Pajak setahun  </th>
                        <td>Rp 3.060.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">PPh Pasal 21:5% x Rp3.060.000,00        </th>
                        <td>Rp 153.000,00</td>
                    </tr>
                    <tr>
                        <th scope="row">PPh Pasal 21 sebulanRp153.000,00 : 12   </th>
                        <td>Rp 12.750,00</td>
                    </tr>
                    <tr>
                        <th scope="row">PPh Pasal 21 atas gaji/upah minggu pertama Rp12.750,00 : 4  </th>
                        <td>Rp 3.188,00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soal44' class="x_content">
            <h2>Michaela Corporation purchased from its stockholders 5,000 shares of its own previously issued stock for $250,000. It later resold 2,000 shares for $54 per share. Prepare journal entries for sales of treasury stocks!</h2>
                <button id='benarSoal44' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal44' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali44' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban44' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Cash</th>
                        <td>(2.000 x 54)</td>
                        <td>108.000 </td>
                    </tr>
                    <tr>
                        <th scope="row"> </th>
                        <td>Treasury (2.000 x (250.000/5000))</td>
                        <td>100.000</td>
                    </tr>
                    <tr>
                        <th scope="row"> </th>
                        <td>Additional Paid in Capital-Treasury Stock</td>
                        <td>8.000</td>
                    </tr>
               
                </tbody>
            </table>
        </div>
        </div>        

        <div id='soal45' class="x_content">
            <h2>PT A sebagai PKP melakukan transaksi pada tanggal 3 Januari 2015 sebagai berikut: </br>
                    Menjual buku senilai Rp 22.000.000 (include PPN) ke konsumen biasa </br>
                    Menjual buku senilai Rp 1.100.000 (include PPN) ke PEMKOT SURABAYA </br>
                    Berapakah jumlah PPN Keluaran yang harus disetorkan oleh PT. A? </br>
            </h2>
                <button id='benarSoal45' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal45' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali45' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban45' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>2.000.000</h2>
        </div>

        <div id='soal46' class="x_content">
            <h2>Di bawah ini adalah transaksi selama bulan Mei 2015 </br>
                a.  Pendapatan jasa yang belum tertagih Rp 9.500 </br>
                b.  Gaji yang belum terbayarkan Rp 1.200 </br>
            </h2>
                <button id='benarSoal46' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal46' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali46' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban46' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> a </th>
                        <td>Piutang Usaha</td>
                        <td>9500 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <th scope="row"> </th>
                        <td>Pendapatan Jasa</td>
                        <td> </td>
                        <td>9500 </td>
                    </tr>
                    <tr>
                        <th scope="row"> b </th>
                        <td>Beban Gaji</td>
                        <td>1200 </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <th scope="row">  </th>
                        <td>Utang Gaji</td>
                        <td> </td>
                        <td>1200 </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id='soal47' class="x_content">
            <h2>Selling and Administrative Expense are classified as ...</h2>
                <button id='benarSoal47' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal47' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali47' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban47' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>Period Costs</h2>
        </div>

        <div id='soal48' class="x_content">
            <h2>Dalam akuntansi fiskal, aset tetap non bangunan dan aset tetap tak berwujud dapat disusutkan dan diamortisasi dengan menggunakan metode.....atau.....</h2>
                <button id='benarSoal48' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal48' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali48' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban48' class="x_content">
            <h2>Jawaban:</h2></br>
            <h2>: Garis lurus ( Straight Line ) atau Saldo Menurun ( Declining Balance ) </h2>
        </div>        

        <div id='soal49' class="x_content">
            <h2>Airlangga University sells 4,000 season basketball tickets at $180 each for its 12-game homeschedule. Give the entry to record the sale of the season tickets </h2>
                <button id='benarSoal49' type="submit" class="btn btn-success">Benar</button>
                <button id='salahSoal49' type="submit" class="btn btn-primary">Salah</button>
                <button id='pilihKembali49' type="submit" class="btn btn-success">Soal</button>
        </div>
        <div id='jawaban49' class="x_content">
            <h2>Jawaban:</h2></br>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Cash</th>
                        <td>720.000</td>
                    </tr>
                    <tr>
                        <th scope="row">Unearned Football Ticket Revenue</th>
                        <td>720.000</td>
                    </tr>
               
                </tbody>
            </table>
        </div>        
    </div>
</div>

</section>
<style type="text/css">
    table.test td {
    margin: 10px 10px 10px 10px;
    padding: 10px 10px 10px 10px;
    }
    table.test {
        border-collapse: separate;
        border-spacing: 7px;
        *border-collapse: expression('separate', cellSpacing = '10px');
    }
</style>
<script type="text/javascript">
    $('#soal1').hide();
    $('#jawaban1').hide();
    $('#soal2').hide();
    $('#jawaban2').hide();
    $('#soal3').hide();
    $('#jawaban3').hide();
    $('#soal4').hide();
    $('#jawaban4').hide();
    $('#soal5').hide();
    $('#jawaban5').hide();
    $('#soal6').hide();
    $('#jawaban6').hide();
    $('#soal7').hide();
    $('#jawaban7').hide();
    $('#soal8').hide();
    $('#jawaban8').hide();
    $('#soal9').hide();
    $('#jawaban9').hide();
    $('#soal10').hide();
    $('#jawaban10').hide();
    $('#soal11').hide();
    $('#jawaban11').hide();
    $('#soal12').hide();
    $('#jawaban12').hide();
    $('#soal13').hide();
    $('#jawaban13').hide();
    $('#soal2').hide();
    $('#jawaban2').hide();
    $('#soal14').hide();
    $('#jawaban14').hide();
    $('#soal15').hide();
    $('#jawaban15').hide();
    $('#soal16').hide();
    $('#jawaban16').hide();
    $('#soal17').hide();
    $('#jawaban17').hide();
    $('#soal18').hide();
    $('#jawaban18').hide();
    $('#soal19').hide();
    $('#jawaban19').hide();
    $('#soal20').hide();
    $('#jawaban20').hide();
    $('#soal21').hide();
    $('#jawaban21').hide();
    $('#soal22').hide();
    $('#jawaban22').hide();
    $('#soal23').hide();
    $('#jawaban23').hide();
    $('#soal24').hide();
    $('#jawaban24').hide();
    $('#soal25').hide();
    $('#jawaban25').hide();
    $('#soal26').hide();
    $('#jawaban26').hide();
    $('#soal27').hide();
    $('#jawaban27').hide();
    $('#soal28').hide();
    $('#jawaban28').hide();
    $('#soal29').hide();
    $('#jawaban29').hide();
    $('#soal30').hide();
    $('#jawaban30').hide();
    $('#soal31').hide();
    $('#jawaban31').hide();
    $('#soal32').hide();
    $('#jawaban32').hide();
    $('#soal33').hide();
    $('#jawaban33').hide();
    $('#soal34').hide();
    $('#jawaban34').hide();
    $('#soal35').hide();
    $('#jawaban35').hide();
    $('#soal36').hide();
    $('#jawaban36').hide();
    $('#soal37').hide();
    $('#jawaban37').hide();
    $('#soal38').hide();
    $('#jawaban38').hide();
    $('#soal39').hide();
    $('#jawaban39').hide();
    $('#soal40').hide();
    $('#jawaban40').hide();
    $('#soal41').hide();
    $('#jawaban41').hide();
    $('#soal42').hide();
    $('#jawaban42').hide();
    $('#soal43').hide();
    $('#jawaban43').hide();    
    $('#soal44').hide();
    $('#jawaban44').hide();
    $('#soal45').hide();
    $('#jawaban45').hide();
    $('#soal46').hide();
    $('#jawaban46').hide();
    $('#soal47').hide();
    $('#jawaban47').hide();
    $('#soal48').hide();
    $('#jawaban48').hide();
    $('#soal49').hide();
    $('#jawaban49').hide();                                  
                
    $('#idMerah').hide(); 
    $('#idBiru').hide();   
    $('#idHijau').hide();        
    $('#idKuning').hide();   
    $('#idAbuabu').hide();     

    $('#formMinPoint').hide();

// memberi warna pada kotak
    $(document).ready(function(){
            $('#pilihWarna').click(function(){
                // untuk memastikan tidak salah update
                // Merah
                var scoreBoard1 = $('#scoreMerah').text();
                scoreBoard1 = parseInt(scoreBoard1);
                // alert(scoreBoard1);
                $('#scoreMerah').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard1+'">'+scoreBoard1+'</font>');
                $('#scoreTotalMerah').html('<input name="score1" value='+scoreBoard1+'>');

                //Biru 
                var scoreBoard2 = $('#scoreBiru').text();                    
                scoreBoard2 = parseInt(scoreBoard2);
                // alert(kotak2Benar);
                $('#scoreBiru').html('<font color="#c0392b" id="scoreBiru" val="'+scoreBoard2+'">'+scoreBoard2+'</font>');
                $('#scoreTotalBiru').html('<input name="score2" value='+scoreBoard2+'>');

                // Hijau
                var scoreBoard3 = $('#scoreHijau').text();
                scoreBoard3 = parseInt(scoreBoard3);
                // alert(kotak2Benar);
                $('#scoreHijau').html('<font color="#c0392b" id="scoreHijau" val="'+scoreBoard3+'">'+scoreBoard3+'</font>');
                $('#scoreTotalHijau').html('<input name="score3" value='+scoreBoard3+'>');    

                // Kuning 
                var scoreBoard4 = $('#scoreKuning').text();
                scoreBoard4 = parseInt(scoreBoard4);
                // alert(kotak2Benar);
                $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard4+'">'+scoreBoard4+'</font>');
                $('#scoreTotalKuning').html('<input name="score4" value='+scoreBoard4+'>');

                // Abuabu
                var scoreBoard5 = $('#scoreAbuabu').text();
                scoreBoard5 = parseInt(scoreBoard5);
                // alert(scoreBoard5);
                $('#scoreAbuabu').html('<font color="#c0392b" id="scoreAbuabu" val="'+scoreBoard5+'">'+scoreBoard5+'</font>');
                $('#scoreTotalAbuabu').html('<input name="score5" value='+scoreBoard5+'>'); 

                var kotak = $('#kotakId').val();
                var warna = $('#warnaId').val();
                // alert(kotak);
                // merah
                if ( warna == '#c0392b'){
                    var scoreBoard = $('#scoreMerah').text();
                    scoreBoard = parseInt(scoreBoard)+20;
                    alert(scoreBoard);
                    $('#scoreMerah').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalMerah').html('<input name="score1" id="score1" value='+scoreBoard+'>');                    
                    $('#'+kotak).css('background-color', warna);
                }
                // biru
                else if( warna == '#2980b9'){
                    // alert('kucing');
                    var scoreBoard = $('#scoreBiru').text();                    
                    scoreBoard = parseInt(scoreBoard)+20;
                    // alert(kotak2Benar);
                    $('#scoreBiru').html('<font color="#c0392b" id="scoreBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoard+'>');                       
                    $('#'+kotak).css('background-color', warna);                    
                }
                // hijau
                else if ( warna == '#2ecc71'){
                    // alert('kucing');
                    var scoreBoard = $('#scoreHijau').text();
                    scoreBoard = parseInt(scoreBoard)+20;
                    // alert(kotak2Benar);
                    $('#scoreHijau').html('<font color="#c0392b" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalHijau').html('<input name="score3" id="score3" value='+scoreBoard+'>');                       
                    $('#'+kotak).css('background-color', warna);                    
                }
                // kuning
                else if ( warna == '#f1c40f'){                    
                    var scoreBoard = $('#scoreKuning').text();
                    scoreBoard = parseInt(scoreBoard)+20;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoard+'>');                       
                    $('#'+kotak).css('background-color', warna);
                }
                // abuabu
                else{
                    // alert('kucing');
                    var scoreBoard = $('#scoreAbuabu').text();
                    scoreBoard = parseInt(scoreBoard)+20;
                    // alert(scoreBoard);
                    $('#scoreAbuabu').html('<font color="#c0392b" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalAbuabu').html('<input name="score5" id="score5" value='+scoreBoard+'>');                       
                    $('#'+kotak).css('background-color', warna);                    
                }                
            });
        });

// kurangi point -5
    $(document).ready(function(){
            $('#btnMinPoin').click(function(){
                var warna = $('#minusWarnaId').val();
                // alert(warna);
                // merah
                if ( warna == '#c0392b'){
                    var scoreBoard = $('#scoreMerah').text();
                    scoreBoard = parseInt(scoreBoard)-5;
                    alert(scoreBoard);
                    $('#scoreMerah').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalMerah').html('<input name="score1" id="score1" value='+scoreBoard+'>');
                    $('#score1').hide(); 
                    $('#formMinPoint').hide(); 
                    $('#tblPanel').show();                
                    $('#round5').show();                 
                }
                // biru
                else if( warna == '#2980b9'){
                    // alert('kucing');
                    var scoreBoard = $('#scoreBiru').text();                    
                    scoreBoard = parseInt(scoreBoard)-5;
                    // alert(kotak2Benar);
                    $('#scoreBiru').html('<font color="#c0392b" id="scoreBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalBiru').html('<input name="score2" id="score2" value='+scoreBoard+'>');
                    $('#score2').hide();                          
                    $('#formMinPoint').hide(); 
                    $('#tblPanel').show();                
                    $('#round5').show();                                                        
                }
                // hijau
                else if ( warna == '#2ecc71'){
                    // alert('kucing');
                    var scoreBoard = $('#scoreHijau').text();
                    scoreBoard = parseInt(scoreBoard)-5;
                    // alert(kotak2Benar);
                    $('#scoreHijau').html('<font color="#c0392b" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalHijau').html('<input name="score3" id="score3" value='+scoreBoard+'>');
                    $('#score3').hide();                       
                    $('#formMinPoint').hide(); 
                    $('#tblPanel').show();                
                    $('#round5').show();                                                          
                }
                // kuning
                else if ( warna == '#f1c40f'){                    
                    var scoreBoard = $('#scoreKuning').text();
                    scoreBoard = parseInt(scoreBoard)-5;
                    // alert(kotak2Benar);
                    $('#scoreKuning').html('<font color="#c0392b" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalKuning').html('<input name="score4" id="score4" value='+scoreBoard+'>');
                    $('#score4').hide();                     
                    $('#formMinPoint').hide(); 
                    $('#tblPanel').show();                
                    $('#round5').show();                                            
                }
                // abuabu
                else{
                    // alert('kucing');
                    var scoreBoard = $('#scoreAbuabu').text();
                    scoreBoard = parseInt(scoreBoard)-5;
                    // alert(scoreBoard);
                    $('#scoreAbuabu').html('<font color="#c0392b" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');
                    $('#scoreTotalAbuabu').html('<input name="score5" id="score5" value='+scoreBoard+'>');
                    $('#score5').hide();                     
                    $('#formMinPoint').hide(); 
                    $('#tblPanel').show();                
                    $('#round5').show();                                                              
                }                
            });
        });

// soal 1
        $(document).ready(function(){
            $('#merah1').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal1').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal1').click(function(){ 
                $('#jawaban1').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal1').click(function(){             
                $('#formMinPoint').show();
                $('#soal1').hide();
                $('#jawaban1').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali1').click(function(){
                $('#soal1').hide();
                $('#jawaban1').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });            

// soal no 2
        $(document).ready(function(){
            $('#merah2').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal2').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal2').click(function(){ 
                $('#jawaban2').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal2').click(function(){             
                $('#formMinPoint').show();
                $('#soal2').hide();
                $('#jawaban2').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali2').click(function(){
                $('#soal2').hide();
                $('#jawaban2').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });

        // soal no 3
        $(document).ready(function(){
            $('#merah3').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal3').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal3').click(function(){
                // alert('hai');
                $('#jawaban3').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal3').click(function(){             
                $('#formMinPoint').show();
                $('#soal3').hide();
                $('#jawaban3').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali3').click(function(){
                $('#soal3').hide();
                $('#jawaban3').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 4
        $(document).ready(function(){
            $('#merah4').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal4').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal4').click(function(){ 
                $('#jawaban4').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal4').click(function(){             
                $('#formMinPoint').show();
                $('#soal4').hide();
                $('#jawaban4').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali4').click(function(){
                $('#soal4').hide();
                $('#jawaban4').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 5
        $(document).ready(function(){
            $('#merah5').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal5').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal5').click(function(){ 
                $('#jawaban5').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal5').click(function(){             
                $('#formMinPoint').show();
                $('#soal5').hide();
                $('#jawaban5').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali5').click(function(){
                $('#soal5').hide();
                $('#jawaban5').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 6
        $(document).ready(function(){
            $('#merah6').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal6').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal6').click(function(){ 
                $('#jawaban6').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal6').click(function(){             
                $('#formMinPoint').show();
                $('#soal6').hide();
                $('#jawaban6').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali6').click(function(){
                $('#soal6').hide();
                $('#jawaban6').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 7
        $(document).ready(function(){
            $('#merah7').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal7').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal7').click(function(){ 
                $('#jawaban7').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal7').click(function(){             
                $('#formMinPoint').show();
                $('#soal7').hide();
                $('#jawaban7').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali7').click(function(){
                $('#soal7').hide();
                $('#jawaban7').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 8
        $(document).ready(function(){
            $('#merah8').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal8').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal8').click(function(){ 
                $('#jawaban8').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal8').click(function(){             
                $('#formMinPoint').show();
                $('#soal8').hide();
                $('#jawaban8').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali8').click(function(){
                $('#soal8').hide();
                $('#jawaban8').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 9
        $(document).ready(function(){
            $('#merah9').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal9').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal9').click(function(){ 
                $('#jawaban9').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal9').click(function(){             
                $('#formMinPoint').show();
                $('#soal9').hide();
                $('#jawaban9').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali9').click(function(){
                $('#soal9').hide();
                $('#jawaban9').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 10
        $(document).ready(function(){
            $('#merah10').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal10').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal10').click(function(){ 
                $('#jawaban10').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal10').click(function(){             
                $('#formMinPoint').show();
                $('#soal10').hide();
                $('#jawaban10').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali10').click(function(){
                $('#soal10').hide();
                $('#jawaban10').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 11
        $(document).ready(function(){
            $('#merah11').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal11').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal11').click(function(){ 
                $('#jawaban11').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal11').click(function(){             
                $('#formMinPoint').show();
                $('#soal11').hide();
                $('#jawaban11').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali11').click(function(){
                $('#soal11').hide();
                $('#jawaban11').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 12
        $(document).ready(function(){
            $('#merah12').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal12').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal12').click(function(){ 
                $('#jawaban12').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal12').click(function(){             
                $('#formMinPoint').show();
                $('#soal12').hide();
                $('#jawaban12').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali12').click(function(){
                $('#soal12').hide();
                $('#jawaban12').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 13
        $(document).ready(function(){
            $('#merah13').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal13').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal13').click(function(){ 
                $('#jawaban13').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal13').click(function(){             
                $('#formMinPoint').show();
                $('#soal13').hide();
                $('#jawaban13').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali13').click(function(){
                $('#soal13').hide();
                $('#jawaban13').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 14
        $(document).ready(function(){
            $('#merah14').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal14').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal14').click(function(){ 
                $('#jawaban14').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal14').click(function(){             
                $('#formMinPoint').show();
                $('#soal14').hide();
                $('#jawaban14').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali14').click(function(){
                $('#soal14').hide();
                $('#jawaban14').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 15
        $(document).ready(function(){
            $('#merah15').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal15').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal15').click(function(){ 
                $('#jawaban15').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal15').click(function(){             
                $('#formMinPoint').show();
                $('#soal15').hide();
                $('#jawaban15').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali15').click(function(){
                $('#soal15').hide();
                $('#jawaban15').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 16
        $(document).ready(function(){
            $('#merah16').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal16').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal16').click(function(){ 
                $('#jawaban16').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal16').click(function(){             
                $('#formMinPoint').show();
                $('#soal16').hide();
                $('#jawaban16').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali16').click(function(){
                $('#soal16').hide();
                $('#jawaban16').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 17
        $(document).ready(function(){
            $('#merah17').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal17').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal17').click(function(){ 
                $('#jawaban17').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal17').click(function(){             
                $('#formMinPoint').show();
                $('#soal17').hide();
                $('#jawaban17').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali17').click(function(){
                $('#soal17').hide();
                $('#jawaban17').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 18
        $(document).ready(function(){
            $('#merah18').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal18').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal18').click(function(){ 
                $('#jawaban18').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal18').click(function(){             
                $('#formMinPoint').show();
                $('#soal18').hide();
                $('#jawaban18').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali18').click(function(){
                $('#soal18').hide();
                $('#jawaban18').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 19
        $(document).ready(function(){
            $('#merah19').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal19').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal19').click(function(){ 
                $('#jawaban19').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal19').click(function(){             
                $('#formMinPoint').show();
                $('#soal19').hide();
                $('#jawaban19').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali19').click(function(){
                $('#soal19').hide();
                $('#jawaban19').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 20
        $(document).ready(function(){
            $('#merah20').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal20').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal20').click(function(){ 
                $('#jawaban20').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal20').click(function(){             
                $('#formMinPoint').show();
                $('#soal20').hide();
                $('#jawaban20').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali20').click(function(){
                $('#soal20').hide();
                $('#jawaban20').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 21
        $(document).ready(function(){
            $('#merah21').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal21').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal21').click(function(){ 
                $('#jawaban21').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal21').click(function(){             
                $('#formMinPoint').show();
                $('#soal21').hide();
                $('#jawaban21').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali21').click(function(){
                $('#soal21').hide();
                $('#jawaban21').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 22
        $(document).ready(function(){
            $('#merah22').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal22').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal22').click(function(){ 
                $('#jawaban22').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal22').click(function(){             
                $('#formMinPoint').show();
                $('#soal22').hide();
                $('#jawaban22').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali22').click(function(){
                $('#soal22').hide();
                $('#jawaban22').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 23
        $(document).ready(function(){
            $('#merah23').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal23').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal23').click(function(){ 
                $('#jawaban23').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal23').click(function(){             
                $('#formMinPoint').show();
                $('#soal23').hide();
                $('#jawaban23').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali23').click(function(){
                $('#soal23').hide();
                $('#jawaban23').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 24
        $(document).ready(function(){
            $('#merah24').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal24').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal24').click(function(){ 
                $('#jawaban24').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal24').click(function(){             
                $('#formMinPoint').show();
                $('#soal24').hide();
                $('#jawaban24').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali24').click(function(){
                $('#soal24').hide();
                $('#jawaban24').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 25
        $(document).ready(function(){
            $('#merah25').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal25').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal25').click(function(){ 
                $('#jawaban25').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal25').click(function(){             
                $('#formMinPoint').show();
                $('#soal25').hide();
                $('#jawaban25').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali25').click(function(){
                $('#soal25').hide();
                $('#jawaban25').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 26
        $(document).ready(function(){
            $('#merah26').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal26').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal26').click(function(){ 
                $('#jawaban26').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal26').click(function(){             
                $('#formMinPoint').show();
                $('#soal26').hide();
                $('#jawaban26').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali26').click(function(){
                $('#soal26').hide();
                $('#jawaban26').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 27
        $(document).ready(function(){
            $('#merah27').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal27').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal27').click(function(){ 
                $('#jawaban27').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal27').click(function(){             
                $('#formMinPoint').show();
                $('#soal27').hide();
                $('#jawaban27').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali27').click(function(){
                $('#soal27').hide();
                $('#jawaban27').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 28
        $(document).ready(function(){
            $('#merah28').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal28').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal28').click(function(){ 
                $('#jawaban28').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal28').click(function(){             
                $('#formMinPoint').show();
                $('#soal28').hide();
                $('#jawaban28').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali28').click(function(){
                $('#soal28').hide();
                $('#jawaban28').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 29
        $(document).ready(function(){
            $('#merah29').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal29').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal29').click(function(){ 
                $('#jawaban29').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal29').click(function(){             
                $('#formMinPoint').show();
                $('#soal29').hide();
                $('#jawaban29').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali29').click(function(){
                $('#soal29').hide();
                $('#jawaban29').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 30
        $(document).ready(function(){
            $('#merah30').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal30').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal30').click(function(){ 
                $('#jawaban30').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal30').click(function(){             
                $('#formMinPoint').show();
                $('#soal30').hide();
                $('#jawaban30').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali30').click(function(){
                $('#soal30').hide();
                $('#jawaban30').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 31
        $(document).ready(function(){
            $('#merah31').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal31').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal31').click(function(){ 
                $('#jawaban31').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal31').click(function(){             
                $('#formMinPoint').show();
                $('#soal31').hide();
                $('#jawaban31').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali31').click(function(){
                $('#soal31').hide();
                $('#jawaban31').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 32
        $(document).ready(function(){
            $('#merah32').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal32').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal32').click(function(){ 
                $('#jawaban32').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal32').click(function(){             
                $('#formMinPoint').show();
                $('#soal32').hide();
                $('#jawaban32').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali32').click(function(){
                $('#soal32').hide();
                $('#jawaban32').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 33
        $(document).ready(function(){
            $('#merah33').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal33').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal33').click(function(){ 
                $('#jawaban33').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal33').click(function(){             
                $('#formMinPoint').show();
                $('#soal33').hide();
                $('#jawaban33').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali33').click(function(){
                $('#soal33').hide();
                $('#jawaban33').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 34
        $(document).ready(function(){
            $('#merah34').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal34').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal34').click(function(){ 
                $('#jawaban34').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal34').click(function(){             
                $('#formMinPoint').show();
                $('#soal34').hide();
                $('#jawaban34').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali34').click(function(){
                $('#soal34').hide();
                $('#jawaban34').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 35
        $(document).ready(function(){
            $('#merah35').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal35').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal35').click(function(){ 
                $('#jawaban35').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal35').click(function(){             
                $('#formMinPoint').show();
                $('#soal35').hide();
                $('#jawaban35').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali35').click(function(){
                $('#soal35').hide();
                $('#jawaban35').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 36
        $(document).ready(function(){
            $('#merah36').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal36').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal36').click(function(){ 
                $('#jawaban36').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal36').click(function(){             
                $('#formMinPoint').show();
                $('#soal36').hide();
                $('#jawaban36').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali36').click(function(){
                $('#soal36').hide();
                $('#jawaban36').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 37
        $(document).ready(function(){
            $('#merah37').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal37').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal37').click(function(){ 
                $('#jawaban37').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal37').click(function(){             
                $('#formMinPoint').show();
                $('#soal37').hide();
                $('#jawaban37').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali37').click(function(){
                $('#soal37').hide();
                $('#jawaban37').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 38
        $(document).ready(function(){
            $('#merah38').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal38').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal38').click(function(){ 
                $('#jawaban38').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal38').click(function(){             
                $('#formMinPoint').show();
                $('#soal38').hide();
                $('#jawaban38').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali38').click(function(){
                $('#soal38').hide();
                $('#jawaban38').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 39
        $(document).ready(function(){
            $('#merah39').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal39').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal39').click(function(){ 
                $('#jawaban39').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal39').click(function(){             
                $('#formMinPoint').show();
                $('#soal39').hide();
                $('#jawaban39').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali39').click(function(){
                $('#soal39').hide();
                $('#jawaban39').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 40
        $(document).ready(function(){
            $('#merah40').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal40').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal40').click(function(){ 
                $('#jawaban40').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal40').click(function(){             
                $('#formMinPoint').show();
                $('#soal40').hide();
                $('#jawaban40').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali40').click(function(){
                $('#soal40').hide();
                $('#jawaban40').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 41
        $(document).ready(function(){
            $('#merah41').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal41').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal41').click(function(){ 
                $('#jawaban41').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal41').click(function(){             
                $('#formMinPoint').show();
                $('#soal41').hide();
                $('#jawaban41').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali41').click(function(){
                $('#soal41').hide();
                $('#jawaban41').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 42
        $(document).ready(function(){
            $('#merah42').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal42').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal42').click(function(){ 
                $('#jawaban42').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal42').click(function(){             
                $('#formMinPoint').show();
                $('#soal42').hide();
                $('#jawaban42').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali42').click(function(){
                $('#soal42').hide();
                $('#jawaban42').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 43
        $(document).ready(function(){
            $('#merah43').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal43').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal43').click(function(){ 
                $('#jawaban43').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal43').click(function(){             
                $('#formMinPoint').show();
                $('#soal43').hide();
                $('#jawaban43').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali43').click(function(){
                $('#soal43').hide();
                $('#jawaban43').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 44
        $(document).ready(function(){
            $('#merah44').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal44').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal44').click(function(){ 
                $('#jawaban44').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal44').click(function(){             
                $('#formMinPoint').show();
                $('#soal44').hide();
                $('#jawaban44').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali44').click(function(){
                $('#soal44').hide();
                $('#jawaban44').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 45
        $(document).ready(function(){
            $('#merah45').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal45').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal45').click(function(){ 
                $('#jawaban45').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal45').click(function(){             
                $('#formMinPoint').show();
                $('#soal45').hide();
                $('#jawaban45').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali45').click(function(){
                $('#soal45').hide();
                $('#jawaban45').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 46
        $(document).ready(function(){
            $('#merah46').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal46').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal46').click(function(){ 
                $('#jawaban46').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal46').click(function(){             
                $('#formMinPoint').show();
                $('#soal46').hide();
                $('#jawaban46').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali46').click(function(){
                $('#soal46').hide();
                $('#jawaban46').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 47
        $(document).ready(function(){
            $('#merah47').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal47').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal47').click(function(){ 
                $('#jawaban47').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal47').click(function(){             
                $('#formMinPoint').show();
                $('#soal47').hide();
                $('#jawaban47').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali47').click(function(){
                $('#soal47').hide();
                $('#jawaban47').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 48
        $(document).ready(function(){
            $('#merah48').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal48').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal48').click(function(){ 
                $('#jawaban48').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal48').click(function(){             
                $('#formMinPoint').show();
                $('#soal48').hide();
                $('#jawaban48').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali48').click(function(){
                $('#soal48').hide();
                $('#jawaban48').hide();
                $('#tblPanel').show();                
                $('#round5').show();
            });
        });
        
        // soal no 49
        $(document).ready(function(){
            $('#merah49').click(function(){ 
                alert('goJek');
                $('#tblPanel').hide();          
                $('#round5').hide();
                $('#soal49').show();   
            });
        });

        $(document).ready(function(){
            $('#benarSoal49').click(function(){ 
                $('#jawaban49').show();   
            });
        });

        $('#document').ready(function(){
            $('#salahSoal49').click(function(){             
                $('#formMinPoint').show();
                $('#soal49').hide();
                $('#jawaban49').hide();
            });
        });

        $('#document').ready(function(){
            $('#pilihKembali49').click(function(){
                $('#soal49').hide();
                $('#jawaban49').hide();
                $('#tblPanel').show();                
                $('#round5').show();
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
                
        clock.setTime(900);
        clock.setCountdown(true);
    });   
</script>
@stop


@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
