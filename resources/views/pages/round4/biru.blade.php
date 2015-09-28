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
                            <div class="count"><font color="#2980b9">2500</font></div>
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
    	<tr bgcolor="#2980b9">
    		<td width="175" height="175" align="center" id="biru1" >
    			<a id="example2" href="../assets/file/images/16 DR. RIZAL RAMLI.jpg" title="DR. RIZAL RAMLI"><font color="#ecf0f1" size="24"><b>1</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="biru2" >
                <a id="example2" href="../assets/file/images/17 J.B SUMARLIN.jpg" title="J.B SUMARLIN"><font color="#ecf0f1" size="24"><b>2</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru3" >
                <a id="example2" href="../assets/file/images/18 PROF. DR. EMIL SALIM.jpg" title="PROF. DR. EMIL SALIM"><font color="#ecf0f1" size="24"><b>3</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru4" >
                <a id="example2" href="../assets/file/images/19 SRI MULYANI INDRAWATI.jpg" title="SRI MULYANI INDRAWATI"><font color="#ecf0f1" size="24"><b>4</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru5" >
                <a id="example2" href="../assets/file/images/20 PROF. DR. H. BOEDIONO, M.EC.jpg" title="PROF. DR. H. BOEDIONO, M.EC"><font color="#ecf0f1" size="24"><b>5</b></font></a>
            </td>
    	</tr>
    	<tr bgcolor="#2980b9">
    		<td width="175" height="175" align="center" id="biru6" >
    			<a id="example2" href="../assets/file/images/21 Prof. Dr. Armida Salsiah Alisjahbana, S.E., M.A..jpg" title="Prof. Dr. Armida Salsiah Alisjahbana, S.E., M.A."><font color="#ecf0f1" size="24"><b>6</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="biru7" >
                <a id="example2" href="../assets/file/images/22 ANGGITO ABIMANYU.jpg" title="ANGGITO ABIMANYU"><font color="#ecf0f1" size="24"><b>7</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru8" >
                <a id="example2" href="../assets/file/images/23 CIPUTRA.jpg" title="CIPUTRA"><font color="#ecf0f1" size="24"><b>8</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru9" >
                <a id="example2" href="../assets/file/images/24 TIMOTH F. GEITHNER.jpg" title="TIMOTH F. GEITHNER"><font color="#ecf0f1" size="24"><b>9</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru10" >
                <a id="example2" href="../assets/file/images/25 LAWRENCE SUMMERS.jpg" title="LAWRENCE SUMMERS"><font color="#ecf0f1" size="24"><b>10</b></font></a>
            </td>            
    	</tr>
    	<tr bgcolor="#2980b9">
    		<td width="175" height="175" align="center" id="biru11" >
    			<a id="example2" href="../assets/file/images/26 PAUL KRUGMAN.jpg" title="PAUL KRUGMAN"><font color="#ecf0f1" size="24"><b>11</b></font></a>
    		</td>
            <td width="175" height="175" align="center" id="biru12" >
                <a id="example2" href="../assets/file/images/27 JOSEPH STIGLITZ.jpg" title="JOSEPH STIGLITZ"><font color="#ecf0f1" size="24"><b>12</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru13" >
                <a id="example2" href="../assets/file/images/28 PAUL WOLFOWITZ.jpg" title="PAUL WOLFOWITZ"><font color="#ecf0f1" size="24"><b>13</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru14" >
                <a id="example2" href="../assets/file/images/29 JAMES D. WOLFENSOHN" title="JAMES D. WOLFENSOHN"><font color="#ecf0f1" size="24"><b>14</b></font></a>
            </td>
            <td width="175" height="175" align="center" id="biru15" >
                <a id="example2" href="../assets/file/images/30 EUGENE ISAAC MEYER.jpg" title="EUGENE ISAAC MEYER"><font color="#ecf0f1" size="24"><b>15</b></font></a>
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
