@extends('layouts.full')

@section('head')
<section>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <title>FancyBox 1.3.4 | Demonstration</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
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

        $(document).ready(function(){
            $('#pilihWarna').click(function(){
                var kotak = $('#kotakId').val();
                var warna = $('#warnaId').val();
                // alert(warna);
                $('#'+kotak).css('background-color', warna);
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

<button id='test' value="2">Ok</button>
<div class="col-md-3 col-sm-3 col-xs-8">
    <div class="x_panel">
            <select id="kotakId" class="form-control" required>
                <option value="merah1">Kotak No. 1</option>
                <option value="merah2">Kotak No. 2</option>
                <option value="merah3">Kotak No. 3</option>
                <option value="merah4">Kotak No. 4</option>
                <option value="merah5">Kotak No. 5</option>
            </select>
            <select id="warnaId" class="form-control" required>
                <option value="#c0392b">Merah</option>
                <option value="#2980b9">Biru</option>
                <option value="#2ecc71">Hijau</option>
                <option value="#f1c40f">Kuning</option>
                <option value="#7f8c8d">Abu - Abu</option>
            </select>
            <button id='pilihWarna' value="1" class="btn btn-success">Rubah Warna</button>
    </div>
</div>
    <div id='round1Merah'>
    <table align="center" class="test">
    	<tr bgcolor="#c0392b">
    		<td width="50" height="50" align="center" id="merah1" >
    			<a id="example2" href="../resources/assets/images/2_b.jpg"><font color="#ecf0f1" size="18"><b>1</b></font></a>
    		</td>
            <td width="50" height="50" align="center" id="merah2" >
                <font color="#ecf0f1" size="18"><b>2</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah3" >
                <font color="#ecf0f1" size="18"><b>3</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah1" >
                <a id="example2" href="../resources/assets/images/2_b.jpg"><font color="#ecf0f1" size="18"><b>4</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah2" >
                <font color="#ecf0f1" size="18"><b>5</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah3" >
                <font color="#ecf0f1" size="18"><b>6</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah3" >
                <font color="#ecf0f1" size="18"><b>7</b></font>
            </td>
    	</tr>
    	<tr bgcolor="#c0392b">
    		<td width="50" height="50" align="center" id="merah4" >
    			<font color="#ecf0f1" size="18"><b>8</b></font>
    		</td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>9</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>10</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>11</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>12</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>13</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>14</b></font>
            </td>
    	</tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>15</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>16</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>17</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>18</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>19</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>20</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>21</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>22</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>23</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>24</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>25</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>26</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>27</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>28</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>29</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>30</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>31</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>32</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>33</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>34</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>35</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>36</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>37</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>38</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>39</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>40</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>41</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>42</b></font>
            </td>
        </tr>
        <tr bgcolor="#c0392b">
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>43</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>44</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>45</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah4" >
                <font color="#ecf0f1" size="18"><b>46</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah5" >
                <a id="example2" href="../resources/assets/images/megusta.png"><font color="#ecf0f1" size="18"><b>47</b></font></a>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>48</b></font>
            </td>
            <td width="50" height="50" align="center" id="merah6" >
                <font color="#ecf0f1" size="18"><b>49</b></font>
            </td>
        </tr>
    </table>
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

@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
