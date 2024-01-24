           {{-- Masthead Content --}}
           <div class="container">
               <div class="masthead-subheading">Selamat Datang di PT. Anilo Adikarya Sentosa</div>
               @foreach ($companyProfile as $companyProfile)
                   <div class="masthead-heading text-uppercase">{{ $companyProfile->description }}</div>
               @endforeach
               <a class="btn btn-primary btn-xl text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal">Tanya
                   Lebih Lanjut</a>
           </div>
