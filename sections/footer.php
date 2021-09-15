
</body>
<footer>
  <div class="footer-container">

   <!-- Contact Form -->
   <div id="contactForm" class="wow fadeInUp" data-wow-duration="2s">
        <form action="includes/functions.php" method="POST">
            <h2 class="hidden">User Form</h2>
        <?php foreach($fields as $field_name => $field_config):?>
            <?php if($field_config['type'] === 'textarea'):?>
                <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
                <textarea id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" name="<?php echo $field_name;?>"></textarea><br>
            <?php else:?>
                <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
                <input id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" type="<?php echo $field_config['type'];?>" name="<?php echo $field_name;?>"><br>
            <?php endif;?>
        <?php endforeach;?>
            <input type="submit" value="send" id="submitBtn">
        </form> 
        </div>
        </div>
    </div>

  <ul class="footer-nav">
      <li><a href="#about">Portfolio</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Contact</a></li>
  </ul>
  <ul class="social-media">
        <li><a href="https://www.twitch.tv/starsorbet"><i class="fab fa-twitch"></i></a></i></li>
        <li><a href="https://www.instagram.com/starsorbet"><i class="fab fa-instagram"></i></a></i></li>
        <li><a href="https://www.twitter.com/starsorbet"><i class="fab fa-twitter"></i></a></li>
  </ul>
     <span class="copyright">&copy; <?php echo date("Y"); ?> Patricia Morales.</span> 
  </div>
</footer>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>


