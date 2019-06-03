@extends('layouts.landing')

@section('js')
    <script type="text/javascript">
        $('#destino').attr('disabled',true);

        var origen = $("#origen");
        origen.on('change',function(){
            var valA = origen.val();

            if(valA == ""){
                $('#destino').attr('disabled',true);
            }
            else
            {
                $('#destino').attr('disabled',false);
            }

            $('#destino option').each(function(){

                if($(this).val() === valA){//compara si la opcion de B pertence a la opcion selecciona de la lista A
                    $(this).hide();
                }
                else{
                    $(this).show();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: "yyyy-mm-dd",
                language: "{{ \App::getLocale() }}",
                minDate: 0,
                autoclose: true,
                startDate: "tomorrow"
            });

            $('#salida').on("changeDate", function() {
                $('#retorno').datepicker('setStartDate', $('#salida').datepicker('getDate'));
                $('#retorno').focus();
            });

            $("#btn_solo_ida").click(function(){
                /*$("#retorno").hide(500);*/
                $("#retorno").attr('disabled', 'disabled');
                $("#retorno").addClass('disabled');


                $('#ida_vuelta').val('0');
                $("#btn_solo_ida").focus();

                $("#btn_solo_ida").addClass('btn-cotice');
                $("#btn_solo_ida").removeClass('btn-default');
                $("#btn_ida_vuelta").removeClass('btn-cotice');
                $("#btn_ida_vuelta").addClass('btn-default');
            });

            $("#btn_ida_vuelta").click(function(){
                /*$("#retorno").show(500);*/
                $('#ida_vuelta').val('1');
                $("#retorno").attr('disabled', false);
                $("#retorno").removeClass('disabled');

                $("#btn_ida_vuelta").addClass('btn-cotice');
                $("#btn_ida_vuelta").removeClass('btn-default');
                $("#btn_solo_ida").removeClass('btn-cotice');
                $("#btn_solo_ida").addClass('btn-default');
            });

            $('#btn_economy').click(function () {
                $('#cabin').attr('value', 'economy');

                $("#btn_economy").addClass('btn-cotice');
                $("#btn_economy").removeClass('btn-default');
                $("#btn_business").removeClass('btn-cotice');
                $("#btn_business").addClass('btn-default');
            });

            $('#btn_business').click(function () {
                $('#cabin').attr('value', 'business');

                $("#btn_business").addClass('btn-cotice');
                $("#btn_business").removeClass('btn-default');
                $("#btn_economy").removeClass('btn-cotice');
                $("#btn_economy").addClass('btn-default');
            });


        });
    </script>
    <script type="text/javascript">
        $('#ejecutiva').hide(500);
        var origen = $("#origen");
        var destino = $("#destino");
        origen.click('change',function(){
            var valA = origen.val();
            var valB = destino.val();
            if(valA == "12" || valB == '12'){
                $('#ejecutiva').show(500);
            }
            else
            {
                $('#ejecutiva').hide(500);
            }
        });
        destino.click('change',function(){
            var valA = origen.val();
            var valB = destino.val();
            if(valA == "12" || valB == '12'){
                $('#ejecutiva').show(500);
            }
            else
            {  
                $('#ejecutiva').hide(500);
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
              $('#comunicado_ct').modal('show')
        });          
    </script>
@endsection

@section('content')

    <div id="slider" data-section="home">
        <div class="owl-carousel-fullwidth">
            <div class="item">
                <div class="container" style="position: relative;">
                        <div style="position: relative; text-align:center; margin-top: 10%;">
                            <h1 style="color:white; font-size: 84px;">AMBIENTE DE TESTING PAGINA NO COMERCIAL</h1>
                        </div>
                    <div class="row">
                        <br>
                        <div id="main" class="tabs col-md-6 text-center">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a data-toggle="tab" href="#home">@lang('home.booking.title')</a></li>
                              <!--  <li><a href="http://wc2-stage-ql.kiusys.net/widget/">@lang('home.checkin.title')</a></li> -->
							    <li><a data-toggle="tab" href="#menu1">@lang('home.checkin.title')</a></li>
                                <li><a data-toggle="tab" href="#menu2">@lang('home.payment.title')</a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- Compra Online-->

                                <div id="home" class="tab-pane fade in active col-sm-12">
                                    @if(\Modules\Helpers\ShoppingCart::items() <= 0)
                                        {!! Form::open(['route' => ['Kiu.AirAvail']]) !!}
                                        <div class="row radio-toolbar" align="center">
                                            <input type="radio" class="radio4" id="btn_ida_vuelta" name="optradio" checked="checked">
                                            <label for="btn_ida_vuelta" class="radio-inline">@lang('home.booking.roundtrip')</label>

                                            <input type="radio" class="radio4" id="btn_solo_ida" name="optradio">
                                            <label for="btn_solo_ida" class="radio-inline">@lang('home.booking.oneway')</label>
                                        </div>

                                        <input type="hidden" id="ida_vuelta" name="ida_vuelta" value="1">

                                        <div class="col-md-6">
                                            <select name="origin" id="origen" class="classic" required>
                                                <option value="">( @lang('home.booking.selectOrigin')</option>
                                                @foreach($airports as $airport)
                                                    <option value="{{ $airport->id }}">{{ $airport->city }} - {{ $airport->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <select name="destination" id="destino" class="classic" required>
                                                <option value="">) @lang('home.booking.selectArrival')</option>
                                                @foreach($airports as $airport)
                                                    <option value="{{ $airport->id }}">{{ $airport->city }} - {{ $airport->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="departuredate_container" class="col-md-6 calendar">
                                            {!! Form::text('departure_date', null , ['class' => 'datepicker', 'placeholder' => 'š ' . trans('home.booking.departureDate'), 'id' => 'salida', 'required' => 'true', 'autocomplete' => 'off'])  !!}
                                        </div>

                                        <div id="returndate_container" class="col-md-6 calendar">
                                            {!! Form::text('return_date', null , ['class' => 'datepicker', 'placeholder' => 'š ' . trans('home.booking.returnDate'), 'id' => 'retorno', 'required' => 'true', 'autocomplete' => 'off'])  !!}
                                        </div>

                                        <div class="col-md-6">
                                            {!! Form::select( 'adults', [
                                                '1' => '1 ' . trans_choice('home.booking.ADT', 1),
                                                '2' => '2 ' . trans_choice('home.booking.ADT', 2),
                                                '3' => '3 ' . trans_choice('home.booking.ADT', 3),
                                                '4' => '4 ' . trans_choice('home.booking.ADT', 4),
                                                '5' => '5 ' . trans_choice('home.booking.ADT', 5),
                                                '6' => '6 ' . trans_choice('home.booking.ADT', 6),
                                                '7' => '7 ' . trans_choice('home.booking.ADT', 7),
                                                '8' => '8 ' . trans_choice('home.booking.ADT', 8),
                                                '9' => '9 ' . trans_choice('home.booking.ADT', 9)]
                                                ,null, ['class' => 'classic', 'required' => 'true']
                                            ) !!}
                                        </div>
                                        <div class="col-md-6 radio-toolbar">
                                            <div class="row">
                                                <div class="col-xs-6" style="padding-left:0px; padding-top:5%;">
                                                    <input type="radio" class="radio4" id="btn_economy" name="booking_class" checked="checked">
                                                    <label for="btn_economy" class="radio-inline">@lang('home.booking.class.economy')</label>
                                                </div>
                                                    <div class="col-xs-6" id="ejecutiva" style="padding-left:0px; padding-top:5%;" hidden>
                                                        <input type="radio" class="radio4" id="btn_business" name="booking_class">
                                                        <label for="btn_business" class="radio-inline">@lang('home.booking.class.business')</label>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12" style="margin-top:2%;">
                                                <button type="submit" class="btn col-sm-12">@lang('home.booking.searchBtn')</button>
                                                <input type="hidden" name="cabin" id="cabin" value="economy">
                                            </div>
                                        </div>
                                        <div class="col-md-12 tag" align="right">
                                            <span><i>@lang('home.banner.l1')</i></span>
                                        </div>
                                        {!! Form::close() !!}
                                    @else
                                        <br/>
                                        @include('kiu.active')
                                    @endif
                                </div>

                                <!-- Web check in -->
                                <div id="menu1" class="tab-pane fade">

                                   <div id="webcheckin">
										<iframe type="text/html" width="500" height="280" frameborder="0" scrolling="no" src="https://wc2-stage-ql.kiusys.net/widget/" allow-forms> </iframe>
                                    </div>
									
									<br>
										<div id="leyenda" style= "color:black;margin-left:1%;font-size:12px">
												<p align="justify">@lang('home.checkinCond.C1') </p>
												<p align="justify">@lang('home.checkinCond.C2') </p>
												<p align="justify">@lang('home.checkinCond.C3') </p>
												<p align="justify">@lang('home.checkinCond.C4') </p>
										</div>
										
                                </div>

                                <!-- Pago Online -->
                                <div id="menu2" class="tab-pane fade">
                                    {!! Form::open(['route' => 'Kiu.ItinRead']) !!}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input placeholder="@lang('home.checkin.PNR')" class="form-control" type="text" name="code" id="code" maxlength="6" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="form-group">
                                            <button class="btn btn-send" style="width:100%;">@lang('home.booking.searchBtn')</button>
                                            <br><br><br>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div id="publicidad" class="col-md-6">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item fondobannercaru active">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <a href="{{ url('content/news') }}">
                                                <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/PTY_1.png') }}">
                                                </img>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Documentado por Julio Colmenares -->
                                <!-- div class="item fondobannercaru"
                                    <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                        <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/sdqtarifa.jpg') }}">
                                        </img>
                                    </div>
                                </div -->
                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/carr_aua1.jpg') }}">
                                            </img>
                                        </div>
                                    </div>

                                   <!-- JO 30-05-2019
                                       <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/miaif1.png') }}">
                                            </img>
                                        </div>
                                    </div>
                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/miaeq2.png') }}">
                                            </img>
                                        </div>
                                    </div>-->

                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/rdif1.png') }}">
                                            </img>
                                        </div>
                                    </div>
                                   <!-- <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/Curacao_Scroll_1.jpg') }}">
                                            </img>
                                        </div>
                                    </div>-->
                                   <!-- <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/punta_cana_carr.png') }}">
                                            </img>
                                        </div>
                                    </div> -->

                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/GYE_Scroll_2.png') }}">
                                            </img>
                                        </div>
                                    </div>

                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/inteq3.png') }}">
                                            </img>
                                        </div>
                                    </div>
                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/naceq3.png') }}">
                                            </img>
                                        </div>
                                    </div>
									<div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img alt="LaserAirlines" class="img-responsive" src="{{ asset('img/infante1.png') }}">
                                            </img>
                                        </div>
                                    </div>
                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 5.6%;">
                                            <img src="{{ asset('img/DestInt_1.jpg') }}" class="img-responsive" alt="LaserAirlines">
                                        </div>
                                    </div>
                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 3%;">
                                            <img src="{{ asset('img/CompraMulti1.png') }}" class="img-responsive" alt="LaserAirlines">
                                        </div>
                                    </div>
                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 4%; margin-bottom: 1.9%;">
                                            <img src="{{ asset('img/pii6.png') }}" class="img-responsive" alt="LaserAirlines">
                                        </div>
                                    </div>
                                    <div class="item fondobannercaru">
                                        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 4%; margin-bottom: 1.9%;">
                                            <img src="{{ asset('img/CallCenter_phones1.png') }}" class="img-responsive" alt="LaserAirlines">
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="carousel-control left" href="#carousel-example-generic" data-slide="prev" style="margin-top: 10%;">
                                    <img class="flecha" src="{{ asset('img/flecha02.svg')}}">
                                </a>
                                <a class="carousel-control right" href="#carousel-example-generic" data-slide="next" style="margin-top: 10%;">
                                    <img class="flecha" src="{{ asset('img/flecha01.svg')}}">
                                </a>
                                <div class="clearfix"></div>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


          <div class="modal fade bs-example-modal-md" id="comunicado_ct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <a href="{{ url('content/news') }}">
                            <img src="{{ asset('img/PopInicio.png') }}"  alt="LaserAirlines">
                        </a>
                    </div>
                </div>
            </div>
        </div> 
       
    </div>

    {{-- Information pages --}}
    <div id="about"></div>
    @include('components.about')

    <div class="divider"></div>
    <div id="information"></div>
    @include('components.information')

    <div class="divider"></div>
@endsection
