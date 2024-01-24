<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/img/logo-company.png') }}" type="image/x-icon">
    <title>Document</title>
    @include('layouts.landing_page.assets.style')
</head>

<body>
    @include('sweetalert::alert')


    <div>
        @include('layouts.landing_page.includes.nav')
    </div>

    <header class="masthead">
        @include('layouts.landing_page.includes.masthead')
    </header>

    <section class="page-section-visi-misi bg-light">
        <div class="row">
            <div class="col-6 d-flex align-items-center flex-column gap-2">
                <span class="visi-misi-title">visi</span>
                <p class="visi-misi-paragraph" style="text-align: justify">
                    Menjadi sebuah perusahaan konstruksi yang mengutamakan kualitas terbaik untuk jasa layanan kami,
                    dengan menjadi mitra yang mengedepankan intergritas serta kepercayaan bersama klien demi
                    menghasilkan proyek terbaik.
                </p>
            </div>
            <div class="col-6 d-flex align-items-center flex-column gap-2">
                <span class="visi-misi-title">misi</span>
                <ul>
                    <li class="visi-misi-paragraph">Memberikan kontribusi dan nilai terbaik kami agar tercapai
                        kesuksesan dalam proyek serta agar
                        dapat menjaga hubungan yang baik dengan mitra ataupun klien kami.</li>
                    <li class="visi-misi-paragraph">hubungan yang baik dengan mitra ataupun klien kami.
                        Terus</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="page-section" id="about">
        @include('layouts.landing_page.includes.company_history')
    </section>

    <section class="page-section bg-light " id="excellence">
        @include('layouts.landing_page.includes.company_excellences')
    </section>

    <section class="page-section" id="service">
        @include('layouts.landing_page.includes.company_services')
    </section>

    <section class="page-section bg-light " id="portfolio">
        @include('layouts.landing_page.includes.company_portofolio')
    </section>

    <section class="page-section" id="faq">
        @include('layouts.landing_page.includes.company_faq')
    </section>

    <section class="page-section bg-light " id="team">
        @include('layouts.landing_page.includes.company_team')
    </section>


    <footer class="footer py-4">
        @include('layouts.landing_page.includes.footer')
    </footer>

    @include('layouts.landing_page.assets.script')


    @include('layouts.landing_page.includes.modal_form_question')
    @include('layouts.landing_page.includes.modal_detail_portofolio')
</body>

</html>
