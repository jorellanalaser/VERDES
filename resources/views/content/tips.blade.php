@extends('layouts.simplepage')

@section('section-icon')
    <div class="col-md-5 to-animate">
        <center>
            <img src="{{ asset('img/tiposviajer.png') }}" class="img-responsive img-rounded to-animate contenedor" style="width:70%; height:auto; margin:0 0 20px 0;">
        </center>
    </div>
@endsection

@section('content')
    <div class="col-md-7 to-animate">
        <p style="font-size:150%; color:#87bc24;" align="left">
            <a href="{{ url('/#information') }}">
                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjA1OSAzMS4wNTkiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjA1OSAzMS4wNTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNjRweCIgaGVpZ2h0PSI2NHB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzAuMTcxLDE2LjQxNkgwLjg4OEMwLjM5OCwxNi40MTYsMCwxNi4wMiwwLDE1LjUyOWMwLTAuNDksMC4zOTgtMC44ODgsMC44ODgtMC44ODhoMjkuMjgzICAgIGMwLjQ5LDAsMC44ODgsMC4zOTgsMC44ODgsMC44ODhDMzEuMDU5LDE2LjAyLDMwLjY2MSwxNi40MTYsMzAuMTcxLDE2LjQxNnoiIGZpbGw9IiNiN2MwYzciLz4KCTwvZz4KCTxnPgoJCTxwYXRoIGQ9Ik0xNi4wMTcsMzEuMDU5Yy0wLjIyMiwwLTAuNDQ1LTAuMDgzLTAuNjE3LTAuMjVMMC4yNzEsMTYuMTY2QzAuMDk4LDE1Ljk5OSwwLDE1Ljc3LDAsMTUuNTI5ICAgIGMwLTAuMjQsMC4wOTgtMC40NzEsMC4yNzEtMC42MzhMMTUuNCwwLjI1YzAuMzUyLTAuMzQxLDAuOTE0LTAuMzMyLDEuMjU1LDAuMDJjMC4zNCwwLjM1MywwLjMzMSwwLjkxNS0wLjAyMSwxLjI1NUwyLjE2MywxNS41MjkgICAgbDE0LjQ3MSwxNC4wMDRjMC4zNTIsMC4zNDEsMC4zNjEsMC45MDIsMC4wMjEsMS4yNTVDMTYuNDgsMzAuOTY4LDE2LjI0OSwzMS4wNTksMTYuMDE3LDMxLjA1OXoiIGZpbGw9IiNiN2MwYzciLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" style="height:auto; width:5%; margin-right:20px;" />
            </a>
            @lang('static.info.travelingtips.title')
        </p>

        <div class="panel-group" id="accordion">
            <div class="panel">
                <div class="panel-collapse collapse in">
                    <div class="panel-body" >
                        <ul>
<!--                            <p align="justify">
                                @lang('static.info.travelingtips.p1')
                            </p>
                            <br>
                            <li><p align="justify">@lang('static.info.travelingtips.tips.t33')</p></li> -->

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t1')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t2')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t3')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t4')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t5')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t6')
                            
                            <A href="http://dev.laserairlines.com/content/info"> <align="justify">@lang('static.info.travelingtips.tips.t7')</p></li> </A>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t8')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t9')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t10')

                            <A href="http://dev.laserairlines.com/content/info"> <align="justify">@lang('static.info.travelingtips.tips.t11')</p></li> </A>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t12')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t13')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t14')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t15')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t16')</p></li>

                           <!-- JOMIA 30-05-2019 <li><p align="justify">@lang('static.info.travelingtips.tips.t17')</p></li> -->

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t18')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t19')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t20')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t21')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t22')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t23')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t24')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t25')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t26')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t27')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t28')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t29')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t30')</p></li>

<!--                            <li><p align="justify">@lang('static.info.travelingtips.tips.t31')</p></li>

                            <li><p align="justify">@lang('static.info.travelingtips.tips.t32')</p></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection