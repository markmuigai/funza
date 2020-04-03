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
            
                  <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="progress-wizard-dot">
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
            

                <form class="" action="{{ Route('school.confirm-registration.store') }}" method="post">
                  @csrf
                  <div class="card shadow-none">
                    <div class="card-header card-header-lg bg-danger text-white p-6 rounded-top">
                      <h4 class="font-weight-bold mb-0">Payment Mathod</h4>
                    </div>
        
                    <div class="card-body border border-top-0 rounded-bottom-sm p-7">
                      <div class="mb-5">
                        <div class="row align-items-center">
                          <div class="col-6 col-md-7 col-lg-4 col-xl-5">
                            <h3 class="font-weight-bold text-danger mb-0">
                              Card
                              <span class="text-danger ml-2">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                              </span>
                            </h3>
                          </div>
                        
                          <div class="col-6 col-lg-5 col-xl-3 d-none d-lg-block"></div>
                        
                          <div class="col-6 col-md-5 col-lg-3 col-xl-4">
                            <span class="text-purple font-weight-medium mr-2 font-dosis font-size-18">or pay with</span>
                            <a href="product-checkout-step-3.html">
                              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="32" viewBox="0 0 100 32" preserveAspectRatio="xMinYMin meet">
                                <path fill="#ffffff" d="M 67.894 6.862 L 60.094 6.862 C 59.594 6.862 59.094 7.262 58.994 7.762 L 55.894 27.662 C 55.794 28.062 56.094 28.362 56.494 28.362 L 60.494 28.362 C 60.894 28.362 61.194 28.062 61.194 27.762 L 62.094 22.062 C 62.194 21.562 62.594 21.162 63.194 21.162 L 65.694 21.162 C 70.794 21.162 73.794 18.662 74.594 13.762 C 74.894 11.662 74.594 9.962 73.594 8.762 C 72.394 7.562 70.494 6.862 67.894 6.862 Z M 68.794 14.162 C 68.394 16.962 66.194 16.962 64.194 16.962 L 62.994 16.962 L 63.794 11.762 C 63.794 11.462 64.094 11.262 64.394 11.262 L 64.894 11.262 C 66.294 11.262 67.594 11.262 68.294 12.062 C 68.794 12.462 68.894 13.162 68.794 14.162 Z"></path>
                                <path fill="#ffffff" d="M 12.394 6.862 L 4.594 6.862 C 4.094 6.862 3.594 7.262 3.494 7.762 L 0.394 27.762 C 0.294 28.162 0.594 28.462 0.994 28.462 L 4.694 28.462 C 5.194 28.462 5.694 28.062 5.794 27.562 L 6.594 22.162 C 6.694 21.662 7.094 21.262 7.694 21.262 L 10.194 21.262 C 15.294 21.262 18.294 18.762 19.094 13.862 C 19.394 11.762 19.094 10.062 18.094 8.862 C 16.994 7.562 14.994 6.862 12.394 6.862 Z M 13.294 14.162 C 12.894 16.962 10.694 16.962 8.694 16.962 L 7.494 16.962 L 8.294 11.762 C 8.294 11.462 8.594 11.262 8.894 11.262 L 9.394 11.262 C 10.794 11.262 12.094 11.262 12.794 12.062 C 13.294 12.462 13.494 13.162 13.294 14.162 Z"></path>
                                <path fill="#ffffff" d="M 35.594 14.062 L 31.894 14.062 C 31.594 14.062 31.294 14.262 31.294 14.562 L 31.094 15.562 L 30.794 15.162 C 29.994 13.962 28.194 13.562 26.394 13.562 C 22.294 13.562 18.794 16.662 18.094 21.062 C 17.694 23.262 18.194 25.362 19.494 26.762 C 20.594 28.062 22.294 28.662 24.194 28.662 C 27.494 28.662 29.394 26.562 29.394 26.562 L 29.194 27.562 C 29.094 27.962 29.394 28.362 29.794 28.362 L 33.194 28.362 C 33.694 28.362 34.194 27.962 34.294 27.462 L 36.294 14.662 C 36.394 14.462 35.994 14.062 35.594 14.062 Z M 30.494 21.362 C 30.094 23.462 28.494 24.962 26.294 24.962 C 25.194 24.962 24.394 24.662 23.794 23.962 C 23.194 23.262 22.994 22.362 23.194 21.362 C 23.494 19.262 25.294 17.762 27.394 17.762 C 28.494 17.762 29.294 18.162 29.894 18.762 C 30.394 19.362 30.594 20.262 30.494 21.362 Z"></path>
                                <path fill="#ffffff" d="M 91.094 14.062 L 87.394 14.062 C 87.094 14.062 86.794 14.262 86.794 14.562 L 86.594 15.562 L 86.294 15.162 C 85.494 13.962 83.694 13.562 81.894 13.562 C 77.794 13.562 74.294 16.662 73.594 21.062 C 73.194 23.262 73.694 25.362 74.994 26.762 C 76.094 28.062 77.794 28.662 79.694 28.662 C 82.994 28.662 84.894 26.562 84.894 26.562 L 84.694 27.562 C 84.594 27.962 84.894 28.362 85.294 28.362 L 88.694 28.362 C 89.194 28.362 89.694 27.962 89.794 27.462 L 91.794 14.662 C 91.794 14.462 91.494 14.062 91.094 14.062 Z M 85.894 21.362 C 85.494 23.462 83.894 24.962 81.694 24.962 C 80.594 24.962 79.794 24.662 79.194 23.962 C 78.594 23.262 78.394 22.362 78.594 21.362 C 78.894 19.262 80.694 17.762 82.794 17.762 C 83.894 17.762 84.694 18.162 85.294 18.762 C 85.894 19.362 86.094 20.262 85.894 21.362 Z"></path>
                                <path fill="#ffffff" d="M 55.494 14.062 L 51.794 14.062 C 51.394 14.062 51.094 14.262 50.894 14.562 L 45.694 22.162 L 43.494 14.862 C 43.394 14.362 42.894 14.062 42.494 14.062 L 38.794 14.062 C 38.394 14.062 37.994 14.462 38.194 14.962 L 42.294 27.062 L 38.394 32.462 C 38.094 32.862 38.394 33.462 38.894 33.462 L 42.594 33.462 C 42.994 33.462 43.294 33.262 43.494 32.962 L 55.994 14.962 C 56.294 14.662 55.994 14.062 55.494 14.062 Z"></path>
                                <path fill="#ffffff" d="M 95.494 7.462 L 92.294 27.762 C 92.194 28.162 92.494 28.462 92.894 28.462 L 96.094 28.462 C 96.594 28.462 97.094 28.062 97.194 27.562 L 100.394 7.662 C 100.494 7.262 100.194 6.962 99.794 6.962 L 96.194 6.962 C 95.794 6.862 95.594 7.062 95.494 7.462 Z"></path>
                                <path fill="#003087" d="M 12 4.917 L 4.2 4.917 C 3.7 4.917 3.2 5.317 3.1 5.817 L 0 25.817 C -0.1 26.217 0.2 26.517 0.6 26.517 L 4.3 26.517 C 4.8 26.517 5.3 26.117 5.4 25.617 L 6.2 20.217 C 6.3 19.717 6.7 19.317 7.3 19.317 L 9.8 19.317 C 14.9 19.317 17.9 16.817 18.7 11.917 C 19 9.817 18.7 8.117 17.7 6.917 C 16.6 5.617 14.6 4.917 12 4.917 Z M 12.9 12.217 C 12.5 15.017 10.3 15.017 8.3 15.017 L 7.1 15.017 L 7.9 9.817 C 7.9 9.517 8.2 9.317 8.5 9.317 L 9 9.317 C 10.4 9.317 11.7 9.317 12.4 10.117 C 12.9 10.517 13.1 11.217 12.9 12.217 Z"></path>
                                <path fill="#003087" d="M 35.2 12.117 L 31.5 12.117 C 31.2 12.117 30.9 12.317 30.9 12.617 L 30.7 13.617 L 30.4 13.217 C 29.6 12.017 27.8 11.617 26 11.617 C 21.9 11.617 18.4 14.717 17.7 19.117 C 17.3 21.317 17.8 23.417 19.1 24.817 C 20.2 26.117 21.9 26.717 23.8 26.717 C 27.1 26.717 29 24.617 29 24.617 L 28.8 25.617 C 28.7 26.017 29 26.417 29.4 26.417 L 32.8 26.417 C 33.3 26.417 33.8 26.017 33.9 25.517 L 35.9 12.717 C 36 12.517 35.6 12.117 35.2 12.117 Z M 30.1 19.317 C 29.7 21.417 28.1 22.917 25.9 22.917 C 24.8 22.917 24 22.617 23.4 21.917 C 22.8 21.217 22.6 20.317 22.8 19.317 C 23.1 17.217 24.9 15.717 27 15.717 C 28.1 15.717 28.9 16.117 29.5 16.717 C 30 17.417 30.2 18.317 30.1 19.317 Z"></path>
                                <path fill="#003087" d="M 55.1 12.117 L 51.4 12.117 C 51 12.117 50.7 12.317 50.5 12.617 L 45.3 20.217 L 43.1 12.917 C 43 12.417 42.5 12.117 42.1 12.117 L 38.4 12.117 C 38 12.117 37.6 12.517 37.8 13.017 L 41.9 25.117 L 38 30.517 C 37.7 30.917 38 31.517 38.5 31.517 L 42.2 31.517 C 42.6 31.517 42.9 31.317 43.1 31.017 L 55.6 13.017 C 55.9 12.717 55.6 12.117 55.1 12.117 Z"></path>
                                <path fill="#009cde" d="M 67.5 4.917 L 59.7 4.917 C 59.2 4.917 58.7 5.317 58.6 5.817 L 55.5 25.717 C 55.4 26.117 55.7 26.417 56.1 26.417 L 60.1 26.417 C 60.5 26.417 60.8 26.117 60.8 25.817 L 61.7 20.117 C 61.8 19.617 62.2 19.217 62.8 19.217 L 65.3 19.217 C 70.4 19.217 73.4 16.717 74.2 11.817 C 74.5 9.717 74.2 8.017 73.2 6.817 C 72 5.617 70.1 4.917 67.5 4.917 Z M 68.4 12.217 C 68 15.017 65.8 15.017 63.8 15.017 L 62.6 15.017 L 63.4 9.817 C 63.4 9.517 63.7 9.317 64 9.317 L 64.5 9.317 C 65.9 9.317 67.2 9.317 67.9 10.117 C 68.4 10.517 68.5 11.217 68.4 12.217 Z"></path>
                                <path fill="#009cde" d="M 90.7 12.117 L 87 12.117 C 86.7 12.117 86.4 12.317 86.4 12.617 L 86.2 13.617 L 85.9 13.217 C 85.1 12.017 83.3 11.617 81.5 11.617 C 77.4 11.617 73.9 14.717 73.2 19.117 C 72.8 21.317 73.3 23.417 74.6 24.817 C 75.7 26.117 77.4 26.717 79.3 26.717 C 82.6 26.717 84.5 24.617 84.5 24.617 L 84.3 25.617 C 84.2 26.017 84.5 26.417 84.9 26.417 L 88.3 26.417 C 88.8 26.417 89.3 26.017 89.4 25.517 L 91.4 12.717 C 91.4 12.517 91.1 12.117 90.7 12.117 Z M 85.5 19.317 C 85.1 21.417 83.5 22.917 81.3 22.917 C 80.2 22.917 79.4 22.617 78.8 21.917 C 78.2 21.217 78 20.317 78.2 19.317 C 78.5 17.217 80.3 15.717 82.4 15.717 C 83.5 15.717 84.3 16.117 84.9 16.717 C 85.5 17.417 85.7 18.317 85.5 19.317 Z"></path>
                                <path fill="#009cde" d="M 95.1 5.417 L 91.9 25.717 C 91.8 26.117 92.1 26.417 92.5 26.417 L 95.7 26.417 C 96.2 26.417 96.7 26.017 96.8 25.517 L 100 5.617 C 100.1 5.217 99.8 4.917 99.4 4.917 L 95.8 4.917 C 95.4 4.917 95.2 5.117 95.1 5.417 Z"></path>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-12">
                          <label for="first-name">Card Number</label>
                          <div class="form-group form-group-icon">
                            <i class="fa fa-lock"></i>
                            <input type="text" class="form-control border-warning" placeholder="1234 5678 9012 3456">
                          </div>
                        </div>                
                      </div>
        
                      <div class="row">
                        <div class="col-lg-4">
                          <label for="first-name">Expiry Date</label>
                          <div class="form-group form-group-icon">
                            <input type="text" class="form-control border-pink" placeholder="MM/YY">
                          </div>
                        </div>
        
                        <div class="col-lg-4">
                          <label for="first-name">Full Name</label>
                          <div class="form-group form-group-icon">
                            <input type="text" class="form-control border-purple" placeholder="John Doe">
                          </div>
                        </div>
        
                        <div class="col-lg-4">
                          <label for="first-name">CV Code</label>
                          <div class="form-group form-group-icon">
                            <input type="text" class="form-control border-info" placeholder="123">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <ul class="list-unstyled d-flex justify-content-between mt-4">
                    <li>
                      <a href="product-checkout-step-1.html" class="btn btn-light text-uppercase">Back</a>
                    </li>
        
                    <li>
                      <button type="submit" class="btn btn-primary">
                        Complete Registration
                      </button>
                    </li>
                  </ul>
                </form>
          
                </div>
              </div>
            </section>
        </div>
@endsection
