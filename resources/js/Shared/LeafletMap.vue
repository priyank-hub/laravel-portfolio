<template>
    <div class="container">
        <div class="">
            <l-map
                :zoom="zoom"
                :center="center"
                :options="mapOptions"
                style="height: 100%; width: 100%; border-radius: 30px"
                @update:center="centerUpdate"
                @update:zoom="zoomUpdate"
            >
                <l-tile-layer
                    :url="url"
                    :attribution="attribution"
                />
                <l-marker :lat-lng="withPopup" :icon="icon">
                    <l-popup>
                        <div @click="innerClick">
                            I am a popup
                        </div>
                    </l-popup>
                </l-marker>
            </l-map>
        </div>
    </div>
</template>

<script>
import { latLng, icon } from "leaflet";
import { LMap, LTileLayer, LMarker, LPopup, LIcon } from 'vue2-leaflet';
import 'leaflet/dist/leaflet.css';

export default {
    name: '',
    props: {

    },
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LPopup,
        LIcon,
    },
    data() {
        return {
            zoom: 13,
            center: latLng(43.752700, -79.600820),
            url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            attribution:
                '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            withPopup: latLng(43.752700, -79.600820),
            currentZoom: 11.5,
            currentCenter: latLng(43.752700, -79.600820),
            mapOptions: {
                zoomSnap: 0.5
            },
            icon: icon({
                iconUrl: "assets/placeholder.png",
                iconSize: [50, 47],
                iconAnchor: [16, 37]
            }),
        }
    },
    methods: {
        zoomUpdate(zoom) {
            this.currentZoom = zoom;
        },
        centerUpdate(center) {
            this.currentCenter = center;
        },
        innerClick() {
            alert("Click!");
        }
    }
}
</script>