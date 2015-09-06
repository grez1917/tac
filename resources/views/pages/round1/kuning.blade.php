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

    <div id='round1Kuning'>
    <table align="center" class="test">
    	<tr bgcolor="#f1c40f">
    		<td width="175" height="175" align="center" id="kuning1" >
    			<font color="#16a085" size="24"><b>1</b></font>
    		</td>
            <td width="175" height="175" align="center" id="kuning2" >
                <font color="#16a085" size="24"><b>2</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning3" >
                <font color="#16a085" size="24"><b>3</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#f1c40f">
    		<td width="175" height="175" align="center" id="kuning4" >
    			<font color="#16a085" size="24"><b>4</b></font>
    		</td>
            <td width="175" height="175" align="center" id="kuning5" >
                <font color="#16a085" size="24"><b>5</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning6" >
                <font color="#16a085" size="24"><b>6</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#f1c40f">
    		<td width="175" height="175" align="center" id="kuning7" >
    			<font color="#16a085" size="24"><b>7</b></font>
    		</td>
            <td width="175" height="175" align="center" id="kuning8" >
                <font color="#16a085" size="24"><b>8</b></font>
            </td>
            <td width="175" height="175" align="center" id="kuning9" >
                <font color="#16a085" size="24"><b>9</b></font>
            </td>
    	</tr>
    </table>
    </div>

    <div id='soal'>
    	<font color="#f1c40f" size="24"><b>Ulala...</b></font>
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
	$('#soal').hide();

	$(document).ready(function(){
		$('#kuning1').click(function(){
			alert('goJek');
			$('#round1Kuning').hide();
			$('#soal').show();
		});
	});

</script>
</section>
@stop

@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop