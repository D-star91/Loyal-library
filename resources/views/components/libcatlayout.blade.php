<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyalland</title>
    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>
<!-- navber -->
    <x-navbar/>
    
    <div class="library-free-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="lb-title">
                        <h2 class="L-tit2">Loyal Library</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="library-free-contant">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
            {{$slot}}
            </div>
            <div class="col-md-2">
                <div class="book-title">
                    <h4><a href="{{route('free_books')}}">Category</a></h4>
                    <ul>
                        <li><i class="fas fa-book"></i><a href="">ဆုတောင်းခြင်း</a></li>
                        <li><i class="fas fa-book"></i><a href="">အသက်တာ</a></li>
                        <li><i class="fas fa-book"></i><a href="">ဝိညာဉ်ရေးရာ</a></li>
                        <li><i class="fas fa-book"></i><a href="">အိမ်ထောင်ရေး</a></li>
                        <li><i class="fas fa-book"></i><a href="">ကလေးသူငယ်</a></li>
                        <li><i class="fas fa-book"></i><a href="">သင်ခန်းစာ</a></li>
                        <li><i class="fas fa-book"></i><a href="">ကျမ်းချက်များ</a></li>
                        <li><i class="fas fa-book"></i><a href=""></a></li>
                        <li><i class="fas fa-book"></i><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


  <footer class="bg-dark text-center text-white">
    <div class="container p-1">
        <div class="row" style="background-color: #355c7D;">
          <!-- Section: Form -->
            <section class="mt-3">
              <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                  <!--Grid column-->
                  <div class="col-auto">
                    <p class="pt-2">
                      <strong>Subscribe to our newsletter</strong>
                    </p>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-5 col-12">
                    <!-- Email input -->
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="form5Example2" class="form-control" />
                      <label class="form-label" for="form5Example2">Email address</label>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-auto">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-outline-light mb-4">
                      Subscribe
                    </button>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </form>
            </section>
          <!-- Section: Form -->
        </div>
        <div class="row">
          <!-- Text -->
            <div class="footer-title">
            <a class="Loyal-footer-title" href="#">Loyal Land</a>
              <ul class="footer-ul mt-2">
                <li class="d-inline footer-fonts p-2"><a href="">About</a></li>
                <li class="d-inline footer-fonts p-2"><a href="">Contact</a></li>
                <li class="d-inline footer-fonts p-2"><a href="">Donations</a></li>
                <li class="d-inline footer-fonts p-2"><a href="">Terms of Servise</a></li>
                <li class="d-inline footer-fonts p-2"><a href="">Privacy Policy</a></li>
              </ul>
            </div>
          <!-- Section: Social media -->
            <section class=" p-4 pb-4 social">
              <!-- Facebook -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
              <!-- Twitter -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button" ><i class="fab fa-linkedin-in"></i></a>
            </section>
          <!-- Section: Social media -->
        </div>
        <div class="row">
          <!-- Copyright -->
            <div class="text-center p-3 copy" >
              © 2021 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">Loyalland.com</a>
            </div>
          <!-- Copyright -->
        </div>
    </div>
  </footer>
  

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
</body>
</html>