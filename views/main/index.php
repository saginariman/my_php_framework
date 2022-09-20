<div class="container mt-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php for($i=0; $i<count($news); $i++) {?>
            <div class="col">
                <div class="card shadow-sm">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/public/img/news/<?=$news[$i]['img']?>"/>

                    <div class="card-body">
                    <p class="card-text"><?=$news[$i]['title']?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" class="btn btn-sm btn-outline-secondary" href="/news/<?=$news[$i]['id']?>">Смотреть</a>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
            </div>
        <?php } ?>
      </div>
    </div>
</div>