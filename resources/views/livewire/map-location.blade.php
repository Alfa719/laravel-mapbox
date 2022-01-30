<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Map Box
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 70vh;'></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Form
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lng">Longitude</label>
                                <input type="text" wire:model="long" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lat">Lattitude</label>
                                <input type="text" wire:model="long" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:load', () => {
        mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
        // Load Map
        var map = new mapboxgl.Map({
            container: 'map',
            center: {lng:113.48189803076735, lat:-7.719183063068499},
            zoom: 14,
            style: 'mapbox://styles/mapbox/dark-v10'//Map style = light-v10, outdoors-v11, satellite-v9, streets-v11, dark-v10
        });
        // Buat control pada map
        map.addControl(new mapboxgl.NavigationControl());
        // Ambil posisi berdasarkan click event
        map.on('click', (e) => {
            const {lng, lat} = e.lngLat;
            @this.long = lng;
            @this.lat = lat;
        });
        // console.log(@this.test);
    })
</script>
@endpush
