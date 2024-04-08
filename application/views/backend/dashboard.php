<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<div class="page-bar">
  <div class="page-title-breadcrumb">
    <div class=" pull-left">
      <div class="page-title">Dashboard</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
      <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
      </li>
      <li class="active">Dashboard</li>
    </ol>
  </div>
</div>
<!-- start widget -->
<div class="state-overview">
  <div class="row">
    <div class="col-xl-3 col-md-6 col-12">
      <div class="info-box bg-blue">
        <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
        <div class="info-box-content">
          <span class="info-box-text">Orders</span>
          <span class="info-box-number">450</span>
          <div class="progress">
            <div class="progress-bar width-60"></div>
          </div>
          <span class="progress-description">
            60% Increase in 28 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
      <div class="info-box bg-orange">
        <span class="info-box-icon push-bottom"><i class="material-icons">card_travel</i></span>
        <div class="info-box-content">
          <span class="info-box-text">New Booking</span>
          <span class="info-box-number">155</span>
          <div class="progress">
            <div class="progress-bar width-40"></div>
          </div>
          <span class="progress-description">
            40% Increase in 28 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
      <div class="info-box bg-purple">
        <span class="info-box-icon push-bottom"><i class="material-icons">phone_in_talk</i></span>
        <div class="info-box-content">
          <span class="info-box-text">Inquiry</span>
          <span class="info-box-number">52</span>
          <div class="progress">
            <div class="progress-bar width-80"></div>
          </div>
          <span class="progress-description">
            80% Increase in 28 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-xl-3 col-md-6 col-12">
      <div class="info-box bg-success">
        <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Earning</span>
          <span class="info-box-number">13,921</span><span>$</span>
          <div class="progress">
            <div class="progress-bar width-60"></div>
          </div>
          <span class="progress-description">
            60% Increase in 28 Days
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
</div>
<!-- end widget -->
<!-- chart start -->
<div class="row">
  <div class="col-md-12">
    <div class="card card-box">
      <div class="card-head">
        <header>Chart Survey</header>
        <div class="tools">
          <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
          <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
          <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
        </div>
      </div>
      <div class="card-body no-padding height-9">
        <div class="row text-center">
          <div class="col-sm-3 col-6">
            <h4 class="margin-0">$ 209 </h4>
            <p class="text-muted"> Today's Income</p>
          </div>
          <div class="col-sm-3 col-6">
            <h4 class="margin-0">$ 837 </h4>
            <p class="text-muted">This Week's Income</p>
          </div>
          <div class="col-sm-3 col-6">
            <h4 class="margin-0">$ 3410 </h4>
            <p class="text-muted">This Month's Income</p>
          </div>
          <div class="col-sm-3 col-6">
            <h4 class="margin-0">$ 78,000 </h4>
            <p class="text-muted">This Year's Income</p>
          </div>
        </div>
        <div class="row">
          <div id="area_line_chart" class="width-100"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Chart end -->
<div class="row">
  <div class="col-md-4 col-sm-12 col-12">
    <div class="card bg-info">
      <div class="text-white py-3 px-4">
        <h6 class="card-title text-white mb-0">Page View</h6>
        <p>7582</p>
        <div id="sparkline26"></div>
        <small class="text-white">View Details</small>
      </div>
    </div>
    <div class="card bg-success">
      <div class="text-white py-3 px-4">
        <h6 class="card-title text-white mb-0">Earning</h6>
        <p>3669.25</p>
        <div id="sparkline27"></div>
        <small class="text-white">View Details</small>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-12 col-12">
    <div class="card  card-box">
      <div class="card-head">
        <header>Notifications</header>
        <div class="tools">
          <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
          <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
          <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
        </div>
      </div>
      <div class="card-body no-padding height-9">
        <div class="row">
          <div class="noti-information notification-menu">
            <div class="notification-list mail-list not-list small-slimscroll-style">
              <a href="javascript:;" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-user-o"></i>
                </span> <span class="text-purple">Abhay Jani</span> Added you as friend
                <span class="notificationtime">
                  <small>Just Now</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon blue-bgcolor"> <i class="fa fa-envelope-o"></i>
                </span> <span class="text-purple">John Doe</span> send you a mail
                <span class="notificationtime">
                  <small>Just Now</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon bg-success"> <i class="fa fa-check-square-o"></i>
                </span> Success Message
                <span class="notificationtime">
                  <small> 2 Days Ago</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon bg-warning"> <i class="fa fa-warning"></i>
                </span> <strong>Database Overloaded Warning!</strong>
                <span class="notificationtime">
                  <small>1 Week Ago</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon bg-primary"> <i class="fa fa-user-o"></i>
                </span> <span class="text-purple">Abhay Jani</span> Added you as friend
                <span class="notificationtime">
                  <small>Just Now</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon blue-bgcolor"> <i class="fa fa-envelope-o"></i>
                </span> <span class="text-purple">John Doe</span> send you a mail
                <span class="notificationtime">
                  <small>Just Now</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon bg-success"> <i class="fa fa-check-square-o"></i>
                </span> Success Message
                <span class="notificationtime">
                  <small> 2 Days Ago</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon bg-warning"> <i class="fa fa-warning"></i>
                </span> <strong>Database Overloaded Warning!</strong>
                <span class="notificationtime">
                  <small>1 Week Ago</small>
                </span>
              </a>
              <a href="javascript:;" class="single-mail"> <span class="icon bg-danger"> <i class="fa fa-times"></i>
                </span> <strong>Server Error!</strong>
                <span class="notificationtime">
                  <small>10 Days Ago</small>
                </span>
              </a>
            </div>
            <div class="full-width text-center p-t-10">
              <button type="button" class="btn purple btn-outline btn-circle margin-0">View All</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 col-sm-12 col-12">
    <div class="card  card-box">
      <div class="card-head">
        <header>Earning</header>
        <div class="tools">
          <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
          <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
          <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
        </div>
      </div>
      <div class="card-body no-padding height-9">
        <div class="row text-center">
          <div class="col-sm-4 col-6">
            <h4 class="margin-0">$ 209 </h4>
            <p class="text-muted"> Today</p>
          </div>
          <div class="col-sm-4 col-6">
            <h4 class="margin-0">$ 837 </h4>
            <p class="text-muted">This Week</p>
          </div>
          <div class="col-sm-4 col-6">
            <h4 class="margin-0">$ 3410 </h4>
            <p class="text-muted">This Month</p>
          </div>
        </div>
        <div class="row">
          <div id="donut_chart" class="width-100 height-250"></div>
        </div>
      </div>
    </div>
  </div>
</div>

