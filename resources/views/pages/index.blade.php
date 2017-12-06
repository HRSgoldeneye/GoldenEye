@extends ('layouts.master')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">GoldenEye</h1>
        <p>The easy to use app that allows easy accessibilty for our local laws, the Hawaii Revised Statutes </p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/HACC17/GoldenEye" role="button">GitHub Repo <i class="fa fa-github-square"></i></a></p>
    </div>
</div>

@section ('content')
    {{$query = ''}}
    {{Form::open(['method' => 'get', 'route' => 'pages.index']) }}
    {{Form::text('query', $query) }}
    {{Form::submit('search')}}
    {{Form::close()}}
    @if(isset($results))
        <div class="row">


                <div class="col-6">Section</div>
            <div class="col-6">Section Number</div>

        </div>
        <hr>
            @foreach($results as $result)
                {{--{{$statute = $result->statute()->get()->first()}}--}}

                {{--{{$statuteNumber = $statuteNumber->statute_number}}--}}
                <div class="row">
                    <div class="col-6">
                    {{$result->section_name}}

                    </div>
                    <div class="col-6">
                        <a href="/statute/{{$result->statute_id}}"> HRS {{$result->statute()->get()->first()->statute_number}}-{{$result->section_number}}</a>
                    </div>
                </div>
                <hr>
            @endforeach



        @endif
------
    Home Page Stuff Here
    -------
@endsection