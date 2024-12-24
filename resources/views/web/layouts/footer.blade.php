    <footer class="footer">

      <div class="container">
        <div class="row">
          <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="footerlogo">
              <img src="{{ asset('frontend/images/Footerlogo.png') }}">
            </div>
            <div class="social-links gap-5">
              <a href="#"><i class="fa-brands fa-facebook-f" style="line-height: 2.5;"></i></a>
              <a href="#"><i class="fa-brands fa-instagram" style="line-height: 2.5;"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in" style="line-height: 2.5;"></i></a>
              <a href="#"><i class="fa-brands fa-youtube" style="line-height: 2.5;" ></i></a>
              <a href="#"><i class="fa-brands fa-x-twitter" style="line-height: 2.5;"></i></a>
            </div>
          </div>
          <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <ul>
              <li><a href="#"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Products</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Terms & Condition</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Privacy Policy</a></li>
            </ul>
          </div>
          <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12 thirdsecfooter">
            <h3>Contact Us</h3>
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i> +91 8920 392 418</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> mail@ Fabricstree.com</a></li>
            </ul>
          </div>
          <div class="footer-col col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <ul>
              <li><a href="#">Download the mobile app</a></li>
              <li><a href="#"> <img src="{{ asset('frontend/images/playstore.png') }}" alt=""> </a></li>
          </div>

        </div>
      </div>
    </footer>

    
  <!-- Modal Log in-->
  <div class="modal fade login" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">{{ __('Login In') }}</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{ route('customer.login') }}">
          @csrf
          @session('error')
              <div class="alert alert-danger" role="alert"> 
                  {{ $value }}
              </div>
          @endsession
          <div class="row">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">{{ __('Email') }}*</label>
              <input id="email_id" type="email" class="form-control @error('email_id') is-invalid @enderror" name="email_id" value="{{ old('email_id') }}" required autocomplete="email_id" placeholder="Enter your email id">

                @error('email_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">{{ __('Password') }}*</label>
              <input id="pwd" type="password" class="form-control @error('pwd') is-invalid @enderror" name="pwd" required autocomplete="password" placeholder="Please enter password">

                @error('pwd')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <p class="Forgot" data-bs-toggle="modal" data-bs-target="#exampleModalforget">{{ __('Forgot Your Password?') }}</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 loginbtn">{{ __('Sign in') }}</button>
            <div class="text-center w-100">
              <p class="newregistation" type="submit" data-bs-toggle="modal"
            data-bs-target="#exampleModalregistation">{{ __('New Here? Registration') }} </p>
              
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Forgot Password-->
  <div class="modal fade login" id="exampleModalforget" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">Forgot Password</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('customer.forgetpassword') }}">
          @csrf
          <div class="row">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input id="email_address" type="email" class="form-control @error('email_address') is-invalid @enderror" name="email_address" value="{{ old('email_address') }}" required autocomplete="email_address" placeholder="Enter your email address">

              @error('email_address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <!-- <p class="Forgot" data-bs-toggle="modal" data-bs-target="#exampleModalforgetnew">Forgot Your Password?</p> -->

            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 loginbtn">Submit</button>

          </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Forgot New & confirm Password-->
  <div class="modal fade login" id="exampleModalforgetnew" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">Forgot Password</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('customer.resetpassword') }}">
          @csrf
          <div class="row">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">New Password</label>
              <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new_password" placeholder="New Password">

              <input id="token" type="hidden" class="form-control" name="token" required autocomplete="token" placeholder="Token" value="{{@$token}}">

              <input id="user_email" type="hidden" class="form-control" name="user_email" required autocomplete="user_email" placeholder="Email" value="{{@$email}}">

                @error('new_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
              <input id="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" required autocomplete="confirm_password" placeholder="Confirm Password">

                @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary w-100 loginbtn">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Registration From-->
  <div class="modal fade login" id="exampleModalregistation" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="text-center w-100">
            <h1 class="modal-title fs-4" id="exampleModalLabel loginheding">{{ __('Registration') }}</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{ route('customer.register') }}">
        @csrf  
        @session('success')
            <div class="alert alert-success" role="alert"> 
              {{ $value }}
            </div>
        @endsession
        <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Full Name') }}*</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="fullname" autofocus placeholder="Enter your full name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Email Id') }}*</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email id">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Mobile Number') }}*</label>
                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter your mobile number">

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">{{ __('Address') }}*</label>
                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address" placeholder="Enter your address" rows="3">{{ old('address') }}</textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('New Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="New Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="text-center w-100">
              <p class="newregistation" type="submit" data-bs-toggle="modal"
            data-bs-target="#exampleModal">{{ __('Already have an account? Sign in') }}</p>
              
            </div>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary w-100 loginbtn">{{ __('Submit') }}</button>
        </div>
        </form>
      </div>
    </div>
  </div>
     
    <script>
      productScroll();

      function productScroll() {
        let slider = document.getElementById("slider");
        let next = document.getElementsByClassName("pro-next")[0];
        let prev = document.getElementsByClassName("pro-prev")[0];
        let slide = document.getElementById("slide");
        let items = slide.getElementsByClassName("item");

        let position = 0; // Initialize position outside of event listeners

        prev.addEventListener("click", function () {
          if (position > 0) {
            position -= 1;
            translateX(position); //translate items
          }
        });

        next.addEventListener("click", function () {
          if (position < hiddenItems()) {
            position += 1;
            translateX(position); //translate items
          }
        });

        function hiddenItems() {
          // Get hidden items
          return items.length - Math.floor(slider.offsetWidth / 210);
        }

        function translateX(position) {
          // Translate items
          slide.style.transform = `translateX(${position * -210}px)`;
        }
      }
    </script>
    @session('success')
    <script type="text/javascript">
      $( document ).ready(function() {
          console.log( "ready-3" );
        $('#exampleModalregistation').modal('show');
      });
    </script>      
    @endsession
    @session('error')
    <script type="text/javascript">
      $( document ).ready(function() {
          console.log( "ready-2" );
        $('#exampleModal').modal('show');
      });
    </script>   
    @endsession
    <script type="text/javascript">
    @if((count($errors) > 0) && (!@$token) && (!@$email))
      $( document ).ready(function() {
          console.log( "ready-1" );
        $('#exampleModalregistation').modal('show');
      });
    @endif
    </script>

    @if(@$token && @$email)
      <script type="text/javascript">
      $( document ).ready(function() {
          console.log( "ready-4" );
        $('#exampleModalforgetnew').modal('show');
      });
    </script>  
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>

      
    