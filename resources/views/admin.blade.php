@extends('admin.layouts.app')

@section('content')

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pagetitle">
      <i class="icon ion-ios-home-outline"></i>
      <div>
        <h4>Dashboard</h4>
      </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
      <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
          <div class="bg-info rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
              <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
              <div class="mg-l-20">
                <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Slids</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$slid}}</p>
              </div>
            </div>
            <div id="ch1" class="ht-50 tr-y-1"></div>
          </div>
        </div><!-- col-3 -->

        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
          <div class="bg-primary rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
              <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
              <div class="mg-l-20">
                <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Subscribers</p>
              <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$subscriber}}</p>
              </div>
            </div>
            <div id="ch4" class="ht-50 tr-y-1"></div>
          </div>
        </div><!-- col-3 -->
      </div><!-- row -->



    </div><!-- br-pagebody -->
  </div><!-- br-mainpanel -->
  <br>
  <br>
@endsection
