// Navbar Dropdown category 
        $(document).ready(function() {
            $("#main-menu li").click(function() {
                $(this).children(".sub-menu").toggle(0);
                $(this).find(".sub-menu a").css("color", "#FFFF");
                // return false;
            });
        });