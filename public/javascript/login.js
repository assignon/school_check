window.addEventListener("load", function(){
    
    var parameters = document.querySelectorAll(".params");
    var add = document.querySelector(".changeAvatar");
    var avatar = document.getElementById("avatar");
    
    parameters[0].addEventListener("mouseover", function(){
        
     
        parameters[0].style.height = '70px';
        parameters[0].style.width = '70px';
        
     
        parameters[1].style.height = '70px';
        parameters[1].style.width = '70px';
        
    })
    
    parameters[1].addEventListener("mouseover", function(){
        
      
        parameters[1].style.height = '70px';
        parameters[1].style.width = '70px';
        
   
        parameters[0].style.height = '70px';
        parameters[0].style.width = '70px';
        
    })
    
    
    parameters[0].addEventListener("mouseout", function(){
        
      
        parameters[0].style.height = '90px';
        parameters[0].style.width = '90px';
        
      
        parameters[1].style.height = '90px';
        parameters[1].style.width = '90px';
        
    })
    
    parameters[1].addEventListener("mouseout", function(){
        
      
        parameters[1].style.height = '90px';
        parameters[1].style.width = '90px';
        
       
        parameters[0].style.height = '90px';
        parameters[0].style.width = '90px';
        
    })
    
    
    parameters[1].addEventListener("click", function(){
        
      
        parameters[1].style.zIndex = '0';
       
        parameters[0].style.zIndex = '1';
        
        add.backfaceVisibility = "hiden";
        add.style.transform = "perspective(600px) rotateY(0deg)";
        add.style.transition = "transform 1.0s linear 0s";
        
        avatar.backfaceVisibility = "hiden";
        avatar.style.transform = "perspective(600px) rotateY(-180deg)";
        avatar.style.transition = "transform 1.0s linear 0s";
      
        
    })
    
    parameters[0].addEventListener("click", function(){
        
      
        parameters[0].style.zIndex = '0';
       
        parameters[1].style.zIndex = '1';
        
        add.backfaceVisibility = "hiden";
        add.style.transform = "perspective(600px) rotateY(180deg)";
        add.style.transition = "transform 1.0s linear 0s";
        
        avatar.backfaceVisibility = "hiden";
        avatar.style.transform = "perspective(600px) rotateY(0deg)";
        avatar.style.transition = "transform 1.0s linear 0s";
      
        
    })
    
    
    
})








