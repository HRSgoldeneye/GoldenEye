@extends ('layouts.master')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h3 class="display-5">HRS-{{$statute->statute_number}}</h3>
        <p class="display-6">{{$statute->statute_text}}</p>
        {{--@if(\App\Statute::isRepealed())--}}
        {{--<p class="display-6">{{$statutes->statute_text}}</p>--}}
        {{--@endif    --}}
    </div>
</div>
@section ('content')


    <!-- Example row of columns -->

    <div class="blog-post">
        <div>
            <div>
                <div id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach($statute->sections as $section)
                        <div class="card">
                            <div class="card-header" role="tab" id="heading{{$loop->index}}">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse{{$loop->index}}" aria-expanded="false"
                                       aria-controls="collapse{{$loop->index}}">
                                        {{$statute->statute_number}}-{{$section->section_number}}
                                        {{$section->section_name}}

                                    </a>
                                </h5>
                            </div>

                            <div id="collapse{{$loop->index}}" class="collapse" role="tabpanel"
                                 aria-labelledby="heading{{$loop->index}}">
                                <div class="card-block">

                                    {{$section->text}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div><!-- /.blog-post -->

    <hr>




@endsection