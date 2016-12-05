window.addEventListener("load",function(){

   var addinput = document.querySelectorAll(".addInput");
   var openInfos = document.querySelectorAll(".openInfos");
   var openingText = document.getElementById("opening");
   var soort = document.getElementById("soort");

   var show = document.getElementById("show");
   var hide = document.getElementById("hide");
   var extraOption = document.getElementById("extraOption");
   var pkind = document.getElementById("pkind");


   openInfos[0].addEventListener("click", function(){

    openingText.innerHTML = "De toegevogde informaties horen bij de OPEN DAG"
    openingText.style.color = "white";
    pkind.style.display = "none";

   })

   openInfos[1].addEventListener("click", function(){

    openingText.innerHTML = "De toegevogde informaties horen bij de OPEN KLAS"
    openingText.style.color = "white";
    pkind.style.display = "none";

   })

   openInfos[2].addEventListener("click", function(){

    openingText.innerHTML = "De toegevogde informaties horen bij de NACHT INFORMATIE"
    openingText.style.color = "white";
    pkind.style.display = "block";

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

    show.addEventListener("click", function(){

        show.style.zIndex = "0";
        hide.style.zIndex = "1";
        extraOption.style.display = "flex";

        $(extraOption).animate({

            marginTop: 0,
            bottom: 0,

        },{

          duration:1000,
          easing: "easeInOutElastic",

        })

    })


    hide.addEventListener("click", function(){

        show.style.zIndex = "1";
        hide.style.zIndex = "0";
        extraOption.style.display = "none";

        $(extraOption).animate({

            marginTop: -690,
            bottom: 500,

        },{

          duration:1000,
          easing: "easeInOutElastic",

        })

    })


   })


})
