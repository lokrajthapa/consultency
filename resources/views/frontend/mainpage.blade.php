@include('frontend.layouts.header')

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2>{{ $ParentContentDetails[0]->parentpage->title  ?? ''}}</h2>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Blogs -->
<section class="blog archives single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <!-- Single Blog -->
                <div class="single-blog">
                    <div class="blog-head">
                    @if($ParentContentDetails[0]->Thumbnailimg)

                        <img class="img-fluid" width="100%" src="{{url('uploads/thumbnailimg/').'/'.$ParentContentDetails[0]->Thumbnailimg }}">

                   @endif
                    </div>
                    <div class="blog-content">
                        <div class="date"><i class="fa fa-calendar"></i> Jan 10, 2022 / <span>Nursing</span></div>
                        <h1 class="blog-title"><a href="blog-single.html">All about NCLEX-RN</a></h1>
                        </p>
                        <p> {!! $ParentContentDetails[0]->text ?? '' !!} </p>
                        </p>
                        
                        <p>You are encouraged to review the NCLEX test plans before your exam appointment. The test
                            plans serve as blue prints to outline the content to be tested and guide the item writing
                            process.

                            <br><br>The test plans for the NCLEX-RN and PN can be found below. These are updated every
                            three years to reflect fair, comprehensive; current; and entry-level nursing competency. The
                            test plan contains in-depth information regarding exam content, exam administration and item
                            writing exercises. Prior to 2019, multiple versions of the Test Plan were created and
                            available. The information contained in the previous versions can now all be found in one
                            Test Plan.
                            <br>
                            <br>Purpose of the Test Plans
                            <br>1 Guide candidates preparing for the exam
                            <br>2 Inform the direction for item development
                            <br>3 Facilitate classification of exam items
                            <br><br>The Test Plan also includes
                            <br>1 Definition of each Client Needs Categories
                            <br>2 Nursing activity statements
                            <br>3 Detailed content examples
                            <br>4 Sample NCLEX items
                            <br>5 Item writing guide
                            <br><br>RN Test Plans
                        <p>The NCLEX-RN test plan provides a concise summary of the content and scope of the exam. It
                            serves as a guide for both exam development and candidate preparation.</p>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="comments-form">
                    <h2>Leave your <span>comments</span></h2>
                    <!-- Contact Form -->
                    <form class="form" method="post" action="mail/mail.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="url" name="website" placeholder="Your website" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" rows="7" placeholder="Your Reply"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group button">
                                    <button type="submit" class="button primary">Post a comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Contact Form -->
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="blog-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget search">
                        <div class="form">
                            <input type="email" placeholder="Search something">
                            <a class="button" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Quick <span>Links</span></h3>
                        <ul class="categor-list">
                            <li><a href="#">Application</a></li>
                            <li><a href="#">Fees</a></li>
                            <li><a href="#">NCLEX-RN®</a></li>
                            <li><a href="#">Admission Criteria</a></li>
                            <li><a href="#">All Course </a></li>
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget about">
                        <h3 class="title">About<span>Us</span></h3>
                        <div class="about-inner">
                            <img src="images/about.jpg" alt="#">
                            <p>Nurse Career Promotion is a trusted learning center for NCLEX-RN exam preparation in
                                Nepal.</p>
                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Blogs -->
@include('frontend.layouts.footer')
