@extends('layouts.app')
@section('page-title', 'School Registration')
    
@section('app.content')
        <div class="container mt-5">
            <section class="py-7 py-md-10">
              <div class="container">
                <div class="row progress-wizard" style="border-bottom:0;">
                  <div class="col-sm-4 col-xs-12 progress-wizard-step active">
                    <div class="progress">
                      <div class="progress-bar"></div>
                    </div>
                    <a href="product-checkout-step-1.html" class="progress-wizard-dot">
                      <i class="fa fa-school" aria-hidden="true"></i>
                    </a>
                    <div class="progress-info">School Details</div>
                  </div>
            
                  <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="{{ Route('school.admin.create') }}" class="progress-wizard-dot">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    <div class="progress-info">Admin Account</div>
                  </div>
            
                  <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="product-checkout-step-3.html" class="progress-wizard-dot">
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </a>
                    <div class="progress-info">3. Confirmation</div>
                  </div>
                </div>
            

                    <form class="" action="{{ Route('school.store') }}" method="post">
                      @csrf
                      <div class="card bg-transparent shadow-none">
                        <div class="card-header card-header-lg bg-danger text-white p-6 rounded-top">
                          <h4 class="font-weight-bold mb-0">School Details</h4>
                        </div>
            
                        <div class="card-body border border-top-0 rounded-bottom-sm p-7">
                          <div class="row">
                            <div class="form-group form-group-icon col-lg-6">
                              <span style="color:red">*</span>
                              <label for="school-name">School Name</label>
                              <input type="text" class="form-control border-warning rounded-sm" placeholder="School Name" id="school-name">
                            </div>
            
                            <div class="form-group form-group-icon col-lg-6">
                              <span style="color:red">*</span>
                              <label for="last-name">School email</label>
                              <input type="email" class="form-control border-success" placeholder="Email address">
                            </div>
                          </div>

                          <div class="row">
                            <div class="form-group form-group-icon col-lg-6">
                              <label for="state">Tel No</label>
                              <input type="text" class="form-control border-warning rounded-sm" id="state">
                            </div>
            
                            <div class="form-group form-group-icon col-lg-6">
                              <label for="country">Alternate Tel No</label>
                              <input type="text" class="form-control border-success rounded-sm" id="country">
                            </div>
                          </div>

                          <div class="row">
                            <div class="form-group form-group-icon col-lg-6">
                              <label for="address-1">Address 1</label>
                              <input type="text" class="form-control border-danger rounded-sm" id="address-1">
                            </div>

                            <div class="form-group form-group-icon col-lg-6">
                              <label for="address-2">Address 2</label>
                              <input type="text" class="form-control border-info rounded-sm" id="address-2">
                            </div>
                          </div>

                          <div class="row">
                            <div class="form-group form-group-icon col-lg-6">
                              <label for="city">County</label>
                              <input type="text" class="form-control border-purple rounded-sm" id="city">
                            </div>
            
                            <div class="form-group form-group-icon col-lg-6">
                              <label for="zip-code">Sub County</label>
                              <input type="text" class="form-control border-pink rounded-sm" id="zip-code">
                            </div>
                          </div>
            
                          <div class="checkbox col-12">
                            <label>
                              <input type="checkbox"> I have read and accept the <a class="text-danger" href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
            
                      <div class="pull-right mt-4">
                        <button type="submit" class="btn btn-primary">
                          NEXT
                        </button>
                      </div>
                    </form>
          
                </div>
              </div>
            </section>
        </div>
@endsection
