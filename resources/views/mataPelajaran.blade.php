@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Mata Pelajaran</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-6">
                    <div class="row tours">
                      <div class="tourcard">
                        <figure>
                          <div class="tourpic">
                            <a href="{{ url('/quiz') }}">
                              <img width="320" height="180" src="/img/bahasa.png">                         
                              <span class="tourday hot">Bahasa Indonesia</span>
                            </a>
                          </div>
                        </figure>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row tours">
                      <div class="tourcard">
                        <figure>
                          <div class="tourpic">
                            <img width="320" height="180" src="/img/matematika.png">                         
                            <span class="tourday hot">Matematika</span>
                          </div>
                        </figure>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                    <div class="row tours">
                      <div class="tourcard">
                        <figure>
                          <div class="tourpic">
                            <img width="320" height="180" src="/img/ipa.png">                         
                            <span class="tourday hot">IPA</span>
                          </div>
                        </figure>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row tours">
                      <div class="tourcard">
                        <figure>
                          <div class="tourpic">
                            <img width="320" height="180" src="/img/ips.png">                         
                            <span class="tourday hot">IPS</span>
                          </div>
                        </figure>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
