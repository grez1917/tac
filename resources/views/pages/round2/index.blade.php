@extends('layouts.full')
@section('content')
<section>
<!-- top tiles -->
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

                <!-- tombol tambah skor -->
                <div id='simpanScoreMerah'>
                <form method="post" ><div id='scoreTotalMerah'></div> {!! csrf_field() !!}<button type="submit" class="btn btn-success">Simpan</button></form>
                </div>

                <div id='simpanScoreBiru'>
                <form method="post" ><div id='scoreTotalBiru'></div> {!! csrf_field() !!}<button type="submit" class="btn btn-success">Simpan</button></form>
                </div>    

                <div id='simpanScoreHijau'>
                <form method="post" ><div id='scoreTotalHijau'></div> {!! csrf_field() !!}<button type="submit" class="btn btn-success">Simpan</button></form>
                </div>

                <div id='simpanScoreKuning'>
                <form method="post" ><div id='scoreTotalKuning'></div> {!! csrf_field() !!}<button type="submit" class="btn btn-success">Simpan</button></form>
                </div>    

                <div id='simpanScoreAbuabu'>
                <form method="post" ><div id='scoreTotalAbuabu'></div> {!! csrf_field() !!}<button type="submit" class="btn btn-success">Simpan</button></form>
                </div>
                <div id='simpanKemabali'>
                <button type="submit" class="btn btn-primary" id='btnKembali'>Kembali</button>
                </div> 

                <!-- /top tiles -->
                <div class="row tile_count" align="center" id='btnSoal'>
                    <div class="animated flipInY col-md-6 col-sm-2 col-xs-3 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <button id='soal' type="submit" class="btn btn-primary">Tampilkan Soal</button>
                            <button id='benar' type="submit" class="btn btn-success">Benar</button>
                            <button id='salah' type="submit" class="btn btn-primary">Salah</button>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
                        <div class="left"></div>
                        <div class="right">
                            <div id="clock" style="margin:2em;"></div>
                        </div>
                    </div>
                </div>

                <div id="message1"><font color="#c0392b" size="24"><b>.</b></font></div>
                <div id="message2"><font color="#c0392b" size="12"><b>.</b></font></div>
</section>


<script type="text/javascript">
        $('#simpanScoreMerah').hide();
        $('#simpanScoreBiru').hide();
        $('#simpanScoreHijau').hide();
        $('#simpanScoreKuning').hide();
        $('#simpanScoreAbuabu').hide();        
        $('#simpanKemabali').hide();        

        var clock;
        $('#message1').hide();
        $('#message2').hide();
        
        $(document).ready(function() {
        $('#message').click(function(){
            var clock;

            clock = $('#clock').FlipClock({
                clockFace: 'MinuteCounter',
                autoStart: false,
                callbacks: {
                    stop: function() {
                        $('#message').hide();
                    }
                }
            });
                    
            clock.setTime(4);
            clock.setCountdown(true);
            clock.start();
            });
        });

        $(document).ready(function() {
        $('#soal').click(function(){
            $('#message1').show();
            $('#message2').show();
            $.get("round2/soal", function(data, status){
                //alert("Data: " + data + "\nStatus: " + status);
                if(data.length == 2){
                    alert('Soal Habis Gan...');
                }
                else{
                    var data = JSON.parse(data);
                    $.each(data, function(i, datas){
                        $('#message1').html('<font color="#c0392b" size="24"><b>'+ datas.soal +'</b></font>');
                        $('#message2').html('<font color="#c0392b" size="12"><b>'+ datas.keterangan +'</b></font>');
                    });
                    // $('#message').html('<font color="#c0392b" size="24"><b>'+ datas.soal +'</b></font>');
                var clock;

                clock = $('#clock').FlipClock({
                    clockFace: 'MinuteCounter',
                    autoStart: false,
                    callbacks: {
                        stop: function() {
                            $('#message1').hide();
                            $('#message2').hide();
                        }
                    }
                });
                        
                clock.setTime(4);
                clock.setCountdown(true);
                clock.start();
                }
            });
            // $('#message').show();
            });
        });

// post method tim merah
    $('#document').ready(function(){
        $('#scoreMerah').click(function(){
            $('#jam').hide();
            $('#btnSoal').hide();
            $('#message1').hide();
            $('#message2').hide();
            $('#simpanScoreMerah').show();
            $('#simpanKemabali').show();
            // $('#round1Merah').hide();
            // $('#simpanScore').show();
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+10;
            $('#scoreMerah').html('<font color="#c0392b" id="scoreMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotalMerah').hide();
            $('#scoreTotalMerah').html('<input name="id" value="1"></br><input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
        });
    });

// post method tim biru
    $('#document').ready(function(){
        $('#scoreBiru').click(function(){
            $('#jam').hide();
            $('#btnSoal').hide();
            $('#message1').hide();
            $('#message2').hide();
            $('#simpanScoreBiru').show();
            $('#simpanKemabali').show();
            // $('#round1Merah').hide();
            // $('#simpanScore').show();
            var scoreBoard = $('#scoreBiru').text();
            scoreBoard = parseInt(scoreBoard)+10;
            $('#scoreBiru').html('<font color="#2980b9" id="scoreBiru" val="'+scoreBoard+'">'+scoreBoard+'</font>');   
            $('#scoreTotalBiru').hide();         
            $('#scoreTotalBiru').html('<input name="id" value="2"></br><input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
        });
    });

// post method tim hijau
    $('#document').ready(function(){
        $('#scoreHijau').click(function(){
            $('#jam').hide();
            $('#btnSoal').hide();
            $('#message1').hide();
            $('#message2').hide();
            $('#simpanScoreHijau').show();
            $('#simpanKemabali').show();
            // $('#round1Merah').hide();
            // $('#simpanScore').show();
            var scoreBoard = $('#scoreHijau').text();
            scoreBoard = parseInt(scoreBoard)+10;
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');   
            $('#scoreTotalHijau').hide();         
            $('#scoreTotalHijau').html('<input name="id" value="3"></br><input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
        });
    });

// post method tim kuning
    $('#document').ready(function(){
        $('#scoreKuning').click(function(){
            $('#jam').hide();
            $('#btnSoal').hide();
            $('#message1').hide();
            $('#message2').hide();
            $('#simpanScoreKuning').show();
            $('#simpanKemabali').show();
            // $('#round1Merah').hide();
            // $('#simpanScore').show();
            var scoreBoard = $('#scoreKuning').text();
            scoreBoard = parseInt(scoreBoard)+10;
            $('#scoreKuning').html('<font color="#f1c40f" id="scoreKuning" val="'+scoreBoard+'">'+scoreBoard+'</font>');   
            $('#scoreTotalKuning').hide();         
            $('#scoreTotalKuning').html('<input name="id" value="4"></br><input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
        });
    });

// post method tim abuabu
    $('#document').ready(function(){
        $('#scoreAbuabu').click(function(){
            $('#jam').hide();
            $('#btnSoal').hide();
            $('#message1').hide();
            $('#message2').hide();
            $('#simpanScoreAbuabu').show();
            $('#simpanKemabali').show();
            // $('#round1Merah').hide();
            // $('#simpanScore').show();
            var scoreBoard = $('#scoreAbuabu').text();
            scoreBoard = parseInt(scoreBoard)+10;
            $('#scoreAbuabu').html('<font color="#7f8c8d" id="scoreAbuabu" val="'+scoreBoard+'">'+scoreBoard+'</font>');   
            $('#scoreTotalAbuabu').hide();         
            $('#scoreTotalAbuabu').html('<input name="id" value="5"></br><input name="score" value='+scoreBoard+'>');
            // alert(scoreBoard);
        });
    });
// klik kembali (tampilkan counter dan soal)
$('#document').ready(function(){
        $('#btnKembali').click(function(){
            alert('mama');
            $('#jam').show();
            $('#btnSoal').show();
            $('#message1').show();
            $('#message2').show();
            $('#simpanScoreMerah').hide();
            $('#simpanKemabali').hide();
        });
    });
</script>
@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
