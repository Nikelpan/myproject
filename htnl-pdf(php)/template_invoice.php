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
			<td align="left" style="text-align:left;width:35%;">&nbsp;&nbsp;<br><br><br><br><br><br><br><br><br></td>
			<td align="center" style="text-align: center;width:20%;color:#17375d;font-size:16px;"></td>
			<td align="right" style="width:45%;text-align:right;">
			<table align="right" cellpadding="0" cellspacing="0" style="width:100%;border-collapse: collapse;border: 0px solid black;">
				<tbody>
					<tr align="right">
						<td colspan="2" style="text-align: right;width:100%;text-align:right;"><span style="color:#000000;font-size:14px;">INVOICE</span></td>
					</tr>
					<tr align="right">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13px;"><span style="">PO No.:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13px;"><span style=""><?php echo $order_number; ?></span></span></span></td>
					</tr>
					<tr>
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13px;"><span style="">Order Date:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13px;"><span style=""><?php echo $order_date; ?></span></span></span></td>
					</tr>
					<tr id="hideInHandDate">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13px;"><span style=""><?php echo ($rush == "Yes") ? "In-Hands Date" : "In-Hands Date:"; ?></span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13px;"><span style=""><?php echo $in_hand_date; ?></span></span></span></td>
					</tr>
					<tr id="hideShippingVia">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13px;"><span style="">Shipping Via:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13px;"><span style=""><?php echo $final_ship_method; ?></span></span></span></td>
					</tr>
					<tr id="hideShippingDate">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13px;"><span style="">Shipping Date:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13px;"><span style=""><?php echo $final_ship_date; ?></span></span></span></td>
					</tr>
					<tr id="hideDueDate">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13px;"><span style="">Due Date:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13px;"><span style=""><?php echo $due_date_c; ?></span></span></span></td>
					</tr>

				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<table align="center" cellpadding="0" cellspacing="0" style="padding: 2px 3px; width: 100%;">
	<tbody>
		<tr>
			<th style="padding:5px;width: 33%; text-align: left;font-size:13px;">FROM</th>
			<th style="padding:5px;width: 33%; text-align: left;font-size:13px;">CUSTOMER</th>
			<th style="padding:5px;width: 33%; text-align: left;font-size:13px;">SHIPPING INFO</th>
		</tr>
		<tr>
			<td style="width: 33%;font-size:12px;text-align: left;display: table-cell;word-wrap:break-word;" valign="top"><?php echo $sysconfig_client_address; ?><br><?php echo $sales_email['primary'];?></td>
			<td style="width: 33%;font-size:12px;text-align: left;display: table-cell;word-wrap:break-word;" valign="top"><?php echo $billing_company_name . "<br />
			"; echo $billing_customer_name . "<br />
			"; echo $billing_street . "<br />
			"; echo $billing_city; echo $billing_state; echo $billing_postalcode . "<br />
			"; echo $b_phone_work . "
			"; echo $b_phone_fax . "
			"; echo $cust_email["billing"] ?> </td>
			<td style="width: 33%;font-size:12px;text-align: left;display: table-cell;word-wrap:break-word;" valign="top"><?php echo $shipping_company_name . "<br />
			"; echo $ship_customer_name . "<br />
			"; echo $ship_street . "<br />
			"; echo $ship_city; echo $ship_state; echo $ship_postalcode . "<br />
			"; echo  $b_phone_work . "
			"; echo  $b_phone_fax . "
			"; echo $cust_email["primary"] ?> </td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p style="text-align: right;">&nbsp;</p>

<table align="center" cellpadding="5" cellspacing="5" style="border-collapse: collapse;border: 0px solid black;  padding: 2px 3px; width: 100%;">
	<tbody>
		<tr>
			<td colspan="6" style="padding:5px;text-align: left;font-size:13px;font-weight:bold;">Products</td>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th style="padding:5px;width: 30%;text-align: left;font-size:13px;">Item</th>
			<th style="padding:5px;width: 20%;text-align: left;font-size:13px;">Size</th>
			<th style="padding:5px;width: 20%;text-align: left;font-size:13px;">Color</th>
			<th style="padding:5px;width: 10%;text-align: right;font-size:13px;">Qty</th>
			<th style="padding:5px;width: 10%;text-align: right;font-size:13px;">Rate</th>
			<th style="padding:5px;width: 10%;text-align: right;font-size:13px;">Amount&nbsp;&nbsp;</th>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th colspan="2" style="padding:5px;width: 50%;text-align: left;font-size:13px;">Description</th>
			<th colspan="3" style="padding:5px;width: 40%;text-align: left;font-size:13px;">Art Instruction</th>
			<th colspan="1" style="padding:5px;width: 10%;text-align: right;font-size:13px;"></th>
		</tr>
		<tr style="display: none">
			<td colspan="6" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php $l = ($total_line_item); $filestr = ""; $other_tbl = ""; $rowBg = 0; for ($i = 0; $i < $l; $i++) {if($skipLineCalculations[$i]!=1){ $final_total_Price1 = $final_total_Price1 + $total_price[$i]; $final = $final_total_Price1; $price = $total_price[$i]; $final_final = (str_replace(",", "", $final) + $tax + $shipping_value); $final_total_Price_final = $final_final;
$filestr .= $upload_file_name[$i]; $item_tbl = $item_code[$i]; $Quantity_tbl = number_format(str_replace(",", "", $quantity[$i]), 2); $Item_Price_tbl=number_format((float)$cust_price[$i], 2);$Total_Price_tbl=number_format((float)$total_price[$i], 2); $Vendor_Name_tabl = $vendor_name[$i];$Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i]; $Sizes_tbl = $sizes[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i];$printItemSpecifications_tbl = $printItemSpecifications[$i];$printItemDetailLines_tbl = $printItemDetailLines[$i];switch($item_no_type){case "spc":$item_tbl=$item_code[$i];break;case "item_no":$item_tbl=$item_no[$i];break;case "antera_id":$item_tbl=$productCstmId[$i];break;case "csid":$item_tbl=$inhouse_id[$i];break;}if($Hide[$i]=='Yes'){continue;}}else{$Quantity_tbl="";$Item_Cost_tbl="";$Total_Cost_tbl="";$Vendor_Name_tabl="";$printItemSpecifications_tbl="";$printItemDetailLines_tbl="";} ?>
</td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td style="padding:5px;width: 30%;text-align:left;display: table-cell;font-size:12px;"><?php echo $item_tbl; ?></td>
			<td style="padding:5px;width: 20%;text-align:left;font-size:12px;"><?php echo $Sizes_tbl; ?></td>
			<td style="padding:5px;width: 20%;text-align:left;font-size:12px;"><?php echo $color_size_tbl; ?></td>
			<td style="padding:5px;width: 10%;text-align:right;font-size:12px;"><?php echo $Quantity_tbl; ?></td>
			<td style="padding:5px;width: 10%;text-align:right;font-size:12px;"><?php echo $Item_Price_tbl; ?></td>
			<td style="padding:5px;width: 10%;text-align: right;font-size:12px;"><?php echo $Total_Price_tbl; ?>&nbsp;&nbsp;</td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td colspan="2" style="padding:5px;width: 50%;text-align:left;display: table-cell;font-size:12px;"><?php echo $Description_tbl; ?></td>
			<td colspan="3" style="padding:5px;width: 40%;text-align:left;font-size:12px;"><?php echo $other_tbl; ?></td>
			<td colspan="1" style="padding:5px;width: 10%;text-align: right;font-size:12px;"></td>
		</tr>
		<tr class="<?php if($printItemSpecifications_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="6" style="<?php if($printItemSpecifications_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemSpecifications_tbl; ?></td>
		</tr>
		<tr class="<?php if($printItemDetailLines_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="6" style="<?php if($printItemDetailLines_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemDetailLines_tbl; ?></td>
		</tr>
		<tr style="display:none">
			<td colspan="6" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php if(count($lineItemsApparelDDVendorArray[$i])>0){for ($va = 1; $va <= count($lineItemsApparelDDVendorArray[$i]); $va++) { $Vendor_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Supplier"]; $Vendor_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_supplier_No"]; $Item_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_NO"]; $Item_Name_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_Name"]; ?></td>
		</tr>
		<tr>
			<td colspan="6" style="padding:5px;border: none; border-spacing: 0px;text-align: left;font-size:13px;">
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
			<td colspan="6" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php }} ?></td>
		</tr>
		<tr style="display: none">
			<td  colspan="6" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php for ($ac = 0; $ac < count($lineItemsAdditnalChargesArray[$i]); $ac++) {if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;}$rowBg++; $item_tbl = $item_no[$i]; $Quantity_tbl = number_format(str_replace(",", "", $quantity[$i]), 2); $Item_Cost_tbl = number_format(str_replace(",", "", $Item_Cost[$i]), 2); $Total_Cost_tbl = number_format(str_replace(",", "", $Total_Cost[$i]), 2); $Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i]; $final_total_Price1 += $lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"];$final_final +=$lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"];$ItemNameSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemNameSublineCharge"];$ItemCodeSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemCodeSublineCharge"];$DescSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["DescSublineCharge"];$PriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"], 2);$CostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["CostSublineCharge"], 2);$QtySublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["QtySublineCharge"], 2);$BaseCostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BaseCostSublineCharge"], 2);$BasePriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BasePriceSublineCharge"], 2);if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;}?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'2':'1'); ?>">
			<td style="padding:5px;width: 30%;text-align: left;display: table-cell;font-size:12px;"><?php echo $ItemCodeSublineCharge; ?>&nbsp;&nbsp;<?php echo $ItemNameSublineCharge; ?>&nbsp;&nbsp; <?php echo $DescSublineCharge; ?></td>
			<td style="padding:5px;width: 20%;text-align: left;font-size:12px;"></td>
			<td style="padding:5px;width: 20%;text-align: left;font-size:12px;">&nbsp;</td>
			<td style="padding:5px;width: 10%;text-align: right;font-size:12px;"><?php echo $QtySublineCharge; ?></td>
			<td style="padding:5px;width: 10%;text-align: right;font-size:12px;"><?php echo $BasePriceSublineCharge; ?></td>
			<td style="padding:5px;width: 10%;text-align: right;font-size:12px;"><?php echo $PriceSublineCharge; ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="6" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php } ?></td>
		</tr>
		<tr style="display: none">
			<td colspan="6" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php $rowBg++;} ?></td>
		</tr>

		<tr style="height:20px;">
			<td colspan="4" style="padding:5px;">&nbsp;</td>
			<td colspan="1" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">SUBTOTAL</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format($final_total_Price1, 2); ?>&nbsp;&nbsp;</td>
		</tr>

		<tr style="height:20px;">
			<td colspan="4" style="padding:5px;">&nbsp;</td>
			<td colspan="1" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Tax(<?php echo $tax_rate; ?>%)</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format($tax, 2); ?>&nbsp;&nbsp;</td>
		</tr>


		<tr style="height:20px;">
			<td colspan="4" style="padding:5px;">&nbsp;</td>
			<td colspan="1" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Shipping</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format($shipping_value, 2); ?>&nbsp;&nbsp;</td>
		</tr>

		<tr style="height:20px;">
			<td colspan="4" style="padding:5px;">&nbsp;</td>
			<td colspan="1" style="padding:5px;text-align: right;vertical-align: middle;font-size:13px;background-color:#e6e6e6;">Total</td>
			<td style="padding:5px;text-align: right; vertical-align: middle;font-size:13px;background-color:#e6e6e6;">$<?php echo number_format($final_final, 2); ?>&nbsp;&nbsp;</td>
		</tr>

	</tbody>
</table>

<p><span style="font-size:10px;">This amount does not include shipping or applicaple taxes. Quantity shipped may vary from the quantity ordered. <span style="color:#FF0000;">THIS IS NOT AN INVOICE.</span></span></p>

<table style="border-collapse: collapse;border: 0px solid black;padding: 2px 3px; width: 100%;">
	<tbody>
		<tr>
			<td style="width: 100%; border-top:1px solid #00000a;border-bottom:1px solid #00000a"><span style="font-size:10px;">ORDER NOTES:</span></td>
		</tr>
		<tr style=" height: 10px; ">
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><span style="font-size:10px;"><?php echo $notes_customer; ?></span></td>
		</tr>
		<tr style="height: 20px;">
			<td style="border-bottom:1px solid #00000a">&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 100%;border-top:1px solid #00000a;border-bottom:1px solid #00000a"><span style="font-size:10px;">APPROVAL TERMS:</span></td>
		</tr>
	</tbody>
</table>

<p><span style="font-size:10px;"><?php if (count($ack_term) > 0) { for ($k = 0; $k < count($ack_term); $k++) { ?></span></p>

<p class="p21 ft9"><span style="font-size:10px;"><?php echo utf8_encode($ack_term[$k]); ?></span></p>

<p><span style="font-size:10px;"><?php echo "<br />
"; } } else { echo "<br />
"; } ?></span></p>
