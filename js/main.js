$(document).ready(function () {
  // Pre-footer product slider
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1140,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
      },
              {
                  breakpoint: 600,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                  }
      },
              {
                  breakpoint: 480,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  // Single Product image carousel
  $('.product-images').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      variableWidth: true,
      dots: true,
      responsive: [

            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
              }]
    });

  // Product home page, sort by tags
  // init Isotope
  var $grid = $('.product-grid').isotope({
    itemSelector: '.prod-single',
    layoutMode: 'fitRows'
  });


  // bind filter on select change
  $('.filters-select').on( 'change', function() {
    // get filter value from option value
    var filterValue = this.value;
    $grid.isotope({ filter: filterValue });
  });

  // remove duplicate tags from UI on product sort page
  var optionValues =[];
  $('#ingredient_types option').each(function(){
   if($.inArray(this.value, optionValues) >-1){
  		$(this).remove()
   } else {
  		optionValues.push(this.value);
   }
  });
  var optionValues_2 =[];
  $('#food_types option').each(function(){
   if($.inArray(this.value, optionValues_2) >-1){
      $(this).remove()
   } else {
      optionValues_2.push(this.value);
   }
  });



// let's style those stars!
  $('.prod-home-reviews .stars').each(function (index) {
      var characters = $(this).text().split("");
        $this = $(this);
        $this.empty();
        $.each(characters, function (i, el) {
          $this.append("<span class='starz'>" + el + "</span>");
        });
  });
  $('.product-reviews .stars').each(function (index) {
      var characters = $(this).text().split("");
        $this = $(this);
        $this.empty();
        $.each(characters, function (i, el) {
          $this.append("<span class='starz'>" + el + "</span>");
        });
  });
  $('.starz').each(function() {
      if ($(this).text() == "	") {
          $this = $(this);
          $this.remove();
    } else if ($(this).text() == "☆") {
      $this = $(this);
      $this.addClass('emptystar');
    };
  });
  // Show/hide review form
  $("#show-review").click(function(){
    $("#reviews-form").show();
    $(this).addClass("opened");
  });

  $("#close-review").click(function(){
     $("#reviews-form").hide();
     $('#show-review').removeClass("opened");
  });








}); //$(document).ready(function ()
