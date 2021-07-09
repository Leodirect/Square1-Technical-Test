@extends ('Layout')

<link href="{{asset('css/form.css')}}" rel="stylesheet" />

@section('contenu')
    @if(isset(Auth::user()->email))
        <form method="post" action="/update">
            {{ csrf_field() }}
            <h1> Change your Birthday  </h1>
            <div>
                <div>
                    <input type="hidden" name="id" class="form-control" value={{Auth::user()->id}}/>
                </div>
                <div>
                    <input type="date" name="birthday" class="form-control" />
                </div>
                <div class="button">
                    <button type="submit"  class="btn btn-primary" >Change</button>
                </div>
            </div>
        </form>
    @else
        <script>window.location = "/main";</script>
    @endif
@endsection
