 <?php 
 include('dbcon.php');
 ?>
<?php
  $select_name = mysqli_query($con, "select fn from register where email = '$id_session'");
  $row = mysqli_fetch_array($select_name);
  $fn = $row['fn'];

  $_SESSION['author'] = $fn;

  function get_total(){
    include('dbcon.php');
    $result = mysqli_query($con, "select * from animals_pane ORDER BY date DESC");
    $num_rows = mysqli_num_rows($result);
    echo "<h3>Comments (".$num_rows.") were found</h3>";
  }

  function get_comments(){
    include('dbcon.php');
    $result = mysqli_query($con, "select * from animals_pane ORDER BY date DESC");
    $num_rows = mysqli_num_rows($result);

    foreach ($result as $item) {
      $date = new dateTime($item['date']);
      $date = date_format($date, 'M j, Y | H:i:s');
      $author = $item['author'];
      $title = $item['title'];
      $description = $item['description'];
      $par_code = $item['code'];

      echo '<div class="comment" id="'.$par_code.'">'
              .'<p class="user">'.$author.'</p>&nbsp;&nbsp;'
              .'<p class="title">'.$title.'</p>&nbsp;&nbsp;'
              .'<p class="time">'.$date.'</p>'
              .'<p class="comment-text">'.$description.'</p>'
              .'<img width=200 height=100 src="uploads/'.$item["pic_upload"].'"/><br>'
              .'<a class="link-reply" id="reply" name="'.$par_code.'">Reply</a>';

          //for pulling out any children that exist for this comment
          $child_result = mysqli_query($con, "select * from animalreply WHERE par_code = '$par_code' ORDER BY date DESC");
          $child_num_rows = mysqli_num_rows($child_result);

          //check there are replies
          if($child_num_rows == 0){
          }else{
            echo "<a class='link-reply' id='children' name='".$par_code."'><span id='tog_text'>Replies</span> (".$child_num_rows.")</a>"
            ."<div class='child-comments' id='C-".$par_code."'>";

            foreach ($child_result as $child_item) {
              $child_date = new dateTime($child_item['date']);
              $child_date = date_format($child_date, 'M j, Y | H:i:s');
              $child_author = $child_item['author'];
              $child_description = $child_item['description'];
              $child_rpostCode = $child_item['par_code'];

              echo "<div style='margin-left:20px;' class='child' id'".$child_rpostCode."-C'>"
                    ."<p class='user'>".$child_author."</p>&nbsp;&nbsp;"
                    ."<p class='time'>".$child_date."</p>"
                    ."<p class='comment-text'>".$child_description."</p>"
                  ."</div>";
          }
          echo '</div';
    }
    echo '</div>';
  }
}
function generateRandomStrings($length = 8){
  $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $charLength = strlen($characters);
  $randomString = '';

  for ($i=0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charLength - 1)];
  }
  return $randomString;
}





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

?>
