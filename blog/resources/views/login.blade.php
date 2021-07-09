@extends ('Layout')

<link href="{{asset('css/form.css')}}" rel="stylesheet" />

@section('contenu')
    @if(isset(Auth::user()->email))
        <script>window.location="/main/successlogin";</script>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ url('/main/checklogin') }}">
        {{ csrf_field() }}
        <h1> Login </h1>
        <div>
            <div>
                <label for="username">Username :</label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div>
                <label for="category">Password :</label>
                <input type="password" name="password" class="form-control" />
            </div>
            <div class="button">
                <button type="submit"  class="btn btn-primary" >Login</button>
            </div>
        </div>
    </form>

@endsection

