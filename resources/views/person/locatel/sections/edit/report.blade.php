@section('extra_head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css" integrity="sha256-SHMGCYmST46SoyGgo4YR/9AlK1vf3ff84Aq9yK4hdqM=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js" integrity="sha256-fNoRrwkP2GuYPbNSJmMJOCyfRB2DhPQe0rGTgzRsyso=" crossorigin="anonymous"></script>
<style type="text/css">
    #map {
    height: 350px;
    width: 100%;
    }
</style>
@endsection
<div class="tab-pane fade" id="pills-report" role="tabpanel" aria-labelledby="pills-report-tab">
    <h6>¿Dónde lo vio por última vez?</h6>
    <div class="pb-3">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="pc">Código postal:</label>
                <input type="text" class="form-control @error('pc') is-invalid @enderror" id="pc" name="pc" value="{{ old('pc') }}">
                @error('pc')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="suburb">Colonia:</label>
                <input type="text" class="form-control @error('suburb') is-invalid @enderror" id="suburb" name="suburb" value="{{ old('suburb') }}">
                @error('suburb')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="city_id">Alcaldía:</label>
                <select class="form-control @error('city_id') is-invalid @enderror" id="city_id" name="city_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
                @error('city_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="state_id">Entidad:</label>
                <select class="form-control @error('state_id') is-invalid @enderror" id="state_id" name="state_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($states as $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
                @error('state_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="street">Calle:</label>
                <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" name="street" value="{{ old('street') }}" placeholder="Escribe la calle">
                @error('street')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-8">
                <label for="between_streets">Entre las calles:</label>
                <input type="text" class="form-control @error('between_streets') is-invalid @enderror" id="between_streets" name="between_streets" value="{{ old('between_streets') }}" placeholder="Escribe entre que calles">
                @error('between_streets')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="reference">Referencia:</label>
                <input type="text" class="form-control @error('reference') is-invalid @enderror" id="reference" name="reference" value="{{ old('reference') }}" placeholder="Escribe la referencia">
                @error('reference')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <h6>Para una referencia más exacta, usa el siguiente mapa:</h6>
        <div class="flex-container">
            <div id="map"></div>
        </div>
    </div>
    <div class="border-top py-3">
        <h5>Hechos</h5>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="acts">¿Podría describirme brevemente cómo se dieron los hechos?</label>
                <textarea class="form-control @error('acts') is-invalid @enderror" id="acts" name="disappearance_report[description]" rows="3" placeholder="Escribe la descripción">{{ old('disappearance_report[description]', $person->disappearance_report->description) }}</textarea>
                @error('acts')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="circumstance_id">Selecciona alguna circunstancia del catálogo según la descripción</label>
                <select class="form-control @error('circumstance_id') is-invalid @enderror" id="circumstance_id" name="disappearance_report[circumstance_id]">
                    @if (is_null($person->disappearance_report->circumstance))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($circumstances as $circumstance)
                    @if (old('disappearance_report[circumstance_id]', $person->disappearance_report->circumstance_id) == $circumstance->id)
                    <option value="{{$circumstance->id}}" selected="">{{$circumstance->name}}</option>
                    @else
                    <option value="{{$circumstance->id}}">{{$circumstance->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('circumstance_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
@section('sub_script')
<script type="text/javascript">
    var map = L.map('map').setView([19.4325, -99.1332], 13);
    var OpenStreetMap = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var myMarker = L.marker([19.4325, -99.1332], {title: "xxxNamexxx", alt: "xxxlatlngxxx", draggable: true})
		.addTo(map)
		.on('dragend', function() {
			var coord = String(myMarker.getLatLng()).split(',');
			console.log(coord);
			var lat = coord[0].split('(');
			console.log(lat);
			var lng = coord[1].split(')');
			console.log(lng);
			myMarker.bindPopup("Moved to: " + lat[1] + ", " + lng[0] + ".");
			console.log(lat[1]);
			console.log(lng[0]);
			document.getElementById("id_latitude").value = lat[1];
			document.getElementById("id_longitude").value = lng[0].replace(/\s/g, '');
		});
</script>
<script>
$('#pills-report-tab').click(function (e) {
    //e.preventDefault();
    //$(this).tab('show');
    setTimeout(
        function()
        {
            map.invalidateSize();
        }, 300);
});
</script>
@endsection