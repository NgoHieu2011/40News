  <div class="col-md-4">

          <!-- Search Widget -->
          <!-- <div class="card mb-4">
            <h5 class="card-header">Tìm Kiếm</h5>
            <div class="card-body">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Tìm</button>
                </span>
              </form>
              </div>
            </div>
          </div> -->

          <!-- Categories Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Danh Mục</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
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
                </div>
       
              </div>
            </div>
          </div> -->

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Tin tức mới nhất</h5>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query = mysqli_query($con, "SELECT tblposts.id AS pid, tblposts.PostTitle AS posttitle
  FROM tblposts
  LEFT JOIN tblcategory ON tblcategory.id = tblposts.CategoryId
  LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId = tblposts.SubCategoryId
  ORDER BY tblposts.postingDate DESC
  LIMIT 7");

while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>

        </div>
