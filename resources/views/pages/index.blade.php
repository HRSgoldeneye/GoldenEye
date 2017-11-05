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
        <table>
            <tr>
                <th>section</th>
                <th>section number</th>
                <th>text</th>
            </tr>
            @foreach($results as $result)
                <tr>
                <td>{{$result->section_name}}</td>
                <td>{{$result->section_number}}</td>
                <td>{{$result->text}}</td>
                </tr>
            @endforeach
        </table>
        @endif
------
    Home Page Stuff Here
    -------
@endsection