@section('head')
<meta name="tervezo" content="{{ $tervezo->t_azon }}">
<script type='module' src="{{asset('script/tervezo.js')}}"></script>
@endsection
@include('includes.head')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <img class="card-img-top" src="{{ url($tervezo->kep) }}" alt="{{ $tervezo->nev }}">
                <div class="card-body">
                    <h5 id="m-nev" class="card-title">{{ $tervezo->nev }}</h5>
                    <p class="card-text">Rólam: {{ $tervezo->leiras }}</p>
                </div>
                <!-- <div class="card-body">
                    <div class="row">
                        <div>
                            <label for="gomb"> </label>
                            <button id="gomb" class="btn btn-primary btn-sm">Termékek</button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@include('includes.foot')