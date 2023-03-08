/*  Strcky Navbar  */
window.addEventListener('scroll',function(){
    var header =document.querySelector('header');
    header.classList.toggle('sticky',this.window.scrollY > 0);
});
/*Respomsive NavBar */

function toggleMenu(){
    const toggleMenu = document.querySelector('.toggleMenu');
    const nav = document.querySelector('.nav');
    toggleMenu.classList.toggle('active')
    nav.classList.toggle('active')
}


/* Filterable Cards */
   
let list = document.querySelectorAll (".list ") ;
let card = document.querySelectorAll (" .card ");
    for ( let i=0 ; i<list.length ; i++ ) 
{
 list [ i ].addEventListener('click',function() 
{

for(let j=0;j<list.length;j++)
{
     list[j].classList.remove('active');
 }
    this.classList.add('active');

      let dataFilter = this.getAttribute ('data - filter');
       for ( let k= 0 ;k< card.length ;k++ )
{
    card[k].classList.remove('active');
    card[k].classList.add('hide');

if(card[k].getAttribute('data - item')== dataFilter || dataFilter == 'all')
{
    card[k].classList.remove('hide');
    card[k].classList.add('active');
}
        }
    

 })
}
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
      
        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more"; 
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less"; 
          moreText.style.display = "inline";
        }
      }

      function searchToggle(obj, evt) {
        var container = $(obj).closest('.search-wrapper');
        if (!container.hasClass('active')) {
          container.addClass('active');
          evt.preventDefault();
        } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
          container.removeClass('active');
          // clear input
          container.find('.search-input').val('');
        }
    }
    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
    
    
   


































