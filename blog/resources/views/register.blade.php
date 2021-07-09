@extends ('Layout')

<link href="{{asset('css/form.css')}}" rel="stylesheet" />

@section('contenu')
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
    <form action="/create" method="post">
        {{ csrf_field() }}
        <h1> Register </h1>

        <div>
            <div>
                <label for="username">Username :</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="name">Email :</label>
                <input type="text" id="email" name="email">
            </div>
            <div>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <label for="password">Confirmation of your password :</label>
                <input type="password" id="verify_password" name="verify_password">
            </div>
            <div>
                <label for="password">Birthday :</label>
                <input type="date" name="birthday" id="birthday"/>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form>

@endsection

