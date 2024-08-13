// for sticky header
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() >= 200) {
        jQuery('body').addClass('header-sticky');
    }
    else {
        jQuery('body').removeClass('header-sticky');
    }
});

jQuery(document).ready(function(){
  jQuery('#toggle-arrow-add a').click(function() {
     jQuery('body').toggleClass('header-toggle-arrow');
 });

 
});


jQuery(document).ready(function(){
     jQuery('.nav-btn').click(function() {
        jQuery('body').toggleClass('open');
    });
    jQuery('.nav-btn-close').click(function() {
        jQuery('body').removeClass('open');
    });

    
jQuery(window).resize(function() {
  if (window.innerWidth <= 1199) {
      jQuery(".main-menu ul li.menu-item-has-children").each(function() {
          if (jQuery(this).children(".arrow").length === 0) {
              jQuery(this).children("a").after("<span class='arrow'><i class='fas fa-chevron-down'></i></span>");
          }
      });

      jQuery(".main-menu ul li.menu-item-has-children .arrow").off('click').on('click', function() {
          if (jQuery(this).next().is(":visible")) {
              jQuery(this).children(".fas").removeClass("fa-chevron-up");
              jQuery(this).children(".fas").addClass("fa-chevron-down");
              jQuery(this).next().slideUp();
          } else {
              jQuery(".main-menu ul li.menu-item-has-children .arrow .fas").removeClass("fa-chevron-up");
              jQuery(".main-menu ul li.menu-item-has-children .arrow .fas").addClass("fa-chevron-down");
              jQuery(".main-menu ul li.menu-item-has-children .arrow").next().slideUp();
              jQuery(this).children(".fas").removeClass("fa-chevron-down");
              jQuery(this).children(".fas").addClass("fa-chevron-up");
              jQuery(this).next().slideDown();
          }
      });
  } else {
      jQuery(".main-menu ul li.menu-item-has-children .arrow").remove();
  }
}).resize();
    
});

jQuery(document).ready(function(){


  jQuery('.stories-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,

    responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 1,
          }
        }
      ]

  });

  jQuery('.events-silder').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1
          }
        },


      ]


  });


  
  
  
  
  
});

// ======= datatable =======

   jQuery(document).ready(function() {

    jQuery('#example').DataTable({       
      "paging": true,
      "searching": false,  // Enable searching
      "info": false,       // Enable info display
      "scrollX": false,
      "lengthChange": false, 
      "columnDefs": [
          { "orderable": false, "targets": 4 } 
      ]
    });
  //   var table = $('#example').DataTable({       
  //       "paging": true,
  //       "searching": false,
  //       "info": false,
  //       "scrollX": true,
  //       "lengthChange": false, 
  //       "columnDefs": [
  //           { "orderable": false, "targets": 5 } 
  //       ]
  //   });
    // jQuery('#example tbody').on('click', '.remove-row', function () {
    //     table.row($(this).parents('tr')).remove().draw();
    // });

    var table = jQuery('#example2').DataTable({       
      "paging": true,
      "searching": true,
      "info": false,
      "scrollX": true,
      "lengthChange": false, 
      "columnDefs": [
          { "orderable": false, "targets": 6 } 
      ]
  });
  jQuery('#example tbody').on('click', '.remove-row', function () {
      table.row(jQuery(this).parents('tr')).remove().draw();
  });
});













