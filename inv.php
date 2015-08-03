
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="had1.css">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address contenteditable>
				<p>DishDash</p>
				<p>190 S Murphy Ave,<br>Sunnyvale, CA  94086</p>
				<p>(408) 774-1889</p>
			</address>
			<span><img alt="" src="ddlogo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p>Annonymous Person<br>N/A</p>
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>10001</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>August 1, 2015</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due</span></th>
					<td><span id="prefix" contenteditable>$</span><span>100.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Description</span></th>
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable>Mixed Grill Buffet</span></td>
						<td><span contenteditable>4</span></td>
						<td><span data-prefix>$</span><span>100.00</span></td>
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span>100.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><span data-prefix>$</span><span>120.00</span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span contenteditable>Additional Notes</span></h1>
			<div contenteditable>
				<p>Taxes may apply.</p>
			</div>
		</aside>
	</body>
</html>