<?php


?>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        if (!empty($model)) {?>
                            <ul>
                           <?php foreach ($model as $item) { ?>
                               <li>
                                   <a href="/admin/gallery_image/delete/?id=<?= $item['id'] ?>&id_gallery=<?= $item['id_gallery']?>">X</a>
                                <img width="250px" height="150px" src="<?= '/frontend/web/upload/gallerys/gallery_'.$id_gallery."/" . $item['name_img'] ?>"
                                     class="js-intro-bg">
                               </li>
                                <?php } ?>
                                </ul>
                       <?php } else { ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h1>Возможно галерея не содержит изображений!</h1>
                                        <br>
                                        <br>
                                        <a href="/admin/gallerys">Идем добавлять изображения?</a>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
