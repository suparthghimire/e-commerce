<a href="#" class="navbar-brand">Hack Merch</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
    aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/product')}}">Hoodies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Dashboard</a>{{--href ma dashboard halde if login--}}
            <div class="dropdown-menu" aria-labelledby="dropdown08">
                <a class="dropdown-item" href="{{url('/hoodies')}}">All Hoodies</a>
                <a class="dropdown-item" href="#">Log Out</a>
            </div>
        </li>
    </ul>
</div>
