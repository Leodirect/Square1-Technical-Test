@extends ('Layout')
<link href="{{asset('css/birthday.css')}}" rel="stylesheet" />
@section('contenu')
 <br />
 <div class="container box">
  @if(isset(Auth::user()->email))
  @else
   <script>window.location = "/main";</script>
  @endif

 </div>
 @if(isset(Auth::user()->email))
     <h2>Welcome {{Auth::user()->name}} </h2>
     <p><?php
$birthday = Auth::user()->birthday;


$parts = explode('-', $birthday, 2);
$birth_date = new DateTime(date('Y') . '-' . $parts[1] .' 00:00:00');
$today = new DateTime('midnight today');

if ($birth_date < $today) {
    $birth_date->modify("+1 Year");
}
$diff = $birth_date->diff($today);

if ($diff->days > 0) {
    echo "There are " . $diff->days . " days remaining until your birthday.";
} else {
    echo "Happy birthday!";
}?><p>
 @else
     <script>window.location = "/main";</script>
 @endif

@endsection
