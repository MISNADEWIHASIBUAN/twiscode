<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <title>Twiscode</title>
  <style>
    body {
        font-family: 'Poppins';
        overflow-x: hidden;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container justify-content-between">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('/') }}assets/img/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link text-black fw-semibold active" href="#home" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black fw-semibold" href="#work">Work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black fw-semibold" href="#service">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black fw-semibold" href="#customer">Our Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black fw-semibold" href="#team">Team</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link text-black fw-semibold" href="#">Career</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link text-black fw-semibold" href="#contact">Contact</a>
            </li>
            <li>
              <button class="btn mx-2" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <header id="home" style="height: 90vh; width: 100%; background-color: #F8F8F8;">
    <div class="container h-100 d-flex align-items-center justify-content-start">
      <div class="">
          <h1 class="text-capitalize" style="font-weight: 600; font-size: 64px; line-height: 72px; color: #414141; margin-bottom: 35px;">We Code <br> We Deliver</h1>
          <div class="row align-items-center mt-2 mb-5" style="font-weight: 300; font-size: 14px; line-height: 24px; color: #414141;">
            <div class="col-3">
              <img src="{{ asset('/') }}assets/img/btn1.png" alt="">
            </div>
            <div class="col">
              <span>Twiscode specializes in developing <br> high-performing mobile and <br> web applications.</span>
            </div>
          </div>
      </div>
    </div>
  </header>
  <div class="section">
    <div class="work-section" id="work" style="margin-top: 6rem">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col">
            <img src="{{ asset('/') }}assets/img/img2.png" alt="">
          </div>
          <div class="col">
            <h3 style="font-weight: 600; font-size: 36px; line-height: 72px; color: #414141;">What We Do?</h3>
            @foreach ($works as $work)
                <b style="font-size: 14px;">{{ $work->title }}</b>
                <p style="font-size: 12px; line-height: 24px;">{{ $work->deskripsi }}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="service-section" id="service" style="margin-top: 6rem; position: relative;">
      <div class="row justify-content-end">
        <div class="text-end">
          <img src="{{ asset('/') }}assets/img/img1.png" alt="" style="height: 400px">
        </div>  
        <div class="card-service bg-white px-5 py-4" style="width: 450px; box-shadow: -2px 0px 8px #d0d0d0; position: absolute; top: 75px; left: 325px;">
          <h4 style="font-weight: 600; font-size: 36px; line-height: 72px; color: #414141;">How We Work?</h4>
          <p style=" font-weight: 500; font-size: 18px; line-height: 32px; color: #9F9F9F;">Let's discuss what projects <br> you have in mind</p>
          <button type="button" class="btn text-white px-4 py-2" style="background-color: #4A4A4A; border-radius: 0px; font-size: 14px;">Let’s Have a Coffee</button>
        </div>
      </div>
    </div>
    <div class="customer-section" id="customer" style="margin-top: 6rem;">
      <div class="container">
        <h2 class="text-center" style=" font-weight: 600; font-size: 36px; line-height: 45px; color: #414141;">Our Customer <br> are our biggest fans</h2> </div>
        <div class="row align-items-center justify-content-center" style="margin: 50px 200px">
          @foreach ($customers as $customer)
            <div class="col">
              <img src="{{ asset('/') . $customer->logo }}" style="width: 100px;" alt="">
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="teams-section" id="team" style="margin-top: 6rem;">
      <div class="container">
        <h2 class="text-center" style=" font-weight: 600; font-size: 36px; line-height: 45px; center; color: #414141;">Our Team</h2>
        <div class="row align-items-baseline justify-content-center" style="margin-top: 50px;">
          <div class="col text-center">
            <img src="{{ asset('/') }}assets/img/person2.png" style="width: 180px; height: 180px;" alt="">
            <p style="font-weight: 600; font-size: 24px; color: #414141;">Elisabeth Be</p>
            <p style=" font-weight: 600; font-size: 24px; color: #9F9F9F;">COO</p>
          </div>
          <div class="col text-center">
            <img src="{{ asset('/') }}assets/img/person1.png" style="width: 250px; height: 250px; margin: 0 100px;" alt="">
            <p style="font-weight: 600; font-size: 24px; color: #414141;">Andree Wijaya</p>
            <p style=" font-weight: 600; font-size: 24px; color: #9F9F9F;">CEO/CTO</p>
          </div>
          <div class="col text-center">
            <img src="{{ asset('/') }}assets/img/person3.png" style="width: 180px; height: 180px;" alt="">
            <p style="font-weight: 600; font-size: 24px; color: #414141;">Sanjaya Wahono</p>
            <p style=" font-weight: 600; font-size: 24px; color: #9F9F9F;">CFO</p>
          </div>
        </div>
      </div>
    </div>
    <div class="join-section" id="contact" style="margin-top: 6rem;">
      <div class="container">
        <div class="row align-items-baseline justify-content-between" style="margin: 0 50px">
          <div class="col">
            <h2 class="text-start" style=" font-weight: 600; font-size: 36px; line-height: 45px; color: #414141;">Join Our Team</h2>
            <img src="{{ asset('/') }}assets/img/img3.png" class="mt-4" alt="">
          </div>
          <div class="col">
            <p style="width: 400px; font-size: 14px; line-height: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et at fringilla id maecenas in scelerisque in. Pharetra, erat amet, vestibulum ullamcorper. Nunc feugiat lacus et eget urna ornare risus malesuada. Cursus morbi vel sed ipsum eget tincidunt ultrices.</p>
            <button type="button" class="btn text-white px-4 py-2" style="background-color: #4A4A4A; border-radius: 0px; font-weight: 600; font-size: 18px;">Apply</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer style="margin-top: 6rem;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4 text-center">
          <h4 style="font-size:24px; font-weight: 600">Location</h4>
          <img src="{{ asset('/') }}assets/img/img4.png" alt="">
        </div>
        <div class="col-4 text-center">
          <h4 style="font-size:24px; font-weight: 600">Company</h4>
          <ul style="list-style-type: none; color: #9F9F9F;">
            <li>Work</li>
            <li>Service</li>
            <li>Team</li>
            <li>Contact</li>
          </ul>
        </div>
        <div class="col-4 text-center">
          <h4 style="font-size:24px; font-weight: 600">Contact Us</h4>
          <ul style="list-style-type: none;">
            <li style="line-height: 36px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
              <span style="color: #9F9F9F">Twiscode</span>
            </li>
            <li style="line-height: 36px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
              <span style="color: #9F9F9F">Twiscode</span>
            </li>
          </ul>
        </div>
      </div>
      <div style="box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.1); padding: 25px;margin-top: 25px;">Twiscode Pte. Ltd. | PT. Dapur Rumah Sejahtera</div>
    </div>
  </footer>
</body>
</html>