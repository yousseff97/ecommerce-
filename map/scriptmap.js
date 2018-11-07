
var positionTunis={lat: 36.80473505981285,lng:10.15257963841998} ;
var positionNabeul={lat: 36.46973728621015,lng:10.62499174779498};
var positionBizerte={lat: 37.27094588137966,lng:9.862815234123104} ; var positionOther={lat: 36.77976497810067,lng:9.83946928685748} ;

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: positionTunis,
		
    });
    /* var marker = new google.maps.Marker({
       position: positionTunis,
       map: map
     });*/


    var markerTunis = new google.maps.Marker({
        position: positionTunis,
        animation: google.maps.Animation.BOUNCE,
        map: map
    });
    var markerNabeul = new google.maps.Marker({
        position: positionNabeul,
        animation: google.maps.Animation.BOUNCE,

        map: map
    });
    var markerBizerte = new google.maps.Marker({
        position: positionBizerte,
        animation: google.maps.Animation.BOUNCE,

        map: map
    });
    var markerOther = new google.maps.Marker({
        position: positionOther,

        animation: google.maps.Animation.BOUNCE,

        map: map
    });

    var contentStringTunis = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">McDonas: Tunis</h1>'+
        '<div id="bodyContent">'+
        '<p>42 Avenue de la Liberte\n' +
        'Tunis 2000\n' +
        'Tunisie</p>'+'<img src="img/stores/tunis.jpg" width="250px" height="200px"/>'+
        '<p>Attribution: McDonas:Tunis, <a href="https://facebook.com/loubou">'+
        'https://facebook.com/McDonasTunis</a> '+
        '</div>'+
        '</div>';


    var contentStringBizerte = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">McDonas: Bizerte</h1>'+
        '<div id="bodyContent">'+
        '<p>54\n' +
        'Avenue des palmiers\n' +
        'Ezzahrouni 2051\n' +
        'Tunisie</p>'+'<img src="img/stores/bizerte.jpg" width="250px" height="200px"/>'+
        '<p>Attribution: McDonas:Tunis, <a href="https://facebook.com/loubou">'+
        'https://facebook.com/McDonasTunis</a> '+
        '</div>'+
        '</div>';

    var contentStringNabeul = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">McDonas: Nabeul</h1>'+
        '<div id="bodyContent">'+
        '<p>Avenur Habib Thameur\n' +
        'Dar Chaabane El Fehri 8011\n' +
        'Tunisie</p>'+'<img src="img/stores/nabel.jpg" width="250px" height="200px" />'+
        '<p>Attribution: McDonas:Tunis, <a href="https://facebook.com/loubou">'+
        'https://facebook.com/McDonasTunis</a> '+
        '</div>'+
        '</div>';

    var contentStringOther = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">McDonas: Tébourba</h1>'+
        '<div id="bodyContent">'+
        '<p>CITE HEDI CHAKER EL KEF\n' +
        'Tunis\n' +
        'Tunisie</p>'+'<img src="img/stores/tebo.jpg" width="250px" height="200px"/>'+
        '<p>Attribution: McDonas:Tunis, <a href="https://facebook.com/loubou">'+
        'https://facebook.com/McDonasTunis</a> '+
        '</div>'+
        '</div>';





    var infowindowTunis = new google.maps.InfoWindow({
        content: contentStringTunis
    });


    var infowindowNabeul = new google.maps.InfoWindow({
        content: contentStringNabeul
    });


    var infowindowBizerte = new google.maps.InfoWindow({
        content: contentStringBizerte
    });


    var infowindowOther = new google.maps.InfoWindow({
        content: contentStringOther
    });



    markerTunis.addListener('click',markerFunctionTunis);
    markerNabeul.addListener('click',markerFunctionNabeul);
    markerBizerte.addListener('click',markerFunctionBizerte);
    markerOther.addListener('click',markerFunctionOther);


    function markerFunctionTunis() {
        
        if (this.getAnimation() !== null) {
            this.setAnimation(null);
        }
        infowindowTunis.open(map, this);
        infowindowNabeul.close();
        infowindowBizerte.close();
        infowindowOther.close();

    }

    function markerFunctionNabeul() {


        if (this.getAnimation() !== null) {
            this.setAnimation(null);
        }
        infowindowNabeul.open(map, this);
        infowindowTunis.close();
        infowindowBizerte.close();
        infowindowOther.close();



    }

    function markerFunctionBizerte() {


        if (this.getAnimation() !== null) {
            this.setAnimation(null);
        }
        infowindowBizerte.open(map, this);
        infowindowNabeul.close();
        infowindowTunis.close();
        infowindowOther.close();

    }
    function markerFunctionOther() {


        if (this.getAnimation() !== null) {
            this.setAnimation(null);
        }
        infowindowOther.open(map, this);
        infowindowNabeul.close();
        infowindowBizerte.close();
        infowindowTunis.close();

    }




















}










/*---------------------------------POPUP------------------------*/







