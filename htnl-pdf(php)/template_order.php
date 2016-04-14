<style type="text/css">p{margin: 10px 0}
    td{padding: 2px 5px}
    th{padding: 2px;text-align: center}
td {
        padding:  1px 2px
    }
tr.RowBg{
background-color:#FFFFFF;
}
tr.RowBg1{
background-color:#FFFFFF;
}
tr.RowBg2 {
background-color:#f2f2f2;
}
tr.ddRowBg{
background-color:#FFFFFF;
}
tr.ddRowBg1{
background-color:#FFFFFF;
}
tr.ddRowBg2 {
background-color:#f2f2f2;
}
tr.orderDetailsLineItemTH{
background-color:#e6e6e6;
}
tr.orderDetailsLineItemTH td{
font-size:13px;
}
tr.orderDetailsLineItemTD td{
font-size:12px;
}
tr.orderDetailsLineItemTD{
background-color:#f3f7f8;
}

tr.RowHide{
visibility:collapse;
display:none;
height:0px;
padding:0px;
margin-top:-9999px;
}
tr.RowHide td{
visibility:collapse;
display:none;
height:0px;
padding:0px;
margin-top:-9999px;
}
</style>
<table align="center" cellpadding="0" cellspacing="0" style="width: 95%;border-collapse: collapse;background: #FFFFFF url({SITEURL}/custom/themes/default/images/company_logo.png) top left no-repeat;">
	<tbody>
		<tr>
			<td style="width: 60%"><br>
<br>
<br>
<br>
<br><br><br><br></td>
			<td style="width: 40%; text-align: right;"><span><span style="font-size: 16px;">Order Recap</span><br />
			<span style="font-size: 10px;">&nbsp;Order Number <?php echo $order_number; ?></span></span></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td align="right" colspan="3">&nbsp;</td>
		</tr>
	</tbody>
</table>

<table align="center" style="border-collapse: collapse;border: 1px solid black; padding: 1px; width: 100%;">
	<thead>
		<tr style="background-color:#e6e6e6;">
			<th colspan="4" style="text-align: left;"><span style="font-size:14px;">Order Details</span></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; width: 25%; text-align: right;"><span style="font-size:10px;">PO Number :</span></td>
			<td style="width: 25%"><span style="font-size:10px;"><?php echo $order_number?>&nbsp;</span></td>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; width: 25%; text-align: right;"><span style="font-size:10px;">Is this a deadline Order? :</span></td>
			<td style="border-right: #bfbfbf 1px solid;width: 25%"><span style="font-size:10px;"><?php echo $rushorder_c ?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">Salesperson Name :</span></td>
			<td style=""><span style="font-size:10px;"><?php echo $salespersonno_c?>&nbsp;</span></td>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">In Hand By :</span></td>
			<td style="border-right: #bfbfbf 1px solid;"><span style="font-size:10px;"><?php echo $inhandDate;?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style="border-color: rgb(255, 255, 255) rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">Customer Po# :</span></td>
			<td style=""><span style="font-size:10px;"><?php echo $customerpo_c?>&nbsp;</span></td>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">Order Date:</span></td>
			<td style="border-right: #bfbfbf 1px solid;"><span style="font-size:10px;"><?php echo $orderdate_c?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">Referred by</span></td>
			<td style=""><span style="font-size:10px;"><?php echo $referred_by; ?>&nbsp;</span></td>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">Ship Date :</span></td>
			<td style="border-right: #bfbfbf 1px solid;"><span style="font-size:10px;"><?php echo $shipdate_c?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style="border-left: #bfbfbf 1px solid;border-right: #bfbfbf 1px solid;">&nbsp;</td>
			<td style="">&nbsp;</td>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">Ship Via :</span></td>
			<td style="border-right: #bfbfbf 1px solid;"><span style="font-size:10px;"><?php echo $shipvia_c?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style="border-left: #bfbfbf 1px solid;border-right: #bfbfbf 1px solid;">&nbsp;</td>
			<td style="">&nbsp;</td>
			<td style="border-left-color: rgb(191, 191, 191); border-left-width: 1px; border-left-style: solid; border-right-color: rgb(191, 191, 191); border-right-width: 1px; border-right-style: solid; text-align: right;"><span style="font-size:10px;">Ship Account No :</span></td>
			<td style="border-right: #bfbfbf 1px solid;"><span style="font-size:10px;"><?php echo $ship_acc_no?>&nbsp;</span></td>
		</tr>
	</tbody>
</table>

<table align="center" style="border-collapse: collapse; padding: 1px; width: 100%;">
	<thead>
		<tr style="background-color:#e6e6e6;">
			<th colspan="4" scope="col" style="text-align: left;"><span style="font-size:14px;">Address</span></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf;  width: 25%;"><span style="font-size:10px;"><b>Bill To,</b></span></td>
			<td style="border-right:1px solid #bfbfbf;width: 25%">&nbsp;</td>
			<td style=" border-right:1px solid #bfbfbf;width: 25%"><span style="font-size:10px;"><b>Ship To,</b></span></td>
			<td style=" border-right:1px solid #bfbfbf;width: 25%">&nbsp;</td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; "><span style="font-size:10px;">Customer Code :</span></td>
			<td style=" border-right:1px solid #bfbfbf;">&nbsp;</td>
			<td style=" border-right:1px solid #bfbfbf;">&nbsp;</td>
			<td style=" border-right:1px solid #bfbfbf;">&nbsp;</td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; "><span style="font-size:10px;">Customer Name :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $billing_company_name?>&nbsp;</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;">Customer Name :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $shipping_company_name?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; "><span style="font-size:10px;">Customer Contact :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $billing_address_customer;?>&nbsp;</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;">Customer Contact :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $shipping_address_customer;?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; "><span style="font-size:10px;">Address :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $billing_address_street;?>&nbsp;</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;">Address :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $shipping_address_street;?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; "><span style="font-size:10px;">City :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $billing_address_city;?>&nbsp;</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;">City :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $shipping_address_city;?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; "><span style="font-size:10px;">State :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $billing_address_state;?>&nbsp;</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;">State :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $shipping_address_state;?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; "><span style="font-size:10px;">US Zipcode :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $billing_address_postalcode;?>&nbsp;</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;">US Zipcode :</span></td>
			<td style=" border-right:1px solid #bfbfbf;"><span style="font-size:10px;"><?php echo $shipping_address_postalcode;?>&nbsp;</span></td>
		</tr>
		<tr>
			<td style=" border-right:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-bottom:1px solid #bfbfbf;"><span style="font-size:10px;">Phone :</span></td>
			<td style=" border-right:1px solid #bfbfbf;border-bottom:1px solid #bfbfbf;">&nbsp;</td>
			<td style=" border-right:1px solid #bfbfbf;border-bottom:1px solid #bfbfbf; "><span style="font-size:10px;">Phone :</span></td>
			<td style=" border-right:1px solid #bfbfbf;border-bottom:1px solid #bfbfbf;">&nbsp;</td>
		</tr>
	</tbody>
</table>

<p style="text-align: center;">Order Entry Section</p>

<table align="center" cellpadding="5" cellspacing="5" style="border-collapse: collapse;border: 0px solid black;  padding: 2px 3px; width: 100%;">
	<tbody>
		<tr>
			<td colspan="8" style="padding:5px;text-align: left;font-size:13px;">Products</td>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th style="padding:5px;width: 25%;text-align: left;font-size:13px;">Item</th>
			<th style="padding:5px;width: 15%;text-align: left;font-size:13px;">Size</th>
			<th style="padding:5px;width: 15%;text-align: left;font-size:13px;">Color</th>
			<th style="padding:5px;width: 10%;text-align: right;font-size:13px;">Qty</th>
			<th style="padding:5px;width: 8%;text-align: right;font-size:13px;">Cost</th>
			<th style="padding:5px;width: 8%;text-align: right;font-size:13px;">Total Cost</th>
			<th style="padding:5px;width: 9%;text-align: right;font-size:13px;">Price</th>
			<th style="padding:5px;width: 10%;text-align: right;font-size:13px;">Total<br>Price</th>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th colspan="2" style="padding:5px;width: 40%;text-align: left;font-size:13px;">Description</th>
			<th colspan="5" style="padding:5px;width: 50%;text-align: left;font-size:13px;">Art Instruction</th>
			<th colspan="1" style="padding:5px;width: 10%;text-align: right;font-size:13px;"></th>
		</tr>

		<tr style="display: none">
			<td colspan="8" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php $l = ($total_line_item); $filestr = ""; $other_tbl = ""; $rowBg = 0; for ($i = 0; $i < $l; $i++) {if($skipLineCalculations[$i]!=1){ $filestr .= $upload_file_name[$i]; $item_tbl = $item_code[$i]; $Quantity_tbl = number_format(str_replace(",", "", $Quantity[$i]), 2); $Item_Cost_tbl = number_format(str_replace(",", "", $Item_Cost[$i]), 2); $Total_Cost_tbl = number_format(str_replace(",", "", $Total_Cost[$i]), 2);$Item_Customer_price_tbl = number_format(str_replace(",", "", $Customer_price[$i]), 2); $Total_Customer_price_tbl = number_format(str_replace(",", "", $Total_price[$i]), 2); $Vendor_Name_tabl = $vendor_name[$i];$Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i]; $Sizes_tbl = $sizes[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i];$printItemSpecifications_tbl = $printItemSpecifications[$i];$printItemDetailLines_tbl = $printItemDetailLines[$i];switch($item_no_type){case "spc":$item_tbl=$item_code[$i];break;case "item_no":$item_tbl=$item_no[$i];break;case "antera_id":$item_tbl=$productCstmId[$i];break;case "csid":$item_tbl=$inhouse_id[$i];break;}}else{$Quantity_tbl="";$Item_Cost_tbl="";$Total_Cost_tbl="";$Vendor_Name_tabl="";$printItemSpecifications_tbl="";$printItemDetailLines_tbl="";} ?></td>
		</tr>
		<tr class="<?php if($Vendor_Name_tabl==''){ ?>RowHide<?php }?>">
			<td colspan="8" style="<?php if($Vendor_Name_tabl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;font-size:13px;"><?php echo (($Vendor_Name_tabl=="")?"":"Vendor: ".$Vendor_Name_tabl); ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td style="padding:5px;width: 25%;text-align:left;display: table-cell;font-size:12px;"><?php echo $item_tbl; ?></td>
			<td style="padding:5px;width: 15%;text-align:left;font-size:12px;"><?php echo $Sizes_tbl; ?></td>
			<td style="padding:5px;width: 15%;text-align:left;font-size:12px;"><?php echo $color_size_tbl; ?></td>
			<td style="padding:5px;width: 10%;text-align:right;font-size:12px;"><?php echo $Quantity_tbl; ?>&nbsp;</td>
			<td style="padding:5px;width: 8%;text-align:right;font-size:12px;"><?php echo $Item_Cost_tbl; ?></td>
			<td style="padding:5px;width: 8%;text-align:right;font-size:12px;"><?php echo $Total_Cost_tbl; ?></td>
			<td style="padding:5px;width: 9%;text-align:right;font-size:12px;"><?php echo $Item_Customer_price_tbl; ?></td>
			<td style="padding:5px;width: 10%;text-align: right;font-size:12px;"><?php echo $Total_Customer_price_tbl; ?>&nbsp;&nbsp;</td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td colspan="2" style="padding:5px;width: 40%;text-align:left;font-size:12px;"><?php echo $Description_tbl; ?></td>
			<td colspan="5" style="padding:5px;width: 50%;text-align:left;font-size:12px;"><?php echo $other_tbl; ?></td>
			<td colspan="1" style="padding:5px;width: 10%;text-align: right;font-size:12px;"></td>
		</tr>
		<tr class="<?php if($printItemSpecifications_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="8" style="<?php if($printItemSpecifications_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemSpecifications_tbl; ?></td>
		</tr>
		<tr class="<?php if($printItemDetailLines_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="8" style="<?php if($printItemDetailLines_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemDetailLines_tbl; ?></td>
		</tr>
		<tr style="display:none">
			<td colspan="8" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php if(count($lineItemsApparelDDVendorArray[$i])>0){for ($va = 1; $va <= count($lineItemsApparelDDVendorArray[$i]); $va++) { $Vendor_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Supplier"]; $Vendor_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_supplier_No"]; $Item_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_NO"]; $Item_Name_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_Name"]; ?></td>
		</tr>
		<tr>
			<td colspan="8" style="padding:5px;border: none; border-spacing: 0px;text-align: left;font-size:13px;"><? echo $Item_No_tbl; ?> - Product will be received from <?php echo $Vendor_tbl; ?>
			<table cellpadding="0" cellspacing="0" style="border-collapse: collapse;border: 0px solid black;width: 100%;">
				<tbody>
					<tr>
						<th colspan="8" style="width: 25%;text-align: left;padding:5px;"><span style="font-size:13px;">Decoration</span></th>
					</tr>
					<tr style="background-color:#e6e6e6;height:20px;">
						<th style="padding:2px;width: 10%;text-align: left;font-size:13px;">Logo<br>Imprint</th>
						<th style="padding:2px;width: 15%;text-align: left;font-size:13px;">Logo<br>Location</th>
						<th style="padding:2px;width: 7%;text-align: right;font-size:13px;">Logo<br>Size</th>
						<th style="padding:2px;width: 8%;text-align: right;font-size:13px;">Qty</th>
						<th style="padding:2px;width: 10%;text-align: left;font-size:13px;">&nbsp;Size</th>
						<th style="padding:2px;width: 15%;text-align: left;font-size:13px;">Color</th>
						<th style="padding:2px;width: 15%;text-align: left;font-size:13px;">Color</th>
						<th style="padding:2px;width: 20%;text-align: left;font-size:13px;">Description</th>
					</tr>
					<tr style="display:none">
						<td colspan="8" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php if(count($lineItemsDetailLinesArray[$i][$va])>0){$ddrowBg = 0; for ($dd = 1; $dd <= count($lineItemsDetailLinesArray[$i][$va]); $dd++) {$ddrowBg++; $Apparel_Size_tbl = $lineItemsDetailLinesArray[$i][$va][$dd]["d_ApparelItemSize"]; $Apparel_Color_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["d_ApparelItemColor"]; $Apparel_Qty_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["d_Quantity"]; $DD_Imprint_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Imprints"]; $DD_Location_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Location"]; $DD_Size_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Size"]; $DD_Description_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Description"]; $DD_Color_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Color"]; ?></td>
					</tr>
					<tr class="ddRowBg<?php echo (($ddrowBg % 2==0)?'2':'1'); ?>">
						<td style="padding:2px;width: 10%;text-align: left;font-size:12px;"><?php echo $DD_Imprint_tbl; ?></td>
						<td style="padding:2px;width: 15%;text-align: left;font-size:12px;"><?php echo $DD_Location_tbl; ?></td>
						<td style="padding:2px;width: 7%;text-align: right;font-size:12px;"><?php echo $DD_Size_tbl; ?></td>
						<td style="padding:2px;width: 8%;text-align: right;font-size:12px;"><?php echo $Apparel_Qty_tbl; ?></td>
						<td style="padding:2px;width: 10%;text-align: left;font-size:12px;">&nbsp;<?php echo $Apparel_Size_tbl; ?></td>
						<td style="padding:2px;width: 15%;text-align: left;font-size:12px;"><?php echo $Apparel_Color_tbl; ?></td>
						<td style="padding:2px;width: 15%;text-align: left;font-size:12px;"><?php echo $DD_Color_tbl; ?></td>
						<td style="padding:2px;width: 20%;text-align: left;font-size:12px;"><?php echo $DD_Description_tbl; ?></td>
					</tr>
					<tr style="display:none">
						<td colspan="8" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php }} ?></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr style="display:none">
			<td colspan="8" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php }} ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="8" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php for ($ac = 0; $ac < count($lineItemsAdditnalChargesArray[$i]); $ac++) {if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;}$rowBg++; $item_tbl = $item_no[$i]; $Quantity_tbl = number_format(str_replace(",", "", $Quantity[$i]), 2); $Item_Cost_tbl = number_format(str_replace(",", "", $Item_Cost[$i]), 2); $Total_Cost_tbl = number_format(str_replace(",", "", $Total_Cost[$i]), 2); $Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i]; $final_total_price123 += $lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"];$final_cost_price1 += $lineItemsAdditnalChargesArray[$i][$ac]["CostSublineCharge"];$ItemNameSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemNameSublineCharge"];$ItemCodeSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemCodeSublineCharge"];$DescSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["DescSublineCharge"];$PriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"], 2);$CostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["CostSublineCharge"], 2);$QtySublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["QtySublineCharge"], 2);$BaseCostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BaseCostSublineCharge"], 2);$BasePriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BasePriceSublineCharge"], 2);if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;}?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td style="padding:5px;width: 25%;text-align: left;display: table-cell;font-size:12px;"><?php echo $ItemCodeSublineCharge; ?>&nbsp;&nbsp;<?php echo $ItemNameSublineCharge; ?>&nbsp;&nbsp; <?php echo $DescSublineCharge; ?></td>
			<td style="padding:5px;width: 15%;text-align: left;font-size:12px;"></td>
			<td style="padding:5px;width: 15%;text-align: left;font-size:12px;">&nbsp;</td>
			<td style="padding:5px;width: 10%;text-align: center;font-size:12px;"><?php echo $QtySublineCharge; ?></td>
			<td style="padding:5px;width: 8%;text-align: right;font-size:12px;"><?php echo $BaseCostSublineCharge; ?></td>
			<td style="padding:5px;width: 8%;text-align: right;font-size:12px;"><?php echo $CostSublineCharge; ?></td>
			<td style="padding:5px;width: 9%;text-align: right;font-size:12px;"><?php echo $BasePriceSublineCharge; ?></td>
			<td style="padding:5px;width: 10%;text-align: right;font-size:12px;"><?php echo $PriceSublineCharge; ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="8" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php } ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="8" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php $rowBg++;} ?></td>
		</tr>

		<tr style="height:20px;">
			<td colspan="3" style="padding:5px;">&nbsp;</td>
			<td colspan="2" style="padding:5px;text-align:right;"></td>
			<td colspan="2" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Tax</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format(str_replace(",", "", $tax), 2); ?>&nbsp;&nbsp;</td>
		</tr>
		<tr style="height:20px;">
			<td colspan="3" style="padding:5px;">&nbsp;</td>
			<td colspan="2" style="padding:5px;text-align:right;"></td>
			<td colspan="2" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Shipping</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format(str_replace(",", "", $shipping_value), 2); ?>&nbsp;&nbsp;</td>
		</tr>

		<tr style="height:20px;" id="ShowCommission">
			<td colspan="3" style="padding:5px;">&nbsp;</td>
			<td colspan="2" style="padding:5px;text-align:right;"></td>
			<td colspan="2" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Commission</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format(str_replace(",", "", $final_comm), 2); ?>&nbsp;&nbsp;</td>
		</tr>


		<tr style="height:20px;">
			<td colspan="3" style="padding:5px;">&nbsp;</td>
			<td colspan="2" style="padding:5px;text-align:right;"></td>
			<td colspan="2" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Profit</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format(str_replace(",", "", $final_total_profit), 2); ?>&nbsp;&nbsp;</td>
		</tr>

		<tr style="height:20px;">
			<td colspan="3" style="padding:5px;text-align:right;background-color:#e6e6e6;">&nbsp;Total Cost</td>
			<td colspan="2" style="padding:5px;text-align:right;background-color:#e6e6e6;">&nbsp;$<?php echo number_format(str_replace(",", "", $final_total_cost), 2); ?></td>
			<td colspan="2" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Total Price</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format(str_replace(",", "", $final_total_price1), 2); ?>&nbsp;&nbsp;</td>
		</tr>

	</tbody>
</table>
<div id="showVendorCostSummary" style="width: 100%;">
<table  align="center" cellpadding="5" cellspacing="5" style="border-collapse: collapse;border: 0px solid black;  padding: 2px 3px; width: 98%;">
	<tbody>
		<tr>
			<td colspan="5" style="padding:5px;text-align: left;font-size:13.5px;font-weight:bold;">Vendor Cost Summary </td>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th style="padding:5px;width: 2%;text-align: right;font-size:13.5px;">Sr.</th>
			<th style="padding:5px;width: 53%;text-align: left;font-size:13.5px;">Vendor name</th>
			<th style="padding:5px;width: 15%;text-align: right;font-size:13.5px;">Qty&nbsp;&nbsp;</th>
			<th style="padding:5px;width: 15%;text-align: right;font-size:13.5px;">Total Price&nbsp;&nbsp;</th>
			<th style="padding:5px;width: 15%;text-align: right;font-size:13.5px;">Total Cost&nbsp;&nbsp;</th>
		</tr>
		<tr style="display: none">
			<td colspan="5" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php $rowBg = 0;$rowCnt = 1; foreach($vendorQtyPriceCostArray as $vendorQtyPriceCostKey => $vendorQtyPriceCostValue) {$Vendor_Name_s_tbl = $vendorQtyPriceCostValue['name']; $Quantity_s_tbl = number_format(str_replace(",", "", $vendorQtyPriceCostValue['qty']), 2); $Total_Price_s_tbl =number_format(str_replace(",", "", $vendorQtyPriceCostValue['price']), 2); $Total_Cost_s_tbl =number_format(str_replace(",", "", $vendorQtyPriceCostValue['cost']), 2); ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>">
			<td style="padding:5px;width: 2%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $rowCnt; ?></td>
			<td style="padding:5px;width: 53%;text-align:left;font-size:12.5px;"><?php echo $Vendor_Name_s_tbl; ?></td>
			<td style="padding:5px;width: 15%;text-align:right;font-size:12.5px;"><?php echo $Quantity_s_tbl; ?>&nbsp;&nbsp;</td>
			<td style="padding:5px;width: 15%;text-align:right;font-size:12.5px;"><?php echo $Total_Price_s_tbl; ?>&nbsp;&nbsp;</td>
			<td style="padding:5px;width: 15%;text-align: right;font-size:12.5px;"><?php echo $Total_Cost_s_tbl; ?>&nbsp;&nbsp;</td>
		</tr>
		<tr style="display:none">
			<td colspan="5" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php $rowBg++;$rowCnt++;} ?></td>
		</tr>
</tbody>
</table>
</div>
<br><br>
<table style="border-collapse: collapse;border: 0px solid black;padding: 2px 3px; width: 100%;">
	<tbody>
		<tr  id="showNoteHeader">
			<td style="width: 100%; border-top:1px solid #00000a;border-bottom:1px solid #00000a;"><span style="font-size:10px;">ORDER NOTES:</span></td>
		</tr>
		<tr style=" height: 10px; ">
			<td>&nbsp;</td>
		</tr>
		<tr id="showNoteBody">
			<td><span style="font-size:10px;"><?php echo $notes_customer; ?></span></td>
		</tr>
		<tr style="height: 20px;">
			<td style="border-bottom:1px solid #00000a;">&nbsp;</td>
		</tr>
	</tbody>
</table>


<p><span style="font-size:14px;">Notes:&nbsp;</span></p>

<p><span style="font-size:14px;">Terms and Conditions: Packaging: The shipping documentation that accompanies every shipment must be accurate and must match the box contents. This includes packing slips, invoices, box markings and any other shipping or order documentation. Fines will be imposed for non-compliant shipments to cover the internal costs associated with fixing any errors that the non-compliance may cause. PDF PROOF REQUIRED BEFORE PRODUCTION</span></p>
