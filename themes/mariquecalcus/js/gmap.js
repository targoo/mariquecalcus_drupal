(function ($) {

  "use strict";

    /*
     Map Settings

     Find the Latitude and Longitude of your address:
     - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
     - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

     */

    // Map Markers
    var mapMarkers = [
        {
            address: "PALISEUL, Grand Place 24",
            html: "<strong>Serge Lamock SPRL</strong><br>Grand Place 24<br/>6850 PALISEUL",
            icon: {
                //image: "/themes/serge/images/markers/marker.png",
                iconsize: [30, 46],
                iconanchor: [12, 46]
            },
            popup: false
        }
    ];

    // Map Initial Location
    var initLatitude = 49.90413;
    var initLongitude = 5.135826;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 10
    };

    var maplondon = $("#london-map").gMap(mapSettings);
    var mapcharleroi = $("#charleroi-map").gMap(mapSettings);

    // Map Center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $("#googlemaps").gMap("centerAt", options);
    }


})(jQuery);
