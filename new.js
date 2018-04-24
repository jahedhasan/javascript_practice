
var btnElement = document.getElementById('btn');
btnElement.onclick =function(){
    var height=document.getElementById('height').value;
    var width=document.getElementById('width').value;
    var color=document.getElementById('color').value;
    var radius=document.getElementById('radius').value;
    
    var newElement =document.getElementById('newElement');
    
    newElement.style.height= height+'px';
    newElement.style.width= width+'px';
    newElement.style.backgroundColor= color;
    newElement.style.borderRadius= radius+'px';
};


var gvn_text= document.getElementById('gvn_text');
gvn_text.onfocus =function(){
    gvn_text.style.height='40px';
    gvn_text.style.width='300px';
    gvn_text.style.boxShadow='6 6 6 gray';   
};
gvn_text.onblur =function(){
    gvn_text.style.height='19px';
    gvn_text.style.width='141px';
    gvn_text.style.boxShadow='6 6 6 gray';   
};
gvn_text.onkeyup =function(){
    document.getElementById('res').innerHTML=gvn_text.value;
};