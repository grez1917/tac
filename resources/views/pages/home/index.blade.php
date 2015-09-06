@extends('layouts.full')
@section('content')
<section>
    <h1 align='center'>Selamat Datang Peserta TAC 2015</h1>
    
    <table>
    	<tr >
    		<td bgcolor="#2980b9" width="225" height="225" align="center" id="tim1">
    			test
    		</td>
    	</tr>
    </table>

</section>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tim1').click(function(){
			alert('goJek');
		});
	});
</script>
@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
