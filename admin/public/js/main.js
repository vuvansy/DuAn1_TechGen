// Dropdown Admin
        $(document).ready(function() {
            $(".dropdown-user__main li").click(function() {
                $(this).children(".dropdown-user__sub").toggle(0);
                $(this).find(".dropdown-user__sub a").css("color", "#FFFF");
                // return false;
            });

              // Sidebar 
            //   $('.sidebar-nav__item').click(function(){
            //     $('.sidebar-nav__item').removeClass('sidebar-nav__active')
            //     $(this).toggleClass('sidebar-nav__active')
            //    })
        });