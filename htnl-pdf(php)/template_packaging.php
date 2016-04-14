<style type="text/css">p {
        margin: 10px 0
    }

    td {
        padding: 2px 5px
    }

    th {
        padding: 2px;
        text-align: center
    }
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
<table align="center" cellpadding="0" cellspacing="0" style="width:100%;border-collapse: collapse;background: #FFFFFF url({SITEURL}/custom/themes/default/images/company_logo.png) top left no-repeat;">
	<tbody>
		<tr>
			<td align="left" style="text-align:left;width:33%;">&nbsp;&nbsp;<br />
			<br />
			<br />
			<br /><br><br><br>
			&nbsp;</td>
			<td align="center" style="text-align: center;width:34%;color:#17375d;font-size:16px;">&nbsp;</td>
			<td style="width: 33%; text-align: right;">Packing List</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="width: 100%;border-collapse: collapse;border:1px solid #8b8b8b;">
	<tbody>
		<tr style="background-color:#e6e6e6;">
			<td colspan="4" style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 12px;color:#17375d;">Order Summary</span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">PO Number</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $order_number; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;">&nbsp;</td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;">&nbsp;</td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Salesperson Name</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $salespersonno_c; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Order Date</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $order_date; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Customer PO#</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $customer_po; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Ship Date</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ship_date_order; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Attention To</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $attn; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Ship Via</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ship_via; ?></span></span></td>
		</tr>
	</tbody>
</table>
&nbsp;

<table cellpadding="0" cellspacing="0" style="width: 100%;border-collapse: collapse;border:1px solid #8b8b8b;">
	<tbody>
		<tr style="background-color:#e6e6e6;">
			<td colspan="4" style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 12px;color:#17375d;">Address</span></span></td>
		</tr>
		<tr style="background-color:#e6e6e6;">
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;color:#17375d;">Bill To</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;">&nbsp;</td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;color:#17375d;">Ship To</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;">&nbsp;</td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Company Name</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $billing_company_name; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Company Name</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $shipping_company_name; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Contact Name</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $billing_customer_name; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Contact Name</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ship_customer_name; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Address</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $billing_street; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Address</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ship_street; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">City</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $billing_city; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">City</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ship_city; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">State</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $billing_state; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">State</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ship_state; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Postal Code</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $billing_postalcode; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Postal Code</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ship_postalcode; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Other Email</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $cust_email["primary"]; ?></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Phone</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $b_phone_work; ?></span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;"></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"></span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10px;">Webstore Order Phone Number</span></span></td>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 25%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $webstore_order_phone_number_c; ?></span></span></td>
		</tr>
	</tbody>
</table>
&nbsp;

<table align="center" cellpadding="5" cellspacing="5" style="border-collapse: collapse;border: 0px solid black;  padding: 2px 3px; width: 100%;">
	<tbody>
		<tr>
			<td colspan="4" style="padding:5px;text-align: left;font-size:13px;font-weight:bold;">Products</td>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th style="padding:5px;width: 30%;text-align: left;font-size:13px;">Item</th>
			<th style="padding:5px;width: 20%;text-align: left;font-size:13px;">Size</th>
			<th style="padding:5px;width: 30%;text-align: left;font-size:13px;">Color</th>
			<th style="padding:5px;width: 20%;text-align: right;font-size:13px;">Qty&nbsp;&nbsp;</th>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th colspan="2" style="padding:5px;width: 50%;text-align: left;font-size:13px;">Description</th>
			<th colspan="2" style="padding:5px;width: 50%;text-align: left;font-size:13px;"  id="showArt">Art Instruction</th>
		</tr>
		<tr style="display: none">
			<td colspan="4" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php $l = ($total_line_item); $filestr = ""; $other_tbl = ""; $rowBg = 0; for ($i = 0; $i < $l; $i++) {if($skipLineCalculations[$i]!=1){ $filestr .= $upload_file_name[$i]; $item_tbl = $item_no[$i]; $Quantity_tbl = number_format(str_replace(",", "", $Quantity[$i]), 2); $Item_Cost_tbl = number_format(str_replace(",", "", $Item_Cost[$i]), 2); $Total_Cost_tbl = number_format(str_replace(",", "", $Total_Cost[$i]), 2);$Item_Customer_price_tbl = number_format(str_replace(",", "", $Customer_price[$i]), 2); $Total_Customer_price_tbl = number_format(str_replace(",", "", $Total_price[$i]), 2); $Vendor_Name_tabl = $vendor_name[$i];$Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i]; $Sizes_tbl = $sizes[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i];$printItemSpecifications_tbl = $printItemSpecifications[$i];$printItemDetailLines_tbl = $printItemDetailLines[$i];switch($item_no_type){case "spc":$item_tbl=$item_code[$i];break;case "item_no":$item_tbl=$item_no[$i];break;case "antera_id":$item_tbl=$productCstmId[$i];break;case "csid":$item_tbl=$inhouse_id[$i];break;}}else{$Quantity_tbl="";$Item_Cost_tbl="";$Total_Cost_tbl="";$Vendor_Name_tabl="";$printItemSpecifications_tbl="";$printItemDetailLines_tbl="";} ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td style="padding:5px;width: 30%;text-align:left;display: table-cell;font-size:12px;"><?php echo $item_tbl; ?></td>
			<td style="padding:5px;width: 20%;text-align:left;font-size:12px;"><?php echo $color_size_tbl; ?></td>
			<td style="padding:5px;width: 30%;text-align:left;font-size:12px;"><?php echo $Sizes_tbl; ?></td>
			<td style="padding:5px;width: 20%;text-align:right;font-size:12px;"><?php echo $Quantity_tbl; ?>&nbsp;</td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td colspan="2" style="padding:5px;text-align:left;width: 50%;font-size:12px;"><?php echo $Description_tbl; ?></td>
			<td colspan="2" style="padding:5px;text-align:left;width: 50%;font-size:12px;"><?php echo $other_tbl; ?></td>
		</tr>
		<tr class="<?php if($printItemSpecifications_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="4" style="<?php if($printItemSpecifications_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemSpecifications_tbl; ?></td>
		</tr>
		<tr class="<?php if($printItemDetailLines_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="4" style="<?php if($printItemDetailLines_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemDetailLines_tbl; ?></td>
		</tr>
		<tr style="display:none">
			<td colspan="4" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php if(count($lineItemsApparelDDVendorArray[$i])>0){for ($va = 1; $va <= count($lineItemsApparelDDVendorArray[$i]); $va++) { $Vendor_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Supplier"]; $Vendor_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_supplier_No"]; $Item_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_NO"]; $Item_Name_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_Name"]; ?></td>
		</tr>
		<tr>
			<td colspan="4" style="padding:5px;border: none; border-spacing: 0px;text-align: left;font-size:13px;">
			<table cellpadding="0" cellspacing="0" style="border-collapse: collapse;border: 0px solid black;width: 100%;">
				<tbody>
					<tr>
						<th colspan="8" style="width: 25%;text-align: left;padding:5px;"><span style="font-size:13px;">Decoration</span></th>
					</tr>
					<tr style="background-color:#e6e6e6;height:20px;">
						<th style="padding:2px;width: 10%;text-align: left;font-size:13px;">Logo<br />
						Imprint</th>
						<th style="padding:2px;width: 15%;text-align: left;font-size:13px;">Logo<br />
						Location</th>
						<th style="padding:2px;width: 7%;text-align: right;font-size:13px;">Logo<br />
						Size</th>
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
			<td colspan="4" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php }} ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="4" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php for ($ac = 0; $ac < count($lineItemsAdditnalChargesArray[$i]); $ac++) {if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;}$rowBg++; $item_tbl = $item_no[$i]; $Quantity_tbl = number_format(str_replace(",", "", $Quantity[$i]), 2); $Item_Cost_tbl = number_format(str_replace(",", "", $Item_Cost[$i]), 2); $Total_Cost_tbl = number_format(str_replace(",", "", $Total_Cost[$i]), 2); $Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i]; $final_total_price1 += $lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"];$ItemNameSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemNameSublineCharge"];$ItemCodeSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemCodeSublineCharge"];$DescSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["DescSublineCharge"];$PriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"], 2);$CostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["CostSublineCharge"], 2);$QtySublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["QtySublineCharge"], 2);$BaseCostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BaseCostSublineCharge"], 2);$BasePriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BasePriceSublineCharge"], 2);if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;}?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td style="padding:5px;text-align: left;display: table-cell;font-size:12px;"><?php echo $ItemCodeSublineCharge; ?>&nbsp;&nbsp;<?php echo $ItemNameSublineCharge; ?>&nbsp;&nbsp; <?php echo $DescSublineCharge; ?></td>
			<td style="padding:5px;text-align: left;font-size:12px;">&nbsp;</td>
			<td style="padding:5px;text-align: right;font-size:12px;">&nbsp;</td>
			<td style="padding:5px;text-align: center;font-size:12px;"><?php echo $QtySublineCharge; ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="4" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php } ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="4" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php $rowBg++;} ?></td>
		</tr>
		<tr>
			<td colspan="4" style="padding:5px;text-align: left;font-size:13px;font-weight:bold;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" style="padding:5px;text-align: left;font-size:12px;width: 80%;">&nbsp;</td>
		</tr>
		<tr style="height:20px;">
			<td colspan="4" style="padding:5px;">&nbsp;</td>
		</tr>
	</tbody>
</table>

<table cellpadding="0" cellspacing="0" style="width: 100%;border-collapse: collapse;border:1px solid #8b8b8b;">
	<tbody>
		<tr style="background-color:#e6e6e6;">
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 100%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 12px;color:#17375d;">Acknowledgement</span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 100%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ackprroftext; ?></span></span></td>
		</tr>
	</tbody>
</table>
&nbsp;

<table cellpadding="0" cellspacing="0" style="width: 100%;border-collapse: collapse;border:1px solid #8b8b8b;">
	<tbody>
		<tr style="background-color:#e6e6e6;">
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 100%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 12px;color:#17375d;">Terms & Condition</span></span></td>
		</tr>
		<tr>
			<td style="border:1px solid #8b8b8b;border:1px solid #8b8b8b; width: 100%; text-align: left;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 8px;"><?php echo $ack_term; ?></span></span></td>
		</tr>
	</tbody>
</table>
