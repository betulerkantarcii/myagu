        <!--SAYFA İÇERİKLERİ-->



        <div class="blok-background mb-5">

        <div class="mobil-gizle">

            <div class="container">

                    <h4> {{ trans('public.home.announcements') }} </h4>
                    <div class="row justify-content-around">
                        <div class="card list-group-flush scroll-in col">
                            @if(count($dataAnnouncements) != 0)
                            @for($i=0; $i < count($dataAnnouncements); $i++)
                                <a href="{{ $dataAnnouncements[$i]->link }}" class="list-group-item  d-flex gap-3 py-3" aria-current="true">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div class="temp3-align">
                                    <p class="mb-0 opacity-75">{!! $dataAnnouncements[$i]->description !!}</p>
                                    </div>
                                </div>
                                </a>
                              @endfor
                              @endif
                        </div>

                        <div class="col">
                            
                            <div class="row" >
                                <div class="col">

                                <button type="button" class="list-group-item list-group-item-action d-flex gap-3 py-3" data-toggle="modal" data-target="#pollModal">
                                    <img src="images/myagu/2.png"  class="img-mobile-temp3" alt="twbs" >
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div class="temp3-align">
                                        <p class="mb-0 opacity-75">{{ trans('public.home.poll') }}</p>
                                    </div>
                                    </div>
                                </button>

                                    
                                </div>

                                <div class="col">

                                  <a href="{{ $file_url }}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                    <img src="images/myagu/2.png"  class="img-mobile-temp3" alt="twbs" >
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                      <div class="temp3-align">
                                        <p class="mb-0 opacity-75">{{ trans('public.home.CafeteriaMenu') }}</p>
                                      </div>
                                    </div>
                                  </a>

                                </div>
                            </div>
                            <!--
                            <div class="row" style="padding-top:28px">
                                <div class="col">
                                     <button type="button" class="list-group-item list-group-item-action d-flex gap-3 py-3" data-toggle="modal" data-target="#calendarModal">
                                        <img src="images/myagu/3.png"  class="img-mobile-temp3" alt="twbs" >
                                        <div class="d-flex gap-2 w-100 justify-content-between">
                                          <div class="temp3-align">
                                            <p class="mb-0 opacity-75">{{ trans('public.home.calendar') }}</p>
                                            <div class="scroll-in-calendar">
                                                <div style="text-align: left;">
                                                    @if($dataCalendar != null)
                                                    @for($i=0; $i < count($dataCalendar); $i++)
                                                        <p>{{ $dataCalendar[$i]->title }}</p>
                                                    @endfor
                                                    @endif
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </button>
                              </div>
                            </div>
                            -->

                            <div class="row" style="padding-top:28px">
                            </div>

                        </div>
                    </div>

            </div>
        </div>


        <div class="desktop-gizle">

            <div class="container">
                 <h4> {{ trans('public.home.announcements') }} </h4>
                    <div class="card list-group-flush scroll-in col">
                      @if(count($dataAnnouncements) != 0)
                        @for($i=0; $i < count($dataAnnouncements); $i++)
                            <a href="{{ $dataAnnouncements[$i]->link }}" class="list-group-item  d-flex gap-3 py-3" aria-current="true">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div class="temp3-align">
                                <p class="mb-0 opacity-75">{!! $dataAnnouncements[$i]->description !!}</p>
                                </div>
                            </div>
                            </a>
                          @endfor
                        @endif
                    </div>
                    <div class="row" >
                        <div class="col">

                        <button type="button" class="list-group-item list-group-item-action d-flex gap-3 py-3" data-toggle="modal" data-target="#pollModal">
                              <img src="images/myagu/2.png"  class="img-mobile-temp3" alt="twbs" >
                              <div class="d-flex gap-2 w-100 justify-content-between">
                                  <div class="temp3-align">
                                  <p class="mb-0 opacity-75">{{ trans('public.home.poll') }}</p>
                              </div>
                              </div>
                          </button>

                            
                        </div>

                        <div class="col">

                         <a href="{{ $file_url }}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <img src="images/myagu/2.png"  class="img-mobile-temp3" alt="twbs" >
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="temp3-align">
                                <p class="mb-0 opacity-75">{{ trans('public.home.CafeteriaMenu') }}</p>
                              </div>
                            </div>
                          </a>

                        </div>
                    </div>

                <!--
                <div class="row" style="padding-top:10px">
                    <div class="col">
                        <button type="button" class="list-group-item list-group-item-action d-flex gap-3 py-3" data-toggle="modal" data-target="#calendarModal">
                            <img src="images/myagu/3.png"  class="img-mobile-temp3" alt="twbs" >
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="temp3-align">
                                <p class="mb-0 opacity-75">{{ trans('public.home.calendar') }}</p>
                                <div class="scroll-in-calendar">
                                    <div style="text-align: left;">
                                        @if($dataCalendar != null)
                                        @for($i=0; $i < count($dataCalendar); $i++)
                                            <p>{{ $dataCalendar[$i]->title }}</p>
                                        @endfor
                                        @endif
                                    </div>
                                </div>
                              </div>
                            </div>
                        </button>
                  </div>
                </div>
                -->

                <div class="row" style="padding-top:10px">
                </div>



        </div>
    </div>


             <div class="container" style="padding-top: 75px;">

                <div class="row justify-content-around">

                @if(count($dataCommunicate) != 0)
                <div class="col mb">
                    <h4 class="text-center" style="padding-top: 20px;"> {{ trans('public.home.communicate') }} </h4>
                    @for($i=0; $i < count($dataCommunicate); $i++)
                    <a href="$dataCommunicate[$i]->link" class="bgc-m list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true" >
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div class="temp3-align">
                            <h2 class="mb-0 opacity-75">{{ $dataCommunicate[$i]->title }}</h2>
                            </div>
                        </div>
                        </a>
                    @endfor  
                </div>
                @endif

                @if(count($dataCourses) != 0)
                    <div class="col mb">
                    <h4 class="text-center" style="padding-top: 20px;"> {{ trans('public.home.ManageCourses') }} </h4>
                    @for($i=0; $i < count($dataCourses); $i++)
                    <a href="$dataCourses[$i]->link" class="bgc-t list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div class="temp3-align">
                            <h2 class="mb-0 opacity-75">{{ $dataCourses[$i]->title }}</h2>
                            </div>
                        </div>
                    </a>
                    @endfor
                </div>
                @endif

                @if(count($dataSolve) != 0)
                    <div class="col mb">
                    <h4 class="text-center" style="padding-top: 20px;"> {{ trans('public.home.solve') }} </h4>
                    @for($i=0; $i < count($dataSolve); $i++)
                    <a href="$dataSolve[$i]->link" class="bgc-p list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div class="temp3-align">
                            <h2 class="mb-0 opacity-75">{{ $dataSolve[$i]->title }}</h2>
                            </div>
                        </div>
                        </a>
                        @endfor
                </div>
                @endif

                @if(count($dataAandA) != 0)
                <div class="col mb">
                <h4 class="text-center" style="padding-top: 20px;"> {{ trans('public.home.AcademicsAdministration') }} </h4>
                @if(count($dataAandA) > 6)
                    <ul class="list-group" style="padding-bottom:20px">
                        @for($i=0; $i < 3; $i++)
                        <a href="$dataAandA[$i]->link" class="bgc-s list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">{{ $dataAandA[$i]->title }}</a>
                        @endfor
                    </ul>

                        <ul class="list-group" style="padding-bottom:20px">
                        @for($i=3; $i < 6; $i++)
                        <a href="$dataAandA[$i]->link" class="bgc-s list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">{{ $dataAandA[$i]->title }}</a>
                        @endfor
                    </ul>

                    @for($i=6; $i < count($dataAandA); $i++)
                        <a href="$dataAandA[$i]->link" class="bgc-s list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div class="temp3-align">
                            <h2 class="mb-0 opacity-75">{{ $dataAandA[$i]->title }}</h2>
                            </div>
                        </div>
                        </a>
                    @endfor
                @else
                    @for($i=0; $i < count($dataAandA); $i++)
                        <a href="$dataAandA[$i]->link" class="bgc-s list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div class="temp3-align">
                            <h2 class="mb-0 opacity-75">{{ $dataAandA[$i]->title }}</h2>
                            </div>
                        </div>
                        </a>
                    @endfor
                @endif

                       
                </div>
                @endif


                </div>
        </div>
</div>

</div>
<!-- Modal -->

<div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="margin-top: 50px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ trans('public.home.calendar') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <?php
                if(count($dataCalendar) != 0){
                    $j=0;
                }
            
                while($j < count($dataCalendar)){
                ?>
                    <div  class="row justify-content-around">
                        <?php
                        if($j+3 <= count($dataCalendar)){
                            $last = $j+3;
                        }
                        else{
                            $last = count($dataCalendar);
                        }
                        ?>
                        @for($i=$j; $i< $last; $i++ )
                            <div class="col-lg" style="padding-bottom: 20px;">
                                <div class="list-group-item">
                                    <div class="row">
                                            <div class="col-lg" style="text-align: left;">
                                                <img style="width: 40px;" src="images/myagu/3.png" alt="twbs" >
                                            </div>
                                            <div class="col-lg" style="text-align: right;">
                                            @if($dataCalendar[$i]->event_time != null)
                                                <h4>{{ $dataCalendar[$i]->event_time->format('d-m-y') }}</h4>
                                                <p>{{ $dataCalendar[$i]->event_time->format('H:i') }}</p>
                                                @endif
                                            </div>
                                    </div>
                                    <hr style="border: 1px solid black;">
                                    <div class="restrict" style="text-align: center;">
                                        <h4><a href="{{ $dataCalendar[$i]->link }}"> {{ $dataCalendar[$i]->title }}</a></h4>
                                        <p>{!! $dataCalendar[$i]->description !!}</p>
                                    </div>
                                    <div style="text-align: left;">
                                        <div class="row">
                                            <div class="col-mb">
                                                <img style="width: 25px;" src="images/myagu/loc.png" alt="twbs" >
                                            </div>
                                            <br>
                                            <div class="col-mb">
                                                <h5>{{ $dataCalendar[$i]->event_location }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        @php
                            $j=$j+3;
                        @endphp
                    </div>
                    <?php
                    }
                    ?>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('public.home.close') }}</button>
      </div>
    </div>
  </div>
</div>






<!-- Modal -->

<div class="modal fade" id="pollModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content" style="margin-top: 50px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{ trans('public.home.poll') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group">
            @if(count($dataPoll) != 0)
            @for($i=0; $i < count($dataPoll); $i++)
            <a href="{{ $dataPoll[$i]->link }}" class="list-group-item list-group-item-action flex-column align-items-start">
                <h3 class="mb-1">{{ $dataPoll[$i]->title }}</h3>
                <p class="mb-1">{!! $dataPoll[$i]->description !!}</p>
            </a>
            @endfor
            @endif
        </div>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('public.home.close') }}</button>
      </div>
    </div>
  </div>
</div>





        <!--SAYFA İÇERİKLERİ-->
