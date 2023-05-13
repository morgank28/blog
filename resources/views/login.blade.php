<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  </head>
  <body>

    <main>
      <section>
        <fieldset>          
          <div class="container">

            <h1>Login Form</h1>
            <form action="" method="post">

              @csrf

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

              <div class="form-check mb-4">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember Me</label>
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark btn-block btn-lg gradient-custom-4 text-light">Login</button>
              </div>

              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

            </form>

          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </fieldset>
      </section>
    </main>
  </body>
</html>
