           {{-- Masthead Content --}}
           <div class="container">
               <!-- <div class="masthead-subheading">Selamat Datang di PT. Anilo Adikarya Sentosa</div> -->
               @foreach ($companyProfile as $companyProfile)
                   <div class="masthead-heading text-uppercase">{{ $companyProfile->description }}</div>
               @endforeach
               <a href="https://wa.me/62895412979121"  class="btn btn-primary btn-xl text-uppercase">Tanya
                   Lebih Lanjut</a>
           </div>
