<?php require 'session-user.php'; ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/blogstyle.css">
    <link rel="stylesheet" href="./css/viewpost.css">
    <!-- <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script> -->
    <!-- <script src="./js/com_sys.js"></script> -->
    <title>View Posts | i-Agro_solution</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="./img/aglogo.png" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">i</span>AGRO <span style="color: white;">Solution</span></p>
      </div>

      <table id="nav">
        <nav>
          <ul>
            <tr><td><li class="current"> <a href="home.php">Home</a> </li></td>
            <td><li><a href="forum.php">Forum</a></li></td>
            <td><li><a href="agrovet.php">Agrovet</a></li></td>
            <td><li><a href="vet.php">veterinary</a></li></td>
            <td><li> <a href="about.php">About</a> </li></td>
            <td><li> <a href="logout.php">Log-out</a> </li></td></tr>
          </ul>
        </nav>
      </table>
      <form class="search" action="index.html" method="post">
        <input type="text" name="s-in" placeholder="Type your search here...">
        <button type="submit" name="search">Search</button>
      </form>
    </header><hr style="margin-bottom: 3%;">

    <section class="sidebar" style="color:#aaa; background:green; width:19%; padding: .25% 0% .25% .125%; position:fixed;">
      <nav>
        <ul>
          <p>Filter to view</p>
          <li><a href="blog-home.php">start a discussion</a> </li>
          <li><a href="viewposts.php">All post</a> </li>
          <li><a href="animalpost.php">Livestock Related Posts</a> </li>
          <li><a href="plantpost.php">Plants related Posts</a> </li>
          <li><a href="medipost.php">Medicinal Related Posts</a> </li>
        </ul>
      </nav>
    </section>

    <section class="blog-body" style="border: 1px solid white;">

    <?php
    // include('uploadreply.php');
  //   include("dbcon.php");
  //
  //   $result = mysqli_query($con, "select * from animals_pane ORDER BY date DESC");
  //   $num_rows = mysqli_num_rows($result);
  //
  //   foreach ($result as $item) {
  //     $date = new dateTime($item['date']);
  //     $date = date_format($date, 'M j, Y | H:i:s');
  //     $author = $item['author'];
  //     $description = $item['description'];
  //     $par_code = $item['code'];
  //
  //     echo '<div style="border-bottom: 2px solid gray;" class="comment" id="'.$par_code.'">'
  //             .'<p class="User">'.$author.'<p>'
  //             .'<p class="date">'.$date.'<p>'
  //             .'<p class="comment-text">'.$description.'<p>'
  //             .'<a style="color:dodgerblue;" class="link-reply" id="reply" name="'.$par_code.'">Reply</a>';
  //
  //         //for pulling out any children that exist for this comment
  //         $child_result = mysqli_query($con, "select * from animalreply WHERE par_code = '$par_code' ORDER BY date DESC");
  //         $child_num_rows = mysqli_num_rows($child_result);
  //
  //         //check there are replies
  //         if($child_num_rows == 0){
  //         }else{
  //           echo "<a class='link-reply' id='children' name='".$par_code."'>&nbsp;&nbsp;<span id='tog_text'>Replies</span> (".$child_num_rows.")</a>"
  //           ."<div class='child-comments' id='C-".$par_code."'>";
  //
  //           foreach ($child_result as $child_item) {
  //             $child_date = new dateTime($child_item['date']);
  //             $child_date = date_format($child_date, 'M j, Y | H:i:s');
  //             $child_author = $child_item['author'];
  //             $child_description = $child_item['description'];
  //             $child_rpostCode = $child_item['par_code'];
  //
  //             echo "<div style='margin-left:20px;' class='child' id'".$par_code."-C'>"
  //                   ."<p class='user'>".$child_author."</p>"
  //                   ."<p class='time'>".$child_date."</p>"
  //                   ."<p class='comment-text'>".$child_description."</p>"
  //                 ."</div>";
  //         }
  //         echo "</div";
  //   }
  //   echo '</div>';
  // }
  //
  //
  // function generateRandomStrings($length = 8){
  //   $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  //   $charLength = strlen($characters);
  //   $randomString = '';
  //
  //   for ($i=0; $i < $length; $i++) {
  //     $randomString .= $characters[rand(0, $charLength - 1)];
  //   }
  //   return $randomString;
  // }



        // $commentHTML = '';
        //
        // while($comment = mysqli_fetch_assoc($commentsResult)){
        //
        //   $commentHTML .= '
        //
        //       <div class="category-cont" style="margin-bottom: 20px; height: 250px;" >
        //         <div class="panel-body"style="position:relative; width:90%; max-height:30%; text-align:left; margin: 1% 0% 1% 1%; border-left:1px solid gray; border-top:1px solid gray; padding:1%; ">
        //           '.$comment["description"].'<br>'.'<img width="40%" height="70px" src="uploads/'.$comment["pic_upload"].'"/>'.' <br>
        //           <div style="right:0; top:70%; position:absolute; padding:1% 0% 1% 0%; margin-left:1% 1% 1% 0%; color: dodgerblue; font:17px monotype corsiva;">
        //             Posted By <b>'.$comment["author"].'</b> on the topic <i>'.$comment["title"].'</i> On Livestock docket.
        //           </div>
        //         </div>
        //         <div class="panel-footer" align="left">
        //           <button  class="accordion">Reply</button>
        //           <div class="panel">
        //             <form action="uploadreply.php" method="post" >
        //                 <textarea id="replyComment" name="description" rows="1" cols="60"></textarea>
        //                 <input type="hidden" name="user_id">
        //                 <input type="submit" class="btn2"  name="animal_reply" value="Add reply"><br>
        //             </form>
        //           </div>
        //
        //         </div>
        //       </div>';
        //
        //     }
        //
        //     echo $commentHTML;
      ?>



      <?php

      // include("dbcon.php");
      //
      //     $fetchPost = "select * from plant_pane";
      //     $commentsResult = mysqli_query($con, $fetchPost);
      //
      //     $fetchReply = "select * from plantReply";
      //     $replyQuery = mysqli_query($con, $fetchReply);
      //
      //     $commentHTML = '';
      //     $replyHTML ='';
      //
      //     while($comment = mysqli_fetch_assoc($commentsResult)){
            // $numComments = mysqli_num_rows($commentsResult);


            // $commentHTML .= '
            //
            //     <div class="category-cont" style="margin-bottom: 20px; height: 250px;" >
            //       <div class="panel-body"style="position:relative; width:90%; max-height:30%; text-align:left; margin: 1% 0% 1% 1%; border-left:1px solid gray; border-top:1px solid gray; padding:1%; ">
            //         '.$comment["description"].'<br>'.'<img width="40%" height="70px" src="uploads/'.$comment["pic_upload"].'"/>'.' <br>
            //         <div style="right:0; top:70%; position:absolute; padding:1% 0% 1% 0%; margin-left:1% 1% 1% 0%; color: dodgerblue; font:17px monotype corsiva;">
            //           Posted By <b>'.$comment["author"].'</b> on the topic <i>'.$comment["title"].'</i> On Plants docket.
            //         </div>
            //       </div>
            //       <div class="panel-footer" align="left">
            //         <button  class="accordion">Reply</button>
            //         <div class="panel">
            //           <form action="uploadreply.php" method="post" >
            //               <textarea id="replyComment" name="description" rows="1" cols="60"></textarea>
            //               <input type="hidden" name="user_id">
            //               <input type="submit" class="btn2"  name="plant_reply" value="Add reply"><br>
            //           </form>
            //         </div>
            //
            //       </div>
            //     </div>';
            //
            //   }
            //
            //   echo $commentHTML;
            //   echo $replyHTML;

        ?>

        <?php
        // include("dbcon.php");
        // $fetchReply = "select * from medReply";
        // $replyQuery = mysqli_query($con, $fetchReply);
        //
        //     $fetchPost = "select * from meds";
        //     $commentsResult = mysqli_query($con, $fetchPost);
        //
        //
        //
        //     $commentHTML = '';
        //     $replyHTML ='';
        //
        //     while($comment = mysqli_fetch_assoc($commentsResult)){
              // $numComments = mysqli_num_rows($commentsResult);

              //
              // $commentHTML .= '
              //
              //     <div class="category-cont" style="margin-bottom: 20px; height: 250px;" >
              //       <div class="panel-body"style="position:relative; width:90%; max-height:30%; text-align:left; margin: 1% 0% 1% 1%; border-left:1px solid gray; border-top:1px solid gray; padding:1%; ">
              //         '.$comment["description"].'<br>'.'<img width="40%" height="70px" src="uploads/'.$comment["pic_upload"].'"/>'.' <br>
              //         <div style="right:0; top:70%; position:absolute; padding:1% 0% 1% 0%; margin-left:1% 1% 1% 0%; color: dodgerblue; font:17px monotype corsiva;">
              //           Posted By <b>'.$comment["author"].'</b> on the topic <i>'.$comment["title"].'</i> On Medicinal docket.
              //         </div>
              //       </div>
              //       <div class="panel-footer" align="left">
              //         <button  class="accordion">Reply</button>
              //         <div class="panel">
              //           <form action="uploadreply.php" method="post" >
              //               <textarea id="replyComment" name="description" rows="1" cols="60"></textarea>
              //               <input type="hidden" name="user_id">
              //               <input type="submit" class="btn2"  name="med_reply" value="Add reply"><br>
              //           </form>
              //         </div>
              //         '?><?php
              //         while ($replyRow = mysqli_fetch_assoc($replyQuery)) {
              //           $replyHTML .='
              //           <div class="replyContainer" style="width:90%;">
              //             <div class="reply" style="position:relative; border-top: 1px solid gray; border-left: 1px solid gray; margin: 2% 1% 1% 2%;  padding:1% 1% 1% 2%;">
              //               '.$replyRow["description"].'
              //               <div class="replyFooter" style="position:absolute; right:0; top:20%;  ">
              //                 <p style=" color: dodgerblue; font:15px monotype corsiva;">By '.$replyRow["user_id"].' on '.$replyRow["date"].'</p>
              //               </div>
              //             </div>
              //           </div>
              //           ';
              //         }'
              //       </div>
              //     </div>';
              //
              //   }
              //
              //
              //   echo $commentHTML;
              //   echo $replyHTML;

          ?>

      <script type="text/javascript">

        // var acc = document.getElementsByClassName("accordion");
	      // var i;
  		  // for (i = 0; i < acc.length; i++) {
  			//   acc[i].onclick = function(){
  			//    this.classList.toggle("active");
  			//    this.nextElementSibling.classList.toggle("show");
  			//     }
	      //   }
      </script>
    <!-- </section> -->
