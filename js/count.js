var cleanResult = function(){
    $(".result").empty();
};

$("#clear").click(function(){
    cleanResult();
});

$("#send").click(function(){
    $.post("count_word.php", {
        textos: $("#textos").val()
    },
    function(data,status){
      console.log(status);
      if(status == "success"){
          var obj = JSON.parse(data);
          console.dir(obj.total);
          cleanResult();

          $(".result").html(JSON.stringify(obj,undefined, 2));
      }else{
          console.log("error");
          cleanResult();
      }

    });
});