<?php
use app\models\User;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                 <img src="<?= Yii::getAlias('@web').'/img/silapen.png'; ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- ADMIN -->
        <?php if (User::isAdmin()) { ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'dashboard', 'icon' => 'home', 'url' => ['site/dashboard']],
                    ['label' => 'Data Penduduk', 'icon' => 'user', 'url' => ['/data-penduduk/index']],
                    [
                                        "label" => "Pencatatan",
                                       'icon' => 'list',
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "Kelahiran", 'icon'=>'desktop', "url" => ["/data-lahir/index"]],
                                            ["label" => "Kematian", 'icon'=> 'desktop', "url" => ["/data-kematian/index"]],
                                        ],
                   ],
                    ['label' => 'Agama', 'icon' => 'circle-o', 'url' => ['/agama/index']],
                    ['label' => 'Golongan Darah', 'icon' => 'circle-o', 'url' => ['/gol-darah/index']],
                    ['label' => 'Status Kewarganegaraan', 'icon' => 'circle-o', 'url' => ['/statuswrg/index']],
                    ['label' => 'Sekretaris Desa', 'icon' => 'user', 'url' => ['/sekretaris-desa/index']],
                    [
                                        "label" => "Penyuratan",
                                        "icon" => "th",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "Surat Keterangan Tidak Mampu", 'icon' => 'circle-o', "url" => ["/surat-ket-desa/index"]],
                                            ["label" => "Surat Keterangan Tanah",'icon' => 'circle-o', "url" => ["/surat-tanah/index"]],
                                            ["label" => "Surat Keterangan Usaha", 'icon' => 'circle-o', "url" => ["/surat-ket-usaha/index"]],
                                            ["label" => "Surat Keterangan Izin Orangtua",'icon' => 'circle-o', "url" => ["surat-izin-ortu/index"]],
                                            ["label" => "Surat Keterangan Paspor", 'icon' => 'circle-o', "url" => ["surat-ket-paspor/index"]],
                                            ["label" => "Surat Keterangan Wali", 'icon' => 'circle-o', "url" => ["surat-wali/index"]],

                                        ],

                   ],
                    ['label' => 'Sistem', 'options' => ['class' => 'header']],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/user'],],
                    ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
               
                ],
            ]
        ) ?>

     <?php } elseif (User::isWarga()) {?>

     <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [

                 ["label" => "Surat Keterangan Tidak Mampu", 'icon' => 'circle-o', "url" => ["/surat-ket-desa/create"]],
                 ["label" => "Surat Keterangan Tanah",'icon' => 'circle-o', "url" => ["/surat-tanah/create"]],
                 ["label" => "Surat Keterangan Usaha", 'icon' => 'circle-o', "url" => ["/surat-ket-usaha/create"]],
                 ["label" => "Surat Keterangan Izin Orangtua",'icon' => 'circle-o', "url" => ["surat-izin-ortu/create"]],
                 ["label" => "Surat Keterangan Paspor", 'icon' => 'circle-o', "url" => ["surat-ket-paspor/create"]],
                 ["label" => "Surat Keterangan Wali", 'icon' => 'circle-o', "url" => ["surat-wali/create"]],
                ],
            ]
        ) ?>

    </section>
     <?php } ?>

</aside>
