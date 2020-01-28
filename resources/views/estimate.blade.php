@extends('layouts.index')
@section('page-title','DDA: Quote')

@section('other-script')
    <script src="{{ url('js/estimate.js') }}" type="text/javascript" ></script>
@endsection

@section('content')
    @include('common.mainhero',[
        'title'=>'Answer a few simple questions to get an quote',
        'classes'=>'is-medium is-primary'
    ])
    <section class="section">
        <div class="container">
            <form class="estimate-form">
                @csrf
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <div class="columns">
                            <div class="column is-one-third">
                                <div class="field">
                                    <label class="label">First Name</label>
                                    <div class="control">
                                        <input name="firstname" class="input" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Last Name</label>
                                    <input name="lastname" class="input" type="text">
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Company Name</label>
                                    <input name="company" class="input" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label class="label">Email Address</label>
                                    <div class="control">
                                        <input name="email" class="input" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Phone Number</label>
                                    <input name="phonenumber" class="input" type="tel">
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Completion Due Date</label>
                                    <input name="completiondate" class="input" type="date">
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-one-third">
                                <div class="field">
                                    <label class="label">Jobsite Address</label>
                                    <div class="control">
                                        <input name="address" class="input" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">City</label>
                                    <input name="city" class="input" type="text">
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Zip Code</label>
                                    <div class="control">
                                        <input name="zipcode" class="input" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">State</label>
                                    <input name="state" class="input" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-one-fifth">
                                <div class="field">
                                    <label class="label">Type Of Service</label>
                                    <div class="control is-expanded">
                                        <div class="select is-fullwidth">
                                            <select name="typeofservice">
                                                <option value="-1">Select a type</option>
                                                <option value="water/drinking">Water(Drinking)</option>
                                                <option value="sewer/drain">Sewer/Drain</option>
                                                <option value="electrical">Electrical</option>
                                                <option value="fiber">Fiber</option>
                                                <option value="optic">Optic</option>
                                                <option value="gas">Gas</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <div class="column is-3">
                                <div class="field">
                                    <label class="label">Distances Required (feet)</label>
                                    <input name="distance" require class="input" type="text">
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Diameter Of Conduit (inches)</label>
                                    <input name="diameterofconduit" class="input" type="number">
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">Number Of Conduit</label>
                                    <input name="bores" class="input" type="number">
                                </div>
                            </div>            
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <button type="submit" class="button is-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>                
@endsection