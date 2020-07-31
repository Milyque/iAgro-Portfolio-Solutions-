
$(document).ready(function(){
  $(".child-comments").hide(); //hides the replies

  //to show the reply section when the reply link is clicked
  $("a#children").click(function(){
    var section = $(this).attr("name");
    var togTxt = $("#tog_text").text();
    $("#C-" + section).toggle();
  });

  //checks if the comment is valid or note
  $(".form-submit").click(function(){
    var commentBox = $("#comment");
    var commentCheck = commentBox.val();
    if(commentCheck == '' || commentCheck == NULL){
      // commentBox.addClass("form-text-error");
      return false;
    }
  });

  //checks if the reply is valid or not
  $("#form-reply").click(function(){
    var replyBox = $("#new-reply");
    var replyCheck = replyBox.val();
    if(replyCheck == '' || replyCheck == NULL){
      // replyBox.addClass("form-text-error");
      return false;
    }
  });

  //creating and displaying the reply section
  $("a#reply").one("click", function(){
    var comCode = $(this).attr("name");
    var parent = $(this).parent();

    parent.append("<br><form action=''  method='post'><textarea class='form-text' name='new-reply' id='new-reply' required></textarea><input type='hidden' name='code' value='"+ comCode +"'/><br><input type='submit' class='form-submit btn2' id='form-reply' name='new_reply' value='Reply'/></form> ")
  });
})
