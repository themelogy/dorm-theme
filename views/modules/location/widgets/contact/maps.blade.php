<div class="m-t-20 border p-10">
    <div id="map" style="height: 300px; width: 100%; background-color: #fff;"></div>
</div>
@push('js-inline')
    <script>
        function initMap() {
            @if($center = $locations->first())
            var center = {lat: {{ $center->lat }}, lng: {{ $center->long }} };
            @endif

            var lat_min = {{ $locations->where('lat', $locations->min('lat'))->first()->lat }};
            var lat_max = {{ $locations->where('lat', $locations->max('lat'))->first()->lat }};
            var lng_min = {{ $locations->where('long', $locations->min('long'))->first()->long }};
            var lng_max = {{ $locations->where('long', $locations->max('long'))->first()->long }};

            var locations = [
                    @foreach($locations as $location)
                ['<span class="fs-sm-12 m-b-5 text-themecolor">{{ $location->name }}</span><br/>{!! wordwrap($location->present()->address, 40,'<br/>') !!}<br/>T: {{ $location->phone1 }}<br/>F: {{ $location->fax }}<br/><a class="btn btn-themecolor btn-xs m-t-10" target="_blank" href="https://www.google.com/maps/dir/Current+Location/{{ $location->lat }},{{ $location->long }}">Yol Tarifi Al</a>', {{ $location->lat }}, {{ $location->long }}],
                @endforeach
            ];

            var map = new google.maps.Map(document.getElementById('map'),{
                zoom: 6,
                mapTypeControl: false,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#00ae65"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#8b8d8e"
                            }
                        ]
                    }
                ]
            });
            map.setCenter(new google.maps.LatLng(
                ((lat_max + lat_min) / 2.0),
                ((lng_max + lng_min) / 2.0)
            ));
            map.fitBounds(new google.maps.LatLngBounds(
                new google.maps.LatLng(lat_min, lng_min),
                new google.maps.LatLng(lat_max, lng_max)
            ));

            var infoWindow = new google.maps.InfoWindow({});
            var marker, count;

            for(count = 0; count < locations.length; count++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[count][1], locations[count][2]),
                    map: map,
                    title: locations[count][0],
                    icon: "{{ Theme::url('img/favicon.png') }}"
                });
                google.maps.event.addListener(marker, 'click', (function (marker, count) {
                    return function () {
                        infoWindow.setContent(locations[count][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, count));
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpvcV4WyemrP7OUfrDuXTkEaazIzwqe1U&callback=initMap&language={{ locale() }}"></script>
@endpush