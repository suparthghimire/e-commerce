<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('success'))
                <br>
                    <div class="alert alert-success" role="alert">
                        <strong>
                            Success:
                        </strong>
                        {{Session::get('success')}}
                    </div>
                <br>
            @endif
            @if (count($errors)>0)
                <br>
                    <div class="alert alert-danger">
                        <Strong>Error: </Strong>
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                <br>
            @endif
        </div>
    </div>
</div>
