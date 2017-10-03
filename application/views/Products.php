<div>
	<div><h2>Product List</h2></div>
	<div>
		<table>
			<thead>
				<tr>
					<th>No. </th>
					<th>ID Product</th>
					<th>Product</th>
					<th>Category</th>
					<th>Price (Rp)</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$count_numb = 0;
					foreach($product as $item){
				?>
				<tr>
					<td><?php echo $count_numb = $count_numb + 1;?></td>
					<td><?php echo $item->ID_Product;	?></td>
					<td><?php echo $item->Name_Product; ?></td>
					<td><?php echo $item->Category_Product; ?></td>
					<td><?php echo $item->Price; ?></td>
					<td>
						<label>
							<a href="<?php echo site_url(''); ?>/Product/Edit_Product_Info/<?php echo $item->ID_Product?>">edit</a> | 
							<a href="<?php echo site_url(''); ?>/Product/Hide_Product/<?php echo $item->ID_Product?>">delete</a> 
						</label>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>


