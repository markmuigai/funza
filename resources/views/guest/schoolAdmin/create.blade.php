@extends('layouts.app')
@section('page-title', 'School Registration')
    
@section('app.content')
        <div class="container mt-5">
            <section class="py-7 py-md-10">
                <div class="container">

                    <div class="row progress-wizard" style="border-bottom:0;">
                      <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
                        <div class="progress">
                          <div class="progress-bar"></div>
                        </div>
                        <a href="product-checkout-step-1.html" class="progress-wizard-dot">
                          <i class="fa fa-school" aria-hidden="true"></i>
                        </a>
                        <div class="progress-info">School Details</div>
                      </div>
                
                      <div class="col-sm-4 col-xs-12 progress-wizard-step active">
                        <div class="progress"><div class="progress-bar"></div></div>
                        <a href="{{ Route('school.admin.create', ['school' => $school]) }}" class="progress-wizard-dot">
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
              
                      <div class="row">
                        <form class="" action="{{ Route('school.admin.store', ['school' => $school]) }}" method="post">
                          @csrf
                          <div class="card bg-transparent shadow-none">
                            <div class="card-header card-header-lg bg-danger text-white p-6 rounded-top">
                              <h4 class="font-weight-bold mb-0">School Details</h4>
                            </div>
                
                            <div class="card-body border border-top-0 rounded-bottom-sm p-7">
                              <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                  <div class="form-group form-group-icon">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control border-warning" placeholder="User Name" name="name" value="{{ old('name') ?: ($user->name ?? 'Luffy Muigai') }}">
                                  </div>
                                </div>
                      
                                <div class="col-sm-6 col-xs-12">
                                  <div class="form-group form-group-icon">
                                    <i class="fa fa-envelope"></i>
                                    <input type="email" class="form-control border-success" placeholder="Email address" name="email" value="{{ old('email') ?: ($user->email ?? 'luffy@learners.com') }}">
                                  </div>
                                </div>
                      
                                <div class="col-sm-6 col-xs-12">
                                  <div class="form-group form-group-icon">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" class="form-control border-purple" placeholder="Phone" name="telno" value="{{ old('telno') ?: ($user->telno ?? '0712345670') }}">
                                  </div>
                                </div>
                      
                                <div class="col-sm-6 col-xs-12">
                                  <div class="form-group form-group-icon">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" class="form-control border-pink" placeholder="Phone 2" name="telno2" value="{{ old('telno2') ?: ($user->telno2 ?? '0776543210') }}">
                                  </div>
                                </div>
                      
                                <div class="col-sm-6 col-xs-12">
                                  <div class="form-group form-group-icon">
                                    <i class="fa fa-key"></i>
                                    <input type="password" class="form-control border-success" name="password" placeholder="Password" value="secret">
                                  </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                  <div class="form-group form-group-icon">
                                    <i class="fa fa-key"></i>
                                    <input type="password" class="form-control border-warning" name="password_confirmation" placeholder="Repeat Password" value="secret">
                                  </div>
                                </div>
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
