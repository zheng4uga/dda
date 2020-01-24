@extends('layouts.index')
@section('page-title','DDA: Estimate')
@section('other-css')
    <link href="{{url('css/estimate.css')}}" rel="stylesheet" type="text/css" >
@endsection

@section('other-script')
    <script src="{{ url('js/estimate.step.js') }}" type="text/javascript" ></script>
    <script src="{{ url('js/estimate.js') }}" type="text/javascript" ></script>
@endsection

@section('content')
    @include('common.mainhero',[
        'title'=>'Answer a few simple questions to get a estimate',
        'classes'=>'is-medium is-primary'
    ])
    <div class="section">
        <section class="hero is-small">
        <div class="hero-body">
            <div class="columns">
                <div class="column is-8">
                    <div class="card estimate-card">
                        <div class="card-content">
                                <div class="field">
                                    <label class="label">Type of service</label>
                                    <div class="control">
                                        <div class="select">
                                            <select class="service-select">
                                                <option value="0" >Select a service</option>
                                                <option data-step="1" value=1>Water line replacement/new</option>
                                                <option data-step="1" value=2>Electrical line replacement/new</option>
                                                <option data-step="2" value=3>Driveway/Road Bore</option>
                                                <option data-step="2" value=4>Irrigation</option>
                                                <option data-step="3" value=-1>Sewer/Gas/Communications</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="bore-field field is-hidden">
                                    <label class="label">Bore Length</label>
                                    <div class="control">
                                        <input min=1 class="input" type="number" placeholder="Bore Length" >
                                    </div>
                                </div>
                                <div class="shot-field field is-hidden">
                                    <label class="label">How many shots under driveway or road?</label>
                                    <div class="control">
                                        <input min=1 class="input" type="number" placeholder="Number of shots">
                                    </div>    
                                </div>
                                <div class="field">
                                    <label class="label">Pipe Size</label>
                                    <div class="control">
                                        <div class="select">
                                            <select class="pipe-select">
                                                <option>Select a pipe size</option>
                                                <option data-step="" value="0">None or supply your own</option>
                                                <option data-step="" value="1.25">1.25 inches pipe</option>
                                                <option data-step="" value="1.50">1.50 inches pipe</option>
                                                <option data-step="" value="2.0">2.0 inches pipe</option>
                                                <option data-step="" value="-1">More than 2.0 inches pipe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-item">
                                <div class="buttons are-medium">
                                    <button id="calculate" class="button is-primary">
                                        <span class="icon">
                                            <i class="fas fa-calculator"></i>
                                        </span>
                                        <span>Calculate</span>
                                    </button>
                                    <button id="reset" class="button is-warning">
                                        <span class="icon">
                                            <i class="fas fa-redo"></i>
                                        </span>
                                        <span>Start Over</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card result-card">
                        <div class="card-header has-background-info	">
                            <div class="card-header-title ">
                                <h1 class="title has-text-white has-text-centered">Your Estimate</h1>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="subtitle has-text-weight-bold">Summary</p>
                            <div class="content">
                                <ol class="sumarry">

                                </ol>
                            </div>
                        </div>
                        <div class="card-footer has-background-primary">

                            <div class="card-footer-item">
                                <h1 class="title has-text-white total-cost">$0.00</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>     
    </div>                  
@endsection