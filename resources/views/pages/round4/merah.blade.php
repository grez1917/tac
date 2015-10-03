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
						        jQuery("#fancybox-wrap, #fancybox-overlay").delay(3000).fadeOut(); 
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
            </div>
            <button type="submit" class="btn btn-primary" id='mulai'>Mulai Counter</button>
            <select id="kotakNo" class="form-control" required>
                <option value="merah1">Kotak 1 </option>
                <option value="merah2">Kotak 2</option>
                <option value="merah3">Kotak 3</option>
                <option value="merah4">Kotak 4</option>
                <option value="merah5">Kotak 5</option>
                <option value="merah6">Kotak 6</option>
                <option value="merah7">Kotak 7</option>
                <option value="merah8">Kotak 8</option>
                <option value="merah9">Kotak 9</option>
                <option value="merah10">Kotak 10</option>
                <option value="merah11">Kotak 11</option>
                <option value="merah12">Kotak 12</option>
                <option value="merah13">Kotak 13</option>
                <option value="merah14">Kotak 14</option>
                <option value="merah15">Kotak 15</option>                                                                                     
            </select>
            <select id="jawabanVal" class="form-control" required>
                <option value="benar">Benar</option>
                <option value="salah">Salah</option>
            </select>
            </br>
            <button type="submit" class="btn btn-success" id='btnRubah'>Pilih</button>              
        </div> 


    <div id='round4Merah'>
    <table align="center" class="test">
    	<tr bgcolor="#c0392b">
    		<td width="175" height="175" align="center" id="merah1" >
    			<a id="example2" href="../assets/file/images/01 ADAM SMITH.jpg"><font color="#ecf0f1" size="24"><b>1</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="merah2" >
                <a id="example2" href="../assets/file/images/02 HERNANDO DE SOTO.jpg"><font color="#ecf0f1" size="24"><b>2</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah3" >
                <a id="example2" href="../assets/file/images/03 DAVID RICHARDO.jpg"><font color="#ecf0f1" size="24"><b>3</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah4" >
                <a id="example2" href="../assets/file/images/04 JOAN VIOLET ROBINSON.jpg"><font color="#ecf0f1" size="24"><b>4</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah5" >
                <a id="example2" href="../assets/file/images/05 JOHN MAYNARD KEYNES.jpg"><font color="#ecf0f1" size="24"><b>5</b></font></a>
            </td>
    	</tr>
    	<tr bgcolor="#c0392b">
    		<td width="175" height="175" align="center" id="merah6" >
    			<a id="example2" href="../assets/file/images/06 PAUL ORMEROD.jpg"><font color="#ecf0f1" size="24"><b>6</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="merah7" >
                <a id="example2" href="../assets/file/images/07 IRVING FISHER.jpg"><font color="#ecf0f1" size="24"><b>7</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah8" >
                <a id="example2" href="../assets/file/images/08 ROBERT A. MUNDELL.jpg"><font color="#ecf0f1" size="24"><b>8</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah9" >
                <a id="example2" href="../assets/file/images/09 MILTON FRIEDMAN.jpg"><font color="#ecf0f1" size="24"><b>9</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah10" >
                <a id="example2" href="../assets/file/images/10 FRANCOIS QUESNAY.jpg"><font color="#ecf0f1" size="24"><b>10</b></font></a>
            </td>            
    	</tr>
    	<tr bgcolor="#c0392b">
    		<td width="175" height="175" align="center" id="merah11" >
    			<a id="example2" href="../assets/file/images/11 JOHN LOCKE.jpg"><font color="#ecf0f1" size="24"><b>11</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="merah12" >
                <a id="example2" href="../assets/file/images/12 THOMAS ROBERT MALTHUS.jpg"><font color="#ecf0f1" size="24"><b>12</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah13" >
                <a id="example2" href="../assets/file/images/13 JOHN STUART MILL.jpg"><font color="#ecf0f1" size="24"><b>13</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah14" >
                <a id="example2" href="../assets/file/images/14 DAVID HUME.jpg"><font color="#ecf0f1" size="24"><b>14</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="merah15" >
                <a id="example2" href="../assets/file/images/15 DR. M. UMER CHAPRA.jpg"><font color="#ecf0f1" size="24"><b>15</b></font></a>
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
    $('#kotakNo').hide();
    $('#jawabanVal').hide();
    $('#btnRubah').hide();      

// Rubah warna pada kotak
    $('#document').ready(function(){
        $('#btnRubah').click(function(){
            var nomorKotak = $('#kotakNo').val();
            var jawaban = $('#jawabanVal').val();
            if(jawaban == 'benar')
            {
                $('#'+nomorKotak).html('<img src="../assets/file/images/IMG_TAC - Copy.jpg" alt="" />');
                $('#'+nomorKotak).css('background-color','#ecf0f1');
                var scoreBoard = $('#scoreMerah').text();
                scoreBoard = parseInt(scoreBoard)+5;
                // alert(scoreBoard);
                $('#scoreMerah').html('<font color="#c0392b" id="scoreBoardMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');                
            }
            else if(jawaban == 'salah')
            {
                $('#'+nomorKotak).css('background-color','#ecf0f1');
            }
        });
    }); 


// post method
    $('#document').ready(function(){
        $('#scoreMerah').click(function(){
            $('#jam').hide();
            $('#round4Merah').hide();
            $('#simpanScore').show();
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard);
            $('#scoreTotal').hide();
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// tambah poin(bonus)
     $('#document').ready(function(){
        $('#btnBonus').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)+parseInt(test);
            // alert(kotak2Benar);
            $('#scoreMerah').html('<font color="#c0392b" id="scoreBoardMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });

// kurangi poin
     $('#document').ready(function(){
        $('#btnMinPoin').click(function(){
            var test = $('#bonus').val();
            
            var scoreBoard = $('#scoreMerah').text();
            scoreBoard = parseInt(scoreBoard)-parseInt(test);
            // alert(kotak2Benar);
            $('#scoreMerah').html('<font color="#c0392b" id="scoreBoardMerah" val="'+scoreBoard+'">'+scoreBoard+'</font>');
            $('#scoreTotal').html('<input name="score" value='+scoreBoard+'>');
        });
    });    

// tombol kembali(dari ubah, tambah poin)
     $('#document').ready(function(){
        $('#btnPoinKembali').click(function(){
            $('#simpanScore').hide();
            $('#round4Merah').show();
            $('#jam').show();
        });
    });

// tombol mulai counter

     $('#document').ready(function(){
        $('#mulai').click(function(){
        $('#mulai').hide();
        $('#clock1').show();
        $('#kotakNo').show();
        $('#jawabanVal').show();
        $('#btnRubah').show();                

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
            $('#kotakNo').hide();
            $('#jawabanVal').hide();
            $('#btnRubah').hide();
        });
    });

</script>
@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
