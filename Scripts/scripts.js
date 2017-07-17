

/*$.ajax({
    method:"POST",
    url: "../includes/api/userApi.php",
    data: {
       apiMethod1: "addUser",
       username: "joey",
       pwd:"joey12",
       email:"ss@k.ro"
    },
    success: function(data) {
      if(data.exists){
        for(var label in data.information){
          console.log(label);
        }
    
      } else { alert('not found');} 
    }
});*/


$(document).ready(function() {

$('.site-navigation div a').click(function() {
  //$(this).siblings().removeClass('selected');
  //$(this).addClass('selected');
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
        

  //console.log('bla', data);}

    /*function(produse) {
    console.log('success', produse['succesful']);
    for (var i in produse)
    {
      var row = produse[i];          

      var id = row[0];
      var vname = row[1];
      $('#output').append("<b>id: </b>"+id+"<b> name: </b>"+vname)
                  .append("<hr />");
    } 
  }*/
       
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



  


/*

$("#bed").click(function createProducts(){
    //var vclass = $(this).val();
    //var htmlString = '';
    //$('.produse').html('');
    /*$.ajax({
    url: "../includes/api/productApi.php",
    
    type:"GET",
    data: {
       apiMethod:"getAllProducts"

    },
    success: function(data) {
               //$("#output div.prod").hide(); */

         /*$(".prod").each(function() {
            var x = $('div[id^="prod-"]').attr('value'); console.log(x);
            var vclass = $(this).val(); console.log(vclass);

            if (vclass!=$('div[id^="prod-"]').attr('value'))
            {
              $("#output div.prod").hide();
            }

        });

        });*/
             //console.log(vclass);
/*
          $(".prod").each((console.log($('div[id^="prod-"]').attr('value'))));

          $("#output div.prod").hide().filter(function(){
           var vclass = $("#bed").val();

           return (vclass===$('div[id^="prod-"]').attr('value'));

          }).show();
        });*/

        /*if (data[i].CategID == $())
        htmlString += '<div class="title">' + data[i].ProductName+ '</div>'*/
                
    
    //$('.produse').html(htmlString);

//VARIANTA
/*$('#bed').click(function createProducts(){
    var htmlString = '';
    $('.produse').html('');
    $.ajax({
    url: "../includes/api/productApi.php",
    
    type:"GET",
    data: {
       apiMethod:"getAllProducts"

    },
    success: function(data) {
    for (var i = 0; i < data.length; i++){
        if (data[i].CategID ==3)
        htmlString += '<div class="title">' + data[i].ProductName+ '</div>'
                }
    
    $('.produse').html(htmlString);
}
});
});
*/

//Bob's tips

  /*.then(function(data) {
  console.log(data)});
});

 method: "GET",
  url: " ",
  success: function(produse) {
    console.log(produse);
    var paginaProduse = "<div class = 'container'>";
    for (var i = 0; i< produse.length; i++){
      paginaProduse+= '<div class="title">' + produse[i].titlu + '</div>'}
    paginaProduse += "</div>"
  }
})*/

/*var produse = {};

console.log(produse);


var createProducts = function (products, categtype, categ){
    var htmlString = '';
    $('.produse').html('');
    
    for (var i = 0; i < products.length(); i++){
        if (products[i].CategoryID === categ){
        htmlString += '<div class="title">' + products[i].productName+ '</div>'
        
        }
    }
    $('.produse').html(htmlString);
}

createProducts(produse.details, 'Price', '100.000');  // e un pret dintr-o baza de date oferita de un coleg
// createProducts(produse.details, 'CategoryID', '200.000');
// createProducts(produse.details, 'productID', 3);
var produse- est lista cu produse obtinuta in urma interograrii bazei de date*/