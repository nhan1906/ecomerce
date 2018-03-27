<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
/*********Star box_product*********/


.box_product{
    width: 960px;
    margin: 0 auto;
   
   
}

.box_product_item{
    float: left;
    width: 170px;
    margin-right: 25px;
}

.box_product_item_r{
    float: right;
    width: 170px;
}

.box_product_item_body{
    width: 170px;
    text-align: center;
}



.box_product_item_title{
    padding-bottom: 7px;
    padding-top: 7px;
    height: 35px;
    
}
.box_product_item_title a{
    color: #333;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    
}

.box_product_item_title a:hover{
    color: #098800;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    
}

.box_product_item_img{
    padding: 5px;
    border: 1px #E8E8E8 solid;
    height: 158px;
}

.box_product_item_img:hover{
    padding: 5px;
    border: 1px #BABABA solid;
    height: 158px;
}

.box_product_item_img img{
    width: 158px;
    height: 158px;
    margin-left: 0px;
    margin-right: 0px;
}

.box_product_item_prie{
    color: #ff0000;
}


/*********END box_product*********/

/* Remove rounded borders from list */
.list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
}

.list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

/* Remove border and add padding to thumbnails */
.thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
}

.thumbnail p {
    margin-top: 15px;
    color: #555;
}

/* Black buttons with extra padding and without rounded borders */
.btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
}

/* On hover, the color of .btn will transition to white with black text */
.btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
}



	</style>
</head>
<body>
<div class="box_product_item">
        <div class="box_product_item_body">
            <div class="box_product_item_img"><a href="/n2495/combo-2-xit-pomelo-duong-toc-tinh-dau-buoi-cocoon.html" title="Xem chi tiết Combo 2 Xịt Pomelo dưỡng tóc tinh dầu bưởi Cocoon"><img src="images/products/tinhdaubuoi.jpg" alt="Combo 2 Xịt Pomelo dưỡng tóc tinh dầu bưởi Cocoon"></a></div>
   
            <h2 class="box_product_item_title"><a href="/n2495/combo-2-xit-pomelo-duong-toc-tinh-dau-buoi-cocoon.html" title="Xem chi tiết Combo 2 Xịt Pomelo dưỡng tóc tinh dầu bưởi Cocoon">Combo 2 Xịt Pomelo dưỡng tóc tinh dầu bưởi Cocoon</a></h2>
            <div><span class="box_product_item_prie">Giá: 190.000 đ</span><span class="box_product_item_order"><a href="/apo-vn-58-0-2495/combo-2-xit-pomelo-duong-toc-tinh-dau-buoi-cocoon.html" rel="nofollow" title="Click đặt hàng"><img src="/images/order.png" alt="order"></a></span> </div>
        </div>
        
    </div>

    <div class="row text-center">
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="paris.jpg" alt="Paris">
      <p><strong>Paris</strong></p>
      <p>Fri. 27 November 2015</p>
      <button class="btn">Buy Tickets</button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="newyork.jpg" alt="New York">
      <p><strong>New York</strong></p>
      <p>Sat. 28 November 2015</p>
      <button class="btn">Buy Tickets</button>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="thumbnail">
      <img src="sanfran.jpg" alt="San Francisco">
      <p><strong>San Francisco</strong></p>
      <p>Sun. 29 November 2015</p>
      <button class="btn">Buy Tickets</button>
    </div>
  </div>
</div>

<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Sản phẩm của Coconut</h2><br>
  <div class="row text-center slideanim">
    <?php while($product = mysqli_fetch_assoc($products)) : ?>
      <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
          <img src="images/paris.jpg" alt="Paris">
          <p><strong><?php echo "Nhẫn " . $product["name"]?></strong></p>
          <p>Fri. 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
    <?php endwhile; ?>
  
  </div><br>
</div>
</body>
</html>