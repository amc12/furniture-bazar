
var deadline = "2017-07-30T18:00:00+02:00"
function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return{
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
};

function initializeClock(days_id, hours_id, minutes_id, sec_id, endtime){
  var days = document.getElementById(days_id);
  var hours = document.getElementById(hours_id);
  var minutes = document.getElementById(minutes_id);
  var seconds = document.getElementById(sec_id);
  
  if((Date.parse(endtime) - Date.parse(new Date()))<=0){
      
      clearInterval(timeinterval);
    }
  else {  
    var timeinterval = setInterval(function(){
    var t = getTimeRemaining(endtime);
    days.innerHTML =  t.days ;
    hours.innerHTML = t.hours ;
    minutes.innerHTML = t.minutes ;
    seconds.innerHTML = t.seconds ;
    
  },1000);
}
}
initializeClock('days','hours','minutes','seconds', deadline);

//
 
/*var counter = 1;
var Sliding = function(x) {
  
  slideShow(counter += x);
}

var slideShow = function(x) {
  var counter = 1;
  var slides = $('.slidess');
  if (x > slides.length) {
    counter = 1;
  }
  if (x < 1) {
    counter = slides.length;
  }
  for (var i = 0; i < slides.length; i++) {
    $(slides[i]).removeClass('active');

  }
  $(slides[counter - 1]).addClass('active');

}

slideShow(counter);

$('#slidenext').click(Sliding(1));*/



var counter = 1;
showSlides(counter);

function Sliding(n) {
  showSlides(counter += n);
}

function showSlides(n) {
  var i;
  var x = document.getElementsByClassName("slidess");
  if (n > x.length) {counter = 1}    
  if (n < 1) {counter = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[counter-1].style.display = "block";  
}

$('#slideprev').click(function(){
  console.log($('.slidess'))});


//tab script

$('.tab-wrapper .tab-select-wrp a').on('click', function(event) {
  $(this).addClass('active').siblings().removeClass('active');

  var currentTab = $(this).attr('href');
  $('.tab' + currentTab).addClass('active').siblings().removeClass('active');
  
  event.preventDefault();
});



$('.select-container span.selector, .dots-select span .site-navigation div').on('click', function() {
  $(this).siblings().removeClass('active');
  $(this).addClass('active');
});



$(document).ready(function() {
    $(function() {
        $("#header").load("header.html");
        $("#footer").load("footer.html");
    });

// Get Products - Ajax call  
  $.ajax({
    url: "../includes/api/productApi.php",
    
    type:"GET",
    data: {
       apiMethod:"getAllProducts"

    },
    success: function(data) {
      console.log('blabla', data);
    for (var i = 0; i< data.length; i++){   

      var paginaProduse = "<div class='prod product-container 'id='prod-"+ data[i].ProductName + "'data-price='" + data[i].Price +"'value='" + data[i].CategID +"'>";  
       
      paginaProduse +=  '<div class="products-wrp col-md-3">' + '<img src="'+data[i].imagepath+'"'+'class="img-responsive" style="z-index: 100" />'+ '<br/>'+
        '<div class="quick_view ">Quick View</div>' + '<div class="add_to_cart ">' + '<i class="fa fa-shopping-basket" aria-hidden="true"></i>' +
        'add to cart</div></div>' + '<br/>'+
        '<div class="border-area">' + '<p class="info-title">' + data[i].ProductName + '</p>' +
          '<p class="border-stars">' + '<i class="fa fa-star" aria-hidden="true"></i>' + '<i class="fa fa-star" aria-hidden="true"></i>' +
          '<i class="fa fa-star-o" aria-hidden="true"></i>' + '<i class="fa fa-star-o" aria-hidden="true"></i>' +
          '<i class="fa fa-star-o" aria-hidden="true"></i></p>' +
        '<div class="price_opt">' + '<p class="opt_square"><i class="fa fa-heart-o" aria-hidden="true"></i></p>' +
          '<p class="opt_square"><i class="fa fa-exchange" aria-hidden="true"></i></p>' + '<p class="old_new_price">' +  
        '<span class="new">' + '$' + data[i].Price + '</span></p>' +
        '</div></div></div>';


      $('#output').append(paginaProduse);}

                      }
      });

  });

