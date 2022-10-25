<?php
$connect = new PDO('mysql:host=localhost;dbname=login_sample_db', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="page3.css?v=<?php echo time(); ?>">
    <title>Html And CSS Video Playlist</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <a href="page2.php" class="previous" style="
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;"><button style=" background-color: #f1f1f1;
    color: white;
    width:80px;
    height:40px;
    background:none;
    cursor: pointer;">&laquo; Back</button></a>
    <section>
        <h2 class="title"></h2>
        <div class="container">
            <div id="video_player">
                <video controls id="main-Video" src='<?php echo 'media/' . $id . '.mp4' ?>' autoplay></video>
            </div>
        </div>
    </section><br>
    <div class="work">
        <button>Add to Watch Later</button>
        <button>Like</button>
    </div>
    <br>
    <div class="container" style="padding:0 45px;">
        <form method="POST" id="comment_form">
            <h1 style="padding:0 45px;color:#fff;" id="comment"><?php $stmt = $connect->query('SELECT COUNT(*)  FROM tbl_comment group by comment_id;');
                                                                $row_count = $stmt->rowCount();
                                                                echo $row_count ?> Comments</h1><br>
            <div class="form-group">
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" style="width:313px; height:45px;border-radius:5px;padding:10px;" />
            </div><br>
            <div class="form-group">
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" cols="40" rows="10" style="border-radius:5px;padding:10px;"></textarea>
            </div><br>
            <div class="form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" style="width:100px; height:45px;border-radius:5px;padding:10px;cursor:pointer;" />
            </div>
        </form>
        <span id="comment_message"></span>
        <br />
        <div class="msg" style="color: #fff;position:relative;right:800px;">
            <div id="display_comment"></div>
        </div>
    </div>
    <!-- <script src="./video-list.js"></script> -->
    <script src="./script.js"></script>
</body>

</html>

<script>
    $(document).ready(function() {

        $('#comment_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "add_comment.php",
                method: "POST",
                data: form_data,
                dataType: "JSON",
                success: function(data) {
                    if (data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            })
        });

        load_comment();

        function load_comment() {
            $.ajax({
                url: "fetch_comment.php",
                method: "POST",
                success: function(data) {
                    $('#display_comment').html(data);
                }
            })
        }

        $(document).on('click', '.reply', function() {
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });

    });


    $(document).ready(function() {
        setInterval(function() {
            $("#comment").load(window.location.href + " #comment");
        }, 1000);
    });
</script>