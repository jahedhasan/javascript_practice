
<style>
    .div_one{
        height: 400px;
        width:0px;
        background: grey;
        margin-top: 10px;
        left: 0px;
        position: absolute;
        overflow: hidden;
    }
</style>
<!--<button type="button" id="blackBtn">Black</button>
<button type="button"id="bluekBtn">Blue</button>
<button type="button" id="greenBtn">Green</button>
<button type="button" id="defaultBtn">Default</button>
-->

<!--<button type="button" id="upBtn">UP</button>
<button type="button" id="downBtn">Down</button>-->

<button type="button" id="open" onmouseover>OPEN</button>
<!--<button type="button" id="close" onmouseover="">CLOSE</button>-->

<div class="div_one" id="div_one">
    <h2>hello</h2>
    <h4>world</h4>
    <p>practice javascript</p>
</div>


<script>
//    var blackBtn= document.getElementById('blackBtn');
//    var divOne= document.getElementById('div_one');
    
//    blackBtn.onclick = function(){
//       divOne.style.backgroundColor='black';
//       divOne.style.borderRadius='20%';
//   };

//    var upBtn= document.getElementById('upBtn');
//    var downBtn= document.getElementById('downBtn');
//    var divOne= document.getElementById('div_one');
//        upBtn.onclick = function(){
//          divOne.style.height='0px';
//           divOne.style.transition='1s';
//       };
//       downBtn.onclick = function(){
//          divOne.style.height='400px';
//           divOne.style.transition='1s';
//       };

    
        var openBtn= document.getElementById('open');
//        var closeBtn= document.getElementById('close');
        var divOne= document.getElementById('div_one');
        
            openBtn.onmouseover = function(){
              divOne.style.width='600px';
              divOne.style.transition='1s';
           };
           closeBtn.onmouseout = function(){
              divOne.style.width='0px';
              divOne.style.transition='1s';
           };
</script>