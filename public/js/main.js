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
