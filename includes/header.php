 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <!-- <div class="container"> -->
        <a class="navbar-brand" href="index.php"><img src="images/40newslogo.png" height="20" style="margin-left:50%"></a>
        
        <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
        aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->


        <!-- Tim kiem -->
        <div class="" height="10px" style="margin-left :57%">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Tìm</button>
                </span>
              </form>
              </div>
            </div>

                  <!-- the loai -->
        <ul class="nav navbar-nav navbar-right" height="50px" weight="50px" style="margin-left:14%">
                          <li class="dropdown user-box">
                              <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                  <img src="images/iconlist.png"  height="20" >
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                              <!-- <div class="card my-4"> -->
            <h5 class="card-header">Danh Mục</h5>
            <div class="card-body">
              <div class="row">
                  <ul class="list-unstyled mb-0">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>
                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
              <!-- </div> -->
            </div>
          </div>

                              </ul>
                          </li>

                      </ul>


        <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item">
              <a class="nav-link" href="about-us.php">About</a>
            </li>
                 <li class="nav-item">
              <a class="nav-link" href="index.php">News</a>
            </li>
             <li class="nav-item" >
              <a class="nav-link" href="contact-us.php" >Liên Hệ</a>
            </li> -->


      <!-- </div> -->


    </nav>