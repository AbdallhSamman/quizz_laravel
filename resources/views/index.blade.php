@extends('layout.master')
@section('content')
    
    
<header class="header">
    <!-- Start Navbar -->

    
    <div class="header__title">
      <h1>
        Your
        <!-- Green highlight effect -->
        <span class="highlight">online</span>
        Testing<br />
        <span class="highlight">Partner</span>
      </h1>
      <h4>Online exam system for all your testing needs for assessment, recruitment, selection and certifications</h4>
        <button class="btn--text btn--scroll-to" id="learnMore">Learn more &DownArrow;</button>
        <img
        src="{{asset('images/header.PNG')}}"
        class="header__img"
        alt="Minimalist bank items"
      />
    </div>
  </header>

  <section class="section section1" id="section--1">
    <div class="section__title">
      <h2 class="section__description">Features</h2>
      <h3 class="section__header">
        Everything you need in a modern bank and more.
       

      </h3>
    </div>

    <div class="features">
      <img
        src="{{asset('images/digital-lazy.jpg')}}"
        data-src="{{asset('images/Smart_Proctoring.jpg')}}"
        alt="Computer"
        class="features__img"
      />
      <div class="features__feature">
        <div class="features__icon">
          <svg>
            <use xlink:href="images/icons.svg#icon-monitor"></use>
          </svg>
        </div>
        <h5 class="features__header">Smart Proctoring</h5>
        <p>
          Invigilate for any suspicious activity in online exam with AI based cheating
           prevention and assertive actions upon intolerable behaviour. Live streaming of test takers with live chat. 
          Automatic capture of candidate’s photos during examination at specified intervals.
        </p>
      </div>

      <div class="features__feature">
        <div class="features__icon">
          <svg>
            <use xlink:href="images/icons.svg#icon-trending-up"></use>
          </svg>
        </div>
        <h5 class="features__header">Exam monitor</h5>
        <p>
          Live coverage of the examinations showing details such as candidates taking, 
          
          completed and dropped tests with their number of attempts, device name, browser, operating system, IP address and location details.


        </p>
      </div>
      <img
        src="{{asset('images/somthexam.jpg')}}"
        data-src="{{asset('images/somthexam.jpg')}}"
        alt="Plant"
        class="features__img "
      />

      <img
        src="{{asset('images/girlexam.jpg')}}"
        data-src="{{asset('images/girlexam.jpg')}}"
        alt="Credit card"
        class="features__img"
      />
      <div class="features__feature">
        <div class="features__icon">
          <svg>
            <use xlink:href="images/icons.svg#icon-credit-card"></use>
          </svg>
        </div>
        <h5 class="features__header">Smooth concurrent exams</h5>
        <p>
          An enormous number of candidates are catered smoothly providing concurrent exams, a delight to both test takers and the managers.
           Our online exam system built for a large number of simultaneous test sessions.
        </p>
      </div>
    </div>
  </section>

  <section class="section" id="section--2">
    <div class="section__title">
      <h2 class="section__description">Operations</h2>
      <h3 class="section__header">
        Everything as simple as possible, but no simpler.
      </h3>
    </div>

  <div class="operations">
    <div class="operations__tab-container">
      <button
        class="
          btn
          operations__tab operations__tab--1 operations__tab--active
        "
        data-tab="1"
      >
        <span>01</span>HtML Quiz
      </button>
      <button class="btn operations__tab operations__tab--2" data-tab="2">
        <span>02</span>CSS Quiz
      </button>
      <button class="btn operations__tab operations__tab--3" data-tab="3">
        <span>03</span>Java script Quiz
      </button>
    </div>
    <div
      class="
        operations__content
        operations__content--1
        operations__content--active
      "
    >
      <div class="operations__icon operations__icon--1">
        <i class="fab fa-html5"></i>
      </div>
      <h5 class="operations__header">
        Are you ready to test your skills in Html?
      </h5>
      <p>
        Simply register on the website and you will be ready to take the test and determine your level. However, keep in mind that you will only have 30 seconds to fill out an answer otherwise the question point will be canceled.
      </p>
    </div>

    <div class="operations__content operations__content--2">
      <div class="operations__icon operations__icon--2">
        
        <i class="fab fa-css3-alt"></i>

        
      </div>
      <h5 class="operations__header">
        To be a good front-end web developer you should learn CSS
      </h5>
      <p>
        Let's say you want to major in CSS then you are in the right place. You'll be given 10 questions to answer, which you should complete. Remember, you can't take the quiz unless you have a login.
      </p>
    </div>
    <div class="operations__content operations__content--3">
      <div class="operations__icon operations__icon--3">
        <i class="fab fa-js"></i>
      </div>
      <h5 class="operations__header">
        you can do almost anything on your website throw javascript so let test your skills in it
      </h5>
      <p>
        This exam will require your full attention since it will not be simple. We dare you to finish it, so be well prepared before your quiz and if you are not, please go brush up on your information before returning to us.
      </p>
    </div>
  </div>
</section>


 

@endsection