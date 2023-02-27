        <!--SAYFA İÇERİKLERİ-->



        <div class="blok-background mb-5">

        <div class="mobil-gizle">

            <div class="container">

                    <h4> {{ trans('public.home.announcements') }} </h4>
                    <div class="row justify-content-around">
                        <div class="card scroll-in col">
                            @if(count($dataAnnouncements) != 0)
                            @for($i=0; $i < count($dataAnnouncements); $i++)
                                <a href="{{ $dataAnnouncements[$i]->link }}" class="  d-flex gap-3 py-3" aria-current="true">
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
                                        <h2 class="mb-0 opacity-75">{{ trans('public.home.poll') }}</h2>
                                    </div>
                                    </div>
                                </button>

                                    
                                </div>

                                <div class="col">

                                  <a href="{{ $file_url }}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                    <img src="images/myagu/2.png"  class="img-mobile-temp3" alt="twbs" >
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                      <div class="temp3-align">
                                        <h2 class="mb-0 opacity-75">{{ trans('public.home.CafeteriaMenu') }}</h2>
                                      </div>
                                    </div>
                                  </a>

                                </div>
                            </div>

                            <div class="row" style="padding-top:28px">
                                <div class="col">
                                     <a href="https://posta.agu.edu.tr/home/betul.erkantarci@agu.edu.tr/Calendar.html" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                                        <div class="d-flex gap-2 w-100 justify-content-between">
                                          <div class="temp3-align">
                                            <h2 class="mb-0 opacity-75">{{ trans('public.home.calendar') }}</h2>
                                            <div class="scroll-in-calendar">
                                            <embed type="text/html" src="https://posta.agu.edu.tr/home/betul.erkantarci@agu.edu.tr/Calendar.html" width="600" height="600">
                                            </div>
                                          </div>
                                        </div>
                                      </a>
                              </div>
                            </div>

                            <div class="row" style="padding-top:28px">
                            </div>

                        </div>
                    </div>

            </div>
        </div>
                                          

        <div class="desktop-gizle">

            <div class="container">
                 <h4> {{ trans('public.home.announcements') }} </h4>
                    <div class="card  scroll-in col">
                      @if(count($dataAnnouncements) != 0)
                        @for($i=0; $i < count($dataAnnouncements); $i++)
                            <a href="{{ $dataAnnouncements[$i]->link }}" class="d-flex gap-3 py-3" aria-current="true">
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

                <div class="row" style="padding-top:10px">
                    <div class="col">
                        <a href="https://posta.agu.edu.tr/home/betul.erkantarci@agu.edu.tr/Calendar.html" class="list-group-item list-group-item-action d-flex gap-3 py-3">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                              <div class="temp3-align">
                                <h2 class="mb-0 opacity-75">{{ trans('public.home.calendar') }}</h2>
                                <div class="scroll-in-calendar">
                                <embed class="embed-calendar" type="text/html" src="https://posta.agu.edu.tr/home/betul.erkantarci@agu.edu.tr/Calendar.html" width="350" height="600">
                                </div>
                              </div>
                            </div>
                        </a>
                  </div>
                </div>

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
