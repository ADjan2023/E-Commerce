<?php

include("../controllers/cart_controller.php");
function showCart($id){
	$ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

	$result=show_cart_ctr($id,$ip);
	$i=0;
	$total=0;
	if ($result!=false) {
		while($i<count($result))
		{
			$product=select_one_prod_ctr($result[$i]['p_id']);
			?>
			<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url(../images/products/<?php echo $product['product_image'];  ?>);">
								</div>
								<div class="display-tc">
									<h3><?php echo $product['product_title'];  ?></h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">GH¢<?php echo $product['product_price'];  ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="<?php echo $result[$i]['qty'];  ?>" min="1" max="100">
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">GH¢<?php echo ($product['product_price'])*($result[$i]['qty']);  ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<form method="POST" action="../actions/delete_from_cart.php">
										<input type="hidden" name="cid" value="<?php echo $result[$i]['c_id'];  ?>">
										<input type="hidden" name="pid" value="<?php echo $result[$i]['p_id'];  ?>">
									<button class="closed text-center" type="submit" name="delete" style="border: 0px;"></button>
									</form>
								</div>
							</div>
						</div>
			

			<?php 

$total+=($product['product_price'])*($result[$i]['qty']);
			$i++;
		}
		?>
			</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>GH¢<?php echo $total; ?></span></p>
											<p><span>Shipping:</span> <span>GH¢50</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>GH¢<?php echo $total+50; ?></span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

		<?php
		  
	}
	else{
		echo "Your Cart is Empty";
	}

}
function countCart($cid){
	$ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

	$result=count_cart_ctr($cid,$ip);

	if ($result!=false) {
		echo $result;
	}
	else{
		echo 0;
	}

}
?>