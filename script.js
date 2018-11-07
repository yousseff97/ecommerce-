var x1 = document.getElementById("pic1");
var x2 = document.getElementById("pic2");
var x3 = document.getElementById("pic3");
var x4 = document.getElementById("pic4");
var x5 = document.getElementById("pic5");

x1.addEventListener("mouseover", function () {
    document.getElementById("demo").innerHTML ="<br><strong STYLE='font-size: 30px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:30px;'>GALMAMI <br> OUSSAMA</strong><br>" +
        "<strong style='font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:40px;'>Senior Vice President Finance, Business & Security</strong>" +
    "<p style=' font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height: 30px;\n" +
        "    width: 45em;'>Graduated from INSAT, Galmami Oussama \n" +
        "joined MCDONAS in 2015 at the Finance, Fixed Assets department. He then becomes " +
        "Financial Advisor, then Field Service Manager at Operations." +
        "It was in 2012 that Oussama Galmami became Senior Vice President<br><br></p>";
});
x2.addEventListener("mouseover", function () {
    document.getElementById("demo").innerHTML ="<br><strong STYLE='font-size: 30px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:30px;'>HAOUARI <br> RABEB</strong><br>" +
        "<strong style='font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:40px;'>Vice President Sustainable Development and Communication</strong>" +
        "<p style=' font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height: 30px;\n" +
        "    width: 45em;'>Haouari Rabeb is an INSAT graduate. She started her career in " +
        "poultry production then joined MCDONAS in 2016 in the Purchasing - Quality department," +
        " where she worked as Purchaser. In 2017, she is appointed Vice President Communications" +
        " & Sustainable Development.<br><br></p>";
});
x3.addEventListener("mouseover", function () {
    document.getElementById("demo").innerHTML ="<br><strong STYLE='font-size: 30px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:30px;'>ALATRI <br> AYMEN</strong><br>" +
        "<strong style='font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:40px;'>\n" +
        "Senior Vice President in charge of Construction and Development</strong>" +
        "<p style=' font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height: 30px;\n" +
        "    width: 45em;'>Alatri Aymen is a graduate of the National Institute of Science and Technology" +
        " Tunisia. He joined MCDONAS in 2014 as Chief Financial Officer, before being appointed in March 2015, " +
        "Vice President in charge of Construction and Development of MCDONAS Tunisia." +
        " He is since October 2017 Senior Vice President.</p>";
});
x4.addEventListener("mouseover", function () {
    document.getElementById("demo").innerHTML ="<br><strong STYLE='font-size: 30px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:30px;'>BOUGHZALA <br> AYA</strong><br>" +
        "<strong style='font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:40px;'>Vice President Human Resources, Operations & IT</strong>" +
        "<p style=' font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height: 30px;\n" +
        "    width: 45em;'>Boughzala Aya, an INSAT graduate,began her career at MCDONAS Tunisia in 2014" +
        " as a teammate. She joined the head office in 2015 as Training Advisor & Human Resources Director" +
        " before being promoted to Vice President HR, Operations & IT<br><br></p>";
});
x5.addEventListener("mouseover", function () {
    document.getElementById("demo").innerHTML ="<br><strong STYLE='font-size: 30px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:30px;'>CHALGHAF <br> JIHED</strong><br>" +
        "<strong style='font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height:40px;'>Senior Vice President Marketing, Design & Chief Marketing Officer</strong>" +
        "<p style=' font-size: 20px;\n" +
        "    font-family: Cambria;\n" +
        "    line-height: 30px;\n" +
        "    width: 45em;'>A graduate of INSAT, Chalghaf Jihed joined McDonald's in 2014 as Vice President " +
        "Marketing & Design, Brand & Product and joined the Management Committee.\n" +
        "He joined the Executive Committee in September 2016 and became Chief Marketing Officer. In this " +
        "context, he adds to his responsibilities the supervision of the Studies & Strategies " +
        "Consumers department.</p>";
});

/********************************************************************************************************************/


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

    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">McDonas: Tunis</h1>'+
        '<div id="bodyContent">'+
        '<p>Ave Ali Balhouan awel doura ta39bek 3alymin</p>'+'<img src="/images/demo/magasin.jpg" ></img>'+
        '<p>Attribution: McDonas:Tunis, <a href="https://facebook.com/loubou">'+
        'https://facebook.com/McDonasTunis</a> '+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });



    markerTunis.addListener('click',markerFunction);
    markerNabeul.addListener('click',markerFunction);
    markerBizerte.addListener('click',markerFunction);
    markerOther.addListener('click',markerFunction);


    function markerFunction() {


        if (this.getAnimation() !== null) {
            this.setAnimation(null);
        }
        infowindow.open(map, this);

    }

}

















