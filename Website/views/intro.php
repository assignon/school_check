    <!--  Begin scherm/header-->
    <section class="achtergrond eerste fade">
        <div class="inner-achtergrond">
           <p class="introtekst">Vind snel & gemakelijk
                <br> een middelbare school die bij jou pas door deze site!</p>
        </div>
    </section>
    
    <section class="achtergrond tweede fade">
        <div class="inner-achtergrond">
            <p class="introtekst">Klik op "Vind een school" <br> om scholen te vinden!</p>
        </div>
    </section>
    
    <section class="achtergrond derde fade">
        <div class="inner-achtergrond">
            <p class="introtekst">Klik op "Bekijk scholen" om  <br> alle scholen van de gemeente Amsterdam te bekijken</p>
        </div>
    </section>
    
    <section class="achtergrond vierde fade">
        <div class="inner-achtergrond">
            <p class="introtekst">Klik op "Open dagen bezoeken" om<br> te kijken welke scholen een open dag(en) houden.</p>
        </div>
    </section>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("achtergrond");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 7000); // Change image every 2 seconds
}
    
</script>