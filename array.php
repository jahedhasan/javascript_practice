<script>

    var data = new Array();
   /* data[0]=10;
    data[1]=20;
    data[2]=30;
    data[3]=40;

    document.write(data[0]);
    */
   data['name']='jahed';
   data['city']='FENI';
   data['country']='Bangladesh';
   
   //document.write(data['city']);
   var key;
   for(key in data){
       document.write(data[key]+', ');
   }
</script>