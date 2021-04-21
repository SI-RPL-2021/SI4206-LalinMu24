<script>
    function lengan_ganjil(){
        var merah = {{$perempatan->lengans[0]->merah}}*1000,
        kuning = {{$perempatan->lengans[0]->kuning}}*1000,
        hijau = {{$perempatan->lengans[0]->hijau}}*1000;

        var lights = document.querySelectorAll('#isiqfor1 > div'),
            lights2 = document.querySelectorAll('#isiqfor3 > div'),
            timers = [],
            counter = 0;
            timers.push(merah,kuning,hijau);

        window.addEventListener('load', start);

        var start = setTimeout(function() {
            traffic();
        }, 2000);

        function refresh_countdown(detik){
            var detikan = detik/1000-1;
            var x = setInterval(function() {
            // Display the result in the element with id="demo"
            document.getElementById("number1").innerHTML = detikan;
            document.getElementById("number3").innerHTML = detikan;

            detikan--;
            if(detikan < 0){

            clearInterval(x);
            }
            }, 1000);

            
        }
        
        function traffic() {
            for (i = 0; i < lights.length; i++) {
                lights[i].classList.remove('on');
                lights2[i].classList.remove('on');
            }
            lights[counter].classList.add('on');
            lights2[counter].classList.add('on');
            refresh_countdown(timers[counter]);
            setTimeout(traffic, timers[counter]);
            // counter = (counter + 1) % timers.length;
            if(counter == 0){
                counter = 2;
            }else if(counter == 2){
                counter = 1;
            }else{
                counter = 0;
            }
        }
    }
    
    function lengan_genap(){
        var merah = {{$perempatan->lengans[1]->merah}}*1000,
        kuning = {{$perempatan->lengans[1]->kuning}}*1000,
        hijau = {{$perempatan->lengans[1]->hijau}}*1000;

        var lights = document.querySelectorAll('#isiqfor2 > div'),
            lights2 = document.querySelectorAll('#isiqfor4 > div'),
            timers = [],
            counter = 2;
            timers.push(merah,kuning,hijau);

        window.addEventListener('load', start);

        var start = setTimeout(function() {
            traffic();
        }, 2000);

        function refresh_countdown(detik){
            var detikan = detik/1000-1;
            var x = setInterval(function() {
            // Display the result in the element with id="demo"
            document.getElementById("number2").innerHTML = detikan;
            document.getElementById("number4").innerHTML = detikan;

            detikan--;
            if(detikan < 0){

            clearInterval(x);
            }
            }, 1000);

            
        }
        
        function traffic() {
            for (i = 0; i < lights.length; i++) {
                lights[i].classList.remove('on');
                lights2[i].classList.remove('on');
            }
            lights[counter].classList.add('on');
            lights2[counter].classList.add('on');
            refresh_countdown(timers[counter]);
            setTimeout(traffic, timers[counter]);
            // counter = (counter + 1) % timers.length;
            if(counter == 0){
                counter = 2;
            }else if(counter == 2){
                counter = 1;
            }else{
                counter = 0;
            }
        }
    }

    lengan_ganjil();
    lengan_genap();


    
</script>