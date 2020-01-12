@extends('layouts.index')
@section('page-title','DDA')

@section('content')
    @include('common.mainhero')

<section class="section has-text-centered">
    <h3 class="subtitle has-text-weight-bold has-text-dark is-capitalize is-size-3 big-boy">Check if we service your county</h3>
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                    <form>
                        <div class="typeahead__container">
                            <div class="typeahead__field">
                                <div class="typeahead__query">
                                    <input class="js-typeahead"
                                        name="q"
                                        autocomplete="off">
                                </div>
                                <div class="typeahead__button">
                                    <button type="submit">
                                        <span class="typeahead__search-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
    </section>


<section class="section has-text-centered">
    <div class="container">
        <section class="section">
            <h1 class="title big-boy is-size-1">THINGS WE SPECIALIZE IN</h1>
                <h2 class="subtitle text"><span class="has-text-weight-bold">NOW</span> serving <span class="has-text-weight-bold">North Georgia</span> and will soon be serving surrounding areas. Book an appointment with us today!</h2>
        </section>
        <div class="columns">
            <div class="column">
                <ul>
                
                    <li><i class="fas fa-tint top-icon has-text-info"></i></li>
                    <li><h2 class="subtitle has-text-weight-bold text">Water/Sewer</h2></li>          
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-bolt top-icon has-text-warning"></i></li>
                    <li><h2 class="subtitle has-text-weight-bold text">Electrical</h2></li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-burn top-icon has-text-link"></i></li>
                    <li><h2 class="subtitle has-text-weight-bold text">Gas</h2></li>
                
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-road top-icon"></i><li>
                    <li><h2 class="subtitle has-text-weight-bold text">Road/Driveway bore</h2></li>
                      
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-seedling top-icon has-text-success"></i></li>
                    <li><h2 class="subtitle has-text-weight-bold text">Irrigation</h2></li>
                    
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li><i class="fas fa-network-wired top-icon has-text-grey-dark"></i></li>
                    <li><h2 class="subtitle has-text-weight-bold text">Communtations</h2></li>
                    
                </ul>
            </div>
        </div>   
</div>

    </div>
</section>

<section class="section has-text-centered">
    <div class="hero dda-video-hero">
        <div class="hero-body">
            <div class="container">
            <iframe class="video-shit" width="560" height="315" src="https://www.youtube.com/embed/quJ_hw6bmPs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</section>



<div class='hero has-background-grey-lighter'>
    <div class="hero-body">
        <div class="control">
            <div class="columns">
                <div class="column is-3">
                    <h1 class="title has-text-centered big-boy is-size-2">WHY CHOOSE DDA</h1>
                </div>
                <div class="column">
                    <hr>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                     <section class="section"> 
                            <h2 class="subtitle text is-size-4">Many plumbers, electricians, and contractors are not aware that we are a strong competitive option when it comes to replacing a complete water, electrical, communication or gas line.  We start at the meter or box and bore a completely trenchless tunnel under landscaping, roads, driveways, or water and place the bore head where you want it to hook up your line.  This method is effective, saves money and valuable time.  We can even pull back a pipe, leaving your customer with a lifetime tunnel in the event they need to repair the line in the future.  All you need to do is slide in your line and hook up to meter or box and at the residential/commercial building.  We have total control and tracking capability of where our bore head is at any moment and heading every foot of the way!  Get an instant free estimate by clicking “here”
                            Stop trenching your day away and give DDA’s seamless <span class="has-text-weight-bold">4-step process</span> a try today!   </h2>
                    </section>
                </div>    
            </div>
        </div>
    </div>
</div>


<div class='hero has-background-white'>
    <div class="hero-body">
        <div class="control">
            <div class="columns">
                <div class="column is-hidden-touch">
                    <hr>
                </div>
                <div class="column">
                    <h1 class="title has-text-centered big-boy is-size-2 has-text-black">4-STEP PROCESS</h1>
                </div>
                <div class="column">
                    <hr>
                </div>
            </div>
            <div class="columns">
                <div class="column is-3">
                     <section class="section"> 
                            <ul>
                                <li class="step-text" id="step1"><a class="text subtitle is-size-4 tabs has-text-weight-bold">Price Agreement & Scheduling</a></li>
                                <li class="step-text" id="step2"><a class="text subtitle is-size-4 tabs has-text-weight-bold">Mark & Expose Utilities</a></li>
                                <li class="step-text" id="step3"><a class="text subtitle is-size-4 tabs has-text-weight-bold">Survey & Prep Job Site</a></li>
                                <li class="step-text" id="step4"><a class="text subtitle is-size-4 tabs has-text-weight-bold">Get The Job Done</a></li>
                            </ul>
                    </section>
                </div>
                <div class="column">
                    <section class="section">
                        <div id="para1">
                            <h3 class="space is-size-3 contact-text">Price Agreement</h3>
                                <p class="text is-size-4">After you get your free instant estimate and give us a call/text or email we will gather information about your project scope and needs.  A final quote will be provided promptly and once it is accepted, we schedule your job based on your timeline.</p>
                        </div>
                        <div id="para2" class="is-hidden">
                            <h3 class="space is-size-3 contact-text">Mark & Expose</h3>
                        <p class="text is-size-4">We will call 811 to locate all public utilities on the properties we will be boring.  Your company is responsible for communicating directly with the property owner to determine if there are any private utility lines installed.  Before we arrive on the job site, we require all utilities to be exposed if they are on the bore path (you will only need to dig 2.5’ deep and 2’ wide on each side of utility marking if not found).  </p>
                        </div>
                        <div id="para3" class="is-hidden">
                            <h3 class="space is-size-3 contact-text">Survey & Prep</h3>
                        <p class="text is-size-4">We arrive on the job site!  We will walk the property and look at all utilities coming into the property to ensure everything is properly marked and exposed as needed.  While some of our employees are unloading equipment, our lead team member will review and confirm job scope with your employee.  At this time, we finalize exact bore path, depth of tunnel the whole way, entry spot (usually 5 feet behind meter or box so we are 18 inches at hook up spot), and lastly, where you want our bore head to end and at which depth from ground level our exit mark will be.  </p>
                        </div>
                        <div id="para4" class="is-hidden">
                            <h3 class="space is-size-3 contact-text">Finish!</h3>
                        <p class="text is-size-4">When all the work is completed!  FAST!  We bore an underground tunnel to exact specifications based on our discussion.  We can either pull back your product, pipe you supply, or HDPE pipe we carry in which you will be able to easily slide your product through.  You hook up from each end and BOOM its done!  No trenching, no mess, and your customer will be pleased with the hassle-free process. </p>
                        </div>
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
                        <h1 class="title has-text-light has-text-centered big-boy is-size-2 is-hidden-desktop">WHO WE ARE</h1>
                    </div>
                </div>    
                <div class="columns">
                    <div class="column is-9">
                        <hr>
                    </div>
                    <div class="column">
                        <h1 class="title has-text-light has-text-centered big-boy is-size-2 is-hidden-touch">WHO WE ARE</h1>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-half">
                        <section class="section">
                            <h2 class="subtitle has-text-grey-lighter text is-size-4">DDA is excited to start their new venture in the North Georgia area!  We are a family-owned small business that consists of two owner-operators, Travis Bastecki and Paul Bigler.  Paul has been operating his directional drilling company, P&S Consultants and Contractors in Knoxville, TN the last 21 years and counting.  He is moving to Gwinnett County to partner with his son-in-law Travis Bastecki to start Directional Drillers of Atlanta.  We would love to partner with your business to give your customers the best experience possible.  We offer an end-to-end client experience that includes seamless communication, budgeting, on-site organization, and solid, quality work every time.  There are no jobs too small but there are jobs too big.  We don’t claim to be the biggest, we are determined to be the best!  </h2>
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
            <h2 class="subtitle"><span class="icon"><i class="fas fa-hard-hat"></i></span>Travis <a href="tel:770-366-4414" class="contact-text has-text-weight-bold">(770)366-4414</a></h2>
            <h2 class="subtitle"><span class="icon"><i class="fas fa-envelope"></i></span><a class="contact-text" href="mailto:Travis@ddanow.com">Travis@ddanow.com</a></h2>
		</div>	
	
	</div>
</div>
</div>
</div>




  


@endsection

    


        