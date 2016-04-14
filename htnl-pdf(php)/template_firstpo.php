<page xmlns="http://www.w3.org/1999/html">
<style type="text/css">td {
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
background-color:#EEEEEE;
}
tr.ddRowBg1{
background-color:#F9F9F9;
}
tr.ddRowBg2 {
background-color:#f6f6f6;
}
tr.orderDetailsLineItemTH{
background-color:#e6e6e6;
}
tr.orderDetailsLineItemTH td{
font-size:13.5px;
}
tr.orderDetailsLineItemTD td{
font-size:12.5px;
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
						<td colspan="2" style="width:100%;text-align:right;"><span style="color:#000000;font-size:14.5px;">PURCHASE ORDER</span></td>
					</tr>
					<tr align="right">
						<td colspan="2" style="width:100%;text-align:right;"><span style="color:#000000;font-size:14.5px;">&nbsp;</span></td>
					</tr>
					<tr align="right">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style="">PO No:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo $order_number; ?></span></span></span></td>
					</tr>
					<tr>
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style="">Order Date:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo $order_date; ?></span></span></span></td>
					</tr>
					<tr id="hideInHandDate">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style=""><?php echo ($rush == "Yes") ? "<span style='color:#FF0000;'>In-Hands Date:</span>" : "In-Hands Date:"; ?></span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo ($rush == "Yes") ? "<span style='color:#FF0000;'>FIRM </span>" : ""; ?><?php echo $in_hand_date; ?></span></span></span></td>
					</tr>
					<tr  id="hideShippingDate">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style="">Shipping Date:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo $final_ship_date; ?></span></span></span></td>
					</tr>
					<tr  id="hideVendorAccountNumber">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style="">Vendor Account #:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo $vendorAccountNumber; ?></span></span></span></td>
					</tr>
					<tr  id="hidecustomerPO">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style="">Customer PO:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo $customerPO; ?></span></span></span></td>
					</tr>
					<tr  id="hideShippingAccount">
						<td style="text-align: right;width:60%;"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style="">Shipping Account Number:</span></span></span></td>
						<td style="text-align: left;width:40%;"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo $ship_acc_no; ?></span></span></span></td>
					</tr>
					<tr  id="hideShippingVia">
						<td style="text-align: right;width:60%;" valign="top"><span style="color:#17375d;"><span style="font-size:13.5px;"><span style="">Shipping Via:</span></span></span></td>
						<td style="text-align: left;width:40%;" valign="top"><span style="color:#000000;"><span style="font-size:13.5px;"><span style=""><?php echo $final_ship_method; ?></span></span></span></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
	</tbody>
</table>
<div id="ShowPOApprovalForm">
<table align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;border: 0px solid black;  width: 100%;">
 <tbody>
  <tr>
   <td style="text-align:left;width: 100%;<?php if($ShowPOApprovalForm!='1'){ echo 'display:none;';} ?>" >

<br />
<br />
<br />
&nbsp;
<p><span style="font-size:13.5px;padding:10px;">Please review the PO below and respond to our questions by clicking yes or no and hitting send. If the answer is not as simple as yes or no, please use the notes section to communicate any QUESTIONS/ ISSUES you need to share about this PO. Thank you for your timely response.<br />
<br />
<br />
1. Confirm receipt of this order.<br />
2. Items ordered are in stock.<br />
3. Artwork has been received and is applicable for this product decoration. If "blank product" is specified in the order, please disregard.<br />
4.Delivery can be made to the customer by the requested ship date.</span></p>

<form action="http://demo.anterasoftware.com/advance/send_vendorpo1.php" name="myform">
<p><span style="line-height: 20.7999992370605px;font-size:10px;">This order is accepted and the above criteria can be met. &nbsp; &nbsp; &nbsp;</span></p>

<table align="center" cellpadding="0" cellspacing="0" style="width: 100%;border:1px solid #666666;">
	<tbody>
		<tr>
			<td style="padding:0px;font-size:10px;width: 50%;">
			<textarea cols="65" id="b" name="comments" rows="5" style="border:2px solid #666666;font-size:10px;backgound:#eeeeee;display:none;">Notes</textarea><input name="rep" type="hidden" value="<?php echo $email_address; ?>" /> <input name="filename" type="hidden" value="<?php echo $filename; ?>" /> <input id="orderId" name="orderid" type="hidden" value="<?php echo $order_id; ?>" /> <input name="vendorid" type="hidden" value="<?php echo $vendor_id_hidden; ?>" /><input name="postatus" type="hidden" value="" /></td>
			<td style="padding:0px;font-size:10px;width: 30%;"><br />
			<input name="submit" onclick="javascript:myFormSubmit('Approved');" type="button" value="Approved" />&nbsp; <input name="submit" onclick="javascript:myFormSubmit('Declined');" type="button" value="Declined" />&nbsp;</td>
		</tr>
	</tbody>
</table>
<br />
&nbsp;</form>


   </td>
  </tr>
 </tbody>
</table>
</div>


<table align="center" cellpadding="0" cellspacing="0" style="padding: 2px 3px; width: 100%;">
	<tbody>
		<tr>
			<th style="padding:5px;width: 33%; text-align: left;font-size:13.5px;">Billing Info</th>
			<th style="padding:5px;width: 33%; text-align: left;font-size:13.5px;">Submit To</th>
			<th style="padding:5px;width: 33%; text-align: left;font-size:13.5px;">Shipping Info</th>
		</tr>
		<tr>
			<td style="width: 33%;font-size:12.5px;text-align: left;line-height:14.5px;display: table-cell;word-wrap:break-word;" valign="top"><?php echo $sysconfig_client_address; ?><br><?php echo $sales_email['primary'];?></td>
			<td style="width: 33%;font-size:12.5px;text-align: left;line-height:14.5px;display: table-cell;word-wrap:break-word;" valign="top"><?php echo $supp; ?><br />
			<?php echo $b_street; ?><br />
			<?php echo $b_city; ?> , <?php echo $b_state; ?> <?php echo $b_pcode; ?><br />
			<?php echo $b_phone_office; ?>
			<?php echo $b_phone_fax; ?>
			<?php echo $cust_email; ?></td>
			<td style="width: 33%;font-size:12.5px;text-align: left;line-height:14.5px;display: table-cell;word-wrap:break-word;" valign="top"><?php echo $shipping_company_name; ?><br />
			<?php echo $ship_customer_name; ?><br />
			<?php echo $shipping_address_street; ?><br />
			<?php echo $shipping_address_city; ?> , <?php echo $shipping_address_state; ?> <?php echo $shipping_address_postalcode; ?><br />
			<?php echo $s_phone_work; ?>
			<?php echo $s_phone_fax; ?>
			<?php echo $sust_email; ?></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<table align="center" cellpadding="5" cellspacing="5" style="border-collapse: collapse;border: 0px solid black;  padding: 2px 3px; width: 100%;">
	<tbody>
		<tr>
			<td colspan="5" style="padding:5px;text-align: left;font-size:13.5px;font-weight:bold;">Products</td>
		</tr>
		<tr style="background-color:#e6e6e6;height:20px;">
			<th style="padding:5px;width: 12%;text-align: left;font-size:13.5px;">Item2</th>
			<th style="padding:5px;width: 43%;text-align: left;font-size:13.5px;">Name</th>
			<th style="padding:5px;width: 15%;text-align: right;font-size:13.5px;">Qty&nbsp;&nbsp;</th>
			<th style="padding:5px;width: 15%;text-align: right;font-size:13.5px;">Rate&nbsp;&nbsp;</th>
			<th style="padding:5px;width: 15%;text-align: right;font-size:13.5px;">Amount&nbsp;&nbsp;</th>
		</tr>
		<tr style="display: none">
			<td colspan="5" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php $l = ($total_line_item); $filestr = ""; $other_tbl = ""; $rowBg = 0; for ($i = 0; $i < $l; $i++) {if($skipLineCalculations[$i]!=1){  $filestr .= $upload_file_name[$i]; $itemName_tbl = $item_name[$i];$item_tbl = $item_no[$i]; $Quantity_tbl = number_format(str_replace(",", "", $Quantity[$i]), 2); $Item_Cost_tbl = number_format(str_replace(",", "", $Item_Cost[$i]), 2); $Total_Cost_tbl = number_format(str_replace(",", "", $Total_Cost[$i]), 2); $Vendor_Name_tabl = $vendor_name[$i];$Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i];$SequenceText_tbl = $sequenceText[$i];$inhand_date_tbl = $inhand_date[$i];$ship_date_tbl = $ship_date[$i]; $Sizes_tbl = $sizes[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i];$printItemSpecifications_tbl = $printItemSpecifications[$i];$printItemDetailLines_tbl = $printItemDetailLines[$i];switch($item_no_type){case "spc":$item_tbl=$item_code[$i];break;case "item_no":$item_tbl=$item_no[$i];break;case "antera_id":$item_tbl=$productCstmId[$i];break;case "csid":$item_tbl=$inhouse_id[$i];break;}$Waive_Proof=$waive[$i];}else{$Quantity_tbl="";$Item_Cost_tbl="";$Total_Cost_tbl="";$Vendor_Name_tabl="";$printItemSpecifications_tbl="";$printItemDetailLines_tbl="";$Waive_Proof="";$inhand_date_tbl="";} ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>">
			<td style="padding:5px;width: 12%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $item_tbl; ?></td>
			<td style="padding:5px;width: 43%;text-align:left;font-size:12.5px;"><?php echo $itemName_tbl; ?></td>
			<td style="padding:5px;width: 15%;text-align:right;font-size:12.5px;"><?php echo $Quantity_tbl; ?>&nbsp;</td>
			<td style="padding:5px;width: 15%;text-align:right;font-size:12.5px;"><?php echo $Item_Cost_tbl; ?></td>
			<td style="padding:5px;width: 15%;text-align: right;font-size:12.5px;"><?php echo $Total_Cost_tbl; ?>&nbsp;&nbsp;</td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>" id="showWaiveProof_<? echo $i;?>">
			<td colspan="5"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;">Customer has waived the proof for this item</td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>"  id="showDescription_<? echo $i;?>">
			<td colspan="1"  valign="top" style="padding:2px 2px 2px 5px;width: 12%;text-align:left;font-size:12.5px;font-weight:bold;">Description</td>
			<td colspan="4"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $Supplier_instruction_tbl; ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>"  id="showArt_<? echo $i;?>">
			<td colspan="1"  valign="top" style="padding:2px 2px 2px 5px;width: 12%;text-align:left;font-size:12.5px;font-weight:bold;">Art Instruction</td>
			<td colspan="4"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $other_tbl; ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>"  id="showSize_<? echo $i;?>">
			<td colspan="1"  valign="top" style="padding:2px 2px 2px 5px;width: 12%;text-align:left;font-size:12.5px;font-weight:bold;">Size</td>
			<td colspan="4"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $Sizes_tbl; ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>"  id="showColor_<? echo $i;?>">
			<td colspan="1"  valign="top" style="padding:2px 2px 2px 5px;width: 12%;text-align:left;font-size:12.5px;font-weight:bold;">Color</td>
			<td colspan="4"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $color_size_tbl; ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>"  id="showShipDate_<? echo $i;?>">
			<td colspan="1"  valign="top" style="padding:2px 2px 2px 5px;width: 12%;text-align:left;font-size:12.5px;font-weight:bold;">Ship Date</td>
			<td colspan="4"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $ship_date_tbl; ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>"  id="showInHandDate_<? echo $i;?>">
			<td colspan="1"  valign="top" style="padding:2px 2px 2px 5px;width: 12%;text-align:left;font-size:12.5px;font-weight:bold;">In Hand Date</td>
			<td colspan="4"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $inhand_date_tbl; ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>"  id="showSequence_<? echo $i;?>">
			<td colspan="1"  valign="top" style="padding:2px 2px 2px 5px;width: 12%;text-align:left;font-size:12.5px;font-weight:bold;">Sequence</td>
			<td colspan="4"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><?php echo $SequenceText_tbl; ?></td>
		</tr>
		<tr class="<?php if($printItemSpecifications_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="5" style="<?php if($printItemSpecifications_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemSpecifications_tbl; ?></td>
		</tr>
		<tr class="<?php if($printItemDetailLines_tbl==''){ ?>RowHide<?php }?>">
			<td colspan="5" style="<?php if($printItemDetailLines_tbl==''){ ?>padding:0px;<?php }else{?>padding:5px;<?php } ?> text-align: left;"><?php echo $printItemDetailLines_tbl; ?></td>
		</tr>
		<tr style="display:none">
			<td colspan="5" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php if(count($lineItemsApparelDDVendorArray[$i])>0){for ($va = 1; $va <= count($lineItemsApparelDDVendorArray[$i]); $va++) { $Vendor_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Supplier"]; $Vendor_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_supplier_No"]; $Item_No_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_NO"]; $Item_Name_tbl = $lineItemsApparelDDVendorArray[$i][$va]["d_Item_Name"]; ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>">
			<td colspan="5" style="padding:5px;border: none; border-spacing: 0px;text-align: left;font-size:13.5px;"><? echo $Item_No_tbl; ?> - Product will be received from <?php echo $Vendor_tbl; ?>
			<table cellpadding="0" cellspacing="0" style="border-collapse: collapse;border: 0px solid black;width: 100%;">
				<tbody>
					<tr>
						<th colspan="8" style="width: 25%;text-align: left;padding:5px;"><span style="font-size:13.5px;">Decoration</span></th>
					</tr>
					<tr style="background-color:#e6e6e6;height:20px;">
						<th style="padding:2px;width: 11%;text-align: left;font-size:12.5px;font-weight:bold;">Logo Imprint</th>
						<th style="padding:2px;width: 12%;text-align: left;font-size:12.5px;font-weight:bold;">Logo Location</th>
						<th style="padding:2px;width: 9%;text-align: right;font-size:12.5px;font-weight:bold;">Logo Size&nbsp;</th>
						<th style="padding:2px;width: 8%;text-align: right;font-size:12.5px;font-weight:bold;">Qty&nbsp;</th>
						<th style="padding:2px;width: 10%;text-align: left;font-size:12.5px;font-weight:bold;">&nbsp;Size</th>
						<th style="padding:2px;width: 15%;text-align: left;font-size:12.5px;font-weight:bold;">Color</th>
						<th style="padding:2px;width: 15%;text-align: left;font-size:12.5px;font-weight:bold;">Color</th>
						<th style="padding:2px;width: 20%;text-align: left;font-size:12.5px;font-weight:bold;">Description</th>
					</tr>
					<tr style="display:none">
						<td colspan="8" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php if(count($lineItemsDetailLinesArray[$i][$va])>0){$ddrowBg = 0; for ($dd = 1; $dd <= count($lineItemsDetailLinesArray[$i][$va]); $dd++) {$ddrowBg++; $Apparel_Size_tbl = $lineItemsDetailLinesArray[$i][$va][$dd]["d_ApparelItemSize"]; $Apparel_Color_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["d_ApparelItemColor"]; $Apparel_Qty_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["d_Quantity"]; $DD_Imprint_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Imprints"]; $DD_Location_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Location"]; $DD_Size_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Size"]; $DD_Description_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Description"]; $DD_Color_tbl= $lineItemsDetailLinesArray[$i][$va][$dd]["Decorator_Color"]; ?></td>
					</tr>
					<tr class="ddRowBg<?php echo (($ddrowBg % 2==0)?'2':'1'); ?>">
						<td style="padding:2px;width: 11%;text-align: left;font-size:12.5px;"><?php echo $DD_Imprint_tbl; ?></td>
						<td style="padding:2px;width: 12%;text-align: left;font-size:12.5px;"><?php echo $DD_Location_tbl; ?></td>
						<td style="padding:2px;width: 9%;text-align: right;font-size:12.5px;"><?php echo $DD_Size_tbl; ?>&nbsp;</td>
						<td style="padding:2px;width: 8%;text-align: right;font-size:12.5px;"><?php echo $Apparel_Qty_tbl; ?>&nbsp;</td>
						<td style="padding:2px;width: 10%;text-align: left;font-size:12.5px;">&nbsp;<?php echo $Apparel_Size_tbl; ?></td>
						<td style="padding:2px;width: 15%;text-align: left;font-size:12.5px;"><?php echo $Apparel_Color_tbl; ?></td>
						<td style="padding:2px;width: 15%;text-align: left;font-size:12.5px;"><?php echo $DD_Color_tbl; ?></td>
						<td style="padding:2px;width: 20%;text-align: left;font-size:12.5px;"><?php echo $DD_Description_tbl; ?></td>
					</tr>
					<tr style="display:none">
						<td colspan="8" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php }} ?></td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr style="display:none">
			<td colspan="5" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php }} ?></td>
		</tr>
		<tr style="display: none">
			<td  colspan="5" style="border: none; border-spacing: 0px 0px;padding: 0;visibility: hidden"><?php for ($ac = 0; $ac < count($lineItemsAdditnalChargesArray[$i]); $ac++) {if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;} $item_tbl = $item_no[$i]; $Quantity_tbl = number_format(str_replace(",", "", $Quantity[$i]), 2); $Item_Cost_tbl = number_format(str_replace(",", "", $Item_Cost[$i]), 2); $Total_Cost_tbl = number_format(str_replace(",", "", $Total_Cost[$i]), 2); $Description_tbl = $Description[$i]; $Supplier_instruction_tbl = $Supplier_instruction[$i]; $other_tbl = $other[$i]; $color_size_tbl = $color_size[$i]; $ship_date_tbl = $ship_date[$i]; $cust_price_line = number_format((float)$cust_price[$i], 2); $Per_tbl = $Per[$i]; $final_total_cost_vendor += $lineItemsAdditnalChargesArray[$i][$ac]["CostSublineCharge"];$ItemNameSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemNameSublineCharge"];$ItemCodeSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["ItemCodeSublineCharge"];$DescSublineCharge=$lineItemsAdditnalChargesArray[$i][$ac]["DescSublineCharge"];$PriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["PriceSublineCharge"], 2);$CostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["CostSublineCharge"], 2);$QtySublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["QtySublineCharge"], 2);$BaseCostSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BaseCostSublineCharge"], 2);$BasePriceSublineCharge=number_format((float)$lineItemsAdditnalChargesArray[$i][$ac]["BasePriceSublineCharge"], 2);if($lineItemsAdditnalChargesArray[$i][$ac]["showSublineCharge"]=="1"){}else{continue;}?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>">
			<td style="padding:5px;width: 12%;text-align: left;display: table-cell;font-size:12.5px;"><?php echo $ItemCodeSublineCharge; ?></td>
			<td style="padding:5px;width: 43%;text-align: left;display: table-cell;font-size:12.5px;"><?php echo $DescSublineCharge; ?></td>
			<td style="padding:5px;width: 15%;text-align: right;font-size:12.5px;"><?php echo $QtySublineCharge; ?>&nbsp;</td>
			<td style="padding:5px;width: 15%;text-align: right;font-size:12.5px;"><?php echo $BaseCostSublineCharge; ?></td>
			<td style="padding:5px;width: 15%;text-align: right;font-size:12.5px;"><?php echo $CostSublineCharge; ?>&nbsp;&nbsp;</td>
		</tr>
		<tr style="display: none">
			<td colspan="5" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php } ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>" id="showSplitShip_<? echo $i;?>">
			<td colspan="5"  valign="top" style="padding:2px 5px 2px 5px;width: 88%;text-align:left;display: table-cell;font-size:12.5px;"><br><br><b>Ship to Multiple Locations Listed For </b><?php echo $item_tbl; ?><br><br>
			<table cellpadding="0" cellspacing="0" style="border-collapse: collapse;border: 0px solid black;width: 100%;">
				<tbody>
					<tr style="background-color:#e6e6e6;height:20px;">
						<th style="padding:2px;width: 20%;text-align: left;font-size:12.5px;font-weight:bold;">Company Name</th>
						<th style="padding:2px;width: 20%;text-align: left;font-size:12.5px;font-weight:bold;">Delivery Contact</th>
						<th style="padding:2px;width: 20%;text-align: left;font-size:12.5px;font-weight:bold;">Location Name&nbsp;</th>
						<th style="padding:2px;width: 5%;text-align: left;font-size:12.5px;font-weight:bold;">Qty&nbsp;</th>
						<th style="padding:2px;width: 35%;text-align: left;font-size:12.5px;font-weight:bold;">Note&nbsp;</th>
					</tr>
					<tr style="display:none">
						<td colspan="4" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php for ($ac = 0; $ac < count($lineItemsSplitShipArray[$i]); $ac++) { ?></td>
					</tr>
					<tr style="background-color:#FFFFFF;height:20px;">
						<td style="padding:2px;width: 20%;text-align: left;font-size:12.5px;" valign="top"><?php echo $lineItemsSplitShipArray[$i][$ac]['companyname'];?><?php echo $lineItemsSplitShipArray[$i][$ac]['address'];?></td>
						<td style="padding:2px;width: 20%;text-align: left;font-size:12.5px;" valign="top"><?php echo $lineItemsSplitShipArray[$i][$ac]['deliverycontact'];?></td>
						<td style="padding:2px;width: 20%;text-align: left;font-size:12.5px;" valign="top"><?php echo $lineItemsSplitShipArray[$i][$ac]['locationname'];?></td>
						<td style="padding:2px;width: 5%;text-align: left;font-size:12.5px;" valign="top"><?php echo $lineItemsSplitShipArray[$i][$ac]['qty'];?></td>
						<td style="padding:2px;width: 35%;text-align: left;font-size:12.5px;" valign="top"><?php echo $lineItemsSplitShipArray[$i][$ac]['notes'];?></td>
					</tr>
					<tr style="display:none">
						<td colspan="4" style="border: none; border-spacing: 0px; padding: 0px; visibility: hidden; text-align: right;"><?php } ?></td>
					</tr>
				</tbody>
			</table>
			<br><br>
			</td>
		</tr>
		<tr style="display: none">
			<td colspan="5" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden"><?php $rowBg++;} ?></td>
		</tr>
		<tr class="RowBg<?php echo (($rowBg % 2==0)?'1':'2'); ?>">
			<td colspan="5" style="padding:5px;border: none;border-spacing: 0px 0px;padding: 0;height: 0; overflow: hidden; font-size: 0;visibility: hidden">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="5" style="padding:5px;text-align: left;font-size:13.5px;font-weight:bold;"><br><br>Special Notes</td>
		</tr>
		<tr>
			<td colspan="4" style="padding:5px;text-align: left;font-size:12.5px;width: 85%;"><?php echo $vendorPONotes; ?></td>
		    <td colspan="1" style="padding:5px;width: 15%;">&nbsp;</td>
		</tr>
		<tr style="height:20px;">
			<td colspan="3" style="padding:5px;">&nbsp;</td>
			<td colspan="1" style="padding:5px;text-align: right;vertical-align: middle;font-size:13.5px;background-color:#e6e6e6;">Total</td>
			<td colspan="1" style="padding:5px;text-align: right; vertical-align: middle;font-size:13.5px;background-color:#e6e6e6;">$<?php echo number_format(str_replace(",", "", $final_total_cost_vendor), 2); ?>&nbsp;&nbsp;</td>
		</tr>
	</tbody>
</table>

<p style="padding:10px;font-size:12.5px;text-align:center;"><?php echo $po_term; ?></p>
</page>