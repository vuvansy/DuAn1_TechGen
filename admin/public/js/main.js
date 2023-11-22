// Dropdown Admin
        $(document).ready(function() {
            $(".dropdown-user__main li").click(function() {
                $(this).children(".dropdown-user__sub").toggle(0);
                $(this).find(".dropdown-user__sub a").css("color", "#FFFF");
                // return false;
            });

            //Chức năng xóa của Comment
            $("#check-all").click(function (){
              $(":checkbox").prop("checked", true);
               });
            $("#clear-all").click(function (){
              $(":checkbox").prop("checked", false);
              });
            $("#btn-delete").click(function (){
              if($(":checked").length === 0){
                  alert("Vui lòng chọn ít nhất một mục!");
                  return false;
              }
              });

              
        });