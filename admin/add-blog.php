<?php
include('sidebar.php');
include('../mysql.php');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


?>

<div class="container">
    <div class="add-blog">
        <h3>New Blog Post</h3>
    </div>
    <div class="content-area">
        <div class="row image-upload">
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="image-box">

                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-sm-12">
                <a href="#">Upload Image</a>
            </div>
        </div>
        <form>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Markdown</label>
                <textarea class="form-control" rows="5"></textarea>
            </div>
        </form>

        <div class="cancel-back-btn text-right">
            <ul>
                <li><a href="#">Back</a></li>
                <li><a href="#">Cancel</a></li>
                <li class="save"><a href="#" >Save</a></li>
            </ul>
        </div>
    </div>
</div>