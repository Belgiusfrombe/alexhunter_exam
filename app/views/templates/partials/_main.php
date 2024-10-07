<div class="row">
          <!-- About Me (Left Sidebar) Start -->
          <div class="col-md-3">
          <?php include "../app/views/templates/partials/_aside.php"; ?>
          </div>
          <!-- About Me (Left Sidebar) End -->

          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <div class="col-md-12 page-body">
              <div class="row">
                <div class="col-md-12 content-page">
                  <!-- Zone dynamique -->
                    <?php echo $content; ?>
                  <!-- Zone dynamique -->
                </div>
              </div>
              <nav aria-label="Page navigation example" style="text-align: center;">
                  <?php include "../app/views/templates/partials/_nav.php"; ?>
                  </nav>
            </div>

            <!-- Footer Start -->
            <div class="col-md-12 page-body margin-top-50 footer">
              <footer>
              <?php include "../app/views/templates/partials/_footer.php"; ?>
              </footer>
            </div>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>