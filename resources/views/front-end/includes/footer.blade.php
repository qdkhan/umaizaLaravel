<footer id="footer" class="footer bg-overlay">
   <div class="footer-main">
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-sm-12 footer-widget footer-about">
               <h3 class="widget-title">About Us</h3>
               <img class="footer-logo" src="{{ asset('storage/logo1.jpg') }}" alt="" style="width:80px;height:80px;"/>
               <p>Umaiza Construction Pvt Ltd. a leading in projects Construction, Civil and Interior maintenanace Servicing in Mumbai, Delhi, Himachal Pradesh and Uttrakhand, UP and All over India since 2005.</p>
               <div class="footer-social">
               </div>
            </div>
            <div class="col-md-3 col-sm-12 footer-widget">
               <h3 class="widget-title">Working Hours</h3>
               <div class="working-hours">
                  We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                  Hotline and Contact form.
                  <br><br> Monday - Friday: <span class="text-right">10:00 - 18:00 </span>
                  <br> Saturday: <span class="text-right">10:00 - 14:00</span>
                  <br> Sunday: <span class="text-right">Closed</span>
               </div>
            </div>
            <div class="col-md-2 col-sm-12 footer-widget">
               <h3 class="widget-title">Services</h3>
               <ul class="list-arrow">
                  <li><a href="#">Home Construction</a></li>
                  <li><a href="#">Exterior Design</a></li>
                  <li><a href="#">Interior Design</a></li>
                  <li><a href="#">Renovation</a></li>
                  <li><a href="#">Real State</a></li>
                  <li><a href="#">Sale Purchase</a></li>
               </ul>
            </div>
            <div class="col-md-4 col-sm-12 footer-widget">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.047795014553!2d72.8741117!3d19.061636099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9f66aba9739%3A0x76369bf52920b524!2sUmaiza%20Construction%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1694573072398!5m2!1sen!2sin" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-hidden="false" tabindex="0"></iframe>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-6">
               <div class="copyright-info">
                  <span>Copyright Umaiza Construction Pvt Ltd. © <?=date('Y') ?> . Proudly Designed and Developed by <span title="(+91) 9616279623">QD Khan</span>
                  </span>
               </div>
            </div>
            <div class="col-xs-12 col-sm-3">
               <div class="copyright-info">	
                  <img src="https://s01.flagcounter.com/count2/QNxZ/bg_FFB600/txt_000000/border_FFB600/columns_4/maxflags_12/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0">
               </div>
            </div>
            <div class="col-xs-12 col-sm-3">
               <div class="footer-menu">
                  <ul class="nav unstyled">
                     <li><a href="{{ url('/') }}">Home</a></li>
                     <li><a href="{{ route('front.projects') }}">Projects</a></li>
                     <li><a href="{{ route('front.services') }}">Services</a></li>
                     <li><a href="{{ route('front.news') }}">News</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
            </button>
         </div>
      </div>
   </div>
</footer>