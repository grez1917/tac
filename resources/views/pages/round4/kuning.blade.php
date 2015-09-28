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
                            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                            <div class="count"><font color="#f1c40f">2500</font></div>
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

    <div id='round4Kuning'>
    <table align="center" class="test">
    	<tr bgcolor="#f1c40f">
    		<td width="175" height="175" align="center" id="kuning1" >
    			<a id="example2" href="../assets/file/images/46 JANET YELLEN.jpg" title="JANET YELLEN"><font color="#16a085" size="24"><b>1</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="kuning2" >
                <a id="example2" href="../assets/file/images/47 BILL GATESjpg" title="BILL GATES"><font color="#16a085" size="24"><b>2</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning3" >
                <a id="example2" href="../assets/file/images/48 MARIO DRAGHI.jpg" title="MARIO DRAGHI"><font color="#16a085" size="24"><b>3</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning4" >
                <a id="example2" href="../assets/file/images/49 SERGEY BRIN.jpg" title="SERGEY BRIN"><font color="#16a085" size="24"><b>4</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning5" >
                <a id="example2" href="../assets/file/images/50 LARRY PAGE.jpg" title="LARRY PAGE"><font color="#16a085" size="24"><b>5</b></font></a>
            </td>
    	</tr>
    	<tr bgcolor="#f1c40f">
    		<td width="175" height="175" align="center" id="kuning6" >
    			<a id="example2" href="../assets/file/images/51 WARREN BUFFETT.jpg" title="WARREN BUFFETT"><font color="#16a085" size="24"><b>6</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="kuning7" >
                <a id="example2" href="../assets/file/images/52 CARLOS SLIM HELU.jpg" title="CARLOS SLIM HELU"><font color="#16a085" size="24"><b>7</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning8" >
                <a id="example2" href="../assets/file/images/53 JEFF BEZOS.jpg" title="JEFF BEZOS"><font color="#16a085" size="24"><b>8</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning9" >
                <a id="example2" href="../assets/file/images/54 JAMIE DIMON.jpg" title="JAMIE DIMON"><font color="#16a085" size="24"><b>9</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning10" >
                <a id="example2" href="../assets/file/images/55 REX TILLERSON.jpg" title="REX TILLERSON"><font color="#16a085" size="24"><b>10</b></font></a>
            </td>            
    	</tr>
    	<tr bgcolor="#f1c40f">
    		<td width="175" height="175" align="center" id="kuning11" >
    			<a id="example2" href="../assets/file/images/56 JEFFREY IMMELT.jpg" title="JEFFREY IMMELT"><font color="#16a085" size="24"><b>11</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="kuning12" >
                <a id="example2" href="../assets/file/images/57 MARK ZUCKERBERG.jpg" title="MARK ZUCKERBERG"><font color="#16a085" size="24"><b>12</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning13" >
                <a id="example2" href="../assets/file/images/58 MICHAEL BLOOMBERG.jpg" title="MICHAEL BLOOMBERG"><font color="#16a085" size="24"><b>13</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning14" >
                <a id="example2" href="../assets/file/images/59 CHARLES AND DAVID KOCH.jpg" title="CHARLES AND DAVID KOCH"><font color="#16a085" size="24"><b>14</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="kuning15" >
                <a id="example2" href="../assets/file/images/60 TIMOTHY COOK.jpg" title="TIMOTHY COOK"><font color="#16a085" size="24"><b>15</b></font></a>
            </td>
    	</tr>
    </table>
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

@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
