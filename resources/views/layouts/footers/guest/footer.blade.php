  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Manual 1
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Manual 2
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Manual 3
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Manual 4
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Manual 5
          </a>
          <a href="#" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Manual 6
          </a>
      </div>
        @if (!auth()->user() || \Request::is('static-sign-up')) 
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.facebook.com/p/OFEP-100064159563552/%3Flocale%3Des_LA&ved=2ahUKEwiLoOHA2sCHAxUbA7kGHSaqFCgQFnoECBMQAQ&usg=AOvVaw0boVgQ9aRt6nbWhk99uesQ" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-facebook-f" aria-hidden="true"></span>
              </a>
              <a href="h#" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
              </a>
              <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
              </a>
              <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
              </a>
              <a href="#" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-wpforms" aria-hidden="true"></span>
              </a>
          </div>
        @endif
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> OFEP
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
