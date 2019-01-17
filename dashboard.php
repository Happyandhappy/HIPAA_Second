<?php
include('layout/header.php');
?>

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">Dashboard</h3>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->                    
        <div class="m-content">
            <!--Begin::Section-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Management Dashboard
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <a href="itemspage_controller.php?type=device-registry" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
                        <span>
                            <span>Device Registry</span>
                        </span>
                    </a>
                </div>
            </div>
            <!--End::Section-->
        </div>
    </div>
<?php include('layout/footer.php'); ?>
