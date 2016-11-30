window.addEventListener("load",function(){

   var addinput = document.querySelectorAll(".addInput");
   var inputField = document.querySelector(".inputField");
   var soort = document.getElementById("soort");

   addinput[0].addEventListener('click',function(){

     soort.value = "opendag";

   })

   addinput[1].addEventListener('click',function(){

     soort.value = "openklas";

   })

   addinput[2].addEventListener('click',function(){

     soort.value = "informatienacht";

   })

   $(function(){

    for(var i = 0; i < addinput.length; i++){

      var addinputArr = addinput[i];

      addinputArr.addEventListener("click", function(e){

        var target = e.target.offsetTop;

         $(inputField).animate({

           top: target-180,

         },{

            duration: 1000,
            easing: "easeOutBounce",

         })

      })

      $("#sluit").click(function(){

        $(inputField).animate({

          top: -300,

        },{

           duration: 100,
           easing: "easeInOutElastic",

        })

      })


    }


   })


})
