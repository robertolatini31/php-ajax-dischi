<main class="py-5">
      <div class="container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 align-items-center justify-content-center">
                <?php foreach($discs as $disc) : ?>
                    <div class="col p-4 d-flex justify-content-center">
                        <div class="album_card p-3 text-center">
                        <img class="album_poster" src="<?= $disc["poster"] ?>" alt="poster" />
                        <h4 class="text-uppercase text-white mt-2"><?= $disc["title"] ?></h4>
                        <p class="m-0"><?= $disc["author"] ?></p>
                        <span class="m-0"><?= $disc["year"] ?></span>
                        </div>
                        <!-- /.album_card -->
                    </div>
                    <!-- /.col -->
                <?php endforeach; ?>
            </div>
            <!-- /.row row-cols-5 -->
      </div>
      <!-- /.container -->
  </main>