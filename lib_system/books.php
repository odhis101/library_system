
    <?php
        include_once 'header.php';
        $search = $_SESSION["add"];
        $sql = "SELECT * FROM books WHERE bookname LIKE'%$search%'";
        $result_check = mysqli_query($con,$sql);
        $row = mysqli_num_rows($result_check);
       ?>
       <section class="books-page">
         <div class="search-input search-b">
            <input class="search-bar" type="search" placeholder="search" onclick="suggestToggler()">
            <img src="assets/img/search-icon.png" alt="">
        </div>
        <?php
        if($row> 0){
          
            while($rows=mysqli_fetch_assoc($result_check))
            {
              
                 $bookname = $rows ['bookname']; 
                 $availability  = $rows ['availability'];
                 ?>
                     
    
      
      <div class="books-container">
          <div class="book-item">
              <img src="assets/img/book-item.png" alt="">
              <p><?php echo $bookname ?> </p>
              <div class="availability"><?php echo $availability ?></div>
          </div>
      </div>
  </section>
  <?php
              
            }

        }
        else{
            echo "No results found";
        }
    ?>




    <?php
        include_once 'footer.php';
    ?> 