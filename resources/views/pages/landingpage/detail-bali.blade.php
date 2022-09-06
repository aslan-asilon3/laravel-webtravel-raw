@extends('layouts.app-landingpage')

@section('title', 'Bali Detail')

@section('content')
    <main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
        <div class="container">
          <div class="row">
            <div class="col p-0">
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
                <h1>Bali</h1>
                <p>
                  Republic of Indonesia Raya
                </p>
                <div class="gallery" style="text-align: center;">
                  <div class="xzoom-container">
                    <img
                      class="xzoom" style="width: 30%;"
                      id="xzoom-default"
                      src="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                      xoriginal="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                    />
                    <div class="xzoom-thumbs">
                      <a href="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                        ><img
                          class="xzoom-gallery"
                          width="128"
                          src="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                          xpreview="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                      /></a>
                      <a href="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                        ><img
                          class="xzoom-gallery"
                          width="128"
                          src="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                          xpreview="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                      /></a>
                      <a href="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                        ><img
                          class="xzoom-gallery"
                          width="128"
                          src="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                          xpreview="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                      /></a>
                      <a href="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                        ><img
                          class="xzoom-gallery"
                          width="128"
                          src="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                          xpreview="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                      /></a>
                      <a href="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                        ><img
                          class="xzoom-gallery"
                          width="128"
                          src="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                          xpreview="{{asset('asset-landingpage/frontend/images/popular-1.jpg')}}"
                      /></a>
                    </div>
                  </div>
                  <h2>Tentang Wisata</h2>
                  <p>
                    Bali Tourism Board (BTB) formed by nine Tourism Associations
                    in Bali on 1st March 2002 with its main aim to build and develop
                    a better and sustainable tourism industry in Bali and Indonesia.
                  </p>
                  <p>
                    Considering the importance of tourism and its reliable
                    tourism board that could associate with government and local
                    community, therefore based on letter of intent of the chairperson
                    of some tourism associations number: 001/AS-Par/XII/2001 followed by approval from Governor of Bali on 10 May 2002 made the Bali Tourism Board reborn with its new paradigm – partnership between professionals, government and local community.
                  </p>
                  <div class="features row pt-3">
                    <div class="col-md-4">
                      <img
                        src="{{asset('asset-landingpage/frontend/images/ic_event.png')}}"
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
                        src="{{asset('asset-landingpage/frontend/images/ic_language.png')}}"
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
                        src="{{asset('asset-landingpage/frontend/images/ic_foods.png')}}"
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
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="members my-2">
                  <img src="{{asset('asset-landingpage/frontend/images/member-1.png')}}" alt="" class="w-5" />
                  <img src="{{asset('asset-landingpage/frontend/images/member-2.png')}}" alt="" class="w-5" />
                  <img src="{{asset('asset-landingpage/frontend/images/member-3.png')}}" alt="" class="w-5" />
                  <img src="{{asset('asset-landingpage/frontend/images/member-4.png')}}" alt="" class="w-5" />
                  <img src="{{asset('asset-landingpage/frontend/images/member-5.png')}}" alt="" class="w-5" />
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
