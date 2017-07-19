

$(document).ready(function() {

$('.site-navigation div a').click(function() {
  
  $(this).parent().addClass('selected').siblings().removeClass('selected');
});

//Price Slider
$(function () {
      $("#slider-price-container").slider({
          range: true,
          min: 0,
          max: 3000,
          values: [100, 2000],
          create: function() {
              $("#amount").val("$100 - $2000");
          },
          slide: function (event, ui) {
              $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
              var mi = ui.values[0];
              var mx = ui.values[1];
              filterSystem(mi, mx);
          }
      });
      });

function filterSystem(minPrice, maxPrice) {
      $("div.prod").hide().filter(function () {
          var price = parseInt($(this).data("price"), 10);
          return price >= minPrice && price <= maxPrice;
      }).show();
  }


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

      var paginaProduse = "<div class='prod container' id='prod-"+ data[i].ProductName + "'data-price='" + data[i].Price +"'value='" + data[i].CategID +"'>";  
      paginaProduse+= '<div class="container prod-wrp" >' + '<div class="container-left">' + '<img src="' + data[i].imagepath+'"'+'class="img-responsive" />'+ '</div>'+
       '<ul class="list-group dyn-prod">'+ '<li class="list-group-item">'+ '<h5 class="name product-title">'+ data[i].ProductName +
       '</h5>'+'<br>'+
       '<h6 class=" price product-price">' + '$'+data[i].Price+ '</h6>'+'<br>' +
       '<h6>'+ '<i class="fa fa-star" aria-hidden="true">'+'</i>'+
              '<i class="fa fa-star" aria-hidden="true">'+'</i>' +
              '<i class="fa fa-star-o" aria-hidden="true">'+'</i>'+
              '<i class="fa fa-star-o" aria-hidden="true">'+'</i>' +
              '<i class="fa fa-star-o" aria-hidden="true">'+'</i>'+'</h6>'+'<br>'+

       '<h6 class="description">'+ data[i].Description + '</h6>'+ '</li>'+
       '<li class="list-group-item client-icons">'+ 
            '<span class="bottom-info-squares">'+'<i class="fa fa-eye" aria-hidden="true">'+'</i>'+'</span>'+
            '<span class="bottom-info-squares">'+'<i class="fa fa-heart-o" aria-hidden="true">'+'</i>'+'</span>'+
            '<span class="bottom-info-squares">'+'<i class="fa fa-exchange" aria-hidden="true">'+'</i>'+'</span>'+
            '<span class="addtocart">'+'<i class="fa fa-shopping-basket" aria-hidden="true">'+'</i>ADD TO CART</span>'+
            '</li></ul></div></div>';

      paginaProduse += "</div>";
    $('#output-place').append(paginaProduse);}

                      }
        
       
    });

});


$("#bed").click(function()
          {
            var vclass = $(this).val(); 
             $(".prod").each(function()
              {
                if (vclass!= $(this).attr('value')){
                     $(this).hide();
                  }
              });
          });
$("#tables-prod").click(function()
          {
            var vclass = $(this).val(); 
             $(".prod").each(function()
              {
                if (vclass!= $(this).attr('value')){
                     $(this).hide();
                  }
              });
          });
  $("#chairs").click(function()
          {
            var vclass = $(this).val(); 
             $(".prod").each(function()
              {
                if (vclass!= $(this).attr('value')){
                     $(this).hide();
                  }
              });
          });

$("#resetfilters").click(function(){
  $(".prod").show();
});



  


