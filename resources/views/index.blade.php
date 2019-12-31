@extends('layouts.index')
@section('page-title','DDA')

@section('content')
    @include('common.mainhero')

<section class="section has-text-centered">
    <div class="container">
        <section class="section">
            <h1 class="title big-boy is-size-1">THINGS WE SPECIALIZE IN</h1>
                <h2 class="subtitle text"><span class="has-text-weight-bold">NOW</span> serving all of <span class="has-text-weight-bold">Gwinnett county</span> and will soon be serving surrounding areas. Book an appointment with us today!</h2>
        </section>
        <div class="columns">
            <div class="column">
                <ul>
                
                    <li><i class="fas fa-tint top-icon has-text-info"></i></li>
                    <li><a id="toggle-water" class="button is-dark is-outlined is-rounded">Water/Sewer</a></li>
                    <li><p id="details4" class="has-text-weight-bold is-size-5">Need a water line coming straight from your meter through your garage floor?</p></li>          
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-bolt top-icon has-text-warning"></i></li>
                    <li><a id="toggle-electrical" class="button is-dark is-outlined is-rounded">Electrical</a></li>
                    <li><p id="details" class="has-text-weight-bold is-size-5">Building a new house or guest suite and need electrical lines?<p><li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-burn top-icon has-text-link"></i></li>
                    <li><a id="toggle-gas" class="button is-dark is-outlined is-rounded">Gas</a></li>
                    <li><p id="details2" class="has-text-weight-bold is-size-5">We even do gas lines!</p></li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-infinity top-icon has-text-danger"></i><li>
                    <li><a id="toggle-endless" class="button is-dark is-outlined is-rounded">Endless</a></li>
                    <li><p id ="details3" class="has-text-weight-bold is-size-5">Need directional signs for your new or old business? We drill under and through anything!</p></li>    
                </ul>

            </div>
        </div>   
</div>

    </div>
</section>

<div class='hero has-background-grey-lighter'>
    <div class="hero-body">
        <div class="control">
            <div class="columns">
                <div class="column is-3">
                    <h1 class="title has-text-centered big-boy is-size-2">WHO WE ARE</h1>
                </div>
                <div class="column">
                    <hr>
                </div>
            </div>
            <div class="columns">
                <div class="column is-half">
                     <section class="section"> 
                            <h2 class="subtitle text is-size-4">Directional Drillers of Atlanta is excited to start their new venture in the Atlanta market!  We might be new to your area, but not to the boring industry!  We have two Owner-Operators, Travis and Paul. Paul has <span class="has-text-weight-bold">20+ years</span> of experience running his own business in Knoxville, TN and also has supervised HUGE jobs throughout the US and Canada.<span class="has-text-weight-bold"> We offer a variety of services to make your next project run smoothly, saving you not only money, but valuable time.</span>   </h2>
                    </section>
                </div>    
                <div class="column">
                    <section class="section">
                        <h2 class="subtitle text is-size-4">We offer an end-to-end client experience that includes seamless communication, budgeting, on-site organization, and solid, quality work every time.  Whether you're a plumber that needs a 75 foot water line put completely underground from the meter to house or electrician that needs 300 feet of electrical to power a house or business, <span class="has-text-weight-bold">WE DO IT ALL</span>.  100% satisfaction guaranteed! </h2>
                    </section>
                 </div>
            </div>
        </div>
    </div>
</div>


    <div class="hero has-background-dark">
        <div class="hero-body">
            <div class="control">
                <div class="columns">
                    <div class="column">
                        <h1 class="title has-text-light has-text-centered big-boy is-size-2 is-hidden-desktop">WHY CHOOSE DDA</h1>
                    </div>
                </div>    
                <div class="columns">
                    <div class="column is-9">
                        <hr>
                    </div>
                    <div class="column">
                        <h1 class="title has-text-light has-text-centered big-boy is-size-2 is-hidden-touch">WHY CHOOSE DDA</h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half">
                        <section class="section">
                            <h2 class="subtitle has-text-grey-lighter text is-size-4">Most plumbers, electricians, or contractors still do not know we are even an option when it comes to replacing a complete water, gas, or electrical line.  We start from the meter or desired area and bore a complete trenchless line under grass, roads or driveways and place our bore head anywhere near the house and even into the basement, closest, or crawl space.  This method doesn't only save money but saves a ton of time.  We pull back our pipe so all you need to do is slide your line right in and hook it up!  We have total control and vision of where our bore head is at every foot of the way!  Stop trenching and give us a call!  From now on you'll be DRILLING IT!</h2>
                        </section>
                        </div>
                    <div class="column">
                        <section class="section">
                            <img src=../public/images/vermeer2.png>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    

    
    
    <section class=" section hero has-text-centered">
        <div class="hero-body">
        <h1 class="title big-boy is-size-2">PROJECT GALLERY</h1>
            <div class="container">
                <div class="carousel_1">
                    <div><img src="{{url('images/slides/2.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/3.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/1.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/4.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/5.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/6.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/7.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/8.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/9.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/10.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/11.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/12.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/13.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/14.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/15.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/16.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/17.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/18.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/19.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/20.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/21.jpeg')}}"></div>
                    <div><img src="{{url('images/slides/22.jpeg')}}"></div>
                </div> 
            </div>
        </div>
    </section>
    <hr>



<section class="section">
<div class="container">

<div class="columns">
	<div class="column is-half">
		<h1 class="title big-boy is-size-2">CONTACT US</h1>
		<div class="columns">
			<div class="column is-half">
                <div class="field">
                    <div class="control has-icons-left">
                        <input class=" input has-background-grey-lighter is-medium" type="email" placeholder="Enter Email">
                            <span class="icon is-left">
                                <i class="fas fa-envelope is-small has-text-dark"></i>
                            </span>
                    </div>
                </div>
            </div>
			<div class="column">
                <div class="field">
                    <div class="control has-icons-left">
                        <input class="input has-background-grey-lighter is-medium" type="tel" placeholder="Enter Number">
                        <span class="icon is-left">
                        <i class="fas fa-phone-square-alt has-text-dark"></i>
                        </span>		
                     </div>
                </div>
            </div>
		</div>
		<div class="columns">
			<div class="column is-half">
                <div class="field">
                    <div class="control has-icons-left">
                        <input class="input has-background-grey-lighter is-medium" type="text" placeholder="Enter Name">
                        <span class="icon is-left">
                            <i class="fas fa-user has-text-dark"></i>
                        </span>
                    </div>
                </div>
            </div>
			<div class="column is-half">
                <div class="control is expanded">
                    <div class="select is-medium is-fullwidth">
                            <select class="has-background-grey-lighter">
                                <option>Select</option>
                                <option>Book Appointment</option>
                                <option>Inquiry</option>
                                <option>Others</option>
                            </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <textarea class="textarea has-background-grey-lighter is-medium" placeholder="Message" rows="6"></textarea>
                </div>
                <div class="field">
                    <label class="checkbox has-text-weight-bold">
                        <input type="checkbox">
                            Sign Up For Email Updates 
                     </label>
                </div>    
                <button class="button is-dark is-medium is-outlined text">SUBMIT</button>   
            </div> 
        </div>
	</div>
	<div class="column is-offset-2">
		<h1 class="title big-boy is-size-2">CONTACT INFO</h1>	
	
	<div class="columns">
		<div class="column has-icon-left">
            <h2 class="subtitle"><span class="icon"><i class="fas fa-hard-hat"></i></span>Travis <a href="tel:770-366-4414" class="has-text-danger has-text-weight-bold">(770)366-4414</a></h2>
            <h2 class="subtitle"><span class="icon"><i class="fas fa-hard-hat"></i></span>Paul <a href="tel:865-388-9111" class="has-text-danger has-text-weight-bold">(865)388-9111</a></h2>
		</div>	
	
	</div>
</div>
</div>
</div>

@endsection

    


        