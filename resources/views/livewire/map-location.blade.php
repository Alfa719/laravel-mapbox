<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Map Box
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 100hv;'></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Form
                </div>
                <div class="card-body">
                    Form Body
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>
@endpush
