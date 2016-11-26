window.addEventListener("load", function(){

    var add = document.getElementById("add");
    var nieuSchool = document.getElementById("addSchool");



    $(function(){

        $(add).click(function(){


           $(nieuSchool).animate({

               bottom: -100,


           },{

               duration: 1000,
               easing : "easeOutElastic",

           })


        })

        $("#sluit").click(function(){

            $(nieuSchool).animate({

               bottom: 400,


           },{

               duration: 1000,
               easing : "easeInOutElastic",

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


})
