<?php 
/*
Template Name: FAQ Template
*/

get_header(); ?>


<style> 

:root {
	--primaryColor: #ff901d;
	--softColor: #fedddd;
	--whiteColor: #f5f5f5;
	--blackColor: #222;
}

* {
	margin: 0
	padding 0;
	box-sizing: border-box;
	outline: none;
	font-family: 'Poppins', sans-serif;
}



html, body { margin:100; padding:100;}


.header { padding: 70px 0; }

.header .cover { background: rgba(29,29,29,0.25); }

.header-inner { position: relative; }

.header .blog-logo { text-align: center; }

.header .logo { display: inline-block; }

.header .logo img {
	max-height: 80px;
	width: auto;
}

.header-title{
  font-size: 48px;
  letter-spacing: 1.5;
}

.header-desc{
  font-size: 14px;
  letter-spacing: 1;
  text-align: center;
}

.header {
  background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('header.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  max-height: 380px;
  color: var(--whiteColor);
  
}
 
/*
.header {
  background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('header.jpeg');
  background-position: top center;
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 5% 3%;
  border-radius: 30px;
  max-height: 380px;
  color: var(--whiteColor);
}
*/


.search{
  width: 60%;
  height: 50px;
  background-color: var(--whiteColor);
  margin-top: 5%;
  border-radius: 30px;
  display: flex;
  justify-content: space-between;
  padding: 5px;
}

.search input{
  width: 80%;
  height: 100%;
  padding: 1% 3%;
  background: transparent;
  border: none;
}

.search button{
  width: 20%;
  min-width: 100px;
  height: 100%;
  background-color: var(--primaryColor);
  color: var(--whiteColor);
  border: none;
  border-radius: 30px;
  cursor: pointer;
}

.search button:hover{
  background-color: var(--blackColor);
}

.faq{
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-start;
  padding: 3%
  
}

.faq-name {
  flex: 0.5;
  padding: 2% 2% 0 0;
}

.faq-header {
  padding: 5% 0 0 0;
  font-size: 40px;
  letter-spacing: 2;
}

.faq-img {
  width: 100%;
  max-width: 400px;
}

.faq-box {
  flex: 1;
  min-width: 320px;
  padding: 2% 0 4% 4%;
  border-left: 2px solid var(--primaryColor); /*left line divider*/
}

.faq-wrapper{
  width: 100%;
  padding: 1.5rem;
  border-bottom: 1px solid var(--blackColor); /**black line dividers*/
}

.faq-title {
  display: block;
  position: relative;
  width: 100%;
  letter-spacing: 1.2;
  font-size: 18px;
  font-weight: 600;
  color: var(--blackColor);
}

/*creating arrow*/
.faq-title::after {
  width: 10px;
  height: 10px;
  content: "";
  float: right;
  border-style: solid;
  border-width: 2px 2px 0 0;
  transform: rotate (135deg);
  transition: 0.4s ease-in-out;
}

.faq-detail{
  line-height: 1.5;
  letter-spacing: 1;
  max-height: 0;   /*blocking the wording*/
  overflow: hidden;
  transition: 0.3s ease-in-out;
  font-size: 10px;
}


.faq-trigger{
  display: none;
}

.faq-trigger:checked + .faq-title + .faq-detail{
  max-height: 300px;
}

.faq-trigger:checked + .faq-title::after{
  transform: rotate(45deg);
  transition: 0.4s ease-in-out;
}

@media screen and(max-width:680px){
  .search {
    width: 100%;
  }
}

  .faq-title {
    font-size: 20px;
  }


  .page-links {
    position: relative;
    z-index: 1;
    background-color: #FAF0CA;
    margin: 0 0 40px 0;
  }
  
  @media (min-width: 767px) {
  
    .page-links {
      margin: 40px 0 40px 20px;
      width: 300px;
      float: right;
    }
  }
  
  .page-links__title {
    margin: 0;
    font-weight: normal;
    text-align: center;
    padding: 20px 0;
    background-color: var(--primaryColor);
    color: #FFF;
  }
  
  .page-links__title a {
    color: #FFF;
    text-decoration: none;
    background-color: var(--primaryColor);
  }
  
  .page-links li {
    border-top: 1px solid rgb(244, 223, 138);
  }
  
  .page-links li:first-child {
    border-top: none;
  }
  
  .page-links__active,
    .page-links .current_page_item {
    text-align: center;
    background-color: rgb(244, 231, 180);
    color: #0D3B66;
    font-weight: bold;
  }
  
  .page-links li a {
    display: block;
    text-align: center;
    padding: 17px 10px;
    text-decoration: none;
    color: #0D3B66;
    transition: all .3s;
  }
  
  .page-links li a:hover {
    color: rgb(13, 51, 87);
    background-color: rgb(238, 225, 170);
  } 



.faq-box {
    flex: 1;
    min-width: 320px;
    padding: 20px; /* Adjust padding value as needed */
    padding-right: 320px;
    border-left: 2px solid var(--primaryColor); /*left line divider*/
}

  
 </style>
 
 
<body>
      <div class="header">
        <h1 class="header-title">FAQ</h1>
        <p class="header-desc">Frequently Asked Questions</p>
      </div>
      <!-- faq accordion -->


      
<! --------------------------------------------- Dynamic menu ------------------->
<?php 
        $theParent = wp_get_post_parent_ID(get_the_ID());
        if($theParent){ ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> 
            <span class="metabox__main"><?php echo the_title(); ?></span></p>
            </div>
        <?php }
        
    ?>

<?php 
    // this returns the pages but doesn't output it. If the pages has a parent or 
    $testArray = get_pages(array(
        'child_of' => get_the_ID()
    ));  
    if($theParent or $testArray){ ?>


<div class="page-links"> 
        <h2 class="page-links__title">
            <a href="<?php echo get_permalink($theParent); ?>">
                <?php echo get_the_title($theParent); ?>
            </a>
        </h2>
        <ul class="min-list">
           <?php
            if($theParent){ // if the current page has a parent
                $findChildrenOf = $theParent;
            }
            else{ //viewing a parent page
                $findChildrenOf = get_the_ID();
            }
             wp_list_pages(array(
                 'title_li' => NULL ,
                  'child_of' => $findChildrenOf,   
                  'sort_column' => 'menu_order'  
             ));
           ?> 
        </ul>

        <div>
    </div>
    

<?php } ?>


 <! --------------------------------------------- Dynamic menu ------------------->

        </div>
        <div class="faq-box">
            <div class="faq-wrapper">
              <input type="checkbox" class="faq-trigger" id="faq-trigger-1">
              <label class="faq-title" for="faq-trigger-1"> How do I choose the right smartphone for my needs?</label>
              <div class="faq-detail">
              <br>
                <p style="font-size: 20px;">Choosing the right smartphone involves considering factors such as budget, operating system preference 
                    (iOS or Android), desired features (camera quality, battery life, storage capacity), brand reputation, and user reviews.</p>
              </div>
            </div>    
        
      <div class="faq-wrapper">  
         <input type="checkbox" class="faq-trigger" id="faq-trigger-2">
          <label class="faq-title" for="faq-trigger-2"> What are the key factors to consider when buying a smartphone?</label>
          <div class="faq-detail">
          <br>
               <p style="font-size: 20px;"> Key factors to consider include the operating system, processor speed, display quality, camera specifications, 
                battery life, storage capacity, and design preferences.</p>
          </div>
      </div>
          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-3">
            <label class="faq-title" for="faq-trigger-3"> How often should I upgrade my smartphone?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">Smartphone upgrade frequency varies depending on personal preferences, budget, 
                    and technological advancements. Generally, many people upgrade every 1-2 years, 
                    but some may wait longer if their current device meets their needs. </p>
          
         </div>    
      </div>   

          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-4">
            <label class="faq-title" for="faq-trigger-4"> What is the difference between iOS and Android operating systems? </label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">iOS is Apple's proprietary operating system, exclusive to iPhones, known for its streamlined interface 
                    and tight integration with Apple services. Android, developed by Google, powers a wide range of devices 
                    and offers more customization options and device variety. </p>
            </div> 
          </div> 

          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-5">
            <label class="faq-title" for="faq-trigger-5"> Can I transfer data from my old smartphone to a new one?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">Yes, you can transfer data such as contacts, photos, apps, and settings from your old smartphone
                     to a new one using methods like cloud backup, transferring via USB cable, or using specialized 
                     apps like Google's "Backup & Restore." </p>
            </div> 
          </div>  
          
          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-6">
            <label class="faq-title" for="faq-trigger-6"> What are the latest trends in smartphone technology?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">Some current trends in smartphone technology include foldable screens, 5G connectivity, enhanced
                     camera features (such as multiple lenses and AI-powered photography), and improved biometric security 
                     (like facial recognition and in-display fingerprint sensors).</p>
            </div> 
          </div> 


          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-7">
            <label class="faq-title" for="faq-trigger-7"> How do I extend the battery life of my smartphone?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">To extend battery life, you can adjust settings like screen brightness, enable 
                    power-saving mode, limit background app refresh, close unused apps, and avoid extreme temperatures.
                     Using battery-saving apps or portable chargers can also help. </p>
            </div> 
          </div> 

          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-8">
            <label class="faq-title" for="faq-trigger-8">What are the best budget-friendly smartphones available in the market?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">Some popular budget-friendly smartphones include models from brands like Xiaomi, Motorola, Nokia, and Samsung's A-series.
                     These devices offer good performance and features at affordable prices. </p>
            </div> 
          </div> 


          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-9">
            <label class="faq-title" for="faq-trigger-9">How can I protect my smartphone from malware and viruses?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">You can protect your smartphone by installing reputable antivirus software, keeping your operating
                     system and apps updated, avoiding suspicious links and downloads, and being cautious when granting app permissions. </p>
            </div> 
          </div> 


          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-10">
            <label class="faq-title" for="faq-trigger-10">Are refurbished smartphones a good option to consider?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">Refurbished smartphones can be a good option, offering cost savings compared to new devices while 
                    often coming with warranties and undergoing thorough testing to ensure functionality. </p>
            </div> 
          </div> 
          

          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-11">
            <label class="faq-title" for="faq-trigger-11">How do I troubleshoot common smartphone issues like freezing or crashing?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">Troubleshooting steps for common issues include restarting the device, clearing app cache,
                     uninstalling problematic apps, updating the operating system, and performing a factory 
                     reset as a last resort. </p>
            </div> 
          </div> 


          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-12">
            <label class="faq-title" for="faq-trigger-12">What features should I look for in a smartphone camera?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">Important camera features to consider include megapixel count, aperture size, 
                    optical image stabilization, autofocus capabilities, low-light performance, 
                    and additional features like HDR and manual controls. </p>
            </div> 
          </div> 

          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-13">
            <label class="faq-title" for="faq-trigger-13">How do I back up my smartphone data?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">You can back up your smartphone data by using cloud storage services
                     like Google Drive or iCloud, syncing with your computer via USB, 
                     or using dedicated backup apps provided by your device manufacturer. </p>
            </div> 
          </div> 
          
         
          <div class="faq-wrapper">  
           <input type="checkbox" class="faq-trigger" id="faq-trigger-14">
            <label class="faq-title" for="faq-trigger-14">What is the difference between 4G and 5G smartphones?</label>
            <div class="faq-detail">
            <br>
                 <p style="font-size: 20px;">5G smartphones support the latest generation of cellular network technology, 
                    offering faster download/upload speeds, lower latency, and greater network 
                    capacity compared to 4G smartphones. </p>
            </div> 
          </div> 

          </div>
      </div> 

</body>

<?php get_footer(); ?>




  
  
