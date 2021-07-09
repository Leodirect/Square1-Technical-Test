<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <title>Square 1 Technical Test</title>

</head>
<body>
<header>
    <h1>Square 1</h1>

    <nav>
        <ul>
            @if(isset(Auth::user()->email))
                <li><a href="/main/successlogin">Check your Birthday</a></li>
                <li><a href="/birthday">Change your Birthday</a></li>
                <li><a href="{{ url('/main/logout') }}">Logout</a></li>
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endif
        </ul>
        <div class="hide">
            <i class="fa fa-bars" aria-hidden="true"></i> Menu
        </div>
    </nav>
</header>


<script type="text/javascript">
    $('.hide').on('click',function(){
        $('nav ul').toggleClass('show');
    });
</script>


<main>
    @yield('contenu')
</main>

<footer class="footer">
    <div>
    </div>
    <div class="middle">
        <a class="btnn" href="mailto:leo.olivier@viacesi.fr">
            <i class="fas fa-envelope"></i>
        </a>
        <a class="btnn" href="https://www.linkedin.com/in/l%C3%A9o-olivier-261067208/">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>
</footer>
</body>
</html>
