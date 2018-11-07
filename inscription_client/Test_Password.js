var ch = document.getElementById("Pass");
var ch1 = document.getElementById("Rep_Pass");
var msg = document.getElementById('msg');
var sub = document.getElementById('S_B');
ch1.addEventListener("change",function () {Test_Pass(msg);});
sub.addEventListener("click",function(){CheckPass(event);})

function Test_Pass () {
    if (!(ch.value == ch1.value)) {
        msg.setAttribute('type','text');
    }
    else{
        msg.setAttribute('type','hidden');


    }
}

function CheckPass(event){
    if (!(ch.value == ch1.value)){
        msg.setAttribute('type','text');
        event.preventDefault();
    }


}








