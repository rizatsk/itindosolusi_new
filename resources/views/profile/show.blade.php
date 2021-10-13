@extends('template.menu')
@section('title','Profile | ITindo Solution')
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>user / profile</li>
        </ol>
        <h2>User Profile</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="row card-profile">
          <div class="col-auto card-profile-left">
            <ul>
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <div class="d-flex justify-content-center">
                  <img class="rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" style="max-width: 70px" alt="{{ Auth::user()->name }}" />
              </div>
              <div class="mt-2 d-flex justify-content-center">
                <h6 style="color: rgb(146, 146, 146);font-size: 15px">Profile</h6>
              </div>
              <div class="d-flex justify-content-center">
                <h6>{{Auth::user()->username}}</h6>
              </div>
              @endif
              <li class="mb-2">
                  <a class="btn-account myprofile" id="active-profile"><i class="bi bi-person fs-4"></i> Akun Saya </a>
                  <ul class="list-myprofile">
                    <li class="mb-2 mt-2 profile" id="li-active-profile">Profile</li>
                    <li class="mb-2 alamat">Alamat</li>
                    <li class="mb-2 ubah_password">Ubah Password</li>
                    <li class="mb-2 browser-session">Browser Session</li>
                  </ul>
              </li>
              <li class="mb-2"><a class="btn-account pesanan"> <i class="bi bi-journal-text fs-4"></i> Pesanan Saya </a></li>
            </ul>
          </div>
          <div class="col-md-10 card-profile-right">
            <div class="header-card-profile-right">
              <h2>Profil Saya</h2>
              <p>Kelola informasi profil Anda, isi dengan data yang valid sesuai data anda.</p>
            </div>
            <div class="body-card-profile-right-left">
              <div class="row" id="form-update-profile">

                {{-- Data User --}}
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                  @livewire('profile.update-profile-information-form')
                
                  <x-jet-section-border />
                @endif
              {{-- End Data User --}}
              </div>

              {{-- Update Password --}}
              <div class="row d-none" id="form-update-password">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                  <div class="mt-10 sm:mt-0">
                      @livewire('profile.update-password-form')
                  </div>

                  <x-jet-section-border />
                @endif
              </div>

              {{-- Browser Session --}}
              <div class="row d-none" id="form-browser-session">
                <div class="mt-10 sm:mt-0">
                  @livewire('profile.logout-other-browser-sessions-form')
                </div>
              </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endSection