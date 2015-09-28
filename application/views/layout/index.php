<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <?php $this->load->view('layout/head'); ?>
    <body ng-app="lacaco" onload="autolocation()" ng-init="loading = 0" class="hold-transition skin-blue sidebar-mini">
        <!--        <div class="angularloding" ng-if="loading">
                    <img src="<?= BASEURL ?>assets/admin/images/gears-animated.gif" width="100px" height="100px"/>
                </div>-->
        <div class="wrapper">
            <?php $this->load->view('layout/header'); ?>
            <?php $this->load->view('layout/side_menu'); ?>
            <?php $this->load->view('layout/main_view', $data); ?>
            <?php $this->load->view('layout/footer'); ?>
        </div>
        <?php $this->load->view('layout/js'); ?>
    </body>
</html>