
<?php
include('sidebar.php');


if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
  header('Location: /');
  // echo $_COOKIE['password'];
  exit();
}

?>

    <div class="new-blog text-right">
        <a href="add-blog.php"><i class="fa fa-plus"></i> New Blog</a>
    </div>
    <div class="container">
    <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object" src="./images/icon/blog2.png">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading">Receta 1</h4>
          <p class="text-right">By Mohd Sahil</p>
          <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
			</ul>
            <ul class="view-edit">
                <li><a href="blog-view.php"><i class="fa fa-eye"></i>View</a></li>
                <li><a href="#"><i class="fa fa-edit"></i>Edit</a></li>
                <li ><a href="#" class="delete"><i class="fa fa-trash"></i>Delete</a></li>
            </ul>
       </div>
    </div>
  </div>
   <div class="well">
      <div class="media">
  		<a class="pull-left" href="#">
    		<img class="media-object" src="http://placekitten.com/150/150">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading">Receta 2</h4>
          <p class="text-right">By Sahil</p>
          <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="fa fa-calendar"></i> 2 days, 8 hours </span></li>
			</ul>
            <ul class="view-edit">
                <li><a href="#"><i class="fa fa-eye"></i>View</a></li>
                <li><a href="#"><i class="fa fa-edit"></i>Edit</a></li>
                <li ><a href="#" class="delete"><i class="fa fa-trash"></i>Delete</a></li>
            </ul>
       </div>
    </div>
  </div>
    </div>
    
</body>
</html>