@if (count($errors))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{--<strong>Danger!</strong> Indicates a dangerous or potentially negative action.--}}

        {{$errors->first()}}
        {{--<ul>--}}
        {{--@foreach($errors->all() as $error)--}}
        {{--<li>{{$error}}</li>--}}
        {{--@endforeach--}}
        {{--<li>{{$errors->first()}}</li>--}}
        {{--</ul>--}}
    </div>
@endif