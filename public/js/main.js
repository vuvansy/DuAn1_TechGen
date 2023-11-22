// Navbar Dropdown category 
        $(document).ready(function() {
            $("#main-menu li").click(function() {
                $(this).children(".sub-menu").toggle(0);
                $(this).find(".sub-menu a").css("color", "#FFFF");
                // return false;
            });

            // Navbar Dropdown category 
            $(".main__login li").click(function() {
                $(this).children(".sub__login").toggle(0);
                $(this).find(".sub__login a").css("color", "var(--gray)");
                // return false;
            });


          //Slide ảnh Detail
                $('.list-thumb .thumb-item').click(function(){
                    var link_img=$(this).find('img').attr('src');
                    $('.show-picture').find('img').attr('src',link_img);
                    $('.list-thumb .thumb-item').removeClass('active');
                    $(this).addClass('active');
                })
                $('.next-prev .next').click(function(){
                    if($('.list-thumb .thumb-item:last-child').hasClass('active')){
                       $('.list-thumb .thumb-item:first-child').click();
                    }else{
                        $('.active').next().click();
                    }
                })
                $('.next-prev .prev').click(function(){
                    if($('.list-thumb .thumb-item:first-child').hasClass('active')){
                        $('.list-thumb .thumb-item:last-child').click();
                     }else{
                         $('.active').prev().click();
                     }
                })
                 //active phần tử đầu tiên
                 $('.list-thumb .thumb-item:first-child').click();
               
                // Sidebar 
                $('.sidebar-nav__link').click(function(){
                    $('.sidebar-nav__link').removeClass('sidebar-nav__active')
                    $(this).toggleClass('sidebar-nav__active')
                   })
        });

    
            
        

//Slide 
var arr_hinh = [
    // "images/bn11.png",
    "public/images/slide/slide2.jpg",
    "public/images/slide/slide3.jpg",
    "public/images/slide/slide5.jpg",
    "public/images/slide/slide1.jpg"
];

var index = 0;
function prev() {
    index--;
    if (index <= 0) index = arr_hinh.length - 1;
    document.getElementById('hinh').src = arr_hinh[index];
};
function next() {
    index++;
    if (index >= arr_hinh.length) index = 0;
    document.getElementById('hinh').src = arr_hinh[index];
}
setInterval("next()", 5000);

var removeCategory = document.getElementsByClassName("remove");

function ale() {
    if (confirm("bạn có muốn xóa không ?")){
        return true;
    }else{
        return false;
    }
}