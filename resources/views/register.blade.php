<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <!-- Add Bootstrap CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  </head>
  <body>

    <main>
      <section>
        <fieldset>
          
          <div class="container">

            <h1>Registration Form</h1>
            <form action="{{ route('register') }}" method="post">

              @csrf

              </div>
              <div class="mb-3">
                <label for="fname" class="form-label">First name:</label>
                 @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                <input type="text" value="{{ old('fname')?old('fname'):'' }}" name="fname" class="form-control form-control-md @error('fname') is-invalid @enderror" /> 
              </div>


              <div class="mb-3">
                <label for="lname" class="form-label">Last name:</label>
                 @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                <input type="text" value="{{ old('fname')?old('lname'):'' }}" name="lname" class="form-control form-control-md @error('lname') is-invalid @enderror" /> 
              </div>

              <div class="form-outline mb-4">
                <label for="phone" class="form-label">Phone:</label>
                 @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
              <input type="text" value="{{ old('phone')?old('phone'):'' }}" name="phone" id="phone" class="form-control form-control-md @error('phone') is-invalid @enderror" />
              </div>              



              <div class="form-outline mb-4">
                <label for="email" class="form-label">Email:</label>
                @error('email')<div class="text-danger">{{ $message }}</div>@enderror 
                <input type="text" value="{{ old('email')?old('email'):'' }}" name="email" id="email" class="form-control form-control-md @error('email') is-invalid @enderror" />
              </div> 

              <div class="form-outline mb-4">
                <label for="password" class="form-label">Password:</label>
                @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                <input type="password" name="password" id="password" class="form-control form-control-md @error('password') is-invalid @enderror" />
              </div>

              <div class="form-outline mb-4">
                <label for="confirm_password" class="form-label">Confirm Password:</label>
                @error('password_confirmation')<div class="text-danger">{{ $message }}</div>@enderror
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-md @error('password_confirmation') is-invalid @enderror" />
              </div>


              <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-dark btn-block btn-lg gradient-custom-4 text-light">Register</button>
                </div>



              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

              
                          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


             <p class="text-center text-muted mt-2 mb-0">Have already an account? <a href="{{route('login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>
 


            </form>

          </div>

          <!-- Add Bootstrap JS file (optional) -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </fieldset>
      </section>
    </main>
  </body>
</html>
