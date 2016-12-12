window.addEventListener("load", function(){

    var add = document.getElementById("add");
    var nieuSchool = document.getElementById("addSchool");

    var pagination = document.querySelectorAll(".pagination");

    for (var i = 0; i < pagination.length; i++) {

      var paginationArr = pagination[i];

      paginationArr.addEventListener("click", function(e){

     //alert(e.target.href);
         e.target.style.backgroundColor = "white";
         e.target.style.color = "#0375B4";

         paginationArr.style.backgroundColor = "#0375B4";
         paginationArr.style.color = "white";


      })

    }



    $(function(){

      /*  $(add).click(function(){


           $(nieuSchool).animate({

               bottom: -50,
               marginBottom: -750,


           },{

               duration: 1000,
               easing : "easeOutElastic",

           })
           $("#menu").css("bottom","160px");



        })*/

        $("#sluit").click(function(){

            $(nieuSchool).animate({

               bottom: 1000,



           },{

               duration: 1000,
               easing : "easeInOutElastic",

           })

          // $("#menu").css("top","50px");

        })

        $("#grid").click(function(){

           $("#gridOption").animate({

              zIndex: 1,
              opacity: 1,

           },{

             duration: 1000,
             easing: "easeInOutElastic",

           })

           $("#listOption").animate({

              zIndex: 0,
              opacity: 0,

           },{

             duration: 1000,
             easing: "easeInOutElastic",

           })

        })


        $("#list").click(function(){

           $("#listOption").animate({

              zIndex: 1,
              opacity: 1,

           },{

             duration: 1000,
             easing: "easeInOutElastic",

           })

           $("#gridOption").animate({

              zIndex: 0,
              opacity: 0,

           },{

             duration: 1000,
             easing: "easeInOutElastic",

           })

        })

    })

    var empty = document.getElementById("empty");
    var inputs = document.querySelectorAll(".aadInput");



        for(var i = 0; i < inputs.lenght; i++){

             var inputsArr = inputs[i];

             empty.addEventListener("click", function(){

                alert(inputsArr.value);
                inputsArr.value = "";

          })

        }


        /*var addInput = document.querySelectorAll(".addInput");
        var fieldset = document.querySelectorAll(".field");

        var addinput = document.createElement("div");
        addinput.className = "dateTime";

        addInput[0].addEventListener("click", function(){

           var inputDate = document.createElement("input");
           inputDate.name = "dag_date";
           inputDate.type = "date";

           var inputTime = document.createElement("input");
           inputTime.name = "dag_time";
           inputTime.type = "time";

           addinput.appendChild(inputDate);
           addinput.appendChild(inputTime);

           fieldset[0].appendChild(addinput);

        })

        addInput[1].addEventListener("click", function(){

          alert();
        })

        addInput[2].addEventListener("click", function(){

          alert();
        })*/




})
