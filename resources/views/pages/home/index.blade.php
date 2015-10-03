@extends('layouts.full')
@section('content')
<section>
    <h1 align='center' id='round1'>Selamat Datang Peserta TAC 2015</h1>

    <div id='logo'>
    <table align="center"  class="test">
        <tr>
            <td><img src="../public/assets/file/images/unair_300.jpg"></td>
            <td><img src="../public/assets/file/images/IMG_300.jpg"></td>
            <td><img src="../public/assets/file/images/TAC_300.jpg"></td>
        </tr>
    </table>


    <div id='timColour'>
    <table align="center"  class="test">
    	<tr >
    		<td bgcolor="#c0392b" width="225" height="225" align="center" id="tim1" onclick="javascript:location.href='{{ URL::to('round1/merah')}}'">
    		</td>
            <td bgcolor="#2980b9" width="225" height="225" align="center" id="tim2" onclick="javascript:location.href='{{ URL::to('round1/biru')}}'">
            </td>
            <td bgcolor="#2ecc71" width="225" height="225" align="center" id="tim3" onclick="javascript:location.href='{{ URL::to('round1/hijau')}}'">
            </td>
            <td bgcolor="#f1c40f" width="225" height="225" align="center" id="tim4" onclick="javascript:location.href='{{ URL::to('round1/kuning')}}'">
            </td>
            <td bgcolor="#7f8c8d" width="225" height="225" align="center" id="tim5" onclick="javascript:location.href='{{ URL::to('round1/abuabu')}}'">
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

<script type="text/javascript">
    $('#timColour').hide();

    $(document).ready(function(){
        $('#round1').click(function(){
            $('#timColour').show();
        });
    });    

	$(document).ready(function(){
		$('#tim1').click(function(){
			alert('goJek');
		});
	});

    $(document).ready(function(){
        $('#tim2').click(function(){
            alert('goJek..');
        });
    });

    $(document).ready(function(){
        $('#tim3').click(function(){
            alert('goJek....');
        });
    });

    $(document).ready(function(){
        $('#tim4').click(function(){
            alert('goJek......');
        });
    });

    $(document).ready(function(){
        $('#tim5').click(function(){
            alert('goJek........');
        });
    });
</script>
@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
