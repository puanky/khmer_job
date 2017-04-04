<hr />
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <u><b>Ads Rate:</b></u> 
          <p>
             If you want your brand to stand out of the crowd please considering to advertise with us. Khmer-job.com provide advertisers with spaces available at a very competitive price. We have 2 types of space. 
             The last one is ’Side ads space. It is at the right side of the page with sie 300x20. The number of ads are unlimited and randomly switching the displayed order. These ads will be displayed on the Homepage, search pages and detail pages.  
        </p><br />
        <p>
            The 1st one is Top ad space. It is on the top most and at the right of the website company logo with sie 72x0 and that the only one ad. This ads will be displayed on all pages of the website. 
            The last one is ’Side ads space. It is at the right side of the page with sie 300x20. The number of ads are unlimited and randomly switching the displayed order. These ads will be displayed on the Homepage, search pages and detail pages.   
        </p><br />
        <p>
             The last one is ’Side ads space. It is at the right side of the page with sie 300x20. The number of ads are unlimited and randomly switching the displayed order. These ads will be displayed on the Homepage, search pages and detail pages.  
             The last one is ’Side ads space. It is at the right side of the page with sie 300x20. The number of ads are unlimited and randomly switching the displayed order. These ads will be displayed on the Homepage, search pages and detail pages.  
        </p>
      </div> 
    </div><br />

    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-hover table-striped dataTable no-footer">
          <tbody>
              <tr>
                <td>Advertise Type</td>
                <td>Duration</td>
                <td>Size</td>
                <td>Price/Ads</td>
                 <td>Discount</td>
                <td>Free Per Month</td>
              </tr>
              <?php
                foreach ($ads as $value) {
              ?> 
              <tr>
                <td><?php echo $value->rate_det_type; ?></td>
                <td><?php echo $value->duration;?> Month<?php if($value->duration >1){ echo "s";} ?></td>
                <td><?php echo $value->ads_size;?></td>
                <td><?php echo $value->price;?> $</td>
                <td><?php echo $value->ads_discount;?> %</td>
                <td><?php echo $value->key_code?></td>
              </tr> 
              <?php 
                }
              ?>
          </tbody>
        </table>
        <div class="col-md-12">
           <a href="#" class="btn btn-primary">post your ads now</a>
        </div>
        <div class="col-md-12">
        <u><b>Post Ads:</b></u> 
          <p style="color: #03A9F4; font-weight: bold;"><i>
              [if advertiser click on “Post Ads” or click on “Post your ads now button” they will be  directed to below page (attached file “Post Ads Page for khmer‐job.com.”)] 
        </i></p><br />
        </div>
      </div>
    </div>
  </div>
</div>