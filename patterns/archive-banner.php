<?php
/**
 * Title: archive-banner
 * Slug: archive-banner
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group -->
<div class="wp-block-group archive-banner desktop:mb-[150px]">
  <!-- wp:group -->
  <div
    class="wp-block-group container relative mx-auto desktop:px-0 px-[20px]"
  >
    <!-- wp:group -->
    <div
      class="wp-block-group title-wrapper relative desktop:mb-[58px] desktop:mb-[40px] mb-[20px] pt-[90px]"
    >
      <!-- wp:group -->
      <div
        class="wp-block-group title-wrapper relative container mx-auto flex"
      >
        <!-- wp:group -->
        <div
        class="wp-block-group section-title grid desktop:basis-auto desktop:w-[145px] desktop:basis-[80%] uppercase text-primaryYellow"
        >
          <!-- wp:paragraph -->
          <p class="justify-self-end pt-[3px] pr-[15px]">Archiwum</p>
          <!-- /wp:paragraph -->
        </div>  
        <!-- /wp:group -->
        
        <!-- wp:group -->
        <div class="wp-block-group hidden test">
          <?php
            // global $wp;
            // $wp->parse_request();
            // $currentCategory = str_replace('-',' ',($wp->query_vars)['category_name']);
            // echo $currentCategory;
          ?>
        </div>
        <!-- /wp:group -->
       
        <!-- wp:group -->
        <div class="wp-block-group uslugi-title uppercase font-medium desktop:text-[60px] text-[30px] desktop:leading-[60px] leading-[30px]">
          <!-- wp:paragraph -->
          <p
            class=""
          >
            Realizacje z kategorii
            
            <span
              class="relative desktop:inline-block block uppercase italic before:content-[''] before:inline-block desktop:before:mr-[8px] before:mr-[4px] before:bottom-0 before:left-0 desktop:before:w-[90px] before:w-[30px] desktop:before:h-[3px] before:h-[2px] before:bg-black"
              >
              <?php
                // global $wp;
                // $wp->parse_request();
                // $currentCategory = str_replace('-',' ',($wp->query_vars)['category_name']);
                // print_r($wp->parse_request());
                // $current_url = home_url($wp->request);
                // $currentCategory = parse_url($current_url)['path'];
                // $currentCategory = substr((home_url($_SERVER['REQUEST_URI'])),36, 30);
                $currentCategory = str_replace('-',' ',str_replace('/','',substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",35, 30)));
                // $currentCategory = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
                // $currentCategory = str_replace('/','',substr(home_url( add_query_arg( null, null )),36, 30));
                echo $currentCategory;

                echo '<br>';

                $obj = get_query_var( 'archive', 1 );
                print_r($obj);
                print($obj);
                echo($obj);
                if($obj){
                  echo 'ok';
                }else{
                  echo 'nok';
                }
              ?>
              <span class="desktop:text-[100px] text-[70px] leading-[1px] desktop:leading-auto">.</span></span
            >
          </p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  <!-- wp:group -->
  <div class="wp-block-group banner-img relative h-[500px] desktop:ml-[80px] hidden">
    <!-- wp:group -->
    <div class="wp-block-group overflow-hidden w-full h-full">
      <!-- wp:image -->
      <figure class="wp-block-image h-full w-[920px] desktop:w-auto">
        <img
          src="https://mutiny.webo.design/wp-content/themes/mutiny/assets/img/page-about/about-banner-bg.jpg"
          alt="bg-image"
        />
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
    <!-- wp:buttons -->
    <div
      class="wp-block-buttons desktop:w-[175px] w-[140px] desktop:h-[175px] h-[140px] mx-0 text-center rounded-full border desktop:border-[4px] border-[3px] border-[#AAAAAA] absolute desktop:top-[-130px] top-[310px] wide:left-[70%] desktop:left-[80%] left-[50%] translate-x-[-50%] hover:border-none hover:bg-primaryYellow hover:text-white transition ease-out duration-300 flex flex-col justify-center items-center gap-y-0 cursor-pointer"
    >
      <!-- wp:paragraph -->
      <p>Zobacz</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="uppercase text-[25px] font-extrabold">WIĘCEJ</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->