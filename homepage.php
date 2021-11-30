<?php
    /**
    * Template Name: Home Page
    */
?>

<?php get_header(); ?>

<div class="body_home">
<p style="padding-top:30px;"></p>
<h1 style="font-weight: bold; color: #ff6200">Contact</h1>
<h2 style="color: #a7a7a7; font-size: 15px; font-weight: 300;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere ipsum nec velit mattis elementum. Cum sociis natoque 
penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas eu placerat metus, eget placerat libero. </h2>


<div class="row_bottom">
    <div style="width: 50%; float: left; padding-right: 10px;" class="col-1">
    <h1 style="color: #ff6200; font-weight: 300;">CONTACT US</h1>
    <hr style="border-bottom: solid 5px black;" />
    <form action="/action_page.php">
  <input type="text" id="fname" name="fname" value="Name *"><br>
  <input type="text" id="lphone" name="lname" value="Phone *">
  <input type="text" id="lemail" name="lname" value="Email *"><br>
  <textarea id="subject" name="subject" placeholder="Message*" style="height:100px"></textarea>
  <br>
  <input type="submit" value="Submit">
</form> 
    </div>
    <div style="width: 50%; float: left; padding-left: 10px;" class="col-2">
    <h1 style="color: #ff6200; font-weight: 300;">REACH US</h1>
    <hr style="border-bottom: solid 5px black;" />
    <h2 style="font-size: 15px; font-weight: 500;">
    <span style="font-size: 17px;" href="#">Coalition Skills Test</span>
<br>
<?php 
        $address = get_option('address');  
		echo $address;
    ?>
<br><br>
    <?php 
        $phone = get_option('phone');  
		echo $phone;
    ?>
<br>
<?php 
        $fax = get_option('fax');  
		echo $fax;
    ?>
    </h2>
    <p style="padding-top: 30px;"></p>
    <p>
    <a href="<?php 
        $facebook_url = get_option('facebook_url');  
		echo $facebook_url;
    ?>"><i class="fa fa-facebook" style="font-size: 17px; background-color: #363636; padding: 10px 13px;  color: white;"></i></a>
    <a href="<?php 
        $twitter_url = get_option('twitter_url');  
		echo $twitter_url;
    ?>"><i class="fa fa-twitter" style="font-size: 17px; background-color: #363636; padding: 10px 10px;  color: white;"></i></a>
    <a href="<?php 
        $linkedin_url = get_option('linkedin_url');  
		echo $linkedin_url;
    ?>"><i class="fa fa-linkedin" style="font-size: 17px; background-color: #363636; padding: 10px 10px;  color: white;"></i></a>
    <a href="<?php 
        $pinterest_url = get_option('pinterest_url');  
		echo $pinterest_url;
    ?>"><i class="fa fa-pinterest" style="font-size: 17px; background-color: #363636; padding: 10px 10px;  color: white;"></i></a>
    </p>
    </div>
</div>
</div>