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
                <div class="row tile_count" align="center">
                    <div class="animated flipInY col-md-6 col-sm-2 col-xs-3 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">

                        </div>
                    </div>
                    <div class="animated flipInY col-md-6 col-sm-8 col-xs-8 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <div id="clock" style="margin:2em;"></div>
                        </div>
                    </div>
                </div>

                <div id="message"><font color="#c0392b" size="24"><b>Ulala...</b></font></div>
</section>


<script type="text/javascript">
var clock;
        
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
        $('#clock').click(function(){
            $('#message').show();
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
</script>
@stop
@section('custom_foot')
    <script type="text/javascript">
    </script>
@stop
