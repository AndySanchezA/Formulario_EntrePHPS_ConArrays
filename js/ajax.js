
$(function () {
    
  /* PASA EL MOUSE Y DESPLIEGA
    
    $("#slide").hover(function () {


    $("#content").toggle();
  });*/

  /* click mouse despliega
    $("#slide").click(function () {


    $("#content").toggle();
  });

*/
$flag = -1;
  
$("#slide").hover(
    function () {

        $("div.div2").attr("style", "display:block");
    },
    function () {
        if ($flag == 1) {
            $("div.div2").attr("style", "display:none");
        }
    }
);

$("#slide").click(function () {
    $("#content").slideToggle("slow");
    $flag = -1;
});
});
