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
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic',
				'onComplete': function() { 
						        jQuery("#fancybox-wrap, #fancybox-overlay").delay(5000).fadeOut(); 
						      } 
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
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

    <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count" id='jam'>
        <div class="left"></div>
        <div class="right">
            <div id="clock1" style="margin:2em;"></div>
        </div>
        <button type="submit" class="btn btn-primary" id='mulai'>Mulai Counter</button>
    </div>                 

    <div id='round4Hijau'>
    <table align="center" class="test">
    	<tr bgcolor="#2ecc71">
    		<td width="175" height="175" align="center" id="hijau1" >
    			<a id="example2" href="../assets/file/images/31 DOMINIQUE STRAUSS-KHAN.jpg" title="DOMINIQUE STRAUSS-KHAN"><font color="#ecf0f1" size="24"><b>1</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="hijau2" >
                <a id="example2" href="../assets/file/images/32 STANLEY FISCHER.jpg" title="STANLEY FISCHER"><font color="#ecf0f1" size="24"><b>2</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau3" >
                <a id="example2" href="../assets/file/images/33 CAMILLE GUTT.jpg" title="CAMILLE GUTT"><font color="#ecf0f1" size="24"><b>3</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau4" >
                <a id="example2" href="../assets/file/images/34 ALAN GREENSPAN.jpg" title="ALAN GREENSPAN"><font color="#ecf0f1" size="24"><b>4</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau5" >
                <a id="example2" href="../assets/file/images/35 BEN BERNANKE.jpg" title="BEN BERNANKE"><font color="#ecf0f1" size="24"><b>5</b></font></a>
            </td>
    	</tr>
    	<tr bgcolor="#2ecc71">
    		<td width="175" height="175" align="center" id="hijau6" >
    			<a id="example2" href="../assets/file/images/36 HENRY PAULSON.jpg" title="HENRY PAULSON"><font color="#ecf0f1" size="24"><b>6</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="hijau7" >
                <a id="example2" href="../assets/file/images/37 RICARDO HAUSMAN.jpg" title="RICARDO HAUSMAN"><font color="#ecf0f1" size="24"><b>7</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau8" >
                <a id="example2" href="../assets/file/images/38 JOHN CORZINE.jpg" title="JOHN CORZINE"><font color="#ecf0f1" size="24"><b>8</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau9" >
                <a id="example2" href="../assets/file/images/39 PAUL WARBURG.jpg" title="PAUL WARBURG"><font color="#ecf0f1" size="24"><b>9</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau10" >
                <a id="example2" href="../assets/file/images/40 LUDWIG VON MISES.jpg" title="LUDWIG VON MISES"><font color="#ecf0f1" size="24"><b>10</b></font></a>
            </td>            
    	</tr>
    	<tr bgcolor="#2ecc71">
    		<td width="175" height="175" align="center" id="hijau11" >
    			<a id="example2" href="../assets/file/images/41 JOHN VON NEUMANN.jpg" title="JOHN VON NEUMANN"><font color="#ecf0f1" size="24"><b>11</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="hijau12" >
                <a id="example2" href="../assets/file/images/42 DAVID LANDES.jpg" title="DAVID LANDES"><font color="#ecf0f1" size="24"><b>12</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau13" >
                <a id="example2" href="../assets/file/images/43 ROBERT HEILBRONER.jpg" title="ROBERT HEILBRONER"><font color="#ecf0f1" size="24"><b>13</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau14" >
                <a id="example2" href="../assets/file/images/44 KARL MARX" title="KARL MARX"><font color="#ecf0f1" size="24"><b>14</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="hijau15" >
                <a id="example2" href="../assets/file/images/45 BERNARD BARUCH.jpg" title="BERNARD BARUCH"><font color="#ecf0f1" size="24"><b>15</b></font></a>
            </td>
    	</tr>
    </table>
    </div>

    <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="x_panel">
            <div id='simpanScore'>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Bonus poin</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="Default Input" id='bonus'>
                </div>
                <button type="submit" class="btn btn-success" id='btnBonus'>+ Point </button>
                <button type="submit" class="btn btn-primary" id='btnMinPoin'>- Point </button>
                <button type="submit" class="btn btn-primary" id='btnPoinKembali'>Kembali </button>
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

    $('#clock1').hide();
    $('#simpanScore').hide();

    // post method
    $('#document').ready(function(){
        $('#scoreHijau').click(function(){
            $('#jam').hide();
            $('#round4Hijau').hide();
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
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreBoardHijau').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(scoreBoard);
            $('#scoreHijau').html('<font color="#2ecc71" id="scoreHijau" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#jam').show();
            $('#round4Hijau').show();
        });
    });

 // tombol mulai counter

     $('#document').ready(function(){
        $('#mulai').click(function(){
        $('#mulai').hide();
        $('#clock1').show();        

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
    });

// tampilkan tombol mulai setelah di hide
    $('#document').ready(function(){
        $('#clock1').click(function(){
            $('#mulai').show();
            $('#clock1').hide();
        });
    });   

</script>
@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
