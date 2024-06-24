<!doctype html>
<html lang="en">
    <head>
        <title>Bienvenido</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="{{asset('assets/css.css')}}">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        
            <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight text-center text-dark">
          Bienvenido a TuApp.com<br />
          <span></span>
        </h1>
        <p class="mb-4 opacity-70 text-black display-8 fs-5 text-justify">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>
      <div id="radius-shape-3" class="position-absolute shadow-5-strong"></div>


      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="{{route('login')}}" method="post">
                @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
               
              <h2 class="text-center fw-bold mb-4">Iniciar Sesión</h2>
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Ingresar correo" />
                <label class="form-label" for="form3Example3">Correo</label>
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="password" id="form3Example4" class="form-control" placeholder="Ingresar password" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Submit button -->
               <div class="text-center">
               <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-signup btn-block mb-4">
                Iniciar Sesion
              </button>
              </div>

              <!-- Register buttons -->
      <div>
        <p>No tienes cuenta? <a href="{{route('register')}}" class="btn-purple justify-aling">Registrate</a></p>
      </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
