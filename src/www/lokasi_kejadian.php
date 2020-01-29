<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <!-- css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- end css -->
        <title>LOKASI TEMPAT KEJADIAN</title>
        <style>
          body {
            padding: 0;
            margin: 0;
          }
          html, body, #mapid {
            height: 100%;
            width: 100%;
          }
        </style>
        <!-- css leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	      <!-- end css leaflet -->
        <!-- api leaflet -->
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <!-- end api leaflet -->
    </head>
    <body><tt>
 

      <div id="mapid" class="fixed-top"></div>
      <!-- Footer -->
      <center>
        <footer class="py-2 fixed-top" style="background:green;">
          <div class="container">
            <p class="m-0 text-center text-white h5">&raquo;TEMPAT KEJADIAN&laquo;
            <p class="m-0 text-center text-white" style="opacity:0.5">BNN KOTA SURABAYA</p>
          </div>
          <!-- /.container -->
        </footer>
      </center>
      <script>   
        var map = L.map('mapid').setView([-7.26510, 112.74500],11.5);// longtitude, latitude surabaya
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
          attribution: 'copyright@BNN Kota Surabaya',
          maxZoom: 18,
          id: 'mapbox.streets',
          accessToken: 'pk.eyJ1IjoiYm95anVuZXQiLCJhIjoiY2p4aGo1eTFtMGRvNDN3bzlheGEyazQwbyJ9.otBsn1Adhoko6bovoTLfnQ' //api mapbox
        }).addTo(map);
        //
        var myIcon = L.icon({
iconUrl: 'goverment2sby.png',
iconSize: [40, 45], // size of the icon
});
        L.marker([-7.2875441, 112.7230022], {icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Tegalsari
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='./img2/Kecamatan Tegalsari.jfif' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Tegalsari<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan. Tanggulangin No. 12 RT.007/RW.05, Keputran, Kota SBY, Jawa Timur</td></tr><tr><td colspan='3'><hr></td></tr><tr><td><a href="../divisi_pemberantasan.php""></td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");

         L.marker([-7.2435616,112.7579389], {icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Simokerto
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><td colspan='3' align='center'><b>Kecamatan Simokerto<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan. Tambak Rejo VI No.2, Tambakrejo, Kec. Simokerto, Kota SBY, Jawa Timur 60291</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#/td></tr><tr><td colspan='3'><hr></td></tr></table>");

        L.marker([-7.2579187,112.7518346], {icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Genteng 
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Genteng<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan. BKR Pelajar No. 43 Surabaya, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");

       L.marker([-7.2638958,112.7291162],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Bubutan  
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='./' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Bubutan<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan. Pasar Turi No.21, Bubutan, Kec. Bubutan, Kota SBY, Jawa Timur 60172</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");

        L.marker([-7.2717677,112.7532753],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Gubeng
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Gubeng<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Gubeng Airlangga I No.2, Airlangga, Kec. Gubeng, Kota SBY, Jawa Timur 60286</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");

        L.marker([-7.3409947,112.7809138],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Gunung Anyar
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Gunung Anyar<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Gunung Anyar Tim. No.62, GunungAnyar, Kec. GunungAnyar, Kota SBY, Jawa Timur 60294</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");

        L.marker([-7.2996247,112.7681593],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Sukolilo
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Sukolilo<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan Nginden Semolo No. 89 Surabaya</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");

        L.marker([-7.2555525, 112.7534035],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan tambaksari
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='./img/paliatif.jpg' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Taman Paliatif<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Kesumba, Tambaksari, Kota SBY, Jawa Timur</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");

        L.marker([-7.2612298,112.7842578],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Mulyorejo
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='./img/lintas.jfif' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Taman Lalu Lintas<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Karimun Jawa, Kota SBY, Jawa Timur</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");

        L.marker([-7.3226113,112.770983],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Rungkut
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='./#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Rungkut<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>JL.Rungkut asri Utara.No. 1, Kali Rungkut, Rungkut, Kali Rungkut, Kec. Rungkut, Kota SBY, Jawa Timur 60293</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.3140665,112.7549413],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Tenggilis Mejoyo
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='./#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Tenggiis Mejoyo<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Prapen Indah Blok E No.1, Prapen, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60292</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>#</td><td>:</td><td>#</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2483952,112.6343364],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Benowo
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='./#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Benowo<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Kendung No.47, Sememi, Kec. Benowo, Kota SBY, Jawa Timur 60198</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2403208,112.6252458],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Pakal
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Pakal<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan Raya Babat Jerawat No. 1A Surabaya</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2521947,112.7150142],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Asemrowo
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Asemrowo<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan Asem Raya No. 2-A Surabaya</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2606863,112.7123256],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Sukomanunggal
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Sukomanunggal<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Simo Mulyo No.1, Simomulyo, Kec. Sukomanunggal, Kota SBY, Jawa Timur 60281</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2590039,112.6778458],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Tandes
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Tandes<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Komp. perumnas No.1, Balongsari, Kec. Tandes, Kota SBY, Jawa Timur 60186</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2659914,112.6553429],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Sambikerep
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Sambikerep<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan Raya Sambikerep No.2, Sambikerep, Surabaya barat, Sambikerep, Kec. Sambikerep, Kota SBY, Jawa Timur 60219</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.3035185,112.6323283],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Lakarsantri
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Lakarsantri<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Lakarsantri No.36, Lidah Kulon, Kec. Lakarsantri, Kota SBY, Jawa Timur 60212</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2315942,112.785144],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Bulak 
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Bulak<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Kyai Tambak Deres No.252, Bulak, Kec. Bulak, Kota SBY, Jawa Timur 60124</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2265782,112.7753163],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Kenjeran     
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Kenjeran<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Kedung Cowek No.350, Tanah Kali Kedinding, Kec. Kenjeran, Kota SBY, Jawa Timur 60129</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2255584,112.7445255],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Semampir
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Semampir<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Sultan Iskandar Muda No.16, Ujung, Kec. Semampir, Kota SBY, Jawa Timur 60155</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2170345,112.7292845],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Pabean Cantian
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Pabean Cantian<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Teluk Sampit No.2a, Perak Utara, Kec. Pabean Cantian, Kota SBY, Jawa Timur 60165</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2326742,112.7226325],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Krembangan
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Krembangan<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Gresik Gadukan Timur, Morokrembangan, Kec. Krembangan, Kota SBY, Jawa Timur 60178</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2915528,112.7323141],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Wonokromo
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Wonokromo<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Cisadane No.51, Darmo, Kec. Wonokromo, Kota SBY, Jawa Timur 60241</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.3165621,112.7350351],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Wonocolo
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Wonocolo<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Ahmad Yani No.79, Margorejo, Kec. Wonocolo, Kota SBY, Jawa Timur 60237</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.3140767,112.6948961],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Wiyung
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Wiyung<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Raya Menganti Wiyung, Wiyung, Kec. Wiyung, Kota SBY, Jawa Timur 60228</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.3333369,112.6994675],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Karang Pilang
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Karang Pilang<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jalan Kebraon Praja 2 No. 1, Kebraon, Karang Pilang, Kebraon, Kec. Karang Pilang, Kota SBY, Jawa Timur 60222</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.3220476,112.7140975],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Jambangan
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Jambangan<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>No., Jl. Jambangan Kebon Agung No.2, Jambangan, Kec. Jambangan, Kota SBY, Jawa Timur 60232</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.3382271,112.7166662],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Gayungan
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Gayungan<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Mesjid Agung Tim. No.2, Gayungan, Kec. Gayungan, Kota SBY, Jawa Timur 60234</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2832041,112.6881912],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Dukuh Pakis
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Dukuh Pakis<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Mayjen HR. Muhammad No.167, Pradahkalikendal, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60226</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        L.marker([-7.2800801,112.717201],{icon: myIcon}).addTo(map) // longtitude, latitude Kecamatan Sawahan
        .bindPopup("<table><tr><td colspan='3' align='center'><img src='#' width='70%'></td></tr><tr><td colspan='3' align='center'><b>Kecamatan Sawahan<b></td></tr><tr><td colspan='3'>&nbsp;</td></tr><tr><td>Address</td><td>:</td><td>Jl. Dukuh Kupang No.5, Dukuh Kupang, Kec. Sawahan, Kota SBY, Jawa Timur 60255</td></tr><tr><td colspan='3'><hr></td></tr><tr><td>Operational Time</td><td>:</td><td>24 jam</td></tr><tr><td colspan='3'><hr></td></tr></table>");
        var geojsonLayer = new L.GeoJSON.AJAX("geojson.json");
        geojsonLayer.addTo(map);
        
      </script>
    </body>
</html>
