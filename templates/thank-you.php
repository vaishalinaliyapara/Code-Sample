<?php
/* Template Name: Product*/

get_header();
?>
<style>

*{
  /* box-sizing:border-box; */
 /* outline:1px solid ;*/
}
body{
        background: #a597ff;
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}
.wrapper-2 a {
  color: blue;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.30s linear 0s;
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
 flex-direction: column;
}
.wrapper-2{
  padding: 30px;
  text-align:center;
}
h1{
  font-size:65px;
  font-weight: 900;
  letter-spacing:3px;
  /* color: #fafafa; */
  margin:0;
  margin-top: 40px;
  margin-bottom:20px;
}
h2{
  /* color: white; */
    font-size: 40px;
    font-weight: 800;
    margin-bottom: 20px;
    margin-top: 20px;
}
ol{
  list-style: auto;
  text-align: left;
  margin: 0 auto;
  width: 530px;
}
.wrapper-2 p{
  /* margin:0; */
  /* font-size:1.3em; */
  font-size: 18px;
  margin: 10px 0px;
  /* color:#fafafa; */
  /* letter-spacing:1px; */
  /* line-height: 1.5; */
}
.go-home{
  background: #e83890;
  border:none;
  padding: 25px 30px;
  margin: 30px 0;
  border-radius: 5px;
  cursor: pointer;
}
.go-home:hover{
  opacity: 0.9;
}
.go-home a{
  font-size: 1rem;
  font-weight: 700!important;
  text-transform: uppercase;
  letter-spacing: 2px;
  
}
.footer-like{
  margin-top: auto; 
  background: rgb(31,38,130);
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  /* color:#fafafa; */
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight: 600;
}

.footer-like p a:hover{
  /* color:#FFF; */
 }

@media (max-width:475px){
  h1{
    font-size:30px;
    letter-spacing: 1px;
  }
  .go-home{
    margin-bottom:20px;
  }
  ol {
    width: 100%;
  }
  .wrapper-2 p{
    font-size: 15px;
  }
  h2{
    font-size: 30px;
  }
  .thankyoucontent .wrapper-1 {
    min-height: 840px;
  } 
         
}

@media (min-width:600px){
  .thankyoucontent{
  /* max-width:1000px; */
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:1200px;
  margin:0 auto;
  margin-top:50px;
  }
  
  
}
</style>
	<!-- <main id='contact' style="min-height: 650px;background: #2b2a35;">
		<section id="hero">
			<div class="bg-black ">
				<div class="container px-6 sm:px-7 md:px-8 lg:px-10 lg:px-12 2xl:px-16">
					<div
						class="wrap text-center lg:h-full lg:text-left lg:flex lg:flex-row-reverse lg:justify-evenly pt-24 lg:pt-32 pb-12 lg:pb-20 xl:pb-24">
					
						<div class="relative flex flex-col max-lg:mt-12 mt-12">
							<h3 class="font-bold text-white text-xl lg:text-2xl xl:text-3xl max-lg:text-center">Thanks for contacting us! We will get in touch with you shortly.</h3>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</main> -->

    <div class=thankyoucontent>
 <div class="wrapper-1">
    <div class="wrapper-2">
      <!-- <img src="https://i.ibb.co/Lkn7rkG/thank-you-envelope.png" alt="thank-you-envelope" border="0"> -->
     <h1>Thank You for Scheduling a Demo!</h1>
      <p>We appreciate your interest in lolly. Your demo has been successfully scheduled.
      </p>
     <h2>What Happens Next?</h2>
     <ol>
      <li><strong>Confirmation Email:</strong> You will receive a confirmation email shortly with all the details of your scheduled demo.
      </li>
      <li><strong>Preparation:</strong> Our team will review your needs and prepare a customized demonstration to show you how our product can benefit you.
      </li>
      <li><strong>Reminder:</strong> A reminder email will be sent to you before the demo.
      </li>
     </ol>

     <h2>Need Assistance?</h2>
     <p>If you have any questions or need to reschedule, please do not hesitate to contact us at <a href="mailto:support@lolly.com">support@lolly.com</a>
     </p>
     <p>In the meantime, feel free to explore our <a href="https://www.lolly.com/" target="_blank">website</a> or check out our <a href="https://www.lolly.com/features" target="_blank">product</a>.</p>
     <p>Thank you once again for your interest. We look forward to speaking with you soon!</p>
    </div>
   
    <!-- <div class="footer-like">
      <p>
      </p>
    </div> -->
</div>

<script>
  gtag('event', 'conversion', {'send_to': 'AW-834756789/IkFACIPWo8EZELXBhY4D'});
</script>
<?php

 get_footer();
