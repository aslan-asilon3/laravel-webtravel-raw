@extends('layouts.app-landingpage')

@section('title', 'Nusa Penida Detail')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0 pl-3 pl-lg-0"">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">
                  Paket Travel
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Nusa Peninda</h1>
              <p>
                Republic of Indonesia Raya
              </p>
              <div class="" style="padding:2px;">
                <div class="gallery" style="text-align: center;">
                    <div class="xzoom-container">
                    <img
                        class="xzoom" style="width: 30%;"
                        id="xzoom-default"
                        src="{{asset('frontend/images/popular-3.jpg')}}"
                        xoriginal="{{asset('frontend/images/popular-3.jpg')}}"
                    />
                    <div class="xzoom-thumbs" >
                        <a href="{{asset('frontend/images/popular-3.jpg')}}"
                        ><img
                            class="xzoom-gallery"
                            width="128"
                            src="{{asset('frontend/images/popular-3.jpg')}}"
                            xpreview="{{asset('frontend/images/popular-3.jpg')}}"
                        /></a>
                        <a href="{{asset('frontend/images/popular-3.jpg')}}"
                        ><img
                            class="xzoom-gallery"
                            width="128"
                            src="{{asset('frontend/images/popular-3.jpg')}}"
                            xpreview="{{asset('frontend/images/popular-3.jpg')}}"
                        /></a>
                        <a href="{{asset('frontend/images/popular-3.jpg')}}"
                        ><img
                            class="xzoom-gallery"
                            width="128"
                            src="{{asset('frontend/images/popular-3.jpg')}}"
                            xpreview="{{asset('frontend/images/popular-3.jpg')}}"
                        /></a>
                        <a href="{{asset('frontend/images/popular-3.jpg')}}"
                        ><img
                            class="xzoom-gallery"
                            width="128"
                            src="{{asset('frontend/images/popular-3.jpg')}}"
                            xpreview="{{asset('frontend/images/popular-3.jpg')}}"
                        /></a>
                        <a href="{{asset('frontend/images/popular-3.jpg')}}"
                        ><img
                            class="xzoom-gallery"
                            width="128"
                            src="{{asset('frontend/images/popular-3.jpg')}}"
                            xpreview="{{asset('frontend/images/popular-3.jpg')}}"
                        /></a>
                    </div>
                    </div>
                    <h2>Tentang Wisata</h2>
                    <p>
                    Nusa Penida is an island southeast of Indonesia’s island
                    Bali and a district of Klungkung Regency that includes the
                    neighbouring small island of Nusa Lembongan. The Badung
                    Strait separates the island and Bali. The interior of Nusa
                    Penida is hilly with a maximum altitude of 524 metres. It is
                    drier than the nearby island of Bali.
                    </p>
                    <p>
                    Bali and a district of Klungkung Regency that includes the
                    neighbouring small island of Nusa Lembongan. The Badung
                    Strait separates the island and Bali.
                    </p>
                    <div class="features row pt-3">
                    <div class="col-md-4">
                        <img
                        src="{{asset('frontend/images/ic_event.png')}}"
                        alt=""
                        class="features-image"
                        />
                        <div class="description">
                        <h3>Featured Ticket</h3>
                        <p>Tari Kecak</p>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <img
                    src="{{asset('frontend/images/ic_language.png')}}"
                        alt=""
                        class="features-image"
                        />
                        <div class="description">
                        <h3>Language</h3>
                        <p>Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <img
                        src="{{asset('frontend/images/ic_foods.png')}}"
                        alt=""
                        class="features-image"
                        />
                        <div class="description">
                        <h3>Foods</h3>
                        <p>Local Foods</p>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">
              <h2>Members are going</h2>
              <div class="members my-2">
                <img src="{{asset('frontend/images/members.pn')}}g" alt="" class="w-75" />
              </div>
              <hr />
              <h2>Trip Informations</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Date of Departure</th>
                  <td width="50%" class="text-right">22 Aug, 2019</td>
                </tr>
                <tr>
                  <th width="50%">Duration</th>
                  <td width="50%" class="text-right">4D 3N</td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">Open Trip</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">$80,00 / person</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="/landingpage/checkout" class="btn btn-block btn-join-now mt-3 py-2"
                >Join Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-12 col-lg-3">
                    <h5>FEATURES</h5>
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">Reviews</a>
                      </li>
                      <li>
                        <a href="#">Community</a>
                      </li>
                      <li>
                        <a href="#">Social Media Kit</a>
                      </li>
                      <li>
                        <a href="#">Affiliate</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>ACCOUNT</h5>
                    <ul class="list-unstyled">
                      <li><a href="#">Refund</a></li>
                      <li><a href="#">Security</a></li>
                      <li><a href="#">Rewards</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>COMPANY</h5>
                    <ul class="list-unstyled">
                      <li><a href="#">Career</a></li>
                      <li><a href="#">Help Center</a></li>
                      <li><a href="#">Media</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg-3">
                    <h5>Get Connected</h5>
                    <ul class="list-unstyled">
                      <li>Jakarta Selatan</li>
                      <li>Indonesia</li>
                      <li>0821 - 2222 - 8888</li>
                      <li>support@nomads.id</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div
          class="row border-top justify-content-center align-items-center pt-4"
        >
          <div class="col-auto text-gray-500 font-weight-light">
            2019 Copyright Nomads • All rights reserved • Made in Jakarta
          </div>
        </div>
      </div>
    </footer>
@endsection


@push('addon-script')
@endpush


@push('addon-script')

@endpush
