@extends('admin.publicHtml.content')
@section('title', '后台管理')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Echarts <small>Some examples to get you started</small></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bar Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="mainb" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467164"><div style="position: relative; overflow: hidden; width: 1036px; height: 350px; cursor: default;"><canvas width="1036" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 1036px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(0, 0, 0, 0.5); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px / 21px Arial, Verdana, sans-serif; padding: 5px; left: 503.467px; top: 98px;">6?<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#26B99A"></span>sales : 76.7<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#34495E"></span>purchases : 70.7</div></div>

                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Mini Pie</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_mini_pie" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467174"><div style="position: relative; overflow: hidden; width: 485px; height: 350px;"><canvas width="485" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pie Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_pie" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467173"><div style="position: relative; overflow: hidden; width: 485px; height: 350px;"><canvas width="485" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pie Area</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_pie2" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467171"><div style="position: relative; overflow: hidden; width: 485px; height: 350px;"><canvas width="485" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Donut Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_donut" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467172"><div style="position: relative; overflow: hidden; width: 485px; height: 350px;"><canvas width="485" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>


        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Scatter Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_scatter" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467169"><div style="position: relative; overflow: hidden; width: 761px; height: 350px;"><canvas width="761" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 761px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Line Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_line" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467168"><div style="position: relative; overflow: hidden; width: 761px; height: 350px;"><canvas width="761" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 761px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Horizontal Bar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_bar_horizontal" style="height: 370px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467170"><div style="position: relative; overflow: hidden; width: 485px; height: 370px;"><canvas width="485" height="370" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 370px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>World Map</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_world_map" style="height: 370px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467175"><div style="position: relative; overflow: hidden; width: 1036px; height: 370px;"><canvas width="1036" height="370" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 1036px; height: 370px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Pyramid</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_pyramid" style="min-height: 200px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467166"><div style="position: relative; overflow: hidden; width: 485px; height: 200px;"><canvas width="485" height="200" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 200px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Sonar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div id="echart_sonar" style="height: 370px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467165"><div style="position: relative; overflow: hidden; width: 485px; height: 370px;"><canvas width="485" height="370" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 370px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>

                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Guage</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="echart_gauge" style="height: 370px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1578036467167"><div style="position: relative; overflow: hidden; width: 485px; height: 370px;"><canvas width="485" height="370" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 485px; height: 370px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
